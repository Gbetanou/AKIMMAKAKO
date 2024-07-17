<?php
/* Smarty version 4.3.1, created on 2024-07-11 17:31:46
  from 'C:\wamp64\www\prestashop\modules\ps_facetedsearch\views\templates\admin\manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_669017021c1217_31583442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4799747f9853cfe68b4785d29707a227f411c521' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ps_facetedsearch\\views\\templates\\admin\\manage.tpl',
      1 => 1720446576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./_partials/messages.tpl' => 1,
  ),
),false)) {
function content_669017021c1217_31583442 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_subTemplateRender('file:./_partials/messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="panel">
  <h3><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Indexes and caches','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</h3>
  <div id="indexing-warning" class="alert alert-warning" style="display: none">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Indexing is in progress. Please do not leave this page','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

  </div>
  <div class="row">
	<p>
	  <a class="ajaxcall-recurcive btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['price_indexer_url']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Index all missing prices','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</a>
	  <a class="ajaxcall-recurcive btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['full_price_indexer_url']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rebuild entire price index','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</a>
	  <a class="ajaxcall btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['attribute_indexer_url']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Build attributes and features indexes','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</a>
	  <a class="ajaxcall btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['clear_cache_url']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear cache','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</a>
	</p>
  </div>
  <div class="row">
	<div class="alert alert-info">
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We recommend to set regular cron tasks to manage the indexes and cache on daily/weekly basis.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</p>
		<br>
	  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add missing products to price index:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
 <strong><?php echo $_smarty_tpl->tpl_vars['price_indexer_url']->value;?>
</strong>
	  <br>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rebuild price index:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
 <strong><?php echo $_smarty_tpl->tpl_vars['full_price_indexer_url']->value;?>
</strong>
	  <br>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rebuild attribute index:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
 <strong><?php echo $_smarty_tpl->tpl_vars['attribute_indexer_url']->value;?>
</strong>
		<br>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Flush block cache:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
 <strong><?php echo $_smarty_tpl->tpl_vars['clear_cache_url']->value;?>
</strong>
		<br>
		<br>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'A nightly rebuild is recommended.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</p>
	</div>
  </div>
</div>
<div class="panel">
  <h3><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filters templates','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
<span class="badge"><?php echo smarty_modifier_count($_smarty_tpl->tpl_vars['filters_templates']->value);?>
</span></h3>
  <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['filters_templates']->value) > 0) {?>
	<div class="row">
	  <table class="table">
		<thead>
		  <tr>
			<th class="fixed-width-xs center"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span></th>
			<th><span class="title_box text-left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span></th>
			<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pages','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span></th>
			<th class="fixed-width-sm center"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span></th>
			<th class="fixed-width-lg"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Created on','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</span></th>
			<th class="fixed-width-sm"><span class="title_box text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Actions','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</span></th>
		  </tr>
		</thead>
		<tbody>
		  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filters_templates']->value, 'template');
$_smarty_tpl->tpl_vars['template']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->do_else = false;
?>
			<tr>
			  <td class="center"><?php echo $_smarty_tpl->tpl_vars['template']->value['id_layered_filter'];?>
</td>
			  <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
</td>
			  <td><?php echo $_smarty_tpl->tpl_vars['template']->value['controllers'];?>
</td>
			  <td class="center"><?php echo $_smarty_tpl->tpl_vars['template']->value['n_categories'];?>
</td>
			  <td><?php echo $_smarty_tpl->tpl_vars['template']->value['date_add'];?>
</td>
			  <td>
				<?php if (empty($_smarty_tpl->tpl_vars['limit_warning']->value)) {?>
				  <div class="btn-group-action">
					<div class="btn-group pull-right">
					  <a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
&amp;edit_filters_template=1&amp;id_layered_filter=<?php echo (int)$_smarty_tpl->tpl_vars['template']->value['id_layered_filter'];?>
" class="btn btn-default">
						<i class="icon-pencil"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

					  </a>
					  <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						<span class="caret"></span>&nbsp;
					  </button>
					  <ul class="dropdown-menu">
						<li>
						  <a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
&amp;deleteFilterTemplate=1&amp;id_layered_filter=<?php echo (int)$_smarty_tpl->tpl_vars['template']->value['id_layered_filter'];?>
"
						     onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you really want to delete this filter template?','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
');">
							<i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

						  </a>
						</li>
					  </ul>
					</div>
				  </div>
				<?php }?>
			  </td>
			</tr>
		  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
	  </table>
	  <div class="clearfix">&nbsp;</div>
	</div>
  <?php } else { ?>
	<div class="row alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No filter template found.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</div>
  <?php }?>
  <?php if (empty($_smarty_tpl->tpl_vars['limit_warning']->value)) {?>
	<div class="panel-footer">
	  <a class="btn btn-default pull-right" href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
&amp;add_new_filters_template=1"><i class="process-icon-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new template','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</a>
	</div>
  <?php }?>
</div>
<div class="panel">
  <h3><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configuration','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</h3>
  <form action="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
" method="post" class="form-horizontal">
	<div class="form-group">
	  <label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable cache system','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
	  <div class="col-lg-9">
		<span class="switch prestashop-switch fixed-width-lg">
		  <input type="radio" name="ps_layered_cache_enabled" id="ps_layered_cache_enabled_on" value="1"<?php if ($_smarty_tpl->tpl_vars['cache_enabled']->value) {?> checked="checked"<?php }?>>
		  <label for="ps_layered_cache_enabled_on" class="radioCheck">
			<i class="color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <input type="radio" name="ps_layered_cache_enabled" id="ps_layered_cache_enabled_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['cache_enabled']->value) {?> checked="checked"<?php }?>>
		  <label for="ps_layered_cache_enabled_off" class="radioCheck">
			<i class="color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <a class="slide-button btn"></a>
		</span>
	  </div>
		<div class="col-lg-9 col-lg-offset-3">
		<div class="help-block">
		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This option caches filtering blocks, so the module does not have to query for matching products all the time. The cache is invalidated on every modification on your store. If you encounter some incosistencies, disable this cache or make sure to flush it if needed.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

		</div>
	  </div>
	</div>

	<div class="form-group">
	  <label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show the number of matching products','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
	  <div class="col-lg-9">
		<span class="switch prestashop-switch fixed-width-lg">
		  <input type="radio" name="ps_layered_show_qties" id="ps_layered_show_qties_on" value="1"<?php if ($_smarty_tpl->tpl_vars['show_quantities']->value) {?> checked="checked"<?php }?>>
		  <label for="ps_layered_show_qties_on" class="radioCheck">
			<i class="color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <input type="radio" name="ps_layered_show_qties" id="ps_layered_show_qties_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['show_quantities']->value) {?> checked="checked"<?php }?>>
		  <label for="ps_layered_show_qties_off" class="radioCheck">
			<i class="color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <a class="slide-button btn"></a>
		</span>
	  </div>
		<div class="col-lg-9 col-lg-offset-3">
		<div class="help-block">
		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable or disable display of matching products after filters. Disabling this won\'t bring any performance benefit, because matching products need to be calculated anyway.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

		</div>
	  </div>
	</div>

	<div class="form-group">
	  <label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show products from subcategories','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
	  <div class="col-lg-9">
		<span class="switch prestashop-switch fixed-width-lg">
		  <input type="radio" name="ps_layered_full_tree" id="ps_layered_full_tree_on" value="1"<?php if ($_smarty_tpl->tpl_vars['full_tree']->value) {?> checked="checked"<?php }?>>
		  <label for="ps_layered_full_tree_on" class="radioCheck">
			<i class="color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <input type="radio" name="ps_layered_full_tree" id="ps_layered_full_tree_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['full_tree']->value) {?> checked="checked"<?php }?>>
		  <label for="ps_layered_full_tree_off" class="radioCheck">
			<i class="color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <a class="slide-button btn"></a>
		</span>
	  </div>
		<div class="col-lg-9 col-lg-offset-3">
		<div class="help-block">
		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable this, if you want to display products from subcategories, even if they are not specifically assigned to the currently browsed category.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

		</div>
	  </div>
	</div>

	<div class="form-group">
	  <label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show products only from default category','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
	  <div class="col-lg-9">
		<span class="switch prestashop-switch fixed-width-lg">
		  <input type="radio" name="ps_layered_filter_by_default_category" id="ps_layered_filter_by_default_category_on" value="1"<?php if ($_smarty_tpl->tpl_vars['filter_by_default_category']->value) {?> checked="checked"<?php }?>>
		  <label for="ps_layered_filter_by_default_category_on" class="radioCheck">
			<i class="color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <input type="radio" name="ps_layered_filter_by_default_category" id="ps_layered_filter_by_default_category_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['filter_by_default_category']->value) {?> checked="checked"<?php }?>>
		  <label for="ps_layered_filter_by_default_category_off" class="radioCheck">
			<i class="color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <a class="slide-button btn"></a>
		</span>
	  </div>
	  <div class="col-lg-9 col-lg-offset-3">
		<div class="help-block">
		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Works only if "Show products from subcategories" is off.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

		</div>
	  </div>
	</div>

	<div class="form-group">
	  <label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Category filter depth','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
	  <div class="col-lg-9">
		<input type="text" name="ps_layered_filter_category_depth" value="<?php if ($_smarty_tpl->tpl_vars['category_depth']->value !== false) {
echo $_smarty_tpl->tpl_vars['category_depth']->value;
} else { ?>1<?php }?>" class="fixed-width-sm" />
	  </div>
		<div class="col-lg-9 col-lg-offset-3">
		<div class="help-block">
		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This option controls the behavior of category filter block - how deep children of the currently browsed category you want to display? The default value is 1 - only the direct children. Use 0 for unlimited depth.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

		</div>
	  </div>
	</div>

	<div class="form-group">
	  <label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use tax to filter price','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
	  <div class="col-lg-9">
		<span class="switch prestashop-switch fixed-width-lg">
		  <input type="radio" name="ps_layered_filter_price_usetax" id="ps_layered_filter_price_usetax_on" value="1"<?php if ($_smarty_tpl->tpl_vars['price_use_tax']->value) {?> checked="checked"<?php }?>>
		  <label for="ps_layered_filter_price_usetax_on" class="radioCheck">
			<i class="color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <input type="radio" name="ps_layered_filter_price_usetax" id="ps_layered_filter_price_usetax_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['price_use_tax']->value) {?> checked="checked"<?php }?>>
		  <label for="ps_layered_filter_price_usetax_off" class="radioCheck">
			<i class="color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <a class="slide-button btn"></a>
		</span>
	  </div>
	</div>

	<div class="form-group">
	  <label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use rounding to filter price','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
	  <div class="col-lg-9">
		<span class="switch prestashop-switch fixed-width-lg">
		  <input type="radio" name="ps_layered_filter_price_rounding" id="ps_layered_filter_price_rounding_on" value="1"<?php if ($_smarty_tpl->tpl_vars['price_use_rounding']->value) {?> checked="checked"<?php }?>/>
		  <label for="ps_layered_filter_price_rounding_on" class="radioCheck">
			<i class="color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <input type="radio" name="ps_layered_filter_price_rounding" id="ps_layered_filter_price_rounding_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['price_use_rounding']->value) {?> checked="checked"<?php }?>/>
		  <label for="ps_layered_filter_price_rounding_off" class="radioCheck">
			<i class="color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <a class="slide-button btn"></a>
		</span>
	  </div>
	</div>

	<div class="form-group">
	  <label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show unavailable, out of stock last','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
	  <div class="col-lg-9">
		<span class="switch prestashop-switch fixed-width-lg">
		  <input type="radio" name="ps_layered_filter_show_out_of_stock_last" id="ps_layered_filter_show_out_of_stock_last_on" value="1"<?php if ($_smarty_tpl->tpl_vars['show_out_of_stock_last']->value) {?> checked="checked"<?php }?>/>
		  <label for="ps_layered_filter_show_out_of_stock_last_on" class="radioCheck">
			<i class="color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <input type="radio" name="ps_layered_filter_show_out_of_stock_last" id="ps_layered_filter_show_out_of_stock_last_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['show_out_of_stock_last']->value) {?> checked="checked"<?php }?>/>
		  <label for="ps_layered_filter_show_out_of_stock_last_off" class="radioCheck">
			<i class="color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <a class="slide-button btn"></a>
		</span>
	  </div>
	</div>

  <div class="form-group">
    <label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use Jquery UI slider','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
    <div class="col-lg-9">
    <span class="switch prestashop-switch fixed-width-lg">
      <input type="radio" name="ps_use_jquery_ui_slider" id="ps_use_jquery_ui_slider_on" value="1"<?php if ($_smarty_tpl->tpl_vars['use_jquery_ui_slider']->value) {?> checked="checked"<?php }?>>
      <label for="ps_use_jquery_ui_slider_on" class="radioCheck">
      <i class="color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>

      </label>
      <input type="radio" name="ps_use_jquery_ui_slider" id="ps_use_jquery_ui_slider_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['use_jquery_ui_slider']->value) {?> checked="checked"<?php }?>>
      <label for="ps_use_jquery_ui_slider_off" class="radioCheck">
      <i class="color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>

      </label>
      <a class="slide-button btn"></a>
    </span>
    </div>
    <div class="col-lg-9 col-lg-offset-3">
      <div class="help-block">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Switch this off only if your theme does not use Jquery UI slider. It is recommended to keep it on when using classic theme.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

      </div>
    </div>
  </div>

	<div class="form-group">
		<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default filter template for new categories','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>				
		<div class="col-lg-9">
			<select class="form-control fixed-width-xxl" name="ps_layered_default_category_template" id="ps_layered_default_category_template">
				<option value="0" <?php if (empty($_smarty_tpl->tpl_vars['default_category_template']->value)) {?> selected="selected" <?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'None','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</option>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filters_templates']->value, 'template');
$_smarty_tpl->tpl_vars['template']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->do_else = false;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['template']->value['id_layered_filter'];?>
" <?php if ($_smarty_tpl->tpl_vars['default_category_template']->value == $_smarty_tpl->tpl_vars['template']->value['id_layered_filter']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
</option>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
		</div>
		<div class="col-lg-9 col-lg-offset-3">
			<div class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you want to automatically assign a filter template to new categories, select it here.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</div>
		</div>
	</div>

	<div class="panel-footer">
	  <button type="submit" class="btn btn-default pull-right" name="submitLayeredSettings"><i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</button>
	</div>
  </form>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
  <?php if ((isset($_smarty_tpl->tpl_vars['PS_LAYERED_INDEXED']->value))) {?>var PS_LAYERED_INDEXED = <?php echo $_smarty_tpl->tpl_vars['PS_LAYERED_INDEXED']->value;?>
;<?php }?>
  var token = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
';
  var id_lang = <?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
;
  var base_folder = '<?php echo $_smarty_tpl->tpl_vars['base_folder']->value;?>
';
  var translations = new Object();

  translations.in_progress = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(in progress)','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
';
  translations.url_indexation_finished = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'URL indexing finished','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
';
  translations.attribute_indexation_finished = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attribute indexing finished','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
';
  translations.url_indexation_failed = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'URL indexing failed','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
';
  translations.attribute_indexation_failed = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attribute indexing failed','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
';
  translations.price_indexation_finished = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price indexing finished','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
';
  translations.price_indexation_failed = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price indexing failed','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
';
  translations.price_indexation_in_progress = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(in progress, %s products price to index)','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
';
  translations.loading = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loading...','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
';
  translations.delete_all_filters_templates = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You selected -All categories-: all existing filter templates will be deleted. Is it OK?','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
';
  translations.no_selected_categories = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must select at least one category','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
';
	translations.no_selected_controllers = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must select at least one page','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
>
<?php }
}
