<?php

namespace App\Form\Type;

use App\Entity\Question;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
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
            // ->add('image', FileUploadType::class, [
            //     // 'instance' => 'form',
            //     // 'enable' => true,
            //     // 'required' => true,

            //     'required' => false,
            //     'data_class' => null,
            //     // Register new key "empty_data" with an empty string
            //     'empty_data' => '',
            //     // 'allow'


            // ])

            ->add('image', FileType::class, [
                'label' => 'image (png, jpg/jpeg filetype)',
                'required' => false,
                // unmapped means that this field is not associated to any entity property
                'mapped' => false,
                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/*',
                        ]
                    ])
                    ],
                    // 'mimeTypesMessage' => 'Please upload a valid image',
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
