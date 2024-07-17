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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/link.html.twig */
class __TwigTemplate_f2db79b153773fedcf30fd8bbb9cf0ccd041f53b05f9391724f1c4c3b8589b92 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'link' => [$this, 'block_link'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 26), "color_template_field", [], "any", false, false, false, 26)) && twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 26), "color_template_field", [], "any", false, false, false, 26), [], "array", true, true, false, 26))) {
            // line 27
            echo "  ";
            $context["color"] = (($__internal_compile_0 = ($context["record"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 27), "color_template_field", [], "any", false, false, false, 27)] ?? null) : null);
        } else {
            // line 29
            echo "  ";
            $context["color"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 29), "color_template", [], "any", false, false, false, 29);
        }
        // line 31
        $context["class"] = ("text-" . ($context["color"] ?? null));
        // line 32
        echo "
";
        // line 33
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 33), "button_template", [], "any", false, false, false, 33)) {
            // line 34
            echo "  ";
            $context["style"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 34), "button_template", [], "any", false, false, false, 34);
            // line 35
            echo "  ";
            if ((0 === twig_compare(($context["style"] ?? null), "normal"))) {
                // line 36
                echo "    ";
                $context["class"] = ("btn btn-" . ($context["color"] ?? null));
                // line 37
                echo "  ";
            } elseif ((0 === twig_compare(($context["style"] ?? null), "outline"))) {
                // line 38
                echo "    ";
                $context["class"] = ("btn btn-outline-" . ($context["color"] ?? null));
                // line 39
                echo "  ";
            }
        }
        // line 41
        echo "
";
        // line 42
        $context["class"] = twig_trim_filter(((($context["class"] ?? null) . " ") . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, true, false, 42), "attr", [], "any", false, true, false, 42), "class", [], "any", true, true, false, 42)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, true, false, 42), "attr", [], "any", false, true, false, 42), "class", [], "any", false, false, false, 42), "")) : (""))));
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('link', $context, $blocks);
    }

    public function block_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "<a
  class=\"";
        // line 46
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo " text-nowrap\"
  href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 47), "route", [], "any", false, false, false, 47), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 47), "route_param_name", [], "any", false, false, false, 47) => (($__internal_compile_1 = ($context["record"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 47), "route_param_field", [], "any", false, false, false, 47)] ?? null) : null), "_fragment" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 47), "route_fragment", [], "any", false, false, false, 47)]), "html", null, true);
        echo "\"
  ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, true, false, 48), "target", [], "any", true, true, false, 48)) {
            // line 49
            echo "    target=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 49), "target", [], "any", false, false, false, 49), "html", null, true);
            echo "\"
  ";
        }
        // line 51
        echo "  ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 52), "attr", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 53
            if ((0 !== twig_compare($context["attrname"], "class"))) {
                // line 54
                echo " ";
                // line 55
                if ($this->env->getTest('formview')->getCallable()($context["attrvalue"])) {
                    // line 56
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["attrvalue"], 'row'), "html_attr");
                    echo "\"
      ";
                } elseif ($this->env->getTest('form')->getCallable()(                // line 57
$context["attrvalue"])) {
                    // line 58
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["attrvalue"], "createView", [], "method", false, false, false, 58), 'row'), "html_attr");
                    echo "\"
      ";
                } else {
                    // line 60
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"
      ";
                }
                // line 62
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo ">
  ";
        // line 65
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, true, false, 65), "icon", [], "any", true, true, false, 65) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 65), "icon", [], "any", false, false, false, 65)))) {
            // line 66
            echo "    <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 66), "icon", [], "any", false, false, false, 66), "html", null, true);
            echo "</i>
  ";
        }
        // line 68
        echo "  ";
        echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["record"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 68), "field", [], "any", false, false, false, 68)] ?? null) : null), "html", null, true);
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 68,  157 => 66,  155 => 65,  152 => 64,  145 => 62,  138 => 60,  131 => 58,  129 => 57,  123 => 56,  121 => 55,  119 => 54,  117 => 53,  113 => 52,  111 => 51,  105 => 49,  103 => 48,  99 => 47,  95 => 46,  92 => 45,  85 => 44,  82 => 43,  80 => 42,  77 => 41,  73 => 39,  70 => 38,  67 => 37,  64 => 36,  61 => 35,  58 => 34,  56 => 33,  53 => 32,  51 => 31,  47 => 29,  43 => 27,  41 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/link.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Columns\\Content\\link.html.twig");
    }
}
