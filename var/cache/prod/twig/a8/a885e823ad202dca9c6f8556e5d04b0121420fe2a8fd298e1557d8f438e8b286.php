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

/* @Modules/psxdesign/views/templates/admin/themes/Blocks/CurrentTheme/current_theme_content.html.twig */
class __TwigTemplate_fb25621ce88afc34b206efd447184db1f5727891f2e0c29d73efb0807bd574fe extends Template
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
";
        // line 27
        echo "<div class=\"col-12 col-lg-8\">
    <section class=\"card\">
        <header class=\"p-3\">
            <div class=\"d-flex justify-content-between align-items-start\">
                <div>
                    <h3 class=\"h4 mb-1\">
                        ";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "display_name", [], "any", true, true, false, 33) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "display_name", [], "any", false, false, false, 33)))) {
            // line 34
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "display_name", [], "any", false, false, false, 34), "html", null, true);
            echo "
                        ";
        } else {
            // line 36
            echo "                            &nbsp;
                        ";
        }
        // line 38
        echo "                    </h3>
                    <span class=\"small-text text-muted\">
                        ";
        // line 40
        if ((twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "version", [], "any", true, true, false, 40) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "version", [], "any", false, false, false, 40)))) {
            // line 41
            echo "                            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("v%version%", ["%version%" => twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "version", [], "any", false, false, false, 41)], "Modules.Psxdesign.Admin"), "html", null, true);
            echo " -
                        ";
        }
        // line 43
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "author", [], "any", false, true, false, 43), "name", [], "any", true, true, false, 43) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "author", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43)))) {
            // line 44
            echo "                            ";
            echo twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Developed by %author%", ["%author%" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 45
($context["currentlyUsedTheme"] ?? null), "author", [], "any", false, true, false, 45), "url", [], "any", true, true, false, 45)) ? ((((("<a href=\"" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 46
($context["currentlyUsedTheme"] ?? null), "author", [], "any", false, false, false, 46), "url", [], "any", false, false, false, 46)) . "\" target=\"_blank\" rel=\"noopener\">") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "author", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46)) . "</a>")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 47
($context["currentlyUsedTheme"] ?? null), "author", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47)))], "Modules.Psxdesign.Admin"), "<a>");
            // line 48
            echo "
                        ";
        }
        // line 50
        echo "                        ";
        if ((( !twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "version", [], "any", true, true, false, 50) || (null === twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "version", [], "any", false, false, false, 50))) && ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "author", [], "any", false, true, false, 50), "name", [], "any", true, true, false, 50) || (null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "author", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50))))) {
            // line 51
            echo "                            &nbsp;
                        ";
        }
        // line 53
        echo "                    </span>
                </div>
                <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "customizeUrl", [], "any", false, false, false, 55), "html", null, true);
        echo "\" class=\"btn btn-primary flex-shrink-0 ml-2\"><i class=\"material-icons\">edit</i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customize", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</a>
            </div>
        </header>
        <div class=\"container\">
            <div class=\"theme-preview-container\">
                <div class=\"theme-preview theme-preview--desktop\">
                    ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "preview", [], "any", true, true, false, 61)) {
            // line 62
            echo "                        <img
                            src=\"";
            // line 63
            echo twig_escape_filter($this->env, ($context["baseShopUrl"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "preview", [], "any", false, false, false, 63), "html", null, true);
            echo "\"
                            alt=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("desktop preview of the theme %theme%", ["%theme%" => (((twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "display_name", [], "any", true, true, false, 64) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "display_name", [], "any", false, false, false, 64)))) ? (twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "display_name", [], "any", false, false, false, 64)) : (""))], "Modules.Psxdesign.Admin"), "html", null, true);
            echo "\"
                        />
                    ";
        }
        // line 67
        echo "                </div>
                ";
        // line 68
        if ((twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "previewMobile", [], "any", true, true, false, 68) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "previewMobile", [], "any", false, false, false, 68)))) {
            // line 69
            echo "                    <div class=\"theme-preview-mobile-wrapper\">
                        <div class=\"theme-preview theme-preview--mobile\">
                            <img src=\"";
            // line 71
            echo twig_escape_filter($this->env, ($context["baseShopUrl"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "previewMobile", [], "any", false, false, false, 71), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mobile preview of the theme %theme%", ["%theme%" => twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "display_name", [], "any", false, false, false, 71)], "Modules.Psxdesign.Admin"), "html", null, true);
            echo "\" />
                        </div>
                    </div>
                ";
        }
        // line 75
        echo "            </div>
        </div>
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/themes/Blocks/CurrentTheme/current_theme_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 75,  132 => 71,  128 => 69,  126 => 68,  123 => 67,  117 => 64,  112 => 63,  109 => 62,  107 => 61,  96 => 55,  92 => 53,  88 => 51,  85 => 50,  81 => 48,  79 => 47,  78 => 46,  77 => 45,  75 => 44,  72 => 43,  66 => 41,  64 => 40,  60 => 38,  56 => 36,  50 => 34,  48 => 33,  40 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/admin/themes/Blocks/CurrentTheme/current_theme_content.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\admin\\themes\\Blocks\\CurrentTheme\\current_theme_content.html.twig");
    }
}
