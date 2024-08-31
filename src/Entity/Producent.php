<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Collection;


//Walidacje za pomoca:
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Producent
 *
 * @ORM\Entity
 */

#[ORM\Entity]
#[ApiResource]
class Producent
{

    /**
     * The id of Producent
     * 
     */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    /**
     * The name of Producent 
     * 
     */
    #[Assert\NotBlank]
    #[ORM\Column(type: 'string')]
    private string $name = '';

    /**
     * The description of Producent 
     * 
     */
    #[Assert\NotBlank]
    #[ORM\Column(type: 'text')]
    private string $description = '';

    /**
     * The date Producent was created 
     * 
     */
    #[Assert\NotNull]
    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $createdDate = null;

    /**
     * @var Product[] Produkty Producenta
     */
    #[ORM\OneToMany(
        targetEntity: 'Product',
        mappedBy: 'producent__', // producent__ to zmienna, do ktorej bedziemy sie odnosic
        cascade: ['persist', 'remove'], // jesli usuniemy producenta, wraz z nim zostaą usuniete wszystkie produkty
    )]
    private iterable $products__;

    public function __construct()
    {
        $this->products__ = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getCreatedDate(): ?\DateTimeInterface
    {
        return $this->createdDate;
    }

    public function setCreatedDate(\DateTimeInterface $date): void
    {
        $this->createdDate = $date;
    }



    /**
     * Get the value of products__
     */
    public function getProducts__(): iterable|ArrayCollection
    {
        return $this->products__;
    }
}
