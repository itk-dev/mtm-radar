<?php

namespace App\DataFixtures\ORM;

use App\Entity\Setting;
use Craue\ConfigBundle\Util\Config;
// use Craue\ConfigBundle\Util\Config;
use Doctrine\Persistence\ObjectManager;
// use ItkDev\ConfigBundle\Entity\Setting;
use Symfony\Component\PropertyAccess\PropertyAccessorInterface;

class LoadSetting extends LoadData
{
    public function getOrder()
    {
        return 4;
    }

    /** @var Config */
    private $config;

    public function __construct(Config $config, PropertyAccessorInterface $accessor)

    {
        parent::__construct($accessor);
        $this->config = $config;
    }

    public function load(ObjectManager $manager)
    {
        parent::load($manager);
        // Flush the config cache.
        $this->config->all();
    }

    public function loadItem($data)
    {
        $setting = $this->setValues(new Setting(), $data);
        $this->persist($setting);
    }
}
