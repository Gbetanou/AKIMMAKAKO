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
*  @copyright  2007-2017 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if isset($categories) && $categories}
    {foreach from=$categories item='category'}
        {if $category.id_category!=$rootCategoryId}<option {if $selectedCategoryId==$category.id_category}selected="selected"{/if} value="{$category.id_category|intval}">{if $categoryLevel}{for $ik=1 to (int)$categoryLevel}- {/for}{/if}{$category.name|escape:'html':'UTF-8'}</option>{/if}
        {if isset($category.sub) && $category.sub}{$category.sub nofilter}{/if}
    {/foreach}
{/if}