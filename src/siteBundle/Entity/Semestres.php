<?php

namespace siteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Semestres
 *
 * @ORM\Table(name="semestres")
 * @ORM\Entity(repositoryClass="siteBundle\Repository\SemestresRepository")
 */
class Semestres
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity="CoursBundle\Entity\Modules", mappedBy="modules")
     */
    protected $modules;

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
     * Set nom
     *
     * @param string $nom
     * @return Semestres
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->modules = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add modules
     *
     * @param \CoursBundle\Entity\Modules $modules
     * @return Semestres
     */
    public function addModule(\CoursBundle\Entity\Modules $modules)
    {
        $this->modules[] = $modules;

        return $this;
    }

    /**
     * Remove modules
     *
     * @param \CoursBundle\Entity\Modules $modules
     */
    public function removeModule(\CoursBundle\Entity\Modules $modules)
    {
        $this->modules->removeElement($modules);
    }

    /**
     * Get modules
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getModules()
    {
        return $this->modules;
    }
}
