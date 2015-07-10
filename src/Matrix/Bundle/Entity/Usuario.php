<?php

namespace Matrix\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", uniqueConstraints={@ORM\UniqueConstraint(name="cedula_UNIQUE", columns={"cedula"})}, indexes={@ORM\Index(name="fk_usuario_Carrera1_idx", columns={"carrera_id"})})
 * @ORM\Entity
 * @UniqueEntity(fields="cedula", message="Digite un número de Cédula válido")
 * @UniqueEntity(fields="carne", message="Digite un número de Carné válido")
 */
class Usuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=12, nullable=false)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="contrasena", type="string", length=14, nullable=false)
     * @Assert\Length(
     *      min = 8,
     *      max = 14,
     *      minMessage = "La contraseña debe tener al menos {{ limit }} caracteres",
     *      maxMessage = "La contraseña debe tener menos de {{ limit }} caracteres"
     * )
     */
    private $contrasena;

    /**
     * @var string
     *
     * @ORM\Column(name="rol", type="string", nullable=false)
     */
    private $rol;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreCompleto", type="string", length=45, nullable=false)
     */
    private $nombrecompleto;

    /**
     * @var string
     *
     * @ORM\Column(name="cedula", type="string", length=12, nullable=false)
     */
    private $cedula;

    /**
     * @var string
     *
     * @ORM\Column(name="carne", type="string", length=7, nullable=true)
     */
    private $carne;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=10, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="text", nullable=true)
     */
    private $direccion;

    /**
     * @var \Carrera
     *
     * @ORM\ManyToOne(targetEntity="Carrera")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="carrera_id", referencedColumnName="id")
     * })
     */
    private $carrera;

    /**
     * Set id
     *
     * @param string $id
     * @return id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set usuario
     *
     * @param string $usuario
     * @return Usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set contrasena
     *
     * @param string $contrasena
     * @return Usuario
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;

        return $this;
    }

    /**
     * Get contrasena
     *
     * @return string 
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Set rol
     *
     * @param string $rol
     * @return Usuario
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return string 
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set nombrecompleto
     *
     * @param string $nombrecompleto
     * @return Usuario
     */
    public function setNombrecompleto($nombrecompleto)
    {
        $this->nombrecompleto = $nombrecompleto;

        return $this;
    }

    /**
     * Get nombrecompleto
     *
     * @return string 
     */
    public function getNombrecompleto()
    {
        return $this->nombrecompleto;
    }

    /**
     * Set cedula
     *
     * @param string $cedula
     * @return Usuario
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Get cedula
     *
     * @return string 
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set carne
     *
     * @param string $carne
     * @return Usuario
     */
    public function setCarne($carne)
    {
        $this->carne = $carne;

        return $this;
    }

    /**
     * Get carne
     *
     * @return string 
     */
    public function getCarne()
    {
        return $this->carne;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Usuario
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Usuario
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set carrera
     *
     * @param \Matrix\Bundle\Entity\Carrera $carrera
     * @return Usuario
     */
    public function setCarrera(\Matrix\Bundle\Entity\Carrera $carrera = null)
    {
        $this->carrera = $carrera;

        return $this;
    }

    /**
     * Get carrera
     *
     * @return \Matrix\Bundle\Entity\Carrera 
     */
    public function getCarrera()
    {
        return $this->carrera;
    }

    public function __toString() 
    {
        return $this->nombrecompleto;
    }
}

