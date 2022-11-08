<?php

namespace App\Entity;

use App\Repository\SurveyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Component\Uid\UuidV4;
use Symfony\Component\Uid\Uuid;

#[ORM\Entity(repositoryClass: SurveyRepository::class)]
class Survey
{
    use TimestampableEntity;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'guid')]
    private ?Uuid $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $instructions = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $preparations = null;

    #[ORM\Column]
    private array $configuration = [];

    #[ORM\OneToMany(mappedBy: 'survey', targetEntity: Answer::class, orphanRemoval: true)]
    private Collection $answers;

    #[ORM\OneToMany(mappedBy: 'survey', targetEntity: Question::class, cascade:['persist', 'remove'], orphanRemoval:true)]
    // cascade={"persist", "remove"},
    // orphanRemoval=true
    private Collection $questions;

    public function __construct()
    {
        $this->id = new UuidV4;
        $this->answers = new ArrayCollection();
        $this->questions = new ArrayCollection();
        $this->configuration = [
            'rating' => [
                '1' => 'i ringe grad',
                '2' => 'i nogen grad',
                '3' => 'i høj grad',
                '4' => 'i meget høj grad',
                '0' => 'ikke relevant',
            ],
            'chart' => [
                'type' => 'radar',
            ],
        ];
    }

    public function __toString()
    {
        return $this->getTitle() ?? 'Survey#'.$this->getId();

    }





    // public function getId(): ?Uuid
    public function getId(): ?UuidV4
    {
        return $this->id;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getInstructions(): ?string
    {
        return $this->instructions;
    }

    public function setInstructions(?string $instructions): self
    {
        $this->instructions = $instructions;

        return $this;
    }

    public function getPreparations(): ?string
    {
        return $this->preparations;
    }

    public function setPreparations(?string $preparations): self
    {
        $this->preparations = $preparations;

        return $this;
    }

    public function getConfiguration(): array
    {
        return $this->configuration;
    }

    public function setConfiguration(array $configuration): self
    {
        $this->configuration = $configuration;

        return $this;
    }

    /**
     * @return Collection<int, Answer>
     */
    public function getAnswers(): Collection
    {
        return $this->answers;
    }

    public function addAnswer(Answer $answer): self
    {
        if (!$this->answers->contains($answer)) {
            $this->answers->add($answer);
            $answer->setSurvey($this);
        }

        return $this;
    }

    public function removeAnswer(Answer $answer): self
    {
        if ($this->answers->removeElement($answer)) {
            // set the owning side to null (unless already changed)
            if ($answer->getSurvey() === $this) {
                $answer->setSurvey(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Question>
     */
    public function getQuestions(): Collection
    {
        return $this->questions;
    }

    public function addQuestion(Question $question): self
    {
        if (!$this->questions->contains($question)) {
            $this->questions->add($question);
            $question->setSurvey($this);
        }

        return $this;
    }

    public function removeQuestion(Question $question): self
    {
        if ($this->questions->removeElement($question)) {
            // set the owning side to null (unless already changed)
            if ($question->getSurvey() === $this) {
                $question->setSurvey(null);
            }
        }

        return $this;
    }

    public function getRating()
    {
        $configuration = $this->getConfiguration();

        return isset($configuration['rating']) ? $configuration['rating'] : [];
    }




}
