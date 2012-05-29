<?php

/* FrontBundle:Default:busca.html.twig */
class __TwigTemplate_6a78c692985467b8de90e146fd8b20ed extends Twig_Template
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
        echo "     
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 3
            echo "        
            <tr id=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "\"> 
            <!--<form action=\"#\">  -->
            ";
            // line 6
            echo " 

            <td style=\"display: none;\" id=\"valor_ide\"><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
            ";
            // line 10
            echo "            <td id=\"valor_uno\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Nombre"), "html", null, true);
            echo "</td>
            ";
            // line 12
            echo "            <td id=\"valor_dos\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Marca"), "html", null, true);
            echo "</td>
            <td id=\"valor_tres\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Categoria"), "html", null, true);
            echo "</td>
            <td id=\"valor_cuatro\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Stock"), "html", null, true);
            echo "</td>
            <td id=\"valor_cinco\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "UnidadMedida"), "html", null, true);
            echo "</td>
            <td id=\"valor_seis\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Precio"), "html", null, true);
            echo "</td>
            <td><input id=\"valor_siete\" type=\"text\" style=\"width: 22px;\" value=\"1\"/><a href=\"javascript: fn_agregar(";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo ");\">agregar</a><!--<input type=\"submit\" id=\"\" value=\"+\"/>--></td>
              <!-- </form>  -->
            <!--<td><input type=\"image\" src=\"images/icn_edit.png\" title=\"Edit\"><input type=\"image\" src=\"images/icn_trash.png\" title=\"Trash\"></td> 
            --></tr> 
         ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "            <p> no se encontraron coincidencias</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "       
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:busca.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 24,  79 => 22,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  48 => 12,  43 => 10,  37 => 8,  33 => 6,  28 => 4,  25 => 3,  20 => 2,  17 => 1,);
    }
}
