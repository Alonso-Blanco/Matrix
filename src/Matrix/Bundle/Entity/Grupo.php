<?php

namespace Matrix\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grupo
 *
 * @ORM\Table(name="grupo", indexes={@ORM\Index(name="fk_grupo_curso1_idx", columns={"curso_id"}), @ORM\Index(name="fk_grupo_usuario1_idx", columns={"profesor_id"})})
 * @ORM\Entity
 */
class Grupo
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
     * @var integer
     *
     * @ORM\Column(name="numeroGrupo", type="integer", nullable=false)
     */
    private $numerogrupo;

    /**
     * @var \Curso
     *
     * @ORM\ManyToOne(targetEntity="Curso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="curso_id", referencedColumnName="id")
     * })
     */
    private $curso;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profesor_id", referencedColumnName="id")
     * })
     */
    private $profesor;



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
     * Set numerogrupo
     *
     * @param integer $numerogrupo
     * @return Grupo
     */
    public function setNumerogrupo($numerogrupo)
    {
        $this->numerogrupo = $numerogrupo;

        return $this;
    }

    /**
     * Get numerogrupo
     *
     * @return integer 
     */
    public function getNumerogrupo()
    {
        return $this->numerogrupo;
    }

    /**
     * Set curso
     *
     * @param \Matrix\Bundle\Entity\Curso $curso
     * @return Grupo
     */
    public function setCurso(\Matrix\Bundle\Entity\Curso $curso = null)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get curso
     *
     * @return \Matrix\Bundle\Entity\Curso 
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set profesor
     *
     * @param \Matrix\Bundle\Entity\Usuario $profesor
     * @return Grupo
     */
    public function setProfesor(\Matrix\Bundle\Entity\Usuario $profesor = null)
    {
        $this->profesor = $profesor;

        return $this;
    }

    /**
     * Get profesor
     *
     * @return \Matrix\Bundle\Entity\Usuario 
     */
    public function getProfesor()
    {
        return $this->profesor;
    }

    /**
     * toString
     *
     * @return string 
     */
    public function __toString()
    {
        return $this->curso." - ".$this->numerogrupo;
    }
}
