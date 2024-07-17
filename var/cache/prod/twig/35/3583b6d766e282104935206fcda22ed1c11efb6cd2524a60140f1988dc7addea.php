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

/* __string_template__1852c986c5800b63bff8cd5c6274baa577cfcc1fee4a26f01effcbf6596de652 */
class __TwigTemplate_e21aadb7a2f46b4838e8431c4f0f97d37e9fef0953d921575cc200c0572cebf4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Gestionnaire de modules • ALIOU SHOP</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr-fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'TG';
    var _PS_VERSION_ = '8.1.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique.';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '42dc33d4ec2d2f79e2fc4bb2031e161d';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = '0fdbebc8f1dfb02eccc8141d06b1e0f1';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/modules/manage?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0';
    var admin_notification_get_link = '/prestashop/admin660xnoy7bt3es3sehud/index.php/common/notifications?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/admin660xnoy7bt3es3sehud/index.php/common/notifications/ack?_token=";
        // line 40
        echo "C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop/admin660xnoy7bt3es3sehud/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop/admin660xnoy7bt3es3sehud/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin660xnoy7bt3es3sehud/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin660xnoy7bt3es3sehud/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.f8a9f5f9.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/module-catalog.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/connection-toolbar.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxdesign/views/css/admin/dashbo";
        // line 67
        echo "ard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin660xnoy7bt3es3sehud\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\";
