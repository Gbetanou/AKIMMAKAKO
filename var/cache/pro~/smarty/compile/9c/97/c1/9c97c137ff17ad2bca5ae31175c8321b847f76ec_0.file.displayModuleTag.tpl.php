<?php
/* Smarty version 4.3.1, created on 2024-07-11 14:19:39
  from 'C:\wamp64\www\prestashop\modules\psxdesign\views\templates\hook\displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_668fe9fbbe6a18_07525136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c97c137ff17ad2bca5ae31175c8321b847f76ec' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\hook\\displayModuleTag.tpl',
      1 => 1720446486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668fe9fbbe6a18_07525136 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
