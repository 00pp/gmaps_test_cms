<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home.html.twig */
class __TwigTemplate_72f0cd21251d163b654f0f25e0d298ef350ecaf5de5e01a167f69ac3d089ba79 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"";
        // line 2
        echo twig_constant("LOCALE");
        echo "\">

<head>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "</head>

<body>

 
 
<div class=\"content\">

 

\t<div class=\"pure-g\">
\t\t<div class=\"pure-u-1\">
\t 
\t\t\t<div class=\"home artistphotosblock\">
\t\t\t 
\t\t\t    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 44
            echo "\t\t\t    \t<div class=\"homepageitem\">
\t\t\t    \t<a href=\"/";
            // line 45
            echo twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 45);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 45);
            echo "\"><img alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["a"], "name", [], "any", false, false, false, 45);
            echo "\" src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["a"], "image", [], "any", false, false, false, 45);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["a"], "name", [], "any", false, false, false, 45);
            echo "\" style=\"max-height:150px; max-width:195px\" /></a>
\t\t\t    \t</div>
\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t   
\t\t\t</div>
\t\t</div>
\t</div>

</div>
 
</body>

</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home Page Title");
        echo " ";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/pure-min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/pure-extend.css\">
        <!--[if lte IE 8]>
            <link rel=\"stylesheet\" href=\"/css/grids-responsive-old-ie-min.css\">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/grids-responsive-min.css\">
        <!--<![endif]-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/styles.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/tabs.css\">

\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/slick/slick.css\"/>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/slick/slick-theme.css\"/>

\t\t<script src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
\t\t<script src=\"/js/slick/slick.min.js\"></script>

    ";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 10,  121 => 9,  112 => 5,  98 => 48,  81 => 45,  78 => 44,  74 => 43,  57 => 28,  55 => 9,  48 => 5,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home.html.twig", "/home/dmitry/dev/php/google-maps-scraped/app/src/views/home.html.twig");
    }
}
