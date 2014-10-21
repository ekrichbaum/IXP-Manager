<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class NetInfo extends \Entities\NetInfo implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function setProtocol($protocol)
    {
        $this->__load();
        return parent::setProtocol($protocol);
    }

    public function getProtocol()
    {
        $this->__load();
        return parent::getProtocol();
    }

    public function setProperty($property)
    {
        $this->__load();
        return parent::setProperty($property);
    }

    public function getProperty()
    {
        $this->__load();
        return parent::getProperty();
    }

    public function setIx($ix)
    {
        $this->__load();
        return parent::setIx($ix);
    }

    public function getIx()
    {
        $this->__load();
        return parent::getIx();
    }

    public function setValue($value)
    {
        $this->__load();
        return parent::setValue($value);
    }

    public function getValue()
    {
        $this->__load();
        return parent::getValue();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setVlan(\Entities\Vlan $vlan)
    {
        $this->__load();
        return parent::setVlan($vlan);
    }

    public function getVlan()
    {
        $this->__load();
        return parent::getVlan();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'protocol', 'property', 'ix', 'value', 'id', 'Vlan');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}