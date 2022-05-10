<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRole
 *
 * @ORM\Table(name="user_role", indexes={@ORM\Index(name="idUser", columns={"idUser"}), @ORM\Index(name="idRole", columns={"idRole"})})
 * @ORM\Entity
 */
class UserRole
{
    /**
     * @var int
     *
     * @ORM\Column(name="idUser", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduser;

    /**
     * @var int
     *
     * @ORM\Column(name="idRole", type="integer", nullable=false)
     */
    private $idrole;


}
