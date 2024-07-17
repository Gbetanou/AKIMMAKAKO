{*
* 2007-2022 ETS-Soft
*
* NOTICE OF LICENSE
*
* This file is not open source! Each license that you purchased is only available for 1 wesite only.
* If you want to use this file on more websites (or projects), you need to purchase additional licenses. 
* You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
* 
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs, please contact us for extra customization service at an affordable price
*
*  @author ETS-Soft <etssoft.jsc@gmail.com>
*  @copyright  2007-2022 ETS-Soft
*  @license    Valid for 1 website (or project) for each purchase of license
*  International Registered Trademark & Property of ETS-Soft
*}
{if isset($products) && $products}
    <div class='sale' id='sale' >
        <div class="products_tab {if $products|@count <= 4}no_action{/if}">
            {if $products|@count <= 6}
                {foreach from=$products item="product"}
                    <div class="group_blog_item">
                        {include file="catalog/_partials/miniatures/product.tpl" product=$product}
                    </div>
                {/foreach}
            {else}
                {assign var='is' value=0}
                {foreach from=$products item="product"}
                    {if $is%2 == 0}
                        <div class="group_blog_item">
                    {/if}
                    {assign var='is' value=$is+1}
                    {include file="catalog/_partials/miniatures/product.tpl" product=$product}
                    {if $is%2 == 0}
                        </div>
                    {/if}
                {/foreach}
                {if $is%2 != 0}
                    </div>
                {/if}
            {/if}
          
        </div>
    </div>
{else}
<ul id="sale" class="sale">
	<li class="alert alert-info">{l s='No new products at this time.' mod='blocknewproducts'}</li>
</ul>
{/if}
