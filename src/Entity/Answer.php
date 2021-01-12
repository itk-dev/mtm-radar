<?php

namespace App\Entity;

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
     * @ORM\ManyToOne(targetEntity="App\Entity\Survey", inversedBy="answers")
     * @ORM\JoinColumn(name="survey_id", referencedColumnName="id", nullable=false)
     * @Groups({"answer"})
     */
    private $survey;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"survey", "answer"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"survey", "answer"})
     */
    private $company;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups({"survey", "answer"})
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"survey", "answer"})
     */
    private $documentationId;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
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

    public function __construct()
    {
        $this->replies = new ArrayCollection();
    }

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
     * @param \App\Entity\Survey $survey
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
     * @return \App\Entity\Survey
     */
    public function getSurvey()
    {
        return $this->survey;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Answer
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;

        return $this;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocumentationId()
    {
        return $this->documentationId;
    }

    /**
     * @param mixed $documentationId
     */
    public function setDocumentationId($documentationId)
    {
        $this->documentationId = $documentationId;

        return $this;
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
