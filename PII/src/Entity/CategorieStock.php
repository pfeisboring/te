<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieStock
 *
 * @ORM\Table(name="categorie_stock")
 * @ORM\Entity
 */
class CategorieStock
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcat;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;


}
