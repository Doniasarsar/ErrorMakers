<?php

namespace App\Entity;

use App\Repository\LivraisonsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LivraisonsRepository::class)
 */
class Livraisons
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $DateSortie;

    /**
     * @ORM\Column(type="date")
     */
    private $DateArrive;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Etat;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateurs::class, inversedBy="Livraison")
     */
    private $utilisateurs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateSortie(): ?\DateTimeInterface
    {
        return $this->DateSortie;
    }

    public function setDateSortie(\DateTimeInterface $DateSortie): self
    {
        $this->DateSortie = $DateSortie;

        return $this;
    }

    public function getDateArrive(): ?\DateTimeInterface
    {
        return $this->DateArrive;
    }

    public function setDateArrive(\DateTimeInterface $DateArrive): self
    {
        $this->DateArrive = $DateArrive;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->Etat;
    }

    public function setEtat(string $Etat): self
    {
        $this->Etat = $Etat;

        return $this;
    }

    public function getUtilisateurs(): ?Utilisateurs
    {
        return $this->utilisateurs;
    }

    public function setUtilisateurs(?Utilisateurs $utilisateurs): self
    {
        $this->utilisateurs = $utilisateurs;

        return $this;
    }
}
