<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArbitreMatch
 *
 * @ORM\Table(name="arbitre_match")
 * @ORM\Entity
 */
class ArbitreMatch
{
    /**
     * @var int
     *
     * @ORM\Column(name="idArb", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idarb;

    /**
     * @var string
     *
     * @ORM\Column(name="nomArb", type="string", length=255, nullable=false)
     */
    private $nomarb;

    /**
     * @var string
     *
     * @ORM\Column(name="specialite", type="string", length=255, nullable=false)
     */
    private $specialite;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;


}
