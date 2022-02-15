<?php

namespace App\Entity;
use DateTimeInterface;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ClassroomRepository;
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
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="num is required")
     */
    private $numLivraison;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="etat is required")
     */
    private $etatLivraison;

    /**
     * @ORM\Column(type="datetime")
     

     */

    private $dateLivraison;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="idlivreur is required")

     */
    private $idLivreur;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="idlivraison is required")
     */
    private $idLivraison;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumLivraison(): ?int
    {
        return $this->numLivraison;
    }

    public function setNumLivraison(int $numLivraison): self
    {
        $this->numLivraison = $numLivraison;

        return $this;
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

    public function getIdLivreur(): ?int
    {
        return $this->idLivreur;
    }

    public function setIdLivreur(int $idLivreur): self
    {
        $this->idLivreur = $idLivreur;

        return $this;
    }

    public function getIdLivraison(): ?int
    {
        return $this->idLivraison;
    }

    public function setIdLivraison(int $idLivraison): self
    {
        $this->idLivraison = $idLivraison;

        return $this;
    }
}
