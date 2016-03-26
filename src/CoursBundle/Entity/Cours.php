<?php

namespace CoursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Cours
 *
 * @ORM\Table(name="cours")
 * @ORM\Entity(repositoryClass="CoursBundle\Repository\CoursRepository")
 * @Vich\Uploadable
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
     * @ORM\Column(name="dated_cours", type="datetime")
     */
    private $datedCours;

    /**
     * @var \DateTime
     *   @Assert\GreaterThan("today")
     * @ORM\Column(name="datef_cours", type="date")
     */
    private $datefCours;

    /**
     * @var bool
     * @ORM\Column(name="aff_cours", type="boolean")
     */

    private $affCours;


    /**
     * @ORM\OneToMany(targetEntity="CoursBundle\Entity\Chapitres", mappedBy="chapitres")
     */
    protected $chapitres;


    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="cours_image", fileNameProperty="imageName", nullable=true)
     *
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     * @var string
     */
    private $imageName;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Cours
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param string $imageName
     *
     * @return Cours
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageName()
    {
        return $this->imageName;
    }












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
     * Constructor
     */
    public function __construct()
    {
        $this->chapitres = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add chapitres
     *
     * @param \CoursBundle\Entity\Chapitres $chapitres
     * @return Cours
     */
    public function addChapitre(\CoursBundle\Entity\Chapitres $chapitres)
    {
        $this->chapitres[] = $chapitres;

        return $this;
    }

    /**
     * Remove chapitres
     *
     * @param \CoursBundle\Entity\Chapitres $chapitres
     */
    public function removeChapitre(\CoursBundle\Entity\Chapitres $chapitres)
    {
        $this->chapitres->removeElement($chapitres);
    }

    /**
     * Get chapitres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChapitres()
    {
        return $this->chapitres;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Cours
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
