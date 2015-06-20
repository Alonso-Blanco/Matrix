<?php

namespace Matrix\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CursoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sigla', null,
                array('label'=>'Sigla'))
            ->add('nombreCurso', null,
                array('label'=>'Nombre Curso'))
            ->add('creditos', null,
                array('label'=>'Créditos'))
            ->add('carrera', null,
                array('label'=>'Carrera'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Matrix\Bundle\Entity\Curso'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'matrix_bundle_curso';
    }
}
