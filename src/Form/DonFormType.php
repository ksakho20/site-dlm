<?php

namespace App\Form;

use App\Entity\Don;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DonFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            // ->add('email')
            ->add('email', EmailType::class, [
                'constraints' => [
                    new Email(['message' => 'L\'adresse e-mail n\'est pas valide.']),
                ],
            ])
            ->add('prenom')
            ->add('adress')
            ->add('cp')
            ->add('ville')
            ->add('pays')
            ->add('montant')
            ->add('submit', SubmitType::class, [
                'label' => 'Envoyer',
            ])
            // <button type="submit">Envoyer</button>

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Don::class,
        ]);
    }
}
