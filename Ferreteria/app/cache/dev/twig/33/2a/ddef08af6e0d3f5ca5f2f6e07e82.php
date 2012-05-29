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
        echo "<h1>Ingresar un nuevo producto</h1>

<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    <input type=\"submit\" value=\"Agregar\">
    <fieldset>
    ";
        // line 6
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Nombre"));
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Nombre"));
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
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Marca"));
        echo "
    ";
        // line 11
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Descripcion"), "Descripcion");
        echo "
    ";
        // line 12
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Descripcion"));
        echo "
    ";
        // line 13
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Categoria"), "Categoria");
        echo "
    ";
        // line 14
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Categoria"));
        echo "
    ";
        // line 15
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "UnidadMedida"), "Medida :");
        echo "
    ";
        // line 16
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "UnidadMedida"));
        echo "
    ";
        // line 17
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Stock"), "Cantidad :");
        echo "
    ";
        // line 18
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Stock"));
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
    <input type=\"text\">
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
        return array (  91 => 23,  85 => 20,  81 => 19,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  17 => 1,  149 => 64,  139 => 56,  134 => 6,  126 => 64,  121 => 61,  119 => 59,  114 => 56,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  52 => 15,  48 => 14,  42 => 11,  37 => 8,  33 => 7,  28 => 6,  21 => 3,  240 => 90,  238 => 89,  234 => 87,  231 => 86,  197 => 109,  179 => 93,  177 => 86,  168 => 79,  166 => 78,  152 => 66,  148 => 63,  144 => 59,  140 => 61,  136 => 60,  132 => 59,  128 => 65,  124 => 57,  120 => 56,  116 => 58,  112 => 54,  107 => 52,  103 => 51,  98 => 49,  94 => 48,  89 => 46,  83 => 45,  77 => 18,  74 => 40,  67 => 37,  64 => 36,  32 => 5,  29 => 6,);
    }
}
