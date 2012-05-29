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
<article class=\"module width_half\">
\t\t\t<header><h3>Crear Proveedor</h3></header>
                        
<form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedor_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
     
    <fieldset style=\"width:70%; padding: 1%;\">
     ";
        // line 16
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Nombre"), "Nombre/Razon Social :");
        echo "
     ";
        // line 17
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Nombre"));
        echo "</fieldset>
    <h4> ";
        // line 18
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "TipoDocumento"), " DOCUMENTO :");
        echo "</h4>
     ";
        // line 19
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "TipoDocumento"));
        echo " 
     ";
        // line 20
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "NumeroDocumento"));
        echo "
     <fieldset style=\"width:70%; padding: 1%;\">
     ";
        // line 22
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Email"), "Email :");
        echo "
     ";
        // line 23
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Email"));
        echo "
     ";
        // line 24
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Direccion"), "Direccion:");
        echo "
     ";
        // line 25
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Direccion"));
        echo "
     ";
        // line 26
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Fax"), "Fax :");
        echo "
     ";
        // line 27
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Fax"));
        echo "
     ";
        // line 28
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Web"), "web :");
        echo "
     ";
        // line 29
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Web"));
        echo "
     ";
        // line 30
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Telefono"), "Telefono :");
        echo "
     ";
        // line 31
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Telefono"));
        echo "
     ";
        // line 32
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Observacion"), "Observaciones:");
        echo "
     ";
        // line 33
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Observacion"));
        echo " 
     ";
        // line 34
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Ubigeo"), "Ubigeo:");
        echo "
     ";
        // line 35
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Ubigeo"));
        echo "</fieldset> 
      ";
        // line 36
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
   
        <input type=\"submit\" value=\"Guardar\"/>
    
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
        return array (  131 => 36,  127 => 35,  123 => 34,  119 => 33,  115 => 32,  111 => 31,  107 => 30,  103 => 29,  99 => 28,  95 => 27,  91 => 26,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  46 => 13,  40 => 9,  37 => 8,  30 => 5,  27 => 4,);
    }
}
