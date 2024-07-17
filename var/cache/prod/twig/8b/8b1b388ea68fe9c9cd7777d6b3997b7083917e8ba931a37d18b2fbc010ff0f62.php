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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/specific_prices.html.twig */
class __TwigTemplate_8e2fd0378d6edd37fc2b6d7b011cf7612f8239719fc2617bf2cfda1caaa3a4d4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'specific_prices_widget' => [$this, 'block_specific_prices_widget'],
            'specific_prices_list' => [$this, 'block_specific_prices_list'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/specific_prices.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_specific_prices_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "  <div id=\"specific-prices-container\">
    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    ";
        // line 30
        $this->displayBlock("specific_prices_list", $context, $blocks);
        echo "
  </div>
";
    }

    // line 34
    public function block_specific_prices_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Product/SpecificPrice/Blocks/list.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/specific_prices.html.twig", 35)->display($context);
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/specific_prices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 35,  65 => 34,  58 => 30,  54 => 29,  51 => 28,  47 => 27,  36 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/specific_prices.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\FormTheme\\specific_prices.html.twig");
    }
}
