<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieClub
 *
 * @ORM\Table(name="categorie_club", indexes={@ORM\Index(name="idClub", columns={"idClub"})})
 * @ORM\Entity
 */
class CategorieClub
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCategorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="nomEntreneur", type="string", length=255, nullable=false)
     */
    private $nomentreneur;

    /**
     * @var string
     *
     * @ORM\Column(name="activite", type="string", length=255, nullable=false)
     */
    private $activite;

    /**
     * @var \Club
     *
     * @ORM\ManyToOne(targetEntity="Club")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClub", referencedColumnName="idClub")
     * })
     */
    private $idclub;


}
