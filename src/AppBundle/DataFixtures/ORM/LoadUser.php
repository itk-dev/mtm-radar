<?php

namespace AppBundle\DataFixtures\ORM;

use Itk\Bundle\EasyAdminUserBundle\Entity\User;

class LoadUser extends LoadData
{
    public function getOrder()
    {
        return 1;
    }

    public function loadItem($data)
    {
        $user = $this->setValues(new User(), $data);
        $this->container->get('fos_user.user_manager')->updateUser($user);
    }
}
