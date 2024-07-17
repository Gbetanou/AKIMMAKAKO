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

/* @Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/delete_theme_modal.html.twig */
class __TwigTemplate_197b743b69cffd4d1cb03045bb0aacd1dd4270582d2716ec58c2386dba843c10 extends Template
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
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/delete_theme_modal.html.twig", "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/delete_theme_modal.html.twig", 26, "2146642430")->display(twig_array_merge($context, ["id" => "delete_theme_modal", "closable" => true]));
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/delete_theme_modal.html.twig";
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
        return new Source("", "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/delete_theme_modal.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\admin\\themes\\Blocks\\Modals\\delete_theme_modal.html.twig");
    }
}


/* @Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/delete_theme_modal.html.twig */
class __TwigTemplate_197b743b69cffd4d1cb03045bb0aacd1dd4270582d2716ec58c2386dba843c10___2146642430 extends Template
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
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/delete_theme_modal.html.twig", 26);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete this theme?", [], "Modules.Psxdesign.Admin"), "html", null, true);
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
            <p>";
        // line 40
        echo twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to delete the %theme% theme. This action is irreversible. ", ["%theme%" => "<span class=\"theme-name\"></span>"], "Modules.Psxdesign.Admin"), "<span>");
        echo "</p>
        </div>
    ";
    }

    // line 43
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</button>
            <form action=\"\" method=\"post\" id=\"delete_theme\" name=\"delete_theme\">
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-theme"), "html", null, true);
        echo "\"/>
                <button type=\"submit\" class=\"btn btn-danger\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</button>
            </form>

        </div>
    ";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/delete_theme_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 48,  140 => 47,  135 => 45,  132 => 44,  128 => 43,  121 => 40,  118 => 39,  114 => 38,  104 => 32,  101 => 31,  97 => 30,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/delete_theme_modal.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\admin\\themes\\Blocks\\Modals\\delete_theme_modal.html.twig");
    }
}
