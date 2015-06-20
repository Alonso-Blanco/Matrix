<?php

namespace Matrix\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HorarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dia', 'choice', array(
                  'choices' => array(
                  1 => 'Lunes',
                  2 => 'Martes',
                  3 => 'Miércoles',
                  4 => 'Jueves',
                  5 => 'Viernes',
                  6 => 'Sábado',
                  7 => 'Domingo'
                  )))
            ->add('horainicio', null,
                array('label'=>'Hora Inicio'))
            ->add('horafin', null,
                array('label'=>'Hora Fin'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Matrix\Bundle\Entity\Horario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'matrix_bundle_horario';
    }
}
