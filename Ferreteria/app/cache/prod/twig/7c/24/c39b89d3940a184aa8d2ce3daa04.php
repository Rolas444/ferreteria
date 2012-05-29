<?php

/* FrontBundle:Default:buscaCompra.html.twig */
class __TwigTemplate_7c24c39b89d3940a184aa8d2ce3daa04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 2
            echo "        
            <tr id=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "\"> 
            <!--<form action=\"#\">  -->
            ";
            // line 5
            echo " 

            <td style=\"display: none;\" id=\"valor_ide\"><a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
            ";
            // line 9
            echo "            <td id=\"valor_uno\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Nombre"), "html", null, true);
            echo "</td>
            ";
            // line 11
            echo "            <td id=\"valor_dos\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Marca"), "html", null, true);
            echo "</td>
            <td id=\"valor_tres\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Categoria"), "html", null, true);
            echo "</td>
            <td id=\"valor_cuatro\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Stock"), "html", null, true);
            echo "</td>
            <td id=\"valor_cinco\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "UnidadMedida"), "html", null, true);
            echo "</td>
            <td id=\"valor_seis\"><input type=\"text\" style=\"width: 45px;\" placeholder=\"0.00\"/></td>
            <td><input id=\"valor_siete\" type=\"text\" style=\"width: 22px;\" value=\"1\"/><a href=\"javascript: fn_agregarC(";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo ");\">agregar</a><!--<input type=\"submit\" id=\"\" value=\"+\"/>--></td>
              <!-- </form>  -->
            <!--<td><input type=\"image\" src=\"images/icn_edit.png\" title=\"Edit\"><input type=\"image\" src=\"images/icn_trash.png\" title=\"Trash\"></td> 
            --></tr> 
         ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "            <p> no hay datos que coincidan</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:buscaCompra.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  63 => 16,  58 => 14,  54 => 13,  50 => 12,  45 => 11,  40 => 9,  34 => 7,  30 => 5,  25 => 3,  22 => 2,  17 => 1,);
    }
}
