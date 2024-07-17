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

/* @PrestaShop/Admin/Sell/Catalog/Product/Blocks/header.html.twig */
class __TwigTemplate_2d1eacfe3dcb012589f6adbc1577839ffc6356554dda673a2d5f7b0306fc8afd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'product_header_form' => [$this, 'block_product_header_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "<div class=\"product-header-v2\">
  <div class=\"product-header-cover\">
    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productForm"] ?? null), "header", [], "any", false, false, false, 27), "cover_thumbnail", [], "any", false, false, false, 27), 'row');
        echo "
  </div>
  <div class=\"product-header-form\">
    ";
        // line 30
        $this->displayBlock('product_header_form', $context, $blocks);
        // line 33
        echo "  </div>

  ";
        // line 35
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header-details.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header.html.twig", 35)->display($context);
        // line 36
        echo "</div>
";
    }

    // line 30
    public function block_product_header_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["productForm"] ?? null), "header", [], "any", false, false, false, 31), 'row');
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 31,  61 => 30,  56 => 36,  54 => 35,  50 => 33,  48 => 30,  42 => 27,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\Blocks\\header.html.twig");
    }
}
