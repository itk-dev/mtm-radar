<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Question;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class)
            ->add('category', TextType::class, [
                'required' => false,
            ])
            ->add('text', CKEditorType::class, [
                'attr' => [
                    'rows' => 4,
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
           'data_class' => Question::class,
        ]);
    }

    public function getName()
    {
        return 'appbundle_question';
    }
}
