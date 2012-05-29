<?php

/* ProveedorBundle:Proveedor:show.html.twig */
class __TwigTemplate_385c8885d3e39c6a00b7770022f79f86 extends Twig_Template
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
        echo "\">Proveedor</a> <div class=\"breadcrumb_divider\"></div><a class=\"current\">Detalle</a>
";
    }

    // line 8
    public function block_cuerpo1($context, array $blocks = array())
    {
        // line 9
        echo "        
<article class=\"module width_full\">
    <header><h3>Detalle de Proveedor</header>
            <div class=\"module_content\">
                <h1>Proveedor</h1>

                    <table class=\"record_properties\">
                        <tbody>
                            ";
        // line 21
        echo "                            <tr>
                                <th>Nombre</th>
                                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Nombre"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Tipodocumento</th>
                                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "TipoDocumento"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Numerodocumento</th>
                                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "NumeroDocumento"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Email"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Direccion</th>
                                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Direccion"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Fax</th>
                                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Fax"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Web</th>
                                <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Web"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Telefono</th>
                                <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Telefono"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Observacion</th>
                                <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Observacion"), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                    </table>

                    ";
        // line 67
        echo "    
                    <form action=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedor_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">                           
                        <input type=\"image\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/images/icn_edit_article.png"), "html", null, true);
        echo "\">                                                                                             
                    </form>  
    
    
                    <form action=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedor_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
                    ";
        // line 74
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
                        <input type=\"image\" src=\"";
        // line 75
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
        return "ProveedorBundle:Proveedor:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 75,  136 => 74,  132 => 73,  125 => 69,  121 => 68,  118 => 67,  110 => 55,  103 => 51,  96 => 47,  89 => 43,  82 => 39,  75 => 35,  68 => 31,  61 => 27,  54 => 23,  50 => 21,  40 => 9,  37 => 8,  30 => 5,  27 => 4,);
    }
}
