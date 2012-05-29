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

    // line 36
    public function block_ubicacion($context, array $blocks = array())
    {
        // line 37
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compra"), "html", null, true);
        echo "\">Compra</a> <div class=\"breadcrumb_divider\"></div><a class=\"current\">Creación</a>
";
    }

    // line 40
    public function block_cuerpo1($context, array $blocks = array())
    {
        // line 41
        echo "
<article class=\"module width_quarter\">
    <header><h3>Crear Compra</h3></header>
\t\t
        <form action=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compra_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
            ";
        // line 46
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
            
                <h3> ";
        // line 48
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Fecha"), "Fecha edido:");
        echo "
            ";
        // line 49
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Fecha"));
        echo "</h3>

           <h3> ";
        // line 51
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "FechaEnvio"), "Fecha Envío:");
        echo "
            ";
        // line 52
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "FechaEnvio"));
        echo "</h3>
            <fieldset style=\"widht:45%; padding: 8%\">
             ";
        // line 54
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Proveedor"), "Proveedor :");
        echo "
            ";
        // line 55
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Proveedor"));
        echo "<br/>
            ";
        // line 56
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "TipoDocumento"), "Documento :");
        echo "    
            ";
        // line 57
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "TipoDocumento"));
        echo " <br/><p></p>
            ";
        // line 58
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "NumeroDocumento"), array("attr" => array("placeholder" => "numero del documento")));
        echo "
            ";
        // line 59
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "TipoPago"), "Credito :");
        echo "
            ";
        // line 60
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "TipoPago"));
        echo "<br/>
            ";
        // line 61
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "MontoTotal"), "Monto Total :");
        echo "
            ";
        // line 62
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "MontoTotal"));
        echo "<br/>
            ";
        // line 63
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "</fieldset>
            ";
        // line 66
        echo "            
            
            <p>
                <input type=\"submit\" value=\"Guardar\"/>
            </p>
            
        </form>
    <footer><header><h3>Nuevo producto</h3></header>
    </footer>
    
   
    
    ";
        // line 78
        echo $this->env->getExtension('actions')->renderAction("AlmacenBundle:Producto:new", array(), array());
        // line 79
        echo "    
</article>



<article class=\"module width_3_quarter\">
\t\t\t
\t\t\t";
        // line 86
        $this->displayBlock('busqueda', $context, $blocks);
        // line 93
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
        // line 109
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
                    
        <p><strong class=\"oculto\">Ariculos :</strong> <span id=\"span_cantidad\" class=\"oculto\">0</span><strong> </strong><strong>Monto Total : S/. <span id=\"span_monto\" class=\"monto\">0.0</span></strong></p>
    </footer>
                
</article>



";
    }

    // line 86
    public function block_busqueda($context, array $blocks = array())
    {
        // line 87
        echo "                        
                                
                         ";
        // line 89
        echo $this->env->getExtension('actions')->renderAction("CompraBundle:Compra:BuscaCompra", array(), array());
        // line 90
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
        return array (  240 => 90,  238 => 89,  234 => 87,  231 => 86,  197 => 109,  179 => 93,  177 => 86,  168 => 79,  166 => 78,  152 => 66,  148 => 63,  144 => 62,  140 => 61,  136 => 60,  132 => 59,  128 => 58,  124 => 57,  120 => 56,  116 => 55,  112 => 54,  107 => 52,  103 => 51,  98 => 49,  94 => 48,  89 => 46,  83 => 45,  77 => 41,  74 => 40,  67 => 37,  64 => 36,  32 => 5,  29 => 4,);
    }
}
