<?php

/* CompraBundle:Compra:show.html.twig */
class __TwigTemplate_f1fa6493773b21e873729f588be16fff extends Twig_Template
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

    // line 3
    public function block_ubicacion($context, array $blocks = array())
    {
        // line 4
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compra"), "html", null, true);
        echo "\">Compra</a> <div class=\"breadcrumb_divider\"></div><!--<a class=\"current\">Editar</a>-->
";
    }

    // line 7
    public function block_cuerpo1($context, array $blocks = array())
    {
        // line 8
        echo "
<article class=\"module width_full\">
    <header><h3>Detalle de Compra</h3></header>
        <div class=\"module_content\">
                <h1>Compra</h1>

            <table class=\"record_properties\">
                <tbody>

                    <tr>
                        <th>Id</th>
                        <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Tipodocumento</th>
                        <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "TipoDocumento"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Numerodocumento</th>
                        <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "NumeroDocumento"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Fecha</th>
                        <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Fecha"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Montototal</th>
                        <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "MontoTotal"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Tipopago</th>
                        <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "TipoPago"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Fechaenvio</th>
                        <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "FechaEnvio"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>
                
        <form action=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compra_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">                           
            <input type=\"image\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/images/icn_edit_article.png"), "html", null, true);
        echo "\">                                                                                             
        </form> 

        <form action=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compra_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
        ";
        // line 53
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
            <input type=\"image\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/images/icn_trash.png"), "html", null, true);
        echo "\">                                                                                          
        </form>
       </div>         
    <footer>
        <div class=\"submit_link\">
        </div>
    </footer>       
        
</article>

";
    }

    public function getTemplateName()
    {
        return "CompraBundle:Compra:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 54,  117 => 53,  113 => 52,  107 => 49,  103 => 48,  95 => 43,  88 => 39,  81 => 35,  74 => 31,  67 => 27,  60 => 23,  53 => 19,  40 => 8,  37 => 7,  30 => 4,  27 => 3,);
    }
}
