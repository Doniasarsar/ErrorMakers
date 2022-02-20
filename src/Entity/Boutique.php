<?php

namespace App\Entity;

use App\Entity\Utilisateurs;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\BoutiqueRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=BoutiqueRepository::class)
 */
class Boutique
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
    private $descBoutique;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseBoutique;

    /**
     * @ORM\OneToMany(targetEntity=Produit::class, mappedBy="boutique")
     */
    private $produit;

    /**
     * @ORM\OneToOne(targetEntity=Utilisateurs::class, cascade={"persist", "remove"})
     */
    private $Commercant;

   

    


    public function __construct()
    {
        $this->produit = new ArrayCollection();
        $this->commercant = new ArrayCollection();
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

    public function getDescBoutique(): ?string
    {
        return $this->descBoutique;
    }

    public function setDescBoutique(string $descBoutique): self
    {
        $this->descBoutique = $descBoutique;

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
     * @return Collection|Produit[]
     */
    public function getProduit(): Collection
    {
        return $this->produit;
    }

    public function addProduit(Produit $produit): self
    {
        if (!$this->produit->contains($produit)) {
            $this->produit[] = $produit;
            $produit->setBoutique($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): self
    {
        if ($this->produit->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getBoutique() === $this) {
                $produit->setBoutique(null);
            }
        }

        return $this;
    }

    public function getCommercant(): ?Utilisateurs
    {
        return $this->Commercant;
    }

    public function setCommercant(?Utilisateurs $Commercant): self
    {
        $this->Commercant = $Commercant;

        return $this;
    }

   

   
}