var currency = {\"iso_code\":\"XOF\",\"sign\":\"CFA\",\"name\":\"Franc CFA (BCEAO)\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"XOF\",\"currencySymbol\":\"CFA\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":0,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psxDesignUpdateNotification = \"\\n<div class=\\\"psxdesign-notification\\\">\\n  1\\n<\\/div>\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin660xnoy7bt3es3sehud/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=8.1.0\"></script>
<script type=\"tex";
        // line 87
        echo "t/javascript\" src=\"/prestashop/admin660xnoy7bt3es3sehud/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin660xnoy7bt3es3sehud/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin660xnoy7bt3es3sehud/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/growl/jquery.growl.js?v=4.11.3\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/connection-toolbar.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=4.11.3\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/prestashop\\/admin660xnoy7bt3es3sehud\\/index.php?controller=AdminGamification&token=671213aa3beb05766d2cc2f68d44c571\";
            var current_id_tab = 40;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      text";
        // line 110
        echo "Color: '#FFFFFF',
      notificationGetUrl: '/prestashop/admin660xnoy7bt3es3sehud/index.php/common/notifications?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
    <script>
        window.userLocale  = 'fr';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script type=\"module\" src=\"/prestashop/modules/psxdesign/views/js/upgrade-notification.js\"></script>


";
        // line 126
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminmodulesmanage\"
  data-base-url=\"/prestashop/admin660xnoy7bt3es3sehud/index.php\"  data-token=\"C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/pseditionbasic/homepage?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\"></a>
      <span id=\"shop_version\">8.1.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/orders?token=b8ad7e73d3c727183275bb949d93ec75\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=228af9e9099539fafe81589535a74ee2\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/modules/manage?token=b8ad7e73d3c727183275bb949d93ec75\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=d68108e626e913e2fa360adab742";
        // line 160
        echo "d6a7\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/catalog/products-v2/create?token=b8ad7e73d3c727183275bb949d93ec75\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/catalog/categories/new?token=b8ad7e73d3c727183275bb949d93ec75\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"71\"
        data-icon=\"icon-AdminModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/improve/modules/manage?-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\"
        data-post-link=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminQuickAccesses&token=43afe163d731a25274d10bf621968ea0\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Modules - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminQuickAccesses&token=43afe163d731a25274d10bf621968ea0\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/admin660xnoy7bt3es3s";
        // line 199
        echo "ehud/index.php?controller=AdminSearch&amp;token=5b127510f3f3d9101143353de10c760d\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-";
        // line 216
        echo "item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/orders?token=b8ad7e73d3c727183275bb949d93ec75\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=228af9e9099539fafe81589535a74ee2\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/modules/manage?token=b8ad7e73d3c727183275bb949d93ec75\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=d68108e626e913e2fa360adab742d6a7\"
             data-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a c";
        // line 252
        echo "lass=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/catalog/products-v2/create?token=b8ad7e73d3c727183275bb949d93ec75\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/catalog/categories/new?token=b8ad7e73d3c727183275bb949d93ec75\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"138\"
      data-icon=\"icon-AdminModulesSf\"
      data-method=\"add\"
      data-url=\"index.php/improve/modules/manage?-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\"
      data-post-link=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminQuickAccesses&token=43afe163d731a25274d10bf621968ea0\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Modules - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminQuickAccesses&token=43afe163d731a25274d10bf621968ea0\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Votre boutique est en mode maintenance.&lt;/strong&gt;
          &lt;/p&g";
        // line 294
        echo "t;
          &lt;p class=&quot;text-left&quot;&gt;
              Vos visiteurs et clients ne peuvent pas accéder à votre boutique lorsque le mode maintenance est activé.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Pour gérer les paramètres de maintenance, rendez-vous sur la page Paramètres de la boutique &amp;gt; Paramètres généraux &amp;gt; Maintenance.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Les administrateurs peuvent accéder au front-office de la boutique sans que leur adresse IP ne soit enregistrée.
            &lt;/p&gt;
                  \"
             href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/shop/maintenance/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Mode maintenance</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class";
        // line 334
        echo "=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=82778bdcca1d6f07b58b3fe21f7aa0f2\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociau";
        // line 382
        echo "x en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/img/pr/default.jpg\" alt=\"Roland\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Roland</span>
      <";
        // line 432
        echo "/div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/employees/1/edit?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gérer votre compte PrestaShop
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminLogin&amp;logout=1&amp;token=ee460e488f3e52bbe08524526e3349eb\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/employees/toggle-navigation?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/pseditionbasic/homepage?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.0</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li c";
        // line 475
        echo "lass=\"category-title\" data-submenu=\"134\" id=\"tab-HOME\">
                <span class=\"title\">Bienvenue</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"135\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/pseditionbasic/homepage?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Accueil
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminDashboard&amp;token=e13ec6bc92430abc2316ee459c6b36a3\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Tableau de bord
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          ";
        // line 510
        echo "
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/orders/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/orders/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a ";
        // line 546
        echo "href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/orders/invoices/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/orders/credit-slips/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/orders/delivery-slips/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminCarts&amp;token=82778bdcca1d6f07b58b3fe21f7aa0f2\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                       ";
        // line 576
        echo "                       
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/catalog/products?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/catalog/products?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/catalog/categories?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Catégories
                                </a>
                              </li>

                   ";
        // line 607
        echo "                                                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/catalog/monitoring/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminAttributesGroups&amp;token=d565efd2dc81d108439e92dea542ae5d\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/catalog/brands/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop";
        // line 635
        echo "/admin660xnoy7bt3es3sehud/index.php/sell/attachments/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminCartRules&amp;token=d68108e626e913e2fa360adab742d6a7\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/stocks/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/customers/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
 ";
        // line 667
        echo "                                                   <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/customers/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/addresses/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminCustomerThreads&amp;token=909";
        // line 695
        echo "d904548fee3c39742ee04a6d13102\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminCustomerThreads&amp;token=909d904548fee3c39742ee04a6d13102\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/customer-service/order-messages/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"";
        // line 725
        echo "http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminReturn&amp;token=6e050b6757f986ba4c6d2b5a593180d2\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/metrics/legacy/stats?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/metrics/legacy/stats?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
       ";
        // line 756
        echo "                                                     
                              <li class=\"link-leveltwo\" data-submenu=\"156\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/metrics?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/mbo/modules/catalog/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                  ";
        // line 789
        echo "                                                
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"181\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/mbo/modules/catalog/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/modules/manage?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/improve/design/themes?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                 ";
        // line 818
        echo "                   keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"188\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/improve/design/themes?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Personnalisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"163\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=c4b64aef058c82aefe5e0cce258d8d36\" class=\"link\"> Modules du thème
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"185\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/mbo/themes/catalog/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                 ";
        // line 846
        echo " 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/design/mail_theme/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/design/cms-pages/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/design/modules/positions/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminImages&amp;token=d67227ab6312eb8f1";
        // line 874
        echo "a9122ec67739fec\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/link-widget/list?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminCarriers&amp;token=c36b5690dbbd23019396ce7f2c43d6fe\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5";
        // line 906
        echo "1\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminCarriers&amp;token=c36b5690dbbd23019396ce7f2c43d6fe\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/shipping/preferences/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"173\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminMbeConfiguration&amp;token=d6aafc90eb2c103d46767ea0238a244d\" class=\"link\"> MBE - Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"176\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminMbeShipping&amp;token=12a79a4569e702f312effc409ea8edc3\" class=\"link\"> MBE - Expéditions
                                </a>
                              </li>

          ";
        // line 935
        echo "                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/payment/payment_methods?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/payment/payment_methods?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a hre";
        // line 964
        echo "f=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/payment/preferences?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/international/localization/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/international/localization/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
  ";
        // line 995
        echo "                                                          
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/international/zones/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/international/taxes/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/international/translations/settings?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"149\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud";
        // line 1024
        echo "/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=e1594af8fc2ea401cda83b142e48cb3b\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-149\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"150\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=e1594af8fc2ea401cda83b142e48cb3b\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"152\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminPsfacebookModule&amp;token=f31004a7e09d7b7a9761b753e036a037\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
          ";
        // line 1055
        echo "                                
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"136\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/pseditionbasic/settings?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/shop/preferences/preferences?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
              ";
        // line 1090
        echo "                              </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/shop/preferences/preferences?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/shop/order-preferences/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/shop/product-preferences/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                             ";
        // line 1119
        echo " <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/shop/customer-preferences/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/shop/contacts/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/shop/seo-urls/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminSearchConf&amp;token=2854f616c7b4c7ee101de20099c2efc4\" class=\"link\"> Rechercher
                                </a>
                              <";
        // line 1146
        echo "/li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/system-information/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/system-information/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                          ";
        // line 1177
        echo "      <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/performance/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/administration/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/emails/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/import/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
   ";
        // line 1207
        echo "                                                         
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/employees/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/sql-requests/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/logs/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/webservice-keys/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Webse";
        // line 1233
        echo "rvice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/feature-flags/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/security/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"link\"> Sécurité
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"126\" id=\"subtab-AdminPsAssistantSettings\">
                    <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminPsAssistantSettings&amp;token=4ce3a8a9e079a1701d99bb173a198a09\" class=\"link\">
                      <i class=\"material-icons mi-extension\">e";
        // line 1261
        echo "xtension</i>
                      <span>
                      Assistance By PrestaShop
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"154\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminKlaviyoPsConfig&amp;token=e48e2e693c854d4e19779d555598f16c\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Gestionnaire de modules </li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/modules/manage?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" aria-current=\"page\">Modules</a>
            </li>
                  </ol>
  ";
        // line 1306
        echo "    </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Gestionnaire de modules          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Installer un module\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                                  >
                  <i class=\"material-icons\">cloud_upload</i>                  Installer un module
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D8.1.0%2526country%253Dfr/Aide?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   ";
        // line 1346
        echo "                                                                                                                                                                                                                                                                                                           <li class=\"nav-item\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/modules/manage?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"40\">
                      Modules
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/modules/alerts?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"41\">
                      Alertes
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/modules/updates?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"42\">
                      Mises à jour
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                     ";
        // line 1370
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Installer un module\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Installer un module
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
    ";
        // line 1389
        echo "           data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D8.1.0%2526country%253Dfr/Aide?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        <script>
  if (typeof window.mboCdc !== undefined && typeof window.mboCdc !== \"undefined\") {
    const renderModulesManagerMessage = window.mboCdc.renderModulesManagerMessage

    const context = {\"currency\":\"EUR\",\"iso_lang\":\"fr\",\"iso_code\":\"tg\",\"shop_version\":\"8.1.0\",\"shop_url\":\"http:\\/\\/localhost\\/prestashop\\/\",\"shop_uuid\":\"cf2cb978-10d1-4060-91c6-98cffa5b4be7\",\"mbo_token\":\"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzaG9wX3VybCI6Imh0dHA6Ly9sb2NhbGhvc3QvcHJlc3Rhc2hvcC8iLCJzaG9wX3V1aWQiOiJjZjJjYjk3OC0xMGQxLTQwNjAtOTFjNi05OGNmZmE1YjRiZTcifQ.JF8mgPa9UcCI1q1eljP4qnxCX2bkbjgpyiNtHSTNgFs\",\"mbo_version\":\"4.11.3\",\"mbo_reset_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/reset\\/ps_mbo?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\",\"user_id\":\"1\",\"admin_token\":\"C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\",\"refresh_url\":\"http:\\/\\/localhost\\/prestashop\\/admin660xnoy7bt3es3sehud\\/index.php?controller=apiSecurityPsMbo&token=9c16f33e124a7327de9dcb42c19fe6ec\",\"installed_modules\":[{\"id\":0,\"name\":\"blockreassurance\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.1.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blockreassurance?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"blockwishlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin";
        // line 1409
        echo "660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blockwishlist?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"contactform\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.4.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/contactform?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"dashactivity\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":null},{\"id\":0,\"name\":\"dashgoals\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"dashproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.4\",\"config_url\":null},{\"id\":0,\"name\":\"dashtrends\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"gamification\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"graphnvd3\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"gridhtml\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"gsitemap\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.4.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/gsitemap?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"klaviyopsautomation\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.6.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/klaviyopsautomation?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"mbeshipping\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.8\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/mbeshipping?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"pagesnotfound\",\"status\":\"ena";
        echo "bled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"productcomments\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.0.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/productcomments?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"psassistant\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.1.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psassistant?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"psgdpr\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.4.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psgdpr?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"psxdesign\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.6.7\",\"config_url\":null},{\"id\":0,\"name\":\"psxmarketingwithgoogle\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.73.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psxmarketingwithgoogle?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_accounts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"7.0.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_accounts?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_banner\",\"status\":\"enabled__mobile_disabled\",\"version\":\"2.1.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_banner?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_bestsellers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.6\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improv";
        echo "e\\/modules\\/manage\\/action\\/configure\\/ps_bestsellers?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_brandlist\",\"status\":\"disabled__mobile_disabled\",\"version\":\"1.0.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_brandlist?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_cashondelivery\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_categoryproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.7\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_categoryproducts?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_categorytree\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_categorytree?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_checkout\",\"status\":\"enabled__mobile_enabled\",\"version\":\"8.4.0.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_checkout?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_checkpayment\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_checkpayment?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_contactinfo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.3.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_contactinfo?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_crossselling\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"confi";
        echo "g_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_crossselling?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_currencyselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customeraccountlinks\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.2.0\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customersignin\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.5\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customtext\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.2.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_customtext?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_dataprivacy\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_dataprivacy?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_distributionapiclient\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.1.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_edition_basic\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.15\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_edition_basic?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_emailalerts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.4.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_emailalerts?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_emailsubscription\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.8.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_emailsubscription";
        echo "?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_eventbus\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.12\",\"config_url\":null},{\"id\":0,\"name\":\"ps_facebook\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.37.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_facebook?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_facetedsearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.16.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_facetedsearch?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_faviconnotificationbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_faviconnotificationbo?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_featuredproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.5\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_featuredproducts?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_googleanalytics\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.2.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_googleanalytics?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_imageslider\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.1.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_imageslider?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_languageselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"na";
        echo "me\":\"ps_linklist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"6.0.7\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_linklist?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_mainmenu\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.3.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_mainmenu?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_mbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.11.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_metrics\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.0.5\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_metrics?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_newproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_newproducts?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_searchbar\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_sharebuttons\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_sharebuttons?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_shoppingcart\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.7\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_shoppingcart?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_socialfollow\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.3.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xn";
        echo "oy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_socialfollow?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_specials\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_specials?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_supplierlist\",\"status\":\"disabled__mobile_disabled\",\"version\":\"1.0.6\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_supplierlist?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_themecusto\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.2.4\",\"config_url\":null},{\"id\":0,\"name\":\"ps_viewedproduct\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.2.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_viewedproduct?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"ps_wirepayment\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.2.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_wirepayment?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"statsbestcategories\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestcustomers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestmanufacturers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestsuppliers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestvouchers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1";
        echo "\",\"config_url\":null},{\"id\":0,\"name\":\"statscarrier\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statscatalog\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"statscheckup\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"statsdata\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/statsdata?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"statsforecast\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/statsforecast?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"},{\"id\":0,\"name\":\"statsnewsletter\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"statspersonalinfos\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"statsproduct\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"statsregistrations\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statssales\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":null},{\"id\":0,\"name\":\"statssearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":0,\"name\":\"statsstock\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null}],\"upgradable_modules\":[],\"accounts_user_id\":null,\"accounts_shop_id\":null,\"accounts_token\":\"\",\"accounts_component_loaded\":false,\"module_manager_updates_tab_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/updates?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\",\"module_catalog_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/";
        echo "modules\\/mbo\\/modules\\/catalog\\/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\",\"theme_catalog_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/modules\\/mbo\\/themes\\/catalog\\/?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\",\"php_version\":\"7.4.33\",\"shop_creation_date\":\"2024-07-08\",\"shop_business_sector_id\":null,\"shop_business_sector\":null,\"prestaShop_controller_class_name\":\"AdminModulesManage\"};

    renderModulesManagerMessage(context, '#module-manager-message-cdc-container')
  }
</script>
<div class=\"module-manager-message-wrapper cdc-container\" id=\"module-manager-message-cdc-container\" data-error-path=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/mbo/modules/catalog/cdc_error?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\"></div>


                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1422
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/pseditionbasic/homepage?_token=C7cALKRapf-J2LejwV9BP4BvtPAOVaT0syZY5f81CQ0\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1456
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 126
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1422
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1456
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__1852c986c5800b63bff8cd5c6274baa577cfcc1fee4a26f01effcbf6596de652";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1651 => 1456,  1630 => 1422,  1619 => 126,  1610 => 1456,  1570 => 1422,  1547 => 1409,  1525 => 1389,  1504 => 1370,  1478 => 1346,  1436 => 1306,  1389 => 1261,  1359 => 1233,  1331 => 1207,  1299 => 1177,  1266 => 1146,  1237 => 1119,  1206 => 1090,  1169 => 1055,  1136 => 1024,  1105 => 995,  1072 => 964,  1041 => 935,  1010 => 906,  976 => 874,  946 => 846,  916 => 818,  885 => 789,  850 => 756,  817 => 725,  785 => 695,  755 => 667,  721 => 635,  691 => 607,  658 => 576,  626 => 546,  588 => 510,  551 => 475,  506 => 432,  454 => 382,  404 => 334,  362 => 294,  318 => 252,  280 => 216,  261 => 199,  220 => 160,  181 => 126,  163 => 110,  138 => 87,  116 => 67,  87 => 40,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__1852c986c5800b63bff8cd5c6274baa577cfcc1fee4a26f01effcbf6596de652", "");
    }
}
