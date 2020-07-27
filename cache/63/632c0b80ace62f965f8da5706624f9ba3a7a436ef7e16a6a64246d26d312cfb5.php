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

/* item.html.twig */
class __TwigTemplate_e0a75a492a8e9f386d3608578599f6d33c36a632780b21e031e635d3521384d3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "item.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "    
\t";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reviews for %name%", ["%name%" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 4)]);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
<div class=\"pure-g\">
\t<div class=\"pure-u-1 pure-u-lg-1 crumps\">
\t\t<a href=\"/\">";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home");
        echo "</a> 
\t \t
\t \t\t> <a href=\"/category/";
        // line 13
        echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "categories_id", [], "any", false, false, false, 13)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        echo "\">";
        echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "categories", [], "any", false, false, false, 13)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null);
        echo "</a>
\t 
\t\t\t> <a href=\"/location/";
        // line 15
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "state_id", [], "any", false, false, false, 15);
        echo "/";
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "town_id", [], "any", false, false, false, 15);
        echo "/category/";
        echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "categories_id", [], "any", false, false, false, 15)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null);
        echo "\">";
        echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "categories", [], "any", false, false, false, 15)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null);
        echo " in ";
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "town", [], "any", false, false, false, 15);
        echo ", ";
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "state", [], "any", false, false, false, 15);
        echo "</a>
\t 
\t\t\t> ";
        // line 17
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 17);
        echo " ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Review");
        echo "
\t</div>
</div>
 


<div class=\"pure-g\">
\t<div class=\"pure-u-1 pure-u-lg-1\">
\t<img src=\"";
        // line 25
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 25);
        echo "\" height=\"100\">
\t <h1>";
        // line 26
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 26);
        echo "</h1>
\t</div>
</div>

";
        // line 31
        echo "
 
<div class=\"pure-g commentswrapper\">
\t<div class=\"pure-u-1 pure-u-lg-1\">\t
\t\t<div class=\"neighbors\">
\t\t\t<h3 class=\"reviews-title\">Other Companies</h3>
\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "neighbors", [], "any", false, false, false, 37));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["neighbor"]) {
            // line 38
            echo "\t\t\t\t<a href=\"/";
            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["neighbor"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["id"] ?? null) : null);
            echo "/";
            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["neighbor"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["slug"] ?? null) : null);
            echo "\">";
            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["neighbor"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["name"] ?? null) : null);
            echo "</a> 
\t\t\t\t";
            // line 39
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 39) == false)) {
                echo " :: 
\t\t\t\t";
            }
            // line 41
            echo "\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['neighbor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t</div>
\t</div>
</div>
 

";
        // line 48
        echo "
";
        // line 49
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "comments", [], "any", false, false, false, 49)) > 0)) {
            // line 50
            echo "
\t<div class=\"pure-g commentswrapper\">
\t\t<h3 class=\"reviews-title\">Reviews (";
            // line 52
            echo twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "comments", [], "any", false, false, false, 52));
            echo ")</h3>
\t\t<div class=\"pure-u-1 pure-u-lg-1\">\t
\t\t\t";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "comments", [], "any", false, false, false, 54));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 55
                echo "\t\t\t\t<div class=\"pure-g comments\">
\t\t\t\t 
\t\t\t\t\t<div class=\"pure-u-1\">
\t\t\t\t\t\t<b>author</b>: ";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 58);
                echo " <br><b>rating:</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "rating", [], "any", false, false, false, 58);
                echo " <br> <b>comment:</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "text", [], "any", false, false, false, 58);
                echo " <br> <b>date:</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 58);
                echo "
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "
\t\t</div>
\t</div>
";
        }
        // line 66
        echo " ";
        // line 67
        echo "

";
        // line 69
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "neighbor_comments", [], "any", false, false, false, 69)) > 0)) {
            // line 70
            echo "\t<div style=\"margin-bottom:10px\"> <h3> Comments for other comanies </h3> </div>
\t
\t";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "neighbor_comments", [], "any", false, false, false, 72));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 73
                echo "
\t\t<div class=\"pure-g comments\">
\t\t\t<div class=\"pure-u-1-8\">
\t\t\t\t<a href=\"/";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "place_id", [], "any", false, false, false, 76);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "slug", [], "any", false, false, false, 76);
                echo "\"><img onerror=\"imgError(this);\" src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "image", [], "any", false, false, false, 76);
                echo "\" width=\"90%\" /></a>
\t\t\t</div>
\t\t\t<div class=\"pure-u-7-8\">
\t\t\t\t<b>author</b>: ";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 79);
                echo " <br><b>rating:</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "rating", [], "any", false, false, false, 79);
                echo " <br> <b>comment:</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "text", [], "any", false, false, false, 79);
                echo " <br> <b>date:</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 79);
                echo "
\t\t\t</div>
\t\t</div>

\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "
";
        }
        // line 86
        echo "

";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 86,  273 => 84,  256 => 79,  246 => 76,  241 => 73,  237 => 72,  233 => 70,  231 => 69,  227 => 67,  225 => 66,  219 => 63,  202 => 58,  197 => 55,  193 => 54,  188 => 52,  184 => 50,  182 => 49,  179 => 48,  172 => 42,  158 => 41,  153 => 39,  144 => 38,  127 => 37,  119 => 31,  112 => 26,  108 => 25,  95 => 17,  80 => 15,  73 => 13,  68 => 11,  63 => 8,  59 => 7,  53 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "item.html.twig", "/home/dmitry/dev/php/google-maps-scraped/app/src/views/item.html.twig");
    }
}
