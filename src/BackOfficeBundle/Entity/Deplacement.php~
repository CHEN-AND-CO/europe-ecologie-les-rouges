<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deplacement
 *
 * @ORM\Table(name="deplacement", indexes={@ORM\Index(name="fk_deplacement_user1_idx", columns={"user_id"}), @ORM\Index(name="fk_deplacement_user2_idx", columns={"user_id1"})})
 * @ORM\Entity
 */
class Deplacement
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
     * @var integer
     *
     * @ORM\Column(name="annee", type="integer", nullable=true)
     */
    private $annee;

    /**
     * @var integer
     *
     * @ORM\Column(name="mois", type="integer", nullable=true)
     */
    private $mois;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_validation", type="date", nullable=true)
     */
    private $dateValidation;

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
     * @var boolean
     *
     * @ORM\Column(name="validation", type="boolean", nullable=true)
     */
    private $validation;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id1", referencedColumnName="id")
     * })
     */
    private $user1;


}

