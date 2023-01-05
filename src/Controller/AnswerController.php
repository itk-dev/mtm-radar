<?php

namespace App\Controller;

use App\Entity\Answer;
use App\Entity\Survey;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/answer')]
class AnswerController extends AbstractController
{
    /** @var \Doctrine\ORM\EntityManagerInterface */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

// post a single answer
    #[Route('/{id}', name: 'answer_submit', methods: ['POST'])]
    public function answerSubmitAction(Request $request, Survey $survey): RedirectResponse
    {

        $data = json_decode($request->request->get('data'));
        $answer = new Answer();
        $answer
            ->setSurvey($survey)
            ->setData($data);
        $this->entityManager->persist($answer);
        $this->entityManager->flush();




        $this->addFlash('info', 'Anwer saved succesfully');

        return $this->redirectToRoute('answer_show', ['id' => $answer->getId()]);
    }

    // get a single answer
    #[Route('/{id}', name: 'answer_show', methods: ['GET'])]
    public function getAction(Request $request, Answer $answer): Response
    {
        return $this->render('answer/show.html.twig',
            [
                'answer' => $answer,
            ]);
    }

    // get a single answer_edit
    #[Route('/{id}/edit', name: 'answer_edit', methods: ['GET'])]
        public function editAction(Answer $answer): Response
        {
            // if (!$this->isGranted('ROLE_ADMIN')) {
            //     throw new AccessDeniedHttpException();
            // }

            return $this->redirectToRoute(
                'survey_answer_edit',
                ['id' => $answer->getSurvey()->getId(), 'answer' => $answer->getId()]
            );
        }

    #[Route('/{id}/data', name: 'answer_show_data', methods: ['GET'])]
    public function getDataAction(Request $request, Answer $answer, SerializerInterface $serializer): JsonResponse
    {
        $callback = $request->get('callback');
        $data = $serializer->serialize(
            ['survey' => $answer->getSurvey(), 'answer' => $answer->getData()],
            'json',
            ['groups' => ['answer'], 'enable_max_depth' => true]
        );
        $response = new JsonResponse($data, 200, [], true);
        if ($callback) {
            $response->setCallback($callback);
        }

        return $response;
    }

    #[Route('/answer', name: 'app_answer')]
    public function index(): Response
    {
        return $this->render('answer/index.html.twig', [
            'controller_name' => 'AnswerController',
        ]);
    }
}
