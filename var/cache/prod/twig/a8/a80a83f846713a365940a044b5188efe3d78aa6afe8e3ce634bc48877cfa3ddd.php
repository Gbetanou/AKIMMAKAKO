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

/* @PrestaShop/Admin/TwigTemplateForm/material.html.twig */
class __TwigTemplate_2ea46556b8d82c5927b1339737f6ef0adff55a3521e5388e18d32960075ee99a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'material_choice_tree_widget' => [$this, 'block_material_choice_tree_widget'],
            'material_choice_tree_item_widget' => [$this, 'block_material_choice_tree_item_widget'],
            'material_choice_tree_item_checkbox_widget' => [$this, 'block_material_choice_tree_item_checkbox_widget'],
            'material_choice_tree_item_radio_widget' => [$this, 'block_material_choice_tree_item_radio_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('material_choice_tree_widget', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('material_choice_tree_item_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('material_choice_tree_item_checkbox_widget', $context, $blocks);
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('material_choice_tree_item_radio_widget', $context, $blocks);
    }

    // line 26
    public function block_material_choice_tree_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "  <div class=\"material-choice-tree-container js-choice-tree-container";
        if (($context["required"] ?? null)) {
            echo " required";
        }
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27), "html", null, true);
        echo "\">
    <div class=\"choice-tree-actions\">
      <span class=\"form-control-label js-toggle-choice-tree-action\"
            data-expanded-text=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Expand", [], "Admin.Actions"), "html", null, true);
        echo "\"
            data-expanded-icon=\"expand_more\"
            data-collapsed-text=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collapse", [], "Admin.Actions"), "html", null, true);
        echo "\"
            data-collapsed-icon=\"expand_less\"
            data-action=\"expand\"
      >
        <i class=\"material-icons\">expand_more</i>
        <span class=\"js-toggle-text\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Expand", [], "Admin.Actions"), "html", null, true);
        echo "</span>
      </span>
    </div>

    <ul class=\"choice-tree\">
      ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices_tree"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 43
            echo "        ";
            $this->displayBlock("material_choice_tree_item_widget", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </ul>
  </div>";
        // line 48
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 51
    public function block_material_choice_tree_item_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "  ";
        $context["has_children"] = twig_get_attribute($this->env, $this->source, ($context["choice"] ?? null), ($context["choice_children"] ?? null), [], "array", true, true, false, 52);
        // line 53
        echo "
  <li class=\"";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["choice"] ?? null), "has_selected_children", [], "any", false, false, false, 54)) {
            echo "expanded";
        } elseif (($context["has_children"] ?? null)) {
            echo "collapsed";
        }
        echo "\">
    ";
        // line 55
        if (($context["multiple"] ?? null)) {
            // line 56
            echo "      ";
            $this->displayBlock("material_choice_tree_item_checkbox_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 58
            echo "      ";
            $this->displayBlock("material_choice_tree_item_radio_widget", $context, $blocks);
            echo "
    ";
        }
        // line 60
        echo "
    ";
        // line 61
        if (($context["has_children"] ?? null)) {
            // line 62
            echo "      <ul>
        ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_0 = ($context["choice"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["choice_children"] ?? null)] ?? null) : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 64
                echo "          ";
                $context["choice"] = $context["item"];
                // line 65
                echo "          ";
                $this->displayBlock("material_choice_tree_item_widget", $context, $blocks);
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "      </ul>
    ";
        }
        // line 69
        echo "  </li>
";
    }

    // line 72
    public function block_material_choice_tree_item_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "  <div class=\"checkbox js-input-wrapper\">
    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        <input type=\"checkbox\"
         ";
        // line 77
        if ( !(null === (($__internal_compile_1 = ($context["choice"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["choice_value"] ?? null)] ?? null) : null))) {
            // line 78
            echo "           name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 78), "full_name", [], "any", false, false, false, 78), "html", null, true);
            echo "[]\"
           value=\"";
            // line 79
            echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["choice"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["choice_value"] ?? null)] ?? null) : null), "html", null, true);
            echo "\"
           ";
            // line 80
            if (twig_in_filter((($__internal_compile_3 = ($context["choice"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["choice_value"] ?? null)] ?? null) : null), ($context["selected_values"] ?? null))) {
                echo "checked";
            }
            // line 81
            echo "         ";
        }
        // line 82
        echo "         ";
        if ((($context["disabled"] ?? null) || twig_in_filter((($__internal_compile_4 = ($context["choice"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["choice_value"] ?? null)] ?? null) : null), ($context["disabled_values"] ?? null)))) {
            echo "disabled";
        }
        // line 83
        echo "        >
        <i class=\"md-checkbox-control\"></i>
        ";
        // line 85
        echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["choice"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["choice_label"] ?? null)] ?? null) : null), "html", null, true);
        echo "
      </label>
    </div>
  </div>
";
    }

    // line 91
    public function block_material_choice_tree_item_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "  <div class=\"radio js-input-wrapper form-check form-check-radio\">
    <label class=\"form-check-label\">
      <input type=\"radio\"
       name=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 95), "full_name", [], "any", false, false, false, 95), "html", null, true);
        echo "\"
       value=\"";
        // line 96
        echo twig_escape_filter($this->env, (($__internal_compile_6 = ($context["choice"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["choice_value"] ?? null)] ?? null) : null), "html", null, true);
        echo "\"
       ";
        // line 97
        if (twig_in_filter((($__internal_compile_7 = ($context["choice"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["choice_value"] ?? null)] ?? null) : null), ($context["selected_values"] ?? null))) {
            echo "checked";
        }
        // line 98
        echo "       ";
        if ((($context["disabled"] ?? null) || twig_in_filter((($__internal_compile_8 = ($context["choice"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[($context["choice_value"] ?? null)] ?? null) : null), ($context["disabled_values"] ?? null)))) {
            echo "disabled";
        }
        // line 99
        echo "       ";
        if (($context["required"] ?? null)) {
            echo "required";
        }
        // line 100
        echo "      >
      <i class=\"form-check-round\"></i>
      ";
        // line 102
        echo twig_escape_filter($this->env, (($__internal_compile_9 = ($context["choice"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[($context["choice_label"] ?? null)] ?? null) : null), "html", null, true);
        echo "
    </label>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/material.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  307 => 102,  303 => 100,  298 => 99,  293 => 98,  289 => 97,  285 => 96,  281 => 95,  276 => 92,  272 => 91,  263 => 85,  259 => 83,  254 => 82,  251 => 81,  247 => 80,  243 => 79,  238 => 78,  236 => 77,  230 => 73,  226 => 72,  221 => 69,  217 => 67,  200 => 65,  197 => 64,  180 => 63,  177 => 62,  175 => 61,  172 => 60,  166 => 58,  160 => 56,  158 => 55,  150 => 54,  147 => 53,  144 => 52,  140 => 51,  136 => 48,  133 => 45,  116 => 43,  99 => 42,  91 => 37,  83 => 32,  78 => 30,  67 => 27,  63 => 26,  59 => 91,  56 => 90,  54 => 72,  51 => 71,  49 => 51,  46 => 50,  44 => 26,  41 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\TwigTemplateForm\\material.html.twig");
    }
}
