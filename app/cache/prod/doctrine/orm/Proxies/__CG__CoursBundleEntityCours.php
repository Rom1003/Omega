<?php

namespace Proxies\__CG__\CoursBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Cours extends \CoursBundle\Entity\Cours implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'CoursBundle\\Entity\\Cours' . "\0" . 'id', '' . "\0" . 'CoursBundle\\Entity\\Cours' . "\0" . 'intituleCours', '' . "\0" . 'CoursBundle\\Entity\\Cours' . "\0" . 'introCours', '' . "\0" . 'CoursBundle\\Entity\\Cours' . "\0" . 'datedCours', '' . "\0" . 'CoursBundle\\Entity\\Cours' . "\0" . 'datefCours', '' . "\0" . 'CoursBundle\\Entity\\Cours' . "\0" . 'affCours', '' . "\0" . 'CoursBundle\\Entity\\Cours' . "\0" . 'imageCours');
        }

        return array('__isInitialized__', '' . "\0" . 'CoursBundle\\Entity\\Cours' . "\0" . 'id', '' . "\0" . 'CoursBundle\\Entity\\Cours' . "\0" . 'intituleCours', '' . "\0" . 'CoursBundle\\Entity\\Cours' . "\0" . 'introCours', '' . "\0" . 'CoursBundle\\Entity\\Cours' . "\0" . 'datedCours', '' . "\0" . 'CoursBundle\\Entity\\Cours' . "\0" . 'datefCours', '' . "\0" . 'CoursBundle\\Entity\\Cours' . "\0" . 'affCours', '' . "\0" . 'CoursBundle\\Entity\\Cours' . "\0" . 'imageCours');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Cours $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setIntituleCours($intituleCours)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIntituleCours', array($intituleCours));

        return parent::setIntituleCours($intituleCours);
    }

    /**
     * {@inheritDoc}
     */
    public function getIntituleCours()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIntituleCours', array());

        return parent::getIntituleCours();
    }

    /**
     * {@inheritDoc}
     */
    public function setIntroCours($introCours)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIntroCours', array($introCours));

        return parent::setIntroCours($introCours);
    }

    /**
     * {@inheritDoc}
     */
    public function getIntroCours()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIntroCours', array());

        return parent::getIntroCours();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatedCours($datedCours)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatedCours', array($datedCours));

        return parent::setDatedCours($datedCours);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatedCours()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatedCours', array());

        return parent::getDatedCours();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatefCours($datefCours)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatefCours', array($datefCours));

        return parent::setDatefCours($datefCours);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatefCours()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatefCours', array());

        return parent::getDatefCours();
    }

    /**
     * {@inheritDoc}
     */
    public function setAffCours($affCours)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAffCours', array($affCours));

        return parent::setAffCours($affCours);
    }

    /**
     * {@inheritDoc}
     */
    public function getAffCours()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAffCours', array());

        return parent::getAffCours();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageCours($imageCours)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageCours', array($imageCours));

        return parent::setImageCours($imageCours);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageCours()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageCours', array());

        return parent::getImageCours();
    }

}
