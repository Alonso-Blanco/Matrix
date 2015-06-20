<?php

namespace Matrix\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Length;

class UsuarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('usuario', 'text',
                array('label'=>'Usuario'))
            ->add('contrasena', 'password',
                array('label'=>'Contraseña'))
            ->add('rol', 'choice', array(
                  'choices' => array(
                  1 => 'Administrador',
                  2 => 'Profesor',
                  3 => 'Estudiante'
                  )))
            ->add('nombrecompleto', 'text',
                array('label'=>'Nombre Completo'))
            ->add('cedula', 'number',
                array('label'=>'Cédula'))
            ->add('carne', 'text',
                array('label'=>'Carne'))
            ->add('telefono', 'number',
                array('label'=>'Teléfono'))
            ->add('direccion', 'textarea',
                array('label'=>'Dirección'))
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
            'data_class' => 'Matrix\Bundle\Entity\Usuario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'matrix_bundle_usuario';
    }
}
