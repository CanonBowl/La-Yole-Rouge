<?php

namespace App\Form;

use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Date', TextType::class, [
                'label' => 'Date',
                'attr' => ['class' => 'datepicker'],
            ])
            ->add('Heure', TextType::class, [
                'label' => 'Heure',
                'attr' => ['class' => 'timepicker'],
            ])
            ->add('NbPersonne', NumberType::class, [
                'label' => 'Nombre de personnes',
            ])
            ->add('Envoyer', SubmitType::class, [
                'attr' => ['class' => 'waves-effect waves-light btn']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
        ]);
    }
}
