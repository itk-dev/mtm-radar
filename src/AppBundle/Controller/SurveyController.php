<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Survey;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/survey")
 */
class SurveyController extends Controller
{
    /**
     * @Route("/{id}", name="survey_show")
     * @Method("GET")
     */
    public function getAction(Survey $survey)
    {
        return $this->render('survey/survey.html.twig', [
            'survey' => $survey,
        ]);
    }

    /**
     * @Route("/{id}/data", name="survey_show_data")
     */
    public function getDataAction(Request $request, Survey $survey, SerializerInterface $serializer)
    {
        $callback = $request->get('callback');
        $data = $serializer->serialize(['survey' => $survey], 'json', ['groups' => ['survey'], 'enable_max_depth' => true]);
        //$data = json_encode(['id' => $survey->getId()]);
        $response = new JsonResponse($data, 200, [], true);
        if ($callback) {
            $response->setCallback($callback);
        }

        return $response;
    }
}
