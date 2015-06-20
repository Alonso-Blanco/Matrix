<?php

namespace Matrix\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CursoCorequisito
 *
 * @ORM\Table(name="curso_corequisito", indexes={@ORM\Index(name="fk_curso_has_curso_curso4_idx", columns={"corequisito_id"}), @ORM\Index(name="fk_curso_has_curso_curso3_idx", columns={"curso_id"})})
 * @ORM\Entity
 */
class CursoCorequisito
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
     *   @ORM\JoinColumn(name="corequisito_id", referencedColumnName="id")
     * })
     */
    private $corequisito;



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
     * @return CursoCorequisito
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
     * Set corequisito
     *
     * @param \Matrix\Bundle\Entity\Curso $corequisito
     * @return CursoCorequisito
     */
    public function setCorequisito(\Matrix\Bundle\Entity\Curso $corequisito = null)
    {
        $this->corequisito = $corequisito;

        return $this;
    }

    /**
     * Get corequisito
     *
     * @return \Matrix\Bundle\Entity\Curso 
     */
    public function getCorequisito()
    {
        return $this->corequisito;
    }
}
