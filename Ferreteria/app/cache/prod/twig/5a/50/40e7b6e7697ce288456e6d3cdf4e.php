<?php

/* ProveedorBundle:Proveedor:edit.html.twig */
class __TwigTemplate_5a5040e7b6e7697ce288456e6d3cdf4e extends Twig_Template
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
        echo "\">Proveedor</a> <div class=\"breadcrumb_divider\"></div><a class=\"current\">Editar</a>
";
    }

    // line 8
    public function block_cuerpo1($context, array $blocks = array())
    {
        // line 9
        echo "
<article class=\"module width_half\">
\t\t\t<header><h3>Editar Proveedor</h3></header>
\t\t\t\t<div class=\"module_content\">
                                    
                                    <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedor_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "edit_form"));
        echo ">
                                          
                                        <fieldset style=\"width:70%; padding: 1%;\">
                                        ";
        // line 17
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "Nombre"), "Nombre :");
        echo "
                                        ";
        // line 18
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "Nombre"));
        echo "</fieldset>
                                        <H4>";
        // line 19
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "TipoDocumento"), "DOCUMENTO :");
        echo "</h4>
                                        ";
        // line 20
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "TipoDocumento"));
        echo "
                                        ";
        // line 21
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "NumeroDocumento"));
        echo "
                                        <fieldset style=\"width:70%; padding: 1%;\">
                                        ";
        // line 23
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "Email"), "Email :");
        echo "
                                        ";
        // line 24
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "Email"));
        echo "
                                        ";
        // line 25
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "Direccion"), "Direcion :");
        echo "
                                        ";
        // line 26
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "Direccion"));
        echo "
                                        ";
        // line 27
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "Fax"), "Fax :");
        echo "
                                        ";
        // line 28
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "Fax"));
        echo "
                                        ";
        // line 29
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "Web"), "Web :");
        echo "
                                        ";
        // line 30
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "Web"));
        echo "
                                        ";
        // line 31
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "Telefono"), "Telefono:");
        echo "
                                        ";
        // line 32
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "Telefono"));
        echo "
                                        ";
        // line 33
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "Observacion"), "Observacion :");
        echo "
                                        ";
        // line 34
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "Observacion"));
        echo "</fieldset>
                                        ";
        // line 35
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "Ubigeo"), "Ubigeo :");
        echo "
                                        ";
        // line 36
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "Ubigeo"));
        echo "
                                        ";
        // line 37
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "edit_form"));
        echo "
                                        
                                        <input type=\"submit\" value=\"Guardar\"/>
                                    </form>                        
\t\t\t\t\t<div class=\"clear\"></div>\t
\t\t\t\t</div>
\t\t\t<footer>

\t\t\t</footer>
</ul>
                        
                                            </form>
\t\t</article><!-- end of post new article -->

";
    }

    public function getTemplateName()
    {
        return "ProveedorBundle:Proveedor:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 37,  128 => 36,  124 => 35,  120 => 34,  116 => 33,  112 => 32,  108 => 31,  104 => 30,  100 => 29,  96 => 28,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  55 => 17,  47 => 14,  40 => 9,  37 => 8,  30 => 5,  27 => 4,);
    }
}
