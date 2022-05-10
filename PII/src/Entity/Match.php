<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Match
 *
 * @ORM\Table(name="match", indexes={@ORM\Index(name="idArb", columns={"idArb"})})
 * @ORM\Entity
 */
class Match
{
    /**
     * @var int
     *
     * @ORM\Column(name="idMatchh", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmatchh;

    /**
     * @var string
     *
     * @ORM\Column(name="typeMatchh", type="string", length=255, nullable=false)
     */
    private $typematchh;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateMatchh", type="date", nullable=false)
     */
    private $datematchh;

    /**
     * @var int
     *
     * @ORM\Column(name="idArb", type="integer", nullable=false)
     */
    private $idarb;


}
