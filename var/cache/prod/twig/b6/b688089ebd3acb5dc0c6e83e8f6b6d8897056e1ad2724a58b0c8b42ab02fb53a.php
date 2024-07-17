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

/* @Modules/psxdesign/views/templates/components/file_uploader.html.twig */
class __TwigTemplate_9dcd03f9020ed1dec026f1b53be4d8914f798d66fc917fa608341d21059447e5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'default_message' => [$this, 'block_default_message'],
            'preview_template' => [$this, 'block_preview_template'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
<fieldset
    class=\"file-uploader\"
    ";
        // line 28
        if ((array_key_exists("disabled", $context) && (0 === twig_compare(($context["disabled"] ?? null), true)))) {
            // line 29
            echo "        disabled
    ";
        }
        // line 31
        echo ">
    <div class=\"file-uploader__container\">
        ";
        // line 33
        $this->displayBlock('default_message', $context, $blocks);
        // line 39
        echo "
        <div class=\"file-uploader__preview-container\"></div>
        <template class=\"file-uploader__template-previews\">
            ";
        // line 42
        $this->displayBlock('preview_template', $context, $blocks);
        // line 45
        echo "        </template>
        <input
            id=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"
            name=\"";
        // line 48
        echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (($context["name"] ?? null)) : (($context["id"] ?? null))), "html", null, true);
        echo "\"
            type=\"file\"
            class=\"file-uploader__hidden-input\"
            tabindex=\"-1\"

            ";
        // line 53
        if (array_key_exists("accept", $context)) {
            // line 54
            echo "                accept=\"";
            echo twig_escape_filter($this->env, ($context["accept"] ?? null), "html", null, true);
            echo "\"
            ";
        }
        // line 56
        echo "
            ";
        // line 57
        if ((array_key_exists("multiple", $context) && (0 === twig_compare(($context["multiple"] ?? null), true)))) {
            // line 58
            echo "                multiple
            ";
        }
        // line 60
        echo "
            ";
        // line 61
        if ((array_key_exists("required", $context) && (0 === twig_compare(($context["required"] ?? null), true)))) {
            // line 62
            echo "                required
            ";
        }
        // line 64
        echo "        >
    </div>
</fieldset>
";
    }

    // line 33
    public function block_default_message($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "            <p class=\"file-uploader__legend\">
                <i class=\"material-icons file-uploader__legend-icon\">file_upload</i>
                ";
        // line 36
        echo twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1]Select[/1] a file or drag and drop", ["[1]" => "<button class=\"btn btn-link file-uploader__legend-btn\" type=\"button\">", "[/1]" => "</button>"], "Modules.Psxdesign.Admin"), "<button>");
        echo "
            </p>
        ";
    }

    // line 42
    public function block_preview_template($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "                ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/components/Partials/file_uploader_preview_template.html.twig", "@Modules/psxdesign/views/templates/components/file_uploader.html.twig", 43)->display($context);
        // line 44
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/components/file_uploader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 44,  131 => 43,  127 => 42,  120 => 36,  116 => 34,  112 => 33,  105 => 64,  101 => 62,  99 => 61,  96 => 60,  92 => 58,  90 => 57,  87 => 56,  81 => 54,  79 => 53,  71 => 48,  67 => 47,  63 => 45,  61 => 42,  56 => 39,  54 => 33,  50 => 31,  46 => 29,  44 => 28,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/components/file_uploader.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\components\\file_uploader.html.twig");
    }
}
