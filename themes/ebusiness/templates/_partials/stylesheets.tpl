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
{foreach $stylesheets.external as $stylesheet}
  <link rel="stylesheet" href="{$stylesheet.uri}" type="text/css" media="{$stylesheet.media}" />
{/foreach}

{*
<link rel="stylesheet" href="{$urls.css_url}owl/owl.carousel.css" type="text/css" media="all" />
<link rel="stylesheet" href="{$urls.css_url}owl/owl.theme.css" type="text/css" media="all" />
<link rel="stylesheet" href="{$urls.css_url}owl/owl.transitions.css" type="text/css" media="all" />*}
<link rel="stylesheet" href="{$urls.css_url}font-elegant.css" type="text/css" media="all" />

  
{if isset($tc_config.YBC_TC_FONT1_DATA) && $tc_config.YBC_TC_FONT1_DATA != ''}
    <link rel="stylesheet" href="{$tc_config.YBC_TC_FONT1_DATA}" media="all" />
{/if}
{if isset($tc_config.YBC_TC_FONT2_DATA) && $tc_config.YBC_TC_FONT2_DATA != ''}
    <link rel="stylesheet" href="{$tc_config.YBC_TC_FONT2_DATA}" media="all" />
{/if}
{if isset($tc_config.YBC_TC_FONT3_DATA) && $tc_config.YBC_TC_FONT3_DATA != ''}
    <link rel="stylesheet" href="{$tc_config.YBC_TC_FONT3_DATA}" media="all" />
{/if}
{foreach $stylesheets.inline as $stylesheet}
  <style>
    {$stylesheet.content}
  </style>
{/foreach}
