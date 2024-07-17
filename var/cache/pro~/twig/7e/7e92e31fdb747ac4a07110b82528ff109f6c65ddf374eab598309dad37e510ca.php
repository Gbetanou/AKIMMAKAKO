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

/* @PrestaShop/Admin/layout.html.twig */
class __TwigTemplate_786c605d975010a8b7cb7f3a74cb108fc7e01bca4eef3f141bc0c31a99af36ee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'session_alert' => [$this, 'block_session_alert'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShopCore/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShopCore/Admin/layout.html.twig", "@PrestaShop/Admin/layout.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_session_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "  ";
        $macros["layout"] = $this;
        // line 29
        echo "  ";
        $this->displayParentBlock("session_alert", $context, $blocks);
        echo "
  ";
        // line 30
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 30), "flashbag", [], "any", false, false, false, 30), "peek", [0 => "psxdesign-info"], "method", false, false, false, 30)), 0))) {
            // line 31
            echo "      ";
            echo (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 31), "flashbag", [], "any", false, false, false, 31), "get", [0 => "psxdesign-info"], "method", false, false, false, 31)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null);
            echo "
  ";
        }
        // line 33
        echo "  ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 33), "flashbag", [], "any", false, false, false, 33), "peek", [0 => "psxdesign-success"], "method", false, false, false, 33)), 0))) {
            // line 34
            echo "    ";
            echo (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 34), "flashbag", [], "any", false, false, false, 34), "get", [0 => "psxdesign-success"], "method", false, false, false, 34)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null);
            echo "
  ";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 34,  66 => 33,  60 => 31,  58 => 30,  53 => 29,  50 => 28,  46 => 27,  35 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/layout.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\PrestaShop\\Admin\\layout.html.twig");
    }
}
