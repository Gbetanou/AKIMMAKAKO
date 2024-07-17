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

/* __string_template__be09bbe69db045006adf6438ff13f84d290d5bfe79c85c4dd21f9cd50529546d */
class __TwigTemplate_cef1fa40b8257409bd2f852399aab250b8707bf2967df9d0f15ddb59beb07bb1 extends Template
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

<title>Accueil • ALIOU SHOP</title>

  <script type=\"text/javascript\">
    var help_class_name = 'HOME';
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
    var token = 'a10df1684e6e892fe6d2b921d1fffe40';
    var currentIndex = 'index.php?controller=HOME';
    var employee_token = '0fdbebc8f1dfb02eccc8141d06b1e0f1';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/modules/manage?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y';
    var admin_notification_get_link = '/prestashop/admin660xnoy7bt3es3sehud/index.php/common/notifications?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/admin660xnoy7bt3es3sehud/index.php/common/notifications/ack?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y'";
        // line 40
        echo ";
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
      <link href=\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin660xnoy7bt3es3sehud\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\";
var conte";
        // line 70
        echo "xtPsAccounts = {\"currentContext\":{\"type\":1,\"id\":1},\"psxName\":\"ps_edition_basic\",\"psIs17\":true,\"psAccountsVersion\":\"7.0.3\",\"psAccountsIsInstalled\":true,\"psAccountsInstallLink\":null,\"psAccountsIsEnabled\":true,\"psAccountsEnableLink\":\"http:\\/\\/localhost\\/prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/enable\\/ps_accounts?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\",\"psAccountsIsUptodate\":true,\"psAccountsUpdateLink\":null,\"user\":{\"uuid\":null,\"email\":null,\"emailIsValidated\":false,\"isSuperAdmin\":true},\"backendUser\":{\"email\":\"rolandgbetanou@gmail.com\",\"employeeId\":1,\"isSuperAdmin\":true},\"currentShop\":{\"id\":\"1\",\"name\":\"ALIOU SHOP\",\"domain\":\"localhost\",\"domainSsl\":\"localhost\",\"physicalUri\":\"\\/prestashop\\/\",\"virtualUri\":\"\",\"frontUrl\":\"https:\\/\\/localhost\\/prestashop\\/\",\"uuid\":null,\"publicKey\":\"-----BEGIN RSA PUBLIC KEY-----\\r\\nMIGJAoGBAM9QlO\\/cEHtcs1RhUMp3MyZXe8eZLdY9RVODu0ljXguuryjcvVaH8ZWG\\r\\nP9sI2rf21sOKwujPM3yrAd3ytx\\/o0e0kiNZ9PIBcAlh2VlGrGSlLhqAtOTJ9PFhZ\\r\\ncFGMs4aFD+UEDLPI2ngxkLH9zX3otE9KJ+TjuU4TgXMoScpJQU9nAgMBAAE=\\r\\n-----END RSA PUBLIC KEY-----\",\"employeeId\":null,\"user\":{\"email\":null,\"emailIsValidated\":false,\"uuid\":null},\"url\":\"http:\\/\\/localhost\\/prestashop\\/admin660xnoy7bt3es3sehud\\/index.php?controller=AdminModules&configure=ps_edition_basic&setShopContext=s-1&token=368398cba103936ea4d2e9a446f6b040\",\"isLinkedV4\":false,\"unlinkedAuto\":false,\"multishop\":false,\"moduleName\":\"ps_edition_basic\",\"psVersion\":\"8.1.0\"},\"isShopContext\":true,\"superAdminEmail\":\"rolandgbetanou@gmail.com\",\"onboardingLink\":\"https:\\/\\/accounts.distribution.prestashop.net?shops=W3siaWQiOiIxIiwibmFtZSI6IkFMSU9VIFNIT1AiLCJkb21haW4iOiJsb2NhbGhvc3QiLCJkb21haW5Tc2wiOiJsb2NhbGhvc3QiLCJwaHlzaWNhbFVyaSI6IlwvcHJlc3Rhc2hvcFwvIiwidmlydHVhbFVyaSI6IiIsImZyb250VXJsIjoiaHR0cHM6XC9cL2xvY2FsaG9zdFwvcHJlc3Rhc2hvcFwvIiwidXVpZCI6bnVsbCwicHVibGljS2V5IjoiLS0tLS1CRUdJTiBSU0EgUFVCTElDIEtFWS0tLS0tXHJcbk1JR0pBb0dCQU05UWxPXC9jRUh0Y3MxUmhVTXAzTXlaWGU4ZVpMZFk5UlZPRHUwbGpYZ3V1cnlqY3ZWYUg4W";
        echo "ldHXHJcblA5c0kycmYyMXNPS3d1alBNM3lyQWQzeXR4XC9vMGUwa2lOWjlQSUJjQWxoMlZsR3JHU2xMaHFBdE9USjlQRmhaXHJcbmNGR01zNGFGRCtVRURMUEkybmd4a0xIOXpYM290RTlLSitUanVVNFRnWE1vU2NwSlFVOW5BZ01CQUFFPVxyXG4tLS0tLUVORCBSU0EgUFVCTElDIEtFWS0tLS0tIiwiZW1wbG95ZWVJZCI6IjEiLCJ1c2VyIjp7ImVtYWlsIjpudWxsLCJlbWFpbElzVmFsaWRhdGVkIjpmYWxzZSwidXVpZCI6bnVsbH0sInVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdFwvcHJlc3Rhc2hvcFwvYWRtaW42NjB4bm95N2J0M2VzM3NlaHVkXC9pbmRleC5waHA\\/Y29udHJvbGxlcj1BZG1pbk1vZHVsZXMmY29uZmlndXJlPXBzX2VkaXRpb25fYmFzaWMmc2V0U2hvcENvbnRleHQ9cy0xJnRva2VuPTM2ODM5OGNiYTEwMzkzNmVhNGQyZTlhNDQ2ZjZiMDQwIiwiaXNMaW5rZWRWNCI6ZmFsc2UsInVubGlua2VkQXV0byI6ZmFsc2UsIm11bHRpc2hvcCI6ZmFsc2UsIm1vZHVsZU5hbWUiOiJwc19lZGl0aW9uX2Jhc2ljIiwicHNWZXJzaW9uIjoiOC4xLjAifV0=\",\"ssoResendVerificationEmail\":\"https:\\/\\/auth.prestashop.com\\/account\\/send-verification-email\",\"manageAccountLink\":\"https:\\/\\/auth.prestashop.com\\/login?lang=fr\",\"isOnboardedV4\":false,\"shops\":[{\"id\":\"1\",\"name\":\"Default\",\"shops\":[{\"id\":\"1\",\"name\":\"ALIOU SHOP\",\"domain\":\"localhost\",\"domainSsl\":\"localhost\",\"physicalUri\":\"\\/prestashop\\/\",\"virtualUri\":\"\",\"frontUrl\":\"https:\\/\\/localhost\\/prestashop\\/\",\"uuid\":null,\"publicKey\":\"-----BEGIN RSA PUBLIC KEY-----\\r\\nMIGJAoGBAM9QlO\\/cEHtcs1RhUMp3MyZXe8eZLdY9RVODu0ljXguuryjcvVaH8ZWG\\r\\nP9sI2rf21sOKwujPM3yrAd3ytx\\/o0e0kiNZ9PIBcAlh2VlGrGSlLhqAtOTJ9PFhZ\\r\\ncFGMs4aFD+UEDLPI2ngxkLH9zX3otE9KJ+TjuU4TgXMoScpJQU9nAgMBAAE=\\r\\n-----END RSA PUBLIC KEY-----\",\"employeeId\":null,\"user\":{\"email\":null,\"emailIsValidated\":false,\"uuid\":null},\"url\":\"http:\\/\\/localhost\\/prestashop\\/admin660xnoy7bt3es3sehud\\/index.php?controller=AdminModules&configure=ps_edition_basic&setShopContext=s-1&token=368398cba103936ea4d2e9a446f6b040\",\"isLinkedV4\":false,\"unlinkedAuto\":false,\"multishop\":false,\"moduleName\":\"ps_edition_basic\",\"psVersion\":\"8.1.0\",\"moduleVersion\":\"7.0.3\"}],\"multishop\":false,\"moduleName\":\"ps_edition_basic\",\"psVersion\":\"8.1.0\"}],\"adminAjaxLink\":\"http:\\/\\/localhost\\/prestashop\\/admin660xnoy7bt3es3sehud\\/index.php?controller=AdminAjaxPsAccounts";
        echo "&ajax=1&token=e0eac1186589b001128b0c6562f91e83\",\"accountsUiUrl\":\"https:\\/\\/accounts.distribution.prestashop.net\",\"dependencies\":{\"ps_eventbus\":{\"isInstalled\":true,\"installLink\":\"http:\\/\\/localhost\\/prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/install\\/ps_eventbus?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\",\"isEnabled\":true,\"enableLink\":\"http:\\/\\/localhost\\/prestashop\\/admin660xnoy7bt3es3sehud\\/index.php\\/improve\\/modules\\/manage\\/action\\/enable\\/ps_eventbus?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"}}};
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
<script type";
        // line 83
        echo "=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin660xnoy7bt3es3sehud/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin660xnoy7bt3es3sehud/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin660xnoy7bt3es3sehud/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=4.11.3\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/prestashop\\/admin660xnoy7bt3es3sehud\\/index.php?controller=AdminGamification&token=671213aa3beb05766d2cc2f68d44c571\";
            var current_id_tab = 134;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/admin660xnoy7bt3es3sehud/index.php/common/notifications?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
    ";
        // line 108
        echo "  CHECKBOX_MESSAGE: 1,
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
        // line 120
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr home\"
  data-base-url=\"/prestashop/admin660xnoy7bt3es3sehud/index.php\"  data-token=\"Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/pseditionbasic/homepage?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"></a>
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
         href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=d68108e626e913e2fa360adab742d6a7\"
        ";
        // line 155
        echo "         data-item=\"Nouveau bon de réduction\"
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
        data-rand=\"176\"
        data-icon=\"\"
        data-method=\"add\"
        data-url=\"index.php/modules/pseditionbasic/homepage\"
        data-post-link=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminQuickAccesses&token=43afe163d731a25274d10bf621968ea0\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Bienvenue - Liste\"
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
      action=\"/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminSearch&amp;token=5b12751";
        // line 193
        echo "0f3f3d9101143353de10c760d\"
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
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder";
        // line 210
        echo "=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
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
      <a class=\"dropdown-item quick-row-link\"
       href=\"http:/";
        // line 247
        echo "/localhost/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/catalog/products-v2/create?token=b8ad7e73d3c727183275bb949d93ec75\"
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
      data-rand=\"90\"
      data-icon=\"\"
      data-method=\"add\"
      data-url=\"index.php/modules/pseditionbasic/homepage\"
      data-post-link=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminQuickAccesses&token=43afe163d731a25274d10bf621968ea0\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Bienvenue - Liste\"
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
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Vos visiteurs et clients ne peuve";
        // line 290
        echo "nt pas accéder à votre boutique lorsque le mode maintenance est activé.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Pour gérer les paramètres de maintenance, rendez-vous sur la page Paramètres de la boutique &amp;gt; Paramètres généraux &amp;gt; Maintenance.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Les administrateurs peuvent accéder au front-office de la boutique sans que leur adresse IP ne soit enregistrée.
            &lt;/p&gt;
                  \"
             href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/shop/maintenance/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"
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
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              dat";
        // line 331
        echo "a-type=\"order\"
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
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          ";
        // line 379
        echo "</div>
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
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin660xnoy7bt";
        // line 428
        echo "3es3sehud/index.php/configure/advanced/employees/1/edit?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/employees/toggle-navigation?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/pseditionbasic/homepage?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.0</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"134\" id=\"tab-HOME\">
                <span class=\"t";
        // line 470
        echo "itle\">Bienvenue</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"135\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/pseditionbasic/homepage?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\">
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
        // line 507
        echo " 
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/orders/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\">
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
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/orders/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/orders/invoices/?_token=Qx2W";
        // line 540
        echo "ggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/orders/credit-slips/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/orders/delivery-slips/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminCarts&amp;token=82778bdcca1d6f07b58b3fe21f7aa0f2\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                           ";
        // line 572
        echo "           
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/catalog/products?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\">
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
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/catalog/products?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/catalog/categories?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                      ";
        // line 602
        echo "        
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/catalog/monitoring/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminAttributesGroups&amp;token=d565efd2dc81d108439e92dea542ae5d\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/catalog/brands/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/attachments/?_token=Qx2WggjoW7SvYhKK3mGhjK2UW";
        // line 629
        echo "KSzstd6aA4AhzQzF0Y\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminCartRules&amp;token=d68108e626e913e2fa360adab742d6a7\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/stocks/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/customers/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-a";
        // line 661
        echo "rrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/customers/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/addresses/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminCustomerThreads&amp;token=909d904548fee3c39742ee04a6d13102\" class=\"link\">
                      <i class=\"material-";
        // line 690
        echo "icons mi-chat\">chat</i>
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
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/sell/customer-service/order-messages/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminReturn&";
        // line 719
        echo "amp;token=6e050b6757f986ba4c6d2b5a593180d2\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/metrics/legacy/stats?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\">
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
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/metrics/legacy/stats?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <l";
        // line 751
        echo "i class=\"link-leveltwo\" data-submenu=\"156\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/metrics?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/mbo/modules/catalog/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                    ";
        // line 786
        echo "          <li class=\"link-leveltwo\" data-submenu=\"181\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/mbo/modules/catalog/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/modules/manage?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/improve/design/themes?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                    ";
        // line 815
        echo "                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"188\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/improve/design/themes?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Personnalisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"163\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=c4b64aef058c82aefe5e0cce258d8d36\" class=\"link\"> Modules du thème
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"185\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/mbo/themes/catalog/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"s";
        // line 843
        echo "ubtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/design/mail_theme/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/design/cms-pages/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/design/modules/positions/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminImages&amp;token=d67227ab6312eb8f1a9122ec67739fec\" class=\"link\"> Images
                                </a>
                              </li>

                                                             ";
        // line 872
        echo "                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/link-widget/list?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Liste de liens
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
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminCarriers&amp;token=c36b";
        // line 901
        echo "5690dbbd23019396ce7f2c43d6fe\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/shipping/preferences/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Préférences
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

                                                                                                                                    </ul>
                                        </li>";
        // line 930
        echo "
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/payment/payment_methods?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\">
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
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/payment/payment_methods?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/payment/preferences?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Préférences
               ";
        // line 959
        echo "                 </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/international/localization/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\">
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
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/international/localization/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
      ";
        // line 991
        echo "                          <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/international/zones/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/international/taxes/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/improve/international/translations/settings?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"149\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=e1594af8fc2ea401cda83b142e48cb3b\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">camp";
        // line 1019
        echo "aign</i>
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
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"ti";
        // line 1053
        echo "tle\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"136\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/pseditionbasic/settings?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\">
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
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/shop/preferences/preferences?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                       ";
        // line 1086
        echo "               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/shop/preferences/preferences?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/shop/order-preferences/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/shop/product-preferences/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.";
        // line 1114
        echo "php/configure/shop/customer-preferences/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/shop/contacts/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/shop/seo-urls/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminSearchConf&amp;token=2854f616c7b4c7ee101de20099c2efc4\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                     ";
        // line 1144
        echo "         
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/system-information/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\">
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
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/system-information/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/performance/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Performances
";
        // line 1172
        echo "                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/administration/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/emails/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/import/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
       ";
        // line 1203
        echo "                         <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/employees/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/sql-requests/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/logs/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/webservice-keys/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                             ";
        // line 1231
        echo "                                                                                                                                                       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/feature-flags/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/configure/advanced/security/?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"link\"> Sécurité
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"126\" id=\"subtab-AdminPsAssistantSettings\">
                    <a href=\"http://localhost/prestashop/admin660xnoy7bt3es3sehud/index.php?controller=AdminPsAssistantSettings&amp;token=4ce3a8a9e079a1701d99bb173a198a09\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Assistance By PrestaShop
                      </span>
                                                    <i";
        // line 1259
        echo " class=\"material-icons sub-tabs-arrow\">
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
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/pseditionbasic/homepage?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" aria-current=\"page\">Bienvenue</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Accueil          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
     ";
        // line 1313
        echo "       
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"https://help.prestashop-project.org/fr/doc/HOME?version=8.1.0&amp;country=fr\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"https://help.prestashop-project.org/fr/doc/HOME?version=8.1.0&amp;country=fr\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1365
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
  <a href=\"/prestashop/admin660xnoy7bt3es3sehud/index.php/modules/pseditionbasic/homepage?_token=Qx2WggjoW7SvYhKK3mGhjK2UWKSzstd6aA4AhzQzF0Y\" class=\"btn btn-primary py-1 mt-3\">
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
        // line 1399
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 120
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1365
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

    // line 1399
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
        return "__string_template__be09bbe69db045006adf6438ff13f84d290d5bfe79c85c4dd21f9cd50529546d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1580 => 1399,  1559 => 1365,  1548 => 120,  1539 => 1399,  1499 => 1365,  1445 => 1313,  1389 => 1259,  1359 => 1231,  1329 => 1203,  1296 => 1172,  1266 => 1144,  1234 => 1114,  1204 => 1086,  1169 => 1053,  1133 => 1019,  1103 => 991,  1069 => 959,  1038 => 930,  1007 => 901,  976 => 872,  945 => 843,  915 => 815,  884 => 786,  847 => 751,  813 => 719,  782 => 690,  751 => 661,  717 => 629,  688 => 602,  656 => 572,  622 => 540,  587 => 507,  548 => 470,  504 => 428,  453 => 379,  403 => 331,  360 => 290,  315 => 247,  276 => 210,  257 => 193,  217 => 155,  177 => 120,  163 => 108,  136 => 83,  119 => 70,  87 => 40,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__be09bbe69db045006adf6438ff13f84d290d5bfe79c85c4dd21f9cd50529546d", "");
    }
}
