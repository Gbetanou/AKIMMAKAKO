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

/* @Modules/psxdesign/views/templates/admin/logos/Blocks/Logo/logo_description.html.twig */
class __TwigTemplate_3708a8146e1155201e5ee23851f6a82607a53bcc8003a071a9cce513dd074494 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
<div class=\"col-12 col-lg-4\">
    <h2>";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logos", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</h2>
    <p class=\"text-muted\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The header logo appears on all pages of your store.", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
    </p>
    <p class=\"text-muted\">
        ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The recommended size for the default theme: height 40 px and width 200 px.", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
    </p>
    <p class=\"text-muted\">
        ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unless you change your mind, the same logo will be used on your emails and invoices.", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
    </p>
</div>";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/logos/Blocks/Logo/logo_description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 35,  52 => 32,  46 => 29,  41 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Logo/logo_description.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\admin\\logos\\Blocks\\Logo\\logo_description.html.twig");
    }
}
