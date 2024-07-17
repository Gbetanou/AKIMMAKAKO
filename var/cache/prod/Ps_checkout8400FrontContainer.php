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
class Ps_checkout8400FrontContainer extends Container
{
    private $parameters = [];

    public function __construct()
    {
        $this->services = $this->privates = [];
        $this->methodMap = [
            'PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider' => 'getCacheDirectoryProviderService',
            'PrestaShop\\Module\\PrestashopCheckout\\Adapter\\LanguageAdapter' => 'getLanguageAdapterService',
            'PrestaShop\\Module\\PrestashopCheckout\\Builder\\Configuration\\CheckoutClientConfigurationBuilder' => 'getCheckoutClientConfigurationBuilderService',
            'PrestaShop\\Module\\PrestashopCheckout\\Builder\\Configuration\\MaaslandHttpClientConfigurationBuilder' => 'getMaaslandHttpClientConfigurationBuilderService',
            'PrestaShop\\Module\\PrestashopCheckout\\Builder\\ModuleLink\\ModuleLinkBuilder' => 'getModuleLinkBuilderService',
            'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CheckoutChecker' => 'getCheckoutCheckerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\CancelCheckoutCommandHandler' => 'getCancelCheckoutCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\SaveCheckoutCommandHandler' => 'getSaveCheckoutCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\SavePayPalOrderStatusCommandHandler' => 'getSavePayPalOrderStatusCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\UpdatePaymentMethodSelectedCommandHandler' => 'getUpdatePaymentMethodSelectedCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\EventSubscriber\\CheckoutEventSubscriber' => 'getCheckoutEventSubscriberService',
            'PrestaShop\\Module\\PrestashopCheckout\\CommandBus\\TacticianCommandBusFactory' => 'getTacticianCommandBusFactoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\Configuration\\BatchConfigurationProcessor' => 'getBatchConfigurationProcessorService',
            'PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration' => 'getPrestaShopConfigurationService',
            'PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfigurationOptionsResolver' => 'getPrestaShopConfigurationOptionsResolverService',
            'PrestaShop\\Module\\PrestashopCheckout\\Context\\ContextStateManager' => 'getContextStateManagerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext' => 'getPrestaShopContextService',
            'PrestaShop\\Module\\PrestashopCheckout\\Environment\\Env' => 'getEnvService',
            'PrestaShop\\Module\\PrestashopCheckout\\Environment\\EnvLoader' => 'getEnvLoaderService',
            'PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter' => 'getSymfonyEventDispatcherAdapterService',
            'PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherFactory' => 'getSymfonyEventDispatcherFactoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\ExpressCheckout\\ExpressCheckoutConfiguration' => 'getExpressCheckoutConfigurationService',
            'PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceCollection' => 'getFundingSourceCollectionService',
            'PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceCollectionBuilder' => 'getFundingSourceCollectionBuilderService',
            'PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceConfiguration' => 'getFundingSourceConfigurationService',
            'PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceConfigurationRepository' => 'getFundingSourceConfigurationRepositoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceEligibilityConstraint' => 'getFundingSourceEligibilityConstraintService',
            'PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourcePresenter' => 'getFundingSourcePresenterService',
            'PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceProvider' => 'getFundingSourceProviderService',
            'PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceTranslationProvider' => 'getFundingSourceTranslationProviderService',
            'PrestaShop\\Module\\PrestashopCheckout\\Http\\CheckoutHttpClient' => 'getCheckoutHttpClientService',
            'PrestaShop\\Module\\PrestashopCheckout\\Http\\HttpClientFactory' => 'getHttpClientFactoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\Http\\MaaslandHttpClient' => 'getMaaslandHttpClientService',
            'PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerConfiguration' => 'getLoggerConfigurationService',
            'PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory' => 'getLoggerDirectoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFactory' => 'getLoggerFactoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFilename' => 'getLoggerFilenameService',
            'PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerHandlerFactory' => 'getLoggerHandlerFactoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\OnBoarding\\Step\\LiveStep' => 'getLiveStepService',
            'PrestaShop\\Module\\PrestashopCheckout\\OnBoarding\\Step\\ValueBanner' => 'getValueBannerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\CommandHandler\\AddOrderPaymentCommandHandler' => 'getAddOrderPaymentCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\CommandHandler\\CreateOrderCommandHandler' => 'getCreateOrderCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\CommandHandler\\UpdateOrderStatusCommandHandler' => 'getUpdateOrderStatusCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\EventSubscriber\\OrderEventSubscriber' => 'getOrderEventSubscriberService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\Matrice\\CommandHandler\\UpdateOrderMatriceCommandHandler' => 'getUpdateOrderMatriceCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForApprovalReversedQueryHandler' => 'getGetOrderForApprovalReversedQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentCompletedQueryHandler' => 'getGetOrderForPaymentCompletedQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentDeniedQueryHandler' => 'getGetOrderForPaymentDeniedQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentPendingQueryHandler' => 'getGetOrderForPaymentPendingQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentRefundedQueryHandler' => 'getGetOrderForPaymentRefundedQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentReversedQueryHandler' => 'getGetOrderForPaymentReversedQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\Service\\CheckOrderAmount' => 'getCheckOrderAmountService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\State\\Service\\OrderStateMapper' => 'getOrderStateMapperService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Customer\\CommandHandler\\SavePayPalCustomerCommandHandler' => 'getSavePayPalCustomerCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\OAuth\\OAuthService' => 'getOAuthServiceService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\OAuth\\Query\\GetPayPalGetUserIdTokenQueryHandler' => 'getGetPayPalGetUserIdTokenQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CheckTransitionPayPalOrderStatusService' => 'getCheckTransitionPayPalOrderStatusServiceService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\CapturePayPalOrderCommandHandler' => 'getCapturePayPalOrderCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\CreatePayPalOrderCommandHandler' => 'getCreatePayPalOrderCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\SavePayPalOrderCommandHandler' => 'getSavePayPalOrderCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\UpdatePayPalOrderCommandHandler' => 'getUpdatePayPalOrderCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\EventSubscriber\\PayPalOrderEventSubscriber' => 'getPayPalOrderEventSubscriberService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\PayPalOrderStatus' => 'getPayPalOrderStatusService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\PayPalOrderSummaryViewBuilder' => 'getPayPalOrderSummaryViewBuilderService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\PayPalOrderTranslationProvider' => 'getPayPalOrderTranslationProviderService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetCurrentPayPalOrderStatusQueryHandler' => 'getGetCurrentPayPalOrderStatusQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderForCartIdQueryHandler' => 'getGetPayPalOrderForCartIdQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderForCheckoutCompletedQueryHandler' => 'getGetPayPalOrderForCheckoutCompletedQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderForOrderConfirmationQueryHandler' => 'getGetPayPalOrderForOrderConfirmationQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderQueryHandler' => 'getGetPayPalOrderQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration' => 'getPayPalConfigurationService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalOrderProvider' => 'getPayPalOrderProviderService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalPayLaterConfiguration' => 'getPayPalPayLaterConfigurationService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\CommandHandler\\DeletePaymentTokenCommandHandler' => 'getDeletePaymentTokenCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\CommandHandler\\SavePaymentTokenCommandHandler' => 'getSavePaymentTokenCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\PaymentMethodTokenService' => 'getPaymentMethodTokenServiceService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\Query\\GetCustomerPaymentTokensQueryHandler' => 'getGetCustomerPaymentTokensQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Capture\\CheckTransitionPayPalCaptureStatusService' => 'getCheckTransitionPayPalCaptureStatusServiceService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Capture\\EventSubscriber\\PayPalCaptureEventSubscriber' => 'getPayPalCaptureEventSubscriberService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\CommandHandler\\RefundPayPalCaptureCommandHandler' => 'getRefundPayPalCaptureCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Sdk\\PayPalSdkConfigurationBuilder' => 'getPayPalSdkConfigurationBuilderService',
            'PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\ConfigurationModule' => 'getConfigurationModuleService',
            'PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\ContextModule' => 'getContextModuleService',
            'PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\PaypalModule' => 'getPaypalModuleService',
            'PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\StorePresenter' => 'getStorePresenterService',
            'PrestaShop\\Module\\PrestashopCheckout\\Provider\\PaymentMethodLogoProvider' => 'getPaymentMethodLogoProviderService',
            'PrestaShop\\Module\\PrestashopCheckout\\Repository\\CountryRepository' => 'getCountryRepositoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCodeRepository' => 'getPayPalCodeRepositoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCustomerRepository' => 'getPayPalCustomerRepositoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalOrderRepository' => 'getPayPalOrderRepositoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository' => 'getPaymentTokenRepositoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsAccountRepository' => 'getPsAccountRepositoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository' => 'getPsCheckoutCartRepositoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\Routing\\Router' => 'getRouterService',
            'PrestaShop\\Module\\PrestashopCheckout\\ShopContext' => 'getShopContextService',
            'PrestaShop\\Module\\PrestashopCheckout\\Shop\\ShopProvider' => 'getShopProviderService',
            'PrestaShop\\Module\\PrestashopCheckout\\Translations\\Translations' => 'getTranslationsService',
            'PrestaShop\\Module\\PrestashopCheckout\\Validator\\BatchConfigurationValidator' => 'getBatchConfigurationValidatorService',
            'PrestaShop\\Module\\PrestashopCheckout\\Validator\\FrontControllerValidator' => 'getFrontControllerValidatorService',
            'PrestaShop\\Module\\PrestashopCheckout\\Validator\\MerchantValidator' => 'getMerchantValidatorService',
            'PrestaShop\\Module\\PrestashopCheckout\\Webhook\\WebhookEventConfigurationUpdatedHandler' => 'getWebhookEventConfigurationUpdatedHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Webhook\\WebhookHandler' => 'getWebhookHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Webhook\\WebhookSecretTokenService' => 'getWebhookSecretTokenServiceService',
            'ps_accounts.facade' => 'getPsAccounts_FacadeService',
            'ps_accounts.installer' => 'getPsAccounts_InstallerService',
            'ps_checkout.bus.command' => 'getPsCheckout_Bus_CommandService',
            'ps_checkout.cache.order' => 'getPsCheckout_Cache_OrderService',
            'ps_checkout.cache.paypal.capture' => 'getPsCheckout_Cache_Paypal_CaptureService',
            'ps_checkout.cache.paypal.order' => 'getPsCheckout_Cache_Paypal_OrderService',
            'ps_checkout.cache.pscheckoutcart' => 'getPsCheckout_Cache_PscheckoutcartService',
            'ps_checkout.db' => 'getPsCheckout_DbService',
            'ps_checkout.http.client' => 'getPsCheckout_Http_ClientService',
            'ps_checkout.logger' => 'getPsCheckout_LoggerService',
            'ps_checkout.logger.handler' => 'getPsCheckout_Logger_HandlerService',
            'ps_checkout.module' => 'getPsCheckout_ModuleService',
            'ps_checkout.module.version' => 'getPsCheckout_Module_VersionService',
            'ps_checkout.repository.paypal.code' => 'getPsCheckout_Repository_Paypal_CodeService',
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
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\EventSubscriber\\PaymentMethodTokenEventSubscriber' => true,
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\EventSubscriber\\PayPalRefundEventSubscriber' => true,
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'ps_checkout.cache.array.paypal.capture' => true,
            'ps_checkout.cache.array.paypal.order' => true,
            'ps_checkout.cache.filesystem.paypal.capture' => true,
            'ps_checkout.cache.filesystem.paypal.order' => true,
            'ps_checkout.event.dispatcher.symfony' => true,
            'ps_checkout.tactician.bus' => true,
        ];
    }

