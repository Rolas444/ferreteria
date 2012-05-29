<?php

/* ProveedorBundle:Proveedor:new.html.twig */
class __TwigTemplate_dbe3b8990bd0d469f3c38df1f1555da1 extends Twig_Template
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

    // line 4
    public function block_ubicacion($context, array $blocks = array())
    {
        // line 5
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedor"), "html", null, true);
        echo "\">Proveedor</a> <div class=\"breadcrumb_divider\"></div><a class=\"current\">Creación</a>
";
    }

    // line 8
    public function block_cuerpo1($context, array $blocks = array())
    {
        // line 9
        echo "
<article class=\"module width_full\">
\t\t\t<header><h3>Crear Proveedor</h3></header>
                        
<form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedor_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
     ";
        // line 14
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo " 
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
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "TipoDocumento"), "TipoDocumento :");
        echo "
     ";
        // line 20
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "TipoDocumento"));
        echo "</fieldset> 
     <fieldset style=\"width:50%; padding: 1%;\">
     ";
        // line 22
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "NumeroDocumento"), "NumeroDocumento :");
        echo "
     ";
        // line 23
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "NumeroDocumento"));
        echo "</fieldset>
     <fieldset style=\"width:50%; padding: 1%;\">
     ";
        // line 25
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Email"), "Email :");
        echo "
     ";
        // line 26
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Email"));
        echo "</fieldset>
     <fieldset style=\"width:50%; padding: 1%;\">
     ";
        // line 28
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Direccion"), "Direccion:");
        echo "
     ";
        // line 29
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Direccion"));
        echo "</fieldset>
     <fieldset style=\"width:50%; padding: 1%;\">
     ";
        // line 31
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Fax"), "Fax :");
        echo "
     ";
        // line 32
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Fax"));
        echo "</fieldset>
     <fieldset style=\"width:50%; padding: 1%;\">
     ";
        // line 34
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Web"), "Fax :");
        echo "
     ";
        // line 35
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Web"));
        echo "</fieldset>
     <fieldset style=\"width:50%; padding: 1%;\">
     ";
        // line 37
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Telefono"), "Telefono :");
        echo "
     ";
        // line 38
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Telefono"));
        echo "</fieldset>
     <fieldset style=\"width:50%; padding: 1%;\">
     ";
        // line 40
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Observacion"), "Observacion:");
        echo "
     ";
        // line 41
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Observacion"));
        echo "</fieldset> 
        <fieldset style=\"width:50%; padding: 1%;\">
     ";
        // line 43
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Ubigeo"), "Ubigeo:");
        echo "
     ";
        // line 44
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Ubigeo"));
        echo "</fieldset>
        ";
        // line 45
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
    <p>
        <button type=\"submit\">Create</button>
    </p>
</form>

";
    }

    public function getTemplateName()
    {
        return "ProveedorBundle:Proveedor:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 45,  142 => 44,  138 => 43,  133 => 41,  129 => 40,  124 => 38,  120 => 37,  115 => 35,  111 => 34,  106 => 32,  102 => 31,  97 => 29,  93 => 28,  88 => 26,  84 => 25,  79 => 23,  75 => 22,  70 => 20,  66 => 19,  61 => 17,  57 => 16,  52 => 14,  46 => 13,  40 => 9,  37 => 8,  30 => 5,  27 => 4,);
    }
}
