<?php

namespace CoursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousChapitres
 *
 * @ORM\Table(name="sous_chapitres")
 * @ORM\Entity(repositoryClass="CoursBundle\Repository\SousChapitresRepository")
 */
class SousChapitres
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var integer
     *
     * @ORM\Column(name="order", type="integer")
     */
    private $order;

    /**
     * @ORM\ManyToOne(targetEntity="CoursBundle\Entity\Chapitres")
     */
    protected $chapitres;


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
     * Set titre
     *
     * @param string $titre
     * @return SousChapitres
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return SousChapitres
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set chapitres
     *
     * @param \CoursBundle\Entity\Chapitres $chapitres
     * @return SousChapitres
     */
    public function setChapitres(\CoursBundle\Entity\Chapitres $chapitres = null)
    {
        $this->chapitres = $chapitres;

        return $this;
    }

    /**
     * Get chapitres
     *
     * @return \CoursBundle\Entity\Chapitres 
     */
    public function getChapitres()
    {
        return $this->chapitres;
    }

    /**
     * Set order
     *
     * @param integer $order
     * @return SousChapitres
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
