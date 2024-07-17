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

<article class="product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
  <div class="thumbnail-container">
    <div class="image_item_product">
        {block name='product_thumbnail'}
          <a href="{$product.url}" class="thumbnail product-thumbnail">
            <img src = "{$product.cover.bySize.home_default.url}" alt = "{$product.cover.legend}"
              data-full-size-image-url = "{$product.cover.large.url}" />
          </a>
        {/block}
        <div class="highlighted-informations{*if !$product.main_variants} no-variants{/if*}">
          <div class="add_to_cart_button">
{*              <form action="{$urls.pages.cart}" method="post">*}
              <div>
                    <input type="hidden" name="token" value="{$static_token}" />
                    <input type="hidden" value="{$product.id_product}" name="id_product" />
                    <input type="hidden" class="input-group form-control atc_qty" name="qty" value="1">
{*                    <button data-button-action="add-to-cart" class="btn btn-primary" {if $product.quantity <= 0}disabled="disabled"{/if}>*}
                  <button class="add_to_cart btn btn-primary" onclick="mypresta_productListCart.add({literal}$(this){/literal});">
                        {*l s='Buy Now' d='Shop.Theme.Actions'*}
                        <i class="fa fa-shopping-cart"></i>
                    </button>
              </div>
{*             </form>*}
         </div>
         {hook h='displayProductListFunctionalButtons' product=$product}
          <a href="#" class="quick-view" data-link-action="quickview">
            <i class="material-icons search">search</i> {l s='Quick view' d='Shop.Theme.Actions'}
          </a>
        </div>
        {block name='product_variants'}
            {if $product.main_variants}
              {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
            {/if}
        {/block}
    </div>
    <div class="product-description">
      {block name='product_name'}
        <h4 class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h4>
      {/block}
      {if isset($product.description_short) && $product.description_short !=''}
        <div class="short_description">{$product.description_short|truncate:100:'...' nofilter}</div>
      {/if}
      
      <div class="hook-reviews">
	      {hook h='displayProductListReviews' product=$product}
	  </div>
      
      {block name='product_price_and_shipping'}
        {if $product.show_price}
          <div class="product-price-and-shipping">
            {hook h='displayProductPriceBlock' product=$product type="before_price"}

            <span itemprop="price" class="price">{$product.price}</span>
            
            {if $product.has_discount}
              {hook h='displayProductPriceBlock' product=$product type="old_price"}

              <span class="regular-price">{$product.regular_price}</span>
              {*if $product.discount_type === 'percentage'}
                <span class="discount-percentage">{$product.discount_percentage}</span>
              {/if*}
            {/if}
            
            {hook h='displayProductPriceBlock' product=$product type='unit_price'}

            {hook h='displayProductPriceBlock' product=$product type='weight'}
          </div>
        {/if}
      {/block}
      
    </div>
    {block name='product_flags'}
      <ul class="product-flags">
        {foreach from=$product.flags item=flag}
            {if $flag.type != 'discount'}
              <li class="{$flag.type}">
                {$flag.label}
              </li>
            {/if}
        {/foreach}
        {if $product.show_price}
            {if $product.has_discount}
              {if $product.discount_type === 'percentage'}
                <li class="product-discount">
                    <span class="discount-percen">{$product.discount_percentage}</span>
                </li>
              {/if}
            {/if}
        {/if}
      </ul>
    {/block}
  </div>
</article>
