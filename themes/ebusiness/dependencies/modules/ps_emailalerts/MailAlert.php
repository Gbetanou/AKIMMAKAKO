<?php
/**
 * 2007-2015 PrestaShop.
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2015 PrestaShop SA
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
class MailAlert extends ObjectModel
{
    public $id_customer;

    public $customer_email;

    public $id_product;

    public $id_product_attribute;

    public $id_shop;

    public $id_lang;

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'mailalert_customer_oos',
        'primary' => 'id_customer',
        'fields' => array(
            'id_customer' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
            'customer_email' => array('type' => self::TYPE_STRING, 'validate' => 'isEmail', 'required' => true),
            'id_product' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
            'id_product_attribute' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
            'id_shop' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
            'id_lang' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
        ),
    );

    public static function customerHasNotification($id_customer, $id_product, $id_product_attribute, $id_shop = null, $id_lang = null, $guest_email = '')
    {
        if ($id_shop == null) {
            $id_shop = Context::getContext()->shop->id;
        }

        if ($id_lang == null) {
            $id_lang = Context::getContext()->language->id;
        }

        $customer = new Customer($id_customer);
        $customer_email = $customer->email;
        $guest_email = pSQL($guest_email);

        $id_customer = (int) $id_customer;
        $customer_email = pSQL($customer_email);
        $where = $id_customer == 0 ? "customer_email = '$guest_email'" : "(id_customer=$id_customer OR customer_email='$customer_email')";
        $sql = '
			SELECT *
			FROM `'._DB_PREFIX_.self::$definition['table'].'`
			WHERE '.$where.'
			AND `id_product` = '.(int) $id_product.'
			AND `id_product_attribute` = '.(int) $id_product_attribute.'
			AND `id_shop` = '.(int) $id_shop;

        return count(Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql));
    }

    public static function deleteAlert($id_customer, $customer_email, $id_product, $id_product_attribute, $id_shop = null)
    {
        $sql = '
			DELETE FROM `'._DB_PREFIX_.self::$definition['table'].'`
			WHERE '.(($id_customer > 0) ? '(`customer_email` = \''.pSQL($customer_email).'\' OR `id_customer` = '.(int) $id_customer.')' :
                '`customer_email` = \''.pSQL($customer_email).'\'').
            ' AND `id_product` = '.(int) $id_product.'
			AND `id_product_attribute` = '.(int) $id_product_attribute.'
			AND `id_shop` = '.($id_shop != null ? (int) $id_shop : (int) Context::getContext()->shop->id);

        return Db::getInstance()->execute($sql);
    }

    /*
     * Get objects that will be viewed on "My alerts" page
     */
    public static function getMailAlerts($id_customer, $id_lang, Shop $shop = null)
    {
        if (!Validate::isUnsignedId($id_customer) || !Validate::isUnsignedId($id_lang)) {
            die(Tools::displayError());
        }

        if (!$shop) {
            $shop = Context::getContext()->shop;
        }

        $customer = new Customer($id_customer);
        $products = self::getProducts($customer, $id_lang);
        $products_number = count($products);

        if (empty($products) === true || !$products_number) {
            return array();
        }

        for ($i = 0; $i < $products_number; ++$i) {
            $obj = new Product((int) $products[$i]['id_product'], false, (int) $id_lang);
            if (!Validate::isLoadedObject($obj)) {
                continue;
            }

            if (isset($products[$i]['id_product_attribute']) &&
                Validate::isUnsignedInt($products[$i]['id_product_attribute'])) {
                $attributes = self::getProductAttributeCombination($products[$i]['id_product_attribute'], $id_lang);
                $products[$i]['attributes_small'] = '';

                if ($attributes) {
                    foreach ($attributes as $row) {
                        $products[$i]['attributes_small'] .= $row['attribute_name'].', ';
                    }
                }

                $products[$i]['attributes_small'] = rtrim($products[$i]['attributes_small'], ', ');
                $products[$i]['id_shop'] = $shop->id;

                /* Get cover */
                $attrgrps = $obj->getAttributesGroups((int) $id_lang);
                foreach ($attrgrps as $attrgrp) {
                    if ($attrgrp['id_product_attribute'] == (int) $products[$i]['id_product_attribute']
                        && $images = Product::_getAttributeImageAssociations((int) $attrgrp['id_product_attribute'])) {
                        $products[$i]['cover'] = $obj->id.'-'.array_pop($images);
                        break;
                    }
                }
            }

            if (!isset($products[$i]['cover']) || !$products[$i]['cover']) {
                $images = $obj->getImages((int) $id_lang);
                foreach ($images as $image) {
                    if ($image['cover']) {
                        $products[$i]['cover'] = $obj->id.'-'.$image['id_image'];
                        break;
                    }
                }
            }

            if (!isset($products[$i]['cover'])) {
                $products[$i]['cover'] = Language::getIsoById($id_lang).'-default';
            }
            $products[$i]['link'] = $obj->getLink();
            $context = Context::getContext();
            $products[$i]['cover_url'] = $context->link->getImageLink($obj->link_rewrite, $products[$i]['cover'], ImageType::getFormattedName('small'));
        }

        return $products;
    }

    public static function sendCustomerAlert($id_product, $id_product_attribute)
    {
        $link = new Link();
        $context = Context::getContext()->cloneContext();
        $customers = self::getCustomers($id_product, $id_product_attribute);

        foreach ($customers as $customer) {
            $id_shop = (int) $customer['id_shop'];
            $id_lang = (int) $customer['id_lang'];
            $context->shop->id = $id_shop;
            $context->language->id = $id_lang;

            $product = new Product((int) $id_product, false, $id_lang, $id_shop);
            $product_link = $link->getProductLink($product, $product->link_rewrite, null, null, $id_lang, $id_shop);
            $template_vars = array(
                '{product}' => (is_array($product->name) ? $product->name[$id_lang] : $product->name),
                '{product_link}' => $product_link,
            );

            if ($customer['id_customer']) {
                $customer = new Customer((int) $customer['id_customer']);
                $customer_email = $customer->email;
                $customer_id = (int) $customer->id;
            } else {
                $customer_id = 0;
                $customer_email = $customer['customer_email'];
            }

            $iso = Language::getIsoById($id_lang);

            if (file_exists(dirname(__FILE__).'/mails/'.$iso.'/customer_qty.txt') &&
                file_exists(dirname(__FILE__).'/mails/'.$iso.'/customer_qty.html')) {
                Mail::Send(
                    $id_lang,
                    'customer_qty',
                    Mail::l('Product available', $id_lang),
                    $template_vars,
                    (string) $customer_email,
                    null,
                    (string) Configuration::get('PS_SHOP_EMAIL', null, null, $id_shop),
                    (string) Configuration::get('PS_SHOP_NAME', null, null, $id_shop),
                    null,
                    null,
                    dirname(__FILE__).'/mails/',
                    false,
                    $id_shop
                );
            }

            Hook::exec(
                'actionModuleMailAlertSendCustomer',
                array('product' => (is_array($product->name) ? $product->name[$id_lang] : $product->name),
                'link' => $product_link,
                'customer' => $customer,
                'product_obj' => $product, )
            );

            self::deleteAlert((int) $customer_id, (string) $customer_email, (int) $id_product, (int) $id_product_attribute, $id_shop);
        }
    }

    /*
     * Generate correctly the address for an email
     */
    public static function getFormatedAddress(Address $address, $line_sep, $fields_style = array())
    {
        return AddressFormat::generateAddress($address, array('avoid' => array()), $line_sep, ' ', $fields_style);
    }

    /*
     * Get products according to alerts
     */
    public static function getProducts($customer, $id_lang)
    {
        $list_shop_ids = Shop::getContextListShopID(false);

        $sql = '
			SELECT ma.`id_product`, p.`quantity` AS product_quantity, pl.`name`, ma.`id_product_attribute`
			FROM `'._DB_PREFIX_.self::$definition['table'].'` ma
			JOIN `'._DB_PREFIX_.'product` p ON (p.`id_product` = ma.`id_product`)
			'.Shop::addSqlAssociation('product', 'p').'
			LEFT JOIN `'._DB_PREFIX_.'product_lang` pl ON (pl.`id_product` = p.`id_product` AND pl.id_shop IN ('.implode(', ', $list_shop_ids).'))
			WHERE product_shop.`active` = 1
			AND (ma.`id_customer` = '.(int) $customer->id.' OR ma.`customer_email` = \''.pSQL($customer->email).'\')
			AND pl.`id_lang` = '.(int) $id_lang.Shop::addSqlRestriction(false, 'ma');

        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
    }

    /*
     * Get product combinations
     */
    public static function getProductAttributeCombination($id_product_attribute, $id_lang)
    {
        $sql = '
			SELECT al.`name` AS attribute_name
			FROM `'._DB_PREFIX_.'product_attribute_combination` pac
			LEFT JOIN `'._DB_PREFIX_.'attribute` a ON (a.`id_attribute` = pac.`id_attribute`)
			LEFT JOIN `'._DB_PREFIX_.'attribute_group` ag ON (ag.`id_attribute_group` = a.`id_attribute_group`)
			LEFT JOIN `'._DB_PREFIX_.'attribute_lang` al ON (a.`id_attribute` = al.`id_attribute` AND al.`id_lang` = '.(int) $id_lang.')
			LEFT JOIN `'._DB_PREFIX_.'attribute_group_lang` agl ON (ag.`id_attribute_group` = agl.`id_attribute_group` AND agl.`id_lang` = '.(int) $id_lang.')
			LEFT JOIN `'._DB_PREFIX_.'product_attribute` pa ON (pac.`id_product_attribute` = pa.`id_product_attribute`)
			'.Shop::addSqlAssociation('product_attribute', 'pa').'
			WHERE pac.`id_product_attribute` = '.(int) $id_product_attribute;

        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
    }

    /*
     * Get customers waiting for alert on the specified product/product attribute
     */
    public static function getCustomers($id_product, $id_product_attribute)
    {
        $sql = '
			SELECT id_customer, customer_email, id_shop, id_lang
			FROM `'._DB_PREFIX_.self::$definition['table'].'`
			WHERE `id_product` = '.(int) $id_product.' AND `id_product_attribute` = '.(int) $id_product_attribute;

        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
    }
}
