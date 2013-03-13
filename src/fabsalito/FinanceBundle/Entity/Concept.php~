<?php

namespace fabsalito\FinanceCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * fabsalito\FinanceCoreBundle\Entity\Concept
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="fabsalito\FinanceCoreBundle\Entity\ConceptRepository")
 */
class Concept
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
     * @var string $concept
     *
     * @ORM\Column(name="concept", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $concept;

    /**
     * @var string $concept_ds
     *
     * @ORM\Column(name="concept_ds", type="string", length=255)
     */
    private $concept_ds;

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
     * Set concept
     *
     * @param string $concept
     * @return Concept
     */
    public function setConcept($concept)
    {
        $this->concept = $concept;

        return $this;
    }

    /**
     * Get concept
     *
     * @return string
     */
    public function getConcept()
    {
        return $this->concept;
    }

    /**
     * Set concept_ds
     *
     * @param string $conceptDs
     * @return Concept
     */
    public function setConceptDs($conceptDs)
    {
        $this->concept_ds = $conceptDs;

        return $this;
    }

    /**
     * Get concept_ds
     *
     * @return string
     */
    public function getConceptDs()
    {
        return $this->concept_ds;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Concept
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
     * @return Concept
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
     * @return Concept
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