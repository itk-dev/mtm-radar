<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Question;
use AppBundle\Entity\Survey;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Yaml\Yaml;

class LoadSurvey extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $finder = (new Finder())->files()->name('*.yml')->in(__DIR__.'/../Survey');
        foreach ($finder as $file) {
            $yaml = file_get_contents($file->getRealPath());
            $data = Yaml::parse($yaml, Yaml::PARSE_OBJECT_FOR_MAP);
            echo $file->getFilename(), PHP_EOL;

            $survey = new Survey();
            $survey
                ->setTitle($data->title)
                ->setDescription($data->description)
                ->setConfiguration([
                    'min' => $data->min,
                    'rating' => $data->rating,
                ]);

            foreach ($data->questions as $item) {
                $question = new Question();
                $question
                    ->setSurvey($survey)
                    ->setTitle($item->title ?? '')
                    ->setText($item->text ?? '');
                $manager->persist($question);
            }
            $manager->persist($survey);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}
