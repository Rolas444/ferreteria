<?php

/* ::base.html.twig */
class __TwigTemplate_4054c1823dadf95276e8566bb8fad967 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'javascript' => array($this, 'block_javascript'),
            'javascript2' => array($this, 'block_javascript2'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"es\">

<head>
\t<meta charset=\"utf-8\"/>
\t<title>";
        // line 6
        $this->displayBlock('titulo', $context, $blocks);
        echo "Ferreteria</title>
\t
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/css/impresion.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"print\" />
\t<!--[if lt IE 9]>
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/css/ie.css"), "html", null, true);
        echo "css/ie.css\" type=\"text/css\" media=\"screen\" />
\t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t<![endif]-->
\t<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/js/jquery-1.5.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/js/hideshow.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/js/jquery.tablesorter.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/js/jquery.equalHeight.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/js/jQuery.validate.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/js/script.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/js/jquery.PrintArea.js"), "html", null, true);
        echo "\"></script>
\t
        <script type=\"text/javascript\">
\t\$(document).ready(function() 
    \t{ 
      \t  \$(\".tablesorter\").tablesorter(); 
   \t } 
\t);
\t\$(document).ready(function() {

\t//When page loads...
\t\$(\".tab_content\").hide(); //Hide all content
\t\$(\"ul.tabs li:first\").addClass(\"active\").show(); //Activate first tab
\t\$(\".tab_content:first\").show(); //Show first tab content

\t//On Click Event
\t\$(\"ul.tabs li\").click(function() {

\t\t\$(\"ul.tabs li\").removeClass(\"active\"); //Remove any \"active\" class
\t\t\$(this).addClass(\"active\"); //Add \"active\" class to selected tab
\t\t\$(\".tab_content\").hide(); //Hide all tab content

\t\tvar activeTab = \$(this).find(\"a\").attr(\"href\"); //Find the href attribute value to identify the active tab + content
\t\t\$(activeTab).fadeIn(); //Fade in the active ID content
\t\treturn false;
\t});

});
    </script>
    <script type=\"text/javascript\">
    \$(function(){
        \$('.column').equalHeight();
    });
</script>
";
        // line 56
        $this->displayBlock('javascript', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('javascript2', $context, $blocks);
        // line 61
        echo "
</head>

    ";
        // line 64
        $this->displayBlock('menu', $context, $blocks);
        // line 65
        echo "
</html>
";
    }

    // line 6
    public function block_titulo($context, array $blocks = array())
    {
    }

    // line 56
    public function block_javascript($context, array $blocks = array())
    {
    }

    // line 59
    public function block_javascript2($context, array $blocks = array())
    {
    }

    // line 64
    public function block_menu($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 64,  139 => 56,  134 => 6,  126 => 64,  121 => 61,  119 => 59,  114 => 56,  73 => 21,  69 => 20,  65 => 19,  61 => 18,  57 => 17,  52 => 15,  48 => 14,  42 => 11,  37 => 9,  33 => 8,  28 => 6,  21 => 1,  240 => 90,  238 => 89,  234 => 87,  231 => 86,  197 => 109,  179 => 93,  177 => 86,  168 => 79,  166 => 78,  152 => 66,  148 => 63,  144 => 59,  140 => 61,  136 => 60,  132 => 59,  128 => 65,  124 => 57,  120 => 56,  116 => 58,  112 => 54,  107 => 52,  103 => 51,  98 => 49,  94 => 48,  89 => 46,  83 => 45,  77 => 22,  74 => 40,  67 => 37,  64 => 36,  32 => 5,  29 => 4,);
    }
}
