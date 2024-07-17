{**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{extends file='page.tpl'}

{block name='page_header_container'}{/block}

{block name='left_column'}
  <div id="left-column" class="col-xs-12 col-sm-3">
    
  </div>
{/block}

{block name='page_content'}
    {* contact layout 1*}
    {if isset($tc_config.YBC_TC_CONTACT_FORM_LAYOUT) && $tc_config.YBC_TC_CONTACT_FORM_LAYOUT == 'contact_layout1'}
      <div class="page_contact_layout1">
          {if $tc_config.YBC_TC_GOOGLE_MAP_EMBED_CODE && $tc_config.YBC_TC_GOOGLE_MAP_EMBED_CODE != ''}
            <div class="embe_map_contact">
                {$tc_config.YBC_TC_GOOGLE_MAP_EMBED_CODE nofilter}
            </div>
          {/if}
          {widget name="ps_contactinfo" hook='displayLeftColumn'}
          {widget name="contactform"}
      </div>
    {/if}
    
    
    {* contact layout 2*}
    {if isset($tc_config.YBC_TC_CONTACT_FORM_LAYOUT) && $tc_config.YBC_TC_CONTACT_FORM_LAYOUT == 'contact_layout2'}
        <div class="page_contact_layout2">
          {if $tc_config.YBC_TC_GOOGLE_MAP_EMBED_CODE && $tc_config.YBC_TC_GOOGLE_MAP_EMBED_CODE != ''}
            <div class="row">
                <div class="embe_map_contact col-xs-12 col-sm-6">
                    {$tc_config.YBC_TC_GOOGLE_MAP_EMBED_CODE nofilter}
                </div>
                <div class="embe_map_contact col-xs-12 col-sm-6">
                    {widget name="contactform"}
                </div>
            </div>
          {else}
            <div class="embe_map_contact">
                {widget name="contactform"}
            </div>
          {/if}
          {widget name="ps_contactinfo" hook='displayLeftColumn'}
        </div> 
    {/if}
    
    {* contact layout 3*}
    {if isset($tc_config.YBC_TC_CONTACT_FORM_LAYOUT) && $tc_config.YBC_TC_CONTACT_FORM_LAYOUT == 'contact_layout3'}
        <div class="page_contact_layout3">  
          {if $tc_config.YBC_TC_GOOGLE_MAP_EMBED_CODE && $tc_config.YBC_TC_GOOGLE_MAP_EMBED_CODE != ''}
              <div class="row"> 
                <div class="col-sm-6 col-md-4">
                    {widget name="ps_contactinfo" hook='displayLeftColumn'}
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="embe_map_contact">
                        {$tc_config.YBC_TC_GOOGLE_MAP_EMBED_CODE nofilter}
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    {widget name="contactform"}
                </div>
              </div> 
          {else}
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    {widget name="ps_contactinfo" hook='displayLeftColumn'}
                </div>
                <div class="col-sm-6 col-md-6">
                    {widget name="contactform"}
                </div>
            </div>
          {/if}
        </div>
    {/if}
{/block}
