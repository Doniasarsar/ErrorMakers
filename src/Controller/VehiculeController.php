<?php

namespace App\Controller;

use App\Form\MotoType;
use App\Entity\Vehicule;
use App\Form\CamionType;
use App\Form\VoitureType;
use App\Form\VehiculeType;
use App\Repository\VehiculeRepository;
use App\Repository\UtilisateursRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VehiculeController extends AbstractController
{
    /**
     * @Route("/vehicule", name="vehicule")
     */
    public function index(): Response
    {
        return $this->render('vehicule/index.html.twig', [
            'controller_name' => 'VehiculeController',
        ]);
    }
     /**
    * @param VehiculeRepository $rep
    * @return Reponse
    * @Route("/vehicule/list", name="veh_list")
    */
   public function afficher(VehiculeRepository $rep){
    $vehicules=$rep->findAll();
    return $this->render('vehicule/listvehicule.html.twig', [
        'tab' => $vehicules,
    ]);
}
  /**
  * @param $id
  * @param VehiculeRepository $rep
  * @return Reponse
  * @Route("/vehicule/delete/{id}", name="veh_delete")
  */

 public function Supprimer($id,VehiculeRepository $rep){
     $vehicule=$rep->find($id);
     $em=$this->getDoctrine()->getManager();
     $em->remove($vehicule);
     $em->flush();

     return $this->redirectToRoute('veh_list');
 }

 /**
  * @Route("/voiture/add",name="voi_add")
  */

 public function AddVoiture(Request $request, UtilisateursRepository $rep){
     $vehicule=new Vehicule();
     $form=$this->createform(VoitureType::class,$vehicule);
     $form->add('Ajouter',SubmitType::class);

     $form->handleRequest($request);

     if($form->isSubmitted() && $form->isValid()){
       
        $vehicule->setEtatVehicule("Disponible");
     $em=$this->getDoctrine()->getManager();
     $em->persist($vehicule);
     $em->flush();
         return $this->redirectToRoute('veh_list');

     }return $this->render("vehicule/addVoiture.html.twig", [
         'FVoiture'=>$form->createView(),
     ]);
  }
   /**
  * @Route("/voiture/update/{id}",name="voi_update")
  */
 public function Update($id,VehiculeRepository $rep,Request $request){
     
     $vehicule=$rep->find($id);

     $form=$this->createform(VoitureType::class,$vehicule);
     $form->add('Modifier',SubmitType::class);

     $form->handleRequest($request);

     if($form->isSubmitted() && $form->isValid()){
     $em=$this->getDoctrine()->getManager();
     $em->flush();
         return $this->redirectToRoute('veh_list');

     }return $this->render("vehicule/updateVoiture.html.twig", [
         'FVoiture'=>$form->createView(),
     ]);

  }
  /**
  * @Route("/moto/add",name="mot_add")
  */

 public function AddMoto(Request $request, UtilisateursRepository $rep){
    $vehicule=new Vehicule();
    $form=$this->createform(MotoType::class,$vehicule);
    $form->add('Ajouter',SubmitType::class);

    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
       
        $vehicule->setEtatVehicule("Disponible");
    $em=$this->getDoctrine()->getManager();
    $em->persist($vehicule);
    $em->flush();
        return $this->redirectToRoute('veh_list');

    }return $this->render("vehicule/addMoto.html.twig", [
        'FMoto'=>$form->createView(),
    ]);
 }
  /**
 * @Route("/moto/update/{id}",name="mot_update")
 */
public function UpdateMoto($id,VehiculeRepository $rep,Request $request){
    
    $vehicule=$rep->find($id);

    $form=$this->createform(MotoType::class,$vehicule);
    $form->add('Modifier',SubmitType::class);

    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
    $em=$this->getDoctrine()->getManager();
    $em->flush();
        return $this->redirectToRoute('veh_list');

    }return $this->render("vehicule/updateMoto.html.twig", [
        'FMoto'=>$form->createView(),
    ]);

 }
 /**
  * @Route("/camion/add",name="cam_add")
  */
 public function AddCamion(Request $request, UtilisateursRepository $rep){
    $vehicule=new Vehicule();
    $form=$this->createform(CamionType::class,$vehicule);
    $form->add('Ajouter',SubmitType::class);

    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
       
        $vehicule->setEtatVehicule("Disponible");
    $em=$this->getDoctrine()->getManager();
    $em->persist($vehicule);
    $em->flush();
        return $this->redirectToRoute('veh_list');

    }return $this->render("vehicule/addCamion.html.twig", [
        'FCamion'=>$form->createView(),
    ]);
 }
  /**
 * @Route("/camion/update/{id}",name="cam_update")
 */
public function UpdateCamion($id,VehiculeRepository $rep,Request $request){
    
    $vehicule=$rep->find($id);

    $form=$this->createform(CamionType::class,$vehicule);
    $form->add('Modifier',SubmitType::class);

    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
    $em=$this->getDoctrine()->getManager();
    $em->flush();
        return $this->redirectToRoute('veh_list');

    }return $this->render("vehicule/updateCamion.html.twig", [
        'FCamion'=>$form->createView(),
    ]);

 }
}
