<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participant
 *
 * @ORM\Table(name="participant", uniqueConstraints={@ORM\UniqueConstraint(name="idEven", columns={"idEven"})}, indexes={@ORM\Index(name="fk_b", columns={"id_user"})})
 * @ORM\Entity
 */
class Participant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_parti", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idParti;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    /**
     * @var \Events
     *
     * @ORM\ManyToOne(targetEntity="Events")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEven", referencedColumnName="idEven")
     * })
     */
    private $ideven;

    public function getIdParti(): ?int
    {
        return $this->idParti;
    }

    public function getIdUser(): ?User
    {
        return $this->idUser;
    }

    public function setIdUser(?User $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getIdeven(): ?Events
    {
        return $this->ideven;
    }

    public function setIdeven(?Events $ideven): self
    {
        $this->ideven = $ideven;

        return $this;
    }


}
