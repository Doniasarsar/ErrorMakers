<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FrontController extends AbstractController
{
    /**
     * @Route("/front", name="front")
     */
    
     public function index(ProduitRepository $rep)
    {
        $produits=$rep->findAll();
        return $this->render('front/home.html.twig', [
            'controller_name' => 'FrontController',
            'tabprod' => $produits,
        ]);
    }
    /**
     * @Route("/detail/{id}", name="detail")
     */
    public function detail($id,ProduitRepository $rep)
    {
        $produits=$rep->find($id);
        return $this->render('front/detail.html.twig', [
            
            'prod' => $produits,
        ]);
    }

}
