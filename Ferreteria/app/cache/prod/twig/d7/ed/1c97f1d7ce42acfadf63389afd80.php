<?php

/* CompraBundle:Compra:new.html.twig */
class __TwigTemplate_d7ed1c97f1d7ce42acfadf63389afd80 extends Twig_Template
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
\t\t\t\t\t\t//\$(\"#areaprint\").printArea();
\t\t\t\t\t\t\$(\"#print2\").printArea();
\t\t\t\t\t\treturn false;
\t\t\t\t\t});
\t\t\t\t});
</script>
";
    }

    // line 35
    public function block_ubicacion($context, array $blocks = array())
    {
        // line 36
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compra"), "html", null, true);
        echo "\">Compra</a> <div class=\"breadcrumb_divider\"></div><a class=\"current\">Creación</a>
";
    }

    // line 39
    public function block_cuerpo1($context, array $blocks = array())
    {
        // line 40
        echo "
<article class=\"module width_quarter\">
    <header><h3>Crear Compra</h3></header>
\t\t
    <form id=\"compra\" action=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compra_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
            ";
        // line 45
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
            
                <p><input id=\"Compra\" type=\"submit\" value=\"Guardar\" style=\"float: right;\"/></p>
            
                <h3> ";
        // line 49
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Fecha"), "Fecha edido:");
        echo "
            ";
        // line 50
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Fecha"));
        echo "</h3>

           <h3> ";
        // line 52
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "FechaEnvio"), "Fecha Envío:");
        echo "
            ";
        // line 53
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "FechaEnvio"));
        echo "</h3>
            <fieldset style=\"widht:45%; padding: 8%\">
             ";
        // line 55
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Proveedor"), "Proveedor :");
        echo "
            ";
        // line 56
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Proveedor"));
        echo "<br/>
            ";
        // line 57
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "TipoDocumento"), "Documento :");
        echo "    
            ";
        // line 58
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "TipoDocumento"));
        echo " <br/><p></p>
            ";
        // line 59
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "NumeroDocumento"), array("attr" => array("placeholder" => "numero del documento")));
        echo "
                </fieldset><fieldset style=\"widht:45%; padding: 8%\">
            ";
        // line 61
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "TipoPago"), "Credito :");
        echo "
            ";
        // line 62
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "TipoPago"));
        echo "<br/></fieldset><fieldset style=\"widht:45%; padding: 8%\">
            ";
        // line 63
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "MontoTotal"), "Monto Total :");
        echo "
            ";
        // line 64
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "MontoTotal"), array("attr" => array("readonly" => "true")));
        echo "<br/>
            ";
        // line 65
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "</fieldset>
            ";
        // line 68
        echo "            
            
            <p>
            </p>
            
        </form>
    <footer><header ><h3 >Nuevo producto</h3></header>
    </footer>
    
   
    
    ";
        // line 79
        echo $this->env->getExtension('actions')->renderAction("AlmacenBundle:Producto:new", array(), array());
        // line 80
        echo "    
</article>



<article class=\"module width_3_quarter\">
\t\t\t
\t\t\t";
        // line 87
        $this->displayBlock('busqueda', $context, $blocks);
        // line 94
        echo "\t\t\t
</article>

<article class=\"module width_3_quarter\">

    <header class=\"oculto\"><h3 class=\"tabs_involved\">Productos a comprar</h3>
\t\t
</header>

\t<div class=\"message_list\">
\t\t\t
                            <table id=\"grilla\" class=\"tablesorter\" cellspacing=\"0\"> 
                            
\t\t\t<thead> 
\t\t\t
\t\t\t\t<tr> 
   \t\t\t\t";
        // line 110
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
    <footer>
                    
        <p><strong class=\"oculto\">Ariculos :</strong> <span id=\"span_cantidad\" class=\"oculto\"  >0</span><strong> </strong><strong style=\"padding-left: 50px;\">Monto Total : S/. <span id=\"span_monto\" class=\"monto\">0.0</span></strong></p>
    </footer>
                
</article>



";
    }

    // line 87
    public function block_busqueda($context, array $blocks = array())
    {
        // line 88
        echo "                        
                                
                         ";
        // line 90
        echo $this->env->getExtension('actions')->renderAction("CompraBundle:Compra:BuscaCompra", array(), array());
        // line 91
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
        return array (  241 => 91,  239 => 90,  235 => 88,  232 => 87,  198 => 110,  180 => 94,  178 => 87,  169 => 80,  167 => 79,  154 => 68,  150 => 65,  146 => 64,  142 => 63,  138 => 62,  134 => 61,  129 => 59,  125 => 58,  121 => 57,  117 => 56,  113 => 55,  108 => 53,  104 => 52,  99 => 50,  95 => 49,  88 => 45,  82 => 44,  76 => 40,  73 => 39,  66 => 36,  63 => 35,  32 => 5,  29 => 4,);
    }
}
