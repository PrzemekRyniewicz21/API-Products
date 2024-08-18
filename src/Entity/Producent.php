<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Producent
 *
 * @ORM\Entity
 */

#[ORM\Entity]
#[ApiResource]
class Producent {

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
    #[ORM\Column(type: 'string')]
    private string $name = '';

    /**
     * The description of Producent 
     * 
     */
    #[ORM\Column(type: 'text')]
    private string $description = '';

    /**
     * The date Producent was created 
     * 
     */
    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $createdDate = null;

    public function getId(): ?int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function getCreatedDate(): ?\DateTimeInterface {
        return $this->createdDate;
    }

    public function setCreatedDate(\DateTimeInterface $date): void {
        $this->createdDate = $date;
    }
}
