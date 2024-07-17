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

/* @PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig */
class __TwigTemplate_8dea6434acfb3677054534e3f7bb538075f1baecd5cff523070eb6aff97f1961 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "<div class=\"row\">
  <div class=\"col-lg-6\">
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configuration information", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p class=\"mb-0\">";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You must provide this information when reporting an issue on GitHub or on the forum.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</p>
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Server information", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        ";
        // line 45
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "uname", [], "any", false, false, false, 45))) {
            // line 46
            echo "          <p class=\"mb-0\">
            <strong>";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Server information:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "uname", [], "any", false, false, false, 47), "html", null, true);
            echo "
          </p>
        ";
        }
        // line 50
        echo "        <p class=\"mb-0\">
          <strong>";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Server software version:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "server", [], "any", false, false, false, 51), "version", [], "any", false, false, false, 51), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PHP version:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "server", [], "any", false, false, false, 54), "php", [], "any", false, false, false, 54), "version", [], "any", false, false, false, 54), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Memory limit:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "server", [], "any", false, false, false, 57), "php", [], "any", false, false, false, 57), "memoryLimit", [], "any", false, false, false, 57), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Max execution time:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "server", [], "any", false, false, false, 60), "php", [], "any", false, false, false, 60), "maxExecutionTime", [], "any", false, false, false, 60), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upload Max File size:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "server", [], "any", false, false, false, 63), "php", [], "any", false, false, false, 63), "maxFileSizeUpload", [], "any", false, false, false, 63), "html", null, true);
        echo "
        </p>
        ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "instaWebInstalled", [], "any", false, false, false, 65)) {
            // line 66
            echo "          <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PageSpeed module for Apache installed (mod_instaweb)", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</p>
        ";
        }
        // line 68
        echo "      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Database information", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p class=\"mb-0\">
          <strong>";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL version:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "database", [], "any", false, false, false, 77), "version", [], "any", false, false, false, 77), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL server:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "database", [], "any", false, false, false, 80), "server", [], "any", false, false, false, 80), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL name:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "database", [], "any", false, false, false, 83), "name", [], "any", false, false, false, 83), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL user:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "database", [], "any", false, false, false, 86), "user", [], "any", false, false, false, 86), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tables prefix:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "database", [], "any", false, false, false, 89), "prefix", [], "any", false, false, false, 89), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL engine:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "database", [], "any", false, false, false, 92), "engine", [], "any", false, false, false, 92), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL driver:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "database", [], "any", false, false, false, 95), "driver", [], "any", false, false, false, 95), "html", null, true);
        echo "
        </p>
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of overrides", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        ";
        // line 105
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "overrides", [], "any", false, false, false, 105))) {
            // line 106
            echo "          <div class=\"alert alert-success mb-0\" role=\"alert\"><p class=\"alert-text\">
            ";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No overrides have been found.", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
          </p></div>
        ";
        } else {
            // line 110
            echo "          <ul>
            ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "overrides", [], "any", false, false, false, 111));
            foreach ($context['_seq'] as $context["_key"] => $context["override"]) {
                // line 112
                echo "              <li>";
                echo twig_escape_filter($this->env, $context["override"], "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['override'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "          </ul>
        ";
        }
        // line 116
        echo "      </div>
    </div>
  </div>
  <div class=\"col-lg-6\">
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Store information", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p class=\"mb-0\">
          <strong>";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PrestaShop version:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "shop", [], "any", false, false, false, 126), "version", [], "any", false, false, false, 126), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shop URL:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "shop", [], "any", false, false, false, 129), "url", [], "any", false, false, false, 129), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shop path:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "shop", [], "any", false, false, false, 132), "path", [], "any", false, false, false, 132), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Current theme in use:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "shop", [], "any", false, false, false, 135), "theme", [], "any", false, false, false, 135), "html", null, true);
        echo "
        </p>
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mail configuration", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        ";
        // line 145
        if (twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "isNativePHPmail", [], "any", false, false, false, 145)) {
            // line 146
            echo "          <p class=\"mb-0\">
            <strong>";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mail method:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are using /usr/sbin/sendmail", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
          </p>
        ";
        } else {
            // line 150
            echo "          <p class=\"mb-0\">
            <strong>";
            // line 151
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mail method:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are using your own SMTP parameters.", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
          </p>
          <p class=\"mb-0\">
            <strong>";
            // line 154
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SMTP server:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "smtp", [], "any", false, false, false, 154), "server", [], "any", false, false, false, 154), "html", null, true);
            echo "
          </p>
          <p class=\"mb-0\">
            <strong>";
            // line 157
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SMTP username:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong>
            ";
            // line 158
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "smtp", [], "any", false, false, false, 158), "user", [], "any", false, false, false, 158))) {
                // line 159
                echo "              ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Defined", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "
            ";
            } else {
                // line 161
                echo "              <span style=\"color:red;\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not defined", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "</span>
            ";
            }
            // line 163
            echo "          </p>
          <p class=\"mb-0\">
            <strong>";
            // line 165
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SMTP password:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong>
            ";
            // line 166
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "smtp", [], "any", false, false, false, 166), "password", [], "any", false, false, false, 166))) {
                // line 167
                echo "              ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Defined", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "
            ";
            } else {
                // line 169
                echo "              <span style=\"color:red;\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not defined", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "</span>
            ";
            }
            // line 171
            echo "          </p>
          <p class=\"mb-0\">
            <strong>";
            // line 173
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Encryption:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "smtp", [], "any", false, false, false, 173), "encryption", [], "any", false, false, false, 173), "html", null, true);
            echo "
          </p>
          <p class=\"mb-0\">
            <strong>";
            // line 176
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SMTP port:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "smtp", [], "any", false, false, false, 176), "port", [], "any", false, false, false, 176), "html", null, true);
            echo "
          </p>
        ";
        }
        // line 179
        echo "      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your information", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p class=\"mb-0\">
          <strong>";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your web browser:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, ($context["userAgent"] ?? null), "html", null, true);
        echo "
        </p>
      </div>
    </div>

    <div class=\"card\" id=\"checkConfiguration\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Check your configuration", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        ";
        // line 198
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["requirements"] ?? null), "failRequired", [], "any", false, false, false, 198), false))) {
            // line 199
            echo "          <p class=\"mb-0\">
            <strong>";
            // line 200
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Required parameters:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong>
            <span class=\"text-success\">";
            // line 201
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("OK", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "</span>
          </p>
        ";
        } else {
            // line 204
            echo "          <p class=\"mb-0\">
            <strong>";
            // line 205
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Required parameters:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong>
            <span class=\"text-danger\">";
            // line 206
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please fix the following error(s)", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "</span>
          </p>
          <ul>
            ";
            // line 209
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["requirements"] ?? null), "testsRequired", [], "any", false, false, false, 209));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 210
                echo "              ";
                if ((0 === twig_compare("fail", $context["value"]))) {
                    // line 211
                    echo "                <li>";
                    echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["requirements"] ?? null), "testsErrors", [], "any", false, false, false, 211)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), "html", null, true);
                    echo "</li>
              ";
                }
                // line 213
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "          </ul>
        ";
        }
        // line 216
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["requirements"] ?? null), "failOptional", [], "any", true, true, false, 216)) {
            // line 217
            echo "          ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["requirements"] ?? null), "failOptional", [], "any", false, false, false, 217), false))) {
                // line 218
                echo "            <p class=\"mb-0\">
              <strong>";
                // line 219
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional parameters:", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "</strong>
              <span class=\"text-success\">";
                // line 220
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("OK", [], "Admin.Advparameters.Notification"), "html", null, true);
                echo "</span>
            </p>
          ";
            } else {
                // line 223
                echo "            <p class=\"mb-0\">
              <strong>";
                // line 224
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional parameters:", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "</strong>
              <span class=\"text-danger\">";
                // line 225
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please fix the following error(s)", [], "Admin.Advparameters.Notification"), "html", null, true);
                echo "</span>
            </p>
            <ul>
              ";
                // line 228
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["requirements"] ?? null), "testsOptional", [], "any", false, false, false, 228));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 229
                    echo "                ";
                    if ((0 === twig_compare("fail", $context["value"]))) {
                        // line 230
                        echo "                  <li>";
                        echo twig_escape_filter($this->env, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["requirements"] ?? null), "testsErrors", [], "any", false, false, false, 230)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["key"]] ?? null) : null), "html", null, true);
                        echo "</li>
                ";
                    }
                    // line 232
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 233
                echo "            </ul>
          ";
            }
            // line 235
            echo "        ";
        }
        // line 236
        echo "      </div>
    </div>
  </div>
