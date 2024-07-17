{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div class="block_newsletter links col-lg-3 col-md-3 col-sm-12">
    <div class="title clearfix hidden-md-up" data-target="#footer_nlt" data-toggle="collapse">
        <span class="h3">{l s='Newsletter' d='Shop.Theme.CustomerAccount'}</span>
        <span class="pull-xs-right">
            <span class="navbar-toggler collapse-icons">
                <i class="material-icons add">expand_more</i>
                <i class="material-icons remove">expand_less</i>
            </span>
        </span>
    </div>
    <div id="footer_nlt" class="col-md-12 col-xs-12 collapse">
      <form action="{$urls.pages.index}#footer" method="post">
        <div class="row">
            {if $conditions}
                <p>{$conditions}</p>
              {/if}
            <div class="block_newsletter_form">
                <div class="newsletter_submit">
                <input
                  class="btn btn-primary pull-xs-right"
                  name="submitNewsletter" type="submit" value="{l s='Subscribe' d='Shop.Theme.Actions'}" >
                <input
                  class="btn btn-primary pull-xs-right hidden-sm-up hidden-xs-down"
                  name="submitNewsletter"
                  type="submit"
                  value="{l s='OK' d='Shop.Theme.Actions'}"
                >
                </div>
                <div class="input-wrapper">
                  <input
                    name="email"
                    type="text"
                    value="{$value}"
                    placeholder="{l s='Your email address' d='Shop.Forms.Labels'}"
                  >
                </div>
                <input type="hidden" name="action" value="0">
                <div class="clearfix"></div>
            </div>
          <div class="col-xs-12">
              {if $msg}
                <p class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
                  {$msg}
                </p>
              {/if}
          </div>
        </div>
      </form>
    </div>
</div>
