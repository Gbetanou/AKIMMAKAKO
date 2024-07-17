<?php
/* Smarty version 4.3.1, created on 2024-07-12 09:07:06
  from 'C:\wamp64\www\prestashop\themes\classic\templates\_partials\javascript.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6690f23a3e7645_54890995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f67f4d6a210d01f13d45411a9469757604b63ebd' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\classic\\templates\\_partials\\javascript.tpl',
      1 => 1720446711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6690f23a3e7645_54890995 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['javascript']->value['external'], 'js');
$_smarty_tpl->tpl_vars['js']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->do_else = false;
?>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['js']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['js']->value['attribute'], ENT_QUOTES, 'UTF-8');?>
><?php echo '</script'; ?>
>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['javascript']->value['inline'], 'js');
$_smarty_tpl->tpl_vars['js']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->do_else = false;
?>
  <?php echo '<script'; ?>
 type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['js']->value['content'];?>

  <?php echo '</script'; ?>
>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ((isset($_smarty_tpl->tpl_vars['vars']->value)) && smarty_modifier_count($_smarty_tpl->tpl_vars['vars']->value)) {?>
  <?php echo '<script'; ?>
 type="text/javascript">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vars']->value, 'var_value', false, 'var_name');
$_smarty_tpl->tpl_vars['var_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var_name']->value => $_smarty_tpl->tpl_vars['var_value']->value) {
$_smarty_tpl->tpl_vars['var_value']->do_else = false;
?>
    var <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['var_value']->value ));?>
;
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php echo '</script'; ?>
>
<?php }
}
}
