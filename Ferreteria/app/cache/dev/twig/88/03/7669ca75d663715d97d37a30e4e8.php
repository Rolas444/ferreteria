<?php

/* AlmacenBundle:Categoria:edit.html.twig */
class __TwigTemplate_88037669ca75d663715d97d37a30e4e8 extends Twig_Template
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
        echo "\">Categoria</a> <div class=\"breadcrumb_divider\"></div><a class=\"current\">Editar</a>
";
    }

    // line 8
    public function block_cuerpo1($context, array $blocks = array())
    {
        // line 9
        echo "
<article class=\"module width_full\">
\t\t\t<header><h3>Editar Categoria</header>
\t\t\t\t<div class=\"module_content\">

                                <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "edit_form"));
        echo ">
                                                
                                        <fieldset style=\"width:50%; padding: 1%;\">
                                        ";
        // line 17
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "Nombre"), "Nombre :");
        echo "
                                        ";
        // line 18
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "Nombre"));
        echo "</fieldset>        
\t\t\t\t\t<div class=\"clear\"></div>\t
\t\t\t\t</div>
    <footer>
        <div class=\"submit_link\">
            <form action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 24
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "                   
                    <button type=\"submit\">Eliminar</button>
             </form>
            <button type=\"submit\">Guardar</button>
                </form>
        </div>
    </footer>
                        
                                           
\t\t</article><!-- end of post new article -->


";
    }

    public function getTemplateName()
    {
        return "AlmacenBundle:Categoria:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 24,  67 => 23,  59 => 18,  55 => 17,  47 => 14,  40 => 9,  37 => 8,  30 => 5,  27 => 4,);
    }
}
