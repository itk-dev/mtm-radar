<?php

namespace App\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Controller\EasyAdminController;
use ItkDev\UserBundle\User\UserManager;

class AdminController extends EasyAdminController
{
    /** @var UserManager */
    private $userManager;

    public function __construct(UserManager $userManager)
    {
        $this->userManager = $userManager;
    }

    public function shareSurveyAction()
    {
        $id = $this->request->query->get('id');

        return $this->redirectToRoute('survey_answer', ['id' => $id]);
    }

    public function createNewUserEntity()
    {
        return $this->userManager->createUser();
    }

    public function setUserPasswordAction()
    {
        $id = $this->request->query->get('id');

        return $this->redirectToRoute('admin_user_set_password', ['id' => $id]);
    }
}
