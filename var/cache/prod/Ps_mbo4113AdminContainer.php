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
class Ps_mbo4113AdminContainer extends Container
{
    private $parameters = [];

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->methodMap = [
            'PrestaShop\\Module\\Mbo\\Handler\\ErrorHandler\\ErrorHandler' => 'getErrorHandlerService',
            'mbo.accounts.data_provider' => 'getMbo_Accounts_DataProviderService',
            'mbo.cdc.client.connected_distribution_api' => 'getMbo_Cdc_Client_ConnectedDistributionApiService',
            'mbo.cdc.client.distribution_api' => 'getMbo_Cdc_Client_DistributionApiService',
            'mbo.distribution.api_config_change_handler' => 'getMbo_Distribution_ApiConfigChangeHandlerService',
            'mbo.distribution.api_version_change_config_apply_handler' => 'getMbo_Distribution_ApiVersionChangeConfigApplyHandlerService',
            'mbo.distribution.config_applier' => 'getMbo_Distribution_ConfigApplierService',
            'mbo.distribution.config_appliers_factory' => 'getMbo_Distribution_ConfigAppliersFactoryService',
            'mbo.distribution.config_factory' => 'getMbo_Distribution_ConfigFactoryService',
            'mbo.distribution.module_selection_menu_config_applier' => 'getMbo_Distribution_ModuleSelectionMenuConfigApplierService',
            'mbo.distribution.theme_catalog_menu_config_applier' => 'getMbo_Distribution_ThemeCatalogMenuConfigApplierService',
            'mbo.doctrine.cache.adapter' => 'getMbo_Doctrine_Cache_AdapterService',
            'mbo.doctrine.cache.provider' => 'getMbo_Doctrine_Cache_ProviderService',
            'mbo.ps_accounts.facade' => 'getMbo_PsAccounts_FacadeService',
            'mbo.ps_accounts.installer' => 'getMbo_PsAccounts_InstallerService',
        ];
        $this->aliases = [
            'PrestaShop\\Module\\Mbo\\Handler\\ErrorHandler\\ErrorHandlerInterface' => 'PrestaShop\\Module\\Mbo\\Handler\\ErrorHandler\\ErrorHandler',
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
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'mbo.addons.client.http' => true,
            'mbo.distribution_api.client.http' => true,
        ];
    }

    /**
     * Gets the public 'PrestaShop\Module\Mbo\Handler\ErrorHandler\ErrorHandler' shared service.
     *
     * @return \PrestaShop\Module\Mbo\Handler\ErrorHandler\ErrorHandler
     */
    protected function getErrorHandlerService()
    {
        return $this->services['PrestaShop\\Module\\Mbo\\Handler\\ErrorHandler\\ErrorHandler'] = new \PrestaShop\Module\Mbo\Handler\ErrorHandler\ErrorHandler();
    }

    /**
     * Gets the public 'mbo.accounts.data_provider' shared service.
     *
     * @return \PrestaShop\Module\Mbo\Accounts\Provider\AccountsDataProvider
     */
    protected function getMbo_Accounts_DataProviderService()
    {
        return $this->services['mbo.accounts.data_provider'] = new \PrestaShop\Module\Mbo\Accounts\Provider\AccountsDataProvider('5.2.5');
    }

    /**
     * Gets the public 'mbo.cdc.client.connected_distribution_api' shared service.
     *
     * @return \PrestaShop\Module\Mbo\Distribution\ConnectedClient
     */
    protected function getMbo_Cdc_Client_ConnectedDistributionApiService()
    {
        return $this->services['mbo.cdc.client.connected_distribution_api'] = new \PrestaShop\Module\Mbo\Distribution\ConnectedClient(($this->privates['mbo.distribution_api.client.http'] ?? $this->getMbo_DistributionApi_Client_HttpService()), ($this->services['mbo.doctrine.cache.provider'] ?? $this->getMbo_Doctrine_Cache_ProviderService()), $this->get("mbo.addons.user.provider")->getUser());
    }

    /**
     * Gets the public 'mbo.cdc.client.distribution_api' shared service.
     *
     * @return \PrestaShop\Module\Mbo\Distribution\Client
     */
    protected function getMbo_Cdc_Client_DistributionApiService()
    {
        return $this->services['mbo.cdc.client.distribution_api'] = new \PrestaShop\Module\Mbo\Distribution\Client(($this->privates['mbo.distribution_api.client.http'] ?? $this->getMbo_DistributionApi_Client_HttpService()), ($this->services['mbo.doctrine.cache.provider'] ?? $this->getMbo_Doctrine_Cache_ProviderService()));
    }

    /**
     * Gets the public 'mbo.distribution.api_config_change_handler' shared service.
     *
     * @return \PrestaShop\Module\Mbo\Distribution\Config\CommandHandler\ConfigChangeCommandHandler
     */
    protected function getMbo_Distribution_ApiConfigChangeHandlerService()
    {
        return $this->services['mbo.distribution.api_config_change_handler'] = new \PrestaShop\Module\Mbo\Distribution\Config\CommandHandler\ConfigChangeCommandHandler(($this->services['mbo.distribution.config_factory'] ?? ($this->services['mbo.distribution.config_factory'] = new \PrestaShop\Module\Mbo\Distribution\Config\Factory())), ($this->services['mbo.distribution.config_applier'] ?? $this->getMbo_Distribution_ConfigApplierService()));
    }

    /**
     * Gets the public 'mbo.distribution.api_version_change_config_apply_handler' shared service.
     *
     * @return \PrestaShop\Module\Mbo\Distribution\Config\CommandHandler\VersionChangeApplyConfigCommandHandler
     */
    protected function getMbo_Distribution_ApiVersionChangeConfigApplyHandlerService()
    {
        return $this->services['mbo.distribution.api_version_change_config_apply_handler'] = new \PrestaShop\Module\Mbo\Distribution\Config\CommandHandler\VersionChangeApplyConfigCommandHandler(($this->services['mbo.distribution.config_factory'] ?? ($this->services['mbo.distribution.config_factory'] = new \PrestaShop\Module\Mbo\Distribution\Config\Factory())), ($this->services['mbo.distribution.config_applier'] ?? $this->getMbo_Distribution_ConfigApplierService()));
    }

    /**
     * Gets the public 'mbo.distribution.config_applier' shared service.
     *
     * @return \PrestaShop\Module\Mbo\Distribution\Config\Applier
     */
    protected function getMbo_Distribution_ConfigApplierService()
    {
        return $this->services['mbo.distribution.config_applier'] = new \PrestaShop\Module\Mbo\Distribution\Config\Applier(($this->services['mbo.distribution.config_appliers_factory'] ?? $this->getMbo_Distribution_ConfigAppliersFactoryService()));
    }

    /**
     * Gets the public 'mbo.distribution.config_appliers_factory' shared service.
     *
     * @return \PrestaShop\Module\Mbo\Distribution\Config\Appliers\Factory
     */
    protected function getMbo_Distribution_ConfigAppliersFactoryService()
    {
        return $this->services['mbo.distribution.config_appliers_factory'] = new \PrestaShop\Module\Mbo\Distribution\Config\Appliers\Factory([0 => ($this->services['mbo.distribution.theme_catalog_menu_config_applier'] ?? ($this->services['mbo.distribution.theme_catalog_menu_config_applier'] = new \PrestaShop\Module\Mbo\Distribution\Config\Appliers\ThemeCatalogMenuConfigApplier())), 1 => ($this->services['mbo.distribution.module_selection_menu_config_applier'] ?? ($this->services['mbo.distribution.module_selection_menu_config_applier'] = new \PrestaShop\Module\Mbo\Distribution\Config\Appliers\ModuleSelectionMenuConfigApplier()))]);
    }

    /**
     * Gets the public 'mbo.distribution.config_factory' shared service.
     *
     * @return \PrestaShop\Module\Mbo\Distribution\Config\Factory
     */
    protected function getMbo_Distribution_ConfigFactoryService()
    {
        return $this->services['mbo.distribution.config_factory'] = new \PrestaShop\Module\Mbo\Distribution\Config\Factory();
    }

    /**
     * Gets the public 'mbo.distribution.module_selection_menu_config_applier' shared service.
     *
     * @return \PrestaShop\Module\Mbo\Distribution\Config\Appliers\ModuleSelectionMenuConfigApplier
     */
    protected function getMbo_Distribution_ModuleSelectionMenuConfigApplierService()
    {
        return $this->services['mbo.distribution.module_selection_menu_config_applier'] = new \PrestaShop\Module\Mbo\Distribution\Config\Appliers\ModuleSelectionMenuConfigApplier();
    }

    /**
     * Gets the public 'mbo.distribution.theme_catalog_menu_config_applier' shared service.
     *
     * @return \PrestaShop\Module\Mbo\Distribution\Config\Appliers\ThemeCatalogMenuConfigApplier
     */
    protected function getMbo_Distribution_ThemeCatalogMenuConfigApplierService()
    {
        return $this->services['mbo.distribution.theme_catalog_menu_config_applier'] = new \PrestaShop\Module\Mbo\Distribution\Config\Appliers\ThemeCatalogMenuConfigApplier();
    }

    /**
     * Gets the public 'mbo.doctrine.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getMbo_Doctrine_Cache_AdapterService()
    {
        return $this->services['mbo.doctrine.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('', 0, 'C:\\wamp64\\www\\prestashop/var/cache/prod\\%/ps_mbo');
    }

    /**
     * Gets the public 'mbo.doctrine.cache.provider' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getMbo_Doctrine_Cache_ProviderService()
    {
        return $this->services['mbo.doctrine.cache.provider'] = new \Symfony\Component\Cache\DoctrineProvider(($this->services['mbo.doctrine.cache.adapter'] ?? ($this->services['mbo.doctrine.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('', 0, 'C:\\wamp64\\www\\prestashop/var/cache/prod\\%/ps_mbo'))));
    }

    /**
     * Gets the public 'mbo.ps_accounts.facade' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts
     */
    protected function getMbo_PsAccounts_FacadeService()
    {
        return $this->services['mbo.ps_accounts.facade'] = new \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts(($this->services['mbo.ps_accounts.installer'] ?? ($this->services['mbo.ps_accounts.installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('5.2.5'))));
    }

    /**
     * Gets the public 'mbo.ps_accounts.installer' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Installer
     */
    protected function getMbo_PsAccounts_InstallerService()
    {
        return $this->services['mbo.ps_accounts.installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('5.2.5');
    }

    /**
     * Gets the private 'mbo.distribution_api.client.http' shared service.
     *
     * @return \GuzzleHttp\Client
     */
    protected function getMbo_DistributionApi_Client_HttpService()
    {
        return $this->privates['mbo.distribution_api.client.http'] = new \GuzzleHttp\Client(['base_uri' => 'https://mbo-api.prestashop.com', 'timeout' => '7200', 'headers' => ['Accept' => 'application/json'], 'CURLOPT_FORBID_REUSE' => true, 'CURLOPT_FRESH_CONNECT' => true]);
    }

    /**
     * @return array|bool|float|int|string|\UnitEnum|null
     */
    public function getParameter($name)
    {
        $name = (string) $name;

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    protected function getDefaultParameters(): array
    {
        return [
            'ps_cache_dir' => 'C:\\wamp64\\www\\prestashop/var/cache/prod\\',
        ];
    }
}
