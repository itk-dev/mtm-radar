<?php

// namespace Answer;

namespace App\Controller\Admin;

use App\Entity\Answer;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AnswerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Answer::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title'),
            // TextEditorField::new('description'),
            TextField::new('name'),
            TextField::new('company'),
            TextField::new('documentation_id'),
            TextField::new('address'),
            TextField::new('description'),
            DateTimeField::new('created_at')->setFormat('long', 'none'),
            // ChoiceField::new('survey')->allowMultipleChoices(),
            AssociationField::new('survey')->hideOnIndex(),
        ];
    }
}
