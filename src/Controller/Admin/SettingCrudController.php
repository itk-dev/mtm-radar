<?php

namespace App\Controller\Admin;

use App\Entity\Setting;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
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

       $name = TextareaField::new('name');
       $name_readonly = TextareaField::new('name')->setFormTypeOption('disabled','disabled');
       $description = TextareaField::new('description');
       $value = TextareaField::new('value');

       if (Crud::PAGE_INDEX === $pageName) {
        return [$name, $description, $value];
    } elseif(Crud::PAGE_EDIT === $pageName) {
        return [$name_readonly, $value];

    }
    }

}
