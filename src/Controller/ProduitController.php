<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ProduitController extends AbstractController
{
    /**
     * @Route("/produit", name="produit")
     */
    public function index(): Response
    {
        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
    /**
     * @param ProduitRepository $rep
     * @return Reponse
     * @Route("/produit/list", name="r_list")
     */
    public function afficher(ProduitRepository $rep){
        $produits=$rep->findAll();
        return $this->render('produit/listproduit.html.twig', [
            'tab' => $produits,
        ]);
    }
     /**
     * @Route("/produit/add",name="r_add")
     */

    public function add(Request $request): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class,$produit);
        $form->add('Ajouter',SubmitType::class);
        
 
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form->get('image')->getData();
            
           
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads_directory'),$filename);
            $produit->setImage($filename);
           

             $entityManager = $this->getDoctrine()->getManager();
             $entityManager->persist($produit);
             $entityManager->flush();
             return $this->redirectToRoute('r_list');
        }

        return $this->render('produit/add.html.twig', [
            'Fprod' => $form->createView(),
            
        ]);
    }

    /**
     * @Route("/produit/edit/{id}",name="update_produit")
     * Method({"GET", "POST"})
     */
    public function update($id, Request $request)
    {
        $produit = new produit();
        $produit = $this->getDoctrine()
            ->getRepository(produit::class)
            ->find($id);


        $form = $this->createformbuilder($produit)
        ->add('nomProduit',TextType::class)
        ->add('prixProduit',TextType::class)
        ->add('quantiteProduit',TextType::class)
            ->add('descProduit',TextType::class)
            ->add('image',FileType::class,[
                'mapped'=> false,
                'label'=>' Telecharger une imagee'

            ])
            ->add('Edit',SubmitType::class)

        ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('image')->getData();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads_directory'),$filename);
            $produit->setImage($filename);
             $entityManager = $this->getDoctrine()->getManager();
             $entityManager->flush();
             return $this->redirectToRoute('r_list');
         }
         return $this->render('produit/update.html.twig', [
             'Fprod' => $form->createView(),
             'prod' => $produit,



            ]);
    }

     /**
     *@Route("/produit/delete/{id}", name="r_delete")
     */

    public function Supprimer($id,ProduitRepository $rep){
        $produit=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($produit);
        $em->flush();

        return $this->redirectToRoute('r_list');
    }
}
