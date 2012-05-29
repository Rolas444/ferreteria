<?php

/* PedidoBundle:Pedido:new.html.twig */
class __TwigTemplate_254c946f395fd1d8d61a3f91bb0e2ddc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontBundle:Default:index.html.twig");

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
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
\t\t\t\t\t\t
\t\t\t\t\t\t\$(\"#print2\").printArea();
\t\t\t\t\t\treturn false;
\t\t\t\t\t});
\t\t\t\t});
</script>
";
    }

    // line 36
    public function block_ubicacion($context, array $blocks = array())
    {
        // line 37
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido"), "html", null, true);
        echo "\">Pedido</a> <div class=\"breadcrumb_divider\"></div><a class=\"current\">Creación</a><div class=\"breadcrumb_divider\"></div><a id=\"imprimir\" href=\"#\">imprimir</a>
";
    }

    // line 40
    public function block_cuerpo1($context, array $blocks = array())
    {
        // line 41
        echo "<div id=\"print2\" >
    <article class=\"module width_quarter\">
\t
    <header class=\"oculto\"><h3>Nuevo Pedido</h3></header>
\t\t
        <form action=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
\t\t\t
            <h3 class=\"oculto\">";
        // line 48
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Fecha"), "Fecha :");
        echo "
            ";
        // line 49
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Fecha"));
        echo "</h3>
            
            <fieldset style=\"widht:45%;\">
            ";
        // line 53
        echo "            ";
        echo " 
            ";
        // line 55
        echo "            ";
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "NombreCliente"), "Cliente :");
        echo "<br/>
            ";
        // line 56
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "NombreCliente"));
        echo "<br/>
            
            <div class=\"oculto\">
            ";
        // line 59
        echo "<br/>
            ";
        // line 60
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Descripcion"), "Descripcion :");
        echo "<br/>
            ";
        // line 61
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Descripcion"));
        echo "<br/>
            ";
        // line 63
        echo "            ";
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Igv"), "Igv :");
        echo "<br/>
            ";
        // line 64
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Igv"));
        echo "<br/>
            ";
        // line 65
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Monto"), "Monto Total :");
        echo "<br/>
            ";
        // line 66
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Monto"));
        echo "<br/>
                </div>
           ";
        // line 69
        echo "                </fieldset>                     
            ";
        // line 73
        echo "            
            <p>
                <input class=\"oculto\" type=\"submit\" value=\"Guardar\"/> 
            </p>
        </form>
        
        

        ";
        // line 88
        echo "</article>
<!-- <div style=”page-break-after:always> -->
<article class=\"module width_3_quarter_d oculto\" >
<!-- </div>  -->
";
        // line 92
        $this->displayBlock('busqueda', $context, $blocks);
        // line 95
        echo "
</article>

<article class=\"module width_3_quarter_d\">

    <header class=\"oculto\"><h3 class=\"tabs_involved\">Lista de Pedidos</h3>
\t\t
</header>

\t<div class=\"message_list\">
\t\t\t
                            <table id=\"grilla\" class=\"tablesorter\" cellspacing=\"0\"> 
                            
\t\t\t<thead> 
\t\t\t
\t\t\t\t<tr> 
   \t\t\t\t";
        // line 111
        echo " 
    \t\t\t\t<!--<th>Id</th> -->
                                <!--<th>Codigo</th>-->
                                <th>Cant.</th>
                                <th class=\"oculto\">Unid.</th>
                                <th>Nombre</th>
                                <!--<th>Descripcion</th>-->
                                <th>Marca</th>
                                <th class=\"oculto\">Categoria</th>
                                                                
                                <th>Precio</th>
                                <th class=\"oculto\">Quitar</th>
\t\t\t\t</tr> 
\t\t\t</thead> 
                        <tbody> 
                   
                        </tbody>
                        </table>
                       
                
        </div>
    <footer >
                    
        <p class=\"pie\"><strong class=\"oculto\">Ariculos :</strong> <span id=\"span_cantidad\" class=\"oculto\">0</span><strong> </strong><strong>Monto Total : S/. <span id=\"span_monto\" class=\"monto\">0.0</span></strong></p>
        
                             
                    
                </footer>
                
</article>
</div>

";
    }

    // line 92
    public function block_busqueda($context, array $blocks = array())
    {
        echo "                                
";
        // line 93
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
        return array (  225 => 93,  220 => 92,  184 => 111,  166 => 95,  164 => 92,  158 => 88,  148 => 73,  145 => 69,  140 => 66,  136 => 65,  132 => 64,  127 => 63,  123 => 61,  119 => 60,  116 => 59,  110 => 56,  105 => 55,  101 => 53,  95 => 49,  91 => 48,  84 => 46,  77 => 41,  74 => 40,  67 => 37,  64 => 36,  32 => 5,  29 => 4,);
    }
}
