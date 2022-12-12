<?php

namespace App\Entity;

use App\Repository\DataRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DataRepository::class)]
class Data
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $nbrArbre_benevole = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $anneeArbre_benevole = null;

    #[ORM\Column]
    private ?int $nbreArbre_agriculteur = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $anneeArbre_agriculteur = null;

    #[ORM\Column]
    private ?int $nbreArbre_entreprise = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $anneeArbre_entreprise = null;

    #[ORM\Column]
    private ?int $nbreArbre_asso = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $anneeArbre_asso = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbrArbreBenevole(): ?int
    {
        return $this->nbrArbre_benevole;
    }

    public function setNbrArbreBenevole(int $nbrArbre_benevole): self
    {
        $this->nbrArbre_benevole = $nbrArbre_benevole;

        return $this;
    }

    public function getAnneeArbreBenevole(): ?\DateTimeInterface
    {
        return $this->anneeArbre_benevole;
    }

    public function setAnneeArbreBenevole(\DateTimeInterface $anneeArbre_benevole): self
    {
        $this->anneeArbre_benevole = $anneeArbre_benevole;

        return $this;
    }

    public function getNbreArbreAgriculteur(): ?int
    {
        return $this->nbreArbre_agriculteur;
    }

    public function setNbreArbreAgriculteur(int $nbreArbre_agriculteur): self
    {
        $this->nbreArbre_agriculteur = $nbreArbre_agriculteur;

        return $this;
    }

    public function getAnneeArbreAgriculteur(): ?\DateTimeInterface
    {
        return $this->anneeArbre_agriculteur;
    }

    public function setAnneeArbreAgriculteur(\DateTimeInterface $anneeArbre_agriculteur): self
    {
        $this->anneeArbre_agriculteur = $anneeArbre_agriculteur;

        return $this;
    }

    public function getNbreArbreEntreprise(): ?int
    {
        return $this->nbreArbre_entreprise;
    }

    public function setNbreArbreEntreprise(int $nbreArbre_entreprise): self
    {
        $this->nbreArbre_entreprise = $nbreArbre_entreprise;

        return $this;
    }

    public function getAnneeArbreEntreprise(): ?\DateTimeInterface
    {
        return $this->anneeArbre_entreprise;
    }

    public function setAnneeArbreEntreprise(\DateTimeInterface $anneeArbre_entreprise): self
    {
        $this->anneeArbre_entreprise = $anneeArbre_entreprise;

        return $this;
    }

    public function getNbreArbreAsso(): ?int
    {
        return $this->nbreArbre_asso;
    }

    public function setNbreArbreAsso(int $nbreArbre_asso): self
    {
        $this->nbreArbre_asso = $nbreArbre_asso;

        return $this;
    }

    public function getAnneeArbreAsso(): ?\DateTimeInterface
    {
        return $this->anneeArbre_asso;
    }

    public function setAnneeArbreAsso(\DateTimeInterface $anneeArbre_asso): self
    {
        $this->anneeArbre_asso = $anneeArbre_asso;

        return $this;
    }
}
