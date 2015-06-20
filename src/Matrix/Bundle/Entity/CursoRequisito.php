<?php

namespace Matrix\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CursoRequisito
 *
 * @ORM\Table(name="curso_requisito", indexes={@ORM\Index(name="fk_curso_has_curso_curso2_idx", columns={"requisito_id"}), @ORM\Index(name="fk_curso_has_curso_curso1_idx", columns={"curso_id"})})
 * @ORM\Entity
 */
class CursoRequisito
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
     * @var \Curso
     *
     * @ORM\ManyToOne(targetEntity="Curso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="curso_id", referencedColumnName="id")
     * })
     */
    private $curso;

    /**
     * @var \Curso
     *
     * @ORM\ManyToOne(targetEntity="Curso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="requisito_id", referencedColumnName="id")
     * })
     */
    private $requisito;



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
     * Set curso
     *
     * @param \Matrix\Bundle\Entity\Curso $curso
     * @return CursoRequisito
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
     * Set requisito
     *
     * @param \Matrix\Bundle\Entity\Curso $requisito
     * @return CursoRequisito
     */
    public function setRequisito(\Matrix\Bundle\Entity\Curso $requisito = null)
    {
        $this->requisito = $requisito;

        return $this;
    }

    /**
     * Get requisito
     *
     * @return \Matrix\Bundle\Entity\Curso 
     */
    public function getRequisito()
    {
        return $this->requisito;
    }
}
