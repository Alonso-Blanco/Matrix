<?php

namespace Matrix\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CarreraType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codigocarrera', null,
                array('label'=>'Código Carrera'))
            ->add('nombrecarrera', null,
                array('label'=>'Nombre Carrera'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Matrix\Bundle\Entity\Carrera'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'matrix_bundle_carrera';
    }
}
