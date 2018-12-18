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



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     *
     * @return Deplacement
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    
        return $this;
    }

    /**
     * Get annee
     *
     * @return integer
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set mois
     *
     * @param integer $mois
     *
     * @return Deplacement
     */
    public function setMois($mois)
    {
        $this->mois = $mois;
    
        return $this;
    }

    /**
     * Get mois
     *
     * @return integer
     */
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * Set dateValidation
     *
     * @param \DateTime $dateValidation
     *
     * @return Deplacement
     */
    public function setDateValidation($dateValidation)
    {
        $this->dateValidation = $dateValidation;
    
        return $this;
    }

    /**
     * Get dateValidation
     *
     * @return \DateTime
     */
    public function getDateValidation()
    {
        return $this->dateValidation;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Deplacement
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Deplacement
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    
        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set validation
     *
     * @param boolean $validation
     *
     * @return Deplacement
     */
    public function setValidation($validation)
    {
        $this->validation = $validation;
    
        return $this;
    }

    /**
     * Get validation
     *
     * @return boolean
     */
    public function getValidation()
    {
        return $this->validation;
    }

    /**
     * Set user
     *
     * @param \BackOfficeBundle\Entity\User $user
     *
     * @return Deplacement
     */
    public function setUser(\BackOfficeBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \BackOfficeBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set user1
     *
     * @param \BackOfficeBundle\Entity\User $user1
     *
     * @return Deplacement
     */
    public function setUser1(\BackOfficeBundle\Entity\User $user1 = null)
    {
        $this->user1 = $user1;
    
        return $this;
    }

    /**
     * Get user1
     *
     * @return \BackOfficeBundle\Entity\User
     */
    public function getUser1()
    {
        return $this->user1;
    }
}
