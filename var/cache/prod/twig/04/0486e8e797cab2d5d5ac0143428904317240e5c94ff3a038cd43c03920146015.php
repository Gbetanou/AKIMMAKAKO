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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/catalog_price_rules.html.twig */
class __TwigTemplate_2cccd1f36e9673d6b2d58bcddc5dcf73fd0ac78ec59cd67cc112e87f33cbe307 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'catalog_price_rules_widget' => [$this, 'block_catalog_price_rules_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/catalog_price_rules.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_catalog_price_rules_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    <div id=\"catalog-price-rule-list-container\" class=\"d-none\">
      <div id=\"catalog-price-rules-loading\">
        <div class=\"loading-label\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading catalog price rules", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</div>
        <div class=\"spinner spinner-primary\"></div>
      </div>
      <table class=\"table\" id=\"catalog-price-rules-list-table\">
        <thead class=\"thead-default\">
        <tr>
          <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Currency", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Country", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Store", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discount", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
          <th>";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Units", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 53
        echo "        </tbody>
      </table>
      <div class=\"row justify-content-center\" id=\"catalog-price-rules-pagination\">
        ";
        // line 56
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/javascript_pagination.html.twig", ["limit" => 10, "limitChoices" => [0 => 10, 1 => 20, 2 => 50, 3 => 100]]);
        // line 59
        echo "
      </div>
      <script type=\"text/html\" id=\"catalog-price-rule-tr-template\">
        <tr>
          <td class=\"catalog-price-rule-id\"></td>
          <td class=\"name\"></td>
          <td class=\"currency\"></td>
          <td class=\"country\"></td>
          <td class=\"group\"></td>
          <td class=\"shop\"></td>
          <td class=\"impact\"></td>
          <td class=\"from-qty\"></td>
          <td class=\"from\"></td>
          <td class=\"to\"></td>
          <td>
            <a
              href=\"\"
              type=\"button\"
              title=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit", [], "Admin.Actions"), "html", null, true);
        echo "\"
              class=\"js-edit-catalog-price-rule-btn btn tooltip-link\"><i class=\"material-icons\">edit</i>
            </a>
          </td>
        </tr>
      </script>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/catalog_price_rules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 77,  117 => 59,  115 => 56,  110 => 53,  102 => 47,  98 => 46,  94 => 45,  90 => 44,  86 => 43,  82 => 42,  78 => 41,  74 => 40,  70 => 39,  66 => 38,  57 => 32,  50 => 29,  46 => 28,  35 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/catalog_price_rules.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\FormTheme\\catalog_price_rules.html.twig");
    }
}
