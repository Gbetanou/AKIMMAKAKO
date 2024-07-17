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

/* @PrestaShop/Admin/Sell/Catalog/Product/create.html.twig */
class __TwigTemplate_7e38ed165407f843f5c56ca058e16f7bfe8dbd6fbf9deb463a3468930e5371f3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'product_creation_form' => [$this, 'block_product_creation_form'],
            'product_rest' => [$this, 'block_product_rest'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $context["legacyBaseLayout"] = ((((array_key_exists("lightDisplay", $context)) ? (_twig_default_filter(($context["lightDisplay"] ?? null), false)) : (false))) ? ("light_display_layout.tpl") : ("layout.tpl"));
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/create.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/product.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 33
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["productForm"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal create-product-form justify-content-md-center product-form", "novalidate" => "novalidate"]]);
        echo "
    ";
        // line 35
        $this->displayBlock('product_creation_form', $context, $blocks);
        // line 38
        echo "
  ";
        // line 39
        $this->displayBlock('product_rest', $context, $blocks);
    }

    // line 35
    public function block_product_creation_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["productForm"] ?? null), 'row');
        echo "
    ";
    }

    // line 39
    public function block_product_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["productForm"] ?? null), 'form_end');
        echo "
  ";
    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/product_create.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 47,  112 => 45,  108 => 44,  101 => 40,  97 => 39,  90 => 36,  86 => 35,  82 => 39,  79 => 38,  77 => 35,  72 => 34,  68 => 33,  62 => 30,  57 => 29,  53 => 28,  48 => 26,  46 => 25,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/create.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\create.html.twig");
    }
}
