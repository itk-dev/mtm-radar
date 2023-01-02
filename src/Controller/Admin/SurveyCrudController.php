<?php

namespace App\Controller\Admin;

use App\Entity\Survey;
use Symfony\Component\BrowserKit\Response;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use Craue\ConfigBundle\DependencyInjection\Configuration;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;


class SurveyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Survey::class;
    }


    public function shareSurveyAction(AdminContext $adminContext)
    {

        // $id = $this->request->query->get('id');
        $survey = $adminContext->getEntity()->getInstance();
        return $this->redirectToRoute('survey_answer', ['id' => $survey->getId()]);
    }


    public function configureActions(Actions $actions): Actions
    {
        $shareSurveyAchtion = Action::new('ShareSurveyActions', 'ShareSurveyAction', 'fa fa-file-ShareSurveyAction')
        ->linkToCrudAction('shareSurveyAction');

        // $shareSurveyAchtion = Action::new('ShareSurveyActions', 'shareSurvey')->linkToRoute('survey_answer', function (Survey $survey): array {
        //         return [
        //             'id' => $survey->getId(),

        //         ];
        //     });

        $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->remove(Crud::PAGE_INDEX, Action::DELETE)
            ->add(Crud::PAGE_INDEX, $shareSurveyAchtion)
            ->remove(Crud::PAGE_DETAIL, Action::DELETE)
            ;

        return $actions;
    }


    // public function configureCrud(Crud $crud): Crud
    // {
    //     return Crud::new()

    //     ->overrideTemplates([
    //         // 'crud/detail' => 'answer/show.html.twig',
    //         // 'crud/new' => 'easy_admin/Survey/new.html.twig',
    //         // 'crud/edit' => 'easy_admin/Survey/edit.html.twig'
    //     ])
    // ;
    // }


    public function configureFields(string $pageName): iterable
    {

        $title = TextField::new('title');
        $description = TextField::new('description')->setMaxLength(80);
        $description_editor = TextEditorField::new('description');
        $instructions_editor = TextEditorField::new('instructions');
        $preparations_editor = TextEditorField::new('preparations')->setHelp('Use <code>survey://all_questions</code> to insert the url to all survey questions');

        $coll_configuration = CollectionField::new('configuration')->setEntryType('App\Form\Type\ConfigurationType')->allowAdd()->allowDelete(false);
        $coll_questions = CollectionField::new('questions')->setEntryType('App\Form\Type\QuestionType');

        $assoc_answ = AssociationField::new('answers');
        $assoc_quest = AssociationField::new('questions');
        $coll_answers_detail = CollectionField::new('answers')->setTemplatePath('easy_admin/Survey/answers.html.twig');
        $date_createdAt = DateTimeField::new('created_at')->setFormat('long', 'none');





        if (Crud::PAGE_INDEX === $pageName) {
            return [$title, $description, $assoc_answ,$assoc_quest , $date_createdAt];
        }
        elseif(Crud::PAGE_DETAIL === $pageName) {
            return [$title, $coll_answers_detail];
        }
        elseif(Crud::PAGE_NEW === $pageName) {
            return [$title, $description_editor, $instructions_editor, $preparations_editor, $coll_questions, $coll_configuration ];
        }
        elseif(Crud::PAGE_EDIT === $pageName) {
            return [$title, $description_editor, $instructions_editor, $preparations_editor, $coll_questions, $coll_configuration ];
        }
    }
}
