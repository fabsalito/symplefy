<?php

namespace fabsalito\FinanceCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * fabsalito\FinanceCoreBundle\Entity\Currency
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="fabsalito\FinanceCoreBundle\Entity\CurrencyRepository")
 */
class Currency
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $currency
     *
     * @ORM\Column(name="currency", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $currency;

    /**
     * @var string $currency_ds
     *
     * @ORM\Column(name="currency_ds", type="string", length=255)
     */
    private $currency_ds;

    /**
     * @var string $currency_doce
     *
     * @ORM\Column(name="currency_code", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $currency_code;

    /**
     * @var datetime $created
     *
     * @ORM\Column(name="created", type="datetime")
     * @Assert\NotBlank()
     */
    private $created;

    /**
     * @var datetime $updated
     *
     * @ORM\Column(name="updated", type="datetime")
     * @Assert\NotBlank()
     */
    private $updated;

    /**
     * @var string $audit_user
     *
     * @ORM\Column(name="audit_user", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $audit_user;


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
     * Set currency
     *
     * @param string $currency
     * @return Currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    
        return $this;
    }

    /**
     * Get currency
     *
     * @return string 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set currency_ds
     *
     * @param string $currencyDs
     * @return Currency
     */
    public function setCurrencyDs($currencyDs)
    {
        $this->currency_ds = $currencyDs;
    
        return $this;
    }

    /**
     * Get currency_ds
     *
     * @return string 
     */
    public function getCurrencyDs()
    {
        return $this->currency_ds;
    }

    /**
     * Set currency_code
     *
     * @param string $currencyCode
     * @return Currency
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currency_code = $currencyCode;
    
        return $this;
    }

    /**
     * Get currency_code
     *
     * @return string 
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Currency
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
     * @return Currency
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
     * @return Currency
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
}