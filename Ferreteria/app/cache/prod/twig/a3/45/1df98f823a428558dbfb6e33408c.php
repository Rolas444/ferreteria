<?php

/* ProveedorBundle:Proveedor:index.html.twig */
class __TwigTemplate_a3451df98f823a428558dbfb6e33408c extends Twig_Template
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
        echo "\">Proveedor</a> <div class=\"breadcrumb_divider\"> <!--</div><a class=\"current\">Editar</a>-->
";
    }

    // line 8
    public function block_cuerpo1($context, array $blocks = array())
    {
        // line 9
        echo " 

<article class=\"module width_3_quarter\">
    <header><h3 class=\"tabs_involved\">Lista de Proveedores</h3>
        <ul class=\"tabs\">
                <li><a href=\"#tab1\">pagina 1</a></li>
        <li><a href=\"#tab2\">pagina 2</a></li>
        </ul>
    </header>

    <div class=\"tab_container\">
            <div id=\"tab1\" class=\"tab_content\">
            <table class=\"tablesorter\" cellspacing=\"0\"> 
                <thead> 
                        <tr> 
                                <th></th> 
                        <!--<th>Id</th>-->
                        <th>Nombre</th>
                        ";
        // line 28
        echo "                        <th>Direccion</th>
                        <th>Fax</th>
                        <!--<th>Web</th>-->
                        <th>Telefono</th>
                        <th>Observacion</th>
                        <th>Acciones</th>
                        </tr> 
                </thead> 
            <tbody> 

                ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 39
            echo "
                    <tr> 
                        <td><input type=\"checkbox\"></td> 

                        <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Nombre"), "html", null, true);
            echo "</td>
                        ";
            // line 45
            echo "                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Direccion"), "html", null, true);
            echo "</td>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Fax"), "html", null, true);
            echo "</td>
                        ";
            // line 48
            echo "                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Telefono"), "html", null, true);
            echo "</td>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Observacion"), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedor_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">Detalles</a>
                            <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedor_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">Editar</a>
                        </td>

                        <!--<td><input type=\"image\" src=\"images/icn_edit.png\" title=\"Edit\"><input type=\"image\" src=\"images/icn_trash.png\" title=\"Trash\"></td> 
                    --></tr> 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 57
        echo "        
            </tbody> 
            </table>
            </div><!-- end of #tab1 -->
                <form action=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedor_new"), "html", null, true);
        echo "\">                           
                    <input type=\"image\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/images/icn_new_article.png"), "html", null, true);
        echo "\">                                   
                <form>                         
    </div><!-- end of .tab_container -->
                
                <footer>
                    <div class=\"submit_link\">

                    </div>
                </footer>
                
</article><!-- end of content manager article -->
                    
";
    }

    public function getTemplateName()
    {
        return "ProveedorBundle:Proveedor:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 62,  127 => 61,  121 => 57,  109 => 52,  105 => 51,  100 => 49,  95 => 48,  91 => 46,  86 => 45,  82 => 43,  76 => 39,  72 => 38,  60 => 28,  40 => 9,  37 => 8,  30 => 5,  27 => 4,);
    }
}
