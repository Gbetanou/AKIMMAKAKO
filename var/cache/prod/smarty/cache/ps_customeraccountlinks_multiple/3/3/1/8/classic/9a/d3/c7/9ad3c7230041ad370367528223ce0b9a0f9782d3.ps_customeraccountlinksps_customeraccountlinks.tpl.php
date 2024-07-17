<?php
/* Smarty version 4.3.1, created on 2024-07-11 17:32:53
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66901745ab51f0_63595044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1720446712,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_66901745ab51f0_63595044 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\wamp64\\www\\prestashop\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\ec\\1a\\2a\\ec1a2ac1e8d3941462b87b3c64092bf107086094_2.file.helpers.tpl.php',
    'uid' => 'ec1a2ac1e8d3941462b87b3c64092bf107086094',
    'call_name' => 'smarty_template_function_renderLogo_143868876466901742da2768_60828636',
  ),
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/prestashop/fr/mon-compte" rel="nofollow">
      Votre compte
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Votre compte</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="http://localhost/prestashop/fr/identite" title="Informations" rel="nofollow">Informations</a></li>
                  <li><a href="http://localhost/prestashop/fr/adresses" title="Adresses" rel="nofollow">Adresses</a></li>
                          <li><a href="http://localhost/prestashop/fr/historique-commandes" title="Commandes" rel="nofollow">Commandes</a></li>
                          <li><a href="http://localhost/prestashop/fr/avoirs" title="Avoirs" rel="nofollow">Avoirs</a></li>
                                  <li>
    <a href="http://localhost/prestashop/fr/module/blockwishlist/lists" title="Mes listes d&#039;envies" rel="nofollow">
      Liste d&#039;envies
    </a>
  </li>
<li>
  <a href="//localhost/prestashop/fr/module/ps_emailalerts/account" title="Mes alertes">
    Mes alertes
  </a>
</li>

        <li><a href="http://localhost/prestashop/fr/?mylogout=" title="Me déconnecter" rel="nofollow">Déconnexion</a></li>
       
	</ul>
</div>
<?php }
}
