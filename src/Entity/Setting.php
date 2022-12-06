<?php
/*
 * This file is copied over from itk-dev/config-bundle.
 *
 * (c) 2022 ITK Development
 *
 * This source file is subject to the MIT license.
 */


namespace App\Entity;

use Craue\ConfigBundle\Entity\BaseSetting;
use Craue\ConfigBundle\Repository\SettingRepository as RepositorySettingRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass:RepositorySettingRepository::class)]
#[ORM\Table(name:'itkdev_setting')]
// #[ORM\Entity(repositoryClass: SettingRepository::class)]
class Setting extends BaseSetting
{
    // #[ORM\Id]
    // // #[ORM\GeneratedValue]
    // #[ORM\Column]
    // protected $name = null;


    const TYPE_ARRAY = 'array';
    const TYPE_BOOLEAN = 'boolean';
    const TYPE_DATE = 'date';
    const TYPE_DATETIME = 'datetime';
    const TYPE_INTEGER = 'integer';
    const TYPE_STRING = 'string';
    const TYPE_TEXT = 'text';
    const TYPE_TIME = 'time';

    // #[ORM\Id]
    // protected $name;


    #[ORM\Column(type: Types::TEXT, nullable: true, name: 'description')]
    protected ?string $description = null;

    #[ORM\Column(length: 255, nullable: true, name:"type")]
    protected ?string $type = null;

    #[ORM\Column(length: 255, nullable: true, name:"form_type")]
    protected ?string $formType = null;

    #[ORM\Column(length: 255, nullable: true, name:"value_string")]
    protected $value = null;

    #[ORM\Column(type: Types::TEXT, nullable: true, name:"value_text")]
    protected ?string $valueText = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true, name:"value_datetime")]
    protected ?\DateTimeInterface $valueDateTime = null;

    #[ORM\Column(nullable: true, name:"value_integer")]
    protected ?int $valueInteger = null;

    #[ORM\Column(nullable: true, name:"value_boolean")]
    protected ?int $valueBoolean = null;

    #[ORM\Column(type: Types::JSON, nullable: true, name:"value_array")]
    protected ?int $valueArray;



    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription( $description)
    {
        $this->description = $description;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function getFormType()
    {
        return $this->formType;
    }

    public function setFormType($formType)
    {
        $this->formType = $formType;

        return $this;
    }

    public function getValue()
    {
        switch ($this->getType()) {
            case self::TYPE_ARRAY:
                return $this->getValueArray();
            case self::TYPE_BOOLEAN:
                return $this->getValueBoolean();
            case self::TYPE_DATE:
            case self::TYPE_DATETIME:
            case self::TYPE_TIME:
                return $this->getValueDateTime();
            case self::TYPE_INTEGER:
                return $this->getValueInteger();
            case self::TYPE_STRING:
                return $this->getValueString();
            case self::TYPE_TEXT:
                return $this->getValueText();
        }

        // Fallback (type is null).
        return $this->getValueString();
    }

    public function setValue($value)
    {
        switch ($this->getType()) {
            case self::TYPE_ARRAY:
                return $this->setValueArray($value);
            case self::TYPE_BOOLEAN:
                return $this->setValueBoolean($value);
            case self::TYPE_DATE:
            case self::TYPE_DATETIME:
            case self::TYPE_TIME:
                return $this->setValueDateTime($value);
            case self::TYPE_INTEGER:
                return $this->setValueInteger($value);
            case self::TYPE_STRING:
                return $this->setValueString($value);
            case self::TYPE_TEXT:
                return $this->setValueText($value);
        }

        // Fallback (type is null).
        return $this->setValueString($value);
    }

    public function getPropertyPath()
    {
        switch ($this->getType()) {
            case self::TYPE_ARRAY:
                return 'valueArray';
            case self::TYPE_BOOLEAN:
                return 'valueBoolean';
            case self::TYPE_DATE:
            case self::TYPE_DATETIME:
            case self::TYPE_TIME:
                return 'valueDateTime';
            case self::TYPE_INTEGER:
                return 'valueInteger';
            case self::TYPE_STRING:
                return 'value';
            case self::TYPE_TEXT:
                return 'valueText';
        }

        // Fallback (type is null).
        return 'value';
    }

    public function getValueText()
    {
        return $this->valueText;
    }

    public function setValueText($valueText)
    {
        $this->valueText = $valueText;

        return $this;
    }

    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    public function setValueDateTime($valueDateTime)
    {
        $this->valueDateTime = $valueDateTime;

        return $this;
    }

    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    public function setValueInteger($valueInteger)
    {
        $this->valueInteger = $valueInteger;

        return $this;
    }

    public function isValueBoolean(): ?bool
    {
        return $this->valueBoolean;
    }

    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    public function setValueBoolean($valueBoolean)
    {
        $this->valueBoolean = $valueBoolean;

        return $this;
    }

    public function getValueArray()
    {
        return $this->valueArray;
    }

    public function setValueArray($valueArray)
    {
        $this->valueArray = $valueArray;

        return $this;
    }

    public function getValueString()
    {
        return $this->value;
    }

    public function setValueString($valueString)
    {
        $this->value = $valueString;

        return $this;
    }
}
