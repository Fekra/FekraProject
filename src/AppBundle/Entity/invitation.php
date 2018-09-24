<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * invitation
 *
 * @ORM\Table(name="invitation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\invitationRepository")
 */
class invitation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     */
    private $Expediteur;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     */
    private $Destination;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="invitDate", type="datetime")
     */
    private $invitDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modifDate", type="datetime", nullable=true)
     */
    private $modifDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set invitDate
     *
     * @param \DateTime $invitDate
     *
     * @return invitation
     */
    public function setInvitDate($invitDate)
    {
        $this->invitDate = $invitDate;

        return $this;
    }

    /**
     * Get invitDate
     *
     * @return \DateTime
     */
    public function getInvitDate()
    {
        return $this->invitDate;
    }

    /**
     * Set modifDate
     *
     * @param \DateTime $modifDate
     *
     * @return invitation
     */
    public function setModifDate($modifDate)
    {
        $this->modifDate = $modifDate;

        return $this;
    }

    /**
     * Get modifDate
     *
     * @return \DateTime
     */
    public function getModifDate()
    {
        return $this->modifDate;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return invitation
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set expediteur
     *
     * @param \AppBundle\Entity\User $expediteur
     *
     * @return invitation
     */
    public function setExpediteur(\AppBundle\Entity\User $expediteur = null)
    {
        $this->Expediteur = $expediteur;

        return $this;
    }

    /**
     * Get expediteur
     *
     * @return \AppBundle\Entity\User
     */
    public function getExpediteur()
    {
        return $this->Expediteur;
    }

    /**
     * Set destination
     *
     * @param \AppBundle\Entity\User $destination
     *
     * @return invitation
     */
    public function setDestination(\AppBundle\Entity\User $destination = null)
    {
        $this->Destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return \AppBundle\Entity\User
     */
    public function getDestination()
    {
        return $this->Destination;
    }
}
