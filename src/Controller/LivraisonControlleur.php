<?php

namespace App\Controller;

use App\Entity\Livraison;
use App\Form\LivraisonType;
use App\Repository\CommandeRepository;
use App\Repository\DemandesRepository;
use App\Repository\VehiculeRepository;
use App\Repository\LivraisonRepository;
use App\Repository\UtilisateursRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LivraisonControlleur extends AbstractController
{
    /**
     * @Route("admin/livraison/controlleur", name="livraison_controlleur")
     */
    public function index(DemandesRepository $repp): Response
    {
        $demandes=$repp->findAll();

        return $this->render('livraison/index.html.twig', [
            'controller_name' => 'LivraisonControlleur',
            'demandes'=>$demandes,
        ]);
    }
     /**
    * @param LivraisonRepository $rep
    * @return Reponse
    * @Route("admin/livraison/list", name="livraison_list")
    */
   public function afficher(LivraisonRepository $rep,DemandesRepository $repp){
        $demandes=$repp->findAll();

       $livraisons=$rep->findAll();
       return $this->render('dashboard/livraison/listlivraison.html.twig', [
           'tab' => $livraisons,
           'demandes'=>$demandes,
       ]);
   }
     /**
     * @param $id
     * @param LivraisonRepository $rep
     * @return Reponse
     * @Route("admin/livraison/delete/{id}", name="livraison_delete")
     */

    public function Supprimer($id,LivraisonRepository $rep,UtilisateursRepository $repp,VehiculeRepository $reppp){
        $livraison=$rep->find($id);
        
        $em=$this->getDoctrine()->getManager();
        $em->remove($livraison);
        $user=$repp->findByEmail($livraison->getLivreur()->getEmail());
        $user->setEtat("Disponible");
        $vehicule=$reppp->find($livraison->getVehicule()->getId());
        $vehicule->setEtatVehicule("Disponible");
        $em->flush();
       

        return $this->redirectToRoute('livraison_list');
    }
    /**
     * @Route("admin/livraison/add/{id}",name="liv_add")
     */

    public function Add($id,Request $request ,UtilisateursRepository $rep,CommandeRepository $repp,VehiculeRepository $reppp,DemandesRepository $repo){
        $demandes=$repo->findAll();
        
        $livraison=new Livraison();
        $commande=$repp->find($id);

        
        
        $livraison->setEtatLivraison(1);
        $livraison->setPrixLivraison($commande->getMontant());
       

        $form=$this->createform(LivraisonType::class,$livraison);
        $form->add('Ajouter',SubmitType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            
            $vehicule=$reppp->find($livraison->getVehicule()->getId());
            $vehicule->setEtatVehicule("Non Disponible");
        $user=$rep->findByEmail($livraison->getLivreur()->getEmail());
        $user->setEtat("Non Disponible");
        $commande->setEtatCommande(1);
       
     
        
       
        $livraison->setCommande($commande);
       
        
        

        $em=$this->getDoctrine()->getManager();
        $em->persist($livraison);
        $em->flush();
            return $this->redirectToRoute('livraison_list');

        }return $this->render("dashboard/livraison/add.html.twig", [
            'Fclass'=>$form->createView(),
            'demandes'=>$demandes,
        ]);
     }
      /**
     * @Route("admin/livraison/update/{id}",name="livraison_update")
     */
    public function Update($id,LivraisonRepository $rep,Request $request,DemandesRepository $repo){
        $demandes=$repo->findAll();
        
        $livraison=$rep->find($id);

        $form=$this->createform(LivraisonType::class,$livraison);
        $form->add('Modifier',SubmitType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
        $em=$this->getDoctrine()->getManager();
        $em->flush();
            return $this->redirectToRoute('livraison_list');

        }return $this->render("dashboard/livraison/update.html.twig", [
            'Fclass'=>$form->createView(),
            'demandes'=>$demandes,
        ]);

     }

}