</div>

<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">info_outline</i> ";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of changed files", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\" id=\"changedFiles\">
    <i class=\"material-icons\">loop</i> ";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Checking files...", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
  </div>
</div>

<script>
  \$(document).ready(function()
  {
    var translations = {
      missing: '";
        // line 254
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Missing files", [], "Admin.Advparameters.Notification"), "js"), "html", null, true);
        echo "',
      updated: '";
        // line 255
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Updated files", [], "Admin.Advparameters.Notification"), "js"), "html", null, true);
        echo "',
      changesDetected: '";
        // line 256
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Changed/missing files have been detected.", [], "Admin.Advparameters.Notification"), "js"), "html", null, true);
        echo "',
      noChangeDetected: '";
        // line 257
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No change has been detected in your files.", [], "Admin.Advparameters.Notification"), "js"), "html", null, true);
        echo "'
    };

    \$.ajax({
      type: 'POST',
      url: '";
        // line 262
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_information_check_files");
        echo "',
      data: {},
      dataType: 'json',
      success: function(json)
      {
        var tab = {
          'missing': translations.missing,
          'updated': translations.updated,
        };

        if (json.missing.length || json.updated.length) {
          \$('#changedFiles').html('<div class=\"alert alert-warning\" role=\"alert\"><p class=\"alert-text\">' + translations.changesDetected + '</p></div>');
        } else {
          \$('#changedFiles').html('<div class=\"alert alert-success mb-0\" role=\"alert\"><p class=\"alert-text\">' + translations.noChangeDetected + '</p></div>');
        }

        \$.each(tab, function(key, lang) {
          if (json[key].length) {
            var html = \$('<ul>').attr('id', key+'_files');
            \$(json[key]).each(function(key, file) {
              html.append(\$('<li>').html(file))
            });
            \$('#changedFiles')
              .append(\$('<h4>').html(lang+' ('+json[key].length+')'))
              .append(html);
          }
        });
      }
    });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  587 => 262,  579 => 257,  575 => 256,  571 => 255,  567 => 254,  556 => 246,  550 => 243,  541 => 236,  538 => 235,  534 => 233,  528 => 232,  522 => 230,  519 => 229,  515 => 228,  509 => 225,  505 => 224,  502 => 223,  496 => 220,  492 => 219,  489 => 218,  486 => 217,  483 => 216,  479 => 214,  473 => 213,  467 => 211,  464 => 210,  460 => 209,  454 => 206,  450 => 205,  447 => 204,  441 => 201,  437 => 200,  434 => 199,  432 => 198,  426 => 195,  414 => 188,  407 => 184,  400 => 179,  392 => 176,  384 => 173,  380 => 171,  374 => 169,  368 => 167,  366 => 166,  362 => 165,  358 => 163,  352 => 161,  346 => 159,  344 => 158,  340 => 157,  332 => 154,  324 => 151,  321 => 150,  313 => 147,  310 => 146,  308 => 145,  302 => 142,  290 => 135,  282 => 132,  274 => 129,  266 => 126,  259 => 122,  251 => 116,  247 => 114,  238 => 112,  234 => 111,  231 => 110,  225 => 107,  222 => 106,  220 => 105,  214 => 102,  202 => 95,  194 => 92,  186 => 89,  178 => 86,  170 => 83,  162 => 80,  154 => 77,  147 => 73,  140 => 68,  134 => 66,  132 => 65,  125 => 63,  117 => 60,  109 => 57,  101 => 54,  93 => 51,  90 => 50,  82 => 47,  79 => 46,  77 => 45,  71 => 42,  62 => 36,  56 => 33,  50 => 29,  46 => 28,  35 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\system_information.html.twig");
    }
}
