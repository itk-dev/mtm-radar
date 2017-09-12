<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bridge\Doctrine\Tests\Fixtures\ContainerAwareFixture;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Yaml\Yaml;

abstract class LoadData extends ContainerAwareFixture implements OrderedFixtureInterface
{
    /** @var ObjectManager */
    protected $manager;

    /** @var \Symfony\Component\PropertyAccess\PropertyAccessorInterface */
    protected $accessor;

    public function load(ObjectManager $manager)
    {
        $this->accessor = $this->container->get('property_accessor');
        $this->manager = $manager;

        $finder = (new Finder())->files()->name('*.yml')->in(__DIR__.'/../Data/'.$this->getName());
        foreach ($finder as $file) {
            $yaml = file_get_contents($file->getRealPath());
            $data = Yaml::parse($yaml, Yaml::PARSE_OBJECT_FOR_MAP);
            echo $file->getFilename(), PHP_EOL;

            $this->loadItem($data);
        }
        $manager->flush();
    }

    protected function setValues($object, $values)
    {
        foreach ($values as $key => $value) {
            $this->setValue($object, $key, $value);
        }

        return $object;
    }

    protected function setValue($object, $path, $value)
    {
        $this->accessor->setValue($object, $path, $value);

        return $object;
    }

    protected function persist($entity)
    {
        $this->manager->persist($entity);
    }

    protected function getName()
    {
        if (preg_match('@\\\\Load(?<name>[A-Z][a-z0-9]*)$@', get_class($this), $matches)) {
            return $matches['name'];
        }

        throw new \RuntimeException('Cannot get name');
    }

    abstract protected function loadItem($data);
}
