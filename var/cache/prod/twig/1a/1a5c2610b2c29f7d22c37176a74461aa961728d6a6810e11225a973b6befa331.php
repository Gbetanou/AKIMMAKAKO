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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/header.html.twig */
class __TwigTemplate_0c943de4d7e002f5386da25609efccc593ed7d604e1237d7f75f814e852a434d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 26
        $_trait_0 = $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/header.html.twig", 26);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig".'" cannot be used as a trait.', 26, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["product_type_row"])) {
            throw new RuntimeError('Block "product_type_row" is not defined in trait "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig".', 26, $this->source);
        }

        $_trait_0_blocks["base_product_type_row"] = $_trait_0_blocks["product_type_row"]; unset($_trait_0_blocks["product_type_row"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'product_type_row' => [$this, 'block_product_type_row'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('product_type_row', $context, $blocks);
    }

    public function block_product_type_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  <div class=\"product-type-preview\">
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 31
            echo "      ";
            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                // line 32
                echo "        <i class=\"material-icons product-type-preview-icon\">";
                echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 32)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["icon"] ?? null) : null), "html", null, true);
                echo "</i>
        <span class=\"product-type-preview-label\">";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 33), "html", null, true);
                echo "</span>
      ";
            }
            // line 35
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    <div id=\"product-type-selector-modal-content\" class=\"d-none\">
      ";
        // line 37
        $this->displayBlock("base_product_type_row", $context, $blocks);
        echo "
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  95 => 36,  89 => 35,  84 => 33,  79 => 32,  76 => 31,  72 => 30,  69 => 29,  62 => 28,  59 => 27,  56 => 25,  30 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/header.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\FormTheme\\header.html.twig");
    }
}
