<?php

namespace Ferreteria\CompraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PagoCompraType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('NumeroPago')
            ->add('Monto')
            ->add('Compra')
        ;
    }

    public function getName()
    {
        return 'ferreteria_comprabundle_pagocompratype';
    }
}
