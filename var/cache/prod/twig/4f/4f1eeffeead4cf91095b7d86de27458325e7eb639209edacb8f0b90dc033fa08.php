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

/* @Modules/psxdesign/views/templates/components/text_editor.html.twig */
class __TwigTemplate_e184caa132a8083ce13fe47b101179c6bc4a01cfa3ede49c502c846f0bd7deb4 extends Template
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
        // line 58
        echo "
<fieldset
    class=\"text-editor\"
    ";
        // line 61
        if ((array_key_exists("disabled", $context) && (0 === twig_compare(($context["disabled"] ?? null), true)))) {
            // line 62
            echo "        disabled
    ";
        }
        // line 64
        echo "    data-font-list=\"";
        echo twig_escape_filter($this->env, json_encode(($context["fontList"] ?? null)), "html", null, true);
        echo "\"
    data-font-variants=\"";
        // line 65
        echo twig_escape_filter($this->env, json_encode(($context["fontVariants"] ?? null)), "html", null, true);
        echo "\"
>
    <div class=\"text-editor__toolbar\">
        ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["fontFamily"] ?? null), "id", [], "any", true, true, false, 68)) {
            // line 69
            echo "        <div class=\"form-group\">
            <label class=\"form-control-label font-weight-bold mb-1\" for=\"";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fontFamily"] ?? null), "id", [], "any", false, false, false, 70), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Font", [], "Modules.Psxdesign.Admin"), "html", null, true);
            echo "</label>
            <div class=\"form-select\">
                <select
                    id=\"";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fontFamily"] ?? null), "id", [], "any", false, false, false, 73), "html", null, true);
            echo "\"
                    name=\"";
            // line 74
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["fontFamily"] ?? null), "name", [], "any", false, false, false, 74)) ? (twig_get_attribute($this->env, $this->source, ($context["fontFamily"] ?? null), "name", [], "any", false, false, false, 74)) : (twig_get_attribute($this->env, $this->source, ($context["fontFamily"] ?? null), "id", [], "any", false, false, false, 74))), "html", null, true);
            echo "\"
                    class=\"form-control custom-select text-editor__font-family-select\"
                    ";
            // line 76
            if ((array_key_exists("disabled", $context) && (0 === twig_compare(($context["disabled"] ?? null), true)))) {
                // line 77
                echo "                        disabled
                    ";
            }
            // line 79
            echo "                    required=\"\"
                >
                    ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fontList"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["font"]) {
                // line 82
                echo "                        <option
                                ";
                // line 83
                if (((twig_get_attribute($this->env, $this->source, ($context["fontFamily"] ?? null), "value", [], "any", true, true, false, 83)) ? ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["fontFamily"] ?? null), "value", [], "any", false, false, false, 83), twig_get_attribute($this->env, $this->source, $context["font"], "code", [], "any", false, false, false, 83)))) : (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 83)))) {
                    // line 84
                    echo "                                    selected=\"selected\"
                                ";
                }
                // line 86
                echo "                                value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["font"], "code", [], "any", false, false, false, 86), "html", null, true);
                echo "\"
                                style=\"font-family:'";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["font"], "name", [], "any", false, false, false, 87), "html", null, true);
                echo "'\"
                        >
                            ";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["font"], "name", [], "any", false, false, false, 89), "html", null, true);
                echo "
                        </option>
                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['font'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                </select>
            </div>
        </div>
        ";
        }
        // line 96
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["fontStyle"] ?? null), "id", [], "any", true, true, false, 96) && array_key_exists("fontVariants", $context))) {
            // line 97
            echo "        <div class=\"form-group\">
            <label class=\"form-control-label font-weight-bold mb-1\" for=\"";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fontStyle"] ?? null), "id", [], "any", false, false, false, 98), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Style", [], "Modules.Psxdesign.Admin"), "html", null, true);
            echo "</label>
            <div class=\"form-select\">
                <select
                    id=\"";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fontStyle"] ?? null), "id", [], "any", false, false, false, 101), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["fontStyle"] ?? null), "name", [], "any", false, false, false, 101)) ? (twig_get_attribute($this->env, $this->source, ($context["fontStyle"] ?? null), "name", [], "any", false, false, false, 101)) : (twig_get_attribute($this->env, $this->source, ($context["fontStyle"] ?? null), "id", [], "any", false, false, false, 101))), "html", null, true);
            echo "\"
                    class=\"form-control custom-select text-editor__font-variant-select\"
                    ";
            // line 103
            if ((array_key_exists("disabled", $context) && (0 === twig_compare(($context["disabled"] ?? null), true)))) {
                // line 104
                echo "                        disabled
                    ";
            }
            // line 106
            echo "                    required=\"\"
                >
                    ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(twig_first($this->env, ($context["fontVariants"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["weightKey"]) {
                // line 109
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["fontVariants"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["variantKey"]) {
                    // line 110
                    echo "                        <option
                                ";
                    // line 111
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["fontStyle"] ?? null), "value", [], "any", false, false, false, 111), (($context["variantKey"] . "-") . $context["weightKey"])))) {
                        // line 112
                        echo "                                    selected=\"selected\"
                                ";
                    }
                    // line 114
                    echo "                                value=\"";
                    echo twig_escape_filter($this->env, $context["variantKey"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $context["weightKey"], "html", null, true);
                    echo "\"
                                style=\"font-style:";
                    // line 115
                    echo twig_escape_filter($this->env, $context["variantKey"], "html", null, true);
                    echo "; font-weight: ";
                    echo twig_escape_filter($this->env, $context["weightKey"], "html", null, true);
                    echo "\"
                        >
                            ";
                    // line 117
                    echo twig_escape_filter($this->env, (($__internal_compile_0 = (($__internal_compile_1 = ($context["fontVariants"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["variantKey"]] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["weightKey"]] ?? null) : null), "html", null, true);
                    echo "
                        </option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variantKey'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weightKey'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "                </select>
            </div>
        </div>
        ";
        }
        // line 125
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["fontSize"] ?? null), "id", [], "any", true, true, false, 125)) {
            // line 126
            echo "            <div class=\"form-group for-group--small\">
                <label class=\"form-control-label font-weight-bold mb-1\" for=\"";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fontSize"] ?? null), "id", [], "any", false, false, false, 127), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Size", [], "Modules.Psxdesign.Admin"), "html", null, true);
            echo "</label>
                <div class=\"ps-number-input-inputs\">
                    <input
                            class=\"form-control text-editor__font-size-input\"
                            type=\"number\"
                            min=\"";
            // line 132
            ((twig_get_attribute($this->env, $this->source, ($context["fontSize"] ?? null), "min", [], "any", true, true, false, 132)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fontSize"] ?? null), "min", [], "any", false, false, false, 132), "html", null, true))) : (print (1)));
            echo "\"
                            max=\"";
            // line 133
            ((twig_get_attribute($this->env, $this->source, ($context["fontSize"] ?? null), "min", [], "any", true, true, false, 133)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fontSize"] ?? null), "max", [], "any", false, false, false, 133), "html", null, true))) : (print (999)));
            echo "\"
                            value=\"";
            // line 134
            ((twig_get_attribute($this->env, $this->source, ($context["fontSize"] ?? null), "value", [], "any", true, true, false, 134)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fontSize"] ?? null), "value", [], "any", false, false, false, 134), "html", null, true))) : (print (16)));
            echo "\"
                            id=\"";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fontSize"] ?? null), "id", [], "any", false, false, false, 135), "html", null, true);
            echo "\"
                            name=\"";
            // line 136
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["fontSize"] ?? null), "name", [], "any", false, false, false, 136)) ? (twig_get_attribute($this->env, $this->source, ($context["fontSize"] ?? null), "name", [], "any", false, false, false, 136)) : (twig_get_attribute($this->env, $this->source, ($context["fontSize"] ?? null), "id", [], "any", false, false, false, 136))), "html", null, true);
            echo "\"
                            ";
            // line 137
            if ((array_key_exists("disabled", $context) && (0 === twig_compare(($context["disabled"] ?? null), true)))) {
                // line 138
                echo "                                disabled
                            ";
            }
            // line 140
            echo "                            required=\"\"
                    />
                </div>
            </div>
        ";
        }
        // line 145
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["fontColor"] ?? null), "id", [], "any", true, true, false, 145)) {
            // line 146
            echo "            <div class=\"form-group for-group--small\">
                <label class=\"form-control-label font-weight-bold mb-1\" for=\"";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fontColor"] ?? null), "id", [], "any", false, false, false, 147), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Color", [], "Modules.Psxdesign.Admin"), "html", null, true);
            echo "</label>
                <div class=\"form-select\">
                    <input
                            type=\"color\"
                            value=\"";
            // line 151
            ((twig_get_attribute($this->env, $this->source, ($context["fontColor"] ?? null), "value", [], "any", true, true, false, 151)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fontColor"] ?? null), "value", [], "any", false, false, false, 151), "html", null, true))) : (print ("#000000")));
            echo "\"
                            id=\"";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fontColor"] ?? null), "id", [], "any", false, false, false, 152), "html", null, true);
            echo "\"
                            name=\"";
            // line 153
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["fontColor"] ?? null), "name", [], "any", false, false, false, 153)) ? (twig_get_attribute($this->env, $this->source, ($context["fontColor"] ?? null), "name", [], "any", false, false, false, 153)) : (twig_get_attribute($this->env, $this->source, ($context["fontColor"] ?? null), "id", [], "any", false, false, false, 153))), "html", null, true);
            echo "\"
                            class=\"text-editor__font-color-input\"
                            ";
            // line 155
            if ((array_key_exists("disabled", $context) && (0 === twig_compare(($context["disabled"] ?? null), true)))) {
                // line 156
                echo "                                disabled
                            ";
            }
            // line 158
            echo "                            required=\"\"
                    />
                </div>
            </div>
        ";
        }
        // line 163
        echo "    </div>
    <textarea
        class=\"text-editor__textarea\"
        ";
        // line 166
        if (twig_get_attribute($this->env, $this->source, ($context["textArea"] ?? null), "id", [], "any", true, true, false, 166)) {
            // line 167
            echo "            id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["textArea"] ?? null), "id", [], "any", false, false, false, 167), "html", null, true);
            echo "\"
        ";
        }
        // line 169
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["textArea"] ?? null), "name", [], "any", true, true, false, 169)) {
            // line 170
            echo "            name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["textArea"] ?? null), "name", [], "any", false, false, false, 170), "html", null, true);
            echo "\"
        ";
        }
        // line 172
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["textArea"] ?? null), "multiline", [], "any", true, true, false, 172) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["textArea"] ?? null), "multiline", [], "any", false, false, false, 172), false)))) {
            // line 173
            echo "            rows=\"1\"
        ";
        }
        // line 175
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["textArea"] ?? null), "required", [], "any", true, true, false, 175) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["textArea"] ?? null), "required", [], "any", false, false, false, 175), true)))) {
            // line 176
            echo "            required=\"\"
        ";
        }
        // line 178
        echo "        ";
        if ((array_key_exists("disabled", $context) && (0 === twig_compare(($context["disabled"] ?? null), true)))) {
            // line 179
            echo "            disabled
        ";
        }
        // line 181
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["textArea"] ?? null), "readonly", [], "any", true, true, false, 181) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["textArea"] ?? null), "readonly", [], "any", false, false, false, 181), true)))) {
            // line 182
            echo "            readonly
        ";
        }
        // line 184
        echo "        aria-label=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["textArea"] ?? null), "ariaLabel", [], "any", true, true, false, 184)) ? (twig_get_attribute($this->env, $this->source, ($context["textArea"] ?? null), "ariaLabel", [], "any", false, false, false, 184)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("text", [], "Modules.Psxdesign.Admin"))), "html", null, true);
        echo "\"
    >";
        // line 185
        ((twig_get_attribute($this->env, $this->source, ($context["textArea"] ?? null), "value", [], "any", true, true, false, 185)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["textArea"] ?? null), "value", [], "any", false, false, false, 185), "html", null, true))) : (print ("")));
        echo "</textarea>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/components/text_editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 185,  377 => 184,  373 => 182,  370 => 181,  366 => 179,  363 => 178,  359 => 176,  356 => 175,  352 => 173,  349 => 172,  343 => 170,  340 => 169,  334 => 167,  332 => 166,  327 => 163,  320 => 158,  316 => 156,  314 => 155,  309 => 153,  305 => 152,  301 => 151,  292 => 147,  289 => 146,  286 => 145,  279 => 140,  275 => 138,  273 => 137,  269 => 136,  265 => 135,  261 => 134,  257 => 133,  253 => 132,  243 => 127,  240 => 126,  237 => 125,  231 => 121,  225 => 120,  216 => 117,  209 => 115,  202 => 114,  198 => 112,  196 => 111,  193 => 110,  188 => 109,  184 => 108,  180 => 106,  176 => 104,  174 => 103,  167 => 101,  159 => 98,  156 => 97,  153 => 96,  147 => 92,  130 => 89,  125 => 87,  120 => 86,  116 => 84,  114 => 83,  111 => 82,  94 => 81,  90 => 79,  86 => 77,  84 => 76,  79 => 74,  75 => 73,  67 => 70,  64 => 69,  62 => 68,  56 => 65,  51 => 64,  47 => 62,  45 => 61,  40 => 58,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/components/text_editor.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\components\\text_editor.html.twig");
    }
}
