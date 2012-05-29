<?php

/* AlmacenBundle:Producto:new.html.twig */
class __TwigTemplate_332addef08af6e0d3f5ca5f2f6e07e82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

<form  id=\"producto\" action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    <h1><input type=\"submit\" value=\"Agregar\" style=\"float: right;\"></h1>
    <fieldset>
    ";
        // line 6
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Nombre"));
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Nombre"), array("attr" => array("class" => "pronombre")));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "CodProducto"), array("attr" => array("value" => "O")));
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Marca"));
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Marca"), array("attr" => array("class" => "promarca")));
        echo "
    ";
        // line 11
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Descripcion"), "Descripcion");
        echo "
    ";
        // line 12
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Descripcion"), array("attr" => array("class" => "descripcion")));
        echo "
    ";
        // line 13
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Categoria"), "Categoria");
        echo "
    ";
        // line 14
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Categoria"), array("attr" => array("class" => "procategoria")));
        echo "
    ";
        // line 15
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "UnidadMedida"), "Medida :");
        echo "
    ";
        // line 16
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "UnidadMedida"), array("attr" => array("class" => "promedida")));
        echo "
    ";
        // line 17
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Stock"), "Cantidad :");
        echo "
    ";
        // line 18
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Stock"), array("attr" => array("class" => "procantidad")));
        echo "
    ";
        // line 19
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Precio"), "precio unitario de venta :");
        echo "
    ";
        // line 20
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Precio"));
        echo "
            
        </fieldset>
    ";
        // line 23
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
    
</form>
<fieldset>
    <label>Precio de Compra :</label>
    <input class=\"proprecio\" type=\"text\">
</fieldset>
<footer></footer>";
    }

    public function getTemplateName()
    {
        return "AlmacenBundle:Producto:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 23,  85 => 20,  81 => 19,  77 => 18,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  33 => 7,  21 => 3,  17 => 1,  241 => 91,  239 => 90,  235 => 88,  232 => 87,  198 => 110,  180 => 94,  178 => 87,  169 => 80,  167 => 79,  154 => 68,  150 => 65,  146 => 64,  142 => 63,  138 => 62,  134 => 61,  129 => 59,  125 => 58,  121 => 57,  117 => 56,  113 => 55,  108 => 53,  104 => 52,  99 => 50,  95 => 49,  88 => 45,  82 => 44,  76 => 40,  73 => 17,  66 => 36,  63 => 35,  32 => 5,  29 => 6,);
    }
}
