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

/* @Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_text.html.twig */
class __TwigTemplate_28f7cf1ef7a1e22e76a38c63d9cb27db2a86eb195449e695515ad04b4c4e009b extends Template
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
<form id=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["form_name"] ?? null), "html", null, true);
        echo "_logo_text_form\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_psxdesign_logo_text_import_action");
        echo "\" method=\"post\">
    ";
        // line 27
        $context["currentStringFormat"] = (((0 === twig_compare(($context["form_name"] ?? null), "header"))) ? (twig_join_filter(($context["headerFormats"] ?? null), ", ")) : (twig_join_filter(($context["otherFormats"] ?? null), ", ")));
        // line 28
        echo "    ";
        $context["currentPreview"] = (((0 === twig_compare(($context["form_name"] ?? null), "header"))) ? (($context["headerLogoPath"] ?? null)) : ((((0 === twig_compare(($context["form_name"] ?? null), "email"))) ? (($context["mailLogoPath"] ?? null)) : (($context["invoiceLogoPath"] ?? null)))));
        // line 29
        echo "    <input type=\"hidden\" name=\"logo_for\" value=\"";
        echo twig_escape_filter($this->env, ($context["form_name"] ?? null), "html", null, true);
        echo "\"/>
    ";
        // line 30
        $this->loadTemplate("@Modules/psxdesign/views/templates/components/text_editor.html.twig", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_text.html.twig", 30)->display(twig_array_merge($context, ["fontList" =>         // line 31
($context["fonts"] ?? null), "fontVariants" =>         // line 32
($context["fontVariants"] ?? null), "fontFamily" => ["id" => (        // line 34
($context["form_name"] ?? null) . "_font_family"), "name" => "font_family", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 36
($context["logos"] ?? null), ($context["form_name"] ?? null), [], "array", false, true, false, 36), "font", [], "any", true, true, false, 36) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["logos"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["form_name"] ?? null)] ?? null) : null), "font", [], "any", false, false, false, 36)))) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["logos"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["form_name"] ?? null)] ?? null) : null), "font", [], "any", false, false, false, 36)) : (twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["fonts"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), "code", [], "any", false, false, false, 36)))], "fontStyle" => ["id" => (        // line 39
($context["form_name"] ?? null) . "_font_style"), "name" => "font_style", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 41
($context["logos"] ?? null), ($context["form_name"] ?? null), [], "array", false, true, false, 41), "style", [], "any", true, true, false, 41) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["logos"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["form_name"] ?? null)] ?? null) : null), "style", [], "any", false, false, false, 41)))) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["logos"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["form_name"] ?? null)] ?? null) : null), "style", [], "any", false, false, false, 41)) : ("normal-400"))], "fontSize" => ["id" => (        // line 44
($context["form_name"] ?? null) . "_font_size"), "name" => "font_size", "min" => 16, "max" => 100, "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 48
($context["logos"] ?? null), ($context["form_name"] ?? null), [], "array", false, true, false, 48), "fontSize", [], "any", true, true, false, 48) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["logos"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["form_name"] ?? null)] ?? null) : null), "fontSize", [], "any", false, false, false, 48)))) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = ($context["logos"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["form_name"] ?? null)] ?? null) : null), "fontSize", [], "any", false, false, false, 48)) : (16))], "fontColor" => ["id" => (        // line 51
($context["form_name"] ?? null) . "_font_color"), "name" => "font_color", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 53
($context["logos"] ?? null), ($context["form_name"] ?? null), [], "array", false, true, false, 53), "color", [], "any", true, true, false, 53) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["logos"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["form_name"] ?? null)] ?? null) : null), "color", [], "any", false, false, false, 53)))) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = ($context["logos"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[($context["form_name"] ?? null)] ?? null) : null), "color", [], "any", false, false, false, 53)) : ("#000000"))], "textArea" => ["id" => (        // line 56
($context["form_name"] ?? null) . "_textarea"), "name" => "logo_text", "ariaLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Text of your logo", [], "Modules.Psxdesign.Admin"), "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 59
($context["logos"] ?? null), ($context["form_name"] ?? null), [], "array", false, true, false, 59), "text", [], "any", true, true, false, 59) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = ($context["logos"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[($context["form_name"] ?? null)] ?? null) : null), "text", [], "any", false, false, false, 59)))) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = ($context["logos"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[($context["form_name"] ?? null)] ?? null) : null), "text", [], "any", false, false, false, 59)) : (($context["shopName"] ?? null))), "multiline" => false, "required" => true]]));
        // line 64
        echo "    <p class=\"form-text mt-2\">
        ";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Always check the final result on your store as it may differ from the preview, depending on your theme.", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
    </p>
    <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\" type=\"submit\" aria-label=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save logo image for %form%", ["%form%" => ($context["form_name"] ?? null)], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</button>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 68,  73 => 65,  70 => 64,  68 => 59,  67 => 56,  66 => 53,  65 => 51,  64 => 48,  63 => 44,  62 => 41,  61 => 39,  60 => 36,  59 => 34,  58 => 32,  57 => 31,  56 => 30,  51 => 29,  48 => 28,  46 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_text.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\admin\\logos\\Blocks\\Partials\\logo_form_text.html.twig");
    }
}
