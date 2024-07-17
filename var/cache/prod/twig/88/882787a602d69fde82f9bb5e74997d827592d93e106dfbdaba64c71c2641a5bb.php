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

/* @Modules/psxdesign/views/templates/components/alert_notification.html.twig */
class __TwigTemplate_e0f6c9c2690f5ebd9df7a688b99e9038116d4813be3a7f85dfafb05e322ddb3e extends Template
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
<div class=\"alert alert-info d-md-flex justify-content-between\">
  <div class=\"mb-2 mb-md-0 mr-md-2\">
    <h2 class=\"h4 mb-1\">
      ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("We have improved the Design section of your back office", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
    </h2>
    <p>
      ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enjoy a better experience and benefit from the latest improvements. Your settings and data will be preserved.", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
    </p>
  </div>
  <div class=\"pr-0 flex-shrink-0\">
    <form id=\"psxdesign-upgrade-form\" action=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["psxdesignUpgradeUrl"] ?? null), "html", null, true);
        echo "\" method=\"post\">
      <button type=\"submit\" class='btn btn-primary'>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Activate new features", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</button>
    </form>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/components/alert_notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 37,  56 => 36,  49 => 32,  43 => 29,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/components/alert_notification.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\components\\alert_notification.html.twig");
    }
}
