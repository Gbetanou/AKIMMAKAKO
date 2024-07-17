{if $manufacturers}
    <div id="ybc-mnf-block" class="ybc-mnf-block col-md-12 col-xs-12">
        <h4 class="h1 products-section-title text-uppercase"><span>{$YBC_MF_TITLE}</span></h4>
        <ul id="ybc-mnf-block-ul" class="ybc-mnf-block-ul">
        	{foreach from=$manufacturers item=manufacturer}
        		<li class="ybc-mnf-block-li">
                    <a class="ybc-mnf-block-a-img" href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'html'}"><img src="{$manufacturer.image}" alt="" /></a>
                    {if $YBC_MF_SHOW_NAME}<a class="ybc-mnf-block-a-name" href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'html'}">{$manufacturer.name|escape:'html':'UTF-8'}</a>{/if}
                </li>
        	{/foreach}
        </ul>
    </div>
{/if}