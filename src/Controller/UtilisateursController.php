<?php

namespace App\Controller;

use App\Form\ActeurSType;
use App\Entity\Utilisateurs;
use App\Form\UtilisateursType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UtilisateursController extends AbstractController
{
    /**
     * @Route("/utilisateurs", name="utilisateurs")
     */
    public function index(): Response
    {
        return $this->render('utilisateurs/index.html.twig', [
            'controller_name' => 'UtilisateursController',
        ]);
    }
      /**
     * @Route("/utilisateurs/add",name="userAdd")
     */

    public function AddUser(Request $request){
        $em = $this->getDoctrine()->getManager();
        $user= new Utilisateurs();
        $form=$this ->createForm(UtilisateursType::class,$user);
        $form->add('Register', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {$em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('front');

        }

        return $this->render('utilisateurs/addUser.html.twig', [
            'userForm'=>$form->createView(),
        ]);
    }

    /**
     * @Route("/utilisateurs/addActeur",name="acteurSAdd")
     */

    public function AddActeurS(Request $request){
        $em = $this->getDoctrine()->getManager();
        $user= new Utilisateurs();
        $form=$this ->createForm(ActeurSType::class,$user);
        $form->add('Register', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {$em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('front');

        }

        return $this->render('utilisateurs/addActeurS.html.twig', [
            'ActeurSForm'=>$form->createView(),
        ]);
    }
}
