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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/customizations.html.twig */
class __TwigTemplate_01c96724d9ac778369eba60d8276dcc3148a1282de15912a6db3fbfd693f8682 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'customization_field_row' => [$this, 'block_customization_field_row'],
            'collection_row' => [$this, 'block_collection_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $this->displayBlock('customization_field_row', $context, $blocks);
        // line 47
        $this->displayBlock('collection_row', $context, $blocks);
    }

    // line 26
    public function block_customization_field_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "<li class=\"form-group row customization-field-row\">
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 28), 'widget');
        echo "
    <div class=\"col-md-5\">
      ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 30), 'widget');
        echo "
      ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 31), 'errors');
        echo "
    </div>
    <div class=\"col-md-4\">
      ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 34), 'widget');
        echo "
      ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 35), 'errors');
        echo "
    </div>
    <div class=\"col-md-1\">
      ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "remove", [], "any", false, false, false, 38), 'widget');
        echo "
    </div>
    <div class=\"col-md-2\">
      ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "required", [], "any", false, false, false, 41), 'widget');
        echo "
      ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "required", [], "any", false, false, false, 42), 'errors');
        echo "
    </div>
  </li>";
    }

    // line 47
    public function block_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row'), "data-prototype-name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 48), "name", [], "any", false, false, false, 48)]);
        // line 49
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 49), "")) : ("")) . " list-unstyled"))]);
        // line 50
        echo "<ul ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        // line 51
        $this->displayBlock("form_rows", $context, $blocks);
        // line 52
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/customizations.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  108 => 52,  106 => 51,  102 => 50,  100 => 49,  98 => 48,  94 => 47,  87 => 42,  83 => 41,  77 => 38,  71 => 35,  67 => 34,  61 => 31,  57 => 30,  52 => 28,  49 => 27,  45 => 26,  41 => 47,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/customizations.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\FormTheme\\customizations.html.twig");
    }
}
