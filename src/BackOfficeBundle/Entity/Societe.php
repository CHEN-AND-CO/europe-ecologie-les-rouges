<?php

namespace BackOfficeBundle\Entity;

/**
 * Societe
 */
class Societe
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $societe;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var \BackOfficeBundle\Entity\Ville
     */
    private $ville;


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
     * Set societe
     *
     * @param string $societe
     *
     * @return Societe
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;
    
        return $this;
    }

    /**
     * Get societe
     *
     * @return string
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Societe
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set ville
     *
     * @param \BackOfficeBundle\Entity\Ville $ville
     *
     * @return Societe
     */
    public function setVille(\BackOfficeBundle\Entity\Ville $ville = null)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return \BackOfficeBundle\Entity\Ville
     */
    public function getVille()
    {
        return $this->ville;
    }
}

