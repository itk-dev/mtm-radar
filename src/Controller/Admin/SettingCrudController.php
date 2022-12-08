<?php

namespace App\Controller\Admin;

use App\Entity\Setting;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SettingCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Setting::class;
    }


    public function configureActions(Actions $actions): Actions
    {
        $actions
            ->remove(Crud::PAGE_INDEX, Action::DELETE)
            // ->remove(Crud::PAGE_EDIT, Action::DELETE)
            ;

        return $actions;
    }

    public function configureFields(string $pageName): iterable
    {

       $name = TextField::new('name');
       $name_readonly = TextField::new('name')->setFormTypeOption('disabled','disabled');
       $description = TextField::new('description');
       $value = TextField::new('value');

       if (Crud::PAGE_INDEX === $pageName) {
        return [$name, $description, $value];
    } elseif(Crud::PAGE_EDIT === $pageName) {
        return [$name_readonly];

    }
    }

}
