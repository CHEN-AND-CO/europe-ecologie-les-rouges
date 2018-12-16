<?php

namespace BackOfficeBundle\Entity;

/**
 * TypeUser
 */
class TypeUser
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $typeUser;


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
     * Set typeUser
     *
     * @param string $typeUser
     *
     * @return TypeUser
     */
    public function setTypeUser($typeUser)
    {
        $this->typeUser = $typeUser;
    
        return $this;
    }

    /**
     * Get typeUser
     *
     * @return string
     */
    public function getTypeUser()
    {
        return $this->typeUser;
    }
}
