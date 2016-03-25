<?php

namespace CoursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chapitres
 *
 * @ORM\Table(name="chapitres")
 * @ORM\Entity(repositoryClass="CoursBundle\Repository\ChapitresRepository")
 */
class Chapitres
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
     * @ORM\Column(name="titre_chapitres", type="string", length=255)
     */
    private $titreChapitres;

    /**
     * @var string
     *
     * @ORM\Column(name="video_chapitres", type="string", length=255)
     */
    private $videoChapitres;

    /**
     * @var integer
     *
     * @ORM\Column(name="order", type="integer")
     */
    private $order;


    /**
    * @ORM\ManyToOne(targetEntity="CoursBundle\Entity\Cours", inversedBy="cours")
    * @ORM\JoinColumn(name="cours_id", referencedColumnName="id")
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
     * Set titreChapitres
     *
     * @param string $titreChapitres
     * @return Chapitres
     */
    public function setTitreChapitres($titreChapitres)
    {
        $this->titreChapitres = $titreChapitres;

        return $this;
    }

    /**
     * Get titreChapitres
     *
     * @return string 
     */
    public function getTitreChapitres()
    {
        return $this->titreChapitres;
    }

    /**
     * Set videoChapitres
     *
     * @param string $videoChapitres
     * @return Chapitres
     */
    public function setVideoChapitres($videoChapitres)
    {
        $this->videoChapitres = $videoChapitres;

        return $this;
    }

    /**
     * Get videoChapitres
     *
     * @return string 
     */
    public function getVideoChapitres()
    {
        return $this->videoChapitres;
    }

    /**
     * Set cours
     *
     * @param \CoursBundle\Entity\Cours $cours
     * @return Chapitres
     */
    public function setCours(\CoursBundle\Entity\Cours $cours = null)
    {
        $this->cours = $cours;

        return $this;
    }

    /**
     * Get cours
     *
     * @return \CoursBundle\Entity\Cours 
     */
    public function getCours()
    {
        return $this->cours;
    }

    /**
     * Set order
     *
     * @param integer $order
     * @return Chapitres
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return integer 
     */
    public function getOrder()
    {
        return $this->order;
    }
}
