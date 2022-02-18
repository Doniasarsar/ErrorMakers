<?php

namespace App\Controller;

use App\Entity\Livraison;
use App\Form\LivraisonType;
use App\Repository\LivraisonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class LivraisonControlleur extends AbstractController
{
    /**
     * @Route("/livraison/controlleur", name="livraison_controlleur")
     */
    public function index(): Response
    {
        return $this->render('livraison/index.html.twig', [
            'controller_name' => 'LivraisonControlleur',
        ]);
    }
     /**
    * @param LivraisonRepository $rep
    * @return Reponse
    * @Route("/livraison/list", name="r_list")
    */
   public function afficher(LivraisonRepository $rep){
       $livraisons=$rep->findAll();
       return $this->render('livraison/listlivraison.html.twig', [
           'tab' => $livraisons,
       ]);
   }
     /**
     * @param $id
     * @param LivraisonRepository $rep
     * @return Reponse
     * @Route("/livraison/delete/{id}", name="r_delete")
     */

    public function Supprimer($id,LivraisonRepository $rep){
        $livraison=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($livraison);
        $em->flush();

        return $this->redirectToRoute('r_list');
    }
    /**
     * @Route("/livraison/add",name="r_add")
     */

    public function Add(Request $request){
        $livraison=new Livraison();
        $form=$this->createform(LivraisonType::class,$livraison);
        $form->add('Ajouter',SubmitType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
        $em=$this->getDoctrine()->getManager();
        $em->persist($livraison);
        $em->flush();
            return $this->redirectToRoute('r_list');

        }return $this->render("livraison/add.html.twig", [
            'Fclass'=>$form->createView(),
        ]);
     }
      /**
     * @Route("/livraison/update/{id}",name="r_update")
     */
    public function Update($id,LivraisonRepository $rep,Request $request){
        
        $livraison=$rep->find($id);

        $form=$this->createform(LivraisonType::class,$livraison);
        $form->add('Modifier',SubmitType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
        $em=$this->getDoctrine()->getManager();
        $em->flush();
            return $this->redirectToRoute('r_list');

        }return $this->render("livraison/update.html.twig", [
            'Fclass'=>$form->createView(),
        ]);

     }

}
