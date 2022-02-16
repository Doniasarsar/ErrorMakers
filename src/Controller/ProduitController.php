<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProduitController extends AbstractController
{

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

     foreach ($panier as $id => $quantite){
         $produit = $rep->find($id);
         $dataPanier[] = [
             "produit" => $produit,
             "quantite" => $quantite  
         ];
     }

     foreach($dataPanier as $item)
     {
         $totalItem = $item['produit']->getPrix() * $item['quantite'];
         $total += $totalItem ;
     }

     foreach($dataPanier as $item)
     {
         $qtlItem = $item['quantite'];
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
