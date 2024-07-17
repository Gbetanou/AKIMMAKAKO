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

/* @Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_computer_modal.html.twig */
class __TwigTemplate_e5551f97fbd242f95f442d4538248849fbf00a041ba62ba338f533fd4de3ef31 extends Template
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
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_computer_modal.html.twig", "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_computer_modal.html.twig", 26, "289489009")->display(twig_array_merge($context, ["id" => "import_theme_from_computer_modal", "closable" => true]));
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_computer_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_computer_modal.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\admin\\themes\\Blocks\\Modals\\import_theme_from_computer_modal.html.twig");
    }
}


/* @Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_computer_modal.html.twig */
class __TwigTemplate_e5551f97fbd242f95f442d4538248849fbf00a041ba62ba338f533fd4de3ef31___289489009 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_computer_modal.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "        <div class=\"modal-header\">
            <h5 class=\"modal-title\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import from computer", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</h5>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
    }

    // line 38
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "        <div class=\"modal-body\">
            <form id=\"import-from-computer\" action=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["importThemeUrl"] ?? null), "html", null, true);
        echo "\" data-action=\"import-from-computer\">
                <div class=\"alert-container\" role=\"alert\"></div>
                <label class=\"form-control-label font-weight-bold\" for=\"theme-computer-file\">";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ZIP file", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</label>
                ";
        // line 43
        $this->loadTemplate("@Modules/psxdesign/views/templates/components/file_uploader.html.twig", "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_computer_modal.html.twig", 43)->display(twig_array_merge($context, ["id" => "theme-computer-file", "accept" => ".zip", "required" => true]));
        // line 48
        echo "                <p class=\"form-text mt-2\">
                    ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse the files on your computer and select the ZIP file containing your new theme.", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
                </p>
            </form>
        </div>
    ";
    }

    // line 54
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</button>
            <button type=\"submit\" class=\"btn btn-primary import-theme\" form=\"import-from-computer\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</button>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_computer_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 57,  151 => 56,  148 => 55,  144 => 54,  135 => 49,  132 => 48,  130 => 43,  126 => 42,  121 => 40,  118 => 39,  114 => 38,  104 => 32,  101 => 31,  97 => 30,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_computer_modal.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\admin\\themes\\Blocks\\Modals\\import_theme_from_computer_modal.html.twig");
    }
}
