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

/* @PrestaShop/Admin/Multistore/product_header.html.twig */
class __TwigTemplate_2710a0c3d9778687de98db47d8d021c1d301d2c57482c29c1b94a6dedf429d3f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'multishop_header_right' => [$this, 'block_multishop_header_right'],
            'search_shops' => [$this, 'block_search_shops'],
            'all_shops_item' => [$this, 'block_all_shops_item'],
            'shop_group_item' => [$this, 'block_shop_group_item'],
            'shop_item' => [$this, 'block_shop_item'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/Multistore/header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Multistore/header.html.twig", "@PrestaShop/Admin/Multistore/product_header.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_multishop_header_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  <a class=\"header-multishop-view-action product-shops-action\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_products_select_shops", ["productId" => ($context["productId"] ?? null)]), "html", null, true);
        echo "\" target=\"_blank\" rel=\"nofollow\">
    ";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select stores", [], "Admin.Navigation.Header"), "html", null, true);
        echo "
    ";
        // line 31
        $this->loadTemplate("@PrestaShop/Admin/Multistore/shop_icon.html.twig", "@PrestaShop/Admin/Multistore/product_header.html.twig", 31)->display($context);
        // line 32
        echo "  </a>
  ";
        // line 33
        $this->displayParentBlock("multishop_header_right", $context, $blocks);
        echo "
";
    }

    // line 37
    public function block_search_shops($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 41
    public function block_all_shops_item($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 45
    public function block_shop_group_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "  <span class=\"multishop-modal-color-container\">
    <span class=\"multishop-modal-color\"";
        // line 47
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "color", [], "any", false, false, false, 47))) {
            echo " style=\"background-color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "color", [], "any", false, false, false, 47), "html", null, true);
            echo ";\"";
        }
        echo ">
    </span>
  </span>
  ";
        // line 50
        echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global") . " ") . twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "name", [], "any", false, false, false, 50)), "html", null, true);
        echo "
";
    }

    // line 54
    public function block_shop_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "  <div class=\"multishop-modal-item-left\">
    <span class=\"multishop-modal-color-container\">
      <span class=\"multishop-modal-color\"";
        // line 57
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "color", [], "any", false, false, false, 57))) {
            echo " style=\"background-color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "color", [], "any", false, false, false, 57), "html", null, true);
            echo ";\"";
        }
        echo ">
      </span>
    </span>
    <a class=\"multishop-modal-shop-name";
        // line 60
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "hasMainUrl", [], "method", false, false, false, 60), false))) {
            echo " multishop-modal-no-url\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "name", [], "any", false, false, false, 60), "html", null, true);
            echo "</a>";
        } else {
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\MultistoreUrlExtension']->generateShopUrl(($context["shop"] ?? null)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "name", [], "any", false, false, false, 60), "html", null, true);
            echo "</a>";
        }
        // line 61
        echo "  </div>
  ";
        // line 62
        if (twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "hasMainUrl", [], "method", false, false, false, 62)) {
            // line 63
            echo "    <a class=\"multishop-modal-shop-view\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "getBaseLink", [0 => twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 63)], "method", false, false, false, 63), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noreferrer\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View my store", [], "Admin.Navigation.Header"), "html", null, true);
            echo " <i class=\"material-icons\">visibility</i></a>
  ";
        } else {
            // line 65
            echo "    <a class=\"multishop-modal-shop-view\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminShopUrl", true, ["shop_id" => twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 65), "addshop_url" => 1]), "html", null, true);
            echo "\" rel=\"noreferrer\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure URL", [], "Admin.Actions"), "html", null, true);
            echo " <i class=\"material-icons\">visibility</i></a>
  ";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Multistore/product_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 65,  144 => 63,  142 => 62,  139 => 61,  127 => 60,  117 => 57,  113 => 55,  109 => 54,  103 => 50,  93 => 47,  90 => 46,  86 => 45,  80 => 41,  74 => 37,  68 => 33,  65 => 32,  63 => 31,  59 => 30,  54 => 29,  50 => 28,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Multistore/product_header.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Multistore\\product_header.html.twig");
    }
}
