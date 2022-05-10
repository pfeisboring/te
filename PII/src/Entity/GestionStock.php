<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GestionStock
 *
 * @ORM\Table(name="gestion stock", indexes={@ORM\Index(name="idPro", columns={"idPro"})})
 * @ORM\Entity
 */
class GestionStock
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
     * @ORM\Column(name="idPro", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idpro;


}
