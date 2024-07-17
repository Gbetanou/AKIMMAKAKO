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

/* @PrestaShop/Admin/TwigTemplateForm/multishop.html.twig */
class __TwigTemplate_70779e7525307896b8eee8856a961c0841905f354ee741ecb2368795576188c9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 25
        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig", 25);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 25, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'shop_selector_widget' => [$this, 'block_shop_selector_widget'],
                'shop_option_checkbox_widget' => [$this, 'block_shop_option_checkbox_widget'],
                'shop_option_radio_widget' => [$this, 'block_shop_option_radio_widget'],
                'shop_selector_item_name' => [$this, 'block_shop_selector_item_name'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('shop_selector_widget', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('shop_option_checkbox_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('shop_option_radio_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('shop_selector_item_name', $context, $blocks);
    }

    // line 27
    public function block_shop_selector_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "  <div class=\"shop-selector-content shop-selector\" data-multiple=\"";
        echo twig_escape_filter($this->env, ($context["multiple"] ?? null), "html", null, true);
        echo "\">
    <ul class=\"shop-selector-group-list\">
      ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 30), "choices", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["groupName"] => $context["groupShops"]) {
            // line 31
            echo "        <li class=\"shop-selector-group-item shop-selector-item\">
          ";
            // line 32
            echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global") . " ") . $context["groupName"]), "html", null, true);
            echo "
        </li>

        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["groupShops"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["shopChoice"]) {
                // line 36
                echo "          ";
                $context["shop"] = twig_get_attribute($this->env, $this->source, $context["shopChoice"], "data", [], "any", false, false, false, 36);
                // line 37
                echo "
          <li class=\"shop-selector-shop-item shop-selector-item";
                // line 38
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 38), ($context["contextShopId"] ?? null)))) {
                    echo " selected-shop current-shop disabled";
                }
                echo "\" data-shop-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 38), "html", null, true);
                echo "\">
            ";
                // line 39
                if (($context["multiple"] ?? null)) {
                    // line 40
                    echo "              ";
                    $this->displayBlock("shop_option_checkbox_widget", $context, $blocks);
                    echo "
            ";
                } else {
                    // line 42
                    echo "              ";
                    $this->displayBlock("shop_option_radio_widget", $context, $blocks);
                    echo "
            ";
                }
                // line 44
                echo "          </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shopChoice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['groupName'], $context['groupShops'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    </ul>

    ";
        // line 49
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => "d-none shop-selector-input"]);
        // line 50
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
  </div>
";
    }

    // line 54
    public function block_shop_option_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "  <div class=\"md-checkbox md-checkbox-inline\">
    <label class=\"shop-selector-item-label\">
      <input
        type=\"checkbox\" data-value-type=\"boolean\" class=\"form-check-input\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 58), "html", null, true);
        echo "\"
        ";
        // line 59
        if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice(($context["shopChoice"] ?? null), ($context["value"] ?? null))) {
            echo "checked";
        }
        // line 60
        echo "        ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 60), ($context["contextShopId"] ?? null)))) {
            echo "disabled=\"disabled\"";
        }
        // line 61
        echo "      />
      <i class=\"md-checkbox-control\"></i>
      ";
        // line 63
        $this->displayBlock("shop_selector_item_name", $context, $blocks);
        echo "
    </label>
  </div>
";
    }

    // line 68
    public function block_shop_option_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "  ";
        $this->displayBlock("shop_selector_item_name", $context, $blocks);
        echo "
";
    }

    // line 72
    public function block_shop_selector_item_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "  <div class=\"shop-selector-item-name\">
    <span class=\"shop-selector-color-container\">
      <span class=\"shop-selector-color\"";
        // line 75
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "color", [], "any", false, false, false, 75))) {
            echo " style=\"background-color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "color", [], "any", false, false, false, 75), "html", null, true);
            echo ";\"";
        }
        echo "></span>
    </span>
    ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "name", [], "any", false, false, false, 77), "html", null, true);
        echo "
    ";
        // line 78
        if ( !($context["multiple"] ?? null)) {
            // line 79
            echo "      <i class=\"material-icons\">arrow_forward</i>
    ";
        } else {
            // line 81
            echo "      <span class=\"shop-selector-status\" data-added-label=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Added", [], "Admin.Global"), "html", null, true);
            echo "\" data-removed-label=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Removed", [], "Admin.Global"), "html", null, true);
            echo "\">
        ";
            // line 82
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 82), ($context["contextShopId"] ?? null)))) {
                // line 83
                echo "          ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Current store", [], "Admin.Global"), "html", null, true);
                echo "
        ";
            }
            // line 85
            echo "      </span>
    ";
        }
        // line 87
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  269 => 87,  265 => 85,  259 => 83,  257 => 82,  250 => 81,  246 => 79,  244 => 78,  240 => 77,  231 => 75,  227 => 73,  223 => 72,  216 => 69,  212 => 68,  204 => 63,  200 => 61,  195 => 60,  191 => 59,  187 => 58,  182 => 55,  178 => 54,  170 => 50,  168 => 49,  164 => 47,  158 => 46,  143 => 44,  137 => 42,  131 => 40,  129 => 39,  121 => 38,  118 => 37,  115 => 36,  98 => 35,  92 => 32,  89 => 31,  85 => 30,  79 => 28,  75 => 27,  71 => 72,  68 => 71,  66 => 68,  63 => 67,  61 => 54,  58 => 53,  56 => 27,  53 => 26,  30 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\TwigTemplateForm\\multishop.html.twig");
    }
}
