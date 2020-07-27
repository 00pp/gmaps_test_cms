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

/* cat.html.twig */
class __TwigTemplate_b0650c27a62a2fcc0e701698b4a11ac16d79ba07db17b723d4c47d7e86b8b272 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("base.html.twig", "cat.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
\t<h3> ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["category"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "category", [], "any", false, false, false, 5);
        echo " </h3>

";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 8
            echo "\t
\t\t<div class=\"pure-g\">
\t\t\t<div class=\"pure-u-1 category-item-box\">
\t\t\t\t<div class=\"pure-g\">
\t\t\t\t
\t\t\t\t\t<div class=\"pure-u-1 pure-u-sm-3-5 pure-u-md-4-5\">
\t\t\t\t\t\t<strong><a href=\"/";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 14);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["a"], "name", [], "any", false, false, false, 14);
            echo " ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reviews");
            echo "</a></strong>

\t\t\t\t\t\t";
            // line 16
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "text", [], "any", false, false, false, 16)) > 0)) {
                // line 17
                echo "\t\t\t\t\t\t<p>";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Review");
                echo ": ";
                echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "text", [], "any", false, false, false, 17)) > 500)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "text", [], "any", false, false, false, 17), 0, 500) . "...")) : (twig_get_attribute($this->env, $this->source, $context["a"], "text", [], "any", false, false, false, 17)));
                echo " <a href=\"/";
                echo twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 17);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 17);
                echo "\">";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read more");
                echo "</a></p>
\t\t\t\t\t\t";
            }
            // line 19
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
";
        // line 26
        if ((($context["next_page"] ?? null) == true)) {
            // line 27
            echo "<div class=\"pure-g\">
\t<div class=\"pure-u-1 setborder margintop15 padding10\">
\t\t";
            // line 29
            $context["next_page"] = (($context["curr_page"] ?? null) + 1);
            // line 30
            echo "\t\t<a href=\"/category/";
            echo ($context["cat_id"] ?? null);
            echo "/";
            echo ($context["next_page"] ?? null);
            echo "\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next");
            echo "</a>
\t</div>
</div>
";
        }
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "cat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 34,  119 => 30,  117 => 29,  113 => 27,  111 => 26,  108 => 25,  97 => 19,  83 => 17,  81 => 16,  70 => 14,  62 => 8,  58 => 7,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cat.html.twig", "/home/dmitry/dev/php/google-maps-scraped/app/src/views/cat.html.twig");
    }
}
