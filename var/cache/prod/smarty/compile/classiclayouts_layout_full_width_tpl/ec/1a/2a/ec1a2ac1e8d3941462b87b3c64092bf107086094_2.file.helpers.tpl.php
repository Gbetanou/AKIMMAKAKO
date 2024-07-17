<?php
/* Smarty version 4.3.1, created on 2024-07-11 17:32:50
  from 'C:\wamp64\www\prestashop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66901742dac667_58384993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec1a2ac1e8d3941462b87b3c64092bf107086094' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1720446711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66901742dac667_58384993 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\wamp64\\www\\prestashop\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\ec\\1a\\2a\\ec1a2ac1e8d3941462b87b3c64092bf107086094_2.file.helpers.tpl.php',
    'uid' => 'ec1a2ac1e8d3941462b87b3c64092bf107086094',
    'call_name' => 'smarty_template_function_renderLogo_143868876466901742da2768_60828636',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_143868876466901742da2768_60828636 */
if (!function_exists('smarty_template_function_renderLogo_143868876466901742da2768_60828636')) {
function smarty_template_function_renderLogo_143868876466901742da2768_60828636(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_143868876466901742da2768_60828636 */
}
