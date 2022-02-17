<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $nomClient;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank 
     */
    private $prenomClient;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank 
     */
    private $postcode;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank 
     * @Assert\Length(
     *      min = 8,
     *      max = 8,
     * )
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank 
     */
    private $montant;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank 
     * @Assert\Date
     * @var string A "Y-m-d" formatted value 
     */
    private $dateCommande;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank 
     */
    private $etatCommande;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank 
     */
    private $modePaiemenet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomClient(): ?string
    {
        return $this->nomClient;
    }

    public function setNomClient(string $nomClient): self
    {
        $this->nomClient = $nomClient;

        return $this;
    }

    public function getPrenomClient(): ?string
    {
        return $this->prenomClient;
    }

    public function setPrenomClient(string $prenomClient): self
    {
        $this->prenomClient = $prenomClient;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    public function setPostcode(string $postcode): self
    {
        $this->postcode = $postcode;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(string $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->dateCommande;
    }

    public function setDateCommande(\DateTimeInterface $dateCommande): self
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    public function getEtatCommande(): ?int
    {
        return $this->etatCommande;
    }

    public function setEtatCommande(int $etatCommande): self
    {
        $this->etatCommande = $etatCommande;

        return $this;
    }

    public function getModePaiemenet(): ?string
    {
        return $this->modePaiemenet;
    }

    public function setModePaiemenet(string $modePaiemenet): self
    {
        $this->modePaiemenet = $modePaiemenet;

        return $this;
    }
}