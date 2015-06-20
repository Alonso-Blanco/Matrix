<?php

namespace Matrix\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HorarioGrupo
 *
 * @ORM\Table(name="horario_grupo", indexes={@ORM\Index(name="fk_horario_has_grupo_grupo1_idx", columns={"grupo_id"}), @ORM\Index(name="fk_horario_has_grupo_horario1_idx", columns={"horario_id"})})
 * @ORM\Entity
 */
class HorarioGrupo
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
     * @var \Grupo
     *
     * @ORM\ManyToOne(targetEntity="Grupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grupo_id", referencedColumnName="id")
     * })
     */
    private $grupo;

    /**
     * @var \Horario
     *
     * @ORM\ManyToOne(targetEntity="Horario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="horario_id", referencedColumnName="id")
     * })
     */
    private $horario;



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
     * Set grupo
     *
     * @param \Matrix\Bundle\Entity\Grupo $grupo
     * @return HorarioGrupo
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
     * Set horario
     *
     * @param \Matrix\Bundle\Entity\Horario $horario
     * @return HorarioGrupo
     */
    public function setHorario(\Matrix\Bundle\Entity\Horario $horario = null)
    {
        $this->horario = $horario;

        return $this;
    }

    /**
     * Get horario
     *
     * @return \Matrix\Bundle\Entity\Horario 
     */
    public function getHorario()
    {
        return $this->horario;
    }
}
