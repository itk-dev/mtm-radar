<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Question;
use AppBundle\Entity\Survey;

class LoadSurvey extends LoadData
{
    public function getOrder()
    {
        return 2;
    }

    protected function loadItem($data)
    {
        $survey = new Survey();
        foreach ($data['questions'] as $item) {
            $question = $this->setValues(new Question(), $item)
                ->setSurvey($survey);
            $survey->addQuestion($question);
        }
        unset($data['questions']);

        $this->setValue($survey, 'configuration', $data['configuration']);
        unset($data['configuration']);

        $survey = $this->setValues($survey, $data);
        $this->persist($survey);
    }
}
