<?php

namespace App\Entity;

use App\Repository\UtilisateursRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=UtilisateursRepository::class)
 */
class Utilisateurs
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *@Assert\NotBlank(message="Last Name is required")
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="First Name is required")
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Email is required")
     * @Assert\Email(message = "The email '{{ value }}' is not a valid email.")
     */
    private $Email;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Telephone is required")
     * @Assert\Length(min=8,
     *                max=8,
     *                minMessage = "Telephone must has {{ limit }} numbers",
     *                maxMessage = "Telephone must has {{ limit }} numbers")
     */
    private $Telephone;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Password is required")
     * @Assert\Length(min=8, minMessage = "Your Password must be at least {{ limit }} characters long",)
     */
    private $Password;

    /**
     * @ORM\OneToOne(targetEntity=Boutiques::class, cascade={"persist", "remove"})
     */
    private $Boutique;

    /**
     * @ORM\OneToMany(targetEntity=Livraisons::class, mappedBy="utilisateurs")
     */
    private $Livraison;

    

    public function __construct()
    {
        $this->Livraison = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->Telephone;
    }

    public function setTelephone(string $Telephone): self
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    public function getBoutique(): ?Boutiques
    {
        return $this->Boutique;
    }

    public function setBoutique(?Boutiques $Boutique): self
    {
        $this->Boutique = $Boutique;

        return $this;
    }

    /**
     * @return Collection|Livraisons[]
     */
    public function getLivraison(): Collection
    {
        return $this->Livraison;
    }

    public function addLivraison(Livraisons $livraison): self
    {
        if (!$this->Livraison->contains($livraison)) {
            $this->Livraison[] = $livraison;
            $livraison->setUtilisateurs($this);
        }

        return $this;
    }

    public function removeLivraison(Livraisons $livraison): self
    {
        if ($this->Livraison->removeElement($livraison)) {
            // set the owning side to null (unless already changed)
            if ($livraison->getUtilisateurs() === $this) {
                $livraison->setUtilisateurs(null);
            }
        }

        return $this;
    }

   
}
