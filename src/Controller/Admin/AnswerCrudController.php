<?php

// namespace Answer;

namespace App\Controller\Admin;

use App\Entity\Answer;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Bundle\FrameworkBundle\Controller\RedirectController;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AnswerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Answer::class;
    }


    public function configureActions(Actions $actions): Actions
    {
        $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL)




            ;

        return $actions;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return Crud::new()
        // ...

        // the first argument is the "template name", which is the same as the
        // Twig path but without the `@EasyAdmin/` prefix
        ->overrideTemplate('label/null', 'admin/labels/my_null_label.html.twig')

        ->overrideTemplates([
            // 'crud/detail' => 'answer/show.html.twig'
            'crud/detail' => 'easy_admin/test.html.twig'
        ])
    ;
    }

    public function configureFields(string $pageName): iterable
    {
        $title = TextField::new('title');
        $name = TextField::new('name');
        $company = TextField::new('company');
        $documentationId = TextField::new('documentationId');
        $address = TextField::new('address');
        $description = TextField::new('description');
        $createdAt = DateTimeField::new('created_at')->setFormat('long', 'none');
        // $test = redirect()->route('login');
        // $test = RedirectController('ss');



        if (Crud::PAGE_INDEX === $pageName) {
            return [$title, $name, $company, $documentationId, $address, $description, $createdAt];
        }  else {
            return [$title];
        }
    }
}
