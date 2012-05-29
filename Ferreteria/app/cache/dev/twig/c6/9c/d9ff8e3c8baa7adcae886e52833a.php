<?php

/* CompraBundle:Compra:index.html.twig */
class __TwigTemplate_c69cd9ff8e3c8baa7adcae886e52833a extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compra"), "html", null, true);
        echo "\">Compra</a> <div class=\"breadcrumb_divider\"></div><!--<a class=\"current\">Editar</a>-->
";
    }

    // line 8
    public function block_cuerpo1($context, array $blocks = array())
    {
        // line 9
        echo "
<article class=\"module width_3_quarter\">
    <header><h3 class=\"tabs_involved\">Lista Compra</h3>
        <ul class=\"tabs\">
            <li><a href=\"#tab1\">Página 1</a></li>          
        </ul>
    </header>

    <div class=\"tab_container\">
        <div id=\"tab1\" class=\"tab_content\">
                <table class=\"tablesorter\" cellspacing=\"0\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tipodocumento</th>
                        <th>Numerodocumento</th>
                        <th>Fecha</th>
                        <th>Montototal</th>
                        <!--<th>Tipopago</th>-->
                        <th>Fechaenvio</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 34
            echo "                        <tr>
                            <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compra_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "TipoDocumento"), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "NumeroDocumento"), "html", null, true);
            echo "</td>
                            <td>";
            // line 38
            if ($this->getAttribute($this->getContext($context, "entity"), "Fecha")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Fecha"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "MontoTotal"), "html", null, true);
            echo "</td>
                            ";
            // line 41
            echo "                            <td>";
            if ($this->getAttribute($this->getContext($context, "entity"), "FechaEnvio")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "FechaEnvio"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                            <td> 

                                <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compra_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">Detalles</a>                        
                                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compra_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">Editar</a>                        
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 49
        echo "                    </tbody>    
                </table>
        </div>            

        <form action=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compra_new"), "html", null, true);
        echo "\">                           
            <input type=\"image\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/images/icn_new_article.png"), "html", null, true);
        echo "\">                                   
        </form>
     </div>
    <footer>
        <div class=\"submit_link\"></div>
    </footer>         
</article>

";
    }

    public function getTemplateName()
    {
        return "CompraBundle:Compra:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 54,  126 => 53,  120 => 49,  110 => 45,  106 => 44,  97 => 41,  93 => 39,  87 => 38,  83 => 37,  79 => 36,  73 => 35,  70 => 34,  66 => 33,  40 => 9,  37 => 8,  30 => 5,  27 => 4,);
    }
}
