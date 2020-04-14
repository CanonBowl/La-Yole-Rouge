<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateHeure;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="Reservations")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\EtatReservation", inversedBy="reservations")
     */
    private $EtatReservation;

    /**
     * @ORM\Column(type="integer")
     */
    private $NbPersonne;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Commentaire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateHeure(): ?\DateTimeInterface
    {
        return $this->DateHeure;
    }

    public function setDateHeure(\DateTimeInterface $DateHeure): self
    {
        $this->DateHeure = $DateHeure;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getEtatReservation(): ?EtatReservation
    {
        return $this->EtatReservation;
    }

    public function setEtatReservation(?EtatReservation $EtatReservation): self
    {
        $this->EtatReservation = $EtatReservation;

        return $this;
    }

    public function getNbPersonne(): ?int
    {
        return $this->NbPersonne;
    }

    public function setNbPersonne(int $NbPersonne): self
    {
        $this->NbPersonne = $NbPersonne;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->Commentaire;
    }

    public function setCommentaire(?string $Commentaire): self
    {
        $this->Commentaire = $Commentaire;

        return $this;
    }
}
