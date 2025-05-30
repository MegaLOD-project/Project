<?php

namespace DoctrineProxies\__CG__\Collecting\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CollectingForm extends \Collecting\Entity\CollectingForm implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', 'id', 'label', 'anonType', 'itemSet', 'successText', 'emailText', 'defaultSiteAssign', 'site', 'owner', 'prompts'];
        }

        return ['__isInitialized__', 'id', 'label', 'anonType', 'itemSet', 'successText', 'emailText', 'defaultSiteAssign', 'site', 'owner', 'prompts'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CollectingForm $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(?\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(?\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setLabel($label)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLabel', [$label]);

        return parent::setLabel($label);
    }

    /**
     * {@inheritDoc}
     */
    public function getLabel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLabel', []);

        return parent::getLabel();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnonType($anonType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnonType', [$anonType]);

        return parent::setAnonType($anonType);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnonType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnonType', []);

        return parent::getAnonType();
    }

    /**
     * {@inheritDoc}
     */
    public function setItemSet(?\Omeka\Entity\ItemSet $itemSet = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setItemSet', [$itemSet]);

        return parent::setItemSet($itemSet);
    }

    /**
     * {@inheritDoc}
     */
    public function getItemSet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getItemSet', []);

        return parent::getItemSet();
    }

    /**
     * {@inheritDoc}
     */
    public function setSuccessText($successText)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSuccessText', [$successText]);

        return parent::setSuccessText($successText);
    }

    /**
     * {@inheritDoc}
     */
    public function getSuccessText()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSuccessText', []);

        return parent::getSuccessText();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailText($emailText)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailText', [$emailText]);

        return parent::setEmailText($emailText);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailText()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailText', []);

        return parent::getEmailText();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultSiteAssign($defaultSiteAssign)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultSiteAssign', [$defaultSiteAssign]);

        return parent::setDefaultSiteAssign($defaultSiteAssign);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultSiteAssign()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultSiteAssign', []);

        return parent::getDefaultSiteAssign();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwner(?\Omeka\Entity\User $owner = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', [$owner]);

        return parent::setOwner($owner);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwner', []);

        return parent::getOwner();
    }

    /**
     * {@inheritDoc}
     */
    public function setSite(?\Omeka\Entity\Site $site = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSite', [$site]);

        return parent::setSite($site);
    }

    /**
     * {@inheritDoc}
     */
    public function getSite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSite', []);

        return parent::getSite();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrompts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrompts', []);

        return parent::getPrompts();
    }

    /**
     * {@inheritDoc}
     */
    public function getResourceId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResourceId', []);

        return parent::getResourceId();
    }

}
