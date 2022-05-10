<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * PersonnelTerrain
 *
 * @ORM\Table(name="personnel_terrain", indexes={@ORM\Index(name="idTerrain", columns={"idTerrain"})})
 * @ORM\Entity
 */
class PersonnelTerrain
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPersonnel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpersonnel;

    /**
     * @Assert\NotBlank(message="Nom ne doit pas être vide")
     * @Assert\Length(
     *     min = 5,
     *     minMessage="Entrez un nom au minimum 5 caracteres"
     * )
     * @var string
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @Assert\NotBlank(message="Poste ne doit pas être vide")
     * @Assert\Length(
     *     min = 5,
     *     minMessage="Entrez un poste au minimum 5 caracteres"
     * )
     * @var string
     * @ORM\Column(name="poste", type="string", length=255, nullable=false)
     */
    private $poste;

    /**
     * @var int
    *@Assert\NotBlank(message="id ne doit pas être vide")
    * @Assert\Length(
    *     min = 1,
    *     minMessage="Entrez un id avec au moins 1 caratcere"
    * )
    * @ORM\Column(name="idTerrain", type="integer", nullable=false)

     */
    private $idterrain;

    /**
     * @return int
     */
    public function getIdpersonnel(): int
    {
        return $this->idpersonnel;
    }

    /**
     * @return string
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @return string
     */
    public function getPoste(): ?string
    {
        return $this->poste;
    }

    /**
     * @return int
     */
    public function getIdterrain(): ?int
    {
        return $this->idterrain;
    }

    /**
     * @param int $idpersonnel
     */
    public function setIdpersonnel(int $idpersonnel): void
    {
        $this->idpersonnel = $idpersonnel;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @param string $poste
     */
    public function setPoste(string $poste): void
    {
        $this->poste = $poste;
    }

    /**
     * @param int $idterrain
     */
    public function setIdterrain(int $idterrain): void
    {
        $this->idterrain = $idterrain;
    }

}
