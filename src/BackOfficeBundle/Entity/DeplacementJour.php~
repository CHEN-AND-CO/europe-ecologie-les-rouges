<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeplacementJour
 *
 * @ORM\Table(name="deplacement_jour", indexes={@ORM\Index(name="fk_deplacement_jour_type_deplacement1_idx", columns={"type_deplacement_id"}), @ORM\Index(name="fk_deplacement_jour_deplacement1_idx", columns={"deplacement_id"})})
 * @ORM\Entity
 */
class DeplacementJour
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
     * @var float
     *
     * @ORM\Column(name="nb_km", type="float", precision=10, scale=0, nullable=true)
     */
    private $nbKm;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var integer
     *
     * @ORM\Column(name="jour", type="integer", nullable=true)
     */
    private $jour;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    private $updated;

    /**
     * @var \Deplacement
     *
     * @ORM\ManyToOne(targetEntity="Deplacement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deplacement_id", referencedColumnName="id")
     * })
     */
    private $deplacement;

    /**
     * @var \TypeDeplacement
     *
     * @ORM\ManyToOne(targetEntity="TypeDeplacement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_deplacement_id", referencedColumnName="id")
     * })
     */
    private $typeDeplacement;


}

