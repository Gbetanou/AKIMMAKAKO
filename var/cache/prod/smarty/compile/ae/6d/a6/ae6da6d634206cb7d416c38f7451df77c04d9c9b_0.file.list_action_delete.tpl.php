<?php
/* Smarty version 4.3.1, created on 2024-07-11 17:04:18
  from 'C:\wamp64\www\prestashop\admin660xnoy7bt3es3sehud\themes\default\template\controllers\images\helpers\list\list_action_delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66901092d5fa57_89920560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae6da6d634206cb7d416c38f7451df77c04d9c9b' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin660xnoy7bt3es3sehud\\themes\\default\\template\\controllers\\images\\helpers\\list\\list_action_delete.tpl',
      1 => 1720446458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66901092d5fa57_89920560 (Smarty_Internal_Template $_smarty_tpl) {
?> <a href="#"
 title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
"
 class="delete"
 onclick="
  <?php if ($_smarty_tpl->tpl_vars['confirm']->value) {?>
    var modalConfirmDeleteType = $('#modalConfirmDeleteType');
    $('.btn-confirm-delete-images-type', modalConfirmDeleteType).attr('data-confirm-url', '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
');
    modalConfirmDeleteType.modal('show');
  <?php } else { ?>
    event.stopPropagation();event.preventDefault()
  <?php }?>
">
<i class="icon-trash"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
