<?php

namespace Matrix\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carrera
 *
 * @ORM\Table(name="carrera")
 * @ORM\Entity
 */
class Carrera
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
     * @ORM\Column(name="codigoCarrera", type="string", length=45, nullable=false)
     */
    private $codigocarrera;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreCarrera", type="string", length=45, nullable=false)
     */
    private $nombrecarrera;



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
     * Set codigocarrera
     *
     * @param string $codigocarrera
     * @return Carrera
     */
    public function setCodigocarrera($codigocarrera)
    {
        $this->codigocarrera = $codigocarrera;

        return $this;
    }

    /**
     * Get codigocarrera
     *
     * @return string 
     */
    public function getCodigocarrera()
    {
        return $this->codigocarrera;
    }

    /**
     * Set nombrecarrera
     *
     * @param string $nombrecarrera
     * @return Carrera
     */
    public function setNombrecarrera($nombrecarrera)
    {
        $this->nombrecarrera = $nombrecarrera;

        return $this;
    }

    /**
     * Get nombrecarrera
     *
     * @return string 
     */
    public function getNombrecarrera()
    {
        return $this->nombrecarrera;
    }

    public function __toString() 
    {
        return $this->nombrecarrera;
    }
}
