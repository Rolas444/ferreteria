<?php

/* AlmacenBundle:Producto:index.html.twig */
class __TwigTemplate_c91e6fd1e761c55f1e716237f4d45fd6 extends Twig_Template
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
        echo "<a href=\"#\">Producto</a> <div class=\"breadcrumb_divider\"> <!--</div><a class=\"current\">Editar</a>-->
";
    }

    // line 8
    public function block_cuerpo1($context, array $blocks = array())
    {
        // line 9
        echo "

\t\t<article class=\"module width_3_quarter\">
\t\t<header><h3 class=\"tabs_involved\">Lista de Productos</h3>
\t\t<ul class=\"tabs\">
   \t\t\t<li><a href=\"#tab1\">pagina 1</a></li>
    \t\t<li><a href=\"#tab2\">pagina 2</a></li>
\t\t</ul>
\t\t</header>

\t\t<div class=\"tab_container\">
\t\t\t<div id=\"tab1\" class=\"tab_content\">
\t\t\t<table class=\"tablesorter\" cellspacing=\"0\"> 
\t\t\t<thead> 
\t\t\t\t<tr> 
   \t\t\t\t\t<th></th> 
    \t\t\t\t<!--<th>Id</th> -->
                                <!--<th>Codigo</th>-->
                                <th>Nombre</th>
                                <!--<th>Descripcion</th>-->
                                <th>Marca</th>
                                <th>Categoria</th>
                                <th>Cantidad</th>
                                <th>Unidad</th>
                                <th>Precio</th>
                                <th>Acciones</th> 
\t\t\t\t</tr> 
\t\t\t</thead> 
                        <tbody id=\"respuesta\"> 
                            
                            ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 40
            echo "        
    
\t\t\t\t
                            
                                <tr> 
   \t\t\t\t<td><input type=\"checkbox\"></td> 
                                    
                                ";
            // line 48
            echo "                                ";
            // line 49
            echo "                                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Nombre"), "html", null, true);
            echo "</td>
                                ";
            // line 51
            echo "                                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Marca"), "html", null, true);
            echo "</td>
                                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Categoria"), "html", null, true);
            echo "</td>
                                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Stock"), "html", null, true);
            echo "</td>
                                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "UnidadMedida"), "html", null, true);
            echo "</td>
                                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Precio"), "html", null, true);
            echo "</td>
                                <td>
                                        <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">Detalles</a>
                                                                             
                                        <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">Editar</a>
                                                                  
                                </td>
                                
    \t\t\t\t<!--<td><input type=\"image\" src=\"images/icn_edit.png\" title=\"Edit\"><input type=\"image\" src=\"images/icn_trash.png\" title=\"Trash\"></td> 
\t\t\t\t--></tr> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 65
        echo "        
\t\t\t</tbody> 
\t\t\t</table>
\t\t\t</div><!-- end of #tab1 -->
\t\t\t
\t\t\t<!--<div id=\"tab2\" class=\"tab_content\">
\t\t\t<table class=\"tablesorter\" cellspacing=\"0\"> 
\t\t\t<thead> 
\t\t\t\t<tr> 
   \t\t\t\t\t<th></th> 
    \t\t\t\t<th>Comment</th> 
    \t\t\t\t<th>Posted by</th> 
    \t\t\t\t<th>Posted On</th> 
    \t\t\t\t<th>Actions</th> 
\t\t\t\t</tr> 
\t\t\t</thead> 
\t\t\t<tbody> 
\t\t\t\t<tr> 
   \t\t\t\t\t<td><input type=\"checkbox\"></td> 
    \t\t\t\t<td>Lorem Ipsum Dolor Sit Amet</td> 
    \t\t\t\t<td>Mark Corrigan</td> 
    \t\t\t\t<td>5th April 2011</td> 
    \t\t\t\t<td><input type=\"image\" src=\"images/icn_edit.png\" title=\"Edit\"><input type=\"image\" src=\"images/icn_trash.png\" title=\"Trash\"></td> 
\t\t\t\t</tr> 
\t\t\t\t<tr> 
   \t\t\t\t\t<td><input type=\"checkbox\"></td> 
    \t\t\t\t<td>Ipsum Lorem Dolor Sit Amet</td> 
    \t\t\t\t<td>Jeremy Usbourne</td> 
    \t\t\t\t<td>6th April 2011</td> 
   \t\t\t\t \t<td><input type=\"image\" src=\"images/icn_edit.png\" title=\"Edit\"><input type=\"image\" src=\"images/icn_trash.png\" title=\"Trash\"></td> 
\t\t\t\t</tr>
\t\t\t\t<tr> 
   \t\t\t\t\t<td><input type=\"checkbox\"></td> 
    \t\t\t\t<td>Sit Amet Dolor Ipsum</td> 
    \t\t\t\t<td>Super Hans</td> 
    \t\t\t\t<td>10th April 2011</td> 
    \t\t\t\t<td><input type=\"image\" src=\"images/icn_edit.png\" title=\"Edit\"><input type=\"image\" src=\"images/icn_trash.png\" title=\"Trash\"></td> 
\t\t\t\t</tr> 
\t\t\t\t<tr> 
   \t\t\t\t\t<td><input type=\"checkbox\"></td> 
    \t\t\t\t<td>Dolor Lorem Amet</td> 
    \t\t\t\t<td>Alan Johnson</td> 
    \t\t\t\t<td>16th April 2011</td> 
   \t\t\t\t \t<td><input type=\"image\" src=\"images/icn_edit.png\" title=\"Edit\"><input type=\"image\" src=\"images/icn_trash.png\" title=\"Trash\"></td> 
\t\t\t\t</tr> 
\t\t\t\t<tr> 
   \t\t\t\t\t<td><input type=\"checkbox\"></td> 
    \t\t\t\t<td>Dolor Lorem Amet</td> 
    \t\t\t\t<td>Dobby</td> 
    \t\t\t\t<td>16th April 2011</td> 
   \t\t\t\t \t<td><input type=\"image\" src=\"images/icn_edit.png\" title=\"Edit\"><input type=\"image\" src=\"images/icn_trash.png\" title=\"Trash\"></td> 
\t\t\t\t</tr> 
\t\t\t</tbody> 
\t\t\t</table>

\t\t\t</div><!-- end of #tab2 -->
\t\t\t
\t\t</div><!-- end of .tab_container -->
\t\t
                <footer>
                    <div class=\"submit_link\">

                    </div>
                </footer>
                
</article><!-- end of content manager article -->
                
               
";
    }

    public function getTemplateName()
    {
        return "AlmacenBundle:Producto:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 65,  117 => 59,  112 => 57,  107 => 55,  103 => 54,  99 => 53,  95 => 52,  90 => 51,  85 => 49,  83 => 48,  74 => 40,  70 => 39,  38 => 9,  35 => 8,  30 => 5,  27 => 4,);
    }
}
