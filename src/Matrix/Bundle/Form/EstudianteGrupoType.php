<?php

namespace Matrix\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EstudianteGrupoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nota', null,
                array('label'=>'Nota'))
            ->add('usuario', null,
                array('label'=>'Usuario'))
            ->add('grupo', null,
                array('label'=>'Grupo'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Matrix\Bundle\Entity\EstudianteGrupo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'matrix_bundle_estudiantegrupo';
    }
}
