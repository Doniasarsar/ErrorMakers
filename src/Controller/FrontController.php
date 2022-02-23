<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use App\Repository\BoutiqueRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FrontController extends AbstractController
{
    /**
     * @Route("/front", name="front")
     */
    
     public function index(ProduitRepository $rep, BoutiqueRepository $repp)
    {
        $produits=$rep->findAll();
        $boutiques=$repp->findAll();
        return $this->render('front/home.html.twig', [
            'controller_name' => 'FrontController',
            'tabprod' => $produits,
            'tabbout' => $boutiques,
        ]);
        
    }
     /**
     * @Route("/details/{id}", name="details")
     */
    public function details($id,ProduitRepository $rep, BoutiqueRepository $repp)
    {
        $produits=$rep->findByBoutique($id);
        $boutiques=$repp->find($id);
        return $this->render('front/details.html.twig', [
             'prod' => $produits,
            'bout' => $boutiques,
           
        ]);
    }


    


    
    /**
     * @Route("/detail/{id}", name="detail")
     */
    public function detail($id,ProduitRepository $rep,BoutiqueRepository $repp)
    {
        $produits=$rep->find($id);
        $boutiques=$repp->find($id);

        return $this->render('front/detail.html.twig', [
            
            'prod' => $produits,
            'bout' => $boutiques,

        ]);
    }

}
