<?php

/* ::base.html.twig */
class __TwigTemplate_d7934e9da3b84a73b13d98b77449835c extends Twig_Template
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
\t<!--[if lt IE 9]>
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/css/ie.css"), "html", null, true);
        echo "css/ie.css\" type=\"text/css\" media=\"screen\" />
\t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t<![endif]-->
\t<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/js/jquery-1.5.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/js/hideshow.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/js/jquery.tablesorter.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/js/jquery.equalHeight.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/js/jQuery.validate.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/js/script.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 21
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
        // line 55
        $this->displayBlock('javascript', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('javascript2', $context, $blocks);
        // line 60
        echo "
</head>

    ";
        // line 63
        $this->displayBlock('menu', $context, $blocks);
        // line 64
        echo "
</html>
";
    }

    // line 6
    public function block_titulo($context, array $blocks = array())
    {
    }

    // line 55
    public function block_javascript($context, array $blocks = array())
    {
    }

    // line 58
    public function block_javascript2($context, array $blocks = array())
    {
    }

    // line 63
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
        return array (  140 => 58,  135 => 55,  130 => 6,  124 => 64,  122 => 63,  117 => 60,  115 => 58,  112 => 57,  73 => 21,  69 => 20,  61 => 18,  57 => 17,  53 => 16,  48 => 14,  44 => 13,  38 => 10,  28 => 6,  21 => 1,  191 => 83,  185 => 23,  180 => 9,  137 => 54,  129 => 49,  121 => 47,  113 => 42,  109 => 41,  97 => 35,  93 => 34,  79 => 23,  66 => 18,  58 => 16,  56 => 15,  45 => 9,  39 => 5,  36 => 4,  230 => 94,  225 => 93,  192 => 112,  174 => 84,  172 => 83,  166 => 89,  156 => 70,  153 => 70,  149 => 68,  145 => 63,  141 => 66,  136 => 65,  132 => 63,  128 => 62,  125 => 48,  119 => 58,  114 => 57,  110 => 55,  105 => 40,  101 => 51,  94 => 49,  87 => 44,  84 => 43,  77 => 40,  74 => 20,  68 => 35,  65 => 19,  33 => 8,  30 => 2,);
    }
}
