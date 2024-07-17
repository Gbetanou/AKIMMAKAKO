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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product_seo.html.twig */
class __TwigTemplate_96f83731313768cb3e71968beebb958f126b541af966ca5579fa90e93c2a6e8b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 27
        $_trait_0 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product_seo.html.twig", 27);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig".'" cannot be used as a trait.', 27, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                '_product_seo_link_rewrite_widget' => [$this, 'block__product_seo_link_rewrite_widget'],
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
        $this->displayBlock('_product_seo_link_rewrite_widget', $context, $blocks);
    }

    public function block__product_seo_link_rewrite_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
  <button type=\"button\" class=\"reset-link-rewrite btn btn-outline-secondary\">";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset URL", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product_seo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 31,  63 => 30,  56 => 29,  53 => 28,  50 => 25,  30 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product_seo.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\FormTheme\\product_seo.html.twig");
    }
}
