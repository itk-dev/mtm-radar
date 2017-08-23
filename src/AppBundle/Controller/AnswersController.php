<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Answers;
use AppBundle\Entity\Survey;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/answers")
 */
class AnswersController extends Controller
{
    /** @var \Doctrine\ORM\EntityManagerInterface */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/{id}", name="answers_submit")
     * @Method("POST")
     */
    public function answersSubmitAction(Request $request, Survey $survey)
    {
        $data = json_decode($request->request->get('data'));
        $answers = new Answers();
        $answers
            ->setSurvey($survey)
            ->setData($data);
        $this->entityManager->persist($answers);
        $this->entityManager->flush();

        $this->addFlash('info', 'Answers saved succesfully');

        return $this->redirectToRoute('answers_show', ['id' => $answers->getId()]);
    }

    /**
     * @Route("/{id}", name="answers_show")
     * @Method("GET")
     */
    public function getAction(Request $request, Answers $answers)
    {
        return $this->render('answers/show.html.twig', [
            'answers' => $answers,
        ]);
    }

    /**
     * @Route("/{id}/data", name="answers_show_data")
     * @Method("GET")
     */
    public function getDataAction(Request $request, Answers $answers, SerializerInterface $serializer)
    {
        $callback = $request->get('callback');
        $data = $serializer->serialize(['survey' => $answers->getSurvey(), 'answers' => $answers->getData()], 'json', ['groups' => ['answers'], 'enable_max_depth' => true]);
        $response = new JsonResponse($data, 200, [], true);
        if ($callback) {
            $response->setCallback($callback);
        }

        return $response;
    }
}
