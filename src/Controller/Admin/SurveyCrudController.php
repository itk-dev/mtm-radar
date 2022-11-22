<?php

namespace App\Controller\Admin;

use App\Entity\Survey;
use Doctrine\DBAL\Types\StringType;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use Symfony\Component\Validator\Constraints\Length;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\TextFilter;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\DomCrawler\Field\TextareaFormField;

class SurveyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Survey::class;
    }


    public function configureFields(string $pageName): iterable
    {

        return [
            TextField::new('title'),

            /*SHOW ON INDEX */
            TextField::new('description')
                ->hideOnForm()
                ->hideOnDetail(),

            CollectionField::new('questions')
                ->hideOnForm()
                ->hideOnDetail(),

            // TextEditorField::new('description')->hideOnIndex(),

            TextEditorField::new('instructions')->hideOnIndex(),

            // TextareaField::new('configuration')->hideOnIndex(),

            TextEditorField::new('preparations')->hideOnIndex()->setHelp('Use <code>survey://all_questions</code> to insert the url to all survey questions'),

            CollectionField::new('answers')->hideOnForm(),
            // CollectionField::new('questions'),
            DateTimeField::new('created_at')->setFormat('long', 'none')->hideOnForm(),
            // ChoiceField::new('survey')->allowMultipleChoices(),
            CollectionField::new('questions'),

        ];
    }

}