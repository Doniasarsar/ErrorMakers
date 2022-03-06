<?php

namespace App\Controller;

use DateTime;
use App\Entity\Note;
use App\Form\NoteType;
use DateTimeImmutable;
use App\Entity\Evenement;
use App\Entity\Commentaires;
use App\Form\CommentairesType;
use App\Form\EvenementFormType;
use App\Repository\NoteRepository;
use App\Services\cart\CartService;
use App\Repository\DemandesRepository;
use App\Repository\EvenementRepository;
use App\Repository\CommentairesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;






class EvenementController extends AbstractController
{
   
  /**
     * @Route("admin/evenement/aff", name="ev_aff")
     */

    function afficher(EvenementRepository $rep,DemandesRepository $repp)
    {
        $demandes=$repp->findAll();

         $evenement = $rep->findall();
         return $this->render('dashboard/evenement/evenementAFFICHAGE.html.twig', [
             'tab' => $evenement,
             'demandes'=>$demandes,
         ]);

    }

    /**
     * @Route("admin/evenement/add",name="event_add")
     */

    public function Add(Request $request,DemandesRepository $repp)
     {
        $demandes=$repp->findAll();

        $evenement=new evenement();
        $form=$this->createform(EvenementFormType::class,$evenement);
        $form->add('ajouter',SubmitType::class);

        
      
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
        
          $file = $form->get('affiche')->getData();
             $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads_directory'),$filename);
            $evenement->setaffiche($filename); 
        
            $em=$this->getDoctrine()->getManager();
        $em->persist($evenement);
        $em->flush();
            return $this->redirectToRoute('ev_aff');

         }
        return $this->render("dashboard/evenement/evenementAJOUT.html.twig", [
            'form_evenement'=>$form->createView(),
            'demandes'=>$evenement,
        ]);
     }

     
     

     /**
     * @Route("admin/evenement/delete/{id}", name="ev_delete")
     */

    public function Supprimer($id,EvenementRepository $rep){
        $evenement=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($evenement);
        $em->flush();

        return $this->redirectToRoute('ev_aff');
    }

     /**
     * @Route("admin/evenement/update/{id}",name="ev_update")
     */
    public function Update($id,EvenementRepository $rep,Request $request,DemandesRepository $repp){
        $demandes=$repp->findAll();
        
        $evenement=$rep->find($id);

        $form=$this->createform(EvenementFormType::class,$evenement);
        $form->add('Modifier',SubmitType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
        $file = $form->get('affiche')->getData();
        $filename = md5(uniqid()).'.'.$file->guessExtension();
        $file->move($this->getParameter('uploads_directory'),$filename);
        $evenement->setaffiche($filename); 
        $em=$this->getDoctrine()->getManager();
        $em->persist($evenement);
        $em->flush();
            return $this->redirectToRoute('ev_aff');

        }return $this->render("dashboard/evenement/evenementUPDATE.html.twig", [
            'form_evenement'=>$form->createView(),
            'demandes'=>$evenement,
        ]);

     }

     
     /**
     * @Route("evenement/detail/{id}", name="ev_front_detail")
     */
    function detail($id,EvenementRepository $rep,Request $request,CommentairesRepository $repp,CartService $cartService,NoteRepository $noteRepository)
    {   
        $dataPanier = $cartService->getFullCart();  
        $total = $cartService->getTotal();
        
        $evenement = $rep->find($id);

        $comments = $repp->findByEeven($id);
            
        //// initialisation note    
        $note = new Note();      
        $noteform = $this->createForm(NoteType::class,$note);
        $noteform->add('ajouter',SubmitType::class);
        $noteform->handleRequest($request);

        if ($noteform->isSubmitted() && $noteform->isValid()) {
           
            $note->setEvenement($evenement);
            $em=$this->getDoctrine()->getManager();
            
            $em->persist($note);
            $em->flush();
            
            
            

            return $this->redirectToRoute('ev_front_detail', ['id' => $evenement->getId()]);
        }

        $Commentaires = new Commentaires;
        $CommentairesForm=$this ->createForm(CommentairesType::class, $Commentaires);
        $CommentairesForm->handleRequest($request);
        if($CommentairesForm->isSubmitted() && $CommentairesForm->isValid()){
            $Commentaires->setCreatedAt(new DateTimeImmutable());
            $Commentaires->setAnnonces($evenement);
            
            $parent_id = $CommentairesForm->get("parent")->getData();
              // On va chercher le commentaire correspondant
              $em = $this->getDoctrine()->getManager();

              if($parent != null){
                  $parent = $em->getRepository(Commentaires::class)->find($parent);
              }
  
              // On définit le parent
              $Commentaires->setParent($parent ?? null);
              $em->persist($Commentaires);
              $em->flush();
  
              $this->addFlash('message', 'Votre Commentaire a bien été envoyé');
              return $this->redirectToRoute('ev_front_detail', ['id' => $evenement->getId()]);
          }
        
         
          return $this->render('blog/evenementsfrontdetail.html.twig', [
                'tab' => $evenement,
              'Commentaires_Form' => $CommentairesForm->createView(),
              'comments'=>$comments,
              'elements' => $dataPanier,
              'total' => $total,
              'noteform' => $noteform->createView(),
              'Notes'=> $noteRepository->findByNom($evenement->getNom()),
            
          ]);
    
    }
     
   
}

