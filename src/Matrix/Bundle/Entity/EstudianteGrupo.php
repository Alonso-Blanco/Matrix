<?php

namespace Matrix\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstudianteGrupo
 *
 * @ORM\Table(name="estudiante_grupo", indexes={@ORM\Index(name="fk_usuario_has_grupo_grupo1_idx", columns={"grupo_id"}), @ORM\Index(name="fk_usuario_has_grupo_usuario1_idx", columns={"usuario_id"})})
 * @ORM\Entity
 */
class EstudianteGrupo
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
     * @var float
     *
     * @ORM\Column(name="nota", type="float", precision=10, scale=0, nullable=true)
     */
    private $nota;

    /**
     * @var \Grupo
     *
     * @ORM\ManyToOne(targetEntity="Grupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grupo_id", referencedColumnName="id")
     * })
     */
    private $grupo;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * })
     */
    private $usuario;



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
     * Set nota
     *
     * @param float $nota
     * @return EstudianteGrupo
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return float 
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set grupo
     *
     * @param \Matrix\Bundle\Entity\Grupo $grupo
     * @return EstudianteGrupo
     */
    public function setGrupo(\Matrix\Bundle\Entity\Grupo $grupo = null)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return \Matrix\Bundle\Entity\Grupo 
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set usuario
     *
     * @param \Matrix\Bundle\Entity\Usuario $usuario
     * @return EstudianteGrupo
     */
    public function setUsuario(\Matrix\Bundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Matrix\Bundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
