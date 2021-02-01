<?php

namespace App\Form;

use App\Entity\Aplikim;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AplikimType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('fondlimit')
            ->add('adresedorezimi')
            ->add('datehapje')
            ->add('datembyllje')
            ->add('licence')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Aplikim::class,
        ]);
    }
}
