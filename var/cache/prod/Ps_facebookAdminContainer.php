<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class Ps_facebookAdminContainer extends Container
{
    private $parameters = [];

    public function __construct()
    {
        $this->services = $this->privates = [];
        $this->methodMap = [
            'PrestaShopCorp\\Billing\\Presenter\\BillingPresenter' => 'getBillingPresenterService',
            'PrestaShopCorp\\Billing\\Services\\BillingService' => 'getBillingServiceService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookCategoryClient' => 'getFacebookCategoryClientService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient' => 'getFacebookClientService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber' => 'getAccountSuspendedSubscriberService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\ApiErrorSubscriber' => 'getApiErrorSubscriberService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener' => 'getResponseListenerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter' => 'getConfigurationAdapterService',
            'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter' => 'getToolsAdapterService',
            'PrestaShop\\Module\\PrestashopFacebook\\Buffer\\TemplateBuffer' => 'getTemplateBufferService',
            'PrestaShop\\Module\\PrestashopFacebook\\Config\\Env' => 'getEnvService',
            'PrestaShop\\Module\\PrestashopFacebook\\Database\\Installer' => 'getInstallerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Database\\Uninstaller' => 'getUninstallerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Dispatcher\\EventDispatcher' => 'getEventDispatcherService',
            'PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory' => 'getFacebookEssentialsApiClientFactoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory' => 'getPsApiClientFactoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler' => 'getApiConversionHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\CategoryMatchHandler' => 'getCategoryMatchHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler' => 'getConfigurationHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler' => 'getErrorHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\EventBusProductHandler' => 'getEventBusProductHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\MessengerHandler' => 'getMessengerHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler' => 'getPixelHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\PrevalidationScanRefreshHandler' => 'getPrevalidationScanRefreshHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Manager\\FbeFeatureManager' => 'getFbeFeatureManagerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Presenter\\ModuleUpgradePresenter' => 'getModuleUpgradePresenterService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider' => 'getAccessTokenProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider' => 'getEventDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FacebookDataProvider' => 'getFacebookDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeDataProvider' => 'getFbeDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeFeatureDataProvider' => 'getFbeFeatureDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider' => 'getGoogleCategoryProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\MultishopDataProvider' => 'getMultishopDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider' => 'getPrevalidationScanCacheProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanDataProvider' => 'getPrevalidationScanDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider' => 'getProductAvailabilityProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductSyncReportProvider' => 'getProductSyncReportProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository' => 'getGoogleCategoryRepositoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository' => 'getProductRepositoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ServerInformationRepository' => 'getServerInformationRepositoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository' => 'getShopRepositoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\TabRepository' => 'getTabRepositoryService',
            'PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment' => 'getSegmentService',
            'PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts' => 'getPsAccountsService',
            'PrestaShop\\PsAccountsInstaller\\Installer\\Installer' => 'getInstaller2Service',
            'Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory' => 'getClientFactoryService',
            'ps_facebook' => 'getPsFacebookService',
            'ps_facebook.cache' => 'getPsFacebook_CacheService',
            'ps_facebook.context' => 'getPsFacebook_ContextService',
            'ps_facebook.controller' => 'getPsFacebook_ControllerService',
            'ps_facebook.cookie' => 'getPsFacebook_CookieService',
            'ps_facebook.currency' => 'getPsFacebook_CurrencyService',
            'ps_facebook.language' => 'getPsFacebook_LanguageService',
            'ps_facebook.link' => 'getPsFacebook_LinkService',
            'ps_facebook.shop' => 'getPsFacebook_ShopService',
            'ps_facebook.smarty' => 'getPsFacebook_SmartyService',
        ];
        $this->aliases = [
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProviderInterface' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProviderInterface' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider',
        ];
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return [
            'PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper' => true,
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
        ];
    }

    /**
     * Gets the public 'PrestaShopCorp\Billing\Presenter\BillingPresenter' shared service.
     *
     * @return \PrestaShopCorp\Billing\Presenter\BillingPresenter
     */
    protected function getBillingPresenterService()
    {
        return $this->services['PrestaShopCorp\\Billing\\Presenter\\BillingPresenter'] = new \PrestaShopCorp\Billing\Presenter\BillingPresenter(($this->privates['PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper'] ?? $this->getBillingContextWrapperService()), ($this->services['ps_facebook'] ?? $this->getPsFacebookService()));
    }

    /**
     * Gets the public 'PrestaShopCorp\Billing\Services\BillingService' shared service.
     *
     * @return \PrestaShopCorp\Billing\Services\BillingService
     */
    protected function getBillingServiceService()
    {
        return $this->services['PrestaShopCorp\\Billing\\Services\\BillingService'] = new \PrestaShopCorp\Billing\Services\BillingService(($this->privates['PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper'] ?? $this->getBillingContextWrapperService()), ($this->services['ps_facebook'] ?? $this->getPsFacebookService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\API\Client\FacebookCategoryClient' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\Client\FacebookCategoryClient
     */
    protected function getFacebookCategoryClientService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookCategoryClient'] = new \PrestaShop\Module\PrestashopFacebook\API\Client\FacebookCategoryClient(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory'] ?? $this->getPsApiClientFactoryService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] ?? $this->getGoogleCategoryRepositoryService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener'] ?? $this->getResponseListenerService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\API\Client\FacebookClient' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\Client\FacebookClient
     */
    protected function getFacebookClientService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] = new \PrestaShop\Module\PrestashopFacebook\API\Client\FacebookClient(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory'] ?? $this->getFacebookEssentialsApiClientFactoryService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider'] ?? $this->getAccessTokenProviderService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler'] ?? $this->getConfigurationHandlerService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener'] ?? $this->getResponseListenerService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\AccountSuspendedSubscriber' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\AccountSuspendedSubscriber
     */
    protected function getAccountSuspendedSubscriberService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber'] = new \PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\AccountSuspendedSubscriber(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\ApiErrorSubscriber' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\ApiErrorSubscriber
     */
    protected function getApiErrorSubscriberService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\ApiErrorSubscriber'] = new \PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\ApiErrorSubscriber(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] ?? $this->getErrorHandlerService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\API\ResponseListener' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener'] = new \PrestaShop\Module\PrestashopFacebook\API\ResponseListener([0 => ($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber'] ?? $this->getAccountSuspendedSubscriberService()), 1 => ($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\ApiErrorSubscriber'] ?? $this->getApiErrorSubscriberService())]);
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Adapter\ConfigurationAdapter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Adapter\ConfigurationAdapter
     */
    protected function getConfigurationAdapterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] = new \PrestaShop\Module\PrestashopFacebook\Adapter\ConfigurationAdapter(($this->services['ps_facebook.shop'] ?? $this->getPsFacebook_ShopService())->id);
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter
     */
    protected function getToolsAdapterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter'] = new \PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Buffer\TemplateBuffer' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Buffer\TemplateBuffer
     */
    protected function getTemplateBufferService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Buffer\\TemplateBuffer'] = new \PrestaShop\Module\PrestashopFacebook\Buffer\TemplateBuffer();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Config\Env' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Config\Env
     */
    protected function getEnvService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Database\Installer' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Database\Installer
     */
    protected function getInstallerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Database\\Installer'] = new \PrestaShop\Module\PrestashopFacebook\Database\Installer(($this->services['ps_facebook'] ?? $this->getPsFacebookService()), ($this->services['PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment'] ?? $this->getSegmentService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] ?? $this->getErrorHandlerService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Database\Uninstaller' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Database\Uninstaller
     */
    protected function getUninstallerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Database\\Uninstaller'] = new \PrestaShop\Module\PrestashopFacebook\Database\Uninstaller(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\TabRepository'] ?? ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\TabRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\TabRepository())), ($this->services['PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment'] ?? $this->getSegmentService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] ?? $this->getErrorHandlerService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] ?? $this->getFacebookClientService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Dispatcher\EventDispatcher' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Dispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Dispatcher\\EventDispatcher'] = new \PrestaShop\Module\PrestashopFacebook\Dispatcher\EventDispatcher(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler'] ?? $this->getApiConversionHandlerService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler'] ?? $this->getPixelHandlerService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider'] ?? $this->getEventDataProviderService()), ($this->services['ps_facebook.context'] ?? $this->getPsFacebook_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Factory\FacebookEssentialsApiClientFactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Factory\FacebookEssentialsApiClientFactory
     */
    protected function getFacebookEssentialsApiClientFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory'] = new \PrestaShop\Module\PrestashopFacebook\Factory\FacebookEssentialsApiClientFactory(($this->services['Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory'] ?? ($this->services['Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory'] = new \Prestashop\ModuleLibGuzzleAdapter\ClientFactory())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Factory\PsApiClientFactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Factory\PsApiClientFactory
     */
    protected function getPsApiClientFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory'] = new \PrestaShop\Module\PrestashopFacebook\Factory\PsApiClientFactory(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] ?? ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env())), ($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] ?? $this->getPsAccountsService()), ($this->services['Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory'] ?? ($this->services['Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory'] = new \Prestashop\ModuleLibGuzzleAdapter\ClientFactory())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\ApiConversionHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\ApiConversionHandler
     */
    protected function getApiConversionHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\ApiConversionHandler(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] ?? $this->getErrorHandlerService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] ?? $this->getFacebookClientService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\CategoryMatchHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\CategoryMatchHandler
     */
    protected function getCategoryMatchHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\CategoryMatchHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\CategoryMatchHandler(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] ?? $this->getGoogleCategoryRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\ConfigurationHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\ConfigurationHandler
     */
    protected function getConfigurationHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\ConfigurationHandler(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\ErrorHandler\ErrorHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\ErrorHandler\ErrorHandler
     */
    protected function getErrorHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\ErrorHandler\ErrorHandler(($this->services['ps_facebook'] ?? $this->getPsFacebookService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] ?? ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env())), ($this->services['ps_facebook.context'] ?? $this->getPsFacebook_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\EventBusProductHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\EventBusProductHandler
     */
    protected function getEventBusProductHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\EventBusProductHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\EventBusProductHandler(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] ?? ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\MessengerHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\MessengerHandler
     */
    protected function getMessengerHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\MessengerHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\MessengerHandler(($this->services['ps_facebook.language'] ?? $this->getPsFacebook_LanguageService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] ?? ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\PixelHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\PixelHandler
     */
    protected function getPixelHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\PixelHandler(($this->services['ps_facebook'] ?? $this->getPsFacebookService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\PrevalidationScanRefreshHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\PrevalidationScanRefreshHandler
     */
    protected function getPrevalidationScanRefreshHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\PrevalidationScanRefreshHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\PrevalidationScanRefreshHandler(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider'] ?? $this->getPrevalidationScanCacheProviderService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] ?? ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository())), ($this->services['ps_facebook.shop'] ?? $this->getPsFacebook_ShopService())->id);
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Manager\FbeFeatureManager' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Manager\FbeFeatureManager
     */
    protected function getFbeFeatureManagerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Manager\\FbeFeatureManager'] = new \PrestaShop\Module\PrestashopFacebook\Manager\FbeFeatureManager(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] ?? $this->getFacebookClientService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Presenter\ModuleUpgradePresenter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Presenter\ModuleUpgradePresenter
     */
    protected function getModuleUpgradePresenterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Presenter\\ModuleUpgradePresenter'] = new \PrestaShop\Module\PrestashopFacebook\Presenter\ModuleUpgradePresenter(($this->services['ps_facebook.context'] ?? $this->getPsFacebook_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\AccessTokenProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\AccessTokenProvider
     */
    protected function getAccessTokenProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\AccessTokenProvider(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener'] ?? $this->getResponseListenerService()), ($this->services['ps_facebook.controller'] ?? $this->getPsFacebook_ControllerService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory'] ?? $this->getPsApiClientFactoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\EventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\EventDataProvider
     */
    protected function getEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\EventDataProvider(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter'] ?? ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter'] = new \PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter())), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] ?? ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository())), ($this->services['ps_facebook.context'] ?? $this->getPsFacebook_ContextService()), ($this->services['ps_facebook'] ?? $this->getPsFacebookService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider'] ?? ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider())), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] ?? $this->getGoogleCategoryRepositoryService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider'] ?? $this->getGoogleCategoryProviderService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\FacebookDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\FacebookDataProvider
     */
    protected function getFacebookDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\FacebookDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\FacebookDataProvider(($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] ?? $this->getFacebookClientService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\FbeDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\FbeDataProvider
     */
    protected function getFbeDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\FbeDataProvider(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\FbeFeatureDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\FbeFeatureDataProvider
     */
    protected function getFbeFeatureDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeFeatureDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\FbeFeatureDataProvider(($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] ?? $this->getFacebookClientService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\GoogleCategoryProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\GoogleCategoryProvider
     */
    protected function getGoogleCategoryProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\GoogleCategoryProvider(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] ?? $this->getGoogleCategoryRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\MultishopDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\MultishopDataProvider
     */
    protected function getMultishopDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\MultishopDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\MultishopDataProvider(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository'] ?? ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository())), ($this->services['PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment'] ?? $this->getSegmentService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanCacheProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanCacheProvider
     */
    protected function getPrevalidationScanCacheProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanCacheProvider(($this->services['ps_facebook'] ?? $this->getPsFacebookService()), ($this->services['ps_facebook.cache'] ?? $this->getPsFacebook_CacheService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanDataProvider
     */
    protected function getPrevalidationScanDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanDataProvider(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider'] ?? $this->getPrevalidationScanCacheProviderService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider
     */
    protected function getProductAvailabilityProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\ProductSyncReportProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\ProductSyncReportProvider
     */
    protected function getProductSyncReportProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductSyncReportProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\ProductSyncReportProvider(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory'] ?? $this->getPsApiClientFactoryService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener'] ?? $this->getResponseListenerService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Repository\GoogleCategoryRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\GoogleCategoryRepository
     */
    protected function getGoogleCategoryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\GoogleCategoryRepository(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository
     */
    protected function getProductRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Repository\ServerInformationRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\ServerInformationRepository
     */
    protected function getServerInformationRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ServerInformationRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ServerInformationRepository(($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] ?? $this->getPsAccountsService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository
     */
    protected function getShopRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Repository\TabRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\TabRepository
     */
    protected function getTabRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\TabRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\TabRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\Ps_facebook\Tracker\Segment' shared service.
     *
     * @return \PrestaShop\Module\Ps_facebook\Tracker\Segment
     */
    protected function getSegmentService()
    {
        return $this->services['PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment'] = new \PrestaShop\Module\Ps_facebook\Tracker\Segment(($this->services['ps_facebook.context'] ?? $this->getPsFacebook_ContextService()), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] ?? ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env())), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()), ($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] ?? $this->getPsAccountsService()));
    }

    /**
     * Gets the public 'PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts
     */
    protected function getPsAccountsService()
    {
        return $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] = new \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts(($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] ?? ($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('3.0.0'))));
    }

    /**
     * Gets the public 'PrestaShop\PsAccountsInstaller\Installer\Installer' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Installer
     */
    protected function getInstaller2Service()
    {
        return $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('3.0.0');
    }

    /**
     * Gets the public 'Prestashop\ModuleLibGuzzleAdapter\ClientFactory' shared service.
     *
     * @return \Prestashop\ModuleLibGuzzleAdapter\ClientFactory
     */
    protected function getClientFactoryService()
    {
        return $this->services['Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory'] = new \Prestashop\ModuleLibGuzzleAdapter\ClientFactory();
    }

    /**
     * Gets the public 'ps_facebook' shared service.
     *
     * @return \Ps_facebook
     */
    protected function getPsFacebookService()
    {
        return $this->services['ps_facebook'] = \Module::getInstanceByName('ps_facebook');
    }

    /**
     * Gets the public 'ps_facebook.cache' shared service.
     *
     * @return \string
     */
    protected function getPsFacebook_CacheService()
    {
        return $this->services['ps_facebook.cache'] = \PrestaShop\Module\PrestashopFacebook\Factory\CacheFactory::getCachePath();
    }

    /**
     * Gets the public 'ps_facebook.context' shared service.
     *
     * @return \Context
     */
    protected function getPsFacebook_ContextService()
    {
        return $this->services['ps_facebook.context'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getContext();
    }

    /**
     * Gets the public 'ps_facebook.controller' shared service.
     *
     * @return \Controller
     */
    protected function getPsFacebook_ControllerService()
    {
        return $this->services['ps_facebook.controller'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getController();
    }

    /**
     * Gets the public 'ps_facebook.cookie' shared service.
     *
     * @return \Cookie
     */
    protected function getPsFacebook_CookieService()
    {
        return $this->services['ps_facebook.cookie'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getCookie();
    }

    /**
     * Gets the public 'ps_facebook.currency' shared service.
     *
     * @return \Currency
     */
    protected function getPsFacebook_CurrencyService()
    {
        return $this->services['ps_facebook.currency'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getCurrency();
    }

    /**
     * Gets the public 'ps_facebook.language' shared service.
     *
     * @return \Language
     */
    protected function getPsFacebook_LanguageService()
    {
        return $this->services['ps_facebook.language'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getLanguage();
    }

    /**
     * Gets the public 'ps_facebook.link' shared service.
     *
     * @return \Shop
     */
    protected function getPsFacebook_LinkService()
    {
        return $this->services['ps_facebook.link'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getLink();
    }

    /**
     * Gets the public 'ps_facebook.shop' shared service.
     *
     * @return \Shop
     */
    protected function getPsFacebook_ShopService()
    {
        return $this->services['ps_facebook.shop'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getShop();
    }

    /**
     * Gets the public 'ps_facebook.smarty' shared service.
     *
     * @return \Smarty
     */
    protected function getPsFacebook_SmartyService()
    {
        return $this->services['ps_facebook.smarty'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getSmarty();
    }

    /**
     * Gets the private 'PrestaShopCorp\Billing\Wrappers\BillingContextWrapper' shared service.
     *
     * @return \PrestaShopCorp\Billing\Wrappers\BillingContextWrapper
     */
    protected function getBillingContextWrapperService()
    {
        return $this->privates['PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper'] = new \PrestaShopCorp\Billing\Wrappers\BillingContextWrapper(($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] ?? $this->getPsAccountsService()), ($this->services['ps_facebook.context'] ?? $this->getPsFacebook_ContextService()));
    }
}
