<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProduitController extends AbstractController
{

    /**
     * @Route("/produit", name="produit")
     */
    public function afficher(ProduitRepository $rep)
    {
    $produit=$rep->findall(); 
    return $this->render('shop.html.twig', [
        'tab' => $produit,
    ]);


    }
}
