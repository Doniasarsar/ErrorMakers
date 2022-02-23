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
    public function index(SessionInterface $session, ProduitRepository $produitrep): Response
    {
        $panier = $session->get("panier",[]);
        
        // on fabrique les données 

        $dataPanier = []; 
        $total = 0; 

        foreach ($panier as $id => $quantite){
            $produit = $produitrep->find($id);
            $dataPanier[] = [
                "produit" => $produit,
                "quantite" => $quantite 
            ];
        }

        foreach($dataPanier as $item)
        {
            $totalItem = $item['produit']->getPrixProduit() * $item['quantite'];
            $total += $totalItem ;
        }
        $quantitetotale = 0; 
        foreach($dataPanier as $item)
        {
            $qtlItem = $item['quantite'];
            $quantitetotale += $qtlItem ;
        }

        $produit=$produitrep->findall(); 
        return $this->render('front/home.html.twig', [
            'tab' => $produit,
            'elements' => $dataPanier,
            'total' => $total,
            'quantitetotale' => $quantitetotale
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

    
}
