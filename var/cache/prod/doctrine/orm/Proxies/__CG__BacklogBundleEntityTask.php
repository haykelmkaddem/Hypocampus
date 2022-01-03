<?php

namespace Proxies\__CG__\BacklogBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Task extends \BacklogBundle\Entity\Task implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'BacklogBundle\\Entity\\Task' . "\0" . 'id', '' . "\0" . 'BacklogBundle\\Entity\\Task' . "\0" . 'title', '' . "\0" . 'BacklogBundle\\Entity\\Task' . "\0" . 'descriptionFonctionnel', '' . "\0" . 'BacklogBundle\\Entity\\Task' . "\0" . 'descriptionTechnique', '' . "\0" . 'BacklogBundle\\Entity\\Task' . "\0" . 'storyPoints', '' . "\0" . 'BacklogBundle\\Entity\\Task' . "\0" . 'createdDate', '' . "\0" . 'BacklogBundle\\Entity\\Task' . "\0" . 'finishedDate', '' . "\0" . 'BacklogBundle\\Entity\\Task' . "\0" . 'state', '' . "\0" . 'BacklogBundle\\Entity\\Task' . "\0" . 'priority', '' . "\0" . 'BacklogBundle\\Entity\\Task' . "\0" . 'archive', '' . "\0" . 'BacklogBundle\\Entity\\Task' . "\0" . 'backlog', '' . "\0" . 'BacklogBundle\\Entity\\Task' . "\0" . 'user'];
        }

        return ['__isInitialized__', '' . "\0" . 'BacklogBundle\\Entity\\Task' . "\0" . 'id', '' . "\0" . 'BacklogBundle\\Entity\\Task' . "\0" . 'title', '' . "\0" . 'BacklogBundle\\Entity\\Task' . "\0" . 'descriptionFonctionnel', '' . "\0" . 'BacklogBundle\\Entity\\Task' . "\0" . 'descriptionTechnique', '' . "\0" . 'BacklogBundle\\Entity\\Task' . "\0" . 'storyPoints', '' . "\0" . 'BacklogBundle\\Entity\\Task' . "\0" . 'createdDate', '' . "\0" . 'BacklogBundle\\Entity\\Task' . "\0" . 'finishedDate', '' . "\0" . 'BacklogBundle\\Entity\\Task' . "\0" . 'state', '' . "\0" . 'BacklogBundle\\Entity\\Task' . "\0" . 'priority', '' . "\0" . 'BacklogBundle\\Entity\\Task' . "\0" . 'archive', '' . "\0" . 'BacklogBundle\\Entity\\Task' . "\0" . 'backlog', '' . "\0" . 'BacklogBundle\\Entity\\Task' . "\0" . 'user'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Task $proxy) {
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
    public function setUser(\AppBundle\Entity\User $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionFonctionnel($descriptionFonctionnel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptionFonctionnel', [$descriptionFonctionnel]);

        return parent::setDescriptionFonctionnel($descriptionFonctionnel);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionFonctionnel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptionFonctionnel', []);

        return parent::getDescriptionFonctionnel();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionTechnique($descriptionTechnique)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptionTechnique', [$descriptionTechnique]);

        return parent::setDescriptionTechnique($descriptionTechnique);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionTechnique()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptionTechnique', []);

        return parent::getDescriptionTechnique();
    }

    /**
     * {@inheritDoc}
     */
    public function setStoryPoints($storyPoints)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStoryPoints', [$storyPoints]);

        return parent::setStoryPoints($storyPoints);
    }

    /**
     * {@inheritDoc}
     */
    public function getStoryPoints()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStoryPoints', []);

        return parent::getStoryPoints();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedDate($createdDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedDate', [$createdDate]);

        return parent::setCreatedDate($createdDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedDate', []);

        return parent::getCreatedDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setFinishedDate($finishedDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFinishedDate', [$finishedDate]);

        return parent::setFinishedDate($finishedDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getFinishedDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFinishedDate', []);

        return parent::getFinishedDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setState($state)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setState', [$state]);

        return parent::setState($state);
    }

    /**
     * {@inheritDoc}
     */
    public function getState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getState', []);

        return parent::getState();
    }

    /**
     * {@inheritDoc}
     */
    public function setPriority($priority)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPriority', [$priority]);

        return parent::setPriority($priority);
    }

    /**
     * {@inheritDoc}
     */
    public function getPriority()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPriority', []);

        return parent::getPriority();
    }

    /**
     * {@inheritDoc}
     */
    public function setBacklog(\BacklogBundle\Entity\Backlog $backlog = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBacklog', [$backlog]);

        return parent::setBacklog($backlog);
    }

    /**
     * {@inheritDoc}
     */
    public function getBacklog()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBacklog', []);

        return parent::getBacklog();
    }

    /**
     * {@inheritDoc}
     */
    public function getArchive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArchive', []);

        return parent::getArchive();
    }

    /**
     * {@inheritDoc}
     */
    public function setArchive($archive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArchive', [$archive]);

        return parent::setArchive($archive);
    }

}
