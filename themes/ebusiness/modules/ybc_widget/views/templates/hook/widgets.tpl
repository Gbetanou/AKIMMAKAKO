{if $widgets}
    {if $widget_hook == "display-top-column" }
        {if $page_name == "index"}
            <div class="home_widget_top_column">
                <div class="container">
                    <ul class="ybc-widget-{$widget_hook} row">
                        {foreach from=$widgets item='widget'}
                            <li class="ybc-widget-item">
                                {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                                {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link}">{/if}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                                {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}                                
                                {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description nofilter}</div>{/if}
                            </li>
                        {/foreach}
                    </ul>
                </div>
            </div>
        {/if}
    {else if ($widget_hook == "display-left-column" || $widget_hook == "display-right-column")}
        <div class="block hidden-sm-down">
            <ul class="ybc-widget-{$widget_hook} block_content">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item">
                        {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                        {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                        {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link}">{/if}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                        {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description nofilter}</div>{/if}
                    </li>
                {/foreach}
            </ul>
        </div>
    {else if $widget_hook == "display-footer"}
        <section class="footer-block col-xs-12 col-sm-2">
            <ul class="ybc-widget-{$widget_hook}">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item">
                        {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                        <div class="block_content toggle-footer">
                            {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                            {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link}">{/if}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                            {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description nofilter}</div>{/if}
                        </div>
                    </li>
                {/foreach}
            </ul>
        </section>
    {else if $widget_hook == "display-home"}
        <section class="home-block">
            <div class="container">
                <div class="row">
                    <ul class="ybc-widget-{$widget_hook}">
                        {foreach from=$widgets item='widget'}
                            <li class="ybc-widget-item col-md-4">
                                {if $widget.show_image && $widget.image}{if $widget.link}
                                    <a class="ybc-widget-img-link" href="{$widget.link}">{/if}
                                    <img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                                <div class="block_description">
                                    {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                                    {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                                    {if $widget.show_description && $widget.description}
                                        {$widget.description nofilter}
                                    {/if}
                                    {if $widget.link}
                                        <a class="ybc-widget-item-link btn" href="{$widget.link}">
                                            {l s='Shop now' d='Shop.Theme'}
                                        </a>
                                    {/if}
                                </div>
                            </li>
                        {/foreach}
                    </ul>
                </div>
            </div>
        </section>
    {else if $widget_hook == "ybc-ybcpaymentlogo-hook"}
        <ul class="ybc-widget-{$widget_hook}">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item">
                        {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                        {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                        {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link}">{/if}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                        {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description nofilter}</div>{/if}
                    </li>
                {/foreach}
            </ul>
    {else if $widget_hook == "ybc-footer-links"}
        <ul class="ybc-widget-{$widget_hook}">
            {foreach from=$widgets item='widget'}
                <li class="ybc-widget-item">
                    {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                    {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link}">{/if}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                    {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}                    
                    {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description nofilter}</div>{/if}
                </li>
            {/foreach}
        </ul> 
    {else if $widget_hook == "ybc-custom-3"}
        <div class="custom-text">
            <div class="custom_service">
                <ul class="ybc-widget-{$widget_hook}">
                    {foreach from=$widgets item='widget'}
                        <li class="">
                            {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                            {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link}">{/if}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                            {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}                    
                            {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description nofilter}</div>{/if}
                        </li>
                    {/foreach}
                </ul> 
            </div>
        </div>
        <div class="clearfix"></div>
    {else}
        <ul class="ybc-widget-{$widget_hook}">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item">
                        {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                        {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link}">{/if}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                        {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                        {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description nofilter}</div>{/if}
                    </li>
                {/foreach}
        </ul>
    {/if}
{/if}