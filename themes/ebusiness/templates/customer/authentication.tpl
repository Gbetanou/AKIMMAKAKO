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
{extends file='page.tpl'}

{block name='breadcrumb'}
  <div class="container">
        <nav class="breadcrumb">
          <ol itemscope itemtype="http://schema.org/BreadcrumbList">
            {foreach from=$breadcrumb.links item=path name=breadcrumb}
              <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="{$path.url}">
                  <span itemprop="name">{$path.title}</span>
                </a>
                <meta itemprop="position" content="{$smarty.foreach.breadcrumb.iteration}" />
              </li>
            {/foreach}
            <li itemtype="http://schema.org/ListItem" itemscope="" itemprop="itemListElement">
                <a>
                  <span itemprop="name">{l s='Log in to your account' d='Shop.Theme.CustomerAccount'}</span>
                </a>
              </li>
          </ol>
        </nav>
    </div>
{/block}

{block name='page_content'}
    
    {block name='login_form_container'}
        <div class="flex login_page_content">
          <div class="col-xs-12 col-sm-6">
              <div class="login-form">
                {render file='customer/_partials/login-form.tpl' ui=$login_form}
              </div>
              {block name='display_after_login_form'}
                {hook h='displayCustomerLoginFormAfter'}
              {/block}
          </div>
          <div class="col-xs-12 col-sm-6">
              <div class="no-account register_form">
                <div class="register_form_cell">
                    <a href="{$urls.pages.register}" data-link-action="display-register-form">
                      {l s='No account? Create one here' d='Shop.Theme.CustomerAccount'}
                    </a>
                    <div class="clearfix"></div>
                    <a class="btn btn-primary button-to-register-form" href="{$urls.pages.register}" data-link-action="display-register-form">
                      {l s='Register' d='Shop.Theme.CustomerAccount'}
                    </a>
                </div>
              </div>
          </div>
      </div>
    {/block}
{/block}
