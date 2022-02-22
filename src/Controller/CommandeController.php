<?php

namespace App\Controller;

use App\Repository\CommandeRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommandeController extends AbstractController
{
    /**
     * @Route("/commande", name="commande")
     */
    public function index(): Response
    {
        return $this->render('commande/index.html.twig', [
            'controller_name' => 'CommandeController',
        ]);
    }
    /**
     * @Route("/commandes", name="Commandes")
     */
    public function afficher(CommandeRepository $rep)
    {
    $Commandes=$rep->findall(); 
    return $this->render('Commande/list.html.twig', [
        'tab' => $Commandes,
    ]);


    }
}
