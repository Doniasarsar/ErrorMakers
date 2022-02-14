<?php

namespace App\Controller;

use App\Form\UtilisateursType;
use App\Repository\UtilisateursRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index(): Response
    {
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    /**
     * @return Reponse
     * @Route("/dashboard/listU", name="userlist")
     */
    public function afficher(UtilisateursRepository $rep){
        $users=$rep->findAll();
        return $this->render('/dashboard/listusers.html.twig', [
            'users' => $users,
        ]);
    }
     /**
     * @return Reponse
     * @Route("/dashboard/listU/delete/{id}", name="userdelete")
     */

    public function Delete($id,UtilisateursRepository $rep){
        $user=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();

        return $this->redirectToRoute('userlist');
    }
}
