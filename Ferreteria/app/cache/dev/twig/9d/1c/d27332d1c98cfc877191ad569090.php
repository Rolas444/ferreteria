<?php

/* AlmacenBundle:Producto:edit.html.twig */
class __TwigTemplate_9d1cd27332d1c98cfc877191ad569090 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto"), "html", null, true);
        echo "\">Producto</a> <div class=\"breadcrumb_divider\"></div><a class=\"current\">Editar</a>
";
    }

    // line 8
    public function block_cuerpo1($context, array $blocks = array())
    {
        // line 9
        echo "
<article class=\"module width_full\">
\t\t\t<header><h3>Editar Artículo</h3></header>
\t\t\t\t<div class=\"module_content\">
                                    
                                    <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "edit_form"));
        echo ">
                                                
                                        <fieldset style=\"width:50%; padding: 1%;\">
                                        ";
        // line 17
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "CodProducto"), "Codigo :");
        echo "
                                        ";
        // line 18
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "CodProducto"));
        echo "</fieldset>
                                        <fieldset style=\"width:50%; padding: 1%;\">
                                        ";
        // line 20
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "Nombre"), "Nombre :");
        echo "
                                        ";
        // line 21
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "Nombre"));
        echo "</fieldset>
                                        <fieldset style=\"width:50%; padding: 1%;\">
                                        ";
        // line 23
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "Descripcion"), "Descripcion :");
        echo "
                                        ";
        // line 24
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "Descripcion"));
        echo "</fieldset>
                                        <fieldset style=\"width:50%; padding: 1%;\">
                                        ";
        // line 26
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "Marca"), "Marca :");
        echo "
                                        ";
        // line 27
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "Marca"));
        echo "</fieldset>
                                        <fieldset style=\"width:50%; padding: 1%;\">
                                        ";
        // line 29
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "Categoria"), "Categoria :");
        echo "
                                        ";
        // line 30
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "Categoria"));
        echo "</fieldset>
                                        <fieldset style=\"width:50%; padding: 1%;\">
                                        ";
        // line 32
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "Stock"), "Unidades Disponibles :");
        echo "
                                        ";
        // line 33
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "Stock"));
        echo "</fieldset>
                                        <fieldset style=\"width:50%; padding: 1%;\">
                                        ";
        // line 35
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "UnidadMedida"), "Medida :");
        echo "
                                        ";
        // line 36
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "UnidadMedida"));
        echo "</fieldset>
                                        <fieldset style=\"width:50%; padding: 1%;\">
                                        ";
        // line 38
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "Precio"), "Precio Sugerido :");
        echo "
                                        ";
        // line 39
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "Precio"));
        echo "</fieldset>

                                    <form action=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
                                                        ";
        // line 42
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
                                                                                            
\t\t\t\t\t<div class=\"clear\"></div>\t
\t\t\t\t</div>
\t\t\t<footer>
\t\t\t\t<div class=\"submit_link\">
                                    <button type=\"submit\" class=\"alt_btn\">Eliminar</button>
                                         </form>
                                        <button type=\"submit\">Guardar</button>
                                        
\t\t\t\t</div>
\t\t\t</footer>
                        
                                            </form>
\t\t</article><!-- end of post new article -->

";
    }

    public function getTemplateName()
    {
        return "AlmacenBundle:Producto:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 42,  127 => 41,  122 => 39,  118 => 38,  113 => 36,  109 => 35,  104 => 33,  100 => 32,  95 => 30,  91 => 29,  86 => 27,  82 => 26,  77 => 24,  73 => 23,  68 => 21,  64 => 20,  59 => 18,  55 => 17,  47 => 14,  40 => 9,  37 => 8,  30 => 5,  27 => 4,);
    }
}
