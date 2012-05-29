<?php

namespace Ferreteria\AlmacenBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ProductoType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('Categoria')
            ->add('UnidadMedida')
            ->add('CodProducto','hidden',array('required'=>false))
            ->add('Descripcion','textarea',array('required'=>false))
            ->add('Nombre')
            ->add('Marca')
            ->add('Stock')
            ->add('Precio','text',array('required'=>false))
        ;
    }

    public function getName()
    {
        return 'ferreteria_almacenbundle_productotype';
    }
}
