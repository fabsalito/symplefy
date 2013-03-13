<?php

namespace fabsalito\GeoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * fabsalito\GeoBundle\Entity\Currency
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="fabsalito\GeoBundle\Entity\CityRepository")
 */
class City
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $city
     *
     * @ORM\Column(name="city", type="string", length=255)
     *
     * @Assert\Type(type="string")
     */
    private $city;

    /*
     * @ORM\ManyToOne(targetEntity="fabsalito\GeoBundle\Entity\Country")
     */
    private $country_id;

    /*
     * @ORM\ManyToOne(targetEntity="fabsalito\GeoBundle\Entity\State")
     */
    private $state_id;

    /**
     * @var string $zipcode
     *
     * @ORM\Column(name="zipcode", type="string", length=255)
     *
     * @Assert\Type(type="string")
     */
    private $zipcode;

    /**
     * @var string $area_code
     *
     * @ORM\Column(name="area_code", type="string", length=255)
     *
     * @Assert\Type(type="string")
     */
    private $area_code;

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
        return $this->getCity();
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
     * Set city
     *
     * @param string $city
     * @return City
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     * @return City
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set area_code
     *
     * @param string $areaCode
     * @return City
     */
    public function setAreaCode($areaCode)
    {
        $this->area_code = $areaCode;

        return $this;
    }

    /**
     * Get area_code
     *
     * @return string
     */
    public function getAreaCode()
    {
        return $this->area_code;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return City
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
     * @return City
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
     * @return City
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
     * @return City
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