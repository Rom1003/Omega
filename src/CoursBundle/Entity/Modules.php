<?php

namespace CoursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modules
 *
 * @ORM\Table(name="modules")
 * @ORM\Entity(repositoryClass="CoursBundle\Repository\ModulesRepository")
 */
class Modules
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
     * @ORM\ManyToOne(targetEntity="siteBundle\Entity\Semestres", inversedBy="semestres")
     */
    protected $semestres;

    /**
     * @ORM\OneToMany(targetEntity="CoursBundle\Entity\Cours", mappedBy="cours")
     */
    protected $cours;


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
     * @return Modules
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
     * Set semestres
     *
     * @param \siteBundle\Entity\Semestres $semestres
     * @return Modules
     */

    public function setSemestres(\siteBundle\Entity\Semestres $semestres = null)
    {
        $this->semestres = $semestres;

        return $this;
    }

    /**
     * Get semestres
     *
     * @return \siteBundle\Entity\Semestres 
     */
    public function getSemestres()
    {
        return $this->semestres;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cours = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cours
     *
     * @param \CoursBundle\Entity\Cours $cours
     * @return Modules
     */
    public function addCour(\CoursBundle\Entity\Cours $cours)
    {
        $this->cours[] = $cours;

        return $this;
    }

    /**
     * Remove cours
     *
     * @param \CoursBundle\Entity\Cours $cours
     */
    public function removeCour(\CoursBundle\Entity\Cours $cours)
    {
        $this->cours->removeElement($cours);
    }

    /**
     * Get cours
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCours()
    {
        return $this->cours;
    }
}
