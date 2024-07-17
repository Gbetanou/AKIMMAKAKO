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

class Ybc_productimagehoverAjaxModuleFrontController extends ModuleFrontController
{
    public $ssl = true;
    /**
    * @see FrontController::initContent()
    */
    public function initContent()
    {
        $list = array();
        if(($ids = explode(',',Tools::getValue('ids'))) && is_array($ids) && $ids){
            $temp = array();
            foreach($ids as $id)
                if(!in_array((int)$id, $temp))
                    $temp[] = (int)$id;      
            if($temp && ($images = Db::getInstance()->executeS("SELECT DISTINCT res.id_image, pl.id_product, pl.link_rewrite, pl.name
                FROM ((SELECT i.* FROM `"._DB_PREFIX_."image` i WHERE cover = 0 OR cover is null GROUP BY id_product)
                	UNION DISTINCT
                	(SELECT i2.* FROM `"._DB_PREFIX_."image` i2 WHERE cover = 1 AND i2.id_product NOT IN (SELECT pi.id_product FROM `"._DB_PREFIX_."image` pi WHERE cover = 0 OR cover is null))
                ) `res`
                LEFT JOIN `"._DB_PREFIX_."product_lang` pl ON (pl.id_product = res.id_product)
                WHERE pl.id_product IN (".pSQL(implode(',',$temp)).") AND pl.id_lang ='".(int)$this->context->language->id."'
                GROUP BY pl.id_product  
                ORDER BY `position`")))
            {
                foreach($images as $row){
                    $image_rewrite = $this->context->link->getImageLink($row['link_rewrite'], (int)$row['id_image'],'home_default');// ImageType::getFormattedName('home')
                    $list[$row['id_product']] = '<img class="'.(Configuration::get('YBC_PI_TRANSITION_EFFECT')? Configuration::get('YBC_PI_TRANSITION_EFFECT'):'fade').' replace-2x img-responsive ybc_img_hover" src="'.$image_rewrite.'" alt="'.$row['name'].'" itemprop="image" title="'.$row['name'].'"/>';
                }
            }
        }
        die(json_encode($list));
    }
}