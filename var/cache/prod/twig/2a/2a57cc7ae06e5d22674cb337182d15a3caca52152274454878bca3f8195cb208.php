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

/* @PrestaShop/Admin/Common/javascript_pagination.html.twig */
class __TwigTemplate_972e2c4da5f89316f9cef6542ddffe285f494a60a0072bc5b64f5dbbdeb198e6 extends Template
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
        // line 30
        echo "<ul class=\"pagination mb-0\">
  <li class=\"page-item first disabled\">
    <button type=\"button\" class=\"page-link first\" data-page=\"1\">1</button>
  </li>
  <li class=\"page-item previous disabled\">
    <button type=\"button\" class=\"page-link previous\" aria-label=\"Previous\"><span class=\"sr-only\">Previous</span></button>
  </li>
  <li class=\"page-item current active\">
    <label>
      <input
        name=\"paginator-jump-page\"
        class=\"jump-to-page\"
        type=\"text\"
        value=\"1\"
      />
    </label>
  </li>
  <li class=\"page-item next\">
    <button
      type=\"button\"
      class=\"page-link next\"
      aria-label=\"Next\"
      data-page=\"2\">
      <span class=\"sr-only\">Next</span>
    </button>
  </li>
  <li class=\"page-item last\">
    <button type=\"button\" class=\"page-link last\"></button>
  </li>
</ul>
<div class=\"mx-3\">
  <label class=\"col-form-label\" id=\"pagination-info\"
         data-pagination-info=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Viewing %from%-%to% on %total% (page %current_page% / %page_count%)", ["%from%" => "%from%", "%to%" => "%to%", "%total%" => "%total%", "%current_page%" => "%current_page%", "%page_count%" => "%page_count%"], "Admin.Catalog.Feature"), "html", null, true);
        // line 68
        echo "\"
  >
  </label>
</div>
<div class=\"mx-3\">
  <div class=\"form-group row mb-0\">
    <label for=\"paginator-limit\" class=\"col-form-label mr-2\">";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Items per page:", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
    <div>
      <select name=\"paginator-limit\" id=\"paginator-limit\" class=\"pagination-link custom-select\">
        ";
        // line 77
        if (!twig_in_filter(($context["limit"] ?? null), ($context["limitChoices"] ?? null))) {
            // line 78
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, ($context["limit"] ?? null), "html", null, true);
            echo "\" selected=\"selected\">";
            echo twig_escape_filter($this->env, ($context["limit"] ?? null), "html", null, true);
            echo "</option>
        ";
        }
        // line 80
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["limitChoices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["limitChoice"]) {
            // line 81
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $context["limitChoice"], "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(($context["limit"] ?? null), $context["limitChoice"]))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["limitChoice"], "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limitChoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "      </select>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/javascript_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 83,  105 => 81,  100 => 80,  92 => 78,  90 => 77,  84 => 74,  76 => 68,  74 => 62,  40 => 30,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/javascript_pagination.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\javascript_pagination.html.twig");
    }
}
