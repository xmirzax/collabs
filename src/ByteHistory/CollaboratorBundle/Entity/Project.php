<?php

namespace ByteHistory\CollaboratorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ByteHistory\CollaboratorBundle\Entity\Project
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Project
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
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="ByteHistory\CollaboratorBundle\Entity\Domain" , mappedBy="domains")
     * @ORM\JoinColumn(name="domain_id", referencedColumnName="id")  
     */
    private $domain;
    
    /**
     * @ORM\OneToMany(targetEntity="ByteHistory\CollaboratorBundle\Entity\Type" , mappedBy="types")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")  
     */
    private $type;

    

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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    
    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    
    

    /**
     * Get domain
     *
     * @return Domain 
     */
    public function getDomain()
    {
        return $this->domain;
    }
    
    
    /**
     * Set domain
     *
     * @param Domain $domain
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    
    /**
     * Get type
     *
     * @return Type 
     */
    public function getType()
    {
        return $this->type;
    }
    
    
    /**
     * Set type
     *
     * @param Type $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    
    
    
}