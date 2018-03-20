<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use ItkDev\ConfigBundle\Entity\Setting;

class LoadSetting extends LoadData
{
    public function getOrder()
    {
        return 4;
    }

    public function load(ObjectManager $manager)
    {
        parent::load($manager);
        // Flush the config cache.
        $this->container->get('craue_config')->all();
    }

    public function loadItem($data)
    {
        $setting = $this->setValues(new Setting(), $data);
        $this->persist($setting);
    }
}
