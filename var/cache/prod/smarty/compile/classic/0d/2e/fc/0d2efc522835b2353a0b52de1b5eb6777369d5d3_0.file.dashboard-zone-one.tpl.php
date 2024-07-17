<?php
/* Smarty version 4.3.1, created on 2024-07-17 10:42:28
  from 'C:\wamp64\www\prestashop\modules\ps_mbo\views\templates\hook\dashboard-zone-one.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6697a01441c469_44170795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d2efc522835b2353a0b52de1b5eb6777369d5d3' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ps_mbo\\views\\templates\\hook\\dashboard-zone-one.tpl',
      1 => 1720446465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6697a01441c469_44170795 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['urlAccountsCdn']->value))) {?>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['urlAccountsCdn']->value;?>
" rel=preload><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    if (window?.psaccountsVue) {
      window?.psaccountsVue?.init();
      <?php $_smarty_tpl->_assignInScope('shop_context', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( array_merge(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_decode' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop_context']->value,true )),array('accounts_component_loaded'=>true)) )));?>
    }
  <?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
>
  if (typeof window.mboCdc == undefined || typeof window.mboCdc == "undefined") {
    if (typeof renderCdcError === 'function') {
      window.$(document).ready(function() {
        renderCdcError($('#cdc-tips-and-update-container'));
      });
    }
  } else {
    const renderTipsAndUpdate = window.mboCdc.renderDashboardTipsAndUpdate

    const dashboardTipsAndUpdateContext = <?php echo $_smarty_tpl->tpl_vars['shop_context']->value;?>
;

    renderTipsAndUpdate(dashboardTipsAndUpdateContext, '#cdc-tips-and-update-container')
  }
<?php echo '</script'; ?>
>

<prestashop-accounts style="display: none;"></prestashop-accounts>

<section id="cdc-tips-and-update-container" class="cdc-container" data-error-path="<?php echo $_smarty_tpl->tpl_vars['cdcErrorUrl']->value;?>
"></section>
<?php }
}
