<?php

namespace Matrix\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CursoCorequisitoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('curso', null,
                array('label'=>'Curso'))
            ->add('corequisito', null,
                array('label'=>'Correquisito'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Matrix\Bundle\Entity\CursoCorequisito'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'matrix_bundle_cursocorequisito';
    }
}
