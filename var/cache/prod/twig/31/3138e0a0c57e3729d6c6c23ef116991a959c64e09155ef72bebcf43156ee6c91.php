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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product_suppliers.html.twig */
class __TwigTemplate_bd938a70ad4c4fb9d7a14586a11e30753ebf5beff9db9bbabd1fcabb2f81bd8b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'product_supplier_row' => [$this, 'block_product_supplier_row'],
            'product_supplier_collection_row' => [$this, 'block_product_supplier_collection_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $this->displayBlock('product_supplier_row', $context, $blocks);
        // line 51
        $this->displayBlock('product_supplier_collection_row', $context, $blocks);
    }

    // line 26
    public function block_product_supplier_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "<tr class=\"product_supplier_row\" id=\"product_supplier_row_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "\" data-supplier-index=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "\">
  ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 29
            echo "    ";
            $context["childType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 29), "block_prefixes", [], "any", false, false, false, 29), 1, [], "any", false, false, false, 29);
            // line 30
            echo "    ";
            if ((0 !== twig_compare(($context["childType"] ?? null), "hidden"))) {
                // line 31
                echo "      ";
                // line 32
                echo "      <td>
        ";
                // line 33
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
        ";
                // line 34
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                echo "
      </td>
    ";
            } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 36
$context["child"], "vars", [], "any", false, false, false, 36), "label", [], "any", false, false, false, 36))) {
                // line 37
                echo "      ";
                // line 38
                echo "      <td class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
                echo "\">
        ";
                // line 39
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "supplier_name", [], "any", false, false, false, 39), 'widget');
                echo "
        <span class=\"preview\">";
                // line 40
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 40), "value", [], "any", false, false, false, 40)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 40), "value", [], "any", false, false, false, 40), "html", null, true);
                }
                echo "</span>
      </td>
    ";
            } else {
                // line 43
                echo "      ";
                // line 44
                echo "      ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
    ";
            }
            // line 46
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "  </tr>";
    }

    // line 51
    public function block_product_supplier_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "<div class=\"form-group product-suppliers-collection-row\">
    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 54
        $this->displayBlock("form_alert", $context, $blocks);
        // line 57
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row'), "data-prototype-name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 57), "name", [], "any", false, false, false, 57)]);
        // line 58
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
      <div class=\"row\">
        <div class=\"col-sm\">
          <table class=\"table\">
            <thead class=\"thead-default\">
            <tr>
              ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "children", [], "any", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 65
            echo "                ";
            // line 66
            echo "                ";
            $context["childType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 66), "block_prefixes", [], "any", false, false, false, 66), 1, [], "any", false, false, false, 66);
            // line 67
            echo "                ";
            if (((0 !== twig_compare(($context["childType"] ?? null), "hidden")) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 67), "label", [], "any", false, false, false, 67)))) {
                // line 68
                echo "                  <th>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 68), "label", [], "any", false, false, false, 68), "html", null, true);
                echo "</th>
                ";
            }
            // line 70
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            </tr>
            </thead>
            <tbody>";
        // line 74
        $this->displayBlock("form_rows", $context, $blocks);
        // line 75
        echo "</tbody>
          </table>
        </div>
      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product_suppliers.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  172 => 75,  170 => 74,  166 => 71,  160 => 70,  154 => 68,  151 => 67,  148 => 66,  146 => 65,  142 => 64,  132 => 58,  130 => 57,  128 => 54,  126 => 53,  123 => 52,  119 => 51,  115 => 47,  109 => 46,  103 => 44,  101 => 43,  93 => 40,  89 => 39,  84 => 38,  82 => 37,  80 => 36,  75 => 34,  71 => 33,  68 => 32,  66 => 31,  63 => 30,  60 => 29,  56 => 28,  49 => 27,  45 => 26,  41 => 51,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product_suppliers.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\FormTheme\\product_suppliers.html.twig");
    }
}
