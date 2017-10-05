<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Survey
{
    use TimestampableEntity;

    /**
     * @ORM\Id
     * @ORM\Column(type="guid")
     * @ORM\GeneratedValue(strategy="UUID")
     * @Groups({"survey", "answer"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     * @Groups({"survey", "answer"})
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=false)
     * @Assert\NotBlank()
     * @Groups({"survey", "answer"})
     */
    private $description;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups({"survey", "answer"})
     */
    private $instructions;

    /**
     * @ORM\Column(type="json_array")
     * @Groups({"survey", "answer"})
     */
    private $configuration;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Question", mappedBy="survey", cascade={"persist", "remove"}, orphanRemoval=true)
     * @Groups({"survey", "answer"})
     */
    private $questions;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Answer", mappedBy="survey", cascade={"remove"}, orphanRemoval=true)
     */
    private $answers;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->questions = new ArrayCollection();
        $this->answers = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->getTitle() ?? 'Survey#'.$this->getId();
    }

    /**
     * Get id.
     *
     * @return guid
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Survey
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Add question.
     *
     * @param \AppBundle\Entity\Question $question
     *
     * @return Survey
     */
    public function addQuestion(Question $question)
    {
        $this->questions[] = $question;
        $question->setSurvey($this);

        return $this;
    }

    /**
     * Remove question.
     *
     * @param \AppBundle\Entity\Question $question
     */
    public function removeQuestion(Question $question)
    {
        $this->questions->removeElement($question);
        $question->setSurvey(null);
    }

    /**
     * Get questions.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Add answer.
     *
     * @param \AppBundle\Entity\Answer $answer
     *
     * @return Survey
     */
    public function addAnswer(Answer $answer)
    {
        $this->answers[] = $answer;
        $answer->setSurvey($this);

        return $this;
    }

    /**
     * Remove answer.
     *
     * @param \AppBundle\Entity\Answer $answer
     */
    public function removeAnswer(Answer $answer)
    {
        $this->answers->removeElement($answer);
        $answer->setSurvey(null);
    }

    /**
     * Get answers.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Survey
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set data.
     *
     * @param array $configuration
     *
     * @return Survey
     */
    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;

        return $this;
    }

    /**
     * Get data.
     *
     * @return array
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    public function getRating()
    {
        $configuration = $this->getConfiguration();

        return isset($configuration['rating']) ? $configuration['rating'] : [];
    }

    /**
     * Set instructions.
     *
     * @param string $instructions
     *
     * @return Survey
     */
    public function setInstructions($instructions)
    {
        $this->instructions = $instructions;

        return $this;
    }

    /**
     * Get instructions.
     *
     * @return string
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function setQuestionCategories() {
        $category = null;
        foreach ($this->getQuestions() as $question) {
            if ($question->getCategory() !== null) {
                $category = $question->getCategory();
            } else {
                $question->setCategory($category);
            }
        }
    }

    public function getCategoryRanges() {
        $ranges = [];
        $questions = $this->getQuestions();
        $start = 0;
        while ($start < count($questions)) {
            $category = $questions[$start]->getCategory();
            $end = $start;
            while ($end < count($questions) && $questions[$end]->getCategory() === $category) {
                $end++;
            }
            $key = $start . ($start === $end - 1 ? '' : '-' . ($end - 1));
            $ranges[$key] = $category;
            $start = $end;
        }

        return $ranges;
    }
}
