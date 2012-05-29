<?php

/* ProveedorBundle:Representante:index.html.twig */
class __TwigTemplate_780bd592c8c72460209988730b22647e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("representante"), "html", null, true);
        echo "\">Representante</a> <div class=\"breadcrumb_divider\"> <!--</div><a class=\"current\">Editar</a>-->
";
    }

    // line 7
    public function block_cuerpo1($context, array $blocks = array())
    {
        // line 8
        echo "

\t\t<article class=\"module width_3_quarter\">
\t\t<header><h3 class=\"tabs_involved\">Lista de Representantes</h3>
\t\t<ul class=\"tabs\">
   \t\t\t<li><a href=\"#tab1\">pagina 1</a></li>    \t\t
\t\t</ul>
\t\t</header>

\t\t<div class=\"tab_container\">
\t\t\t<div id=\"tab1\" class=\"tab_content\">
\t\t\t<table class=\"tablesorter\" cellspacing=\"0\"> 
\t\t\t<thead> 
\t\t\t\t<tr> 
   \t\t\t\t\t<th></th> 
    \t\t\t\t<!--<th>Id</th> -->
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Documento</th>
                                <th>Telefono1</th>
                                <th>Email</th>
                                <th>Actions</th> 
\t\t\t\t</tr> 
\t\t\t</thead> 
\t\t\t<tbody> 
                            
                            ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 35
            echo "                            
                                <tr> 
   \t\t\t\t<td><input type=\"checkbox\"></td> 
                                    
                                <!--<td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("representante_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>-->
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Nombre"), "html", null, true);
            echo "</td>
                                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Apellido"), "html", null, true);
            echo "</td>
                                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Documento"), "html", null, true);
            echo "</td>
                                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Telefono1"), "html", null, true);
            echo "</td>
                                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Email"), "html", null, true);
            echo "</td>
                                <td>
                                        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("representante_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">Detalles</a>
                                                                             
                                        <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("representante_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">Editar</a>
                                                                  
                                </td>
                                
    \t\t\t\t<!--<td><input type=\"image\" src=\"images/icn_edit.png\" title=\"Edit\"><input type=\"image\" src=\"images/icn_trash.png\" title=\"Trash\"></td> 
\t\t\t\t--></tr> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 54
        echo "        
\t\t\t</tbody> 
\t\t\t</table>
\t\t\t</div><!-- end of #tab1 -->
\t\t\t
                <form action=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("representante_new"), "html", null, true);
        echo "\">                           
                    <input type=\"image\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/images/icn_new_article.png"), "html", null, true);
        echo "\">                                                                                             
                <form>
                    
\t\t</div><!-- end of .tab_container -->
                
                <footer>
                    <div class=\"submit_link\">

                    </div>
                </footer>
\t\t
</article><!-- end of content manager article -->
                    
";
    }

    public function getTemplateName()
    {
        return "ProveedorBundle:Representante:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 60,  130 => 59,  123 => 54,  110 => 48,  105 => 46,  100 => 44,  96 => 43,  92 => 42,  88 => 41,  84 => 40,  78 => 39,  72 => 35,  68 => 34,  40 => 8,  37 => 7,  30 => 4,  27 => 3,);
    }
}
