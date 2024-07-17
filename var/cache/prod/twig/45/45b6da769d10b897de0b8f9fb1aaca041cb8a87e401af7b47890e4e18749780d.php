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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/features.html.twig */
class __TwigTemplate_447aec1fddb2d5af3cab7595502a5dcff1c7fc363325cd6515711ec650589891 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'features_row' => [$this, 'block_features_row'],
            'feature_value_row' => [$this, 'block_feature_value_row'],
            'collection_row' => [$this, 'block_collection_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $this->displayBlock('features_row', $context, $blocks);
        // line 33
        $this->displayBlock('feature_value_row', $context, $blocks);
        // line 64
        $this->displayBlock('collection_row', $context, $blocks);
    }

    // line 26
    public function block_features_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "<h3>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Features", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h3>

  ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 30
        $this->displayBlock("form_rows", $context, $blocks);
    }

    // line 33
    public function block_feature_value_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "<div class=\"form-group row product-feature\">
    <div class=\"col-xl-3\">
      <fieldset class=\"form-group mb-0\">
        <label class=\"form-control-label\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "feature_id", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "label", [], "any", false, false, false, 37), "html", null, true);
        echo "</label>
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "feature_id", [], "any", false, false, false, 38), 'widget');
        echo "
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "feature_id", [], "any", false, false, false, 39), 'errors');
        echo "
      </fieldset>
    </div>
    <div class=\"col-xl-4\">
      <fieldset class=\"form-group mb-0\">
        <label class=\"form-control-label\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "feature_value_id", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "label", [], "any", false, false, false, 44), "html", null, true);
        echo "</label>
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "feature_value_id", [], "any", false, false, false, 45), 'widget');
        echo "
        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "feature_value_id", [], "any", false, false, false, 46), 'errors');
        echo "
      </fieldset>
    </div>
    <div class=\"col-lg-11 col-xl-4\">
      <fieldset class=\"form-group mb-0\">
        <label class=\"form-control-label\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "custom_value", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "label", [], "any", false, false, false, 51), "html", null, true);
        echo "</label>
        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "custom_value_id", [], "any", false, false, false, 52), 'widget');
        echo "
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "custom_value", [], "any", false, false, false, 53), 'widget');
        echo "
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "custom_value", [], "any", false, false, false, 54), 'errors');
        echo "
      </fieldset>
    </div>
    <div class=\"col-lg-1 col-xl-1\">
      ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 58), 'widget');
        echo "
    </div>
  </div>";
    }

    // line 64
    public function block_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row'), "data-prototype-name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 66), "name", [], "any", false, false, false, 66)]);
        // line 67
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 67)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 67), "")) : ("")) . " form-group row feature-values-collection"))]);
        // line 69
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    <div class=\"col-sm\">";
        // line 71
        $this->displayBlock("form_rows", $context, $blocks);
        // line 72
        echo "</div>
  </div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/features.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  146 => 72,  144 => 71,  139 => 69,  137 => 67,  135 => 66,  131 => 64,  124 => 58,  117 => 54,  113 => 53,  109 => 52,  105 => 51,  97 => 46,  93 => 45,  89 => 44,  81 => 39,  77 => 38,  73 => 37,  68 => 34,  64 => 33,  60 => 30,  58 => 29,  52 => 27,  48 => 26,  44 => 64,  42 => 33,  40 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/features.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\FormTheme\\features.html.twig");
    }
}
