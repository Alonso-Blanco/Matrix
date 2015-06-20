<?php

namespace Proxies\__CG__\Matrix\Bundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Usuario extends \Matrix\Bundle\Entity\Usuario implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Matrix\\Bundle\\Entity\\Usuario' . "\0" . 'id', '' . "\0" . 'Matrix\\Bundle\\Entity\\Usuario' . "\0" . 'usuario', '' . "\0" . 'Matrix\\Bundle\\Entity\\Usuario' . "\0" . 'contrasena', '' . "\0" . 'Matrix\\Bundle\\Entity\\Usuario' . "\0" . 'rol', '' . "\0" . 'Matrix\\Bundle\\Entity\\Usuario' . "\0" . 'nombrecompleto', '' . "\0" . 'Matrix\\Bundle\\Entity\\Usuario' . "\0" . 'cedula', '' . "\0" . 'Matrix\\Bundle\\Entity\\Usuario' . "\0" . 'carne', '' . "\0" . 'Matrix\\Bundle\\Entity\\Usuario' . "\0" . 'telefono', '' . "\0" . 'Matrix\\Bundle\\Entity\\Usuario' . "\0" . 'direccion', '' . "\0" . 'Matrix\\Bundle\\Entity\\Usuario' . "\0" . 'carrera');
        }

        return array('__isInitialized__', '' . "\0" . 'Matrix\\Bundle\\Entity\\Usuario' . "\0" . 'id', '' . "\0" . 'Matrix\\Bundle\\Entity\\Usuario' . "\0" . 'usuario', '' . "\0" . 'Matrix\\Bundle\\Entity\\Usuario' . "\0" . 'contrasena', '' . "\0" . 'Matrix\\Bundle\\Entity\\Usuario' . "\0" . 'rol', '' . "\0" . 'Matrix\\Bundle\\Entity\\Usuario' . "\0" . 'nombrecompleto', '' . "\0" . 'Matrix\\Bundle\\Entity\\Usuario' . "\0" . 'cedula', '' . "\0" . 'Matrix\\Bundle\\Entity\\Usuario' . "\0" . 'carne', '' . "\0" . 'Matrix\\Bundle\\Entity\\Usuario' . "\0" . 'telefono', '' . "\0" . 'Matrix\\Bundle\\Entity\\Usuario' . "\0" . 'direccion', '' . "\0" . 'Matrix\\Bundle\\Entity\\Usuario' . "\0" . 'carrera');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Usuario $proxy) {
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
    public function setUsuario($usuario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuario', array($usuario));

        return parent::setUsuario($usuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuario', array());

        return parent::getUsuario();
    }

    /**
     * {@inheritDoc}
     */
    public function setContrasena($contrasena)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContrasena', array($contrasena));

        return parent::setContrasena($contrasena);
    }

    /**
     * {@inheritDoc}
     */
    public function getContrasena()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContrasena', array());

        return parent::getContrasena();
    }

    /**
     * {@inheritDoc}
     */
    public function setRol($rol)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRol', array($rol));

        return parent::setRol($rol);
    }

    /**
     * {@inheritDoc}
     */
    public function getRol()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRol', array());

        return parent::getRol();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombrecompleto($nombrecompleto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombrecompleto', array($nombrecompleto));

        return parent::setNombrecompleto($nombrecompleto);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombrecompleto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombrecompleto', array());

        return parent::getNombrecompleto();
    }

    /**
     * {@inheritDoc}
     */
    public function setCedula($cedula)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCedula', array($cedula));

        return parent::setCedula($cedula);
    }

    /**
     * {@inheritDoc}
     */
    public function getCedula()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCedula', array());

        return parent::getCedula();
    }

    /**
     * {@inheritDoc}
     */
    public function setCarne($carne)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCarne', array($carne));

        return parent::setCarne($carne);
    }

    /**
     * {@inheritDoc}
     */
    public function getCarne()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCarne', array());

        return parent::getCarne();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefono($telefono)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefono', array($telefono));

        return parent::setTelefono($telefono);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefono()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefono', array());

        return parent::getTelefono();
    }

    /**
     * {@inheritDoc}
     */
    public function setDireccion($direccion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDireccion', array($direccion));

        return parent::setDireccion($direccion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDireccion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDireccion', array());

        return parent::getDireccion();
    }

    /**
     * {@inheritDoc}
     */
    public function setCarrera(\Matrix\Bundle\Entity\Carrera $carrera = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCarrera', array($carrera));

        return parent::setCarrera($carrera);
    }

    /**
     * {@inheritDoc}
     */
    public function getCarrera()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCarrera', array());

        return parent::getCarrera();
    }

}
