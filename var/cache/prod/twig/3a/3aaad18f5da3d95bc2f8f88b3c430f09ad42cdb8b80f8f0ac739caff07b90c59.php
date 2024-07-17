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

/* @Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/use_theme_modal.html.twig */
class __TwigTemplate_d622f6d6e2b66890efbd370d2e51fda2813ce56e65e51d6f9436a174ab238b6e extends Template
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
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/use_theme_modal.html.twig", "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/use_theme_modal.html.twig", 26, "987266007")->display(twig_array_merge($context, ["id" => "use_theme_modal", "closable" => true]));
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/use_theme_modal.html.twig";
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
        return new Source("", "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/use_theme_modal.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\admin\\themes\\Blocks\\Modals\\use_theme_modal.html.twig");
    }
}


/* @Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/use_theme_modal.html.twig */
class __TwigTemplate_d622f6d6e2b66890efbd370d2e51fda2813ce56e65e51d6f9436a174ab238b6e___987266007 extends Template
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
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/use_theme_modal.html.twig", 26);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Use this theme?", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</h5>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("close", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
    }

    // line 39
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "        <div class=\"modal-body\">
            <p>";
        // line 41
        echo twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your current %currentTheme% theme will be replaced by the %new_theme% theme.", ["%currentTheme%" => twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "display_name", [], "any", false, false, false, 41), "%new_theme%" => "<span class=\"theme-name\"></span>"], "Modules.Psxdesign.Admin"), "<span>");
        echo "</p>
            ";
        // line 42
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "name", [], "any", false, false, false, 42), "classic"))) {
            // line 43
            echo "                <div class=\"alert medium-alert alert-warning\" role=\"alert\">
                    <p class=\"alert-text\">
                        ";
            // line 45
            echo twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("It is important to check the compatibility of your modules with the %new_theme% theme in a test environment.", ["%new_theme%" => "<span class=\"theme-name\"></span>"], "Modules.Psxdesign.Admin"), "<span>");
            echo "
                    </p>
                </div>
            ";
        }
        // line 49
        echo "        </div>
    ";
    }

    // line 52
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "        <div class=\"modal-footer\">
            <button
                    type=\"button\"
                    class=\"btn btn-outline-secondary\"
                    data-dismiss=\"modal\">
                ";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
            </button>
            <form action=\"\" method=\"post\" id=\"use_theme\" name=\"use_theme\">
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("enable-theme"), "html", null, true);
        echo "\"/>
                <button type=\"submit\" class=\"btn btn-primary\">
                    ";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Use", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
                </button>
            </form>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/use_theme_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 63,  163 => 61,  157 => 58,  150 => 53,  146 => 52,  141 => 49,  134 => 45,  130 => 43,  128 => 42,  124 => 41,  121 => 40,  117 => 39,  108 => 33,  104 => 32,  101 => 31,  97 => 30,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/use_theme_modal.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\admin\\themes\\Blocks\\Modals\\use_theme_modal.html.twig");
    }
}
