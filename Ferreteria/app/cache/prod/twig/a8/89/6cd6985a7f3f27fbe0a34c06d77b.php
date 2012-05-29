<?php

/* FrontBundle:Default:index.html.twig */
class __TwigTemplate_a8896cd6985a7f3f27fbe0a34c06d77b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'menu' => array($this, 'block_menu'),
            'titulo1' => array($this, 'block_titulo1'),
            'ubicacion' => array($this, 'block_ubicacion'),
            'cuerpo1' => array($this, 'block_cuerpo1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_titulo($context, array $blocks = array())
    {
        echo "inicio|";
    }

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        // line 5
        echo "
\t<header id=\"header\">
\t\t<hgroup>
\t\t\t<h1 class=\"site_title\"><a href=\"index.html\">Ferretería</a></h1>
                        <h2 class=\"section_title\">";
        // line 9
        $this->displayBlock('titulo1', $context, $blocks);
        echo "</h2><div class=\"btn_view_site\"><a class=\"current\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo "</a></div>
\t\t</hgroup>
\t</header> <!-- end of header bar -->
\t
\t<section id=\"secondary_bar\">
\t\t<div class=\"user\">
                    ";
        // line 15
        if ($this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            // line 16
            echo "\t\t\t<p>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "nombre"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "Apellido"), "html", null, true);
            echo " (Usuario)</p>
                    ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 18
            echo "                        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "nombre"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "Apellido"), "html", null, true);
            echo " (Administrador)</p>
                    ";
        }
        // line 20
        echo "\t\t\t <!--<a class=\"logout_user\" href=\"#\" title=\"Logout\">Logout</a> --> 
\t\t</div>
\t\t<div class=\"breadcrumbs_container\">
\t\t\t<article class=\"breadcrumbs\">";
        // line 23
        $this->displayBlock('ubicacion', $context, $blocks);
        echo "<!--<a href=\"#\">Home</a> <div class=\"breadcrumb_divider\"></div> <a class=\"current\"></a>--></article>
\t\t</div>
\t</section><!-- end of secondary bar -->
\t
\t<aside id=\"sidebar\" class=\"column\"><!--
\t\t<form class=\"quick_search\">
\t\t\t<input type=\"text\" value=\"Quick Search\" onfocus=\"if(!this._haschanged){this.value=''};this._haschanged=true;\">
\t\t</form>-->
\t\t<hr/>
\t\t<h3>Pedidos</h3>
\t\t<ul class=\"toggle\">
\t\t\t<li class=\"icn_new_article\"><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido_new"), "html", null, true);
        echo "\">Nuevo Pedido</a></li>
\t\t\t<li class=\"icn_categories\"><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido"), "html", null, true);
        echo "\">Lista de Pedidos</a></li>                        
\t\t\t
\t\t</ul>
                <h3>Compras</h3>
\t\t<ul class=\"toggle\">
\t\t\t<li class=\"icn_new_article\"><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compra_new"), "html", null, true);
        echo "\">Nueva Compra</a></li>
\t\t\t<li class=\"icn_edit_article\"><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedor"), "html", null, true);
        echo "\">Proveedores</a></li>
                        <li class=\"icn_edit_article\"><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("representante"), "html", null, true);
        echo "\">Representantes</a></li>
\t\t</ul>
                <h3>Almacen</h3>
\t\t<ul class=\"toggle\">
\t\t\t
\t\t\t<li class=\"icn_edit_article\"><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto"), "html", null, true);
        echo "\">Productos</a></li>
                        <li class=\"icn_edit_article\"><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unidadmedida"), "html", null, true);
        echo "\">Unidades</a></li>
                        <li class=\"icn_edit_article\"><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria"), "html", null, true);
        echo "\">Categorias</a></li>
\t\t\t
\t\t</ul>
\t\t<h3>Usuarios</h3>
\t\t<ul class=\"toggle\">
\t\t\t<li class=\"icn_add_user\"><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_registro"), "html", null, true);
        echo "\">Nuevo Usuario</a></li>
\t\t\t<li class=\"icn_view_users\"><a href=\"#\">Ver Usuarios</a></li>
\t\t\t<li class=\"icn_profile\"><a href=\"#\">Editar</a></li>
\t\t</ul>
\t\t
                <!--<h3>Media</h3>
\t\t<ul class=\"toggle\">
\t\t\t<li class=\"icn_folder\"><a href=\"#\">File Manager</a></li>
\t\t\t<li class=\"icn_photo\"><a href=\"#\">Gallery</a></li>
\t\t\t<li class=\"icn_audio\"><a href=\"#\">Audio</a></li>
\t\t\t<li class=\"icn_video\"><a href=\"#\">Video</a></li>
\t\t</ul> -->
\t\t<h3>Admin</h3>
\t\t<ul class=\"toggle\">
\t\t\t<li class=\"icn_settings\"><a href=\"#\">Opciones</a></li>
\t\t\t<li class=\"icn_security\"><a href=\"#\">Seguridad</a></li>
\t\t\t<li class=\"icn_jump_back\"><a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_logout"), "html", null, true);
        echo "\">Salir</a></li>
\t\t</ul>
\t\t
\t\t<footer>
\t\t\t<hr />
                        <p><strong><a href=\"http://www.globitecs.com\" target=_blank >Globitecs</a></strong></p>
\t\t\t<!--<p><strong>Copyright &copy; 2011 Website Admin</strong></p>
\t\t\t<p>Theme by <a href=\"http://www.medialoot.com\">MediaLoot</a></p>-->
\t\t</footer>
\t</aside><!-- end of sidebar --> 
        <section id=\"main\" class=\"column\">
\t\t
            
         ";
        // line 83
        $this->displayBlock('cuerpo1', $context, $blocks);
        // line 84
        echo "        </section>

";
    }

    // line 9
    public function block_titulo1($context, array $blocks = array())
    {
    }

    // line 23
    public function block_ubicacion($context, array $blocks = array())
    {
        echo " ";
    }

    // line 83
    public function block_cuerpo1($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 83,  185 => 23,  180 => 9,  137 => 54,  129 => 49,  121 => 47,  113 => 42,  109 => 41,  97 => 35,  93 => 34,  79 => 23,  66 => 18,  58 => 16,  56 => 15,  45 => 9,  39 => 5,  36 => 4,  230 => 94,  225 => 93,  192 => 112,  174 => 84,  172 => 83,  166 => 89,  156 => 70,  153 => 70,  149 => 68,  145 => 67,  141 => 66,  136 => 65,  132 => 63,  128 => 62,  125 => 48,  119 => 58,  114 => 57,  110 => 55,  105 => 40,  101 => 51,  94 => 49,  87 => 44,  84 => 43,  77 => 40,  74 => 20,  68 => 35,  65 => 34,  33 => 5,  30 => 2,);
    }
}
