<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class InscriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('email',EmailType::class,[
            'label' =>'Votre email',
            'attr' => [
                'placeholder' => 'Votre email',    
            ]
        ])

        ->add('password',RepeatedType::class,[
            'constraints' => new Length([
                'min' => 4,
                'max' => 30 
            ]),
            'type' => PasswordType::class,
            'invalid_message' =>'Les mots de passe ne correspondent pas',
            'required' => true,
            'first_options' => [
                'label' => 'Entrez votre mot de passe',
                'attr' => ['placeholder' => 'Entrez votre mot de passe']
            ],
            'second_options' => [
                'label' => 'Confirmer votre mot de passe',
                'attr' => ['placeholder' => 'Confirmer votre mot de passe']
            ],

        ])

        ->add('lastname',TextType::class,[
            'label' =>'Votre nom',
            'attr' => [
                'placeholder' => 'Votre nom',
            ]
        ])
        ->add('firstname',TextType::class,[
            'label' =>'Votre prénom',
            'attr' => [
                'placeholder' => 'Votre prénom',
            ]
        ])
        ->add('message',TextareaType::class,[
            'label' =>'Message',
            'attr' => [
                'placeholder' => 'Votre message',
            ]
        ])
        
        ->add('submit',SubmitType::class,[
            'label' =>'Envoyer',
            'attr' => [
                'placeholder' => 'Envoyer',
            ]
        ])
        
    ;
}


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
