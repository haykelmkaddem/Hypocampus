<?php

namespace Proxies\__CG__\EventBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Participant extends \EventBundle\Entity\Participant implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'EventBundle\\Entity\\Participant' . "\0" . 'nomp', '' . "\0" . 'EventBundle\\Entity\\Participant' . "\0" . 'prenomp', '' . "\0" . 'EventBundle\\Entity\\Participant' . "\0" . 'email', '' . "\0" . 'EventBundle\\Entity\\Participant' . "\0" . 'passwordp', '' . "\0" . 'EventBundle\\Entity\\Participant' . "\0" . 'choix'];
        }

        return ['__isInitialized__', '' . "\0" . 'EventBundle\\Entity\\Participant' . "\0" . 'nomp', '' . "\0" . 'EventBundle\\Entity\\Participant' . "\0" . 'prenomp', '' . "\0" . 'EventBundle\\Entity\\Participant' . "\0" . 'email', '' . "\0" . 'EventBundle\\Entity\\Participant' . "\0" . 'passwordp', '' . "\0" . 'EventBundle\\Entity\\Participant' . "\0" . 'choix'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Participant $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function setChoix(\EventBundle\Entity\EventsAdmin $choix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChoix', [$choix]);

        return parent::setChoix($choix);
    }

    /**
     * {@inheritDoc}
     */
    public function getChoix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChoix', []);

        return parent::getChoix();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomp($nomp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomp', [$nomp]);

        return parent::setNomp($nomp);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomp()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getNomp();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomp', []);

        return parent::getNomp();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenomp($prenomp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenomp', [$prenomp]);

        return parent::setPrenomp($prenomp);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenomp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenomp', []);

        return parent::getPrenomp();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setPasswordp($passwordp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPasswordp', [$passwordp]);

        return parent::setPasswordp($passwordp);
    }

    /**
     * {@inheritDoc}
     */
    public function getPasswordp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPasswordp', []);

        return parent::getPasswordp();
    }

}
