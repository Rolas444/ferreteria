<?php

/* UsuarioBundle:Default:login.html.twig */
class __TwigTemplate_b78b29cda2d9f6ec1d66d41253ce14b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontBundle:Default:index.html.twig");

        $this->blocks = array(
            'ubicacion' => array($this, 'block_ubicacion'),
            'id' => array($this, 'block_id'),
            'cuerpo1' => array($this, 'block_cuerpo1'),
            'aside' => array($this, 'block_aside'),
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedor"), "html", null, true);
        echo "\">Iniciar sesion</a> <div class=\"breadcrumb_divider\"> <!--</div><a class=\"current\">Editar</a>-->
";
    }

    // line 5
    public function block_id($context, array $blocks = array())
    {
        echo "usuario";
    }

    // line 6
    public function block_cuerpo1($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ($this->getContext($context, "error")) {
            // line 8
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 10
        echo "        <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_login_check"), "html", null, true);
        echo "\" method=\"post\">
        <label for=\"username\">Usuario:</label>
        <input type=\"text\" id=\"username\" name=\"_username\"
        value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
        <label for=\"password\">Contraseña:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <input type=\"checkbox\" id=\"no_cerrar\" name=\"_remember_me\" checked />
        <label for=\"no_cerrar\">No cerrar sesión</label>
        <input type=\"submit\" name=\"login\" value=\"Acceder\" />
        </form>
    ";
    }

    // line 21
    public function block_aside($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 21,  64 => 13,  57 => 10,  51 => 8,  48 => 7,  45 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
