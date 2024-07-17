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
<script type="text/javascript">
var wishlistProductsIds=[];
var baseDir ='{$content_dir|escape:'html':'UTF-8'}';
var static_token='{$static_token|escape:'html':'UTF-8'}';
var isLogged ='{$isLogged|escape:'html':'UTF-8'}';
var loggin_required='{l s='You must be logged in to manage your wishlist.' mod='blockwishlist' js=1}';
var added_to_wishlist ='{l s='The product was successfully added to your wishlist.' mod='blockwishlist' js=1}';
var mywishlist_url='{$link->getModuleLink('blockwishlist', 'mywishlist', array(), true)|escape:'quotes':'UTF-8'}';
{if isset($isLogged)&&$isLogged}
	var isLoggedWishlist=true;
{else}
	var isLoggedWishlist=false;
{/if}

</script>
<div class="top_wishtlish">
    <a class="wishtlist_top" href="{$link->getModuleLink('blockwishlist', 'mywishlist', array(), true)|escape:'html':'UTF-8'}">
        <span><i class="fa fa-heart-o" aria-hidden="true"></i>{*l s='My wishlists' d='Shop.Theme.Actions'*}</span>
    </a>
</div>

