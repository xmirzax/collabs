<?php

namespace ByteHistory\CollaboratorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ByteHistory\CollaboratorBundle\Entity\Domain
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Domain
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}