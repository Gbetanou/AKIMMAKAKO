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

/* @Modules/psxdesign/views/templates/admin/themes/Blocks/Partials/theme_card_container.html.twig */
class __TwigTemplate_dc6f99d4b76d303acc05c24505b48c562b88cdc0e5a60e66a841faf21dddd0f7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'card_content' => [$this, 'block_card_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "<li class=\"col mb-4\">
    ";
        // line 26
        $this->displayBlock('card_content', $context, $blocks);
        // line 28
        echo "</li>
";
    }

    // line 26
    public function block_card_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/themes/Blocks/Partials/theme_card_container.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 27,  48 => 26,  43 => 28,  41 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/admin/themes/Blocks/Partials/theme_card_container.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\admin\\themes\\Blocks\\Partials\\theme_card_container.html.twig");
    }
}
