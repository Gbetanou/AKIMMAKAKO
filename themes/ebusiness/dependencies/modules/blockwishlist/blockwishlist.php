<?php
/**
 * 2007-2020 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

use PrestaShop\Module\BlockWishList\Database\Install;
use PrestaShop\Module\BlockWishList\Database\Uninstall;
use PrestaShop\PrestaShop\Adapter\SymfonyContainer;

if (!defined('_PS_VERSION_')) {
    exit;
}

$autoloadPath = __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/classes/WishList.php';
require_once __DIR__ . '/src/Database/Install.php';
if (file_exists($autoloadPath)) {
    require_once $autoloadPath;
}

class BlockWishList extends Module
{
    const HOOKS = [
        'actionAdminControllerSetMedia',
        'actionFrontControllerSetMedia',
        'displayProductActions',
        'displayCustomerAccount',
        'displayHeader',
        'displayTop',
        'displayAdminCustomers',
        'displayProductAdditionalInfo',
        'displayProductListFunctionalButtons',
        'displayMyAccountBlock',
        'displayNav2',
    ];

    const MODULE_ADMIN_CONTROLLERS = [
        [
            'class_name' => 'WishlistConfigurationAdminParentController',
            'visible' => false,
            'parent_class_name' => 'AdminParentModulesSf',
            'name' => 'Wishlist Module',
        ],
        [
            'class_name' => 'WishlistConfigurationAdminController',
            'visible' => true,
            'parent_class_name' => 'WishlistConfigurationAdminParentController',
            'name' => 'Configuration',
        ],
        [
            'class_name' => 'WishlistStatisticsAdminController',
            'visible' => true,
            'parent_class_name' => 'WishlistConfigurationAdminParentController',
            'name' => 'Statistics',
        ],
    ];

    public function __construct()
    {
        $this->name = 'blockwishlist';
        $this->tab = 'front_office_features';
        $this->version = '2.0.1';
        $this->author = 'PrestaShop';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->trans('Wishlist', [], 'Modules.Blockwishlist.Admin');
        $this->default_wishlist_name = $this->l('My wishlist');
        $this->description = $this->trans('Adds a block containing the customer\'s wishlists.', [], 'Modules.Blockwishlist.Admin');
        $this->ps_versions_compliancy = [
            'min' => '1.7.6.0',
            'max' => _PS_VERSION_,
        ];
    }

    /**
     * @return bool
     */
    public function install()
    {
        if (false === (new Install($this->getTranslator()))->run()) {
            return false;
        }

        return parent::install()
            && $this->registerHook(static::HOOKS);
    }

    /**
     * @return bool
     */
    public function uninstall()
    {
        return (new Uninstall())->run()
            && parent::uninstall();
    }

    public function getContent()
    {
        Tools::redirectAdmin(
            SymfonyContainer::getInstance()->get('router')->generate('blockwishlist_configuration')
        );
    }

    /**
     * Add asset for Administration
     *
     * @param array $params
     */
    public function hookActionAdminControllerSetMedia(array $params)
    {
        $this->context->controller->addCss($this->getPathUri() . 'public/backoffice.css');
    }

    /**
     * Add asset for Shop Front Office
     *
     * @see https://devdocs.prestashop.com/1.7/themes/getting-started/asset-management/#without-a-front-controller-module
     *
     * @param array $params
     */

    public function getAllProductByCustomer($id_customer, $idShop)
    {
        $result = Db::getInstance()->executeS('
            SELECT  `id_product`, `id_product_attribute`, w.`id_wishlist`, wp.`quantity`
            FROM `' . _DB_PREFIX_ . 'wishlist_product` wp
            LEFT JOIN `' . _DB_PREFIX_ . 'wishlist` w ON (w.`id_wishlist` = wp.`id_wishlist`)
            WHERE w.`id_customer` = ' . (int) $id_customer . '
            AND w.id_shop = ' . (int) $idShop . '
            AND wp.`quantity` > 0 ');

        if (empty($result)) {
            return false;
        }

        return $result;
    }

    public function hookActionFrontControllerSetMedia(array $params)
    {
        if (!method_exists('WishList','getAllProductByCustomer')) {
            $productsTagged = true === $this->context->customer->isLogged() ? $this->getAllProductByCustomer($this->context->customer->id, $this->context->shop->id) : false;
        }else {
            $productsTagged = true === $this->context->customer->isLogged() ? WishList::getAllProductByCustomer($this->context->customer->id, $this->context->shop->id) : false;
        }

        Media::addJsDef([
            'blockwishlistController' => $this->context->link->getModuleLink(
                $this->name,
                'action'
            ),
            'removeFromWishlistUrl' => $this->context->link->getModuleLink('blockwishlist', 'action', ['action' => 'deleteProductFromWishlist']),
            'wishlistUrl' => $this->context->link->getModuleLink('blockwishlist', 'view'),
            'wishlistAddProductToCartUrl' => $this->context->link->getModuleLink('blockwishlist', 'action', ['action' => 'addProductToCart']),
            'productsAlreadyTagged' => $productsTagged ?: [],
        ]);

        $this->context->controller->registerStylesheet(
            'blockwishlistController',
            'modules/' . $this->name . '/public/wishlist.css',
            [
              'media' => 'all',
              'priority' => 100,
            ]
        );

       $this->context->controller->registerJavascript(
           'blockwishlistController',
           'modules/' . $this->name . '/public/product.bundle.js',
           [
             'priority' => 100,
           ]
       );
    }

    /**
     * This hook allow additional action button, near the add to cart button on the product page
     *
     * @param array $params
     *
     * @return string
     */
    public function hookDisplayProductActions(array $params)
    {
        $this->smarty->assign([
          'blockwishlist' => $this->displayName,
          'url' => $this->context->link->getModuleLink('blockwishlist', 'action', ['action' => 'deleteProductFromWishlist']),
        ]);

        return $this->fetch('module:blockwishlist/views/templates/hook/product/add-button.tpl');
    }

    /**
     * This hook displays new elements on the customer account page
     *
     * @param array $params
     *
     * @return string
     */
    public function hookDisplayCustomerAccount(array $params)
    {
        
        $this->smarty->assign([
            'url' => $this->context->link->getModuleLink('blockwishlist', 'lists'),
            'wishlistsTitlePage' => Configuration::get('blockwishlist_WishlistPageName', $this->context->language->id),
        ]);

        return $this->fetch('module:blockwishlist/views/templates/hook/displayCustomerAccount.tpl');
    }

    /**
     * This hook displays a new block on the admin customer page
     *
     * @param array $params
     *
     * @return string
     */
    public function hookDisplayAdminCustomers(array $params)
    {
        $this->smarty->assign([
            'blockwishlist' => $this->displayName,
        ]);

        return $this->fetch('module:blockwishlist/views/templates/hook/displayAdminCustomers.tpl');
    }

    /**
     * Display additional information inside the "my account" block
     *
     * @param array $params
     *
     * @return string
     */
    public function hookDisplayMyAccountBlock(array $params)
    {
        $this->smarty->assign([
            'blockwishlist' => $this->displayName,
            'url' => $this->context->link->getModuleLink('blockwishlist', 'lists'),
            'wishlistsTitlePage' => Configuration::get('blockwishlist_WishlistPageName', $this->context->language->id),
        ]);

        return $this->fetch('module:blockwishlist/views/templates/hook/account/myaccount-block.tpl');
    }

    /**
     * This hook adds additional elements in the head section of your pages (head section of html)
     *
     * @param array $params
     *
     * @return string
     */
    public function hookDisplayHeader(array $params)
    {
        $this->context->controller->addJS(($this->_path).'js/ajax-wishlist.js');
        $this->context->controller->addCSS(($this->_path).'blockwishlist.css', 'all');
        
        $this->smarty->assign([
            'context' => $this->context->controller->php_self,
            'url' => $this->context->link->getModuleLink('blockwishlist', 'action', ['action' => 'getAllWishlist']),
            'createUrl' => $this->context->link->getModuleLink('blockwishlist', 'action', ['action' => 'createNewWishlist']),
            'deleteProductUrl' => $this->context->link->getModuleLink('blockwishlist', 'action', ['action' => 'deleteProductFromWishlist']),
            'addUrl' => $this->context->link->getModuleLink('blockwishlist', 'action', ['action' => 'addProductToWishlist']),
            'newWishlistCTA' => Configuration::get('blockwishlist_CreateButtonLabel', $this->context->language->id),
        ]);

        return $this->fetch('module:blockwishlist/views/templates/hook/displayHeader.tpl');
    }
    public function hookDisplayTop($params)
    {
        $useSSL = ((isset($this->ssl) && $this->ssl && Configuration::get('PS_SSL_ENABLED')) || Tools::usingSecureMode()) ? true : false;
        $protocol_content = ($useSSL) ? 'https://' : 'http://';
        if ($this->context->customer->isLogged())
        {
            $wishlists = Wishlist::getByIdCustomer($this->context->customer->id);
            if (empty($this->context->cookie->id_wishlist) === true ||
                WishList::exists($this->context->cookie->id_wishlist, $this->context->customer->id) === false)
            {
                if (!count($wishlists))
                    $id_wishlist = false;
                else
                {
                    $id_wishlist = (int)$wishlists[0]['id_wishlist'];
                    $this->context->cookie->id_wishlist = (int)$id_wishlist;
                }
            }
            else
                $id_wishlist = $this->context->cookie->id_wishlist;

            $this->smarty->assign(
                array(
                    'id_wishlist' => $id_wishlist,
                    'isLogged' => true,
                    'wishlist_products' => ($id_wishlist == false ? false : WishList::getProductByIdCustomer($id_wishlist,
                        $this->context->customer->id, $this->context->language->id, null, true)),
                    'wishlists' => $wishlists,
                    'ptoken' => Tools::getToken(false)
                )
            );
        }
        else
            $this->smarty->assign(array('wishlist_products' => false, 'wishlists' => false));
        $this->context->smarty->assign(
            array(
                'content_dir'         => $protocol_content.Tools::getHttpHost().__PS_BASE_URI__,
                'isLogged' => $this->context->customer->logged,
                'count_product' => (int)Db::getInstance()->getValue('SELECT count(id_wishlist_product) FROM '._DB_PREFIX_.'wishlist w, '._DB_PREFIX_.'wishlist_product wp where w.id_wishlist = wp.id_wishlist and w.id_customer='.(int)$this->context->customer->id)

            )
        );
        return  $this->display(__FILE__, 'blockwishlist_top.tpl');
    }
    public function hookDisplayNav2($params)
    {
        $useSSL = ((isset($this->ssl) && $this->ssl && Configuration::get('PS_SSL_ENABLED')) || Tools::usingSecureMode()) ? true : false;
        $protocol_content = ($useSSL) ? 'https://' : 'http://';
        if ($this->context->customer->isLogged())
        {
            $wishlists = Wishlist::getByIdCustomer($this->context->customer->id);
            if (empty($this->context->cookie->id_wishlist) === true ||
                WishList::exists($this->context->cookie->id_wishlist, $this->context->customer->id) === false)
            {
                if (!count($wishlists))
                    $id_wishlist = false;
                else
                {
                    $id_wishlist = (int)$wishlists[0]['id_wishlist'];
                    $this->context->cookie->id_wishlist = (int)$id_wishlist;
                }
            }
            else
                $id_wishlist = $this->context->cookie->id_wishlist;

            $this->smarty->assign(
                array(
                    'id_wishlist' => $id_wishlist,
                    'isLogged' => true,
                    'wishlist_products' => ($id_wishlist == false ? false : WishList::getProductByIdCustomer($id_wishlist,
                        $this->context->customer->id, $this->context->language->id, null, true)),
                    'wishlists' => $wishlists,
                    'ptoken' => Tools::getToken(false)
                )
            );
        }
        else
            $this->smarty->assign(array('wishlist_products' => false, 'wishlists' => false));
        $this->context->smarty->assign(
            array(
                'content_dir'         => $protocol_content.Tools::getHttpHost().__PS_BASE_URI__,
                'isLogged' => $this->context->customer->logged,
                'count_product' => (int)Db::getInstance()->getValue('SELECT count(id_wishlist_product) FROM '._DB_PREFIX_.'wishlist w, '._DB_PREFIX_.'wishlist_product wp where w.id_wishlist = wp.id_wishlist and w.id_customer='.(int)$this->context->customer->id)

            )
        );
        return  $this->display(__FILE__, 'blockwishlist_top.tpl');
    }
    public function hookDisplayProductListFunctionalButtons($params)
    {
        //TODO : Add cache
        if ($this->context->customer->isLogged())
            $this->smarty->assign(array(
                'wishlists'=> Wishlist::getByIdCustomer($this->context->customer->id),
                'isQuickview' => (isset($params['isQuickview']) && $params['isQuickview']) ? $params['isQuickview']:''
            ));
        elseif(isset($params['isQuickview']) && $params['isQuickview'])
            $this->smarty->assign(array(
                'isQuickview' => $params['isQuickview'],
            ));
        $this->smarty->assign('product', $params['product']);
        return $this->display(__FILE__, 'blockwishlist_button.tpl');
    }
}
