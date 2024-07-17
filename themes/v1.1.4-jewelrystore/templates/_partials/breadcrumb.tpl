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
{if $page.page_name != 'index'}
<div class="breadcrumb_wrapper" data-depth="{$breadcrumb.count|escape:'html':'UTF-8'}">
    <div class="container">
        <nav data-depth="{$breadcrumb.count|escape:'html':'UTF-8'}" class="breadcrumb">
          <ol itemscope itemtype="http://schema.org/BreadcrumbList">
            {foreach from=$breadcrumb.links item=path name=breadcrumb}
              <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="{$path.url|escape:'html':'UTF-8'}">
                  <span itemprop="name">{$path.title|escape:'html':'UTF-8'}</span>
                </a>
                <meta itemprop="position" content="{$smarty.foreach.breadcrumb.iteration|escape:'html':'UTF-8'}" />
              </li>
            {/foreach}
            {if $page.page_name == 'cart'}
                <li itemtype="http://schema.org/ListItem" itemscope="" itemprop="itemListElement">
                    <a>
                      <span itemprop="name">{l s='Shopping Cart' d='Shop.Theme.Actions'}</span>
                    </a>
                  </li>
            {/if}
            {if $page.page_name == 'contact'}
                <li class="br_contact" itemtype="http://schema.org/ListItem" itemscope="" itemprop="itemListElement">
                    <span itemprop="name">{l s='contact' d='Shop.Theme.Actions'}</span>
                </li>
            {/if}
            {if $page.page_name == 'my-account'}
                <li class="br_contact" itemtype="http://schema.org/ListItem" itemscope="" itemprop="itemListElement">
                    <a>
                        <span itemprop="name">{l s='My account' d='Shop.Theme.Actions'}</span>
                    </a>
                </li>
            {/if}
            {if $page.page_name == 'order-confirmation'}
                <li class="br_contact" itemtype="http://schema.org/ListItem" itemscope="" itemprop="itemListElement">
                    <a>
                        <span itemprop="name">{l s='Order Confirmation' d='Shop.Theme.Actions'}</span>
                    </a>
                </li>
            {/if}
            {if $page.page_name == 'manufacturer'}
                <li class="br_contact" itemtype="http://schema.org/ListItem" itemscope="" itemprop="itemListElement">
                    <a>
                        <span itemprop="name">{l s='Manufacturer' d='Shop.Theme.Actions'}</span>
                    </a>
                </li>
            {/if}
			{if $page.page_name == 'new-products'}
                <li class="br_contact" itemtype="http://schema.org/ListItem" itemscope="" itemprop="itemListElement">
                    <a>
                        <span itemprop="name">{l s='New Products' d='Shop.Theme.Actions'}</span>
                    </a>
                </li>
            {/if}
			{if $page.page_name == 'prices-drop'}
                <li class="br_contact" itemtype="http://schema.org/ListItem" itemscope="" itemprop="itemListElement">
                    <a>
                        <span itemprop="name">{l s='On Sale' d='Shop.Theme.Actions'}</span>
                    </a>
                </li>
            {/if}
			{if $page.page_name == 'best-sales'}
                <li class="br_contact" itemtype="http://schema.org/ListItem" itemscope="" itemprop="itemListElement">
                    <a>
                        <span itemprop="name">{l s='Best Sales' d='Shop.Theme.Actions'}</span>
                    </a>
                </li>
            {/if}
			{if $page.page_name == 'stores'}
                <li class="br_contact" itemtype="http://schema.org/ListItem" itemscope="" itemprop="itemListElement">
                    <a>
                        <span itemprop="name">{l s='Our stores' d='Shop.Theme.Actions'}</span>
                    </a>
                </li>
            {/if}
          </ol>
        </nav>
    </div>
</div>
{/if}