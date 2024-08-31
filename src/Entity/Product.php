<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

//Walidacje za pomoca:
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity]
#[ApiResource]
class Product
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string')]
    #[Assert\NotBlank]
    private ?string $name = '';

    #[ORM\Column(type: "text")]
    private ?string $description = '';

    #[Assert\NotNull]
    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $createdDate = null;

    #[ORM\ManyToOne(
        targetEntity: 'Producent',
        inversedBy: 'products__'
    )]
    private ?Producent $producent__ = null;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of createdDate
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set the value of createdDate
     *
     * @return  self
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get the value of producent__
     */
    public function getProducent__()
    {
        return $this->producent__;
    }

    /**
     * Set the value of producent__
     *
     * @return  self
     */
    public function setProducent__($producent__)
    {
        $this->producent__ = $producent__;

        return $this;
    }
}
