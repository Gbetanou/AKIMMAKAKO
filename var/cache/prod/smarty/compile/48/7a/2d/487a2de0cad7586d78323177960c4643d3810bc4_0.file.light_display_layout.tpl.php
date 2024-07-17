<?php
/* Smarty version 4.3.1, created on 2024-07-12 09:07:34
  from 'C:\wamp64\www\prestashop\admin660xnoy7bt3es3sehud\themes\new-theme\template\light_display_layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6690f2560727b7_57845012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '487a2de0cad7586d78323177960c4643d3810bc4' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin660xnoy7bt3es3sehud\\themes\\new-theme\\template\\light_display_layout.tpl',
      1 => 1720446456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/layout/error_messages.tpl' => 1,
    'file:components/layout/information_messages.tpl' => 1,
    'file:components/layout/confirmation_messages.tpl' => 1,
    'file:components/layout/warning_messages.tpl' => 1,
    'file:error.tpl' => 1,
  ),
),false)) {
function content_6690f2560727b7_57845012 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
">
<head>
  <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

  <link href="<?php echo $_smarty_tpl->tpl_vars['baseAdminUrl']->value;?>
themes/new-theme/public/light_theme.css" rel="stylesheet" type="text/css">
</head>

<body
  class="lang-<?php echo $_smarty_tpl->tpl_vars['iso_user']->value;
if ($_smarty_tpl->tpl_vars['lang_is_rtl']->value) {?> lang-rtl<?php }?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strtolower' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['controller_name']->value )) ));
if ($_smarty_tpl->tpl_vars['collapse_menu']->value) {?> page-sidebar-closed<?php }
if (!empty($_smarty_tpl->tpl_vars['debug_mode']->value)) {?> developer-mode<?php }?>"
  <?php if ((isset($_smarty_tpl->tpl_vars['js_router_metadata']->value['base_url']))) {?>data-base-url="<?php echo $_smarty_tpl->tpl_vars['js_router_metadata']->value['base_url'];?>
"<?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['js_router_metadata']->value['token']))) {?>data-token="<?php echo $_smarty_tpl->tpl_vars['js_router_metadata']->value['token'];?>
"<?php }?>
>

<div id="main-div" class="light_display_layout">
    <?php if ($_smarty_tpl->tpl_vars['install_dir_exists']->value) {?>
      <div class="alert alert-warning">
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For security reasons, you must also delete the /install folder.','d'=>'Admin.Login.Notification'),$_smarty_tpl ) ) ));?>

      </div>
    <?php } else { ?>
      <?php if ((isset($_smarty_tpl->tpl_vars['modal_module_list']->value))) {
echo $_smarty_tpl->tpl_vars['modal_module_list']->value;
}?>

      <div class="-notoolbar">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAdminAfterHeader'),$_smarty_tpl ) );?>


        <?php if ($_smarty_tpl->tpl_vars['display_header']->value) {?>
          <?php $_smarty_tpl->_subTemplateRender('file:components/layout/error_messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php $_smarty_tpl->_subTemplateRender('file:components/layout/information_messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php $_smarty_tpl->_subTemplateRender('file:components/layout/confirmation_messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php $_smarty_tpl->_subTemplateRender('file:components/layout/warning_messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>

        <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAdminEndContent'),$_smarty_tpl ) );?>

      </div>
    <?php }?>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['php_errors']->value))) {?>
  <?php $_smarty_tpl->_subTemplateRender("file:error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
</body>
</html>
<?php }
}
