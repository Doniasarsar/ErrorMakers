<?php

namespace App\Entity;

use App\Repository\BoutiquesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BoutiquesRepository::class)
 */
class Boutiques
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomBoutique;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeBoutique;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descriptionBoutique;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseBoutique;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomBoutique(): ?string
    {
        return $this->nomBoutique;
    }

    public function setNomBoutique(string $nomBoutique): self
    {
        $this->nomBoutique = $nomBoutique;

        return $this;
    }

    public function getTypeBoutique(): ?string
    {
        return $this->typeBoutique;
    }

    public function setTypeBoutique(string $typeBoutique): self
    {
        $this->typeBoutique = $typeBoutique;

        return $this;
    }

    public function getDescriptionBoutique(): ?string
    {
        return $this->descriptionBoutique;
    }

    public function setDescriptionBoutique(string $descriptionBoutique): self
    {
        $this->descriptionBoutique = $descriptionBoutique;

        return $this;
    }

    public function getAdresseBoutique(): ?string
    {
        return $this->adresseBoutique;
    }

    public function setAdresseBoutique(string $adresseBoutique): self
    {
        $this->adresseBoutique = $adresseBoutique;

        return $this;
    }
}
