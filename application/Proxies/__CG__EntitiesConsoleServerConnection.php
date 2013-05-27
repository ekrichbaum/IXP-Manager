<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class ConsoleServerConnection extends \Entities\ConsoleServerConnection implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function setPort($port)
    {
        $this->__load();
        return parent::setPort($port);
    }

    public function getPort()
    {
        $this->__load();
        return parent::getPort();
    }

    public function setSpeed($speed)
    {
        $this->__load();
        return parent::setSpeed($speed);
    }

    public function getSpeed()
    {
        $this->__load();
        return parent::getSpeed();
    }

    public function setParity($parity)
    {
        $this->__load();
        return parent::setParity($parity);
    }

    public function getParity()
    {
        $this->__load();
        return parent::getParity();
    }

    public function setStopbits($stopbits)
    {
        $this->__load();
        return parent::setStopbits($stopbits);
    }

    public function getStopbits()
    {
        $this->__load();
        return parent::getStopbits();
    }

    public function setFlowcontrol($flowcontrol)
    {
        $this->__load();
        return parent::setFlowcontrol($flowcontrol);
    }

    public function getFlowcontrol()
    {
        $this->__load();
        return parent::getFlowcontrol();
    }

    public function setAutobaud($autobaud)
    {
        $this->__load();
        return parent::setAutobaud($autobaud);
    }

    public function getAutobaud()
    {
        $this->__load();
        return parent::getAutobaud();
    }

    public function setNotes($notes)
    {
        $this->__load();
        return parent::setNotes($notes);
    }

    public function getNotes()
    {
        $this->__load();
        return parent::getNotes();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setCustomer(\Entities\Customer $customer = NULL)
    {
        $this->__load();
        return parent::setCustomer($customer);
    }

    public function getCustomer()
    {
        $this->__load();
        return parent::getCustomer();
    }

    public function setSwitcher(\Entities\Switcher $switcher = NULL)
    {
        $this->__load();
        return parent::setSwitcher($switcher);
    }

    public function getSwitcher()
    {
        $this->__load();
        return parent::getSwitcher();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'description', 'port', 'speed', 'parity', 'stopbits', 'flowcontrol', 'autobaud', 'notes', 'id', 'Customer', 'Switcher');
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