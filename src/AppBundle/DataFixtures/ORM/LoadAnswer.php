<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Answer;
use AppBundle\Entity\Survey;

class LoadAnswer extends LoadData
{
    public function getOrder()
    {
        return 3;
    }

    public function loadItem($data)
    {
        $criteria = [];
        foreach ($data['survey'] as $name => $value) {
            $criteria[$name] = $value;
        }
        $survey = $this->manager->getRepository(Survey::class)->findOneBy($criteria);
        if (null === $survey) {
            throw new \RuntimeException('No such survey: '.json_encode($criteria));
        }

        $data['survey'] = $survey;

        $answer = $this->setValues(new Answer(), $data);
        $this->persist($answer);
    }
}
