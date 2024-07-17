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

/* @PrestaShop/Admin/Sell/Catalog/Product/Blocks/header-details.html.twig */
class __TwigTemplate_2cc36584262366f0b37323094395fac904eee8746ead1a7853b9a4ca675992d7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header_summary' => [$this, 'block_header_summary'],
            'header_references' => [$this, 'block_header_references'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
<div class=\"product-header-details\">
";
        // line 27
        $this->displayBlock('header_summary', $context, $blocks);
        // line 112
        echo "
";
        // line 113
        $this->displayBlock('header_references', $context, $blocks);
        // line 126
        echo "</div>
";
    }

    // line 27
    public function block_header_summary($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "  ";
        // line 31
        echo "  ";
        $context["productData"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productForm"] ?? null), "vars", [], "any", false, false, false, 31), "data", [], "any", false, false, false, 31);
        // line 32
        echo "  <div class=\"product-header-summary\">
    <div class=\"product-field-preview\" data-role=\"price-tax-excluded\">
      <div class=\"product-field-value\">
        ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productData"] ?? null), "pricing", [], "any", false, true, false, 35), "retail_price", [], "any", false, true, false, 35), "ecotax_tax_excluded", [], "any", true, true, false, 35)) {
            // line 36
            echo "          ";
            $context["final_price_tax_excluded"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productData"] ?? null), "pricing", [], "any", false, false, false, 36), "retail_price", [], "any", false, false, false, 36), "price_tax_excluded", [], "any", false, false, false, 36) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productData"] ?? null), "pricing", [], "any", false, false, false, 36), "retail_price", [], "any", false, false, false, 36), "ecotax_tax_excluded", [], "any", false, false, false, 36));
            // line 37
            echo "          ";
            echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\LocalizationExtension']->priceFormat(($context["final_price_tax_excluded"] ?? null)), "html", null, true);
            echo "
        ";
        } else {
            // line 39
            echo "          ";
            echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\LocalizationExtension']->priceFormat(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productData"] ?? null), "pricing", [], "any", false, false, false, 39), "retail_price", [], "any", false, false, false, 39), "price_tax_excluded", [], "any", false, false, false, 39)), "html", null, true);
            echo "
        ";
        }
        // line 41
        echo "      </div>
      <div class=\"product-field-label\">
        ";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tax excl.", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"product-field-preview\" data-role=\"price-tax-included\">
      <div class=\"product-field-value\">
        ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\LocalizationExtension']->priceFormat(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productData"] ?? null), "pricing", [], "any", false, false, false, 49), "retail_price", [], "any", false, false, false, 49), "price_tax_included", [], "any", false, false, false, 49)), "html", null, true);
        echo "
      </div>
      <div class=\"product-field-label\">
        ";
        // line 53
        echo "        ";
        if (($context["taxEnabled"] ?? null)) {
            // line 54
            echo "          ";
            // line 55
            echo "          ";
            $context["taxRate"] = 0;
            // line 56
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productForm"] ?? null), "pricing", [], "any", false, false, false, 56), "retail_price", [], "any", false, false, false, 56), "tax_rules_group_id", [], "any", false, false, false, 56), "vars", [], "any", false, false, false, 56), "choices", [], "any", false, false, false, 56));
            foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
                // line 57
                echo "            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["choice"], "data", [], "any", false, false, false, 57), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productData"] ?? null), "pricing", [], "any", false, false, false, 57), "retail_price", [], "any", false, false, false, 57), "tax_rules_group_id", [], "any", false, false, false, 57)))) {
                    // line 58
                    echo "              ";
                    $context["taxRate"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 58)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["data-tax-rate"] ?? null) : null);
                    // line 59
                    echo "            ";
                }
                // line 60
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "
          ";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tax incl. (tax rule: %taxRate%%)", ["%taxRate%" => twig_round(($context["taxRate"] ?? null), 2)], "Admin.Catalog.Feature"), "html", null, true);
            echo "
        ";
        } else {
            // line 64
            echo "          ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tax incl.", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "
        ";
        }
        // line 66
        echo "      </div>
    </div>

    ";
        // line 70
        echo "    ";
        if (($context["stockEnabled"] ?? null)) {
            // line 71
            echo "      ";
            $context["quantityData"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productData"] ?? null), "stock", [], "any", false, false, false, 71), "quantities", [], "any", false, false, false, 71), "delta_quantity", [], "any", false, false, false, 71), "quantity", [], "any", false, false, false, 71);
            // line 72
            echo "      ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productData"] ?? null), "header", [], "any", false, false, false, 72), "type", [], "any", false, false, false, 72), "combinations"))) {
                // line 73
                echo "        ";
                $context["lowStock"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productData"] ?? null), "stock", [], "any", false, false, false, 73), "options", [], "any", false, false, false, 73), "low_stock_threshold", [], "any", false, false, false, 73);
                // line 74
                echo "      ";
            } else {
                // line 75
                echo "        ";
                $context["lowStock"] = 0;
                // line 76
                echo "      ";
            }
            // line 77
            echo "
      ";
            // line 78
            $context["outOfStockLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("out of stock", [], "Admin.Catalog.Feature");
            // line 79
            echo "      ";
            $context["lowStockLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("low stock", [], "Admin.Catalog.Feature");
            // line 80
            echo "      ";
            $context["inStockLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("in stock", [], "Admin.Catalog.Feature");
            // line 81
            echo "
      ";
            // line 82
            if ((0 >= twig_compare(($context["quantityData"] ?? null), 0))) {
                // line 83
                echo "        ";
                $context["stockClass"] = "danger";
                // line 84
                echo "        ";
                $context["stockLabel"] = ($context["outOfStockLabel"] ?? null);
                // line 85
                echo "      ";
            } elseif (((1 === twig_compare(($context["lowStock"] ?? null), 0)) && (0 >= twig_compare(($context["quantityData"] ?? null), ($context["lowStock"] ?? null))))) {
                // line 86
                echo "        ";
                $context["stockClass"] = "warning";
                // line 87
                echo "        ";
                $context["stockLabel"] = ($context["lowStockLabel"] ?? null);
                // line 88
                echo "      ";
            } else {
                // line 89
                echo "        ";
                $context["stockClass"] = "success";
                // line 90
                echo "        ";
                $context["stockLabel"] = ($context["inStockLabel"] ?? null);
                // line 91
                echo "      ";
            }
            // line 92
            echo "
      <div
        class=\"product-field-preview\"
        data-role=\"quantity\"
        ";
            // line 97
            echo "        data-low-stock-threshold=\"";
            echo twig_escape_filter($this->env, ($context["lowStock"] ?? null), "html", null, true);
            echo "\"
        data-out-of-stock-label=\"";
            // line 98
            echo twig_escape_filter($this->env, ($context["outOfStockLabel"] ?? null), "html", null, true);
            echo "\"
        data-low-stock-label=\"";
            // line 99
            echo twig_escape_filter($this->env, ($context["lowStockLabel"] ?? null), "html", null, true);
            echo "\"
        data-in-stock-label=\"";
            // line 100
            echo twig_escape_filter($this->env, ($context["inStockLabel"] ?? null), "html", null, true);
            echo "\"
      >
        <div class=\"product-total-quantity product-field-value ";
            // line 102
            echo twig_escape_filter($this->env, ($context["stockClass"] ?? null), "html", null, true);
            echo "\">
          ";
            // line 103
            echo twig_escape_filter($this->env, ($context["quantityData"] ?? null), "html", null, true);
            echo "
        </div>
        <div class=\"product-field-label product-total-quantity-label\">
          ";
            // line 106
            echo twig_escape_filter($this->env, ($context["stockLabel"] ?? null), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 110
        echo "  </div>
";
    }

    // line 113
    public function block_header_references($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "  ";
        $context["referencesForm"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productForm"] ?? null), "details", [], "any", false, false, false, 114), "references", [], "any", false, false, false, 114);
        // line 115
        echo "  <div class=\"product-header-references\">
    ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["referencesForm"] ?? null), "children", [], "any", false, false, false, 116));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 117
            echo "      ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 117), "value", [], "any", false, false, false, 117))) {
                // line 118
                echo "        <div class=\"product-reference\">
          <label>";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 119), "label", [], "any", false, false, false, 119), "html", null, true);
                echo "</label>
          <span>";
                // line 120
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 120), "value", [], "any", false, false, false, 120), "html", null, true);
                echo "</span>
        </div>
      ";
            }
            // line 123
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header-details.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  298 => 124,  292 => 123,  286 => 120,  282 => 119,  279 => 118,  276 => 117,  272 => 116,  269 => 115,  266 => 114,  262 => 113,  257 => 110,  250 => 106,  244 => 103,  240 => 102,  235 => 100,  231 => 99,  227 => 98,  222 => 97,  216 => 92,  213 => 91,  210 => 90,  207 => 89,  204 => 88,  201 => 87,  198 => 86,  195 => 85,  192 => 84,  189 => 83,  187 => 82,  184 => 81,  181 => 80,  178 => 79,  176 => 78,  173 => 77,  170 => 76,  167 => 75,  164 => 74,  161 => 73,  158 => 72,  155 => 71,  152 => 70,  147 => 66,  141 => 64,  136 => 62,  133 => 61,  127 => 60,  124 => 59,  121 => 58,  118 => 57,  113 => 56,  110 => 55,  108 => 54,  105 => 53,  99 => 49,  90 => 43,  86 => 41,  80 => 39,  74 => 37,  71 => 36,  69 => 35,  64 => 32,  61 => 31,  59 => 28,  55 => 27,  50 => 126,  48 => 113,  45 => 112,  43 => 27,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header-details.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\Blocks\\header-details.html.twig");
    }
}
