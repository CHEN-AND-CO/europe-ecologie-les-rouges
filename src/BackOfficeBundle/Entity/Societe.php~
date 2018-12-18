<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Societe
 *
 * @ORM\Table(name="societe", indexes={@ORM\Index(name="fk_societe_ville1_idx", columns={"ville_id"})})
 * @ORM\Entity
 */
class Societe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="societe", type="string", length=45, nullable=true)
     */
    private $societe;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var \Ville
     *
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ville_id", referencedColumnName="id")
     * })
     */
    private $ville;


}

