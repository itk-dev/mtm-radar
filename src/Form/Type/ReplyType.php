<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReplyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('value', ChoiceType::class, [
                'choices' => array_flip($options['choices']),
                'required' => true,
                'expanded' => true,
                'multiple' => false,
            ])
            ->add('comment', TextareaType::class, [
                'required' => $options['comment_required'],
                'attr' => [
                    'rows' => 4,
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setRequired(['choices'])
            ->setDefaults([
                'comment_required' => false,
            ]);
    }

    public function getName()
    {
        return 'appbundle_reply';
    }
}
