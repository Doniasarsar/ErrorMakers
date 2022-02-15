<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementFormType;
use App\Repository\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class EvenementController extends AbstractController
{
    /**
     * @Route("/evenement1", name="evenement1")
     */
    public function index(): Response
    {
        return $this->render('evenement/index.html.twig', [
            'controller_name' => 'EvenementController',
        ]);
    }
  

    /**
     * @Route("/evenement/add",name="event_add")
     */

    public function Add(Request $request){
        $evenement=new evenement();
        $form=$this->createform(EvenementFormType::class,$evenement);
        $form->add('ajouter',SubmitType::class);


        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
        $em=$this->getDoctrine()->getManager();
        $em->persist($evenement);
        $em->flush();
            return $this->redirectToRoute('event_add');

        }return $this->render("evenement/evenementAJOUT.html.twig", [
            'form_evenement'=>$form->createView(),
        ]);
     }

     
     /**
     * @Route("/evenement2", name="ev_aff")
     */

    function afficher(EvenementRepository $rep)
    {
         $evenement = $rep->findall();
         return $this->render('evenement/evenementAFFICHAGE.html.twig', [
             'tab' => $evenement
         ]);

    }

     /**
     * @Route("/evenement/delete/{id}", name="ev_delete")
     */

    public function Supprimer($id,EvenementRepository $rep){
        $evenement=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($evenement);
        $em->flush();

        return $this->redirectToRoute('ev_aff');
    }

     /**
     * @Route("/evenement/update/{id}",name="ev_update")
     */
    public function Update($id,EvenementRepository $rep,Request $request){
        
        $evenement=$rep->find($id);

        $form=$this->createform(EvenementFormType::class,$evenement);
        $form->add('Modifier',SubmitType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
        $em=$this->getDoctrine()->getManager();
        $em->flush();
            return $this->redirectToRoute('ev_aff');

        }return $this->render("evenement/evenementUPDATE.html.twig", [
            'form_evenement'=>$form->createView(),
        ]);

     }
}
