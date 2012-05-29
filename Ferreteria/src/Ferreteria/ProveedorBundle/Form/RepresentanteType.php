<?php

namespace Ferreteria\ProveedorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class RepresentanteType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('Nombre')
            ->add('Apellido')
            ->add('Telefono1')
            ->add('Telefono2')
            ->add('Telefono3')
            ->add('Telefono4')
            ->add('Email')
            ->add('Documento')
            ->add('Proveedor')
        ;
    }

    public function getName()
    {
        return 'ferreteria_proveedorbundle_representantetype';
    }
}
