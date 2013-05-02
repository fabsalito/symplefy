<?php

namespace fabsalito\symplefy\FrontendBundle\Entity;

use FOS\UserBundle\Entity\Group as BaseGroup;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 *
 * @ORM\Table(name="fos_group")
 * @ORM\Entity(repositoryClass="fabsalito\symplefy\FrontendBundle\Entity\GroupRepository")
 */
class Group extends BaseGroup
{
    /**
     * @var integer 
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

}