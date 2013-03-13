<?php

namespace fabsalito\GeoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * fabsalito\GeoBundle\Entity\Currency
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="fabsalito\GeoBundle\Entity\CountryRepository")
 */
class Country
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
     * @var string $country
     *
     * @ORM\Column(name="country", type="string", length=255)
     *
     * @Assert\Type(type="string")
     * @Assert\NotBlank()
     */
    private $country;

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
     * @Assert\NotBlank()
     */
    private $created;

    /**
     * @var datetime $updated
     *
     * @ORM\Column(name="updated", type="datetime")
     *
     * @Assert\DateTime
     * @Assert\NotBlank()
     */
    private $updated;

    /**
     * @var string $audit_user
     *
     * @ORM\Column(name="audit_user", type="string", length=255)
     *
     * @Assert\Type(type="string")
     * @Assert\NotBlank()
     */
    private $audit_user;

    /**
     * @var boolean $enabled
     *
     * @ORM\Column(name="enabled", type="boolean")
     *
     * @Assert\Type(type="bool")
     * @Assert\NotBlank()
     */
    private $enabled;


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
     * Set country
     *
     * @param string $country
     * @return Country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     * @return Country
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
     * @return Country
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
     * Set latitude
     *
     * @param float $latitude
     * @return Country
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
     * @return Country
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
     * @return Country
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
     * @return Country
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
     * @return Country
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
     * @return Country
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