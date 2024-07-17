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

/* @Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_web_modal.html.twig */
class __TwigTemplate_2bd8b08020d0063aed3b6b44c8526830b873a02cc7c92fb969a4e71ae1847b70 extends Template
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
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_web_modal.html.twig", "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_web_modal.html.twig", 26, "1519610758")->display(twig_array_merge($context, ["id" => "import_theme_from_web_modal", "closable" => true]));
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_web_modal.html.twig";
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
        return new Source("", "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_web_modal.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\admin\\themes\\Blocks\\Modals\\import_theme_from_web_modal.html.twig");
    }
}


/* @Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_web_modal.html.twig */
class __TwigTemplate_2bd8b08020d0063aed3b6b44c8526830b873a02cc7c92fb969a4e71ae1847b70___1519610758 extends Template
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
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_web_modal.html.twig", 26);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import from web", [], "Modules.Psxdesign.Admin"), "html", null, true);
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
            <form id=\"import-from-web\" action=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["importThemeUrl"] ?? null), "html", null, true);
        echo "\" data-action=\"import-from-web\">
                <div class=\"alert-container\" role=\"alert\"></div>
                <label class=\"form-control-label font-weight-bold\" for=\"theme-web-path\">";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Archive URL", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</label>
                <input class=\"form-control\" type=\"url\" name=\"theme-web-path\" id=\"theme-web-path\" required>
                <p class=\"form-text mt-2\">
                    ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Specify the full URL of the ZIP file that contains your new theme. For example, \"http://example.com/files/theme.zip\".", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
                </p>
            </form>
        </div>
    ";
    }

    // line 50
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</button>
            <button type=\"submit\" class=\"btn btn-primary import-theme\" form=\"import-from-web\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</button>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_web_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 53,  148 => 52,  145 => 51,  141 => 50,  132 => 45,  126 => 42,  121 => 40,  118 => 39,  114 => 38,  104 => 32,  101 => 31,  97 => 30,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_web_modal.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\admin\\themes\\Blocks\\Modals\\import_theme_from_web_modal.html.twig");
    }
}
