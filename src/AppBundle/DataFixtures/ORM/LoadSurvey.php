<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Question;
use AppBundle\Entity\Survey;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Yaml\Yaml;

class LoadSurvey extends LoadData
{
    protected function loadItem($data)
    {
        $survey = new Survey();
        foreach ($data->questions as $item) {
            $question = $this->setValues(new Question(), $item)
                ->setSurvey($survey);
            $this->persist($question);
        }
        unset($data->questions);

        $this->setValue($survey, 'configuration', $data->configuration);
        unset($data->configuration);

        $survey = $this->setValues($survey, $data);
        $this->persist($survey);
    }

    public function getOrder()
    {
        return 1;
    }
}
