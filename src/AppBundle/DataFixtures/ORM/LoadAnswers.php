<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Answers;
use AppBundle\Entity\Survey;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Yaml\Yaml;

class LoadAnswers extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $finder = (new Finder())->files()->name('*.yml')->in(__DIR__.'/../Answers');
        foreach ($finder as $file) {
            $yaml = file_get_contents($file->getRealPath());
            $data = Yaml::parse($yaml, Yaml::PARSE_OBJECT_FOR_MAP);
            echo $file->getFilename(), PHP_EOL;

            $criteria = [];
            foreach ($data->survey as $name => $value) {
                $criteria[$name] = $value;
            }
            $survey = $manager->getRepository(Survey::class)->findOneBy($criteria);
            if ($survey === null) {
                throw new \RuntimeException('No such survey: '.json_encode($criteria));
            }

            $answers = new Answers();
            $answers
                ->setSurvey($survey)
                ->setData($data->data);
            $manager->persist($answers);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}
