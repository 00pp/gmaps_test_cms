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

/* location.html.twig */
class __TwigTemplate_933b9238e27fe6cd2a4f4515e0376c59d1a20a2dc54ef1af39393451c7af4240 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "location.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
\t<h3> Choose the Best ";
        // line 6
        echo twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["category"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "category", [], "any", false, false, false, 6));
        echo " in ";
        if (($context["town_id"] ?? null)) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["category"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "town", [], "any", false, false, false, 6);
            echo " ";
        }
        echo " ";
        echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["category"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "state", [], "any", false, false, false, 6);
        echo " </h3>

";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 9
            echo "
\t\t<div class=\"pure-g\">
\t\t\t<div class=\"pure-u-1 category-item-box\">
\t\t\t\t<div class=\"pure-g\">
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
            // line 15
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "text", [], "any", false, false, false, 15)) > 0)) {
                // line 16
                echo "\t\t\t\t\t\t\t<p>";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Review");
                echo ": ";
                echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "text", [], "any", false, false, false, 16)) > 500)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "text", [], "any", false, false, false, 16), 0, 500) . "...")) : (twig_get_attribute($this->env, $this->source, $context["a"], "text", [], "any", false, false, false, 16)));
                echo " <a href=\"/";
                echo twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 16);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 16);
                echo "\">";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read more");
                echo "</a></p>
\t\t\t\t\t\t";
            }
            // line 18
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
    }

    public function getTemplateName()
    {
        return "location.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 25,  103 => 18,  89 => 16,  87 => 15,  77 => 14,  70 => 9,  66 => 8,  53 => 6,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "location.html.twig", "/home/dmitry/dev/php/google-maps-scraped/app/src/views/location.html.twig");
    }
}
