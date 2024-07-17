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

/* @Modules/psxdesign/views/templates/admin/themes/Blocks/Partials/theme_card.html.twig */
class __TwigTemplate_47d4fa283f5714386bad28c05d2699b2b496bca5e2b1468e51ebfd84ba0567a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'card_content' => [$this, 'block_card_content'],
            'image' => [$this, 'block_image'],
            'button_container' => [$this, 'block_button_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@Modules/psxdesign/views/templates/admin/themes/Blocks/Partials/theme_card_container.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/Partials/theme_card_container.html.twig", "@Modules/psxdesign/views/templates/admin/themes/Blocks/Partials/theme_card.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_card_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    <article class=\"card d-flex justify-content-between align-items-stretch h-100\" data-role=\"theme-card-container\">
        <header class=\"p-3 mb-auto\">
            <div class=\"d-flex justify-content-between align-items-start\">
                <h3 class=\"h4 mb-1 text-truncate\">
                    ";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "display_name", [], "any", true, true, false, 32) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "display_name", [], "any", false, false, false, 32)))) {
            // line 33
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "display_name", [], "any", false, false, false, 33), "html", null, true);
            echo "
                    ";
        } else {
            // line 35
            echo "                        &nbsp;
                    ";
        }
        // line 37
        echo "                </h3>
            </div>
            <span class=\"small-text text-muted d-block\">
                ";
        // line 40
        if ((twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "version", [], "any", true, true, false, 40) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "version", [], "any", false, false, false, 40)))) {
            // line 41
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("v%version%", ["%version%" => twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "version", [], "any", false, false, false, 41)], "Modules.Psxdesign.Admin"), "html", null, true);
            echo " -
                ";
        }
        // line 43
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "author", [], "any", false, true, false, 43), "name", [], "any", true, true, false, 43) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "author", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43)))) {
            // line 44
            echo "                    ";
            echo twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Developed by %author%", ["%author%" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 45
($context["theme"] ?? null), "author", [], "array", false, true, false, 45), "url", [], "array", true, true, false, 45)) ? ((((("<a href=\"" . (($__internal_compile_0 = (($__internal_compile_1 =             // line 46
($context["theme"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["author"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["url"] ?? null) : null)) . "\" target=\"_blank\" rel=\"noopener\">") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "author", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46)) . "</a>")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 47
($context["theme"] ?? null), "author", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47)))], "Modules.Psxdesign.Admin"), "<a>");
            // line 48
            echo "
                ";
        }
        // line 50
        echo "                ";
        if ((( !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "version", [], "any", true, true, false, 50) || (null === twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "version", [], "any", false, false, false, 50))) && ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "author", [], "any", false, true, false, 50), "name", [], "any", true, true, false, 50) || (null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "author", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50))))) {
            // line 51
            echo "                    &nbsp;
                ";
        }
        // line 53
        echo "            </span>
            ";
        // line 54
        if ((array_key_exists("category", $context) &&  !twig_test_empty(($context["category"] ?? null)))) {
            // line 55
            echo "                <span class=\"badge badge-outlined-secondary mt-3\">";
            echo twig_escape_filter($this->env, ($context["category"] ?? null), "html", null, true);
            echo "</span>
            ";
        }
        // line 57
        echo "        </header>
        <div class=\"px-3\">
            ";
        // line 59
        $this->displayBlock('image', $context, $blocks);
        // line 61
        echo "        </div>
        <footer class=\"p-3 d-flex flex-wrap form-group inline-switch-widget mb-0\">
            ";
        // line 63
        $this->displayBlock('button_container', $context, $blocks);
        // line 65
        echo "        </footer>
    </article>
";
    }

    // line 59
    public function block_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "            ";
    }

    // line 63
    public function block_button_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/themes/Blocks/Partials/theme_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 64,  140 => 63,  136 => 60,  132 => 59,  126 => 65,  124 => 63,  120 => 61,  118 => 59,  114 => 57,  108 => 55,  106 => 54,  103 => 53,  99 => 51,  96 => 50,  92 => 48,  90 => 47,  89 => 46,  88 => 45,  86 => 44,  83 => 43,  77 => 41,  75 => 40,  70 => 37,  66 => 35,  60 => 33,  58 => 32,  52 => 28,  48 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/admin/themes/Blocks/Partials/theme_card.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\admin\\themes\\Blocks\\Partials\\theme_card.html.twig");
    }
}
