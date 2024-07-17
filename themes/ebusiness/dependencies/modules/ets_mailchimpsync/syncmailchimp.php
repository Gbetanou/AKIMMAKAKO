<?php
/**
* 2007-2017 PrestaShop
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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2017 PrestaShop SA
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  @version  Release: $Revision$
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_ADMIN_DIR_'))
	define('_PS_ADMIN_DIR_', getcwd());
if (!defined('PS_ADMIN_DIR'))
	define('PS_ADMIN_DIR', _PS_ADMIN_DIR_);
include(dirname(__FILE__).'/../../config/config.inc.php');
if (version_compare(_PS_VERSION_, '1.5.0.0', '<'))
	include(dirname(__FILE__).'/../../init.php');
if(!class_exists('Ets_mailchimpsync'))
    require_once(dirname(__FILE__).'/ets_mailchimpsync.php');
if (!class_exists('MCAPI'))
    require_once(_PS_ROOT_DIR_.'/modules/ets_mailchimpsync/classes/MCAPI.class.php');
if(!class_exists('Galahad_MailChimp_Synchronizer_Array'))
    require_once(_PS_ROOT_DIR_.'/modules/ets_mailchimpsync/classes/Array.php');
if (!class_exists('Exception'))
    require_once(_PS_ROOT_DIR_.'/modules/ets_mailchimpsync/classes/Exception.php');
$module = Module::getInstanceByName('ets_mailchimpsync');
if(Tools::isSubmit('token') && Tools::getValue('token')!=Tools::getAdminTokenLite('AdminModules'))
    die(json_encode(array('error'=>$module->l('Token is not valid'))));
if(Tools::getValue('idexport'))
    die(json_encode($module->synchronizeMailchimpList((int)Tools::getValue('idexport'))));
else
    die(json_encode($module->synchronizeAllMailchimpLists()));