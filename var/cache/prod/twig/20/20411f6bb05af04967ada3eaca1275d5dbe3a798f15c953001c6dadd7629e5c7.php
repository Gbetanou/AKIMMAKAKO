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

/* @Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_image.html.twig */
class __TwigTemplate_fc18b11896d26545824938775e9059ec6b0ff4f2266068d5656e04a5ed822568 extends Template
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
        echo "_logo_image_form\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_psxdesign_logo_image_import_action");
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
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
        if ((0 === twig_compare(($context["currentPreview"] ?? null),  !null))) {
            // line 31
            echo "    <div class=\"form-group\">
        <label class=\"form-control-label font-weight-bold\">";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Current logo", [], "Modules.Psxdesign.Admin"), "html", null, true);
            echo "</label>
        <div class=\"d-flex justify-content-center align-items-md-center border rounded p-3\">
            <img class=\"preview-logo\" src=\"";
            // line 34
            echo twig_escape_filter($this->env, ($context["currentPreview"] ?? null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Current logo preview", [], "Modules.Psxdesign.Admin"), "html", null, true);
            echo "\" />
        </div>
    </div>
    ";
        }
        // line 38
        echo "    <div class=\"form-group\">
        ";
        // line 39
        $context["file_uploader_name"] = (((0 === twig_compare(($context["form_name"] ?? null), "header"))) ? ("PS_LOGO") : ((((0 === twig_compare(($context["form_name"] ?? null), "email"))) ? ("PS_LOGO_MAIL") : ("PS_LOGO_INVOICE"))));
        // line 40
        echo "        <label class=\"form-control-label font-weight-bold\" for=\"";
        echo twig_escape_filter($this->env, ($context["file_uploader_name"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import logo", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</label>
        ";
        // line 41
        $this->loadTemplate("@Modules/psxdesign/views/templates/components/file_uploader.html.twig", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_image.html.twig", 41)->display(twig_array_merge($context, ["id" =>         // line 42
($context["file_uploader_name"] ?? null), "accept" =>         // line 43
($context["currentStringFormat"] ?? null), "required" => true]));
        // line 46
        echo "        <p class=\"form-text mt-2\">
            ";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Accepted formats: %formats%.", ["%formats%" => ($context["currentStringFormat"] ?? null)], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
        </p>
    </div>
    <div class=\"alert-container\" role=\"alert\"></div>
    <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\" type=\"submit\" aria-label=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save logo image for %form%", ["%form%" => ($context["form_name"] ?? null)], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</button>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 52,  94 => 47,  91 => 46,  89 => 43,  88 => 42,  87 => 41,  80 => 40,  78 => 39,  75 => 38,  66 => 34,  61 => 32,  58 => 31,  56 => 30,  51 => 29,  48 => 28,  46 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_image.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\admin\\logos\\Blocks\\Partials\\logo_form_image.html.twig");
    }
}
