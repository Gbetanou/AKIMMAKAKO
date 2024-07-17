<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderQueryHandler' shared service.

return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderQueryHandler(($this->services['ps_checkout.cache.paypal.order'] ?? $this->load('getPsCheckout_Cache_Paypal_OrderService.php')), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] ?? $this->load('getPsCheckoutCartRepositoryService.php')));