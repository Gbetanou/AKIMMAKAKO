{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2017 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<script type="text/javascript">
    var mmBaseAdminUrl = '{$mmBaseAdminUrl|escape:'quotes':'UTF-8'}';
    var mmCloseTxt = '{l s='Close' mod='ets_megamenu'}';
    var mmOpenTxt = '{l s='Open' mod='ets_megamenu'}';
    var mmDeleteTxt = '{l s='Delete' mod='ets_megamenu'}';
    var mmEditTxt = '{l s='Edit' mod='ets_megamenu'}';
    var mmDeleteTitleTxt = '{l s='Delete this item' mod='ets_megamenu'}';
    var mmAddMenuTxt = '{l s='Add new menu' mod='ets_megamenu'}';
    var mmEditMenuTxt = '{l s='Edit menu' mod='ets_megamenu'}';
    var mmAddColumnTxt = '{l s='Add new column' mod='ets_megamenu'}';
    var mmEditColumnTxt = '{l s='Edit column' mod='ets_megamenu'}';
    var mmDeleteColumnTxt = '{l s='Delete this column' mod='ets_megamenu'}';
    var mmDeleteBlockTxt = '{l s='Delete this block' mod='ets_megamenu'}';
    var mmEditBlockTxt = '{l s='Edit this block' mod='ets_megamenu'}';
    var mmAddBlockTxt = '{l s='Add new block' mod='ets_megamenu'}';
    var mmDuplicateTxt = '{l s='Duplicate' mod='ets_megamenu'}';
    var mmDuplicateMenuTxt = '{l s='Duplicate this menu' mod='ets_megamenu'}';
    var mmDuplicateColumnTxt = '{l s='Duplicate this column' mod='ets_megamenu'}';
    var mmDuplicateBlockTxt = '{l s='Duplicate this block' mod='ets_megamenu'}';
    var ets_mm_invalid_file = '{l s='Image is invalid' mod='ets_megamenu'}';
</script>
<div class="ets_megamenu mm_view_mode_tab {if $mm_backend_layout=='rtl'}ets-dir-rtl backend-layout-rtl{else}ets-dir-ltr backend-layout-ltr{/if} {if $multiLayout}mm_multi_layout{else}mm_single_layout{/if}">
    <div class="mm_menus">
        <div class="mm_useful_buttons_action">
            <div class="mm_view_mm_view_modes">
                <div class="mm_view_mode mm_view_mode_tab_select active" title="{l s='Preview in tab mode' mod='ets_megamenu'}">{l s='Tab' mod='ets_megamenu'}</div>
                <div class="mm_view_mode mm_view_mode_list_select" title="{l s='Preview in list mode' mod='ets_megamenu'}">{l s='List' mod='ets_megamenu'}</div>
            </div>
            {if $multiLayout}
                <div class="mm_layout_mode">                
                    <div data-title="&#xE236;" class="mm_layout_ltr mm_change_mode {if $mm_backend_layout!='rtl'}active{/if}">{l s='LTR' mod='ets_megamenu'}</div>
                    <div data-title="&#xE237;" class="mm_layout_rlt mm_change_mode {if $mm_backend_layout=='rtl'}active{/if}">{l s='RTL' mod='ets_megamenu'}</div>
                </div>
            {/if}
            <div class="mm_import_button btn btn-default"><i class="fa fa-exchange" data-title="&#xE8D4;"></i>{l s='Import/Export' mod='ets_megamenu'}</div>
            <div class="mm_config_button btn btn-default" data-title="&#xE8B8;">{l s='Settings' mod='ets_megamenu'}</div>
        </div>
        {if $menus}
            <ul class="mm_menus_ul">
                {foreach from=$menus item='menu'}
                    {hook h='displayMMItemMenu' menu=$menu}
                {/foreach}
            </ul>
        {/if}        
        <div class="mm_useful_buttons">
            <div class="mm_add_menu btn btn-default">{l s='Add menu' mod='ets_megamenu'}</div>
            
        </div>
    </div>
    <div class="mm_loading_icon"><img src="{$mm_img_dir|escape:'html':'UTF-8'}ajax-loader.gif" /></div>
    <!-- popup forms -->
    <div class="mm_forms hidden mm_popup_overlay">
        <div class="mm_menu_form hidden mm_pop_up">
            <div class="mm_close">{l s='Close' mod='ets_megamenu'}</div>
            <div class="mm_form"></div>
        </div>
        <div class="mm_menu_form_new hidden">{$menuForm nofilter}</div>
        <div class="mm_column_form_new hidden">{$columnForm nofilter}</div>
        <div class="mm_block_form_new hidden">{$blockForm nofilter}</div>
    </div>
    <div class="mm_popup_overlay hidden">
        <div class="mm_config_form mm_pop_up">
            <div class="mm_close" >{l s='Close' mod='ets_megamenu'}</div>
            <div class="mm_config_form_content"><div class="mm_close"></div>{$configForm nofilter}</div>
        </div>
    </div>
    <div class="mm_export_form hidden mm_popup_overlay">
        <div class="mm_close"></div>
        <div class="mm_export mm_pop_up hidden">
            <div data-title="&#xE14C;" class="mm_close">{l s='Close' mod='ets_megamenu'}</div>
            <div class="mm_export_form_content">            
                <div class="mm_export_option">
                    <div class="export_title">{l s='Export menu content' mod='ets_megamenu'}</div>
                    <a class="btn btn-default mm_export_menu" href="{$mmBaseAdminUrl nofilter}&exportMenu=1" target="_blank">
                        <i class="fa fa-download" data-title="&#xE864;"></i>{l s='Export menu' mod='ets_megamenu'}
                    </a>
                    <p class="mm_export_option_note">{l s='Export all menu data including images, text and configuration' mod='ets_megamenu'}</p>
                </div>                       
                <div class="mm_import_option">
                    <div class="export_title">{l s='Import menu data' mod='ets_megamenu'}</div>
                    <form action="{$mmBaseAdminUrl nofilter}" method="post" enctype="multipart/form-data" class="mm_import_option_form">
                        <div class="mm_import_option_updata">
                            <label for="sliderdata">{l s='Menu data package' mod='ets_megamenu'}</label>
                            <input id="image" type="file" name="sliderdata" id="sliderdata" />
                        </div>
                        <div class="mm_import_option_clean">
                            <input type="checkbox" value="1" id="importoverride" checked="checked" name="importoverride" />
                            <label for="importoverride">{l s='Clear all menus before importing' mod='ets_megamenu'}</label>
                        </div>
                        <div class="mm_import_option_button">
                            <input type="hidden" name="importMenu" value="1" />
                            <div class="mm_import_menu_loading"><img src="{$mm_img_dir nofilter}loader.gif" />{l s='Importing data' mod='ets_megamenu'}</div>
                            <div class="mm_import_menu_submit">
                                <i class="fa fa-compress" data-title="&#xE0C3;"></i>
                                <input type="submit" value="{l s='Import menu' mod='ets_megamenu'}" class="btn btn-default mm_import_menu"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>