<?php

namespace App\Form;

use App\Entity\Roles;
use App\Entity\Boutiques;
use App\Entity\Utilisateurs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class ActeurSType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('Nom' ,TextType::class)
        ->add('Prenom', TextType::class)
        ->add('Email' ,EmailType::class)
        ->add('Telephone',NumberType::class)
        ->add('Password', PasswordType::class)
         ->add('Boutique', EntityType::class, [
           
            'class' => Boutiques::class,
            'choice_label' => 'nomBoutique',
        
            // used to render a select box, check boxes or radios
            // 'multiple' => true,
            // 'expanded' => true,
        ])
        ->add('Role', ChoiceType::class, [
            'choices' => [
                'Livreur' => 'ROLE_LIV',
                'Commercant' => 'ROLE_COMM'
            ], 
            'expanded' => true,
            'multiple' => true,
            'label' => 'Rôles' 
        ])
       
      
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateurs::class,
        ]);
    }
}
