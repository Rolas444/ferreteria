<?php

/* CompraBundle:Default:findshop.html.twig */
class __TwigTemplate_6bdb8d5e5deb6a147d7f045e6dd63266 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'busqueda' => array($this, 'block_busqueda'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('busqueda', $context, $blocks);
    }

    public function block_busqueda($context, array $blocks = array())
    {
        // line 2
        echo "
<header><h3 class=\"tabs_involved\">Productos en existencia</h3>
\t\t<ul class=\"tabs\">
   \t\t\t<li><a href=\"#tab1\">pagina 1</a></li>
    \t\t<li><a href=\"#tab2\">pagina 2</a></li>
\t\t</ul>
</header>
<header>
    <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compra_find"), "html", null, true);
        echo "\" id=\"buscar\" class=\"post_message\" method=\"POST\">
        <input type=\"text\" name=\"busca\" value=\"Buscar :\" onfocus=\"if(!this._haschanged){this.value=''};this._haschanged=true;\">
                    <input type=\"submit\"  class=\"btn_post_message\" value=\"\"/>
            </form>
    </header>
\t\t<div class=\"message_list\">
\t\t\t<div id=\"tab1\" class=\"tab_content\">
\t\t\t<table class=\"tablesorter\" cellspacing=\"0\"> 
\t\t\t<thead> 
\t\t\t\t<tr> 
   \t\t\t\t";
        // line 20
        echo " 
    \t\t\t\t<!--<th>Id</th> -->
                                <!--<th>Codigo</th>-->
                                <th>Nombre</th>
                                <!--<th>Descripcion</th>-->
                                <th>Marca</th>
                                <th>Categoria</th>
                                <th>Stock</th>
                                <th>Unidad</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
\t\t\t\t</tr> 
\t\t\t</thead> 
\t\t\t<tbody id=\"espacio\"> 
                            
                        </tbody>
                        </table>
                </div>
                        
        </div>
        <footer></footer>
";
    }

    public function getTemplateName()
    {
        return "CompraBundle:Default:findshop.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 20,  34 => 10,  24 => 2,  18 => 1,);
    }
}
