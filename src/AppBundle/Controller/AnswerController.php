<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Answer;
use AppBundle\Entity\Survey;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/answer")
 */
class AnswerController extends Controller
{
    /** @var \Doctrine\ORM\EntityManagerInterface */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/{id}", name="answer_submit")
     * @Method("POST")
     *
     * @param Request $request
     * @param Survey  $survey
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function answerSubmitAction(Request $request, Survey $survey)
    {
        $data = json_decode($request->request->get('data'));
        $answer = new Answer();
        $answer
            ->setSurvey($survey)
            ->setData($data);
        $this->entityManager->persist($answer);
        $this->entityManager->flush();

        $this->addFlash('info', 'Answer saved succesfully');

        return $this->redirectToRoute('answer_show', ['id' => $answer->getId()]);
    }

    /**
     * @Route("/{id}", name="answer_show")
     * @Method("GET")
     *
     * @param Request $request
     * @param Answer  $answer
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getAction(Request $request, Answer $answer)
    {
        return $this->render('answer/show.html.twig', [
            'answer' => $answer,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="answer_edit")
     * @Method("GET")
     * @Security("has_role('ROLE_ADMIN')")
     *
     * @param Answer $answer
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Answer $answer)
    {
        return $this->redirectToRoute('survey_answer_edit', ['id' => $answer->getSurvey()->getId(), 'answer' => $answer->getId()]);
    }

    /**
     * @Route("/{id}/data", name="answer_show_data")
     * @Method("GET")
     *
     * @param Request             $request
     * @param Answer              $answer
     * @param SerializerInterface $serializer
     *
     * @return JsonResponse
     */
    public function getDataAction(Request $request, Answer $answer, SerializerInterface $serializer)
    {
        $callback = $request->get('callback');
        $data = $serializer->serialize(['survey' => $answer->getSurvey(), 'answer' => $answer->getData()], 'json', ['groups' => ['answer'], 'enable_max_depth' => true]);
        $response = new JsonResponse($data, 200, [], true);
        if ($callback) {
            $response->setCallback($callback);
        }

        return $response;
    }
}
