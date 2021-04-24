<?php

namespace App\DataFixtures\ORM;

use App\Entity\User;
use Symfony\Component\PropertyAccess\PropertyAccessorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class LoadUser extends LoadData
{
    public function getOrder()
    {
        return 1;
    }

    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder, PropertyAccessorInterface $accessor)
    {
        parent::__construct($accessor);
        $this->passwordEncoder = $passwordEncoder;
    }

    protected function loadItem($data)
    {
        $password = $data['plain_password'] ?? null;
        unset($data['plain_password']);
        $user = $this->setValues(new User(), $data);
        if ($password) {
            $user->setPassword($this->passwordEncoder->encodePassword(
                $user,
                $password
            ));
        }
        $this->persist($user);
    }
}
