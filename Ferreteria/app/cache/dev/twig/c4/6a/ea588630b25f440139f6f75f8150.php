<?php

/* UsuarioBundle:Default:registro.html.twig */
class __TwigTemplate_c46aea588630b25f440139f6f75f8150 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontBundle:Default:index.html.twig");

        $this->blocks = array(
            'ubicacion' => array($this, 'block_ubicacion'),
            'id' => array($this, 'block_id'),
            'titulo' => array($this, 'block_titulo'),
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

    // line 2
    public function block_ubicacion($context, array $blocks = array())
    {
        // line 3
        echo "<a href=\"#\">Usuarios</a> <div class=\"breadcrumb_divider\"> </div><a class=\"current\">Registro</a>
";
    }

    // line 5
    public function block_id($context, array $blocks = array())
    {
        echo "usuario";
    }

    // line 6
    public function block_titulo($context, array $blocks = array())
    {
        echo "usuario | Registro";
    }

    // line 7
    public function block_cuerpo1($context, array $blocks = array())
    {
        // line 8
        echo "
<article class=\"module width_full\">
    ";
        // line 10
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "info"), "method")) {
            // line 11
            echo "    <p class=\"info\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "getFlash", array(0 => "info"), "method"), "html", null, true);
            echo "</p>
    ";
        }
        // line 13
        echo "\t\t\t<header><h3>Registrar Usuario</h3></header>
\t\t\t\t<div class=\"module_content\">
                                    
                                    <form action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_create"), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "formulario"));
        echo ">
                                                ";
        // line 17
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "formulario"));
        echo "
                                        <fieldset style=\"width:50%; padding: 1%;\">
                                        ";
        // line 19
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formulario"), "Nombre"), "Nombre :");
        echo "
                                        ";
        // line 20
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formulario"), "Nombre"));
        echo "</fieldset>
                                        <fieldset style=\"width:50%; padding: 1%;\">
                                        ";
        // line 22
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formulario"), "Apellido"), "Apellidos :");
        echo "
                                        ";
        // line 23
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formulario"), "Apellido"));
        echo "</fieldset>
                                        <fieldset style=\"width:50%; padding: 1%;\">
                                        ";
        // line 25
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formulario"), "Rol"), "Rol :");
        echo "
                                        ";
        // line 26
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formulario"), "Rol"));
        echo "</fieldset>
                                        <fieldset style=\"width:50%; padding: 1%;\">
                                        ";
        // line 28
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "formulario"), "Password"), "first"), "Contraseña :");
        echo "
                                        ";
        // line 29
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "formulario"), "Password"), "first"));
        echo "</fieldset>
                                        <fieldset style=\"width:50%; padding: 1%;\">
                                        ";
        // line 31
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "formulario"), "Password"), "second"), "Comfirmación :");
        echo "
                                        ";
        // line 32
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "formulario"), "Password"), "second"));
        echo "</fieldset>
                                       <div class=\"clear\"></div>\t
\t\t\t\t</div>
\t\t\t<footer>
\t\t\t\t<div class=\"submit_link\">
                                    <button type=\"submit\">Guardar</button>    
\t\t\t\t</div>
\t\t\t</footer>
                        
                      </form>
\t\t</article>
";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 32,  116 => 31,  111 => 29,  107 => 28,  102 => 26,  98 => 25,  93 => 23,  89 => 22,  84 => 20,  80 => 19,  75 => 17,  69 => 16,  64 => 13,  58 => 11,  56 => 10,  52 => 8,  49 => 7,  43 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
