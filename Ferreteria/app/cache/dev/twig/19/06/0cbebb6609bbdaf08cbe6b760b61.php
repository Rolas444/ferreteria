<?php

/* AlmacenBundle:UnidadMedida:show.html.twig */
class __TwigTemplate_19060cbebb6609bbdaf08cbe6b760b61 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unidadmedida"), "html", null, true);
        echo "\">Unidad Media</a> <div class=\"breadcrumb_divider\"></div><a class=\"current\">Detalle</a>
";
    }

    // line 8
    public function block_cuerpo1($context, array $blocks = array())
    {
        // line 9
        echo "
<article class=\"module width_full\">
\t\t\t<header><h3>Detalle Unidad Medida</h3></header>
\t\t\t\t<div class=\"module_content\">
                                    <h1>UnidadMedida</h1>
                                    <table class=\"record_properties\">
                                        <tbody>
                                            <tr>
                                                <th>Id</th>
                                                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
                                            </tr>
                                            <tr>
                                                <th>Nombre</th>
                                                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Nombre"), "html", null, true);
        echo "</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    ";
        // line 34
        echo "                                    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unidadmedida_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">                           
                                        <input type=\"image\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/images/icn_edit_article.png"), "html", null, true);
        echo "\">                                                                                             
                                    </form>  
    
    
                                    <form action=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unidadmedida_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
                                    ";
        // line 40
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
                                        <input type=\"image\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/images/icn_trash.png"), "html", null, true);
        echo "\">                                                                                          

                                    </form> 
                                </div>

                                    <footer>
                                        <div class=\"submit_link\">

                                        </div>
                                    </footer>
                                    
</article><!-- end of content manager article -->
";
    }

    public function getTemplateName()
    {
        return "AlmacenBundle:UnidadMedida:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 41,  82 => 40,  78 => 39,  71 => 35,  66 => 34,  58 => 22,  51 => 18,  40 => 9,  37 => 8,  30 => 5,  27 => 4,);
    }
}
