<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GestionTerrain
 *
 * @ORM\Table(name="gestion terrain", indexes={@ORM\Index(name="idTerrain", columns={"idTerrain"})})
 * @ORM\Entity
 */
class GestionTerrain
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
     * @ORM\Column(name="idTerrain", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idterrain;


}
