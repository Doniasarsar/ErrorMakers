<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Services\cart\CartService;
use App\Repository\ProduitRepository;
use App\Repository\EvenementRepository;
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
    public function index(CartService $cartService,ProduitRepository $produitrep): Response
    {
        
        $dataPanier = $cartService->getFullCart();  
        $total = $cartService->getTotal();

       

        $produit=$produitrep->findall(); 
        return $this->render('front/home.html.twig', [
            'tab' => $produit,
            'elements' => $dataPanier,
            'total' => $total
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
    
    return $this->redirecttoRoute("home");
    }

     /**
     * @Route("/eventfront", name="ev_front_aff")
     */

    function afficherevenement(EvenementRepository $rep)
    {
         $evenement = $rep->findall();
         return $this->render('blog/evenementsfront.html.twig', [
             'tab' => $evenement
         ]);

    }

   

   

    
}
