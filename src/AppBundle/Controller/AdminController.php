<?php

namespace AppBundle\Controller;

use EasyAdminUserBundle\Traits\EasyAdminControllerUserManager;
use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;

class AdminController extends BaseAdminController
{
    use EasyAdminControllerUserManager;

    public function shareSurveyAction()
    {
        $id = $this->request->query->get('id');

        return $this->redirectToRoute('survey_answer', ['id' => $id]);
    }
}
