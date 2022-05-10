<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GestionMatch
 *
 * @ORM\Table(name="gestion match", indexes={@ORM\Index(name="idMatchh", columns={"idMatchh"})})
 * @ORM\Entity
 */
class GestionMatch
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
     * @ORM\Column(name="idMatchh", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idmatchh;


}
