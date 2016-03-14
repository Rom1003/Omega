<?php

namespace CoursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours")
 * @ORM\Entity(repositoryClass="CoursBundle\Repository\CoursRepository")
 */
class Cours
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
     * @ORM\Column(name="intitule_cours", type="string", length=255)
     */
    private $intituleCours;

    /**
     * @var string
     *
     * @ORM\Column(name="intro_cours", type="text")
     */
    private $introCours;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dated_cours", type="date")
     */
    private $datedCours;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datef_cours", type="date")
     */
    private $datefCours;

    /**
     * @var bool
     *
     * @ORM\Column(name="aff_cours", type="boolean")
     */
    private $affCours;

    /**
     * @var string
     *
     * @ORM\Column(name="image_cours", type="string", length=255)
     */
    private $imageCours;


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
     * Set intituleCours
     *
     * @param string $intituleCours
     * @return Cours
     */
    public function setIntituleCours($intituleCours)
    {
        $this->intituleCours = $intituleCours;

        return $this;
    }

    /**
     * Get intituleCours
     *
     * @return string
     */
    public function getIntituleCours()
    {
        return $this->intituleCours;
    }

    /**
     * Set introCours
     *
     * @param string $introCours
     * @return Cours
     */
    public function setIntroCours($introCours)
    {
        $this->introCours = $introCours;

        return $this;
    }

    /**
     * Get introCours
     *
     * @return string
     */
    public function getIntroCours()
    {
        return $this->introCours;
    }

    /**
     * Set datedCours
     *
     * @param \DateTime $datedCours
     * @return Cours
     */
    public function setDatedCours($datedCours)
    {
        $this->datedCours = $datedCours;

        return $this;
    }

    /**
     * Get datedCours
     *
     * @return \DateTime
     */
    public function getDatedCours()
    {
        return $this->datedCours;
    }

    /**
     * Set datefCours
     *
     * @param \DateTime $datefCours
     * @return Cours
     */
    public function setDatefCours($datefCours)
    {
        $this->datefCours = $datefCours;

        return $this;
    }

    /**
     * Get datefCours
     *
     * @return \DateTime
     */
    public function getDatefCours()
    {
        return $this->datefCours;
    }

    /**
     * Set affCours
     *
     * @param boolean $affCours
     * @return Cours
     */
    public function setAffCours($affCours)
    {
        $this->affCours = $affCours;

        return $this;
    }

    /**
     * Get affCours
     *
     * @return boolean
     */
    public function getAffCours()
    {
        return $this->affCours;
    }


    /**
     * Set imageCours
     *
     * @param string $imageCours
     * @return Cours
     */
    public function setImageCours($imageCours)
    {
        $this->imageCours = $imageCours;

        return $this;
    }

    /**
     * Get imageCours
     *
     * @return string 
     */
    public function getImageCours()
    {
        return $this->imageCours;
    }
}
