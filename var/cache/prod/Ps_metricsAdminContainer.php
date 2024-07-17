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
class Ps_metricsAdminContainer extends Container
{
    private $parameters = [];

    public function __construct()
    {
        $this->services = $this->privates = [];
        $this->methodMap = [
            'PrestaShop\\Module\\Ps_metrics\\Controller\\Admin\\MetricsController' => 'getMetricsControllerService',
            'PrestaShop\\Module\\Ps_metrics\\Controller\\Admin\\MetricsLegacyStatsController' => 'getMetricsLegacyStatsControllerService',
            'PrestaShop\\Module\\Ps_metrics\\Controller\\Admin\\MetricsOauthController' => 'getMetricsOauthControllerService',
            'PrestaShop\\Module\\Ps_metrics\\Controller\\Admin\\MetricsResolverController' => 'getMetricsResolverControllerService',
            'ps_accounts.facade' => 'getPsAccounts_FacadeService',
            'ps_accounts.installer' => 'getPsAccounts_InstallerService',
            'ps_metrics.adapter.logger' => 'getPsMetrics_Adapter_LoggerService',
            'ps_metrics.api.analytics' => 'getPsMetrics_Api_AnalyticsService',
            'ps_metrics.api.client.analytics' => 'getPsMetrics_Api_Client_AnalyticsService',
            'ps_metrics.api.client.factory' => 'getPsMetrics_Api_Client_FactoryService',
            'ps_metrics.api.client.http' => 'getPsMetrics_Api_Client_HttpService',
            'ps_metrics.api.http' => 'getPsMetrics_Api_HttpService',
            'ps_metrics.api.manager' => 'getPsMetrics_Api_ManagerService',
            'ps_metrics.handler.guzzleapi' => 'getPsMetrics_Handler_GuzzleapiService',
            'ps_metrics.handler.native.stats' => 'getPsMetrics_Handler_Native_StatsService',
            'ps_metrics.helper.api' => 'getPsMetrics_Helper_ApiService',
            'ps_metrics.helper.config' => 'getPsMetrics_Helper_ConfigService',
            'ps_metrics.helper.db' => 'getPsMetrics_Helper_DbService',
            'ps_metrics.helper.json' => 'getPsMetrics_Helper_JsonService',
            'ps_metrics.helper.module' => 'getPsMetrics_Helper_ModuleService',
            'ps_metrics.helper.multishop' => 'getPsMetrics_Helper_MultishopService',
            'ps_metrics.helper.number' => 'getPsMetrics_Helper_NumberService',
            'ps_metrics.helper.prestashop' => 'getPsMetrics_Helper_PrestashopService',
            'ps_metrics.helper.segment' => 'getPsMetrics_Helper_SegmentService',
            'ps_metrics.helper.shop' => 'getPsMetrics_Helper_ShopService',
            'ps_metrics.helper.tools' => 'getPsMetrics_Helper_ToolsService',
            'ps_metrics.legacy.installer' => 'getPsMetrics_Legacy_InstallerService',
            'ps_metrics.middleware' => 'getPsMetrics_MiddlewareService',
            'ps_metrics.middleware.log' => 'getPsMetrics_Middleware_LogService',
            'ps_metrics.middleware.response' => 'getPsMetrics_Middleware_ResponseService',
            'ps_metrics.middleware.response.default' => 'getPsMetrics_Middleware_Response_DefaultService',
            'ps_metrics.middleware.sentry' => 'getPsMetrics_Middleware_SentryService',
            'ps_metrics.module' => 'getPsMetrics_ModuleService',
            'ps_metrics.module.gainstaller' => 'getPsMetrics_Module_GainstallerService',
            'ps_metrics.module.install' => 'getPsMetrics_Module_InstallService',
            'ps_metrics.module.uninstall' => 'getPsMetrics_Module_UninstallService',
            'ps_metrics.module.upgrade' => 'getPsMetrics_Module_UpgradeService',
            'ps_metrics.presenter.faq' => 'getPsMetrics_Presenter_FaqService',
            'ps_metrics.presenter.shopData' => 'getPsMetrics_Presenter_ShopDataService',
            'ps_metrics.provider.analyticsaccountslist' => 'getPsMetrics_Provider_AnalyticsaccountslistService',
            'ps_metrics.repository.configuration' => 'getPsMetrics_Repository_ConfigurationService',
            'ps_metrics.repository.hookmodule' => 'getPsMetrics_Repository_HookmoduleService',
            'ps_metrics.statstab.manager' => 'getPsMetrics_Statstab_ManagerService',
            'ps_metrics.tracker.segment' => 'getPsMetrics_Tracker_SegmentService',
            'ps_metrics.validation.processselectaccountanalytics' => 'getPsMetrics_Validation_ProcessselectaccountanalyticsService',
        ];

        $this->aliases = [];
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
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'ps_metrics.config.env' => true,
        ];
    }

    /**
     * Gets the public 'PrestaShop\Module\Ps_metrics\Controller\Admin\MetricsController' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Controller\Admin\MetricsController
     */
    protected function getMetricsControllerService()
    {
        return $this->services['PrestaShop\\Module\\Ps_metrics\\Controller\\Admin\\MetricsController'] = new \PrestaShop\Module\Ps_metrics\Controller\Admin\MetricsController();
    }

    /**
     * Gets the public 'PrestaShop\Module\Ps_metrics\Controller\Admin\MetricsLegacyStatsController' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Controller\Admin\MetricsLegacyStatsController
     */
    protected function getMetricsLegacyStatsControllerService()
    {
        return $this->services['PrestaShop\\Module\\Ps_metrics\\Controller\\Admin\\MetricsLegacyStatsController'] = new \PrestaShop\Module\Ps_metrics\Controller\Admin\MetricsLegacyStatsController();
    }

    /**
     * Gets the public 'PrestaShop\Module\Ps_metrics\Controller\Admin\MetricsOauthController' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Controller\Admin\MetricsOauthController
     */
    protected function getMetricsOauthControllerService()
    {
        return $this->services['PrestaShop\\Module\\Ps_metrics\\Controller\\Admin\\MetricsOauthController'] = new \PrestaShop\Module\Ps_metrics\Controller\Admin\MetricsOauthController();
    }

    /**
     * Gets the public 'PrestaShop\Module\Ps_metrics\Controller\Admin\MetricsResolverController' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Controller\Admin\MetricsResolverController
     */
    protected function getMetricsResolverControllerService()
    {
        return $this->services['PrestaShop\\Module\\Ps_metrics\\Controller\\Admin\\MetricsResolverController'] = new \PrestaShop\Module\Ps_metrics\Controller\Admin\MetricsResolverController();
    }

    /**
     * Gets the public 'ps_accounts.facade' shared service.
     *
     * @return \ps_metrics_module_v4_0_5\PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts
     */
    protected function getPsAccounts_FacadeService()
    {
        return $this->services['ps_accounts.facade'] = new \ps_metrics_module_v4_0_5\PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts(($this->services['ps_accounts.installer'] ?? ($this->services['ps_accounts.installer'] = new \ps_metrics_module_v4_0_5\PrestaShop\PsAccountsInstaller\Installer\Installer('5.0'))));
    }

    /**
     * Gets the public 'ps_accounts.installer' shared service.
     *
     * @return \ps_metrics_module_v4_0_5\PrestaShop\PsAccountsInstaller\Installer\Installer
     */
    protected function getPsAccounts_InstallerService()
    {
        return $this->services['ps_accounts.installer'] = new \ps_metrics_module_v4_0_5\PrestaShop\PsAccountsInstaller\Installer\Installer('5.0');
    }

    /**
     * Gets the public 'ps_metrics.adapter.logger' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Adapter\LoggerAdapter
     */
    protected function getPsMetrics_Adapter_LoggerService()
    {
        return $this->services['ps_metrics.adapter.logger'] = new \PrestaShop\Module\Ps_metrics\Adapter\LoggerAdapter();
    }

    /**
     * Gets the public 'ps_metrics.api.analytics' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Api\AnalyticsApi
     */
    protected function getPsMetrics_Api_AnalyticsService()
    {
        return $this->services['ps_metrics.api.analytics'] = new \PrestaShop\Module\Ps_metrics\Api\AnalyticsApi(($this->services['ps_metrics.api.client.analytics'] ?? $this->getPsMetrics_Api_Client_AnalyticsService()), ($this->services['ps_metrics.helper.config'] ?? $this->getPsMetrics_Helper_ConfigService()));
    }

    /**
     * Gets the public 'ps_metrics.api.client.analytics' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Api\Client\AnalyticsClient
     */
    protected function getPsMetrics_Api_Client_AnalyticsService()
    {
        return $this->services['ps_metrics.api.client.analytics'] = new \PrestaShop\Module\Ps_metrics\Api\Client\AnalyticsClient(($this->services['ps_accounts.facade'] ?? $this->getPsAccounts_FacadeService()), ($this->services['ps_metrics.middleware.response.default'] ?? $this->getPsMetrics_Middleware_Response_DefaultService()), ($this->services['ps_metrics.middleware.log'] ?? $this->getPsMetrics_Middleware_LogService()), ($this->services['ps_metrics.middleware.sentry'] ?? ($this->services['ps_metrics.middleware.sentry'] = new \PrestaShop\Module\Ps_metrics\Middleware\SentryMiddleware())), ($this->services['ps_metrics.middleware.response'] ?? ($this->services['ps_metrics.middleware.response'] = new \PrestaShop\Module\Ps_metrics\Middleware\ResponseMiddleware())), ($this->services['ps_metrics.handler.guzzleapi'] ?? ($this->services['ps_metrics.handler.guzzleapi'] = new \PrestaShop\Module\Ps_metrics\Handler\GuzzleApiResponseExceptionHandler())));
    }

    /**
     * Gets the public 'ps_metrics.api.client.factory' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Api\Client\ClientManager
     */
    protected function getPsMetrics_Api_Client_FactoryService()
    {
        return $this->services['ps_metrics.api.client.factory'] = new \PrestaShop\Module\Ps_metrics\Api\Client\ClientManager(($this->services['ps_metrics.middleware.response.default'] ?? $this->getPsMetrics_Middleware_Response_DefaultService()), ($this->services['ps_metrics.middleware.log'] ?? $this->getPsMetrics_Middleware_LogService()), ($this->services['ps_metrics.middleware.sentry'] ?? ($this->services['ps_metrics.middleware.sentry'] = new \PrestaShop\Module\Ps_metrics\Middleware\SentryMiddleware())), ($this->services['ps_metrics.middleware.response'] ?? ($this->services['ps_metrics.middleware.response'] = new \PrestaShop\Module\Ps_metrics\Middleware\ResponseMiddleware())), ($this->services['ps_metrics.handler.guzzleapi'] ?? ($this->services['ps_metrics.handler.guzzleapi'] = new \PrestaShop\Module\Ps_metrics\Handler\GuzzleApiResponseExceptionHandler())));
    }

    /**
     * Gets the public 'ps_metrics.api.client.http' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Api\Client\HttpClient
     */
    protected function getPsMetrics_Api_Client_HttpService()
    {
        return $this->services['ps_metrics.api.client.http'] = new \PrestaShop\Module\Ps_metrics\Api\Client\HttpClient(($this->services['ps_metrics.middleware.response.default'] ?? $this->getPsMetrics_Middleware_Response_DefaultService()), ($this->services['ps_metrics.middleware.log'] ?? $this->getPsMetrics_Middleware_LogService()), ($this->services['ps_metrics.middleware.sentry'] ?? ($this->services['ps_metrics.middleware.sentry'] = new \PrestaShop\Module\Ps_metrics\Middleware\SentryMiddleware())), ($this->services['ps_metrics.middleware.response'] ?? ($this->services['ps_metrics.middleware.response'] = new \PrestaShop\Module\Ps_metrics\Middleware\ResponseMiddleware())), ($this->services['ps_metrics.handler.guzzleapi'] ?? ($this->services['ps_metrics.handler.guzzleapi'] = new \PrestaShop\Module\Ps_metrics\Handler\GuzzleApiResponseExceptionHandler())));
    }

    /**
     * Gets the public 'ps_metrics.api.http' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Api\HttpApi
     */
    protected function getPsMetrics_Api_HttpService()
    {
        return $this->services['ps_metrics.api.http'] = new \PrestaShop\Module\Ps_metrics\Api\HttpApi(($this->services['ps_metrics.api.client.http'] ?? $this->getPsMetrics_Api_Client_HttpService()));
    }

    /**
     * Gets the public 'ps_metrics.api.manager' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Api\ApiManager
     */
    protected function getPsMetrics_Api_ManagerService()
    {
        return $this->services['ps_metrics.api.manager'] = new \PrestaShop\Module\Ps_metrics\Api\ApiManager();
    }

    /**
     * Gets the public 'ps_metrics.handler.guzzleapi' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Handler\GuzzleApiResponseExceptionHandler
     */
    protected function getPsMetrics_Handler_GuzzleapiService()
    {
        return $this->services['ps_metrics.handler.guzzleapi'] = new \PrestaShop\Module\Ps_metrics\Handler\GuzzleApiResponseExceptionHandler();
    }

    /**
     * Gets the public 'ps_metrics.handler.native.stats' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Handler\NativeStatsHandler
     */
    protected function getPsMetrics_Handler_Native_StatsService()
    {
        return $this->services['ps_metrics.handler.native.stats'] = new \PrestaShop\Module\Ps_metrics\Handler\NativeStatsHandler(($this->services['ps_metrics.module'] ?? $this->getPsMetrics_ModuleService()));
    }

    /**
     * Gets the public 'ps_metrics.helper.api' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\ApiHelper
     */
    protected function getPsMetrics_Helper_ApiService()
    {
        return $this->services['ps_metrics.helper.api'] = new \PrestaShop\Module\Ps_metrics\Helper\ApiHelper();
    }

    /**
     * Gets the public 'ps_metrics.helper.config' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\ConfigHelper
     */
    protected function getPsMetrics_Helper_ConfigService()
    {
        return $this->services['ps_metrics.helper.config'] = new \PrestaShop\Module\Ps_metrics\Helper\ConfigHelper(new \PrestaShop\Module\Ps_metrics\Config\Env(($this->services['ps_metrics.module'] ?? $this->getPsMetrics_ModuleService())));
    }

    /**
     * Gets the public 'ps_metrics.helper.db' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\DbHelper
     */
    protected function getPsMetrics_Helper_DbService()
    {
        return $this->services['ps_metrics.helper.db'] = new \PrestaShop\Module\Ps_metrics\Helper\DbHelper();
    }

    /**
     * Gets the public 'ps_metrics.helper.json' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\JsonHelper
     */
    protected function getPsMetrics_Helper_JsonService()
    {
        return $this->services['ps_metrics.helper.json'] = new \PrestaShop\Module\Ps_metrics\Helper\JsonHelper();
    }

    /**
     * Gets the public 'ps_metrics.helper.module' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\ModuleHelper
     */
    protected function getPsMetrics_Helper_ModuleService()
    {
        return $this->services['ps_metrics.helper.module'] = new \PrestaShop\Module\Ps_metrics\Helper\ModuleHelper(($this->services['ps_metrics.module'] ?? $this->getPsMetrics_ModuleService()));
    }

    /**
     * Gets the public 'ps_metrics.helper.multishop' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\MultishopHelper
     */
    protected function getPsMetrics_Helper_MultishopService()
    {
        return $this->services['ps_metrics.helper.multishop'] = new \PrestaShop\Module\Ps_metrics\Helper\MultishopHelper();
    }

    /**
     * Gets the public 'ps_metrics.helper.number' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\NumberHelper
     */
    protected function getPsMetrics_Helper_NumberService()
    {
        return $this->services['ps_metrics.helper.number'] = new \PrestaShop\Module\Ps_metrics\Helper\NumberHelper();
    }

    /**
     * Gets the public 'ps_metrics.helper.prestashop' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\PrestaShopHelper
     */
    protected function getPsMetrics_Helper_PrestashopService()
    {
        return $this->services['ps_metrics.helper.prestashop'] = new \PrestaShop\Module\Ps_metrics\Helper\PrestaShopHelper();
    }

    /**
     * Gets the public 'ps_metrics.helper.segment' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\SegmentHelper
     */
    protected function getPsMetrics_Helper_SegmentService()
    {
        return $this->services['ps_metrics.helper.segment'] = new \PrestaShop\Module\Ps_metrics\Helper\SegmentHelper(($this->services['ps_metrics.helper.config'] ?? $this->getPsMetrics_Helper_ConfigService()));
    }

    /**
     * Gets the public 'ps_metrics.helper.shop' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\ShopHelper
     */
    protected function getPsMetrics_Helper_ShopService()
    {
        return $this->services['ps_metrics.helper.shop'] = new \PrestaShop\Module\Ps_metrics\Helper\ShopHelper(($this->services['ps_metrics.helper.tools'] ?? ($this->services['ps_metrics.helper.tools'] = new \PrestaShop\Module\Ps_metrics\Helper\ToolsHelper())));
    }

    /**
     * Gets the public 'ps_metrics.helper.tools' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\ToolsHelper
     */
    protected function getPsMetrics_Helper_ToolsService()
    {
        return $this->services['ps_metrics.helper.tools'] = new \PrestaShop\Module\Ps_metrics\Helper\ToolsHelper();
    }

    /**
     * Gets the public 'ps_metrics.legacy.installer' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\LegacyModuleInstaller
     */
    protected function getPsMetrics_Legacy_InstallerService()
    {
        return $this->services['ps_metrics.legacy.installer'] = new \PrestaShop\Module\Ps_metrics\LegacyModuleInstaller(($this->services['ps_metrics.module'] ?? $this->getPsMetrics_ModuleService()));
    }

    /**
     * Gets the public 'ps_metrics.middleware' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Middleware\Middleware
     */
    protected function getPsMetrics_MiddlewareService()
    {
        return $this->services['ps_metrics.middleware'] = new \PrestaShop\Module\Ps_metrics\Middleware\Middleware();
    }

    /**
     * Gets the public 'ps_metrics.middleware.log' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Middleware\LogMiddleware
     */
    protected function getPsMetrics_Middleware_LogService()
    {
        return $this->services['ps_metrics.middleware.log'] = new \PrestaShop\Module\Ps_metrics\Middleware\LogMiddleware(($this->services['ps_metrics.adapter.logger'] ?? ($this->services['ps_metrics.adapter.logger'] = new \PrestaShop\Module\Ps_metrics\Adapter\LoggerAdapter())));
    }

    /**
     * Gets the public 'ps_metrics.middleware.response' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Middleware\ResponseMiddleware
     */
    protected function getPsMetrics_Middleware_ResponseService()
    {
        return $this->services['ps_metrics.middleware.response'] = new \PrestaShop\Module\Ps_metrics\Middleware\ResponseMiddleware();
    }

    /**
     * Gets the public 'ps_metrics.middleware.response.default' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Middleware\CheckResponseMiddleware
     */
    protected function getPsMetrics_Middleware_Response_DefaultService()
    {
        return $this->services['ps_metrics.middleware.response.default'] = new \PrestaShop\Module\Ps_metrics\Middleware\CheckResponseMiddleware(($this->services['ps_metrics.helper.json'] ?? ($this->services['ps_metrics.helper.json'] = new \PrestaShop\Module\Ps_metrics\Helper\JsonHelper())));
    }

    /**
     * Gets the public 'ps_metrics.middleware.sentry' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Middleware\SentryMiddleware
     */
    protected function getPsMetrics_Middleware_SentryService()
    {
        return $this->services['ps_metrics.middleware.sentry'] = new \PrestaShop\Module\Ps_metrics\Middleware\SentryMiddleware();
    }

    /**
     * Gets the public 'ps_metrics.module' shared service.
     *
     * @return \Ps_metrics
     */
    protected function getPsMetrics_ModuleService()
    {
        return $this->services['ps_metrics.module'] = \Module::getInstanceByName('ps_metrics');
    }

    /**
     * Gets the public 'ps_metrics.module.gainstaller' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Module\GAInstaller
     */
    protected function getPsMetrics_Module_GainstallerService()
    {
        return $this->services['ps_metrics.module.gainstaller'] = new \PrestaShop\Module\Ps_metrics\Module\GAInstaller(($this->services['ps_metrics.module'] ?? $this->getPsMetrics_ModuleService()), ($this->services['ps_metrics.helper.module'] ?? $this->getPsMetrics_Helper_ModuleService()), ($this->services['ps_metrics.helper.tools'] ?? ($this->services['ps_metrics.helper.tools'] = new \PrestaShop\Module\Ps_metrics\Helper\ToolsHelper())), ($this->services['ps_metrics.helper.prestashop'] ?? ($this->services['ps_metrics.helper.prestashop'] = new \PrestaShop\Module\Ps_metrics\Helper\PrestaShopHelper())));
    }

    /**
     * Gets the public 'ps_metrics.module.install' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Module\Install
     */
    protected function getPsMetrics_Module_InstallService()
    {
        return $this->services['ps_metrics.module.install'] = new \PrestaShop\Module\Ps_metrics\Module\Install(($this->services['ps_metrics.module'] ?? $this->getPsMetrics_ModuleService()), ($this->services['ps_metrics.repository.configuration'] ?? $this->getPsMetrics_Repository_ConfigurationService()), ($this->services['ps_metrics.repository.hookmodule'] ?? ($this->services['ps_metrics.repository.hookmodule'] = new \PrestaShop\Module\Ps_metrics\Repository\HookModuleRepository())));
    }

    /**
     * Gets the public 'ps_metrics.module.uninstall' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Module\Uninstall
     */
    protected function getPsMetrics_Module_UninstallService()
    {
        return $this->services['ps_metrics.module.uninstall'] = new \PrestaShop\Module\Ps_metrics\Module\Uninstall(($this->services['ps_accounts.facade'] ?? $this->getPsAccounts_FacadeService()), ($this->services['ps_metrics.repository.configuration'] ?? $this->getPsMetrics_Repository_ConfigurationService()), ($this->services['ps_metrics.api.analytics'] ?? $this->getPsMetrics_Api_AnalyticsService()));
    }

    /**
     * Gets the public 'ps_metrics.module.upgrade' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Module\Upgrade
     */
    protected function getPsMetrics_Module_UpgradeService()
    {
        return $this->services['ps_metrics.module.upgrade'] = new \PrestaShop\Module\Ps_metrics\Module\Upgrade(($this->services['ps_metrics.module'] ?? $this->getPsMetrics_ModuleService()));
    }

    /**
     * Gets the public 'ps_metrics.presenter.faq' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Presenter\FaqPresenter
     */
    protected function getPsMetrics_Presenter_FaqService()
    {
        return $this->services['ps_metrics.presenter.faq'] = new \PrestaShop\Module\Ps_metrics\Presenter\FaqPresenter(($this->services['ps_metrics.helper.json'] ?? ($this->services['ps_metrics.helper.json'] = new \PrestaShop\Module\Ps_metrics\Helper\JsonHelper())), ($this->services['ps_metrics.module'] ?? $this->getPsMetrics_ModuleService()), ($this->services['ps_metrics.helper.prestashop'] ?? ($this->services['ps_metrics.helper.prestashop'] = new \PrestaShop\Module\Ps_metrics\Helper\PrestaShopHelper())), ($this->services['ps_metrics.api.http'] ?? $this->getPsMetrics_Api_HttpService()));
    }

    /**
     * Gets the public 'ps_metrics.presenter.shopData' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Presenter\ShopDataPresenter
     */
    protected function getPsMetrics_Presenter_ShopDataService()
    {
        return $this->services['ps_metrics.presenter.shopData'] = new \PrestaShop\Module\Ps_metrics\Presenter\ShopDataPresenter(($this->services['ps_metrics.module'] ?? $this->getPsMetrics_ModuleService()), ($this->services['ps_metrics.helper.prestashop'] ?? ($this->services['ps_metrics.helper.prestashop'] = new \PrestaShop\Module\Ps_metrics\Helper\PrestaShopHelper())), ($this->services['ps_metrics.repository.configuration'] ?? $this->getPsMetrics_Repository_ConfigurationService()), ($this->services['ps_metrics.helper.shop'] ?? $this->getPsMetrics_Helper_ShopService()), ($this->services['ps_metrics.provider.analyticsaccountslist'] ?? $this->getPsMetrics_Provider_AnalyticsaccountslistService()), ($this->services['ps_metrics.module.gainstaller'] ?? $this->getPsMetrics_Module_GainstallerService()), ($this->services['ps_accounts.facade'] ?? $this->getPsAccounts_FacadeService()), ($this->services['ps_metrics.helper.tools'] ?? ($this->services['ps_metrics.helper.tools'] = new \PrestaShop\Module\Ps_metrics\Helper\ToolsHelper())), ($this->services['ps_metrics.helper.multishop'] ?? ($this->services['ps_metrics.helper.multishop'] = new \PrestaShop\Module\Ps_metrics\Helper\MultishopHelper())));
    }

    /**
     * Gets the public 'ps_metrics.provider.analyticsaccountslist' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Provider\AnalyticsAccountsListProvider
     */
    protected function getPsMetrics_Provider_AnalyticsaccountslistService()
    {
        return $this->services['ps_metrics.provider.analyticsaccountslist'] = new \PrestaShop\Module\Ps_metrics\Provider\AnalyticsAccountsListProvider(($this->services['ps_metrics.repository.configuration'] ?? $this->getPsMetrics_Repository_ConfigurationService()), ($this->services['ps_metrics.api.analytics'] ?? $this->getPsMetrics_Api_AnalyticsService()));
    }

    /**
     * Gets the public 'ps_metrics.repository.configuration' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Repository\ConfigurationRepository
     */
    protected function getPsMetrics_Repository_ConfigurationService()
    {
        return $this->services['ps_metrics.repository.configuration'] = new \PrestaShop\Module\Ps_metrics\Repository\ConfigurationRepository(($this->services['ps_metrics.helper.prestashop'] ?? ($this->services['ps_metrics.helper.prestashop'] = new \PrestaShop\Module\Ps_metrics\Helper\PrestaShopHelper())));
    }

    /**
     * Gets the public 'ps_metrics.repository.hookmodule' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Repository\HookModuleRepository
     */
    protected function getPsMetrics_Repository_HookmoduleService()
    {
        return $this->services['ps_metrics.repository.hookmodule'] = new \PrestaShop\Module\Ps_metrics\Repository\HookModuleRepository();
    }

    /**
     * Gets the public 'ps_metrics.statstab.manager' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\StatsTabManager
     */
    protected function getPsMetrics_Statstab_ManagerService()
    {
        return $this->services['ps_metrics.statstab.manager'] = new \PrestaShop\Module\Ps_metrics\StatsTabManager(($this->services['ps_metrics.module'] ?? $this->getPsMetrics_ModuleService()), ($this->services['ps_accounts.facade'] ?? $this->getPsAccounts_FacadeService()));
    }

    /**
     * Gets the public 'ps_metrics.tracker.segment' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Tracker\Segment
     */
    protected function getPsMetrics_Tracker_SegmentService()
    {
        return $this->services['ps_metrics.tracker.segment'] = new \PrestaShop\Module\Ps_metrics\Tracker\Segment(($this->services['ps_metrics.helper.segment'] ?? $this->getPsMetrics_Helper_SegmentService()), ($this->services['ps_metrics.helper.prestashop'] ?? ($this->services['ps_metrics.helper.prestashop'] = new \PrestaShop\Module\Ps_metrics\Helper\PrestaShopHelper())), ($this->services['ps_metrics.helper.shop'] ?? $this->getPsMetrics_Helper_ShopService()));
    }

    /**
     * Gets the public 'ps_metrics.validation.processselectaccountanalytics' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Validation\SelectAccountAnalytics
     */
    protected function getPsMetrics_Validation_ProcessselectaccountanalyticsService()
    {
        return $this->services['ps_metrics.validation.processselectaccountanalytics'] = new \PrestaShop\Module\Ps_metrics\Validation\SelectAccountAnalytics();
    }
}
