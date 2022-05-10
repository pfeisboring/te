<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParticipationMatch
 *
 * @ORM\Table(name="participation match", indexes={@ORM\Index(name="idMatchh", columns={"idMatchh"})})
 * @ORM\Entity
 */
class ParticipationMatch
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
     * @ORM\Column(name="idMatchh", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idmatchh;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateParticipation", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dateparticipation;


}
