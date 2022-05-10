<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GestionEvenement
 *
 * @ORM\Table(name="gestion evenement", indexes={@ORM\Index(name="idEven", columns={"idEven"})})
 * @ORM\Entity
 */
class GestionEvenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="idAdmin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idadmin;

    /**
     * @var int
     *
     * @ORM\Column(name="idEven", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ideven;


}
