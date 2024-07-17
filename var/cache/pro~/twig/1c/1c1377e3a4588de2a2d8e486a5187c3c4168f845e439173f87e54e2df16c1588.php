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

/* @Modules/ps_mbo/views/templates/hook/twig/module_manager_message.html.twig */
class __TwigTemplate_d8b1caeacc8a5fa35db4048de747137bf87f67cb4333d610c9be8daeb3f4fc94 extends Template
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
        // line 19
        echo "<script>
  if (typeof window.mboCdc !== undefined && typeof window.mboCdc !== \"undefined\") {
    const renderModulesManagerMessage = window.mboCdc.renderModulesManagerMessage

    const context = ";
        // line 23
        echo json_encode(($context["shop_context"] ?? null));
        echo ";

    renderModulesManagerMessage(context, '#module-manager-message-cdc-container')
  }
</script>
<div class=\"module-manager-message-wrapper cdc-container\" id=\"module-manager-message-cdc-container\" data-error-path=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mbo_module_cdc_error");
        echo "\"></div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_mbo/views/templates/hook/twig/module_manager_message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 28,  43 => 23,  37 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_mbo/views/templates/hook/twig/module_manager_message.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\ps_mbo\\views\\templates\\hook\\twig\\module_manager_message.html.twig");
    }
}
