<?php

namespace Ferreteria\PedidoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PedidoType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('Fecha', 'date')
            ->add('Monto')
            ->add('Igv')
            ->add('Descripcion','textarea')
            ->add('NombreCliente')
            ->add('Usuario', 'text', array('required'=>false))
        ;
    }

    public function getName()
    {
        return 'ferreteria_pedidobundle_pedidotype';
    }
}
