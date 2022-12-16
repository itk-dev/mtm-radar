<?php

namespace App\Form\Type;

use App\Entity\Question;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\TextEditorType;
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
            ->add('text', TextEditorType::class, [
                'attr' => [
                    'rows' => 4,
                ],
            ])
            ->add('image', FileUploadType::class, [
                // 'instance' => 'form',
                // 'enable' => true,
                'required' => true,
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
