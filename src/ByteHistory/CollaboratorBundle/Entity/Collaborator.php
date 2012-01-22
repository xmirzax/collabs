<?php

namespace ByteHistory\CollaboratorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ByteHistory\CollaboratorBundle\Entity\Collaborator
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Collaborator
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
     * @ORM\OneToMany(targetEntity="ByteHistory\CollaboratorBundle\Entity\Project" , mappedBy="projects")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id")  
     */
    private $project;

    /**
     * @ORM\OneToMany(targetEntity="ByteHistory\UserBundle\Entity\User" , mappedBy="users")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")  
     */
    private $user;
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    //////////////////////////////
    /**
     * Get Project
     *
     * @return Project 
     */
    public function getProject()
    {
        return $this->project;
    }
    
    
     /**
     * Set project
     *
     * @param Project $project
     */
    public function setProject($project)
    {
        return $this->project = $project;
    }
    
    
    //////////////////////////////
    /**
     * Get User
     *
     * @return User 
     */
    public function getUser()
    {
        return $this->user;
    }
    
    
     /**
     * Set User
     *
     * @param User $user
     */
    public function setUser($user)
    {
        return $this->user = $user;
    }
    
    
}