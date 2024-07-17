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

/* @PrestaShop/Admin/Sell/Catalog/Product/edit.html.twig */
class __TwigTemplate_b5ed0c54f40bad21b87c67b91cf8b3f1e1f52e4e1abf0d3c45db8e50b44e42d4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'product_header' => [$this, 'block_product_header'],
            'product_footer' => [$this, 'block_product_footer'],
            'product_rest' => [$this, 'block_product_rest'],
            'category_tree_form' => [$this, 'block_category_tree_form'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/edit.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("themes/new-theme/public/product" . ($context["rtl_suffix"] ?? null)) . ".css")), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 33
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 36
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "<div class=\"product-page-v2\">
  ";
        // line 38
        $context["productType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productForm"] ?? null), "vars", [], "any", false, false, false, 38), "product_type", [], "any", false, false, false, 38);
        // line 39
        echo "  ";
        $context["productId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productForm"] ?? null), "vars", [], "any", false, false, false, 39), "product_id", [], "any", false, false, false, 39);
        // line 40
        echo "  ";
        $context["shopId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productForm"] ?? null), "vars", [], "any", false, false, false, 40), "shop_id", [], "any", false, false, false, 40);
        // line 41
        echo "
  <div class=\"header-toolbar d-print-none\">
    ";
        // line 43
        echo $this->extensions['PrestaShopBundle\Twig\Extension\MultistoreComponentsExtension']->getMultistoreProductHeader(($context["productId"] ?? null));
        echo "
  </div>

  ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["productForm"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal product-page justify-content-md-center product-form", "novalidate" => "novalidate", "data-product-id" =>         // line 49
($context["productId"] ?? null), "data-shop-id" =>         // line 50
($context["shopId"] ?? null), "data-product-type" =>         // line 51
($context["productType"] ?? null)]]);
        // line 52
        echo "

  ";
        // line 55
        echo "  ";
        $this->displayBlock('product_header', $context, $blocks);
        // line 58
        echo "
  ";
        // line 60
        echo "  ";
        $this->displayBlock('product_footer', $context, $blocks);
        // line 67
        echo "
  ";
        // line 68
        $this->displayBlock("session_alert", $context, $blocks);
        echo "

  <div id=\"contextual-notification-box\"></div>

  ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["productForm"] ?? null), 'widget');
        echo "

  ";
        // line 74
        $this->displayBlock('product_rest', $context, $blocks);
        // line 77
        echo "
  ";
        // line 78
        $this->displayBlock('category_tree_form', $context, $blocks);
        // line 81
        echo "</div>
";
    }

    // line 55
    public function block_product_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "    ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header.html.twig", ["productForm" => ($context["productForm"] ?? null)]);
        echo "
  ";
    }

    // line 60
    public function block_product_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "    ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/footer.html.twig", ["productForm" =>         // line 62
($context["productForm"] ?? null), "editable" =>         // line 63
($context["editable"] ?? null), "productId" =>         // line 64
($context["productId"] ?? null)]);
        // line 65
        echo "
  ";
    }

    // line 74
    public function block_product_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["productForm"] ?? null), 'form_end');
        echo "
  ";
    }

    // line 78
    public function block_category_tree_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["categoryTreeSelectorForm"] ?? null), 'row');
        echo "
  ";
    }

    // line 84
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/product_edit.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 87,  196 => 85,  192 => 84,  185 => 79,  181 => 78,  174 => 75,  170 => 74,  165 => 65,  163 => 64,  162 => 63,  161 => 62,  159 => 61,  155 => 60,  148 => 56,  144 => 55,  139 => 81,  137 => 78,  134 => 77,  132 => 74,  127 => 72,  120 => 68,  117 => 67,  114 => 60,  111 => 58,  108 => 55,  104 => 52,  102 => 51,  101 => 50,  100 => 49,  99 => 46,  93 => 43,  89 => 41,  86 => 40,  83 => 39,  81 => 38,  78 => 37,  74 => 36,  68 => 33,  62 => 29,  57 => 28,  53 => 27,  42 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/edit.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\edit.html.twig");
    }
}
