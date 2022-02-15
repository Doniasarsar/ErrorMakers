<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Form\ReponseType;
use App\Entity\Reclamation;
use App\Repository\ReclamationRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ReponseController extends AbstractController
{
    /**
     * @Route("/reponse", name="reponse")
     */
    public function index(): Response
    {
        return $this->render('reponse/index.html.twig', [
            'controller_name' => 'ReponseController',
        ]);
    }

      /**
     * @param ReclamationRepository $rep
     * @return Response
     * @Route("reponse/recList", name="list_reclamation")
     */
    public function afficher(ReclamationRepository $rep): Response
    {
        $reclamations=$rep->findAll();
        return $this->render('reponse/listReclamationAdmin.html.twig', [
            'tab' => $reclamations,
        ]);
    }



    /**
     * @Route("/reponse/add/{id}", name="rep_add")
     */
    public function addResponse (Reclamation $recl,Reclamation $subj,Request $req, ReclamationRepository $rep, $id,SessionInterface $session)
    {   
        $reclamation = $session->get("reclamation", $recl->getIdCommande());
        $subject = $session->get("subj", $subj->getSubject());


        $idReclamation=$rep->find($id); 
        $reponses= new Reponse();
        $form=$this ->createForm(ReponseType::class,$reponses);
        $form->add('Add', SubmitType::class);
        $form->handleRequest($req);
        if($form->isSubmitted() && $form->isValid())
        {$em=$this->getDoctrine()->getManager();
            $em->persist($reponses);
            $em->flush();
            return $this->redirectToRoute('rep_list');

        }

        return $this->render('reponse/addReponse.html.twig', [
            'formA'=>$form->createView(), 
            'reclamation' => $reclamation,
            'subject' => $subject
            
        ]);
    }

     /**
     * @return Reponse
     * @Route("/dashboard/listU/delete/{id}", name="userdelete")
     */

    /*public function Delete($id,Repository $rep){
        $user=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();

        return $this->redirectToRoute('userlist');
    }*/

}
