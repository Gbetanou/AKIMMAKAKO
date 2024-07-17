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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig */
class __TwigTemplate_d766ae4372183de0451e9b5e0aab7effdb34b74d3a746cbd0862be53f391e36f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 27
        $context["route_params"] = [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 27), "route_param_name", [], "any", false, false, false, 27) => (($__internal_compile_0 = ($context["record"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 27), "primary_field", [], "any", false, false, false, 27)] ?? null) : null)];
        // line 28
        $context["extra_route_params"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 28), "extra_route_params", [], "any", false, false, false, 28);
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extra_route_params"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["field"]) {
            // line 30
            echo "  ";
            $context["route_params"] = twig_array_merge(($context["route_params"] ?? null), [$context["name"] => (((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), $context["field"], [], "array", true, true, false, 30) &&  !(null === (($__internal_compile_1 = ($context["record"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["field"]] ?? null) : null)))) ? ((($__internal_compile_2 = ($context["record"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["field"]] ?? null) : null)) : ($context["field"]))]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
";
        // line 34
        $context["id_primary_key"] = twig_join_filter(($context["route_params"] ?? null), "-");
        // line 35
        echo "
";
        // line 36
        $context["isValid"] = (0 === twig_compare((($__internal_compile_3 = ($context["record"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "id", [], "any", false, false, false, 36)] ?? null) : null), 1));
        // line 37
        echo "
<div class=\"text-center\">
  <div
    class=\"ps-switch ps-switch-sm ps-switch-nolabel ps-switch-center ps-togglable-row\"
    data-toggle-url=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 41), "route", [], "any", false, false, false, 41), ($context["route_params"] ?? null)), "html", null, true);
        echo "\"
  >
  <input type=\"radio\" name=\"input-";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 43), "route", [], "any", false, false, false, 43), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["id_primary_key"] ?? null), "html", null, true);
        echo "\"
         id=\"input-false-";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 44), "route", [], "any", false, false, false, 44), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["id_primary_key"] ?? null), "html", null, true);
        echo "\"
         value=\"0\" ";
        // line 45
        if ( !($context["isValid"] ?? null)) {
            echo "checked";
        }
        echo ">
      <label for=\"input-false-";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 46), "route", [], "any", false, false, false, 46), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["id_primary_key"] ?? null), "html", null, true);
        echo "\">Off</label>
      <input type=\"radio\" name=\"input-";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 47), "route", [], "any", false, false, false, 47), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["id_primary_key"] ?? null), "html", null, true);
        echo "\"
             id=\"input-true-";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 48), "route", [], "any", false, false, false, 48), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["id_primary_key"] ?? null), "html", null, true);
        echo "\"
             value=\"1\" ";
        // line 49
        if (($context["isValid"] ?? null)) {
            echo "checked";
        }
        echo ">
      <label for=\"input-true-";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 50), "route", [], "any", false, false, false, 50), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["id_primary_key"] ?? null), "html", null, true);
        echo "\">On</label>
      <span class=\"slide-button\"></span>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 50,  112 => 49,  106 => 48,  100 => 47,  94 => 46,  88 => 45,  82 => 44,  76 => 43,  71 => 41,  65 => 37,  63 => 36,  60 => 35,  58 => 34,  55 => 32,  48 => 30,  44 => 29,  42 => 28,  40 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Columns\\Content\\toggle.html.twig");
    }
}
