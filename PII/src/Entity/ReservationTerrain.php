<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservationTerrain
 *
 * @ORM\Table(name="reservation terrain", indexes={@ORM\Index(name="idTerrain", columns={"idTerrain"})})
 * @ORM\Entity
 */
class ReservationTerrain
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
     * @ORM\Column(name="idTerrain", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idterrain;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReservation", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $datereservation;


}
