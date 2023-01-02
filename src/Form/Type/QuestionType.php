<?php

namespace App\Form\Type;

use App\Entity\Question;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\TextEditorType;

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
                // 'required' => true,

                'required' => false,
                'data_class' => null,
                // Register new key "empty_data" with an empty string
                'empty_data' => '',
                // 'allow'


            ])
            ;




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
