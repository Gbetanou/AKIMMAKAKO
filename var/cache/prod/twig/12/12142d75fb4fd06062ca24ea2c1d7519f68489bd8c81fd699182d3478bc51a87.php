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

/* @Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_ftp_modal.html.twig */
class __TwigTemplate_2fff654a6ae6931dd187ff1deab625cf8dbf95695222fc21125f2421e74c5501 extends Template
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
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_ftp_modal.html.twig", "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_ftp_modal.html.twig", 26, "1858010901")->display(twig_array_merge($context, ["id" => "import_theme_from_ftp_modal", "closable" => true]));
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_ftp_modal.html.twig";
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
        return new Source("", "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_ftp_modal.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\admin\\themes\\Blocks\\Modals\\import_theme_from_ftp_modal.html.twig");
    }
}


/* @Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_ftp_modal.html.twig */
class __TwigTemplate_2fff654a6ae6931dd187ff1deab625cf8dbf95695222fc21125f2421e74c5501___1858010901 extends Template
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
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_ftp_modal.html.twig", 26);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import from FTP", [], "Modules.Psxdesign.Admin"), "html", null, true);
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
            <form id=\"import-from-ftp\" action=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["importThemeUrl"] ?? null), "html", null, true);
        echo "\" data-action=\"import-from-ftp\">
                <div class=\"alert-container\" role=\"alert\"></div>
                <label class=\"form-control-label font-weight-bold\" for=\"theme-ftp-path\">";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select archive", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</label>
                <div class=\"form-select\">
                    <select class=\"form-control custom-select\" name=\"theme-ftp-path\" id=\"theme-ftp-path\" required>
                        <option value=\"\" selected>-</option>
                        ";
        // line 46
        if (($context["themesZipFiles"] ?? null)) {
            // line 47
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["themesZipFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["themeZipFile"]) {
                // line 48
                echo "                              <option value=\"";
                echo twig_escape_filter($this->env, $context["themeZipFile"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["themeZipFile"], "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['themeZipFile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                        ";
        }
        // line 51
        echo "                    </select>
                </div>
                <p class=\"form-text mt-2\">
                    ";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field shows the ZIP files present in the \"/themes\" folder.", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
                </p>
            </form>
        </div>
    ";
    }

    // line 59
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</button>
            <button type=\"submit\" class=\"btn btn-primary import-theme\" form=\"import-from-ftp\">";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</button>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_ftp_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 62,  175 => 61,  172 => 60,  168 => 59,  159 => 54,  154 => 51,  151 => 50,  140 => 48,  135 => 47,  133 => 46,  126 => 42,  121 => 40,  118 => 39,  114 => 38,  104 => 32,  101 => 31,  97 => 30,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_ftp_modal.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\admin\\themes\\Blocks\\Modals\\import_theme_from_ftp_modal.html.twig");
    }
}
