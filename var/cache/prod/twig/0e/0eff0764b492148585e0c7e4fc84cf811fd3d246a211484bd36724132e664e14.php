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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/categories.html.twig */
class __TwigTemplate_b4b9c1ee1d617952443cdd3764eeaf1c804a2e3e74984fd29ffaa8ea75a6a2e9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'category_tags_collection_row' => [$this, 'block_category_tags_collection_row'],
            'product_category_row' => [$this, 'block_product_category_row'],
            'category_tree_selector_row' => [$this, 'block_category_tree_selector_row'],
            'category_tree_entry_row' => [$this, 'block_category_tree_entry_row'],
            'category_tree_collection_row' => [$this, 'block_category_tree_collection_row'],
            'category_filter_row' => [$this, 'block_category_filter_row'],
            'category_filter_widget' => [$this, 'block_category_filter_widget'],
            'category_filter_item_widget' => [$this, 'block_category_filter_item_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/categories.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_category_tags_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 28), "")) : ("")) . " pstaggerTagsWrapper form-group d-block"))]);
        // line 29
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row'), "data-prototype-name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29)]);
        // line 30
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    ";
        // line 31
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
  </div>
";
    }

    // line 35
    public function block_product_category_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 36), "")) : ("")) . " pstaggerTag tag-item"))]);
        // line 38
        echo "<span ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "display_name", [], "any", false, false, false, 39), 'widget');
        echo "
    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 40), 'widget');
        echo "
    ";
        // line 41
        $context["isRemovable"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 41), "data", [], "any", false, true, false, 41), "removable", [], "any", true, true, false, 41) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 41), "data", [], "any", false, false, false, 41), "removable", [], "any", false, false, false, 41));
        // line 42
        echo "    <a class=\"pstaggerClosingCross ";
        if ( !($context["isRemovable"] ?? null)) {
            echo "d-none";
        }
        echo "\" href=\"#\">x</a>
    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "category-id-input"]]);
        echo "
  </span>
";
    }

    // line 47
    public function block_category_tree_selector_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "  <template id=\"categories-modal-template\">
    <div id=\"categories-modal-content\">
      ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_categories", [], "any", false, false, false, 50), 'row');
        echo "

      <fieldset class=\"form-group tree-fieldset d-none\">
        <div class=\"ui-widget\">
          <div class=\"search search-with-icon\">
            <input type=\"text\" id=\"ps-select-product-category\" class=\"form-control autocomplete search mb-1 ui-autocomplete-input\" placeholder=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search categories", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" autocomplete=\"off\">
          </div>

          <label class=\"form-control-label text-uppercase\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Associated categories", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
          ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "category_tree", [], "any", false, false, false, 59), 'row');
        echo "
        </div>
      </fieldset>

      <div class=\"categories-tree-loader\">
        <div class=\"spinner m-auto d-block\"></div>
      </div>

      <div class=\"category-tree-footer\">
        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cancel_btn", [], "any", false, false, false, 68), 'widget');
        echo "
        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "apply_btn", [], "any", false, false, false, 69), 'widget');
        echo "
      </div>
    </div>
  </template>
";
    }

    // line 75
    public function block_category_tree_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "  <li class=\"category-tree-element\">
    <div class=\"checkbox category-tree-inputs\">
      ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    </div>
    <ul class=\"children-list\"></ul>
  </li>
";
    }

    // line 84
    public function block_category_tree_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "<div class=\"category-tree-container\">
  <div class=\"category-tree-overflow js-category-tree-overflow\">";
        // line 87
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row'), "data-prototype-name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 87), "name", [], "any", false, false, false, 87)]);
        // line 88
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 88)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 88), "")) : ("")) . " js-category-tree-list category-tree"))]);
        // line 89
        echo "<ul ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        // line 90
        $this->displayBlock("form_rows", $context, $blocks);
        // line 91
        echo "</ul>
  </div>
