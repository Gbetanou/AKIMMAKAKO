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

/* @PrestaShop/Admin/Sell/Catalog/Product/Grid/grid.html.twig */
class __TwigTemplate_9028df68e27756ece8fe51a098ecba71ebd1c7083aead4f8702a1a7366ccc9db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'grid_bulk_actions_block' => [$this, 'block_grid_bulk_actions_block'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/Common/Grid/grid.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/Grid/grid.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_grid_bulk_actions_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "attributes", [], "any", false, false, false, 29), "is_empty_state", [], "any", false, false, false, 29)) {
            // line 30
            echo "  ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["categoryFilterForm"] ?? null), 'form_start', ["attr" => ["class" => "d-inline-block"]]);
            echo "
    ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["categoryFilterForm"] ?? null), 'row');
            echo "
  ";
            // line 32
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["categoryFilterForm"] ?? null), 'form_end');
            echo "
  ";
        }
        // line 34
        echo "  ";
        $this->displayParentBlock("grid_bulk_actions_block", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/Grid/grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 34,  62 => 32,  58 => 31,  53 => 30,  50 => 29,  46 => 28,  35 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/Grid/grid.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\Grid\\grid.html.twig");
    }
}
