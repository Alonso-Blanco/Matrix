<?php

namespace Matrix\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horario
 *
 * @ORM\Table(name="horario")
 * @ORM\Entity
 */
class Horario
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
     * @ORM\Column(name="dia", type="string", nullable=false)
     */
    private $dia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaInicio", type="time", nullable=false)
     */
    private $horainicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaFin", type="time", nullable=false)
     */
    private $horafin;



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
     * Set dia
     *
     * @param string $dia
     * @return Horario
     */
    public function setDia($dia)
    {
        $this->dia = $dia;

        return $this;
    }

    /**
     * Get dia
     *
     * @return string 
     */
    public function getDia()
    {
        return $this->dia;
    }

    /**
     * Set horainicio
     *
     * @param \DateTime $horainicio
     * @return Horario
     */
    public function setHorainicio($horainicio)
    {
        $this->horainicio = $horainicio;

        return $this;
    }

    /**
     * Get horainicio
     *
     * @return \DateTime 
     */
    public function getHorainicio()
    {
        return $this->horainicio;
    }

    /**
     * Set horafin
     *
     * @param \DateTime $horafin
     * @return Horario
     */
    public function setHorafin($horafin)
    {
        $this->horafin = $horafin;

        return $this;
    }

    /**
     * Get horafin
     *
     * @return \DateTime 
     */
    public function getHorafin()
    {
        return $this->horafin;
    }

    /**
     * toString
     *
     * @return string 
     */
    public function __toString()
    {
        return $this->dia." de ".$this->horainicio->format('H:i')." a ".$this->horafin->format('H:i');
    }

}
