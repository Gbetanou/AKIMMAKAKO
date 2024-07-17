
<!-- view image of product -->
{if $product.images}
    <div class="shoppingcart_img">
        <img src="{$product.images.0.bySize.small_default.url}" title="{$product.name}"/>
    </div>
{/if}
<!-- end -->

<div class="shoppingcart_des">
<div class="shoppingcart_des_c">
<div class="shoppingcart_des_c_c">
    <h4 class="cart_productname">
    <span class="product-quantity">({$product.quantity})</span>
    <span class="product-name">{$product.name}</span></h4>
    <p class="product-price">{$product.price}</p>
    {if $product.customizations|count}
        <div class="customizations">
            <ul>
                {foreach from=$product.customizations item='customization'}
                    <li>
                        <span class="product-quantity">{$customization.quantity}</span>
                        <a href="{$customization.remove_from_cart_url}" title="{l s='remove from cart' d='Shop.Theme.Actions'}" class="remove-from-cart" rel="nofollow">{l s='Remove' d='Shop.Theme.Actions'}</a>
                        <ul>
                            {foreach from=$customization.fields item='field'}
                                <li>
                                    <span>{$field.label}</span>
                                    {if $field.type == 'text'}
                                        <span>{$field.text}</span>
                                    {else if $field.type == 'image'}
                                        <img src="{$field.image.small.url}" />
                                    {/if}
                                </li>
                            {/foreach}
                        </ul>
                    </li>
                {/foreach}
            </ul>
        </div>
    {/if}
</div>
</div>
</div>
<a class="remove-from-cart" rel="nofollow" href="{$product.remove_from_cart_url}" data-link-action="delete-from-cart" title="{l s='remove from cart' d='Shop.Theme.Actions'}" >
    <i class="material-icons">&#xE5CD;</i>
</a>
