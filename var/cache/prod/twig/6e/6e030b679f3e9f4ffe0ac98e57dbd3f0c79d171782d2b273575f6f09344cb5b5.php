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

/* @Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_tabs.html.twig */
class __TwigTemplate_588bab11d3a782108f32e5d740bcd69ba8d803b94e169bf7a6f1bc6edae8bf79 extends Template
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
        // line 26
        if ((!twig_in_filter("svg", twig_last($this->env, twig_split_filter($this->env, ($context["headerLogoPath"] ?? null), "."))) && ((0 === twig_compare(($context["form_name"] ?? null), "email")) || (0 === twig_compare(($context["form_name"] ?? null), "invoice"))))) {
            // line 27
            echo "    <form id=\"";
            echo twig_escape_filter($this->env, (($context["form_name"] ?? null) . "_use_header_logo"), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (($context["form_name"] ?? null) . "_use_header_logo"), "html", null, true);
            echo "\" method=\"post\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_psxdesign_logo_apply_header_logo_action");
            echo "\" >
        <input type=\"hidden\" name=\"logo_for\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, ($context["form_name"] ?? null), "html", null, true);
            echo "\"/>
        <div class=\"form-group\">
            <div class=\"md-checkbox\">
                ";
            // line 31
            $context["use_same_as_header_name"] = (($context["form_name"] ?? null) . "_use_same_as_header");
            // line 32
            echo "                <label for=\"";
            echo twig_escape_filter($this->env, ($context["use_same_as_header_name"] ?? null), "html", null, true);
            echo "\">
                    <input type=\"checkbox\" name=\"use_same_as_header\" id=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["use_same_as_header_name"] ?? null), "html", null, true);
            echo "\"
                           ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["logos"] ?? null), ($context["form_name"] ?? null), [], "array", false, true, false, 34), "useHeaderLogo", [], "array", true, true, false, 34)) {
                // line 35
                echo "                               ";
                echo (((($__internal_compile_0 = (($__internal_compile_1 = ($context["logos"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["form_name"] ?? null)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["useHeaderLogo"] ?? null) : null)) ? ("checked") : (""));
                echo "
                           ";
            }
            // line 37
            echo "                    >
                    <i class=\"md-checkbox-control\"></i>
                    ";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" Use header logo", [], "Modules.Psxdesign.Admin"), "html", null, true);
            echo "
                </label>
            </div>
        </div>
        <div class=\"d-flex justify-content-end\">
            <button class=\"btn btn-primary hidden\" type=\"submit\" aria-label=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save the use of header logo for %form%", ["%form%" => ($context["form_name"] ?? null)], "Modules.Psxdesign.Admin"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Modules.Psxdesign.Admin"), "html", null, true);
            echo "</button>
        </div>
    </form>
";
        }
        // line 48
        echo "
<div id=\"";
        // line 49
        echo twig_escape_filter($this->env, (($context["form_name"] ?? null) . "_logo_forms"), "html", null, true);
        echo "\">
    <div class=\"form-control-label font-weight-bold mb-1\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logo type", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</div>
    <div class=\"radio-button-link-container nav\" role=\"tablist\">
        ";
        // line 52
        $context["logo_image_tab"] = (($context["form_name"] ?? null) . "_logo_image");
        // line 53
        echo "        ";
        $context["logo_text_tab"] = (($context["form_name"] ?? null) . "_logo_text");
        // line 54
        echo "        ";
        $context["currentLogoIsImage"] = ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["logos"] ?? null), ($context["form_name"] ?? null), [], "array", false, true, false, 54), "logoType", [], "any", true, true, false, 54) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["logos"] ?? null), ($context["form_name"] ?? null), [], "array", false, true, false, 54), "logoType", [], "any", true, true, false, 54) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["logos"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["form_name"] ?? null)] ?? null) : null), "logoType", [], "any", false, false, false, 54), "image"))));
        // line 55
        echo "        <a class=\"nav-link radio-button-link ";
        echo ((($context["currentLogoIsImage"] ?? null)) ? ("active") : (""));
        echo "\" href=\"";
        echo twig_escape_filter($this->env, ("#" . ($context["logo_image_tab"] ?? null)), "html", null, true);
        echo "\" data-toggle=\"tab\">
            <div class=\"radio-button-link__radio\"></div>
            <span class=\"material-icons radio-button-link__icon\">
                            image
                        </span>
            <div class=\"radio-button-link__text\">
                <span class=\"radio-button-link__label\">";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Image", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</span>
                <span class=\"radio-button-link__help\">";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import logo image", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</span>
            </div>
        </a>
        <a class=\"nav-link radio-button-link ";
        // line 65
        echo (( !($context["currentLogoIsImage"] ?? null)) ? ("active") : (""));
        echo "\" href=\"";
        echo twig_escape_filter($this->env, ("#" . ($context["logo_text_tab"] ?? null)), "html", null, true);
        echo "\" data-toggle=\"tab\">
            <div class=\"radio-button-link__radio\"></div>
            <span class=\"material-icons radio-button-link__icon\">
                            notes
                        </span>
            <div class=\"radio-button-link__text\">
                <span class=\"radio-button-link__label\">";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Text", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</span>
                <span class=\"radio-button-link__help\">";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create text logo", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</span>
            </div>
        </a>
    </div>
    <div class=\"tab-content p-0 pt-3\">
        <div class=\"tab-pane ";
        // line 77
        echo ((($context["currentLogoIsImage"] ?? null)) ? ("active") : (""));
        echo "\" id=\"";
        echo twig_escape_filter($this->env, ($context["logo_image_tab"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 78
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_image.html.twig", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_tabs.html.twig", 78)->display(twig_array_merge($context, ["form_name" =>         // line 79
($context["form_name"] ?? null)]));
        // line 81
        echo "        </div>
        <div class=\"tab-pane ";
        // line 82
        echo (( !($context["currentLogoIsImage"] ?? null)) ? ("active") : (""));
        echo "\" id=\"";
        echo twig_escape_filter($this->env, ($context["logo_text_tab"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 83
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_text.html.twig", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_tabs.html.twig", 83)->display(twig_array_merge($context, ["form_name" =>         // line 84
($context["form_name"] ?? null)]));
        // line 86
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 86,  181 => 84,  180 => 83,  174 => 82,  171 => 81,  169 => 79,  168 => 78,  162 => 77,  154 => 72,  150 => 71,  139 => 65,  133 => 62,  129 => 61,  117 => 55,  114 => 54,  111 => 53,  109 => 52,  104 => 50,  100 => 49,  97 => 48,  88 => 44,  80 => 39,  76 => 37,  70 => 35,  68 => 34,  64 => 33,  59 => 32,  57 => 31,  51 => 28,  42 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_tabs.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\admin\\logos\\Blocks\\Partials\\logo_form_tabs.html.twig");
    }
}
