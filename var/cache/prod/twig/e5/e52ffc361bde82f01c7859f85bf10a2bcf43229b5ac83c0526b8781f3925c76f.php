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

/* @Modules/psxdesign/views/templates/admin/logos/Blocks/Logo/logo_content.html.twig */
class __TwigTemplate_423d9a7ac52b1a770b41811f1fc300c6c12b6cf005bba80f5d72f8ace0d8a5ff extends Template
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
<div class=\"col-12 col-lg-8\">
    <div class=\"card\">
        <header>
            <nav>
                <ul class=\"nav nav-pills\" role=\"tablist\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"#logo_header\" role=\"tab\" data-toggle=\"tab\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Header", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#logo_email\" role=\"tab\" data-toggle=\"tab\">";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#logo_invoice\" role=\"tab\" data-toggle=\"tab\">";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"logo_header\">
                ";
        // line 45
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_tabs.html.twig", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Logo/logo_content.html.twig", 45)->display(twig_array_merge($context, ["form_name" => "header"]));
        // line 48
        echo "            </div>
            <div class=\"tab-pane\" id=\"logo_email\">
                ";
        // line 50
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_tabs.html.twig", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Logo/logo_content.html.twig", 50)->display(twig_array_merge($context, ["form_name" => "email"]));
        // line 53
        echo "            </div>
            <div class=\"tab-pane\" id=\"logo_invoice\">
                ";
        // line 55
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_tabs.html.twig", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Logo/logo_content.html.twig", 55)->display(twig_array_merge($context, ["form_name" => "invoice"]));
        // line 58
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/logos/Blocks/Logo/logo_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 58,  80 => 55,  76 => 53,  74 => 50,  70 => 48,  68 => 45,  58 => 38,  52 => 35,  46 => 32,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Logo/logo_content.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\admin\\logos\\Blocks\\Logo\\logo_content.html.twig");
    }
}
