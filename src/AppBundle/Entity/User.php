<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="profileVisibility", type="boolean")
     */
    private $profileVisibility;


    /**
     * Set profileVisibility
     *
     * @param boolean $profileVisibility
     *
     * @return Compte
     */
    public function setProfileVisibility($profileVisibility)
    {
        $this->profileVisibility = $profileVisibility;

        return $this;
    }

    /**
     * Get profileVisibility
     *
     * @return bool
     */
    public function getProfileVisibility()
    {
        return $this->profileVisibility;
    }


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}