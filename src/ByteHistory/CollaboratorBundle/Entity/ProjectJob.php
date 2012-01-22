<?php

namespace ByteHistory\CollaboratorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ByteHistory\CollaboratorBundle\Entity\ProjectJob
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ProjectJob
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
     * @ORM\Column(name="nb_place", type="integer")
     */
    private $nbPlace;
    
    
    /**
     * @ORM\OneToMany(targetEntity="ByteHistory\CollaboratorBundle\Entity\Project" , mappedBy="projects_jobs")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id")  
     */
    private $project;

    /**
     * @ORM\OneToMany(targetEntity="ByteHistory\CollaboratorBundle\Entity\Job" , mappedBy="projects_jobs")
     * @ORM\JoinColumn(name="job_id", referencedColumnName="id")  
     */
    private $job;




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
     * Get nbPlace
     *
     * @return integer 
     */
    public function getNbPlace()
    {
        return $this->nbPlace;
    }
    
     /**
     * Set name
     *
     * @param integer $nbPlace
     */
    public function setNbPlace($nbPlace)
    {
        return $this->nbPlace = $nbPlace;
    }
    
    ///////////////////////////////////
    
     /**
     * Get project
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
    
    //////////////////////////////////
    
       /**
     * Get job
     *
     * @return Job 
     */
    public function getJob()
    {
        return $this->job;
    }
    
     /**
     * Set job
     *
     * @param Job $job
     */
    public function setNbPlace($job)
    {
        return $this->job = $job;
    }
}