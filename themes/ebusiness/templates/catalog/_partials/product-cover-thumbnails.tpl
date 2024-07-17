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
{if isset($tc_config.YBC_TC_PRODUCT_LAYOUT) && $tc_config.YBC_TC_PRODUCT_LAYOUT != 'layout3'}
    <div class="images-container{if $tc_config.YBC_TC_PRODUCT_LAYOUT == 'layout1'} vertical_thum_left{else} vertical_thum_right{/if}">
        {block name='product_cover'}
            <div class="product-cover{if (isset($tc_config.YBC_TC_JQZOOM) && $tc_config.YBC_TC_JQZOOM == 1)} product-cover-zoom{/if}">
                <img class="js-qv-product-cover" src="{$product.cover.bySize.large_default.url}"
                     alt="{$product.cover.legend}" title="{$product.cover.legend}" style="width:100%;" itemprop="image">
                <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                    <i class="material-icons material-icons-zoom_in"></i>
                </div>
                {block name='product_flags'}
                    <ul class="product-flags">
                        {foreach from=$product.flags item=flag}
                            <li class="product-flag {$flag.type}">{$flag.label}</li>
                        {/foreach}
                    </ul>
                {/block}
            </div>
        {/block}

        {block name='product_images'}
            <div class="js-qv-mask mask">
                <ul class="product-images js-qv-product-images">
                    {foreach from=$product.images item=image}
                        <li class="thumb-container">
                            <img class="thumb js-thumb {if $image.id_image == $product.cover.id_image} selected {/if}"
                                 data-image-medium-src="{$image.bySize.medium_default.url}"
                                 data-image-large-src="{$image.bySize.large_default.url}"
                                 src="{$image.bySize.home_default.url}" alt="{$image.legend}" title="{$image.legend}"
                                 width="100" itemprop="image">
                        </li>
                    {/foreach}
                </ul>
            </div>
        {/block}
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            setTimeout(function () {
                if ($('div:not(.quickview) .product_thumb_horizontal .product-cover.product-cover-zoom').length > 0) {
                    var img = $('div:not(.quickview) .product_thumb_horizontal .product-cover.product-cover-zoom'),
                        img_src = $('div:not(.quickview) .product_thumb_horizontal .product-cover.product-cover-zoom').data('src');
                    img.zoom({
                        touch: false,
                        url: img_src
                    });
                }
            }, 200);
        });
    </script>
    {*-----------------------------------------------------------------------------------*}
    {*------------------------------LAYOUT HORIZONTAL------------------------------------*}
    {*-----------------------------------------------------------------------------------*}
{elseif (isset($tc_config.YBC_TC_PRODUCT_LAYOUT) && $tc_config.YBC_TC_PRODUCT_LAYOUT == 'layout3')}
    <div class="images-container product_thumb_horizontal">
        {block name='product_cover'}
            <div class="product-cover{if (isset($tc_config.YBC_TC_JQZOOM) && $tc_config.YBC_TC_JQZOOM == 1)} product-cover-zoom{/if}">
                <img class="js-qv-product-cover" src="{$product.cover.bySize.large_default.url}"
                     alt="{$product.cover.legend}" title="{$product.cover.legend}" style="width:100%;" itemprop="image">
                <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                    <i class="material-icons material-icons-zoom_in"></i>
                </div>
                {block name='product_flags'}
                    <ul class="product-flags">
                        {foreach from=$product.flags item=flag}
                            <li class="product-flag {$flag.type}">{$flag.label}</li>
                        {/foreach}
                    </ul>
                {/block}
            </div>
        {/block}

        {block name='product_images'}
            <div class="js-qv-mask mask">
                <ul class="product-images js-qv-product-images">
                    {foreach from=$product.images item=image}
                        <li class="thumb-container">
                            <img
                                    class="thumb js-thumb {if $image.id_image == $product.cover.id_image} selected {/if}"
                                    data-image-medium-src="{$image.bySize.medium_default.url}"
                                    data-image-large-src="{$image.bySize.large_default.url}"
                                    src="{$image.bySize.home_default.url}"
                                    alt="{$image.legend}"
                                    title="{$image.legend}"
                                    width="100"
                                    itemprop="image">
                        </li>
                    {/foreach}
                </ul>
            </div>
        {/block}
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            setTimeout(function () {
                if ($('.product_thumb_horizontal').length != '') {
                    $('.product_thumb_horizontal .product-images').owlCarousel({
                        items: 4,
                        responsive: {
                            // breakpoint from 0 up
                            0: {
                                items: 3,
                                margin: 10,
                            },
                            // breakpoint from 480 up
                            480: {
                                items: 4,
                                margin: 10,
                            },
                            // breakpoint from 768 up
                            768: {
                                items: 4
                            },
                            992: {
                                items: 4
                            }
                        },
                        nav: true,
                        loop: false,
                        rewindNav: false,
                        margin: 20,
                        dots: false,
                        navText: ['', ''],
                        callbacks: true,
                    });
                }
                ;
                if ($('div:not(.quickview) .product_thumb_horizontal .product-cover.product-cover-zoom').length > 0) {
                    var img = $('div:not(.quickview) .product_thumb_horizontal .product-cover.product-cover-zoom'),
                        img_src = $('div:not(.quickview) .product_thumb_horizontal .product-cover.product-cover-zoom').data('src');
                    img.zoom({
                        touch: false,
                        url: img_src
                    });
                }
            }, 200);
        });
    </script>
{/if}