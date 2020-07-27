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

/* tag.html.twig */
class __TwigTemplate_79c87c63bd56024e75ceac3c844c95ebf7fcb0aecb8746be575ff81d3deeb4ed extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "tag.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["category"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "category", [], "any", false, false, false, 3);
        if ((($context["curr_page"] ?? null) > 1)) {
            echo ". ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Page");
            echo " ";
            echo ($context["curr_page"] ?? null);
            echo " ";
        }
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
\t<h3> ";
        // line 7
        echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["category"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "category", [], "any", false, false, false, 7);
        echo " </h3>

";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 10
            echo "
\t
\t\t<div class=\"pure-g\">
\t\t\t<div class=\"pure-u-1 category-item-box\">
\t\t\t\t<div class=\"pure-g\">
\t\t\t\t\t<div class=\"pure-u-1 pure-u-sm-2-5 pure-u-md-1-5\">
\t\t\t\t\t\t<a href=\"/";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 16);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 16);
            echo "\"><img alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["a"], "name", [], "any", false, false, false, 16);
            echo "\" class=\"vertical-align listimage\" src=\"";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "image", [], "any", false, false, false, 16)) > 0)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["a"], "image", [], "any", false, false, false, 16);
                echo " ";
            } else {
                echo " /img/noimage.jpg ";
            }
            echo "\" /></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pure-u-1 pure-u-sm-3-5 pure-u-md-4-5\">
\t\t\t\t\t\t<strong><a href=\"/";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 19);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 19);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["a"], "name", [], "any", false, false, false, 19);
            echo " ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reviews");
            echo "</a></strong>

\t\t\t\t\t\t";
            // line 21
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "text", [], "any", false, false, false, 21)) > 0)) {
                // line 22
                echo "\t\t\t\t\t\t<p>";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Review");
                echo ": ";
                echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "text", [], "any", false, false, false, 22)) > 500)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "text", [], "any", false, false, false, 22), 0, 500) . "...")) : (twig_get_attribute($this->env, $this->source, $context["a"], "text", [], "any", false, false, false, 22)));
                echo " <a href=\"/";
                echo twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 22);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 22);
                echo "\">";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read more");
                echo "</a></p>
\t\t\t\t\t\t";
            }
            // line 24
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
        // line 31
        echo "
";
        // line 32
        if ((($context["next_page"] ?? null) == true)) {
            // line 33
            echo "<div class=\"pure-g\">
\t<div class=\"pure-u-1 setborder margintop15 padding10\">
\t\t";
            // line 35
            $context["next_page"] = (($context["curr_page"] ?? null) + 1);
            // line 36
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
        // line 40
        echo "
";
    }

    public function getTemplateName()
    {
        return "tag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 40,  153 => 36,  151 => 35,  147 => 33,  145 => 32,  142 => 31,  130 => 24,  116 => 22,  114 => 21,  103 => 19,  85 => 16,  77 => 10,  73 => 9,  68 => 7,  65 => 6,  61 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tag.html.twig", "/home/dmitry/dev/php/google-maps-scraped/app/src/views/tag.html.twig");
    }
}