</div>
";
    }

    // line 96
    public function block_category_filter_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "  <div class=\"d-inline-block dropdown dropdown-clickable product_list_category_filter\">
    <button
      class=\"btn btn-outline-secondary dropdown-toggle\"
      type=\"button\"
      data-toggle=\"dropdown\"
      aria-haspopup=\"true\"
      aria-expanded=\"false\"
    >
      ";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter by categories", [], "Admin.Actions"), "html", null, true);
        echo "
      ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 108
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 108), "data", [], "any", false, false, false, 108) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 108), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 108), "data", [], "any", false, false, false, 108))))) {
                // line 109
                echo "          (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 109), "html", null, true);
                echo ")
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "</button>
    <div class=\"dropdown-menu category-filter-menu\">
      <div class=\"categories-tree-actions\">
        <button type=\"button\" class=\"category_tree_filter_expand btn\">
          <i class=\"material-icons\">expand_more</i>
          ";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Expand", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
        <button type=\"button\" class=\"category_tree_filter_collapse btn\">
          <i class=\"material-icons\">expand_less</i>
          ";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collapse", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
        <button type=\"button\" class=\"category_tree_filter_reset btn\">
          <i class=\"material-icons\">radio_button_unchecked</i>
          ";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unselect", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
      ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    </div>
  </div>
  ";
        // line 131
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 131), "data", [], "any", false, false, false, 131))) {
            // line 132
            echo "  <button class=\"btn btn-link category_tree_filter_reset\" type=\"button\">
    <i class=\"material-icons\">clear</i> Clear filter
  </button>
  ";
        }
    }

    // line 138
    public function block_category_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 139
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    <ul class=\"category-tree\">";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nested_tree"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 142
            echo "        ";
            $this->displayBlock("category_filter_item_widget", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "</ul>
  </div>";
    }

    // line 148
    public function block_category_filter_item_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 149
        echo "<li class=\"category-node";
        if ((twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", true, true, false, 149) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", false, false, false, 149)))) {
            echo " more";
        }
        echo "\">
    <div class=\"form-check form-check-radio form-radio radio category-label\">
      ";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 151), "html", null, true);
        echo "
      <label class=\"form-check-label\">
        <input type=\"radio\" name=\"";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 153), "id", [], "any", false, false, false, 153), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 153), "html", null, true);
        echo "\" ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 153), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 153), "data", [], "any", false, false, false, 153)))) {
            echo "checked=\"checked\"";
        }
        echo ">
        <i class=\"form-check-round\"></i>
      </label>
    </div>

    ";
        // line 158
        if (twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", true, true, false, 158)) {
            // line 159
            echo "      <ul class=\"category-children d-none\">
        ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", false, false, false, 160));
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
                // line 161
                echo "          ";
                $context["child"] = $context["item"];
                // line 162
                echo "          ";
                $this->displayBlock("category_filter_item_widget", $context, $blocks);
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
            // line 164
            echo "</ul>
    ";
        }
        // line 166
        echo "  </li>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 166,  398 => 164,  381 => 162,  378 => 161,  361 => 160,  358 => 159,  356 => 158,  342 => 153,  337 => 151,  329 => 149,  325 => 148,  320 => 144,  303 => 142,  286 => 141,  281 => 139,  277 => 138,  269 => 132,  267 => 131,  261 => 128,  255 => 125,  248 => 121,  241 => 117,  234 => 112,  224 => 109,  222 => 108,  218 => 107,  214 => 105,  204 => 97,  200 => 96,  193 => 91,  191 => 90,  187 => 89,  185 => 88,  183 => 87,  180 => 85,  176 => 84,  167 => 78,  163 => 76,  159 => 75,  150 => 69,  146 => 68,  134 => 59,  130 => 58,  124 => 55,  116 => 50,  112 => 48,  108 => 47,  101 => 43,  94 => 42,  92 => 41,  88 => 40,  84 => 39,  79 => 38,  77 => 36,  73 => 35,  66 => 31,  61 => 30,  59 => 29,  57 => 28,  53 => 27,  42 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/categories.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\FormTheme\\categories.html.twig");
    }
}
