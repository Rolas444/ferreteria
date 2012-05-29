<?php

/* ProveedorBundle:Representante:show.html.twig */
class __TwigTemplate_4fc78d4cc20ebd365b69ca9f1e94d03f extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("representante"), "html", null, true);
        echo "\">Representante</a> <div class=\"breadcrumb_divider\"> </div><a class=\"current\">Detalles</a>
";
    }

    // line 8
    public function block_cuerpo1($context, array $blocks = array())
    {
        // line 9
        echo "
<article class=\"module width_full\">
\t\t\t<header><h3>Representante</h3></header>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Nombre"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Apellido</th>
            <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Apellido"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Telefono1</th>
            <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Telefono1"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Telefono2</th>
            <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Telefono2"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Telefono3</th>
            <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Telefono3"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Telefono4</th>
            <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Telefono4"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Email"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Documento</th>
            <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Documento"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

";
        // line 60
        echo "                        
    <form action=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("representante_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">                           
        <input type=\"image\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/images/icn_edit_article.png"), "html", null, true);
        echo "\">                                                                                             
    </form>  
    
    
    <form action=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("representante_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
    ";
        // line 67
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
        <input type=\"image\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/images/icn_trash.png"), "html", null, true);
        echo "\">                                                                                          

    </form>                        

";
    }

    public function getTemplateName()
    {
        return "ProveedorBundle:Representante:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 68,  132 => 67,  128 => 66,  121 => 62,  117 => 61,  114 => 60,  106 => 49,  99 => 45,  92 => 41,  85 => 37,  78 => 33,  71 => 29,  64 => 25,  57 => 21,  50 => 17,  40 => 9,  37 => 8,  30 => 5,  27 => 4,);
    }
}
