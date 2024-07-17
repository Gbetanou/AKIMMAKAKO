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

/* @Modules/psxdesign/views/templates/admin/themes/index.html.twig */
class __TwigTemplate_154a1bc2e806c0665f2d6484a5aaf4fa4d0bb1cd656b71865b0134e98252acad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'current_theme' => [$this, 'block_current_theme'],
            'current_theme_description' => [$this, 'block_current_theme_description'],
            'current_theme_content' => [$this, 'block_current_theme_content'],
            'theme_library' => [$this, 'block_theme_library'],
            'theme_library_description' => [$this, 'block_theme_library_description'],
            'theme_library_content' => [$this, 'block_theme_library_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@Modules/psxdesign/views/templates/admin/themes/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  <div class=\"container\">
    ";
        // line 30
        $this->displayBlock('current_theme', $context, $blocks);
        // line 40
        echo "    ";
        $this->displayBlock('theme_library', $context, $blocks);
        // line 50
        echo "  </div>
  ";
        // line 51
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_computer_modal.html.twig", "@Modules/psxdesign/views/templates/admin/themes/index.html.twig", 51)->display($context);
        // line 52
        echo "  ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_web_modal.html.twig", "@Modules/psxdesign/views/templates/admin/themes/index.html.twig", 52)->display($context);
        // line 53
        echo "  ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_ftp_modal.html.twig", "@Modules/psxdesign/views/templates/admin/themes/index.html.twig", 53)->display($context);
        // line 54
        echo "  ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/delete_theme_modal.html.twig", "@Modules/psxdesign/views/templates/admin/themes/index.html.twig", 54)->display($context);
        // line 55
        echo "  ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/use_theme_modal.html.twig", "@Modules/psxdesign/views/templates/admin/themes/index.html.twig", 55)->display(twig_array_merge($context, ($context["currentlyUsedTheme"] ?? null)));
    }

    // line 30
    public function block_current_theme($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "      <div class=\"row\">
        ";
        // line 32
        $this->displayBlock('current_theme_description', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('current_theme_content', $context, $blocks);
        // line 38
        echo "      </div>
    ";
    }

    // line 32
    public function block_current_theme_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "          ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/CurrentTheme/current_theme_description.html.twig", "@Modules/psxdesign/views/templates/admin/themes/index.html.twig", 33)->display($context);
        // line 34
        echo "        ";
    }

    // line 35
    public function block_current_theme_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "          ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/CurrentTheme/current_theme_content.html.twig", "@Modules/psxdesign/views/templates/admin/themes/index.html.twig", 36)->display($context);
        // line 37
        echo "        ";
    }

    // line 40
    public function block_theme_library($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "      <div class=\"row\">
        ";
        // line 42
        $this->displayBlock('theme_library_description', $context, $blocks);
        // line 45
        echo "        ";
        $this->displayBlock('theme_library_content', $context, $blocks);
        // line 48
        echo "      </div>
    ";
    }

    // line 42
    public function block_theme_library_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "          ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/ThemeLibrary/theme_library_description.html.twig", "@Modules/psxdesign/views/templates/admin/themes/index.html.twig", 43)->display($context);
        // line 44
        echo "        ";
    }

    // line 45
    public function block_theme_library_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "          ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/ThemeLibrary/theme_library_content.html.twig", "@Modules/psxdesign/views/templates/admin/themes/index.html.twig", 46)->display($context);
        // line 47
        echo "        ";
    }

    // line 58
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/themes.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/themes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 60,  166 => 59,  162 => 58,  158 => 47,  155 => 46,  151 => 45,  147 => 44,  144 => 43,  140 => 42,  135 => 48,  132 => 45,  130 => 42,  127 => 41,  123 => 40,  119 => 37,  116 => 36,  112 => 35,  108 => 34,  105 => 33,  101 => 32,  96 => 38,  93 => 35,  91 => 32,  88 => 31,  84 => 30,  79 => 55,  76 => 54,  73 => 53,  70 => 52,  68 => 51,  65 => 50,  62 => 40,  60 => 30,  57 => 29,  53 => 28,  42 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/admin/themes/index.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\admin\\themes\\index.html.twig");
    }
}
