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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig */
class __TwigTemplate_18b2151b12df66e3b0e0987bb28d6d1793051745c4902e8d053d0ac3b9bcaaff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 27
        $_trait_0 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig", 27);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig".'" cannot be used as a trait.', 27, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'image_dropzone_widget' => [$this, 'block_image_dropzone_widget'],
                'related_product_row' => [$this, 'block_related_product_row'],
                'packed_product_row' => [$this, 'block_packed_product_row'],
                'product_type_row' => [$this, 'block_product_type_row'],
                'price_summary_widget' => [$this, 'block_price_summary_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('image_dropzone_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('related_product_row', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('packed_product_row', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('product_type_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('price_summary_widget', $context, $blocks);
    }

    // line 29
    public function block_image_dropzone_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source,         // line 31
($context["attr"] ?? null), "class", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 31), "")) : ("")) . " image-dropzone")), "data-translations" => json_encode(        // line 32
($context["translations"] ?? null)), "data-locales" => json_encode(        // line 33
($context["locales"] ?? null)), "data-product-id" =>         // line 34
($context["product_id"] ?? null), "data-shop-id" =>         // line 35
($context["shop_id"] ?? null), "data-is-multi-store-active" =>         // line 36
($context["is_multi_store_active"] ?? null), "data-form-name" =>         // line 37
($context["update_form_name"] ?? null), "data-token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(        // line 38
($context["update_form_name"] ?? null))]);
        // line 40
        echo "
  ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shop_images", [], "any", true, true, false, 41)) {
            // line 42
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shop_images", [], "any", false, false, false, 42), 'row');
            echo "
  ";
        }
        // line 44
        echo "  <div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "></div>
";
    }

    // line 47
    public function block_related_product_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 48)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 48), "")) : ("")) . " related-product entity-item"))]);
        // line 49
        echo "  <li ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    <div class=\"related-product-image\">
      ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 51), 'widget');
        echo "
    </div>
    <div class=\"related-product-legend\">
      ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 54), 'widget', ["prefix" => "<i class=\"material-icons entity-item-delete\">delete</i>"]);
        echo "
    </div>
    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 56), 'widget');
        echo "
  </li>
";
    }

    // line 60
    public function block_packed_product_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "  <li class=\"packed-product entity-item\">
    <div class=\"packed-product-image\">
      ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 63), 'widget');
        echo "
    </div>
    <div class=\"packed-product-legend\">
      ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 66), 'widget', ["prefix" => "<i class=\"material-icons entity-item-delete\">delete</i>"]);
        echo "
      ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "reference", [], "any", false, false, false, 67), 'widget');
        echo "
    </div>
    <div class=\"form-group\">
      <div class=\"packed-product-quantity\">
        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 71), 'widget');
        echo "
        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 72), 'errors');
        echo "
      </div>
    </div>
    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_id", [], "any", false, false, false, 75), 'widget');
        echo "
    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "unique_identifier", [], "any", false, false, false, 76), 'widget');
        echo "
    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "combination_id", [], "any", false, false, false, 77), 'widget');
        echo "
  </li>
";
    }

    // line 81
    public function block_product_type_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "  <div class=\"product-type-selector form-group\">
    <div class=\"product-type-choices\">
      ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 84), "choices", [], "any", false, false, false, 84));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 85
            echo "        <button type=\"button\" class=\"product-type-choice btn btn-outline-secondary\" data-value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 85), "html", null, true);
            echo "\" data-description=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, true, false, 85), "data-description", [], "array", true, true, false, 85)) ? (_twig_default_filter((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, true, false, 85)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["data-description"] ?? null) : null), twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 85))) : (twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 85))), "html", null, true);
            echo "\">
          ";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 86), "html", null, true);
            echo "
          ";
            // line 87
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, true, false, 87), "icon", [], "array", true, true, false, 87)) {
                echo "<i class=\"material-icons\">";
                echo twig_escape_filter($this->env, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 87)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["icon"] ?? null) : null), "html", null, true);
                echo "</i>";
            }
            // line 88
            echo "        </button>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "    </div>
    <div class=\"product-type-description\">
      <i class=\"material-icons\">arrow_forward</i>
      <span class=\"product-type-description-content\"></span>
    </div>
    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
  </div>
";
    }

    // line 99
    public function block_price_summary_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "  <div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    <div class=\"price-summary-block\">
      <div class=\"price-summary-value price-tax-excluded-value\"></div>
      <div class=\"price-summary-value price-tax-included-value\"></div>
      <div class=\"price-summary-value unit-price-value\"></div>
    </div>
    <div class=\"price-summary-block\">
      <div class=\"price-summary-value margin-value\"></div>
      <div class=\"price-summary-value margin-rate-value\"></div>
      <div class=\"price-summary-value wholesale-price-value\"></div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  252 => 100,  248 => 99,  241 => 95,  234 => 90,  227 => 88,  221 => 87,  217 => 86,  210 => 85,  206 => 84,  202 => 82,  198 => 81,  191 => 77,  187 => 76,  183 => 75,  177 => 72,  173 => 71,  166 => 67,  162 => 66,  156 => 63,  152 => 61,  148 => 60,  141 => 56,  136 => 54,  130 => 51,  124 => 49,  121 => 48,  117 => 47,  110 => 44,  104 => 42,  102 => 41,  99 => 40,  97 => 38,  96 => 37,  95 => 36,  94 => 35,  93 => 34,  92 => 33,  91 => 32,  90 => 31,  88 => 30,  84 => 29,  80 => 99,  77 => 98,  75 => 81,  72 => 80,  70 => 60,  67 => 59,  65 => 47,  62 => 46,  60 => 29,  57 => 28,  54 => 25,  30 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\FormTheme\\product.html.twig");
    }
}
