<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity
 */
class Survey
{
    use TimestampableEntity;

    /**
     * @ORM\Id
     * @ORM\Column(type="guid")
     * @ORM\GeneratedValue(strategy="UUID")
     * @Groups({"survey", "answers"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"survey", "answers"})
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     * @Groups({"survey", "answers"})
     */
    private $description;

    /**
     * @ORM\Column(type="json_array")
     * @Groups({"survey", "answers"})
     */
    private $configuration;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Question", mappedBy="survey")
     * @Groups({"survey", "answers"})
     */
    private $questions;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Answers", mappedBy="survey")
     */
    private $answers;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->questions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->answers = new \Doctrine\Common\Collections\ArrayCollection();
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
    public function addQuestion(\AppBundle\Entity\Question $question)
    {
        $this->questions[] = $question;

        return $this;
    }

    /**
     * Remove question.
     *
     * @param \AppBundle\Entity\Question $question
     */
    public function removeQuestion(\AppBundle\Entity\Question $question)
    {
        $this->questions->removeElement($question);
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
     * @param \AppBundle\Entity\Answers $answer
     *
     * @return Survey
     */
    public function addAnswer(\AppBundle\Entity\Answers $answer)
    {
        $this->answers[] = $answer;

        return $this;
    }

    /**
     * Remove answer.
     *
     * @param \AppBundle\Entity\Answers $answer
     */
    public function removeAnswer(\AppBundle\Entity\Answers $answer)
    {
        $this->answers->removeElement($answer);
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
}
