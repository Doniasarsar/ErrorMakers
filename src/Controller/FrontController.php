<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use App\Repository\UtilisateursRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FrontController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('front/home.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
    /**
     * @Route("/utilisateurs/update/{id}",name="userupdate")
     */
    public function Update($id,UtilisateursRepository $rep,Request $request){
        
        $user=$rep->find($id);

        $form=$this->createform(UtilisateursType::class,$user);
        $form->add('Update',SubmitType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
        $em=$this->getDoctrine()->getManager();
        $em->flush();
            return $this->redirectToRoute('home');

        }return $this->render("utilisateurs/update.html.twig", [
            'userForm'=>$form->createView(),
            'user'=>$user,
        ]);

     }
     /**
     * @Route("/produit", name="produit")
     */
    public function afficher(ProduitRepository $rep, SessionInterface $session)
    {

    $panier = $session->get("panier",[]);
     // on fabrique les données 

     $dataPanier = []; 
     $total = 0; 
     $quantitetotale = 0; 

     foreach ($panier as $id => $quantiteProduit){
         $produit = $rep->find($id);
         $dataPanier[] = [
             "produit" => $produit,
             "quantiteProduit" => $quantiteProduit  
         ];
     }

     foreach($dataPanier as $item)
     {
         $totalItem = $item['produit']->getPrixProduit() * $item['quantiteProduit'];
         $total += $totalItem ;
     }

     foreach($dataPanier as $item)
     {
         $qtlItem = $item['quantiteProduit'];
         $quantitetotale += $qtlItem ;
     }



    $produit=$rep->findall(); 
    return $this->render('shop.html.twig', [
        'tab' => $produit,
        'elements' => $dataPanier,
         'total' => $total,
         'quantitetotale' => $quantitetotale
    ]);


    }

     /**
     * @Route("/delete1/{id}", name="delete1")
     */
    public function delete1(Produit $produit, SessionInterface $session)
    {
       // On récupère le panier actuel
    $panier = $session->get("panier", []);
    $id= $produit->getId();

    if(!empty($panier[$id])){
      
        unset($panier[$id]);
    }
    
    // on sauvgarde dans la session
    $session->set("panier", $panier);
    
    return $this->redirecttoRoute("produit");
    }
    
}
