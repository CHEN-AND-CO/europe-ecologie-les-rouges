<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeDeplacement
 *
 * @ORM\Table(name="type_deplacement")
 * @ORM\Entity
 */
class TypeDeplacement
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
     * @ORM\Column(name="type_deplacement", type="string", length=45, nullable=true)
     */
    private $typeDeplacement;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;

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
