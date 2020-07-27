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

/* base.html.twig */
class __TwigTemplate_a2cfe71fd528e0bbfdde25a2af8c82309e5b223291f83246a5f16630e5da85a9 extends \Twig\Template
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
            'body' => [$this, 'block_body'],
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
        // line 30
        echo "    </head>

    <body>

        ";
        // line 34
        echo ($context["defaultStrategy"] ?? null);
        echo "

        <div class=\"content\">

            <!-- top header menu / better to do with native menu? -->
            <div class=\"custom-wrapper pure-g\" id=\"menu\">
                <div class=\"pure-u-1 pure-u-md-6-24\">
                    <div class=\"pure-menu\">

                        <a href=\"/\" class=\"pure-menu-heading custom-brand\">
                           Front End test
                        </a>

                        <a href=\"#\" class=\"custom-toggle\" id=\"toggle\"><s class=\"bar\"></s><s class=\"bar\"></s></a>
                    </div>
                </div>


                <script>
                  // (function() {
                  //   var cx = '007228050131791561461:7w95fjh_zpy';
                  //   var gcse = document.createElement('script');
                  //   gcse.type = 'text/javascript';
                  //   gcse.async = true;
                  //   gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                  //   var s = document.getElementsByTagName('script')[0];
                  //   s.parentNode.insertBefore(gcse, s);
                  // })();
                </script>
                
           
                <div class=\"pure-u-1 pure-u-md-18-24\">
                    <div class=\"pure-menu pure-menu-horizontal custom-menu-3 custom-can-transform\">
                        <ul class=\"pure-menu-list\">
                            ";
        // line 69
        echo "                            ";
        // line 70
        echo "                            ";
        // line 71
        echo "                        </ul>
                    </div>
                </div>
            </div>
       
        ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Base File Static Title");
        echo " ";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/pure-min.css\">
            
            <!--[if lte IE 8]>
                <link rel=\"stylesheet\" href=\"/css/grids-responsive-old-ie-min.css\">
            <![endif]-->
            <!--[if gt IE 8]><!-->
                <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/grids-responsive-min.css\">
            <!--<![endif]-->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/styles.css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/tabs.css\">
            <link rel=\"stylesheet\" href=\"/css/fontawesome-all.min.css\">
            <link rel=\"stylesheet\" href=\"/floatbox/floatbox/floatbox.css\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/pure-extend.css\">
            ";
        // line 24
        echo "
            <script src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
            <script src=\"/floatbox/floatbox/floatbox.js\"></script>
            <script src=\"//www.google.com/recaptcha/api.js\" async defer></script>

        ";
    }

    // line 76
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 76,  151 => 24,  136 => 10,  132 => 9,  123 => 5,  114 => 77,  112 => 76,  105 => 71,  103 => 70,  101 => 69,  64 => 34,  58 => 30,  56 => 9,  49 => 5,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/dmitry/dev/php/google-maps-scraped/app/src/views/base.html.twig");
    }
}
