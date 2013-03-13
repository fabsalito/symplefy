<?php

namespace fabsalito\GeoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * fabsalito\GeoBundle\Entity\Currency
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="fabsalito\GeoBundle\Entity\StateRepository")
 */
class State
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /*
     * @ORM\ManyToOne(targetEntity="fabsalito\GeoBundle\Entity\Country")
     */
    private $country_id;

    /**
     * @var string $state
     *
     * @ORM\Column(name="state", type="string", length=255)
     *
     * @Assert\Type(type="string")
     */
    private $state;

    /**
     * @var decimal $latitude
     *
     * @ORM\Column(name="latitude", type="decimal")
     *
     * @Assert\Type(type="decimal")
     */
    private $latitude;

    /**
     * @var decimal $longitude
     *
     * @ORM\Column(name="longitude", type="decimal")
     *
     * @Assert\Type(type="decimal")
     */
    private $longitude;

    /**
     * @var datetime $created
     *
     * @ORM\Column(name="created", type="datetime")
     *
     * @Assert\DateTime
     */
    private $created;

    /**
     * @var datetime $updated
     *
     * @ORM\Column(name="updated", type="datetime")
     *
     * @Assert\DateTime
     */
    private $updated;

    /**
     * @var string $audit_user
     *
     * @ORM\Column(name="audit_user", type="string", length=255)
     *
     * @Assert\Type(type="string")
     */
    private $audit_user;

    /**
     * @var boolean $enabled
     *
     * @ORM\Column(name="enabled", type="boolean")
     *
     * @Assert\Type(type="bool")
     */
    private $enabled;

    public function __toString()
    {
        return $this->getState();
    }

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
     * Set state
     *
     * @param string $state
     * @return State
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return State
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return State
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return State
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
     * @return State
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
     * Set audit_user
     *
     * @param string $auditUser
     * @return State
     */
    public function setAuditUser($auditUser)
    {
        $this->audit_user = $auditUser;

        return $this;
    }

    /**
     * Get audit_user
     *
     * @return string
     */
    public function getAuditUser()
    {
        return $this->audit_user;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return State
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }
}