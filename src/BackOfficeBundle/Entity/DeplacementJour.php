<?php

namespace BackOfficeBundle\Entity;

/**
 * DeplacementJour
 */
class DeplacementJour
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $nbKm;

    /**
     * @var float
     */
    private $montant;

    /**
     * @var integer
     */
    private $jour;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $updated;

    /**
     * @var \BackOfficeBundle\Entity\Deplacement
     */
    private $deplacement;

    /**
     * @var \BackOfficeBundle\Entity\TypeDeplacement
     */
    private $typeDeplacement;


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
     * Set nbKm
     *
     * @param float $nbKm
     *
     * @return DeplacementJour
     */
    public function setNbKm($nbKm)
    {
        $this->nbKm = $nbKm;
    
        return $this;
    }

    /**
     * Get nbKm
     *
     * @return float
     */
    public function getNbKm()
    {
        return $this->nbKm;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return DeplacementJour
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    
        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set jour
     *
     * @param integer $jour
     *
     * @return DeplacementJour
     */
    public function setJour($jour)
    {
        $this->jour = $jour;
    
        return $this;
    }

    /**
     * Get jour
     *
     * @return integer
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return DeplacementJour
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return DeplacementJour
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
     * @return DeplacementJour
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
     * Set deplacement
     *
     * @param \BackOfficeBundle\Entity\Deplacement $deplacement
     *
     * @return DeplacementJour
     */
    public function setDeplacement(\BackOfficeBundle\Entity\Deplacement $deplacement = null)
    {
        $this->deplacement = $deplacement;
    
        return $this;
    }

    /**
     * Get deplacement
     *
     * @return \BackOfficeBundle\Entity\Deplacement
     */
    public function getDeplacement()
    {
        return $this->deplacement;
    }

    /**
     * Set typeDeplacement
     *
     * @param \BackOfficeBundle\Entity\TypeDeplacement $typeDeplacement
     *
     * @return DeplacementJour
     */
    public function setTypeDeplacement(\BackOfficeBundle\Entity\TypeDeplacement $typeDeplacement = null)
    {
        $this->typeDeplacement = $typeDeplacement;
    
        return $this;
    }

    /**
     * Get typeDeplacement
     *
     * @return \BackOfficeBundle\Entity\TypeDeplacement
     */
    public function getTypeDeplacement()
    {
        return $this->typeDeplacement;
    }
}
