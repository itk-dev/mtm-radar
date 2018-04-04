<?php

namespace AppBundle\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use ItkDev\EasyAdminUserBundle\Traits\EasyAdminControllerUserManager;

class AdminController extends BaseAdminController
{
    use EasyAdminControllerUserManager;

    public function shareSurveyAction()
    {
        $id = $this->request->query->get('id');

        return $this->redirectToRoute('survey_answer', ['id' => $id]);
    }
}
