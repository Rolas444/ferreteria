<?php

/* CompraBundle:Compra:new.html.twig */
class __TwigTemplate_53e327734d435082da276f43f45b5378 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontBundle:Default:index.html.twig");

        $this->blocks = array(
            'ubicacion' => array($this, 'block_ubicacion'),
            'cuerpo1' => array($this, 'block_cuerpo1'),
            'busqueda' => array($this, 'block_busqueda'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compra"), "html", null, true);
        echo "\">Compra</a> <div class=\"breadcrumb_divider\"></div><a class=\"current\">Creación</a>
";
    }

    // line 8
    public function block_cuerpo1($context, array $blocks = array())
    {
        // line 9
        echo "
<article class=\"module width_quarter\">
    <header><h3>Crear Compra</h3></header>

        <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compra_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
            ";
        // line 14
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
            
                <h3> ";
        // line 16
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Fecha"), "Fecha edido:");
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Fecha"));
        echo "</h3>

           <h3> ";
        // line 19
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "FechaEnvio"), "Fecha Envío:");
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "FechaEnvio"));
        echo "</h3>
            
             <fieldset style=\"widht:45%; padding: 8%\">
            ";
        // line 23
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "TipoDocumento"), "Documento :");
        echo "
            ";
        // line 24
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "TipoDocumento"));
        echo "<br/> 
            
            ";
        // line 26
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "NumeroDocumento"), "Numero :");
        echo "
            ";
        // line 27
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "NumeroDocumento"));
        echo "<br/>
            
            
            
            
            ";
        // line 32
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "TipoPago"), "Credito? :");
        echo "<br/>
            ";
        // line 33
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "TipoPago"));
        echo "<br/>
            
            <br/>
            
            ";
        // line 37
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Proveedor"), "Proveedor :");
        echo "
            ";
        // line 38
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Proveedor"));
        echo "<br/>
            
            ";
        // line 40
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "MontoTotal"), "Monto Total :");
        echo "
            ";
        // line 41
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "MontoTotal"));
        echo "<br/>
            ";
        // line 42
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "</fieldset>
            ";
        // line 45
        echo "            <p>
                <button type=\"submit\">Create</button>
            </p>
        </form>
</article>

<article class=\"module width_3_quarter\">
\t\t\t
\t\t\t";
        // line 53
        $this->displayBlock('busqueda', $context, $blocks);
        // line 60
        echo "\t\t\t
\t\t</article>
";
    }

    // line 53
    public function block_busqueda($context, array $blocks = array())
    {
        // line 54
        echo "                        
                                
                         ";
        // line 56
        echo $this->env->getExtension('actions')->renderAction("CompraBundle:Compra:Busca", array(), array());
        // line 57
        echo "            \t\t\t
\t\t\t
                         ";
    }

    public function getTemplateName()
    {
        return "CompraBundle:Compra:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 57,  155 => 56,  151 => 54,  148 => 53,  142 => 60,  140 => 53,  130 => 45,  126 => 42,  122 => 41,  118 => 40,  113 => 38,  109 => 37,  102 => 33,  98 => 32,  90 => 27,  86 => 26,  81 => 24,  77 => 23,  71 => 20,  67 => 19,  62 => 17,  58 => 16,  53 => 14,  47 => 13,  41 => 9,  38 => 8,  31 => 5,  28 => 4,);
    }
}
