<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Survey;
use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;

class AdminController extends BaseAdminController
{
    public function shareSurveyAction()
    {
        $id = $this->request->query->get('id');
        return $this->redirectToRoute('survey_answer', ['id' => $id]);
    }
}
