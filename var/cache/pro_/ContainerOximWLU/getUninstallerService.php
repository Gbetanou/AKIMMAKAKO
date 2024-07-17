<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PrestashopFacebook\Database\Uninstaller' shared service.

return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Database\\Uninstaller'] = new \PrestaShop\Module\PrestashopFacebook\Database\Uninstaller(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\TabRepository'] ?? ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\TabRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\TabRepository())), ($this->services['PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment'] ?? $this->load('getSegmentService.php')), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] ?? $this->load('getErrorHandler2Service.php')), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] ?? $this->load('getFacebookClientService.php')));
