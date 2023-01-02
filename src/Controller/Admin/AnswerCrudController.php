<?php

// namespace Answer;

namespace App\Controller\Admin;

use App\Entity\Answer;
use App\Entity\Survey;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\HttpFoundation\RedirectResponse;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use Symfony\Bundle\FrameworkBundle\Controller\RedirectController;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AnswerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Answer::class;
    }

    public function editAnswersAction(AdminContext $adminContext)
    {

        // $id = $this->request->query->get('id');
        $survey = $adminContext->getEntity()->getInstance();

        return $this->redirectToRoute('answer_edit',['id' => $survey->getId()]);
    }

    public function detailAnswerAction(AdminContext $adminContext)
    {

        // $id = $this->request->query->get('id');
        $survey = $adminContext->getEntity()->getInstance();

        return $this->redirectToRoute('answer_show',['id' => $survey->getId()]);
    }



    // public function detailAnswerAction(AdminContext $adminContext)
    // {

    //     // $id = $this->request->query->get('id');
    //     $survey = $adminContext->getEntity()->getInstance();

    //     return $this->redirectToRoute('survey_answer_edit',['id' => $survey->getId()]);
    // }


    public function configureActions(Actions $actions): Actions
    {
        $editAnswersAction = Action::new('EditAnswersAction', 'EditAnswer', 'fa fa-file-EditAnswer')
        ->linkToCrudAction('editAnswersAction');

        $detailAnswerAction = Action::new('detailAnswerAction', 'DetailAnswer', 'fa fa-file-DetailAnswer')
        ->linkToCrudAction('detailAnswerAction');



        $actions
            // ->(Crud::PAGE_INDEX, Action::DETAIL)
            ->remove(Crud::PAGE_INDEX, Action::EDIT)
            ->add(Crud::PAGE_INDEX, $editAnswersAction)
            ->add(Crud::PAGE_INDEX, $detailAnswerAction)



            ;

        return $actions;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return Crud::new()
        // ...

        // the first argument is the "template name", which is the same as the
        // Twig path but without the `@EasyAdmin/` prefix
        // ->overrideTemplate('label/null', 'admin/labels/my_null_label.html.twig')

        ->overrideTemplates([
            // 'crud/detail' => 'answer/show.html.twig',
            // 'crud/edit' => 'survey/survey.html.twig'
        ])
    ;
    }

    public function configureFields(string $pageName): iterable
    {
        $title = TextField::new('title');
        $name = TextField::new('name');
        $survey = Textfield::new('survey');
        $company = TextField::new('company');
        $documentationId = TextField::new('documentationId');
        $address = TextField::new('address');
        $description = TextField::new('description');
        $createdAt = DateTimeField::new('created_at')->setFormat('long', 'none');
        $updatedAt = DateTimeField::new('updated_at')->setFormat('long', 'none');
         $assoc_survey = AssociationField::new('survey');
         $coll_answers_detail = CollectionField::new('answers')->setTemplatePath('easy_admin/Survey/answers.html.twig');

        if (Crud::PAGE_INDEX === $pageName) {
            return [$survey, $name, $company, $documentationId, $address, $description, $createdAt];
        } elseif(Crud::PAGE_NEW === $pageName) {
            return [$title, $name, $company, $documentationId, $address, $description, $createdAt, $updatedAt, $assoc_survey];
        } elseif(Crud::PAGE_DETAIL === $pageName) {
            return [$title, $coll_answers_detail ];
        }

    }
}
