<section class="featured-products clearfix">
    <div class="container">
      <h4 class="h1 products-section-title text-uppercase ">
        <span>{l s='Popular Products' d='Modules.Featuredproducts.Shop'}</span>
      </h4>
      <div class="products">
        {foreach from=$products item="product"}
          {include file="catalog/_partials/miniatures/product.tpl" product=$product}
        {/foreach}
      </div>
      <a class="all-product-link pull-xs-left pull-md-right h4" href="{$allProductsLink}">
        {l s='All products' d='Shop.Theme.Catalog'}<i class="material-icons">chevron_right</i>
      </a>
  </div>
</section>