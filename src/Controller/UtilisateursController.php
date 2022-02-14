<?php

namespace App\Controller;

use App\Form\ActeurSType;
use App\Entity\Utilisateurs;
use App\Form\UtilisateursType;
use App\Repository\UtilisateursRepository;
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
        {
            $user->setToken(md5(uniqid()));

            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

        /*    $message=(new \Swift_Message('Activation du compte'))
            ->setFrom('mohamedskander.zouaoui@esprit.tn')
            ->setTo($user->getEmail())
            ->setBody(
                $this->renderView('email/activation.html.twig' , ['token' => $user->getToken()] 
        ),
            'text/html'
        );
        $mailer->send($message);
        */

            return $this->redirectToRoute('home');

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
        {
            $user->setToken(md5(uniqid()));

            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('home');

        }

        return $this->render('utilisateurs/addActeurS.html.twig', [
            'ActeurSForm'=>$form->createView(),
        ]);
    }
     /**
     * @Route("/utilisateurs/update/{id}",name="userupdate")
     */
    public function Update($id,UtilisateursRepository $rep,Request $request){
        
        $user=$rep->find($id);

        $form=$this->createform(UtilisateursType::class,$user);
        $form->add('Update',SubmitType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
        $em=$this->getDoctrine()->getManager();
        $em->flush();
            return $this->redirectToRoute('home');

        }return $this->render("utilisateurs/update.html.twig", [
            'userForm'=>$form->createView(),
        ]);

     }
     /**
     * @Route("/activation/{token}",name="activation")
     */
     public function activation($token, UtilisateursRepository $rep){
            $user=$rep->findOneBy(['Token'=>$token]);

            if(!$user){
                throw $this->createNotFoundException("Cet utilisateur n'existe pas");
            }
            $user->setToken(null);
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('message','Compte activé');
            return $this->redirectToRoute('home');
     }

     
}
