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

/* @Modules/psxdesign/views/templates/admin/logos/index.html.twig */
class __TwigTemplate_1f36a8f8529d8dc6eaa7774416d042e7f22ad29c59d3d72d483abe6377dbfbba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'logo' => [$this, 'block_logo'],
            'logo_description' => [$this, 'block_logo_description'],
            'logo_content' => [$this, 'block_logo_content'],
            'favicon' => [$this, 'block_favicon'],
            'favicon_description' => [$this, 'block_favicon_description'],
            'favicon_content' => [$this, 'block_favicon_content'],
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
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@Modules/psxdesign/views/templates/admin/logos/index.html.twig", 26);
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
        $this->displayBlock('logo', $context, $blocks);
        // line 40
        echo "    ";
        $this->displayBlock('favicon', $context, $blocks);
        // line 50
        echo "  </div>
";
    }

    // line 30
    public function block_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "      <div class=\"row\">
        ";
        // line 32
        $this->displayBlock('logo_description', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('logo_content', $context, $blocks);
        // line 38
        echo "      </div>
    ";
    }

    // line 32
    public function block_logo_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "          ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/logos/Blocks/Logo/logo_description.html.twig", "@Modules/psxdesign/views/templates/admin/logos/index.html.twig", 33)->display($context);
        // line 34
        echo "        ";
    }

    // line 35
    public function block_logo_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "          ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/logos/Blocks/Logo/logo_content.html.twig", "@Modules/psxdesign/views/templates/admin/logos/index.html.twig", 36)->display($context);
        // line 37
        echo "        ";
    }

    // line 40
    public function block_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "      <div class=\"row\">
        ";
        // line 42
        $this->displayBlock('favicon_description', $context, $blocks);
        // line 45
        echo "        ";
        $this->displayBlock('favicon_content', $context, $blocks);
        // line 48
        echo "      </div>
    ";
    }

    // line 42
    public function block_favicon_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "          ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/logos/Blocks/Favicon/favicon_description.html.twig", "@Modules/psxdesign/views/templates/admin/logos/index.html.twig", 43)->display($context);
        // line 44
        echo "        ";
    }

    // line 45
    public function block_favicon_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "          ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/logos/Blocks/Favicon/favicon_content.html.twig", "@Modules/psxdesign/views/templates/admin/logos/index.html.twig", 46)->display($context);
        // line 47
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/logos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 47,  140 => 46,  136 => 45,  132 => 44,  129 => 43,  125 => 42,  120 => 48,  117 => 45,  115 => 42,  112 => 41,  108 => 40,  104 => 37,  101 => 36,  97 => 35,  93 => 34,  90 => 33,  86 => 32,  81 => 38,  78 => 35,  76 => 32,  73 => 31,  69 => 30,  64 => 50,  61 => 40,  59 => 30,  56 => 29,  52 => 28,  41 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/admin/logos/index.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\admin\\logos\\index.html.twig");
    }
}
