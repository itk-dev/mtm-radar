<?php

namespace App\Controller\Admin;

use App\Entity\Survey;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SurveyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Survey::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->remove(Crud::PAGE_INDEX, Action::DELETE)
            ->remove(Crud::PAGE_DETAIL, Action::DELETE)
            ;

        return $actions;
    }

    public function configureFields(string $pageName): iterable
    {

        $title = TextField::new('title');
        $description = TextField::new('description');
        $edit_description = TextEditorField::new('description');
        $edit_instruction = TextEditorField::new('instructions');
        $edit_preparations = TextEditorField::new('preparations');
        $area_configuration = TextareaField::new('configuration');
        $coll_question = CollectionField::new('question');
        $coll_answers = CollectionField::new('answers');
        $coll_answers_detail = CollectionField::new('answers')->setTemplatePath('easy_admin/Survey/answers.html.twig');
        $date_createdAt = DateTimeField::new('created_at')->setFormat('long', 'none');
        $choice_question = ChoiceField::new('survey')->allowMultipleChoices();

        if (Crud::PAGE_INDEX === $pageName) {
            return [$title, $description, $coll_question, $coll_answers, $date_createdAt];
        } elseif(Crud::PAGE_DETAIL === $pageName) {
            return [$title, $coll_answers_detail];
        } else {
            return [$title];
        }
    }
}
