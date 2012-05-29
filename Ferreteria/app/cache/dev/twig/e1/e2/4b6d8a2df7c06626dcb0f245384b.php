<?php

/* ProveedorBundle:Representante:new.html.twig */
class __TwigTemplate_e1e24b6d8a2df7c06626dcb0f245384b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontBundle:Default:index.html.twig");

        $this->blocks = array(
            'ubicacion' => array($this, 'block_ubicacion'),
            'cuerpo1' => array($this, 'block_cuerpo1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_ubicacion($context, array $blocks = array())
    {
        // line 4
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("representante"), "html", null, true);
        echo "\">Representante</a> <div class=\"breadcrumb_divider\"> </div><a class=\"current\">Creación</a>
";
    }

    // line 7
    public function block_cuerpo1($context, array $blocks = array())
    {
        // line 8
        echo "
<article class=\"module width_full\">
\t\t\t<header><h3>Crear Representante</h3></header>


<form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("representante_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">    
    
    <fieldset style=\"width:50%; padding: 1%;\">
     ";
        // line 16
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Nombre"), "Nombre :");
        echo "
     ";
        // line 17
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Nombre"));
        echo "</fieldset>
     <fieldset style=\"width:50%; padding: 1%;\">
     ";
        // line 19
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Apellido"), "Apellido :");
        echo "
     ";
        // line 20
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Apellido"));
        echo "</fieldset> 
     <fieldset style=\"width:50%; padding: 1%;\">
     ";
        // line 22
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Telefono1"), "Telefono1:");
        echo "
     ";
        // line 23
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Telefono1"));
        echo "</fieldset>
     <fieldset style=\"width:50%; padding: 1%;\">
     ";
        // line 25
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Telefono2"), "Telefono2:");
        echo "
     ";
        // line 26
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Telefono2"));
        echo "</fieldset>
     <fieldset style=\"width:50%; padding: 1%;\">
     ";
        // line 28
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Telefono3"), "Telefono3:");
        echo "
     ";
        // line 29
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Telefono3"));
        echo "</fieldset>
     <fieldset style=\"width:50%; padding: 1%;\">
     ";
        // line 31
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Telefono4"), "Telefono4:");
        echo "
     ";
        // line 32
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Telefono4"));
        echo "</fieldset>
     <fieldset style=\"width:50%; padding: 1%;\">
     ";
        // line 34
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Email"), "Email :");
        echo "
     ";
        // line 35
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Email"));
        echo "</fieldset>
     <fieldset style=\"width:50%; padding: 1%;\">
     ";
        // line 37
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Documento"), "Documento :");
        echo "
     ";
        // line 38
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Documento"));
        echo "</fieldset>
     <fieldset style=\"width:50%; padding: 1%;\">
     ";
        // line 40
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Proveedor"), "Proveedor:");
        echo "
     ";
        // line 41
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Proveedor"));
        echo "</fieldset>  
    <p>
        <button type=\"submit\">Create</button>
    </p>
</form>

";
    }

    public function getTemplateName()
    {
        return "ProveedorBundle:Representante:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 41,  127 => 40,  122 => 38,  118 => 37,  113 => 35,  109 => 34,  104 => 32,  100 => 31,  95 => 29,  91 => 28,  86 => 26,  82 => 25,  77 => 23,  73 => 22,  68 => 20,  64 => 19,  59 => 17,  55 => 16,  47 => 13,  40 => 8,  37 => 7,  30 => 4,  27 => 3,);
    }
}
