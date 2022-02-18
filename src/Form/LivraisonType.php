<?php

namespace App\Form;

use App\Entity\Commande;
use App\Entity\Livraison;
use App\Entity\Utilisateurs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class LivraisonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->add('etatLivraison',ChoiceType::class,[
                'choices' => [
                    "Livrée" => 0,
                    "Non Livrée"  => 1,
                ]
            ])
            ->add('dateLivraison',DateTimeType::class)
           
                
                
            
            ->add('livreur', EntityType::class, [
           
                'class' => Utilisateurs::class,
                'choice_label' => 'Email',
            
                // used to render a select box, check boxes or radios
               // 'multiple' => true,
               // 'expanded' => true,
            ])
            ->add('Commande', EntityType::class, [
           
                'class' => Commande::class,
                'choice_label' => 'id',
            
                // used to render a select box, check boxes or radios
               // 'multiple' => true,
                //'expanded' => true,
            ])
            ->add('PrixLivraison')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Livraison::class,
        ]);
    }
}
