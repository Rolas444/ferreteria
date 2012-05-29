<?php

/* PedidoBundle:Pedido:new.html.twig */
class __TwigTemplate_af577f19c9a0ba18bb6655b547f14211 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontBundle:Default:index.html.twig");

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'javascript2' => array($this, 'block_javascript2'),
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
    public function block_javascript($context, array $blocks = array())
    {
        // line 5
        echo "<script>
    jQuery('document').ready(function(){
 //   intente ejecutar el submit del form
        jQuery('#buscar').submit(function(){
            
            jQuery.post(jQuery('#buscar').attr('action'), jQuery('#buscar').serialize(), function(datos_devueltos){
                        if(datos_devueltos){
                             jQuery('#espacio').html(datos_devueltos);
                            //alert (datos_devueltos);
                             }

                        else
                            alert('Ha ocurrido un error');
                    });
            return false;
        })
 
     });
</script>
<script type=\"text/javascript\">
\t\t\t\tjQuery('document').ready(function(){
\t\t\t\t\tjQuery('#imprimir').click(function(){
\t\t\t\t\t\t\$(\"#areaprint\").printArea();
\t\t\t\t\t\t\$(\"#print2\").printArea();
\t\t\t\t\t\treturn false;
\t\t\t\t\t});
\t\t\t\t});
            </script>
";
    }

    // line 34
    public function block_javascript2($context, array $blocks = array())
    {
        // line 35
        echo "

";
    }

    // line 39
    public function block_ubicacion($context, array $blocks = array())
    {
        // line 40
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido"), "html", null, true);
        echo "\">Pedido</a> <div class=\"breadcrumb_divider\"></div><a class=\"current\">Creación</a><div class=\"breadcrumb_divider\"></div><a id=\"imprimir\" href=\"#\">imprimir</a>
";
    }

    // line 43
    public function block_cuerpo1($context, array $blocks = array())
    {
        // line 44
        echo "
<article class=\"module width_quarter\">
\t
    <header><h3>Nuevo Pedido</h3></header>
\t\t
        <form action=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
\t\t\t<div id=\"areaprint\">
            <h3>";
        // line 51
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Fecha"), "Fecha :");
        echo "
            ";
        // line 52
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Fecha"));
        echo "</h3>
            <fieldset style=\"widht:45%; padding: 8%\">
            ";
        // line 55
        echo "            ";
        echo " 
            ";
        // line 57
        echo "            ";
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "NombreCliente"), "Nombre Cliente :");
        echo "<br/>
            ";
        // line 58
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "NombreCliente"));
        echo "<br/>
            
            
            ";
        // line 61
        echo "<br/>
            ";
        // line 62
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Descripcion"), "Descripcion :");
        echo "<br/>
            ";
        // line 63
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Descripcion"));
        echo "<br/>
            ";
        // line 65
        echo "            ";
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Igv"), "Igv :");
        echo "<br/>
            ";
        // line 66
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Igv"));
        echo "<br/>
            ";
        // line 67
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Monto"), "Monto :");
        echo "<br/>
            ";
        // line 68
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Monto"));
        echo "<br/>
           ";
        // line 70
        echo "                </fieldset>                     
            ";
        // line 74
        echo "            </div>
            <p>
                <input type=\"submit\" value=\"Guardar\"/> 
            </p>
        </form>
        
        

        ";
        // line 89
        echo "</article>
<!-- <div style=”page-break-after:always> -->
<article class=\"module width_3_quarter\">
<!-- </div>  -->
";
        // line 93
        $this->displayBlock('busqueda', $context, $blocks);
        // line 96
        echo "
</article>

<article class=\"module width_3_quarter\">

    <header><h3 class=\"tabs_involved\">Lista de Pedidos</h3>
\t\t
</header>
<div id=\"print2\">
\t<div class=\"message_list\">
\t\t\t<div >
                            <table id=\"grilla\" class=\"tablesorter\" cellspacing=\"0\"> 
                            
\t\t\t<thead> 
\t\t\t
\t\t\t\t<tr> 
   \t\t\t\t";
        // line 112
        echo " 
    \t\t\t\t<!--<th>Id</th> -->
                                <!--<th>Codigo</th>-->
                                <th>Nombre</th>
                                <!--<th>Descripcion</th>-->
                                <th>Marca</th>
                                <th>Categoria</th>
                                <th>Cantidad</th>
                                <th>Unidad</th>
                                <th>Precio</th>
                                <th>Quitar</th>
\t\t\t\t</tr> 
\t\t\t</thead> 
                        <tbody> 
                   
                        </tbody>
                        </table>
                       
                </div>
        </div>
                <footer>
                    <tr>
                    \t<td colspan=\"5\"><strong>Ariculos :</strong> <span id=\"span_cantidad\">0</span></td>
                    </tr>
                </footer>
                </div>
</article>


";
    }

    // line 93
    public function block_busqueda($context, array $blocks = array())
    {
        echo "                                
";
        // line 94
        echo $this->env->getExtension('actions')->renderAction("CompraBundle:Compra:Busca", array(), array());
    }

    public function getTemplateName()
    {
        return "PedidoBundle:Pedido:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 94,  225 => 93,  192 => 112,  174 => 96,  172 => 93,  166 => 89,  156 => 74,  153 => 70,  149 => 68,  145 => 67,  141 => 66,  136 => 65,  132 => 63,  128 => 62,  125 => 61,  119 => 58,  114 => 57,  110 => 55,  105 => 52,  101 => 51,  94 => 49,  87 => 44,  84 => 43,  77 => 40,  74 => 39,  68 => 35,  65 => 34,  33 => 5,  30 => 4,);
    }
}
