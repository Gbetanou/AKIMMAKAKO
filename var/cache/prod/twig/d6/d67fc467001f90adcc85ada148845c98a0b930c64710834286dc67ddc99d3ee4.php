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

/* @PrestaShop/Admin/Common/Grid/Actions/Bulk/ajax.html.twig */
class __TwigTemplate_33b254a722807efecd615f034340ee93e1289032bd6b4e08f8a196da1920e1d2 extends Template
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
<button id=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_sprintf("%s_grid_bulk_action_%s", twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "id", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "id", [], "any", false, false, false, 26)), "html", null, true);
        echo "\"
        class=\"dropdown-item js-bulk-action-ajax-btn ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 27), "class", [], "any", false, false, false, 27), "html", null, true);
        echo "\"
        type=\"button\"
        data-bulk-action=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "id", [], "any", false, false, false, 29), "html", null, true);
        echo "\"
        data-ajax-url=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 30), "ajax_route", [], "any", false, false, false, 30), "html", null, true);
        echo "\"
        data-route-params=\"";
        // line 31
        echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 31), "route_params", [], "any", false, false, false, 31)), "html", null, true);
        echo "\"
        data-request-param-name=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 32), "request_param_name", [], "any", false, false, false, 32), "html", null, true);
        echo "\"
        data-request-bulk-chunk-size=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 33), "bulk_chunk_size", [], "any", false, false, false, 33), "html", null, true);
        echo "\"
        data-request-reload-after-bulk=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 34), "reload_after_bulk", [], "any", false, false, false, 34), "html", null, true);
        echo "\"
        data-confirm-bulk-action=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 35), "confirm_bulk_action", [], "any", false, false, false, 35), "html", null, true);
        echo "\"
        data-confirm-title=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 36), "modal_confirm_title", [], "any", false, false, false, 36), "html", null, true);
        echo "\"
        data-cancel-label=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 37), "modal_cancel", [], "any", false, false, false, 37), "html", null, true);
        echo "\"
        data-progress-title=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 38), "modal_progress_title", [], "any", false, false, false, 38), "html", null, true);
        echo "\"
        data-progress-message=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 39), "modal_progress_message", [], "any", false, false, false, 39), "html", null, true);
        echo "\"
        data-close-label=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 40), "modal_close", [], "any", false, false, false, 40), "html", null, true);
        echo "\"
        data-stop-processing=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 41), "modal_stop_processing", [], "any", false, false, false, 41), "html", null, true);
        echo "\"
        data-errors-message=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 42), "modal_errors_message", [], "any", false, false, false, 42), "html", null, true);
        echo "\"
        data-back-to-processing=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 43), "modal_back_to_processing", [], "any", false, false, false, 43), "html", null, true);
        echo "\"
        data-download-error-log=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 44), "modal_download_error_log", [], "any", false, false, false, 44), "html", null, true);
        echo "\"
        data-view-error-log=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 45), "modal_view_error_log", [], "any", false, false, false, 45), "html", null, true);
        echo "\"
        data-view-error-title=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 46), "modal_error_title", [], "any", false, false, false, 46), "html", null, true);
        echo "\"
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 47), "attributes", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
            // line 48
            echo "        ";
            echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo ">
  ";
        // line 51
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 51))) {
            // line 52
            echo "    <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 52), "html", null, true);
            echo "</i>
  ";
        }
        // line 54
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "name", [], "any", false, false, false, 54), "html", null, true);
        echo "
</button>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Bulk/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 54,  141 => 52,  139 => 51,  136 => 50,  125 => 48,  121 => 47,  117 => 46,  113 => 45,  109 => 44,  105 => 43,  101 => 42,  97 => 41,  93 => 40,  89 => 39,  85 => 38,  81 => 37,  77 => 36,  73 => 35,  69 => 34,  65 => 33,  61 => 32,  57 => 31,  53 => 30,  49 => 29,  44 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Actions/Bulk/ajax.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Actions\\Bulk\\ajax.html.twig");
    }
}
