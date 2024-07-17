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

/* @PrestaShop/Admin/Common/Grid/Blocks/table.html.twig */
class __TwigTemplate_dc65d81f5f958fae25e72915beeb147f2fae1c9fcb1f3b26fd1b0b0c7ab33179 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'grid_table_head' => [$this, 'block_grid_table_head'],
            'grid_table_body' => [$this, 'block_grid_table_body'],
            'grid_table_footer' => [$this, 'block_grid_table_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminGridTableBefore", ["grid" =>         // line 27
($context["grid"] ?? null), "legacy_controller" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 28
($context["app"] ?? null), "request", [], "any", false, false, false, 28), "attributes", [], "any", false, false, false, 28), "get", [0 => "_legacy_controller"], "method", false, false, false, 28), "controller" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
($context["app"] ?? null), "request", [], "any", false, false, false, 29), "attributes", [], "any", false, false, false, 29), "get", [0 => "_controller"], "method", false, false, false, 29)]);
        // line 31
        echo "

";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "filter_form", [], "any", false, false, false, 33), 'form_start', ["attr" => ["id" => (twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "id", [], "any", false, false, false, 33) . "_filter_form"), "class" => "table-responsive"]]);
        echo "

<table class=\"grid-table js-grid-table table ";
        // line 35
        if ($this->extensions['PrestaShopBundle\Twig\Extension\GridExtension']->isOrderingColumn(($context["grid"] ?? null))) {
            echo "grid-ordering-column";
        }
        echo " ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "attributes", [], "any", false, false, false, 35), "is_empty_state", [], "any", false, false, false, 35)) {
            echo "border-0";
        }
        echo "\"
       id=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "id", [], "any", false, false, false, 36), "html", null, true);
        echo "_grid_table\"
       data-query=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "data", [], "any", false, false, false, 37), "query", [], "any", false, false, false, 37), "html", null, true);
        echo "\"
       data-limit=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "pagination", [], "any", false, false, false, 38), "limit", [], "any", false, false, false, 38), "html", null, true);
        echo "\"
       data-offset=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "pagination", [], "any", false, false, false, 39), "offset", [], "any", false, false, false, 39), "html", null, true);
        echo "\"
       data-total=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "data", [], "any", false, false, false, 40), "records_total", [], "any", false, false, false, 40), "html", null, true);
        echo "\"
>
  <thead class=\"thead-default\">
  ";
        // line 43
        $this->displayBlock('grid_table_head', $context, $blocks);
        // line 49
        echo "  </thead>
  <tbody>
  ";
        // line 51
        $this->displayBlock('grid_table_body', $context, $blocks);
        // line 69
        echo "  </tbody>
  ";
        // line 70
        $this->displayBlock('grid_table_footer', $context, $blocks);
        // line 71
        echo "</table>

";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "filter_form", [], "any", false, false, false, 73), 'form_end');
        echo "

";
        // line 75
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminGridTableAfter", ["grid" =>         // line 76
($context["grid"] ?? null), "legacy_controller" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 77
($context["app"] ?? null), "request", [], "any", false, false, false, 77), "attributes", [], "any", false, false, false, 77), "get", [0 => "_legacy_controller"], "method", false, false, false, 77), "controller" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 78
($context["app"] ?? null), "request", [], "any", false, false, false, 78), "attributes", [], "any", false, false, false, 78), "get", [0 => "_controller"], "method", false, false, false, 78)]);
        // line 80
        echo "
";
    }

    // line 43
    public function block_grid_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "    ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/Table/headers_row.html.twig", ["grid" => ($context["grid"] ?? null)]);
        echo "
    ";
        // line 45
        if (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "actions", [], "any", false, false, false, 45), "bulk", [], "any", false, false, false, 45)), 0)) || (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "filter_form", [], "any", false, false, false, 45)), 1)))) {
            // line 46
            echo "      ";
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig", ["grid" => ($context["grid"] ?? null)]);
            echo "
    ";
        }
        // line 48
        echo "  ";
    }

    // line 51
    public function block_grid_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "data", [], "any", false, false, false, 52), "records", [], "any", false, false, false, 52))) {
            // line 53
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "data", [], "any", false, false, false, 53), "records", [], "any", false, false, false, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 54
                echo "        <tr>
          ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "columns", [], "any", false, false, false, 55));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 56
                    echo "            <td
              ";
                    // line 57
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["column"], "type", [], "any", false, false, false, 57), "identifier"))) {
                        echo "data-identifier=\"";
                        echo twig_escape_filter($this->env, (($__internal_compile_0 = $context["record"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["column"], "id", [], "any", false, false, false, 57)] ?? null) : null), "html", null, true);
                        echo "\"";
                    }
                    // line 58
                    echo "              class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "type", [], "any", false, false, false, 58), "html", null, true);
                    echo "-type column-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "id", [], "any", false, false, false, 58), "html", null, true);
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "options", [], "any", false, true, false, 58), "clickable", [], "any", true, true, false, 58) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "options", [], "any", false, false, false, 58), "clickable", [], "any", false, false, false, 58))) {
                        echo " clickable";
                    }
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "options", [], "any", false, true, false, 58), "alignment", [], "any", true, true, false, 58) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "options", [], "any", false, false, false, 58), "alignment", [], "any", false, false, false, 58))) {
                        echo " text-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "options", [], "any", false, false, false, 58), "alignment", [], "any", false, false, false, 58), "html", null, true);
                    }
                    echo "\"
            >
              ";
                    // line 60
                    echo $this->extensions['PrestaShopBundle\Twig\Extension\GridExtension']->renderColumnContent($context["record"], $context["column"], ($context["grid"] ?? null));
                    echo "
            </td>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "    ";
        } else {
            // line 66
            echo "      ";
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/Table/empty_row.html.twig", ["grid" => ($context["grid"] ?? null)]);
            echo "
    ";
        }
        // line 68
        echo "  ";
    }

    // line 70
    public function block_grid_table_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 70,  210 => 68,  204 => 66,  201 => 65,  194 => 63,  185 => 60,  170 => 58,  164 => 57,  161 => 56,  157 => 55,  154 => 54,  149 => 53,  146 => 52,  142 => 51,  138 => 48,  132 => 46,  130 => 45,  125 => 44,  121 => 43,  116 => 80,  114 => 78,  113 => 77,  112 => 76,  111 => 75,  106 => 73,  102 => 71,  100 => 70,  97 => 69,  95 => 51,  91 => 49,  89 => 43,  83 => 40,  79 => 39,  75 => 38,  71 => 37,  67 => 36,  57 => 35,  52 => 33,  48 => 31,  46 => 29,  45 => 28,  44 => 27,  43 => 26,  40 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Blocks\\table.html.twig");
    }
}
