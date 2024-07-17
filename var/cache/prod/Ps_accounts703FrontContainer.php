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
class Ps_accounts703FrontContainer extends Container
{
    private $parameters = [];

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->methodMap = [
            'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\DeleteUserShopHandler' => 'getDeleteUserShopHandlerService',
            'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\LinkShopHandler' => 'getLinkShopHandlerService',
            'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\MigrateAndLinkV4ShopHandler' => 'getMigrateAndLinkV4ShopHandlerService',
            'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UnlinkShopHandler' => 'getUnlinkShopHandlerService',
            'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UpdateUserShopHandler' => 'getUpdateUserShopHandlerService',
            'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UpgradeModuleHandler' => 'getUpgradeModuleHandlerService',
            'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UpgradeModuleMultiHandler' => 'getUpgradeModuleMultiHandlerService',
            'PrestaShop\\Module\\PsAccounts\\Account\\LinkShop' => 'getLinkShopService',
            'PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\OwnerSession' => 'getOwnerSessionService',
            'PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession' => 'getShopSessionService',
            'PrestaShop\\Module\\PsAccounts\\Account\\Session\\ShopSession' => 'getShopSession2Service',
            'PrestaShop\\Module\\PsAccounts\\Adapter\\Configuration' => 'getConfigurationService',
            'PrestaShop\\Module\\PsAccounts\\Adapter\\Link' => 'getLinkService',
            'PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient' => 'getAccountsClientService',
            'PrestaShop\\Module\\PsAccounts\\Api\\Client\\IndirectChannelClient' => 'getIndirectChannelClientService',
            'PrestaShop\\Module\\PsAccounts\\Api\\Client\\ServicesBillingClient' => 'getServicesBillingClientService',
            'PrestaShop\\Module\\PsAccounts\\Context\\ShopContext' => 'getShopContextService',
            'PrestaShop\\Module\\PsAccounts\\Cqrs\\CommandBus' => 'getCommandBusService',
            'PrestaShop\\Module\\PsAccounts\\Factory\\CircuitBreakerFactory' => 'getCircuitBreakerFactoryService',
            'PrestaShop\\Module\\PsAccounts\\Installer\\Installer' => 'getInstallerService',
            'PrestaShop\\Module\\PsAccounts\\Middleware\\Oauth2Middleware' => 'getOauth2MiddlewareService',
            'PrestaShop\\Module\\PsAccounts\\Presenter\\PsAccountsPresenter' => 'getPsAccountsPresenterService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\Oauth2Client' => 'getOauth2ClientService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\PrestaShopSession' => 'getPrestaShopSessionService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\ShopProvider' => 'getShopProviderService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\RsaKeysProvider' => 'getRsaKeysProviderService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider' => 'getShopProvider2Service',
            'PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository' => 'getConfigurationRepositoryService',
            'PrestaShop\\Module\\PsAccounts\\Repository\\ShopTokenRepository' => 'getShopTokenRepositoryService',
            'PrestaShop\\Module\\PsAccounts\\Repository\\UserTokenRepository' => 'getUserTokenRepositoryService',
            'PrestaShop\\Module\\PsAccounts\\Service\\AnalyticsService' => 'getAnalyticsServiceService',
            'PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService' => 'getPsAccountsServiceService',
            'PrestaShop\\Module\\PsAccounts\\Service\\PsBillingService' => 'getPsBillingServiceService',
            'PrestaShop\\Module\\PsAccounts\\Service\\SentryService' => 'getSentryServiceService',
            'ps_accounts.context' => 'getPsAccounts_ContextService',
            'ps_accounts.logger' => 'getPsAccounts_LoggerService',
            'ps_accounts.module' => 'getPsAccounts_ModuleService',
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
        ];
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\CommandHandler\DeleteUserShopHandler' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\CommandHandler\DeleteUserShopHandler
     */
    protected function getDeleteUserShopHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\DeleteUserShopHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\DeleteUserShopHandler(($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] ?? ($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient('https://accounts-api.distribution.prestashop.net/', NULL, 10))), ($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContextService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession'] ?? $this->getShopSessionService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\OwnerSession'] ?? $this->getOwnerSessionService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\CommandHandler\LinkShopHandler' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\CommandHandler\LinkShopHandler
     */
    protected function getLinkShopHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\LinkShopHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\LinkShopHandler(($this->services['PrestaShop\\Module\\PsAccounts\\Account\\LinkShop'] ?? $this->getLinkShopService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\CommandHandler\MigrateAndLinkV4ShopHandler' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\CommandHandler\MigrateAndLinkV4ShopHandler
     */
    protected function getMigrateAndLinkV4ShopHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\MigrateAndLinkV4ShopHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\MigrateAndLinkV4ShopHandler(($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] ?? ($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient('https://accounts-api.distribution.prestashop.net/', NULL, 10))), ($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContextService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession'] ?? $this->getShopSessionService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\CommandHandler\UnlinkShopHandler' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\CommandHandler\UnlinkShopHandler
     */
    protected function getUnlinkShopHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UnlinkShopHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\UnlinkShopHandler(($this->services['PrestaShop\\Module\\PsAccounts\\Account\\LinkShop'] ?? $this->getLinkShopService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\CommandHandler\UpdateUserShopHandler' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\CommandHandler\UpdateUserShopHandler
     */
    protected function getUpdateUserShopHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UpdateUserShopHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\UpdateUserShopHandler(($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] ?? ($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient('https://accounts-api.distribution.prestashop.net/', NULL, 10))), ($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContextService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession'] ?? $this->getShopSessionService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\OwnerSession'] ?? $this->getOwnerSessionService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\CommandHandler\UpgradeModuleHandler' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\CommandHandler\UpgradeModuleHandler
     */
    protected function getUpgradeModuleHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UpgradeModuleHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\UpgradeModuleHandler(($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] ?? ($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient('https://accounts-api.distribution.prestashop.net/', NULL, 10))), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\LinkShop'] ?? $this->getLinkShopService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession'] ?? $this->getShopSessionService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContextService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\CommandHandler\UpgradeModuleMultiHandler' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\CommandHandler\UpgradeModuleMultiHandler
     */
    protected function getUpgradeModuleMultiHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UpgradeModuleMultiHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\UpgradeModuleMultiHandler(($this->services['PrestaShop\\Module\\PsAccounts\\Cqrs\\CommandBus'] ?? $this->getCommandBusService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\LinkShop' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\LinkShop
     */
    protected function getLinkShopService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\LinkShop'] = new \PrestaShop\Module\PsAccounts\Account\LinkShop(($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\Session\Firebase\OwnerSession' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\Session\Firebase\OwnerSession
     */
    protected function getOwnerSessionService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\OwnerSession'] = new \PrestaShop\Module\PsAccounts\Account\Session\Firebase\OwnerSession(($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\ShopSession'] ?? $this->getShopSession2Service()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\Session\Firebase\ShopSession' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\Session\Firebase\ShopSession
     */
    protected function getShopSessionService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession'] = new \PrestaShop\Module\PsAccounts\Account\Session\Firebase\ShopSession(($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\ShopSession'] ?? $this->getShopSession2Service()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\Session\ShopSession' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\Session\ShopSession
     */
    protected function getShopSession2Service()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\ShopSession'] = new \PrestaShop\Module\PsAccounts\Account\Session\ShopSession(($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\ShopProvider'] ?? $this->getShopProviderService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Adapter\Configuration' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Adapter\Configuration
     */
    protected function getConfigurationService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Configuration'] = new \PrestaShop\Module\PsAccounts\Adapter\Configuration(($this->services['ps_accounts.context'] ?? $this->getPsAccounts_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Adapter\Link' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Adapter\Link
     */
    protected function getLinkService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Link'] = new \PrestaShop\Module\PsAccounts\Adapter\Link(($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Api\Client\AccountsClient' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient
     */
    protected function getAccountsClientService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient('https://accounts-api.distribution.prestashop.net/', NULL, 10);
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Api\Client\IndirectChannelClient' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Api\Client\IndirectChannelClient
     */
    protected function getIndirectChannelClientService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\IndirectChannelClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\IndirectChannelClient('https://indirect-channel-api.prestashop.net');
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Api\Client\ServicesBillingClient' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Api\Client\ServicesBillingClient
     */
    protected function getServicesBillingClientService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\ServicesBillingClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\ServicesBillingClient('https://billing-api.distribution.prestashop.net/', ($this->services['PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService'] ?? $this->getPsAccountsServiceService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider'] ?? $this->getShopProvider2Service()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Context\ShopContext' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Context\ShopContext
     */
    protected function getShopContextService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] = new \PrestaShop\Module\PsAccounts\Context\ShopContext(($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()), ($this->services['ps_accounts.context'] ?? $this->getPsAccounts_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Cqrs\CommandBus' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Cqrs\CommandBus
     */
    protected function getCommandBusService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Cqrs\\CommandBus'] = new \PrestaShop\Module\PsAccounts\Cqrs\CommandBus(($this->services['ps_accounts.module'] ?? $this->getPsAccounts_ModuleService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Factory\CircuitBreakerFactory' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Factory\CircuitBreakerFactory
     */
    protected function getCircuitBreakerFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Factory\\CircuitBreakerFactory'] = new \PrestaShop\Module\PsAccounts\Factory\CircuitBreakerFactory(($this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Configuration'] ?? $this->getConfigurationService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Installer\Installer' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Installer\Installer
     */
    protected function getInstallerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Installer\\Installer'] = new \PrestaShop\Module\PsAccounts\Installer\Installer(($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContextService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Link'] ?? $this->getLinkService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Middleware\Oauth2Middleware' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Middleware\Oauth2Middleware
     */
    protected function getOauth2MiddlewareService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Middleware\\Oauth2Middleware'] = new \PrestaShop\Module\PsAccounts\Middleware\Oauth2Middleware(($this->services['ps_accounts.module'] ?? $this->getPsAccounts_ModuleService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Presenter\PsAccountsPresenter' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Presenter\PsAccountsPresenter
     */
    protected function getPsAccountsPresenterService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Presenter\\PsAccountsPresenter'] = new \PrestaShop\Module\PsAccounts\Presenter\PsAccountsPresenter(($this->services['ps_accounts.module'] ?? $this->getPsAccounts_ModuleService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Provider\OAuth2\Oauth2Client' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\OAuth2\Oauth2Client
     */
    protected function getOauth2ClientService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\Oauth2Client'] = new \PrestaShop\Module\PsAccounts\Provider\OAuth2\Oauth2Client(($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Provider\OAuth2\PrestaShopSession' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\OAuth2\PrestaShopSession
     */
    protected function getPrestaShopSessionService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\PrestaShopSession'] = \PrestaShop\Module\PsAccounts\Factory\PrestaShopSessionFactory::create();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Provider\OAuth2\ShopProvider' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\OAuth2\ShopProvider
     */
    protected function getShopProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\ShopProvider'] = \PrestaShop\Module\PsAccounts\Provider\OAuth2\ShopProvider::create();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Provider\RsaKeysProvider' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\RsaKeysProvider
     */
    protected function getRsaKeysProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\RsaKeysProvider'] = new \PrestaShop\Module\PsAccounts\Provider\RsaKeysProvider(($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Provider\ShopProvider' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\ShopProvider
     */
    protected function getShopProvider2Service()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider'] = new \PrestaShop\Module\PsAccounts\Provider\ShopProvider(($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContextService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Link'] ?? $this->getLinkService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Repository\ConfigurationRepository' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Repository\ConfigurationRepository
     */
    protected function getConfigurationRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsAccounts\Repository\ConfigurationRepository(($this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Configuration'] ?? $this->getConfigurationService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Repository\ShopTokenRepository' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Repository\ShopTokenRepository
     */
    protected function getShopTokenRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ShopTokenRepository'] = new \PrestaShop\Module\PsAccounts\Repository\ShopTokenRepository(($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession'] ?? $this->getShopSessionService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Repository\UserTokenRepository' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Repository\UserTokenRepository
     */
    protected function getUserTokenRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\UserTokenRepository'] = new \PrestaShop\Module\PsAccounts\Repository\UserTokenRepository(($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\OwnerSession'] ?? $this->getOwnerSessionService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Service\AnalyticsService' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Service\AnalyticsService
     */
    protected function getAnalyticsServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Service\\AnalyticsService'] = new \PrestaShop\Module\PsAccounts\Service\AnalyticsService('pEJGnRxw47CU01efFjMyl1S7YcxshLxl', ($this->services['ps_accounts.logger'] ?? $this->getPsAccounts_LoggerService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Service\PsAccountsService' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Service\PsAccountsService
     */
    protected function getPsAccountsServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService'] = new \PrestaShop\Module\PsAccounts\Service\PsAccountsService(($this->services['ps_accounts.module'] ?? $this->getPsAccounts_ModuleService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Service\PsBillingService' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Service\PsBillingService
     */
    protected function getPsBillingServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Service\\PsBillingService'] = new \PrestaShop\Module\PsAccounts\Service\PsBillingService(($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\ServicesBillingClient'] ?? $this->getServicesBillingClientService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ShopTokenRepository'] ?? $this->getShopTokenRepositoryService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Service\SentryService' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Service\SentryService
     */
    protected function getSentryServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Service\\SentryService'] = new \PrestaShop\Module\PsAccounts\Service\SentryService('https://cd2a5f089edb6d6efe742c0cbe004106@o298402.ingest.us.sentry.io/5354585', 'production', ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\LinkShop'] ?? $this->getLinkShopService()), ($this->services['ps_accounts.context'] ?? $this->getPsAccounts_ContextService()));
    }

    /**
     * Gets the public 'ps_accounts.context' shared service.
     *
     * @return \Context
     */
    protected function getPsAccounts_ContextService()
    {
        return $this->services['ps_accounts.context'] = \Context::getContext();
    }

    /**
     * Gets the public 'ps_accounts.logger' shared service.
     *
     * @return \Monolog\Logger
     */
    protected function getPsAccounts_LoggerService()
    {
        return $this->services['ps_accounts.logger'] = \PrestaShop\Module\PsAccounts\Factory\PsAccountsLogger::create();
    }

    /**
     * Gets the public 'ps_accounts.module' shared service.
     *
     * @return \Ps_accounts
     */
    protected function getPsAccounts_ModuleService()
    {
        return $this->services['ps_accounts.module'] = \Module::getInstanceByName('ps_accounts');
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
            'ps_accounts.environment' => 'production',
            'ps_accounts.accounts_api_url' => 'https://accounts-api.distribution.prestashop.net/',
            'ps_accounts.accounts_ui_url' => 'https://accounts.distribution.prestashop.net',
            'ps_accounts.sso_api_url' => 'https://auth.prestashop.com/api/v1/',
            'ps_accounts.sso_account_url' => 'https://auth.prestashop.com/login',
            'ps_accounts.sso_resend_verification_email_url' => 'https://auth.prestashop.com/account/send-verification-email',
            'ps_accounts.billing_api_url' => 'https://billing-api.distribution.prestashop.net/',
            'ps_accounts.indirect_channel_api_url' => 'https://indirect-channel-api.prestashop.net',
            'ps_accounts.sentry_credentials' => 'https://cd2a5f089edb6d6efe742c0cbe004106@o298402.ingest.us.sentry.io/5354585',
            'ps_accounts.segment_write_key' => 'pEJGnRxw47CU01efFjMyl1S7YcxshLxl',
            'ps_accounts.check_api_ssl_cert' => true,
            'ps_accounts.verify_account_tokens' => true,
            'ps_accounts.accounts_vue_cdn_url' => 'https://unpkg.com/prestashop_accounts_vue_components@3/dist/psaccountsVue.umd.min.js',
            'ps_accounts.accounts_cdn_url' => 'https://unpkg.com/prestashop_accounts_vue_components@5',
            'ps_accounts.svc_accounts_ui_url' => 'https://accounts.psessentials.net',
            'ps_accounts.oauth2_url' => 'https://oauth.prestashop.com',
            'ps_accounts.testimonials_url' => 'https://assets.prestashop3.com/dst/accounts/assets/testimonials.json',
        ];
    }
}
