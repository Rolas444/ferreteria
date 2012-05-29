<?php

namespace Ferreteria\UsuarioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UsuarioType extends AbstractType
{
public function buildForm(FormBuilder $builder, array $options)
{
    $builder
        ->add('Nombre')
        ->add('Apellido')
        ->add('Rol','choice',array(
            'choices'=>array(
            'USUARIO'=>'USUARIO','ADMIN'=>'ADMINISTRADOR')
        ))
        ->add('Password', 'repeated', array(
         'type'=>'password',
           'invalid_message'=> 'no coinciden las contraseñas',
            
        ))
;
}

public function getName()
{
    return 'Ferreteria_usuariobundle_usuariotype';
    }
}
?>
