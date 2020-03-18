<?php

namespace App\Form;

use App\Entity\Match;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Stade;

class MatchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('score', IntegerType::class)
            ->add('fouls', IntegerType::class)
            ->add('penalty', IntegerType::class)
            ->add('yellowcard', IntegerType::class)
            ->add('redcard', IntegerType::class)
            ->add('stade', EntityType::class, [
                'class' => Stade::class,
                'choice_label' => 'description',
                'expanded' => true,
                'multiple' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Match::class,
        ]);
    }
}
