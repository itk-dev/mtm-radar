<?php

namespace App\Entity;
use App\Repository\QuestionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Uid\Uuid;
use Symfony\Component\Uid\UuidV4;

#[ORM\Entity(repositoryClass: QuestionRepository::class)]
class Question
{
    use TimestampableEntity;
    #[ORM\Id]
    #[ORM\Column(type: 'guid')]
    private ?Uuid $id = null;

    #[ORM\ManyToOne(inversedBy: 'questions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Survey $survey = null;

    #[ORM\Column]
    private ?int $rank = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['survey', 'answer'])]
    private ?string $category = null;

    #[ORM\Column(length: 255)]
    #[Groups(['survey', 'answer'])]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups(['survey', 'answer'])]
    private ?string $text = null;

    #[ORM\Column(length: 255, nullable:true)]
    #[Groups(['survey', 'answer'])]
    private ?string $image = null;

    public function __toString()
    {
        return $this->getSurvey().' - '.$this->getTitle();
    }

    public function __construct()
    {
        $this->id = new UuidV4();
    }

    // public function getId(): ?int
    public function getId(): ?string
    {
        return $this->id;
    }

    public function getSurvey(): ?Survey
    {
        return $this->survey;
    }

    public function setSurvey(?Survey $survey): self
    {
        $this->survey = $survey;

        return $this;
    }

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function setRank(int $rank): self
    {
        $this->rank = $rank;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