    /**
     * Gets the public 'PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider' shared service.
     *
     * @return \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider
     */
    protected function getCacheDirectoryProviderService()
    {
        return $this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider'] = new \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider('8.1.0', 'C:\\wamp64\\www\\prestashop', false);
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Adapter\LanguageAdapter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Adapter\LanguageAdapter
     */
    protected function getLanguageAdapterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Adapter\\LanguageAdapter'] = new \PrestaShop\Module\PrestashopCheckout\Adapter\LanguageAdapter(($this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext'] ?? $this->getShopContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Builder\Configuration\CheckoutClientConfigurationBuilder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Builder\Configuration\CheckoutClientConfigurationBuilder
     */
    protected function getCheckoutClientConfigurationBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Builder\\Configuration\\CheckoutClientConfigurationBuilder'] = new \PrestaShop\Module\PrestashopCheckout\Builder\Configuration\CheckoutClientConfigurationBuilder(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Environment\\Env'] ?? $this->getEnvService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Routing\\Router'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Routing\\Router'] = new \PrestaShop\Module\PrestashopCheckout\Routing\Router())), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext'] ?? $this->getShopContextService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsAccountRepository'] ?? $this->getPsAccountRepositoryService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerConfiguration'] ?? $this->getLoggerConfigurationService()), ($this->services['ps_checkout.logger'] ?? $this->getPsCheckout_LoggerService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Builder\Configuration\MaaslandHttpClientConfigurationBuilder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Builder\Configuration\MaaslandHttpClientConfigurationBuilder
     */
    protected function getMaaslandHttpClientConfigurationBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Builder\\Configuration\\MaaslandHttpClientConfigurationBuilder'] = new \PrestaShop\Module\PrestashopCheckout\Builder\Configuration\MaaslandHttpClientConfigurationBuilder(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Environment\\Env'] ?? $this->getEnvService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Routing\\Router'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Routing\\Router'] = new \PrestaShop\Module\PrestashopCheckout\Routing\Router())), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext'] ?? $this->getShopContextService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsAccountRepository'] ?? $this->getPsAccountRepositoryService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerConfiguration'] ?? $this->getLoggerConfigurationService()), ($this->services['ps_checkout.logger'] ?? $this->getPsCheckout_LoggerService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Builder\ModuleLink\ModuleLinkBuilder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Builder\ModuleLink\ModuleLinkBuilder
     */
    protected function getModuleLinkBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Builder\\ModuleLink\\ModuleLinkBuilder'] = new \PrestaShop\Module\PrestashopCheckout\Builder\ModuleLink\ModuleLinkBuilder();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Checkout\CheckoutChecker' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Checkout\CheckoutChecker
     */
    protected function getCheckoutCheckerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CheckoutChecker'] = new \PrestaShop\Module\PrestashopCheckout\Checkout\CheckoutChecker(($this->services['ps_checkout.logger'] ?? $this->getPsCheckout_LoggerService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\CancelCheckoutCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\CancelCheckoutCommandHandler
     */
    protected function getCancelCheckoutCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\CancelCheckoutCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\CancelCheckoutCommandHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] ?? $this->getPsCheckoutCartRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\SaveCheckoutCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\SaveCheckoutCommandHandler
     */
    protected function getSaveCheckoutCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\SaveCheckoutCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\SaveCheckoutCommandHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] ?? $this->getPsCheckoutCartRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\SavePayPalOrderStatusCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\SavePayPalOrderStatusCommandHandler
     */
    protected function getSavePayPalOrderStatusCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\SavePayPalOrderStatusCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\SavePayPalOrderStatusCommandHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] ?? $this->getPsCheckoutCartRepositoryService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalOrderRepository'] ?? $this->getPayPalOrderRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\UpdatePaymentMethodSelectedCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\UpdatePaymentMethodSelectedCommandHandler
     */
    protected function getUpdatePaymentMethodSelectedCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\UpdatePaymentMethodSelectedCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\UpdatePaymentMethodSelectedCommandHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] ?? $this->getPsCheckoutCartRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Checkout\EventSubscriber\CheckoutEventSubscriber' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Checkout\EventSubscriber\CheckoutEventSubscriber
     */
    protected function getCheckoutEventSubscriberService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Checkout\\EventSubscriber\\CheckoutEventSubscriber'] = new \PrestaShop\Module\PrestashopCheckout\Checkout\EventSubscriber\CheckoutEventSubscriber(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CheckoutChecker'] ?? $this->getCheckoutCheckerService()), ($this->services['ps_checkout.bus.command'] ?? $this->getPsCheckout_Bus_CommandService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] ?? $this->getPsCheckoutCartRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\CommandBus\TacticianCommandBusFactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\CommandBus\TacticianCommandBusFactory
     */
    protected function getTacticianCommandBusFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\CommandBus\\TacticianCommandBusFactory'] = new \PrestaShop\Module\PrestashopCheckout\CommandBus\TacticianCommandBusFactory(($this->services['ps_checkout.module'] ?? $this->getPsCheckout_ModuleService()), ($this->services['ps_checkout.logger'] ?? $this->getPsCheckout_LoggerService()), ['PrestaShop\\Module\\PrestashopCheckout\\Order\\Command\\AddOrderPaymentCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\CommandHandler\\AddOrderPaymentCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Command\\CreateOrderCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\CommandHandler\\CreateOrderCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Command\\UpdateOrderStatusCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\CommandHandler\\UpdateOrderStatusCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Matrice\\Command\\UpdateOrderMatriceCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Matrice\\CommandHandler\\UpdateOrderMatriceCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Command\\CreatePayPalOrderCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\CreatePayPalOrderCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Command\\UpdatePayPalOrderCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\UpdatePayPalOrderCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Command\\CapturePayPalOrderCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\CapturePayPalOrderCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\Command\\CancelCheckoutCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\CancelCheckoutCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\Command\\SaveCheckoutCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\SaveCheckoutCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\Command\\SavePayPalOrderStatusCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\SavePayPalOrderStatusCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\Command\\UpdatePaymentMethodSelectedCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\UpdatePaymentMethodSelectedCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\Command\\RefundPayPalCaptureCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\CommandHandler\\RefundPayPalCaptureCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForPaymentCompletedQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentCompletedQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForPaymentDeniedQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentDeniedQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForPaymentPendingQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentPendingQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForPaymentRefundedQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentRefundedQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForPaymentReversedQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentReversedQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForApprovalReversedQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForApprovalReversedQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Query\\GetPayPalOrderForCartIdQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderForCartIdQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Query\\GetCurrentPayPalOrderStatusQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetCurrentPayPalOrderStatusQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Query\\GetPayPalOrderQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Query\\GetPayPalOrderForCheckoutCompletedQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderForCheckoutCompletedQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Query\\GetPayPalOrderForOrderConfirmationQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderForOrderConfirmationQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\Command\\SavePaymentTokenCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\CommandHandler\\SavePaymentTokenCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\Command\\DeletePaymentTokenCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\CommandHandler\\DeletePaymentTokenCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\Query\\GetCustomerPaymentTokensQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\Query\\GetCustomerPaymentTokensQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Customer\\Command\\SavePayPalCustomerCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Customer\\CommandHandler\\SavePayPalCustomerCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\OAuth\\Query\\GetPayPalGetUserIdTokenQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\OAuth\\Query\\GetPayPalGetUserIdTokenQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Command\\SavePayPalOrderCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\SavePayPalOrderCommandHandler']);
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Configuration\BatchConfigurationProcessor' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Configuration\BatchConfigurationProcessor
     */
    protected function getBatchConfigurationProcessorService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\BatchConfigurationProcessor'] = new \PrestaShop\Module\PrestashopCheckout\Configuration\BatchConfigurationProcessor(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] ?? $this->getPrestaShopConfigurationService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfiguration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfiguration
     */
    protected function getPrestaShopConfigurationService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] = new \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfiguration(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfigurationOptionsResolver'] ?? $this->getPrestaShopConfigurationOptionsResolverService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfigurationOptionsResolver' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfigurationOptionsResolver
     */
    protected function getPrestaShopConfigurationOptionsResolverService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfigurationOptionsResolver'] = new \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfigurationOptionsResolver(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Shop\\ShopProvider'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Shop\\ShopProvider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider()))->getIdentifier());
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Context\ContextStateManager' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Context\ContextStateManager
     */
    protected function getContextStateManagerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\ContextStateManager'] = new \PrestaShop\Module\PrestashopCheckout\Context\ContextStateManager();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext
     */
    protected function getPrestaShopContextService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Environment\Env' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Environment\Env
     */
    protected function getEnvService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Environment\\Env'] = new \PrestaShop\Module\PrestashopCheckout\Environment\Env(($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] ?? $this->getPayPalConfigurationService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Environment\EnvLoader' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Environment\EnvLoader
     */
    protected function getEnvLoaderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Environment\\EnvLoader'] = new \PrestaShop\Module\PrestashopCheckout\Environment\EnvLoader();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Event\SymfonyEventDispatcherAdapter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Event\SymfonyEventDispatcherAdapter
     */
    protected function getSymfonyEventDispatcherAdapterService()
    {
        $a = ($this->services['ps_checkout.module'] ?? $this->getPsCheckout_ModuleService());

        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter'] = new \PrestaShop\Module\PrestashopCheckout\Event\SymfonyEventDispatcherAdapter(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherFactory'] ?? $this->getSymfonyEventDispatcherFactoryService())->create([0 => ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Checkout\\EventSubscriber\\CheckoutEventSubscriber'] ?? $this->getCheckoutEventSubscriberService()), 1 => ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\EventSubscriber\\OrderEventSubscriber'] ?? $this->getOrderEventSubscriberService()), 2 => ($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\EventSubscriber\\PayPalOrderEventSubscriber'] ?? $this->getPayPalOrderEventSubscriberService()), 3 => ($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Capture\\EventSubscriber\\PayPalCaptureEventSubscriber'] ?? $this->getPayPalCaptureEventSubscriberService()), 4 => new \PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Refund\EventSubscriber\PayPalRefundEventSubscriber($a, ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\Service\\CheckOrderAmount'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\Service\\CheckOrderAmount'] = new \PrestaShop\Module\PrestashopCheckout\Order\Service\CheckOrderAmount())), ($this->services['ps_checkout.cache.paypal.capture'] ?? $this->getPsCheckout_Cache_Paypal_CaptureService()), ($this->services['ps_checkout.cache.paypal.order'] ?? $this->getPsCheckout_Cache_Paypal_OrderService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\State\\Service\\OrderStateMapper'] ?? $this->getOrderStateMapperService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalOrderProvider'] ?? $this->getPayPalOrderProviderService())), 5 => new \PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\EventSubscriber\PaymentMethodTokenEventSubscriber($a, ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalOrderRepository'] ?? $this->getPayPalOrderRepositoryService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository'] ?? $this->getPaymentTokenRepositoryService()))]));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Event\SymfonyEventDispatcherFactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Event\SymfonyEventDispatcherFactory
     */
    protected function getSymfonyEventDispatcherFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherFactory'] = new \PrestaShop\Module\PrestashopCheckout\Event\SymfonyEventDispatcherFactory(($this->services['ps_checkout.logger'] ?? $this->getPsCheckout_LoggerService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerConfiguration'] ?? $this->getLoggerConfigurationService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\ExpressCheckout\ExpressCheckoutConfiguration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\ExpressCheckout\ExpressCheckoutConfiguration
     */
    protected function getExpressCheckoutConfigurationService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\ExpressCheckout\\ExpressCheckoutConfiguration'] = new \PrestaShop\Module\PrestashopCheckout\ExpressCheckout\ExpressCheckoutConfiguration(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] ?? $this->getPrestaShopConfigurationService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollection' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollection
     */
    protected function getFundingSourceCollectionService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceCollection'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollection(($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceCollectionBuilder'] ?? $this->getFundingSourceCollectionBuilderService())->create());
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollectionBuilder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollectionBuilder
     */
    protected function getFundingSourceCollectionBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceCollectionBuilder'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollectionBuilder(($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceConfiguration'] ?? $this->getFundingSourceConfigurationService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceEligibilityConstraint'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceEligibilityConstraint'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEligibilityConstraint())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfiguration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfiguration
     */
    protected function getFundingSourceConfigurationService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceConfiguration'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfiguration(($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceConfigurationRepository'] ?? $this->getFundingSourceConfigurationRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfigurationRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfigurationRepository
     */
    protected function getFundingSourceConfigurationRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceConfigurationRepository'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfigurationRepository(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEligibilityConstraint' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEligibilityConstraint
     */
    protected function getFundingSourceEligibilityConstraintService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceEligibilityConstraint'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEligibilityConstraint();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourcePresenter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourcePresenter
     */
    protected function getFundingSourcePresenterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourcePresenter'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourcePresenter(($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceTranslationProvider'] ?? $this->getFundingSourceTranslationProviderService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\CountryRepository'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\CountryRepository'] = new \PrestaShop\Module\PrestashopCheckout\Repository\CountryRepository())), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Provider\\PaymentMethodLogoProvider'] ?? $this->getPaymentMethodLogoProviderService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceProvider
     */
    protected function getFundingSourceProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceProvider'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceProvider(($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceCollectionBuilder'] ?? $this->getFundingSourceCollectionBuilderService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourcePresenter'] ?? $this->getFundingSourcePresenterService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository'] ?? $this->getPaymentTokenRepositoryService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] ?? $this->getPayPalConfigurationService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceTranslationProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceTranslationProvider
     */
    protected function getFundingSourceTranslationProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceTranslationProvider'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceTranslationProvider(($this->services['ps_checkout.module'] ?? $this->getPsCheckout_ModuleService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Http\CheckoutHttpClient' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Http\CheckoutHttpClient
     */
    protected function getCheckoutHttpClientService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\CheckoutHttpClient'] = new \PrestaShop\Module\PrestashopCheckout\Http\CheckoutHttpClient(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Builder\\Configuration\\CheckoutClientConfigurationBuilder'] ?? $this->getCheckoutClientConfigurationBuilderService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Http\HttpClientFactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Http\HttpClientFactory
     */
    protected function getHttpClientFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\HttpClientFactory'] = new \PrestaShop\Module\PrestashopCheckout\Http\HttpClientFactory();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Http\MaaslandHttpClient' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Http\MaaslandHttpClient
     */
    protected function getMaaslandHttpClientService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\MaaslandHttpClient'] = new \PrestaShop\Module\PrestashopCheckout\Http\MaaslandHttpClient(($this->services['ps_checkout.http.client'] ?? $this->getPsCheckout_Http_ClientService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Logger\LoggerConfiguration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerConfiguration
     */
    protected function getLoggerConfigurationService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerConfiguration'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerConfiguration(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] ?? $this->getPrestaShopConfigurationService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory
     */
    protected function getLoggerDirectoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('8.1.0', 'C:\\wamp64\\www\\prestashop');
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Logger\LoggerFactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFactory
     */
    protected function getLoggerFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFactory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFactory(($this->services['ps_checkout.module'] ?? $this->getPsCheckout_ModuleService())->name, ($this->services['ps_checkout.logger.handler'] ?? $this->getPsCheckout_Logger_HandlerService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Logger\LoggerFilename' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFilename
     */
    protected function getLoggerFilenameService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFilename'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFilename(($this->services['ps_checkout.module'] ?? $this->getPsCheckout_ModuleService())->name, ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Shop\\ShopProvider'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Shop\\ShopProvider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider()))->getIdentifier());
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Logger\LoggerHandlerFactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerHandlerFactory
     */
    protected function getLoggerHandlerFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerHandlerFactory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerHandlerFactory(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('8.1.0', 'C:\\wamp64\\www\\prestashop')))->getPath(), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFilename'] ?? $this->getLoggerFilenameService())->get(), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerConfiguration'] ?? $this->getLoggerConfigurationService())->getMaxFiles(), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerConfiguration'] ?? $this->getLoggerConfigurationService())->getLevel());
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\LiveStep' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\LiveStep
     */
    protected function getLiveStepService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\OnBoarding\\Step\\LiveStep'] = new \PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\LiveStep(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] ?? $this->getPrestaShopConfigurationService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\ValueBanner' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\ValueBanner
     */
    protected function getValueBannerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\OnBoarding\\Step\\ValueBanner'] = new \PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\ValueBanner(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] ?? $this->getPrestaShopConfigurationService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\CommandHandler\AddOrderPaymentCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\CommandHandler\AddOrderPaymentCommandHandler
     */
    protected function getAddOrderPaymentCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\CommandHandler\\AddOrderPaymentCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\Order\CommandHandler\AddOrderPaymentCommandHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter'] ?? $this->getSymfonyEventDispatcherAdapterService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceTranslationProvider'] ?? $this->getFundingSourceTranslationProviderService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] ?? $this->getPayPalConfigurationService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\CommandHandler\CreateOrderCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\CommandHandler\CreateOrderCommandHandler
     */
    protected function getCreateOrderCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\CommandHandler\\CreateOrderCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\Order\CommandHandler\CreateOrderCommandHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\ContextStateManager'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\ContextStateManager'] = new \PrestaShop\Module\PrestashopCheckout\Context\ContextStateManager())), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter'] ?? $this->getSymfonyEventDispatcherAdapterService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] ?? $this->getPsCheckoutCartRepositoryService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\State\\Service\\OrderStateMapper'] ?? $this->getOrderStateMapperService()), ($this->services['ps_checkout.module'] ?? $this->getPsCheckout_ModuleService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\Service\\CheckOrderAmount'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\Service\\CheckOrderAmount'] = new \PrestaShop\Module\PrestashopCheckout\Order\Service\CheckOrderAmount())), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceTranslationProvider'] ?? $this->getFundingSourceTranslationProviderService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\CommandHandler\UpdateOrderStatusCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\CommandHandler\UpdateOrderStatusCommandHandler
     */
    protected function getUpdateOrderStatusCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\CommandHandler\\UpdateOrderStatusCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\Order\CommandHandler\UpdateOrderStatusCommandHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter'] ?? $this->getSymfonyEventDispatcherAdapterService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\EventSubscriber\OrderEventSubscriber' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\EventSubscriber\OrderEventSubscriber
     */
    protected function getOrderEventSubscriberService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\EventSubscriber\\OrderEventSubscriber'] = new \PrestaShop\Module\PrestashopCheckout\Order\EventSubscriber\OrderEventSubscriber(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] ?? $this->getPsCheckoutCartRepositoryService()), ($this->services['ps_checkout.module'] ?? $this->getPsCheckout_ModuleService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\Matrice\CommandHandler\UpdateOrderMatriceCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\Matrice\CommandHandler\UpdateOrderMatriceCommandHandler
     */
    protected function getUpdateOrderMatriceCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\Matrice\\CommandHandler\\UpdateOrderMatriceCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\Order\Matrice\CommandHandler\UpdateOrderMatriceCommandHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter'] ?? $this->getSymfonyEventDispatcherAdapterService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForApprovalReversedQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForApprovalReversedQueryHandler
     */
    protected function getGetOrderForApprovalReversedQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForApprovalReversedQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForApprovalReversedQueryHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] ?? $this->getPsCheckoutCartRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentCompletedQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentCompletedQueryHandler
     */
    protected function getGetOrderForPaymentCompletedQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentCompletedQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentCompletedQueryHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] ?? $this->getPsCheckoutCartRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentDeniedQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentDeniedQueryHandler
     */
    protected function getGetOrderForPaymentDeniedQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentDeniedQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentDeniedQueryHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] ?? $this->getPsCheckoutCartRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentPendingQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentPendingQueryHandler
     */
    protected function getGetOrderForPaymentPendingQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentPendingQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentPendingQueryHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] ?? $this->getPsCheckoutCartRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentRefundedQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentRefundedQueryHandler
     */
    protected function getGetOrderForPaymentRefundedQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentRefundedQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentRefundedQueryHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] ?? $this->getPsCheckoutCartRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentReversedQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentReversedQueryHandler
     */
    protected function getGetOrderForPaymentReversedQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentReversedQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentReversedQueryHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] ?? $this->getPsCheckoutCartRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\Service\CheckOrderAmount' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\Service\CheckOrderAmount
     */
    protected function getCheckOrderAmountService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\Service\\CheckOrderAmount'] = new \PrestaShop\Module\PrestashopCheckout\Order\Service\CheckOrderAmount();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\State\Service\OrderStateMapper' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\State\Service\OrderStateMapper
     */
    protected function getOrderStateMapperService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\State\\Service\\OrderStateMapper'] = new \PrestaShop\Module\PrestashopCheckout\Order\State\Service\OrderStateMapper(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] ?? $this->getPrestaShopConfigurationService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Customer\CommandHandler\SavePayPalCustomerCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Customer\CommandHandler\SavePayPalCustomerCommandHandler
     */
    protected function getSavePayPalCustomerCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Customer\\CommandHandler\\SavePayPalCustomerCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Customer\CommandHandler\SavePayPalCustomerCommandHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCustomerRepository'] ?? $this->getPayPalCustomerRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\OAuth\OAuthService' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\OAuth\OAuthService
     */
    protected function getOAuthServiceService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\OAuth\\OAuthService'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\OAuth\OAuthService(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\CheckoutHttpClient'] ?? $this->getCheckoutHttpClientService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\OAuth\Query\GetPayPalGetUserIdTokenQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\OAuth\Query\GetPayPalGetUserIdTokenQueryHandler
     */
    protected function getGetPayPalGetUserIdTokenQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\OAuth\\Query\\GetPayPalGetUserIdTokenQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\OAuth\Query\GetPayPalGetUserIdTokenQueryHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\OAuth\\OAuthService'] ?? $this->getOAuthServiceService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCustomerRepository'] ?? $this->getPayPalCustomerRepositoryService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] ?? $this->getPayPalConfigurationService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\CheckTransitionPayPalOrderStatusService' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CheckTransitionPayPalOrderStatusService
     */
    protected function getCheckTransitionPayPalOrderStatusServiceService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CheckTransitionPayPalOrderStatusService'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CheckTransitionPayPalOrderStatusService();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\CapturePayPalOrderCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\CapturePayPalOrderCommandHandler
     */
    protected function getCapturePayPalOrderCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\CapturePayPalOrderCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\CapturePayPalOrderCommandHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\MaaslandHttpClient'] ?? $this->getMaaslandHttpClientService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter'] ?? $this->getSymfonyEventDispatcherAdapterService()), ($this->services['ps_checkout.cache.paypal.order'] ?? $this->getPsCheckout_Cache_Paypal_OrderService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCustomerRepository'] ?? $this->getPayPalCustomerRepositoryService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalOrderRepository'] ?? $this->getPayPalOrderRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\CreatePayPalOrderCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\CreatePayPalOrderCommandHandler
     */
    protected function getCreatePayPalOrderCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\CreatePayPalOrderCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\CreatePayPalOrderCommandHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\MaaslandHttpClient'] ?? $this->getMaaslandHttpClientService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext'] ?? $this->getShopContextService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter'] ?? $this->getSymfonyEventDispatcherAdapterService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCustomerRepository'] ?? $this->getPayPalCustomerRepositoryService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository'] ?? $this->getPaymentTokenRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\SavePayPalOrderCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\SavePayPalOrderCommandHandler
     */
    protected function getSavePayPalOrderCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\SavePayPalOrderCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\SavePayPalOrderCommandHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalOrderRepository'] ?? $this->getPayPalOrderRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\UpdatePayPalOrderCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\UpdatePayPalOrderCommandHandler
     */
    protected function getUpdatePayPalOrderCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\UpdatePayPalOrderCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\UpdatePayPalOrderCommandHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\MaaslandHttpClient'] ?? $this->getMaaslandHttpClientService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter'] ?? $this->getSymfonyEventDispatcherAdapterService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext'] ?? $this->getShopContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\EventSubscriber\PayPalOrderEventSubscriber' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\EventSubscriber\PayPalOrderEventSubscriber
     */
    protected function getPayPalOrderEventSubscriberService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\EventSubscriber\\PayPalOrderEventSubscriber'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\EventSubscriber\PayPalOrderEventSubscriber(($this->services['ps_checkout.module'] ?? $this->getPsCheckout_ModuleService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] ?? $this->getPsCheckoutCartRepositoryService()), ($this->services['ps_checkout.cache.paypal.order'] ?? $this->getPsCheckout_Cache_Paypal_OrderService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CheckoutChecker'] ?? $this->getCheckoutCheckerService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CheckTransitionPayPalOrderStatusService'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CheckTransitionPayPalOrderStatusService'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CheckTransitionPayPalOrderStatusService())), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\State\\Service\\OrderStateMapper'] ?? $this->getOrderStateMapperService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] ?? $this->getPayPalConfigurationService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalOrderRepository'] ?? $this->getPayPalOrderRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderStatus' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderStatus
     */
    protected function getPayPalOrderStatusService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\PayPalOrderStatus'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderStatus();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderSummaryViewBuilder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderSummaryViewBuilder
     */
    protected function getPayPalOrderSummaryViewBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\PayPalOrderSummaryViewBuilder'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderSummaryViewBuilder(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] ?? $this->getPsCheckoutCartRepositoryService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalOrderProvider'] ?? $this->getPayPalOrderProviderService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Routing\\Router'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Routing\\Router'] = new \PrestaShop\Module\PrestashopCheckout\Routing\Router())), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\PayPalOrderTranslationProvider'] ?? $this->getPayPalOrderTranslationProviderService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext'] ?? $this->getShopContextService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalOrderRepository'] ?? $this->getPayPalOrderRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderTranslationProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderTranslationProvider
     */
    protected function getPayPalOrderTranslationProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\PayPalOrderTranslationProvider'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderTranslationProvider(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Translations\\Translations'] ?? $this->getTranslationsService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceTranslationProvider'] ?? $this->getFundingSourceTranslationProviderService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetCurrentPayPalOrderStatusQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetCurrentPayPalOrderStatusQueryHandler
     */
    protected function getGetCurrentPayPalOrderStatusQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetCurrentPayPalOrderStatusQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetCurrentPayPalOrderStatusQueryHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] ?? $this->getPsCheckoutCartRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderForCartIdQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderForCartIdQueryHandler
     */
    protected function getGetPayPalOrderForCartIdQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderForCartIdQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderForCartIdQueryHandler(($this->services['ps_checkout.cache.paypal.order'] ?? $this->getPsCheckout_Cache_Paypal_OrderService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] ?? $this->getPsCheckoutCartRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderForCheckoutCompletedQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderForCheckoutCompletedQueryHandler
     */
    protected function getGetPayPalOrderForCheckoutCompletedQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderForCheckoutCompletedQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderForCheckoutCompletedQueryHandler(($this->services['ps_checkout.cache.paypal.order'] ?? $this->getPsCheckout_Cache_Paypal_OrderService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderForOrderConfirmationQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderForOrderConfirmationQueryHandler
     */
    protected function getGetPayPalOrderForOrderConfirmationQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderForOrderConfirmationQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderForOrderConfirmationQueryHandler(($this->services['ps_checkout.cache.paypal.order'] ?? $this->getPsCheckout_Cache_Paypal_OrderService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderQueryHandler
     */
    protected function getGetPayPalOrderQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderQueryHandler(($this->services['ps_checkout.cache.paypal.order'] ?? $this->getPsCheckout_Cache_Paypal_OrderService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] ?? $this->getPsCheckoutCartRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\PayPalConfiguration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalConfiguration
     */
    protected function getPayPalConfigurationService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalConfiguration(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] ?? $this->getPrestaShopConfigurationService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCodeRepository'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCodeRepository'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCodeRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\PayPalOrderProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalOrderProvider
     */
    protected function getPayPalOrderProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalOrderProvider'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalOrderProvider(($this->services['ps_checkout.cache.paypal.order'] ?? $this->getPsCheckout_Cache_Paypal_OrderService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\PayPalPayLaterConfiguration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalPayLaterConfiguration
     */
    protected function getPayPalPayLaterConfigurationService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalPayLaterConfiguration'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalPayLaterConfiguration(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] ?? $this->getPrestaShopConfigurationService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\CommandHandler\DeletePaymentTokenCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\CommandHandler\DeletePaymentTokenCommandHandler
     */
    protected function getDeletePaymentTokenCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\CommandHandler\\DeletePaymentTokenCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\CommandHandler\DeletePaymentTokenCommandHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\PaymentMethodTokenService'] ?? $this->getPaymentMethodTokenServiceService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository'] ?? $this->getPaymentTokenRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\CommandHandler\SavePaymentTokenCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\CommandHandler\SavePaymentTokenCommandHandler
     */
    protected function getSavePaymentTokenCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\CommandHandler\\SavePaymentTokenCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\CommandHandler\SavePaymentTokenCommandHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository'] ?? $this->getPaymentTokenRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\PaymentMethodTokenService' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\PaymentMethodTokenService
     */
    protected function getPaymentMethodTokenServiceService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\PaymentMethodTokenService'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\PaymentMethodTokenService(NULL, ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\CheckoutHttpClient'] ?? $this->getCheckoutHttpClientService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] ?? $this->getPayPalConfigurationService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\Query\GetCustomerPaymentTokensQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\Query\GetCustomerPaymentTokensQueryHandler
     */
    protected function getGetCustomerPaymentTokensQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\Query\\GetCustomerPaymentTokensQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\Query\GetCustomerPaymentTokensQueryHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository'] ?? $this->getPaymentTokenRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Capture\CheckTransitionPayPalCaptureStatusService' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Capture\CheckTransitionPayPalCaptureStatusService
     */
    protected function getCheckTransitionPayPalCaptureStatusServiceService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Capture\\CheckTransitionPayPalCaptureStatusService'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Capture\CheckTransitionPayPalCaptureStatusService();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Capture\EventSubscriber\PayPalCaptureEventSubscriber' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Capture\EventSubscriber\PayPalCaptureEventSubscriber
     */
    protected function getPayPalCaptureEventSubscriberService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Capture\\EventSubscriber\\PayPalCaptureEventSubscriber'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Capture\EventSubscriber\PayPalCaptureEventSubscriber(($this->services['ps_checkout.module'] ?? $this->getPsCheckout_ModuleService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\Service\\CheckOrderAmount'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\Service\\CheckOrderAmount'] = new \PrestaShop\Module\PrestashopCheckout\Order\Service\CheckOrderAmount())), ($this->services['ps_checkout.cache.paypal.capture'] ?? $this->getPsCheckout_Cache_Paypal_CaptureService()), ($this->services['ps_checkout.cache.paypal.order'] ?? $this->getPsCheckout_Cache_Paypal_OrderService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\State\\Service\\OrderStateMapper'] ?? $this->getOrderStateMapperService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Refund\CommandHandler\RefundPayPalCaptureCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Refund\CommandHandler\RefundPayPalCaptureCommandHandler
     */
    protected function getRefundPayPalCaptureCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\CommandHandler\\RefundPayPalCaptureCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Refund\CommandHandler\RefundPayPalCaptureCommandHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\MaaslandHttpClient'] ?? $this->getMaaslandHttpClientService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] ?? $this->getPayPalConfigurationService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] ?? $this->getPrestaShopConfigurationService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter'] ?? $this->getSymfonyEventDispatcherAdapterService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Sdk\PayPalSdkConfigurationBuilder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Sdk\PayPalSdkConfigurationBuilder
     */
    protected function getPayPalSdkConfigurationBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Sdk\\PayPalSdkConfigurationBuilder'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Sdk\PayPalSdkConfigurationBuilder(($this->services['ps_checkout.module'] ?? $this->getPsCheckout_ModuleService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Environment\\Env'] ?? $this->getEnvService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] ?? $this->getPayPalConfigurationService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalPayLaterConfiguration'] ?? $this->getPayPalPayLaterConfigurationService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceConfigurationRepository'] ?? $this->getFundingSourceConfigurationRepositoryService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\ExpressCheckout\\ExpressCheckoutConfiguration'] ?? $this->getExpressCheckoutConfigurationService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext'] ?? $this->getShopContextService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())), ($this->services['ps_checkout.logger'] ?? $this->getPsCheckout_LoggerService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ConfigurationModule' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ConfigurationModule
     */
    protected function getConfigurationModuleService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\ConfigurationModule'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ConfigurationModule(($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalPayLaterConfiguration'] ?? $this->getPayPalPayLaterConfigurationService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\ExpressCheckout\\ExpressCheckoutConfiguration'] ?? $this->getExpressCheckoutConfigurationService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] ?? $this->getPayPalConfigurationService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceProvider'] ?? $this->getFundingSourceProviderService()), ($this->services['ps_checkout.module'] ?? $this->getPsCheckout_ModuleService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ContextModule' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ContextModule
     */
    protected function getContextModuleService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\ContextModule'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ContextModule(($this->services['ps_checkout.module'] ?? $this->getPsCheckout_ModuleService())->name, ($this->services['ps_checkout.module'] ?? $this->getPsCheckout_ModuleService())->module_key, ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] ?? $this->getPayPalConfigurationService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\OnBoarding\\Step\\LiveStep'] ?? $this->getLiveStepService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\OnBoarding\\Step\\ValueBanner'] ?? $this->getValueBannerService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Translations\\Translations'] ?? $this->getTranslationsService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext'] ?? $this->getShopContextService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Shop\\ShopProvider'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Shop\\ShopProvider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider())), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Builder\\ModuleLink\\ModuleLinkBuilder'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Builder\\ModuleLink\\ModuleLinkBuilder'] = new \PrestaShop\Module\PrestashopCheckout\Builder\ModuleLink\ModuleLinkBuilder())), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsAccountRepository'] ?? $this->getPsAccountRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PaypalModule' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PaypalModule
     */
    protected function getPaypalModuleService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\PaypalModule'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PaypalModule(($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] ?? $this->getPayPalConfigurationService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Presenter\Store\StorePresenter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\StorePresenter
     */
    protected function getStorePresenterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\StorePresenter'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\StorePresenter([0 => ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\ContextModule'] ?? $this->getContextModuleService()), 1 => ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\PaypalModule'] ?? $this->getPaypalModuleService()), 2 => ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\ConfigurationModule'] ?? $this->getConfigurationModuleService())]);
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Provider\PaymentMethodLogoProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Provider\PaymentMethodLogoProvider
     */
    protected function getPaymentMethodLogoProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Provider\\PaymentMethodLogoProvider'] = new \PrestaShop\Module\PrestashopCheckout\Provider\PaymentMethodLogoProvider(($this->services['ps_checkout.module'] ?? $this->getPsCheckout_ModuleService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Repository\CountryRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\CountryRepository
     */
    protected function getCountryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\CountryRepository'] = new \PrestaShop\Module\PrestashopCheckout\Repository\CountryRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Repository\PayPalCodeRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCodeRepository
     */
    protected function getPayPalCodeRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCodeRepository'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCodeRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Repository\PayPalCustomerRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCustomerRepository
     */
    protected function getPayPalCustomerRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCustomerRepository'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCustomerRepository(($this->services['ps_checkout.db'] ?? $this->getPsCheckout_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Repository\PayPalOrderRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PayPalOrderRepository
     */
    protected function getPayPalOrderRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalOrderRepository'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PayPalOrderRepository(($this->services['ps_checkout.db'] ?? $this->getPsCheckout_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Repository\PaymentTokenRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PaymentTokenRepository
     */
    protected function getPaymentTokenRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PaymentTokenRepository(($this->services['ps_checkout.db'] ?? $this->getPsCheckout_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Repository\PsAccountRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PsAccountRepository
     */
    protected function getPsAccountRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsAccountRepository'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PsAccountRepository(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] ?? $this->getPrestaShopConfigurationService()), ($this->services['ps_accounts.facade'] ?? $this->getPsAccounts_FacadeService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Repository\PsCheckoutCartRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PsCheckoutCartRepository
     */
    protected function getPsCheckoutCartRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PsCheckoutCartRepository(($this->services['ps_checkout.cache.pscheckoutcart'] ?? ($this->services['ps_checkout.cache.pscheckoutcart'] = new \Symfony\Component\Cache\Simple\ArrayCache())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Routing\Router' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Routing\Router
     */
    protected function getRouterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Routing\\Router'] = new \PrestaShop\Module\PrestashopCheckout\Routing\Router();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\ShopContext' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\ShopContext
     */
    protected function getShopContextService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext'] = new \PrestaShop\Module\PrestashopCheckout\ShopContext(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Environment\\Env'] ?? $this->getEnvService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider
     */
    protected function getShopProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Shop\\ShopProvider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Translations\Translations' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Translations\Translations
     */
    protected function getTranslationsService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Translations\\Translations'] = new \PrestaShop\Module\PrestashopCheckout\Translations\Translations(($this->services['ps_checkout.module'] ?? $this->getPsCheckout_ModuleService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Validator\BatchConfigurationValidator' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Validator\BatchConfigurationValidator
     */
    protected function getBatchConfigurationValidatorService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Validator\\BatchConfigurationValidator'] = new \PrestaShop\Module\PrestashopCheckout\Validator\BatchConfigurationValidator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Validator\FrontControllerValidator' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Validator\FrontControllerValidator
     */
    protected function getFrontControllerValidatorService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Validator\\FrontControllerValidator'] = new \PrestaShop\Module\PrestashopCheckout\Validator\FrontControllerValidator(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Validator\\MerchantValidator'] ?? $this->getMerchantValidatorService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\ExpressCheckout\\ExpressCheckoutConfiguration'] ?? $this->getExpressCheckoutConfigurationService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalPayLaterConfiguration'] ?? $this->getPayPalPayLaterConfigurationService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Validator\MerchantValidator' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Validator\MerchantValidator
     */
    protected function getMerchantValidatorService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Validator\\MerchantValidator'] = new \PrestaShop\Module\PrestashopCheckout\Validator\MerchantValidator(($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] ?? $this->getPayPalConfigurationService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsAccountRepository'] ?? $this->getPsAccountRepositoryService()), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Webhook\WebhookEventConfigurationUpdatedHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Webhook\WebhookEventConfigurationUpdatedHandler
     */
    protected function getWebhookEventConfigurationUpdatedHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Webhook\\WebhookEventConfigurationUpdatedHandler'] = new \PrestaShop\Module\PrestashopCheckout\Webhook\WebhookEventConfigurationUpdatedHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] ?? $this->getPrestaShopConfigurationService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Webhook\WebhookHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Webhook\WebhookHandler
     */
    protected function getWebhookHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Webhook\\WebhookHandler'] = new \PrestaShop\Module\PrestashopCheckout\Webhook\WebhookHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Webhook\\WebhookSecretTokenService'] ?? $this->getWebhookSecretTokenServiceService()), [0 => ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Webhook\\WebhookEventConfigurationUpdatedHandler'] ?? $this->getWebhookEventConfigurationUpdatedHandlerService())]);
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Webhook\WebhookSecretTokenService' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Webhook\WebhookSecretTokenService
     */
    protected function getWebhookSecretTokenServiceService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Webhook\\WebhookSecretTokenService'] = new \PrestaShop\Module\PrestashopCheckout\Webhook\WebhookSecretTokenService(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] ?? $this->getPrestaShopConfigurationService()));
    }

    /**
     * Gets the public 'ps_accounts.facade' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts
     */
    protected function getPsAccounts_FacadeService()
    {
        return $this->services['ps_accounts.facade'] = new \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts(($this->services['ps_accounts.installer'] ?? ($this->services['ps_accounts.installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('4.0.0'))));
    }

    /**
     * Gets the public 'ps_accounts.installer' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Installer
     */
    protected function getPsAccounts_InstallerService()
    {
        return $this->services['ps_accounts.installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('4.0.0');
    }

    /**
     * Gets the public 'ps_checkout.bus.command' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\CommandBus\TacticianCommandBusAdapter
     */
    protected function getPsCheckout_Bus_CommandService()
    {
        return $this->services['ps_checkout.bus.command'] = new \PrestaShop\Module\PrestashopCheckout\CommandBus\TacticianCommandBusAdapter(($this->services['PrestaShop\\Module\\PrestashopCheckout\\CommandBus\\TacticianCommandBusFactory'] ?? $this->getTacticianCommandBusFactoryService())->create());
    }

    /**
     * Gets the public 'ps_checkout.cache.order' shared service.
     *
     * @return \Symfony\Component\Cache\Simple\ArrayCache
     */
    protected function getPsCheckout_Cache_OrderService()
    {
        return $this->services['ps_checkout.cache.order'] = new \Symfony\Component\Cache\Simple\ArrayCache();
    }

    /**
     * Gets the public 'ps_checkout.cache.paypal.capture' shared service.
     *
     * @return \Symfony\Component\Cache\Simple\ChainCache
     */
    protected function getPsCheckout_Cache_Paypal_CaptureService()
    {
        return $this->services['ps_checkout.cache.paypal.capture'] = new \Symfony\Component\Cache\Simple\ChainCache([0 => new \Symfony\Component\Cache\Simple\ArrayCache(), 1 => new \Symfony\Component\Cache\Simple\FilesystemCache('paypal-capture', 3600, ($this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider'] ?? ($this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider'] = new \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider('8.1.0', 'C:\\wamp64\\www\\prestashop', false)))->getPath())]);
    }

    /**
     * Gets the public 'ps_checkout.cache.paypal.order' shared service.
     *
     * @return \Symfony\Component\Cache\Simple\ChainCache
     */
    protected function getPsCheckout_Cache_Paypal_OrderService()
    {
        return $this->services['ps_checkout.cache.paypal.order'] = new \Symfony\Component\Cache\Simple\ChainCache([0 => new \Symfony\Component\Cache\Simple\ArrayCache(), 1 => new \Symfony\Component\Cache\Simple\FilesystemCache('paypal-orders', 3600, ($this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider'] ?? ($this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider'] = new \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider('8.1.0', 'C:\\wamp64\\www\\prestashop', false)))->getPath())]);
    }

    /**
     * Gets the public 'ps_checkout.cache.pscheckoutcart' shared service.
     *
     * @return \Symfony\Component\Cache\Simple\ArrayCache
     */
    protected function getPsCheckout_Cache_PscheckoutcartService()
    {
        return $this->services['ps_checkout.cache.pscheckoutcart'] = new \Symfony\Component\Cache\Simple\ArrayCache();
    }

    /**
     * Gets the public 'ps_checkout.db' shared service.
     *
     * @return \Db
     */
    protected function getPsCheckout_DbService()
    {
        return $this->services['ps_checkout.db'] = \Db::getInstance();
    }

    /**
     * Gets the public 'ps_checkout.http.client' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Http\HttpClientInterface
     */
    protected function getPsCheckout_Http_ClientService()
    {
        return $this->services['ps_checkout.http.client'] = ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\HttpClientFactory'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\HttpClientFactory'] = new \PrestaShop\Module\PrestashopCheckout\Http\HttpClientFactory()))->create(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Builder\\Configuration\\MaaslandHttpClientConfigurationBuilder'] ?? $this->getMaaslandHttpClientConfigurationBuilderService()));
    }

    /**
     * Gets the public 'ps_checkout.logger' shared service.
     *
     * @return \Psr\Log\LoggerInterface
     */
    protected function getPsCheckout_LoggerService()
    {
        return $this->services['ps_checkout.logger'] = ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFactory'] ?? $this->getLoggerFactoryService())->build(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('8.1.0', 'C:\\wamp64\\www\\prestashop'))));
    }

    /**
     * Gets the public 'ps_checkout.logger.handler' shared service.
     *
     * @return \Monolog\Handler\HandlerInterface
     */
    protected function getPsCheckout_Logger_HandlerService()
    {
        return $this->services['ps_checkout.logger.handler'] = ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerHandlerFactory'] ?? $this->getLoggerHandlerFactoryService())->build();
    }

    /**
     * Gets the public 'ps_checkout.module' shared service.
     *
     * @return \Ps_checkout
     */
    protected function getPsCheckout_ModuleService()
    {
        return $this->services['ps_checkout.module'] = \Module::getInstanceByName('ps_checkout');
    }

    /**
     * Gets the public 'ps_checkout.module.version' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Version\Version
     */
    protected function getPsCheckout_Module_VersionService()
    {
        return $this->services['ps_checkout.module.version'] = \PrestaShop\Module\PrestashopCheckout\Version\Version::buildFromString(($this->services['ps_checkout.module'] ?? $this->getPsCheckout_ModuleService())->version);
    }

    /**
     * Gets the public 'ps_checkout.repository.paypal.code' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCodeRepository
     */
    protected function getPsCheckout_Repository_Paypal_CodeService()
    {
        return $this->services['ps_checkout.repository.paypal.code'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCodeRepository();
    }
}
