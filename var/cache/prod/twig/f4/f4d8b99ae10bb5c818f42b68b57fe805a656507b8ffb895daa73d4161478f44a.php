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

/* @Modules/psxdesign/views/templates/admin/themes/Blocks/ThemeLibrary/theme_library_content.html.twig */
class __TwigTemplate_c93ec67624dd7e63676a4bb9ed98649e64c929d6cd6ae19c3b763261d56e4981 extends Template
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
        // line 27
        echo "<div class=\"col-12 col-lg-8\">
    <ul class=\"row row-cols-1 row-cols-sm-2 row-cols-lg-1 row-cols-xl-2 list-unstyled\">
        ";
        // line 29
        $context["themes"] = twig_sort_filter($this->env, ($context["notUsedThemes"] ?? null), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "display_name", [], "any", false, false, false, 29) <=> twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "display_name", [], "any", false, false, false, 29)); });
        // line 30
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 31
            echo "            ";
            $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/ThemeLibrary/theme_library_content.html.twig", "@Modules/psxdesign/views/templates/admin/themes/Blocks/ThemeLibrary/theme_library_content.html.twig", 31, "1822930008")->display(twig_array_merge($context, $context["theme"]));
            // line 75
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/themes/Blocks/ThemeLibrary/theme_library_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 76,  67 => 75,  64 => 31,  46 => 30,  44 => 29,  40 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/admin/themes/Blocks/ThemeLibrary/theme_library_content.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\admin\\themes\\Blocks\\ThemeLibrary\\theme_library_content.html.twig");
    }
}


/* @Modules/psxdesign/views/templates/admin/themes/Blocks/ThemeLibrary/theme_library_content.html.twig */
class __TwigTemplate_c93ec67624dd7e63676a4bb9ed98649e64c929d6cd6ae19c3b763261d56e4981___1822930008 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'image' => [$this, 'block_image'],
            'button_container' => [$this, 'block_button_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 31
        return "@Modules/psxdesign/views/templates/admin/themes/Blocks/Partials/theme_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/Partials/theme_card.html.twig", "@Modules/psxdesign/views/templates/admin/themes/Blocks/ThemeLibrary/theme_library_content.html.twig", 31);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 32
    public function block_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "                    <div class=\"theme-preview theme-preview--single\">
                        ";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "demoUrl", [], "any", true, true, false, 34) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "demoUrl", [], "any", false, false, false, 34)))) {
            // line 35
            echo "                            <div class=\"theme-preview--demo-container\">
                                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "demoUrl", [], "any", false, false, false, 36), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener\" class=\"btn btn-primary\">
                                    ";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View demo", [], "Modules.Psxdesign.Admin"), "html", null, true);
            echo "
                                    <i class=\"material-icons\">open_in_new</i>
                                </a>
                            </div>
                        ";
        }
        // line 42
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "preview", [], "any", true, true, false, 42)) {
            // line 43
            echo "                            <img
                                src=\"";
            // line 44
            echo twig_escape_filter($this->env, ($context["baseShopUrl"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "preview", [], "any", false, false, false, 44), "html", null, true);
            echo "\"
                                alt=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("desktop preview of the theme %theme%", ["%theme%" => (((twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "display_name", [], "any", true, true, false, 45) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "display_name", [], "any", false, false, false, 45)))) ? (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "display_name", [], "any", false, false, false, 45)) : (""))], "Modules.Psxdesign.Admin"), "html", null, true);
            echo "\"
                            />
                        ";
        }
        // line 48
        echo "                    </div>
                ";
    }

    // line 50
    public function block_button_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "                    ";
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "name", [], "any", false, false, false, 51), "classic"))) {
            // line 52
            echo "                        <button
                                type=\"button\"
                                class=\"flex-fill btn btn-outline-danger js-open-delete-theme-modal\"
                                data-toggle=\"modal\"
                                data-target=\"#delete_theme_modal\"
                                data-action=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_delete", ["themeName" => twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "name", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\"
                                data-theme-name=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "display_name", [], "any", false, false, false, 58), "html", null, true);
            echo "\"
                        >
                            ";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Modules.Psxdesign.Admin"), "html", null, true);
            echo "
                        </button>
                    ";
        }
        // line 63
        echo "                    <button
                            type=\"button\"
                            class=\"flex-fill btn btn-outline-primary js-open-use-theme-modal\"
                            data-toggle=\"modal\"
                            data-target=\"#use_theme_modal\" ";
        // line 67
        echo (( !($context["isSingleShopContext"] ?? null)) ? ("disabled") : (""));
        echo "
                            data-action=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_enable", ["themeName" => twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "name", [], "any", false, false, false, 68)]), "html", null, true);
        echo "\"
                            data-theme-name=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "display_name", [], "any", false, false, false, 69), "html", null, true);
        echo "\"
                    >
                        ";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Use", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
                    </button>
                ";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/themes/Blocks/ThemeLibrary/theme_library_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 71,  229 => 69,  225 => 68,  221 => 67,  215 => 63,  209 => 60,  204 => 58,  200 => 57,  193 => 52,  190 => 51,  186 => 50,  181 => 48,  175 => 45,  170 => 44,  167 => 43,  164 => 42,  156 => 37,  152 => 36,  149 => 35,  147 => 34,  144 => 33,  140 => 32,  129 => 31,  81 => 76,  67 => 75,  64 => 31,  46 => 30,  44 => 29,  40 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/admin/themes/Blocks/ThemeLibrary/theme_library_content.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\admin\\themes\\Blocks\\ThemeLibrary\\theme_library_content.html.twig");
    }
}
