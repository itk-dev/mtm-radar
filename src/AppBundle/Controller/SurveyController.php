<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Answer;
use AppBundle\Entity\Survey;
use AppBundle\Form\Type\ReplyType;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/survey")
 */
class SurveyController extends Controller
{
    /** @var \Doctrine\ORM\EntityManagerInterface */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/{id}/answer", name="survey_answer")
     * @Method("GET")
     */
    public function getAction(Survey $survey)
    {
        $answer = new Answer();
        $form = $this->buildAnswerForm($answer, $survey);

        return $this->render('survey/survey.html.twig', [
            'survey' => $survey,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/answer")
     * @Method("POST")
     */
    public function postAnswer(Request $request, Survey $survey)
    {
        $answer = new Answer();
        $form = $this->buildAnswerForm($answer, $survey);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $serializer = $this->container->get('serializer');
            $answer->setReplies(json_decode($serializer->serialize($answer->getReplies(), 'json')));
            $data = $serializer->serialize($survey, 'json', ['groups' => ['survey'], 'enable_max_depth' => true]);
            $data = json_decode($data);
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

    /**
     * @Route("/{id}/data", name="survey_show_data")
     */
    public function getDataAction(Request $request, Survey $survey, SerializerInterface $serializer)
    {
        $callback = $request->get('callback');
        $data = $serializer->serialize(['survey' => $survey], 'json', ['groups' => ['survey'], 'enable_max_depth' => true]);
        $response = new JsonResponse($data, 200, [], true);
        if ($callback) {
            $response->setCallback($callback);
        }

        return $response;
    }

    private function buildAnswerForm(Answer $answer, Survey $survey)
    {
        $answer->setReplies($survey->getQuestions()->map(function () { return null; }));

        $form = $this->createFormBuilder($answer)
            ->add('replies', CollectionType::class, [
                'entry_type' => ReplyType::class,
                'entry_options' => [
                    'choices' => $survey->getRating(),
                ],
            ])
            ->add('title', TextType::class)
            ->add('description', TextareaType::class)
            ->add('author', TextType::class)
            ->add('save', SubmitType::class, [
                'label' => 'Submit answer',
                'attr' => [
                    'class' => 'btn btn-primary btn-block',
                ],
            ])
            ->getForm();

        return $form;
    }
}
