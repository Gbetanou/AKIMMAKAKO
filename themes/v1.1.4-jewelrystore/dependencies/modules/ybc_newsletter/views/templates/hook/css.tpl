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
<style>
    {literal}#ynp-submit, #ynp-close{background:{/literal}{$color_button|escape:'html':'UTF-8'}{literal};}{/literal}
    {literal}.ynpt9 #ynp-submit,.ynpt9 #ynp-close{background:{/literal}{$color_hover|escape:'html':'UTF-8'}{literal};}{/literal}
    {literal}.ynpt9 .ynp-inner-wrapper > h4{color:{/literal}{$color_hover|escape:'html':'UTF-8'}{literal};}{/literal}
    {literal}.alert-success span,.ynpt6 .ynp-input-checkbox > input.ynp-input-dont-show:checked + label::after{color:{/literal}{$color_button|escape:'html':'UTF-8'}{literal};}{/literal}
    {literal}#uniform-ynp-input-dont-show > span.checked::before{color:{/literal}{$color_button|escape:'html':'UTF-8'}{literal};}{/literal}
    {literal}#ynp-submit:hover,#ynp-close:hover{background:{/literal}{$color_hover|escape:'html':'UTF-8'}{literal};}{/literal}
    {if $template=='ynpt1' && $image}
        {literal}.ynp-div-l3{background: url('{/literal}{$image|escape:'html':'UTF-8'}{literal}') top left no-repeat;}{/literal}      
    {/if}
    {literal}.ynp-close .icon::before, .ynp-close .icon::after{background:{/literal}{$color_button|escape:'html':'UTF-8'}{literal};}{/literal}
    {literal}.ynp-close:hover .icon::before, .ynp-close:hover .icon::after{background:{/literal}{$color_hover|escape:'html':'UTF-8'}{literal};}{/literal}
    {literal}.ynp-input-checkbox .box_input{color:{/literal}{$color_button|escape:'html':'UTF-8'}{literal};}{/literal}
{literal}</style>{/literal}