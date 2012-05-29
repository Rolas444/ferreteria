<?php

namespace Ferreteria\AlmacenBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UnidadMedidaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('Nombre')
        ;
    }

    public function getName()
    {
        return 'ferreteria_almacenbundle_unidadmedidatype';
    }
}
