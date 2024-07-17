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

/* @PrestaShop/Admin/Sell/Catalog/Product/SpecificPrice/Blocks/list.html.twig */
class __TwigTemplate_d2f76c9ef8cb07028831339a3ffeb2af4c5eca8ef10573a1fb81579eb04f3773 extends Template
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
<div id=\"specific-price-list-container\" class=\"d-none\">
  <div id=\"specific-prices-loading\">
    <div class=\"loading-label\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading specific prices", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</div>
    <div class=\"spinner spinner-primary\"></div>
  </div>
  <table class=\"table\" id=\"specific-prices-list-table\">
    <thead class=\"thead-default\">
    <tr>
      <th>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
        echo "</th>
      <th>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Combination", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
      <th>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Currency", [], "Admin.Global"), "html", null, true);
        echo "</th>
      <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Country", [], "Admin.Global"), "html", null, true);
        echo "</th>
      <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global"), "html", null, true);
        echo "</th>
      <th>";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Store", [], "Admin.Global"), "html", null, true);
        echo "</th>
      <th>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer", [], "Admin.Global"), "html", null, true);
        echo "</th>
      <th>";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Specific price (tax excl.)", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
      <th>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discount (tax incl.)", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
      <th>";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Duration", [], "Admin.Global"), "html", null, true);
        echo "</th>
      <th>";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Units", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
      <th></th>
      <th></th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 51
        echo "    </tbody>
  </table>
  <div class=\"row justify-content-center\" id=\"specific-prices-pagination\">
    ";
        // line 54
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/javascript_pagination.html.twig", ["limit" => 10, "limitChoices" => [0 => 10, 1 => 20, 2 => 50, 3 => 100]]);
        // line 57
        echo "
  </div>
  <script type=\"text/html\" id=\"specific-price-tr-template\">
    <tr>
      <td class=\"specific-price-id\"></td>
      <td class=\"combination\"></td>
      <td class=\"currency\"></td>
      <td class=\"country\"></td>
      <td class=\"group\"></td>
      <td class=\"shop\"></td>
      <td class=\"customer\"></td>
      <td class=\"price\"></td>
      <td class=\"impact\"></td>
      <td class=\"period\" data-unlimited-text=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unlimited", [], "Admin.Global"), "html", null, true);
        echo "\">
        <label>
          ";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From", [], "Admin.Global"), "html", null, true);
        echo "
          <span class=\"from\"></span>
        </label>
        <br>
        <label>
          ";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To", [], "Admin.Global"), "html", null, true);
        echo "
          <span class=\"to\"></span>
        </label>
      </td>
      <td class=\"from-qty\"></td>
      <td>
        <button
          type=\"button\"
          title=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
        echo "\"
          class=\"js-delete-specific-price-btn btn tooltip-link\"
          data-confirm-title=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Specific price deletion", [], "Admin.Global"), "html", null, true);
        echo "\"
          data-confirm-message=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to delete this specific price?", [], "Admin.Global"), "html", null, true);
        echo "\"
          data-confirm-btn-label=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
        echo "\"
          data-cancel-btn-label=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "\"
          data-confirm-btn-class=\"btn-danger\"
        ><i class=\"material-icons\">delete</i>
        </button>
      </td>
      <td>
        <button
          type=\"button\"
          title=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit", [], "Admin.Actions"), "html", null, true);
        echo "\"
          class=\"js-edit-specific-price-btn btn tooltip-link\"
          data-modal-title=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit specific price", [], "Admin.Global"), "html", null, true);
        echo "\"
          data-confirm-button-label=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save and publish", [], "Admin.Actions"), "html", null, true);
        echo "\"
          data-cancel-button-label=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "\"
        >
          <i class=\"material-icons\">edit</i>
        </button>
      </td>
    </tr>
  </script>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/SpecificPrice/Blocks/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 102,  183 => 101,  179 => 100,  174 => 98,  163 => 90,  159 => 89,  155 => 88,  151 => 87,  146 => 85,  135 => 77,  127 => 72,  122 => 70,  107 => 57,  105 => 54,  100 => 51,  91 => 44,  87 => 43,  83 => 42,  79 => 41,  75 => 40,  71 => 39,  67 => 38,  63 => 37,  59 => 36,  55 => 35,  51 => 34,  42 => 28,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/SpecificPrice/Blocks/list.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\SpecificPrice\\Blocks\\list.html.twig");
    }
}
