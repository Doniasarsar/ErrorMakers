<?php

namespace App\Entity;

use App\Repository\BoutiquesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\OneToMany(targetEntity=Utilisateurs::class, mappedBy="Boutique")
     */
    private $utilisateurs;

    public function __construct()
    {
        $this->utilisateurs = new ArrayCollection();
    }

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

    /**
     * @return Collection|Utilisateurs[]
     */
    public function getUtilisateurs(): Collection
    {
        return $this->utilisateurs;
    }

    public function addUtilisateur(Utilisateurs $utilisateur): self
    {
        if (!$this->utilisateurs->contains($utilisateur)) {
            $this->utilisateurs[] = $utilisateur;
            $utilisateur->setBoutique($this);
        }

        return $this;
    }

    public function removeUtilisateur(Utilisateurs $utilisateur): self
    {
        if ($this->utilisateurs->removeElement($utilisateur)) {
            // set the owning side to null (unless already changed)
            if ($utilisateur->getBoutique() === $this) {
                $utilisateur->setBoutique(null);
            }
        }

        return $this;
    }
}
