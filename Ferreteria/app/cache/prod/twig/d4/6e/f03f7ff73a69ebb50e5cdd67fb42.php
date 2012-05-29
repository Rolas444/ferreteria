<?php

/* PedidoBundle:Pedido:index.html.twig */
class __TwigTemplate_d46ef03f7ff73a69ebb50e5cdd67fb42 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido"), "html", null, true);
        echo "\">Pedido</a> <div class=\"breadcrumb_divider\"></div><!--<a class=\"current\">Editar</a>-->
";
    }

    // line 8
    public function block_cuerpo1($context, array $blocks = array())
    {
        // line 9
        echo "

<article class=\"module width_3_quarter\">
    <header><h3 class=\"tabs_involved\">Lista de Pedidos</h3>
        <ul class=\"tabs\">
                <li><a href=\"#tab1\">pagina 1</a></li>        
        </ul>
    </header>

    <div class=\"tab_container\">
        <div id=\"tab1\" class=\"tab_content\">
            <table class=\"tablesorter\" cellspacing=\"0\"> 
                <thead>    
                    <tr>
                        <!--<th>Id</th>-->
                        <th>Fecha</th>
                        <th>Monto</th>
                        <th>Igv</th>
                        <th>Descripcion</th>
                        <th>Nombrecliente</th>
                        <!--<th>Usuario</th>-->
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 35
            echo "                    <tr>
                        ";
            // line 37
            echo "                        <td>";
            if ($this->getAttribute($this->getContext($context, "entity"), "Fecha")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Fecha"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Monto"), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Igv"), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Descripcion"), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "NombreCliente"), "html", null, true);
            echo "</td>
                        <td>                        
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">Detalles</a>
                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">Editar</a>                            
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 48
        echo "                </tbody>
            </table>
        </div>   
        ";
        // line 54
        echo "     </div>
    <footer>
        <div class=\"submit_link\"></div>
    </footer>       
</article>

";
    }

    public function getTemplateName()
    {
        return "PedidoBundle:Pedido:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 54,  112 => 48,  102 => 44,  98 => 43,  93 => 41,  89 => 40,  85 => 39,  81 => 38,  74 => 37,  71 => 35,  67 => 34,  40 => 9,  37 => 8,  30 => 5,  27 => 4,);
    }
}
