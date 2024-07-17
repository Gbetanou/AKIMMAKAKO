{*
* 2007-2017 PrestaShop
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
<div class="s6 ybc-newsletter-popup{if $YBC_NEWSLETTER_MOBILE_HIDE} ynp-mobile-hide{/if} {$YBC_NEWSLETTER_TEMPLATE|escape:'html':'UTF-8'} ybc-mail-wrapper">
    <div class="ynp-div-l2 ybc_animation">
        <div class="ynp-div-l3" >
            <div class="ybc_nlt_content ybc_animation">
                <span id="ynp-close" class="ynp-close button" title="{l s='Close popup' mod='ybc_newsletter'}">{l s='Close' mod='ybc_newsletter'}</span>
                {if isset($YBC_NEWSLETTER_IMAGE) && $YBC_NEWSLETTER_IMAGE != ''}
                    <div class="img_bg">
                        <img src="{$YBC_NEWSLETTER_IMAGE|escape:'html':'UTF-8'}" alt="" />
                        <div class="ynp-input-row">
                            <label for="ynp-email-input">{l s='Email: ' mod='ybc_newsletter'} </label>
                            <input type="text" id="ynp-email-input" class="ynp-email-input" value="" placeholder="{l s='Enter your email...' mod='ybc_newsletter'}" />
                            <input class="button ynp-submit" type="submit" name="ynpSubmit" id="ynp-submit" value="Subscribe" />
                        </div>
                    </div>
                {/if}
                <form class="ynp-form ynp-form-popup" action="{$YBC_NEWSLETTER_ACTION|escape:'html':'UTF-8'}" method="post">
                    <div class="ynp-inner">
                        <div class="ynp-loading-div">
                            <img class="ynp-loading" src="{$YBC_NEWSLETTER_LOADING_IMG|escape:'html':'UTF-8'}" alt="{l s='Loading...' mod='ybc_newsletter'}" />
                        </div>                            
                        <div class="ynp-inner-wrapper">
                            {if $YBC_NEWSLETTER_LOGO}
                                <div class="header_logo_center">
                                    <div class="nlt_header_logo_center">
                                        <div class="nlt_header_logo_table_cell">
                                            <img src="{$YBC_NEWSLETTER_LOGO|escape:'html':'UTF-8'}" alt="" />    
                                        </div>
                                    </div>                                
                                </div>
                            {/if}
                            <div class="ynp_content_6">
                                {if isset($YBC_NEWSLETTER_POPUP_TITLE) && $YBC_NEWSLETTER_POPUP_TITLE != ''}
                                    <h4>{$YBC_NEWSLETTER_POPUP_TITLE|escape:'html':'UTF-8'}</h4>
                                {/if}
                                {$YBC_NEWSLETTER_POPUP_CONTENT nofilter}
                            </div>              
                        </div>
                        <div class="ynp-input-checkbox">
                            <input type="checkbox" id="ynp-input-dont-show" class="ynp-input-dont-show" name="ynpcheckbox" />
                            <label for="ynp-input-dont-show">{l s='Do not show this again' mod='ybc_newsletter'}</label>
                        </div> 
                    </div>
                </form>
                <div class="ybc-pp-clear"></div>
            </div>
        </div>
    </div>
</div>