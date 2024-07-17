<?php
/* Smarty version 4.3.1, created on 2024-07-16 08:33:20
  from 'C:\wamp64\www\prestashop\admin660xnoy7bt3es3sehud\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66963050b63f67_68279695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01fe76ffb30f7a766c71d9226719e8e829d7cbb4' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin660xnoy7bt3es3sehud\\themes\\default\\template\\content.tpl',
      1 => 1720446459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66963050b63f67_68279695 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
