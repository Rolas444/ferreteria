<?php

/* AlmacenBundle:Producto:show.html.twig */
class __TwigTemplate_f32fbdd046710500e2a9a80b01585605 extends Twig_Template
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
        echo "\">Producto</a> <div class=\"breadcrumb_divider\"></div><a class=\"current\">Detalle</a>
";
    }

    // line 8
    public function block_cuerpo1($context, array $blocks = array())
    {
        // line 9
        echo "
<article class=\"module width_full\">
\t\t\t<header><h3>Detalle de Artículo</h3></header>
\t\t\t\t<div class=\"module_content\">
                                    <h1>Producto</h1>

                                    <table class=\"record_properties\">
                                        <tbody>
                                            ";
        // line 25
        echo "                                            <tr>
                                                <th>Nombre :</th>
                                                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Nombre"), "html", null, true);
        echo "</td>
                                            </tr>
                                            <tr>
                                                <th>Descripción :</th>
                                                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Descripcion"), "html", null, true);
        echo "</td>
                                            </tr>
                                            
                                            <tr>
                                                <th>Marca :</th>
                                                <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Marca"), "html", null, true);
        echo "</td>
                                            </tr>
                                            <tr>
                                                <th>Categoria :</th>
                                                <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Categoria"), "html", null, true);
        echo "</td>
                                            </tr>
                                            
                                            <tr>
                                                <th>Cantidad Disponible :</th>
                                                <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Stock"), "html", null, true);
        echo "</td>
                                            </tr>
                                            <tr>
                                                <th>Unidad de Medida :</th>
                                                <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "UnidadMedida"), "html", null, true);
        echo "</td>
                                            </tr>
                                            
                                            <tr>
                                                <th>Precio Sugerido :</th>
                                                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Precio"), "html", null, true);
        echo "</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    ";
        // line 66
        echo "                                    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">                           
                                        <input type=\"image\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/images/icn_edit_article.png"), "html", null, true);
        echo "\">                                                                                             
                                    </form>  
    
    
                                    <form action=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
                                    ";
        // line 72
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
                                        <input type=\"image\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/images/icn_trash.png"), "html", null, true);
        echo "\">                                                                                          

                                    </form>       
\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t<footer>
\t\t\t\t<div class=\"submit_link\">
                                    
\t\t\t\t</div>
\t\t\t</footer>                        
</article><!-- end of post new article -->

";
    }

    public function getTemplateName()
    {
        return "AlmacenBundle:Producto:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 73,  123 => 72,  119 => 71,  112 => 67,  107 => 66,  99 => 54,  91 => 49,  84 => 45,  76 => 40,  69 => 36,  61 => 31,  54 => 27,  50 => 25,  40 => 9,  37 => 8,  30 => 5,  27 => 4,);
    }
}
