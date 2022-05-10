<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeStock
 *
 * @ORM\Table(name="commande stock", indexes={@ORM\Index(name="commande stock_ibfk_2", columns={"idPro"})})
 * @ORM\Entity
 */
class CommandeStock
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
     * @ORM\Column(name="idPro", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idpro;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="quantiteAchete", type="integer", nullable=false)
     */
    private $quantiteachete;

    /**
     * @var float
     *
     * @ORM\Column(name="totalCommande", type="float", precision=10, scale=0, nullable=false)
     */
    private $totalcommande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCommande", type="date", nullable=false)
     */
    private $datecommande;


}
