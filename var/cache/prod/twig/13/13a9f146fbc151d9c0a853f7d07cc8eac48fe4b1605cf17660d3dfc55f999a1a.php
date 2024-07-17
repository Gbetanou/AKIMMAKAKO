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

/* @PrestaShop/Admin/Sell/Catalog/Product/Blocks/footer.html.twig */
class __TwigTemplate_429eb31ef2fe0680869bc1c70c636d92eb589cdf112872c2f5d1c70fe79af438 extends Template
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
        echo "
<div class=\"product-footer\">
  ";
        // line 27
        $this->displayBlock('product_header_form', $context, $blocks);
        // line 41
        echo "</div>
";
    }

    // line 27
    public function block_product_header_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    <div class=\"product-footer-container\">
      ";
        // line 30
        echo "      <div class=\"form-group product-footer-right\">
        <div id=\"product-footer-right\" class=\"footer-buttons-container\">
          ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productForm"] ?? null), "footer", [], "any", false, false, false, 32), "cancel", [], "any", false, false, false, 32), 'row');
        echo "
          ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productForm"] ?? null), "footer", [], "any", false, false, false, 33), "save", [], "any", false, false, false, 33), 'row');
        echo "
        </div>
      </div>

      ";
        // line 38
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["productForm"] ?? null), "footer", [], "any", false, false, false, 38), 'row');
        echo "
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  71 => 38,  64 => 33,  60 => 32,  56 => 30,  53 => 28,  49 => 27,  44 => 41,  42 => 27,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/footer.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\Blocks\\footer.html.twig");
    }
}
