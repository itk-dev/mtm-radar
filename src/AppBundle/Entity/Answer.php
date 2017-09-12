<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity
 */
class Answer
{
    use TimestampableEntity;

    /**
     * @ORM\Id
     * @ORM\Column(type="guid")
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Survey", inversedBy="answers")
     * @ORM\JoinColumn(name="survey_id", referencedColumnName="id", nullable=false)
     * @Groups({"answer"})
     */
    private $survey;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"survey", "answer"})
     */
    private $author;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"survey", "answer"})
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups({"survey", "answer"})
     */
    private $description;

    /**
     * @ORM\Column(type="json_array")
     * @Groups({"answer"})
     */
    private $replies;

    /**
     * @ORM\Column(type="json_array", nullable=true)
     * @Groups({"answer"})
     */
    private $data;

    public function __toString()
    {
        return 'Answer#'.$this->getId();
    }

    /**
     * Get id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set data.
     *
     * @param array $data
     *
     * @return Answer
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data.
     *
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set survey.
     *
     * @param \AppBundle\Entity\Survey $survey
     *
     * @return Answer
     */
    public function setSurvey(Survey $survey = null)
    {
        $this->survey = $survey;

        return $this;
    }

    /**
     * Get survey.
     *
     * @return \AppBundle\Entity\Survey
     */
    public function getSurvey()
    {
        return $this->survey;
    }

    /**
     * Set author.
     *
     * @param string $author
     *
     * @return Answer
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author.
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Answer
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
     * Set description.
     *
     * @param string $description
     *
     * @return Answer
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
     * Set replies.
     *
     * @param ArrayCollection $replies
     *
     * @return Answer
     */
    public function setReplies($replies)
    {
        $this->replies = $replies;

        return $this;
    }

    /**
     * Get replies.
     *
     * @return array
     */
    public function getReplies()
    {
        return $this->replies;
    }
}
