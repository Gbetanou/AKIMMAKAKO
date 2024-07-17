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

/* @Modules/psxdesign/views/templates/admin/themes/Blocks/ThemeLibrary/theme_library_description.html.twig */
class __TwigTemplate_376fe85598a5c1101e209f6092714b411e7f5888eeff6af24a037acc4cd32131 extends Template
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
<div class=\"col-12 col-lg-4 mb-3\">
    <h2>";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Theme library", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</h2>
    <p class=\"text-muted\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose the default Classic theme for a simple and minimalist store.", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
    </p>
    <p class=\"text-muted\">
        ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can choose other themes with more advanced customization from this list of themes.", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
    </p>
    <button
            class=\"btn btn-outline-secondary dropdown-toggle\"
            type=\"button\"
            id=\"add-theme\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
    >
        ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import theme", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
    </button>
    <div
            class=\"ps-dropdown-menu dropdown-menu\"
            aria-labelledby=\"add-theme\"
    >
        <button class=\"dropdown-item\" data-toggle=\"modal\" data-target=\"#import_theme_from_computer_modal\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import from computer", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</button>
        <button class=\"dropdown-item\" data-toggle=\"modal\" data-target=\"#import_theme_from_web_modal\">";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import from web", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</button>
        <button class=\"dropdown-item\" data-toggle=\"modal\" data-target=\"#import_theme_from_ftp_modal\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import from FTP", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</button>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/themes/Blocks/ThemeLibrary/theme_library_description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 50,  78 => 49,  74 => 48,  65 => 42,  52 => 32,  46 => 29,  41 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/admin/themes/Blocks/ThemeLibrary/theme_library_description.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\admin\\themes\\Blocks\\ThemeLibrary\\theme_library_description.html.twig");
    }
}
