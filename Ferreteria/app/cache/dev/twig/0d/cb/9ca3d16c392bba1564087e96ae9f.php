<?php

/* AlmacenBundle:Categoria:index.html.twig */
class __TwigTemplate_0dcb9ca3d16c392bba1564087e96ae9f extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria"), "html", null, true);
        echo "\">Categoria</a> <div class=\"breadcrumb_divider\"></div><!--<a class=\"current\">Editar</a>-->
";
    }

    // line 8
    public function block_cuerpo1($context, array $blocks = array())
    {
        // line 9
        echo "
<article class=\"module width_3_quarter\">
\t\t<header><h3 class=\"tabs_involved\">Lista Categoria</h3>
\t\t<ul class=\"tabs\">
   \t\t\t<li><a href=\"#tab1\">Pagina 1</a></li>    \t\t
\t\t</ul>
\t\t</header>

\t\t<div class=\"tab_container\">
\t\t\t<div id=\"tab1\" class=\"tab_content\">
\t\t\t<table class=\"tablesorter\" cellspacing=\"0\"> 
\t\t\t<thead> 
                            <tr>
                                <!--<th>Id</th>-->
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 29
            echo "                            <tr>
                                ";
            // line 31
            echo "                                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Nombre"), "html", null, true);
            echo "</td>
                                <td>                                    
                                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">Detalles</a>
                                        
                                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">Editar</a>
                                        
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 40
        echo "                        </tbody>
                    </table>

                    <form action=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_new"), "html", null, true);
        echo "\">                           
                            <input type=\"image\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/images/icn_new_article.png"), "html", null, true);
        echo "\">                                   
                                                          
                    <form> 
                        
                        </div>
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
        return "AlmacenBundle:Categoria:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 44,  95 => 43,  90 => 40,  79 => 35,  74 => 33,  68 => 31,  65 => 29,  61 => 28,  40 => 9,  37 => 8,  30 => 5,  27 => 4,);
    }
}
