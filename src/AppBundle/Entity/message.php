<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\messageRepository")
 */
class message
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
     * @ORM\Column(name="sendDate", type="datetime")
     */
    private $sendDate;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=700)
     */
    private $content;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="consultDate", type="datetime")
     */
    private $consultDate;


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
     * Set sendDate
     *
     * @param \DateTime $sendDate
     *
     * @return message
     */
    public function setSendDate($sendDate)
    {
        $this->sendDate = $sendDate;

        return $this;
    }

    /**
     * Get sendDate
     *
     * @return \DateTime
     */
    public function getSendDate()
    {
        return $this->sendDate;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return message
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return message
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set consultDate
     *
     * @param \DateTime $consultDate
     *
     * @return message
     */
    public function setConsultDate($consultDate)
    {
        $this->consultDate = $consultDate;

        return $this;
    }

    /**
     * Get consultDate
     *
     * @return \DateTime
     */
    public function getConsultDate()
    {
        return $this->consultDate;
    }
}

