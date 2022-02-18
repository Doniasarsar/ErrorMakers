<?php

namespace App\Entity;
use DateTimeInterface;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\LivraisonRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=LivraisonRepository::class)
 */
class Livraison
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

   

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="etat is required")
     */
    private $etatLivraison;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     * @Assert\NotBlank(message="etat is required")
     */

    private $dateLivraison;

  

  

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="idlivraison is required")
     
     */
    private $prixLivraison;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateurs::class, inversedBy="livraisons")
     */
    private $livreur;

    /**
     * @ORM\OneToOne(targetEntity=Commande::class, cascade={"persist", "remove"})
     */
    private $Commande;

    

    public function __construct()
    {
        $this->livraisonId = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

 


    public function getEtatLivraison(): ?string
    {
        return $this->etatLivraison;
    }

    public function setEtatLivraison(string $etatLivraison): self
    {
        $this->etatLivraison = $etatLivraison;

        return $this;
    }

    public function getDateLivraison(): ?\DateTimeInterface
    {
        return $this->dateLivraison;
    }

    public function setDateLivraison(\DateTimeInterface $dateLivraison): self
    {
        $this->dateLivraison = $dateLivraison;

        return $this;
    }

    

    public function getPrixLivraison(): ?float
    {
        return $this->prixLivraison;
    }

    public function setPrixLivraison(float $prixLivraison): self
    {
        $this->prixLivraison = $prixLivraison;

        return $this;
    }

    public function getLivreur(): ?Utilisateurs
    {
        return $this->livreur;
    }

    public function setLivreur(?Utilisateurs $livreur): self
    {
        $this->livreur = $livreur;

        return $this;
    }

    public function getCommande(): ?Commande
    {
        return $this->Commande;
    }

    public function setCommande(?Commande $Commande): self
    {
        $this->Commande = $Commande;

        return $this;
    }

  
}
