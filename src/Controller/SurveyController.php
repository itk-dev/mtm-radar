<?php

namespace App\Controller;

use App\Entity\Answer;
use App\Entity\Survey;
use App\Form\Type\ReplyType;
// use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class SurveyController extends AbstractController
{
    /** @var \Doctrine\ORM\EntityManagerInterface */
    private $entityManager;

    /** @var array */
    private $options;

    public function __construct(EntityManagerInterface $entityManager, array $surveyOption)
    {
        $this->entityManager = $entityManager;
        $resolver = new OptionsResolver();
        $this->configureOptions($resolver);

        $this->options = $resolver->resolve($surveyOption);
    }

    #[Route('/{id}/answer', name: 'survey_answer', methods: ['GET'])]
    public function getAction(Survey $survey): Response
    {
        $answer = new Answer();
        $form = $this->buildAnswerForm($answer, $survey);

        return $this->render('survey/survey.html.twig', [
            'survey' => $survey,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/questions', name: 'survey_questions', methods: ['GET'])]
    public function questionAction(Survey $survey): Response
    {
        return $this->render('survey/answers.html.twig', [
            'survey' => $survey,
        ]);
    }

    #[Route('/{id}/answer', methods: ['POST'])]
    public function postAnswer(Request $request, Survey $survey)
    {
        $answer = new Answer();
        $form = $this->buildAnswerForm($answer, $survey);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $serializer = $this->container->get('serializer');
            $answer->setReplies(json_decode($serializer->serialize($answer->getReplies(), 'json')));
            $data = $serializer->serialize($survey, 'json', ['groups' => ['survey'], 'enable_max_depth' => true]);
            $data = json_decode($data, true);
            $answer->setSurvey($survey)
                ->setData($data);
            $this->entityManager->persist($answer);
            $this->entityManager->flush();
            $this->addFlash('info', 'Answer saved successfully');

            return $this->redirectToRoute('answer_show', ['id' => $answer->getId()]);
        }

        return $this->render('survey/survey.html.twig', [
            'survey' => $survey,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/compare', name: 'survey_compare_answers', methods: ['Get'])]
    public function compareAnswers(Request $request, Survey $survey): Response
    {
        $answerIds = $request->get('answers');
        $answers = $this->entityManager->getRepository(Answer::class)->findBy(['id' => $answerIds]);
        usort($answers, function (Answer $a, Answer $b) use ($answerIds) {
            $indexA = array_search($a->getId(), $answerIds, true) ?: 0;
            $indexB = array_search($b->getId(), $answerIds, true) ?: 0;

            if ($indexA < $indexB) {
                return -1;
            } elseif ($indexB < $indexA) {
                return 1;
            }

            return 0;
        });
        foreach ($answers as $answer) {
            if ($survey !== $answer->getSurvey()) {
                return new BadRequestHttpException('Answers do not belong to same survey.');
            }
        }

        return $this->render('survey/compare-answers.html.twig', [
            'survey' => $survey,
            'answers' => $answers,
        ]);
    }

    #[Route('/{id}/answer/{answer}/edit', name: 'survey_answer_edit', methods: ['GET'])]
    public function editAnswer(Request $request, Survey $survey, Answer $answer)
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            // throw new AccessDeniedHttpException();
            throw new AccessDeniedHttpException();
        }

        if ($answer->getSurvey()->getId() !== $survey->getId()) {
            throw new BadRequestHttpException();
        }
        $form = $this->buildAnswerForm($answer, $survey, 'POST');
        return $this->render('survey/survey.html.twig', [
            'survey' => $survey,
            'answer' => $answer,
            'form' => $form->createView(),
        ]);
    }



     #[Route("/{id}/answer/{answer}/edit", name:"survey_answer_update", methods:["POST"] )]
    public function updateAnswer(Request $request, Survey $survey, Answer $answer):Response
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedHttpException();
        }

        $form = $this->buildAnswerForm($answer, $survey, 'POST');

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $serializer = $this->container->get('serializer');
            $answer->setReplies(json_decode($serializer->serialize($answer->getReplies(), 'json')));
            $data = $serializer->serialize($survey, 'json', ['groups' => ['survey'], 'enable_max_depth' => true]);
            $data = json_decode($data, true);
            $answer->setSurvey($survey)
                ->setData($data);
            $this->entityManager->persist($answer);
            $this->entityManager->flush();
            $this->addFlash('info', 'Answer updated successfully');

            return $this->redirectToRoute('answer_show', ['id' => $answer->getId()]);
        }

        return $this->render('survey/survey.html.twig', [
            'survey' => $survey,
            'answer' => $answer,
            'form' => $form->createView(),
        ]);
    }

    public function getDataAction(Request $request, Survey $survey, SerializerInterface $serializer): JsonResponse
    {
        $callback = $request->get('callback');
        $data = $serializer->serialize(
            ['survey' => $survey], 'json', ['groups' => ['survey'], 'enable_max_depth' => true]
        );
        $response = new JsonResponse($data, 200, [], true);
        if ($callback) {
            $response->setCallback($callback);
        }

        return $response;
    }

    private function buildAnswerForm(Answer $answer, Survey $survey, $method = 'POST')
    {
        // Ensure that each question has a reply.
        $replies = $answer->getReplies();
        foreach ($survey->getQuestions() as $index => $question) {
            if (!isset($replies[$index])) {
                $replies[$index] = null;
            }
        }
        $answer->setReplies($replies);

        $form = $this->createFormBuilder($answer)
            ->add('name', TextType::class, [
                'label' => 'Name',
            ])
            ->add('company', TextType::class, [
                'label' => 'Company',
            ])
            ->add('documentationId', TextType::class, [
                'label' => 'Documentation id',
            ])
            ->add('address', TextareaType::class, [
                'label' => 'Address',
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
            ])
            ->add('replies', CollectionType::class, [
                'label' => 'Replies',
                'entry_type' => ReplyType::class,
                'entry_options' => [
                    'choices' => $survey->getRating(),
                    'comment_required' => $this->getParameter('survey.reply.comment_required'),
                ],
            ])
            ->setMethod($method)
            ->getForm();

        return $form;
    }

    private function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'survey.reply.comment_required' => true,
        ]);
    }
}
