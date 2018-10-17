<?php

namespace BackOfficeBundle\Entity;

/**
 * TypeDeplacement
 */
class TypeDeplacement
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $typeDeplacement;

    /**
     * @var float
     */
    private $montant;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $updated;


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
     * Set typeDeplacement
     *
     * @param string $typeDeplacement
     *
     * @return TypeDeplacement
     */
    public function setTypeDeplacement($typeDeplacement)
    {
        $this->typeDeplacement = $typeDeplacement;
    
        return $this;
    }

    /**
     * Get typeDeplacement
     *
     * @return string
     */
    public function getTypeDeplacement()
    {
        return $this->typeDeplacement;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return TypeDeplacement
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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return TypeDeplacement
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
     * @return TypeDeplacement
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
}

