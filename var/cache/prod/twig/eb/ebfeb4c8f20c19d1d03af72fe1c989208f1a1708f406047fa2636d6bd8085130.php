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

/* @PrestaShop/Admin/Exception/error.html.twig */
class __TwigTemplate_7ef34ee6eeb9134613314ebf10b9b49f64cfb11e4fc3b3434ead40725f921445 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/base.html.twig", "@PrestaShop/Admin/Exception/error.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("themes/new-theme/public/theme" . ($context["rtl_suffix"] ?? null)) . ".css")), "html", null, true);
        echo "\"/>
";
    }

    // line 33
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "  ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Oops... looks like an unexpected error occurred", [], "Admin.Notifications.Error"), "html", null, true);
        echo "
";
    }

    // line 37
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "  <div class=\"container\">
    <div class=\"mt-5\">
      <div class=\"card\">
        <div class=\"card-body text-center\">
          <img class=\"img-responsive\"
               src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/img/error/500.svg"), "html", null, true);
        echo "\"
               alt=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Oops... looks like an unexpected error occurred", [], "Admin.Notifications.Error"), "html", null, true);
        echo "\">

          <div class=\"mt-3\">
            <p class=\"error-header\">
              ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Oops... looks like an unexpected error occurred", [], "Admin.Notifications.Error"), "html", null, true);
        echo "
            </p>

            ";
        // line 51
        if (($context["exception"] ?? null)) {
            // line 52
            echo "              <div class=\"mx-auto\">
                <p class=\"mb-0\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "message", [], "any", false, false, false, 53), "html", null, true);
            echo "</p>
                <p class=\"mb-0\">[";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "class", [], "any", false, false, false, 54), "html", null, true);
            echo "
                  ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "code", [], "any", false, false, false, 55), "html", null, true);
            echo "]</p>
              </div>
            ";
        }
        // line 58
        echo "
            <div class=\"mt-4\">
              <form action=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_errors_enable_debug_mode");
        echo "\" method=\"post\" class=\"d-inline\">
                <input type=\"hidden\" name=\"_redirect_url\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 61), "requestUri", [], "any", false, false, false, 61), "html", null, true);
        echo "\">

                <button class=\"btn btn-outline-secondary\" type=\"submit\">
                  ";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enable debug mode", [], "Admin.Actions"), "html", null, true);
        echo "
                </button>
              </form>
              <button class=\"btn btn-primary js-go-back-btn ml-3\" type=\"button\">
                ";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to previous page", [], "Admin.Actions"), "html", null, true);
        echo "
              </button>
            </div>

            <p class=\"mt-3\">
              <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getFunction('documentation_link')->getCallable()("debug_mode"), "html", null, true);
        echo "\" target=\"_blank\">
                ";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Learn more about debug mode", [], "Admin.Actions"), "html", null, true);
        echo "
                <i class=\"material-icons rtl-flip\">arrow_right_alt</i>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
";
    }

    // line 85
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/error.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 86,  169 => 85,  155 => 74,  151 => 73,  143 => 68,  136 => 64,  130 => 61,  126 => 60,  122 => 58,  116 => 55,  112 => 54,  108 => 53,  105 => 52,  103 => 51,  97 => 48,  90 => 44,  86 => 43,  79 => 38,  75 => 37,  68 => 34,  64 => 33,  58 => 30,  53 => 29,  49 => 28,  38 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Exception/error.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Exception\\error.html.twig");
    }
}
