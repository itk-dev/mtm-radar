<?php

namespace App\Controller;

use App\Entity\Answer;
use App\Entity\Survey;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/answer")
 */
class AnswerController extends AbstractController
{
    /** @var \Doctrine\ORM\EntityManagerInterface */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/{id}", name="answer_submit", methods={"POST"})
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
     * @Route("/{id}", name="answer_show", methods={"GET"})
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
     * @Route("/{id}/edit", name="answer_edit", methods={"GET"})
     *
     * @param Answer $answer
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Answer $answer)
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedHttpException();
        }

        return $this->redirectToRoute('survey_answer_edit', ['id' => $answer->getSurvey()->getId(), 'answer' => $answer->getId()]);
    }

    /**
     * @Route("/{id}/data", name="answer_show_data", methods={"GET"})
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
