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
{extends file='page.tpl'}

    {block name='page_content_container'}
      <section id="content" class="page-home">
        {block name='page_content_top'}{/block}
        {block name='page_content'}
            {block name='widget_displayTopColumn'}
                {hook h='displayTopColumn'}
            {/block}
            {block name="section_tab"}
                <div class="entry_tab">
                    <div class="tabs" id="tabs">
                        <div class="tab_title">
                            <div class="wraper_title_section">
                                <h4 class="h1 products-section-title text-uppercase home_title_section">
                                    <span>{if isset($tc_config.YBC_TC_TITLE_SECTION_TABHOME) && $tc_config.YBC_TC_TITLE_SECTION_TABHOME}
                                        {$tc_config.YBC_TC_TITLE_SECTION_TABHOME|escape:'html':'UTF-8'}
                                    {/if}</span>
                                </h4>
                                <div class="line_sub"><i class="fa fa-diamond" aria-hidden="true"></i></div>
                            </div>
                            <div class="title_tab">
                                <ul class="nav_title_tab">{hook h='displayHomeTab'}</ul>
                            </div>
                        </div>
                        <div class="tab_content">{hook h='displayHomeTabContent'}</div>
                    </div>
                </div>
            {/block}
            {$HOOK_HOME nofilter}
        {/block}
      </section>
    {/block}
