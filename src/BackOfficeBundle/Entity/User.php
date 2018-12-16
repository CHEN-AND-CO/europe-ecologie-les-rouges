<?php

namespace BackOfficeBundle\Entity;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var float
     */
    private $distanceInit;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $updated;

    /**
     * @var \BackOfficeBundle\Entity\Service
     */
    private $service;

    /**
     * @var \BackOfficeBundle\Entity\Societe
     */
    private $societe;

    /**
     * @var \BackOfficeBundle\Entity\TypeUser
     */
    private $typeUser;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return User
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
     * Set distanceInit
     *
     * @param float $distanceInit
     *
     * @return User
     */
    public function setDistanceInit($distanceInit)
    {
        $this->distanceInit = $distanceInit;
    
        return $this;
    }

    /**
     * Get distanceInit
     *
     * @return float
     */
    public function getDistanceInit()
    {
        return $this->distanceInit;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return User
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
     * @return User
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
     * Set service
     *
     * @param \BackOfficeBundle\Entity\Service $service
     *
     * @return User
     */
    public function setService(\BackOfficeBundle\Entity\Service $service = null)
    {
        $this->service = $service;
    
        return $this;
    }

    /**
     * Get service
     *
     * @return \BackOfficeBundle\Entity\Service
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set societe
     *
     * @param \BackOfficeBundle\Entity\Societe $societe
     *
     * @return User
     */
    public function setSociete(\BackOfficeBundle\Entity\Societe $societe = null)
    {
        $this->societe = $societe;
    
        return $this;
    }

    /**
     * Get societe
     *
     * @return \BackOfficeBundle\Entity\Societe
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set typeUser
     *
     * @param \BackOfficeBundle\Entity\TypeUser $typeUser
     *
     * @return User
     */
    public function setTypeUser(\BackOfficeBundle\Entity\TypeUser $typeUser = null)
    {
        $this->typeUser = $typeUser;
    
        return $this;
    }

    /**
     * Get typeUser
     *
     * @return \BackOfficeBundle\Entity\TypeUser
     */
    public function getTypeUser()
    {
        return $this->typeUser;
    }

    /**
     * Set ville
     *
     * @param \BackOfficeBundle\Entity\Ville $ville
     *
     * @return User
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
