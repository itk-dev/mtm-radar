<?php

namespace App\Entity;

use App\Repository\AnswerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Uid\Uuid;
use Symfony\Component\Uid\UuidV4;

#[ORM\Entity(repositoryClass: AnswerRepository::class)]
class Answer
{
    use TimestampableEntity;

    #[ORM\Id]
    #[ORM\Column(type: 'guid')]
    private ?Uuid $id = null;

    #[ORM\ManyToOne(inversedBy: 'answers', targetEntity: Survey::class)]
    #[ORM\JoinColumn(nullable: false, name: 'survey_id', referencedColumnName: 'id')]
    #[Groups(['answer'])]
    private ?Survey $survey = null;

    #[ORM\Column(length: 255)]
    #[Groups(['survey', 'answer'])]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['survey', 'answer'])]
    private ?string $company = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['survey', 'answer'])]
    private ?string $address = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['survey', 'answer'])]
    private ?string $documentationId = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['survey', 'answer'])]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['survey', 'answer'])]
    private ?string $description = null;

    #[ORM\Column]
    #[Groups(['answer'])]
    private array $replies = [];

    #[ORM\Column(nullable: true)]
    #[Groups(['answer'])]
    private array $data = [];

    public function __construct()
    {
        $this->id = new UuidV4();
        $this->replies = [];
        // $this->replies = new ArrayCollection();
    }

    public function __toString()
    {
        return 'Answer#'.$this->getId();
    }

    // public function getId(): ?UuidV4
    public function getId(): ?string
    {
        return $this->id;
    }

    public function getSurvey(): ?Survey
    {
        return $this->survey;
    }

    public function setSurvey(?Survey $survey = null): self
    {
        $this->survey = $survey;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCompany(): mixed
    {
        return $this->company;
    }

    public function setCompany(mixed $company)
    {
        $this->company = $company;

        return $this;
    }

    public function getAddress(): mixed
    {
        return $this->address;
    }

    public function setAddress(mixed $address)
    {
        $this->address = $address;

        return $this;
    }

    public function getDocumentationId(): mixed
    {
        return $this->documentationId;
    }

    public function setDocumentationId(mixed $documentationId)
    {
        $this->documentationId = $documentationId;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getReplies(): array
    {
        return $this->replies;
    }

    public function setReplies(array $replies): self
    {
        $this->replies = $replies;

        return $this;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
