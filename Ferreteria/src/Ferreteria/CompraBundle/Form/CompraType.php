<?php

namespace Ferreteria\CompraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CompraType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('TipoDocumento','choice',array('choices'=>array('BOLETA'=>'BOLETA','FACTURA'=>'FACTURA')))
            ->add('NumeroDocumento')
            ->add('Fecha','date')
            ->add('MontoTotal')
            ->add('TipoPago','checkbox',array('required'=>false))
            ->add('FechaEnvio','date')
            ->add('Proveedor')
            //S->add('Usuario','text',array('required'=>false))
            
        ;
    }

    public function getName()
    {
        return 'ferreteria_comprabundle_compratype';
    }
}
