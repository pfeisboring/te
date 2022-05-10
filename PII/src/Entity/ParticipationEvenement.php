<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParticipationEvenement
 *
 * @ORM\Table(name="participation evenement", indexes={@ORM\Index(name="idEven", columns={"idEven"})})
 * @ORM\Entity
 */
class ParticipationEvenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="idClient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idclient;

    /**
     * @var int
     *
     * @ORM\Column(name="idEven", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ideven;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateParticipation", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dateparticipation;


}
