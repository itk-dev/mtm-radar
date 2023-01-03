<?php

namespace App\Controller\Admin;
use App\Entity\Survey;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SurveyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Survey::class;
    }


    public function shareSurveyAction(AdminContext $adminContext)
    {
        $survey = $adminContext->getEntity()->getInstance();
        return $this->redirectToRoute('survey_answer', ['id' => $survey->getId()]);
    }

    public function configureActions(Actions $actions): Actions
    {
        $shareSurveyAchtion = Action::new('ShareSurveyActions', 'ShareSurveyAction', 'fa fa-file-ShareSurveyAction')
        ->linkToCrudAction('shareSurveyAction');

        $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->remove(Crud::PAGE_INDEX, Action::DELETE)
            ->add(Crud::PAGE_INDEX, $shareSurveyAchtion)
            ->remove(Crud::PAGE_DETAIL, Action::DELETE)

            ->remove(Crud::PAGE_DETAIL, Action::EDIT)
            ;

        return $actions;
    }

    public function configureFields(string $pageName): iterable
    {

        $title = TextField::new('title');
        $description = TextField::new('description')->setMaxLength(80);

        $editor_description = TextEditorField::new('description');
        $editor_instructions = TextEditorField::new('instructions');
        $editor_preparations = TextEditorField::new('preparations')->setHelp('Use <code>survey://all_questions</code> to insert the url to all survey questions');

        $coll_answers_detail = CollectionField::new('answers')->setTemplatePath('easy_admin/Survey/answers.html.twig');
        $coll_configuration = CollectionField::new('configuration')->setEntryType('App\Form\Type\ConfigurationType')->allowAdd()->allowDelete(false);
        $coll_questions = CollectionField::new('questions')->setEntryType('App\Form\Type\QuestionType');

        $assoc_answ = AssociationField::new('answers');
        $assoc_quest = AssociationField::new('questions');

        $date_createdAt = DateTimeField::new('created_at')->setFormat('long', 'none');





        if (Crud::PAGE_INDEX === $pageName) {
            return [$title, $description, $assoc_answ, $assoc_quest, $date_createdAt];
        }
        elseif(Crud::PAGE_DETAIL === $pageName) {
            return [$title, $coll_answers_detail];
        }
        elseif(Crud::PAGE_NEW === $pageName) {
            return [$title, $editor_description, $editor_instructions, $editor_preparations, $coll_questions, $coll_configuration ];
        }
        elseif(Crud::PAGE_EDIT === $pageName) {
            return [$title, $editor_description, $editor_instructions, $editor_preparations, $coll_questions, $coll_configuration ];
        }
    }
}
