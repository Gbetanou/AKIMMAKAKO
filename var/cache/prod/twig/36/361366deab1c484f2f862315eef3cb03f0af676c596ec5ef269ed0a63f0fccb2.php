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

/* @PrestaShop/Admin/Module/Includes/grid_notification_configure.html.twig */
class __TwigTemplate_67559b7c962b564f0ae9846ea340e5ccc0aacdaf4002b34433f125bb2ccbf125 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'addon_card' => [$this, 'block_addon_card'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/Module/Includes/grid.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid.html.twig", "@PrestaShop/Admin/Module/Includes/grid_notification_configure.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_addon_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/card_notification_configure.html.twig", "@PrestaShop/Admin/Module/Includes/grid_notification_configure.html.twig", 28)->display(twig_array_merge($context, ["module" =>         // line 30
($context["module"] ?? null), "display_type" =>         // line 31
($context["display_type"] ?? null), "origin" => ((        // line 32
array_key_exists("origin", $context)) ? (_twig_default_filter(($context["origin"] ?? null), "none")) : ("none"))]));
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/grid_notification_configure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 32,  53 => 31,  52 => 30,  50 => 28,  46 => 27,  35 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/grid_notification_configure.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\Includes\\grid_notification_configure.html.twig");
    }
}
