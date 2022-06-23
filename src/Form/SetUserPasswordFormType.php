<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class SetUserPasswordFormType extends AbstractType
{
    public const MIN_LENGTH = 8;

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('password', TextType::class, [
                'attr' => ['size' => 64],
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => self::MIN_LENGTH,
                    ]),
                ],
            ])
        ;
    }
}
