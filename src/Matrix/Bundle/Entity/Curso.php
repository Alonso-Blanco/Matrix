<?php

namespace Matrix\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Curso
 *
 * @ORM\Table(name="curso", indexes={@ORM\Index(name="fk_curso_Carrera1_idx", columns={"carrera_id"})})
 * @ORM\Entity
 */
class Curso
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
     * @ORM\Column(name="sigla", type="string", length=10, nullable=false)
     */
    private $sigla;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_curso", type="string", length=45, nullable=false)
     */
    private $nombreCurso;

    /**
     * @var integer
     *
     * @ORM\Column(name="creditos", type="integer", nullable=false)
     */
    private $creditos;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set sigla
     *
     * @param string $sigla
     * @return Curso
     */
    public function setSigla($sigla)
    {
        $this->sigla = $sigla;

        return $this;
    }

    /**
     * Get sigla
     *
     * @return string 
     */
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * Set nombreCurso
     *
     * @param string $nombreCurso
     * @return Curso
     */
    public function setNombreCurso($nombreCurso)
    {
        $this->nombreCurso = $nombreCurso;

        return $this;
    }

    /**
     * Get nombreCurso
     *
     * @return string 
     */
    public function getNombreCurso()
    {
        return $this->nombreCurso;
    }

    /**
     * Set creditos
     *
     * @param integer $creditos
     * @return Curso
     */
    public function setCreditos($creditos)
    {
        $this->creditos = $creditos;

        return $this;
    }

    /**
     * Get creditos
     *
     * @return integer 
     */
    public function getCreditos()
    {
        return $this->creditos;
    }

    /**
     * Set carrera
     *
     * @param \Matrix\Bundle\Entity\Carrera $carrera
     * @return Curso
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
        return $this->nombreCurso;
    }
}
