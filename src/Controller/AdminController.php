<?php

namespace App\Controller;

use App\Repository\UtilisateursRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    /**
     * @return Reponse
     * @Route("/dashboard/listU", name="u_list")
     */
    public function afficher(UtilisateursRepository $rep){
        $users=$rep->findAll();
        return $this->render('/admin/listusers.html.twig', [
            'users' => $users,
        ]);
    }
}
