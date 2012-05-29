<?php

namespace Ferreteria\ProveedorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ProveedorType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('Nombre')
            ->add('TipoDocumento','choice',array(
                'choices' => array('DNI'=>'DNI','RUC'=>'RUC'))
            )
            ->add('NumeroDocumento')
            ->add('Email')
            ->add('Direccion')
            ->add('Fax')
            ->add('Web')
            ->add('Telefono')
            ->add('Observacion','textarea')
            ->add('Ubigeo')
        ;
    }

    public function getName()
    {
        return 'ferreteria_proveedorbundle_proveedortype';
    }
}
