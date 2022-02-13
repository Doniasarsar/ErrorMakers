<?php

namespace App\Controller;


use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReclamationController extends AbstractController
{
    /**
     * @Route("/reclamation", name="reclamation")
     */
    public function index(): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }


    /**
     * @Route("/reclamation/add", name="r_add")
     */
    public function add (Request $req)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamations= new Reclamation();
        $form=$this ->createForm(ReclamationType::class,$reclamations);
        $form->add('Ajouter', SubmitType::class);
        $form->handleRequest($req);
        if($form->isSubmitted() && $form->isValid())
        {$em=$this->getDoctrine()->getManager();
            $em->persist($reclamations);
            $em->flush();
            return $this->redirectToRoute('r_list');

        }

        return $this->render('reclamation/add.html.twig', [
            'formA'=>$form->createView(),
        ]);
    }


    /**
     * @param ReclamationRepository $rep
     * @return Response
     * @Route("reclamation/list", name="r_list")
     */
    public function afficher(ReclamationRepository $rep): Response
    {
        $reclamations=$rep->findAll();
        return $this->render('reclamation/listReclamation.html.twig', [
            'tab' => $reclamations,
        ]);
    }

}


