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
class FrontContainer extends \PrestaShop\PrestaShop\Adapter\Container\LegacyContainer
{
    private $parameters = [];
    private $getService;

    public function __construct()
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'employee' => true,
            'shop' => true,
        ];
        $this->methodMap = [
            'PrestaShopCorp\\Billing\\Presenter\\BillingPresenter' => 'getBillingPresenterService',
            'PrestaShopCorp\\Billing\\Services\\BillingService' => 'getBillingServiceService',
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
            'PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookCategoryClient' => 'getFacebookCategoryClientService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient' => 'getFacebookClientService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber' => 'getAccountSuspendedSubscriberService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\ApiErrorSubscriber' => 'getApiErrorSubscriberService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener' => 'getResponseListenerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter' => 'getConfigurationAdapterService',
            'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter' => 'getToolsAdapterService',
            'PrestaShop\\Module\\PrestashopFacebook\\Buffer\\TemplateBuffer' => 'getTemplateBufferService',
            'PrestaShop\\Module\\PrestashopFacebook\\Config\\Env' => 'getEnv2Service',
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
            'PrestaShop\\Module\\PsAccounts\\Context\\ShopContext' => 'getShopContext2Service',
            'PrestaShop\\Module\\PsAccounts\\Cqrs\\CommandBus' => 'getCommandBusService',
            'PrestaShop\\Module\\PsAccounts\\Factory\\CircuitBreakerFactory' => 'getCircuitBreakerFactoryService',
            'PrestaShop\\Module\\PsAccounts\\Installer\\Installer' => 'getInstallerService',
            'PrestaShop\\Module\\PsAccounts\\Middleware\\Oauth2Middleware' => 'getOauth2MiddlewareService',
            'PrestaShop\\Module\\PsAccounts\\Presenter\\PsAccountsPresenter' => 'getPsAccountsPresenterService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\Oauth2Client' => 'getOauth2ClientService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\PrestaShopSession' => 'getPrestaShopSessionService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\ShopProvider' => 'getShopProvider2Service',
            'PrestaShop\\Module\\PsAccounts\\Provider\\RsaKeysProvider' => 'getRsaKeysProviderService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider' => 'getShopProvider3Service',
            'PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository' => 'getConfigurationRepositoryService',
            'PrestaShop\\Module\\PsAccounts\\Repository\\ShopTokenRepository' => 'getShopTokenRepositoryService',
            'PrestaShop\\Module\\PsAccounts\\Repository\\UserTokenRepository' => 'getUserTokenRepositoryService',
            'PrestaShop\\Module\\PsAccounts\\Service\\AnalyticsService' => 'getAnalyticsServiceService',
            'PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService' => 'getPsAccountsServiceService',
            'PrestaShop\\Module\\PsAccounts\\Service\\PsBillingService' => 'getPsBillingServiceService',
            'PrestaShop\\Module\\PsAccounts\\Service\\SentryService' => 'getSentryServiceService',
            'PrestaShop\\Module\\PsEventbus\\Api\\CollectorApiClient' => 'getCollectorApiClientService',
            'PrestaShop\\Module\\PsEventbus\\Api\\LiveSyncApiClient' => 'getLiveSyncApiClientService',
            'PrestaShop\\Module\\PsEventbus\\Api\\SyncApiClient' => 'getSyncApiClientService',
            'PrestaShop\\Module\\PsEventbus\\Builder\\CarrierBuilder' => 'getCarrierBuilderService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\CategoryDecorator' => 'getCategoryDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\CurrencyDecorator' => 'getCurrencyDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\CustomPriceDecorator' => 'getCustomPriceDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\CustomerDecorator' => 'getCustomerDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\EmployeeDecorator' => 'getEmployeeDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\ImageDecorator' => 'getImageDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\ImageTypeDecorator' => 'getImageTypeDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\LanguageDecorator' => 'getLanguageDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\ManufacturerDecorator' => 'getManufacturerDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\PayloadDecorator' => 'getPayloadDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\ProductDecorator' => 'getProductDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\ProductSupplierDecorator' => 'getProductSupplierDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\StockDecorator' => 'getStockDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\StoreDecorator' => 'getStoreDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\SupplierDecorator' => 'getSupplierDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\TranslationDecorator' => 'getTranslationDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\WishlistDecorator' => 'getWishlistDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter' => 'getArrayFormatterService',
            'PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter' => 'getJsonFormatterService',
            'PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler' => 'getErrorHandler2Service',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CarrierDataProvider' => 'getCarrierDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CartDataProvider' => 'getCartDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CartRuleDataProvider' => 'getCartRuleDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CategoryDataProvider' => 'getCategoryDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CurrencyDataProvider' => 'getCurrencyDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CustomPriceDataProvider' => 'getCustomPriceDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CustomProductCarrierDataProvider' => 'getCustomProductCarrierDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CustomerDataProvider' => 'getCustomerDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\EmployeeDataProvider' => 'getEmployeeDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\GoogleTaxonomyDataProvider' => 'getGoogleTaxonomyDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\ImageDataProvider' => 'getImageDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\ImageTypeDataProvider' => 'getImageTypeDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\LanguageDataProvider' => 'getLanguageDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\ManufacturerDataProvider' => 'getManufacturerDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\ModuleDataProvider' => 'getModuleDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\OrderDataProvider' => 'getOrderDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\ProductDataProvider' => 'getProductDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\ProductSupplierDataProvider' => 'getProductSupplierDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\StockDataProvider' => 'getStockDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\StoreDataProvider' => 'getStoreDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\SupplierDataProvider' => 'getSupplierDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\TranslationDataProvider' => 'getTranslationDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\WishlistDataProvider' => 'getWishlistDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\BundleRepository' => 'getBundleRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CarrierRepository' => 'getCarrierRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CartProductRepository' => 'getCartProductRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CartRepository' => 'getCartRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CartRuleRepository' => 'getCartRuleRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CategoryRepository' => 'getCategoryRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository' => 'getConfigurationRepository2Service',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CountryRepository' => 'getCountryRepository2Service',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository' => 'getCurrencyRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CustomPriceRepository' => 'getCustomPriceRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CustomerRepository' => 'getCustomerRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\DeletedObjectsRepository' => 'getDeletedObjectsRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\EmployeeRepository' => 'getEmployeeRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\EventbusSyncRepository' => 'getEventbusSyncRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\GoogleTaxonomyRepository' => 'getGoogleTaxonomyRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ImageRepository' => 'getImageRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ImageTypeRepository' => 'getImageTypeRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\IncrementalSyncRepository' => 'getIncrementalSyncRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository' => 'getLanguageRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\LiveSyncRepository' => 'getLiveSyncRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ManufacturerRepository' => 'getManufacturerRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ModuleRepository' => 'getModuleRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\OrderCartRuleRepository' => 'getOrderCartRuleRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\OrderDetailsRepository' => 'getOrderDetailsRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\OrderHistoryRepository' => 'getOrderHistoryRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\OrderRepository' => 'getOrderRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ProductCarrierRepository' => 'getProductCarrierRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ProductRepository' => 'getProductRepository2Service',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ProductSupplierRepository' => 'getProductSupplierRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ServerInformationRepository' => 'getServerInformationRepository2Service',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository' => 'getShopRepository2Service',
            'PrestaShop\\Module\\PsEventbus\\Repository\\SpecificPriceRepository' => 'getSpecificPriceRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\StateRepository' => 'getStateRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\StockMvtRepository' => 'getStockMvtRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\StockRepository' => 'getStockRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\StoreRepository' => 'getStoreRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\SupplierRepository' => 'getSupplierRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\TaxRepository' => 'getTaxRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ThemeRepository' => 'getThemeRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\TranslationRepository' => 'getTranslationRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\WishlistProductRepository' => 'getWishlistProductRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\WishlistRepository' => 'getWishlistRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Service\\ApiAuthorizationService' => 'getApiAuthorizationServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\CacheService' => 'getCacheServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\CompressionService' => 'getCompressionServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\DeletedObjectsService' => 'getDeletedObjectsServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\PresenterService' => 'getPresenterServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\ProxyService' => 'getProxyServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService' => 'getPsAccountsAdapterServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\SpecificPriceService' => 'getSpecificPriceServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\SynchronizationService' => 'getSynchronizationServiceService',
            'PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment' => 'getSegmentService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter' => 'getConfigurationAdapter2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer' => 'getTemplateBuffer2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Config\\Env' => 'getEnv3Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Conversion\\EnhancedConversionToggle' => 'getEnhancedConversionToggleService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Conversion\\UserDataProvider' => 'getUserDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\ErrorHandler' => 'getErrorHandler3Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\RemarketingHookHandler' => 'getRemarketingHookHandlerService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\CartEventDataProvider' => 'getCartEventDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PageViewEventDataProvider' => 'getPageViewEventDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider' => 'getProductDataProvider2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PurchaseEventDataProvider' => 'getPurchaseEventDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\VerificationTagDataProvider' => 'getVerificationTagDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\AttributesRepository' => 'getAttributesRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CarrierRepository' => 'getCarrierRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CategoryRepository' => 'getCategoryRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository' => 'getCountryRepository3Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CurrencyRepository' => 'getCurrencyRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository' => 'getLanguageRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ManufacturerRepository' => 'getManufacturerRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ProductRepository' => 'getProductRepository3Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\StateRepository' => 'getStateRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TabRepository' => 'getTabRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TaxRepository' => 'getTaxRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository' => 'getVerificationTagRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Tracker\\Segment' => 'getSegment2Service',
            'PrestaShop\\PrestaShop\\Adapter\\Configuration' => 'getConfiguration2Service',
            'PrestaShop\\PrestaShop\\Adapter\\ContextStateManager' => 'getContextStateManager2Service',
            'PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider' => 'getCurrencyDataProvider2Service',
            'PrestaShop\\PrestaShop\\Adapter\\LegacyContext' => 'getLegacyContextService',
            'PrestaShop\\PrestaShop\\Adapter\\Tools' => 'getToolsService',
            'PrestaShop\\PrestaShop\\Core\\Localization\\Locale\\Repository' => 'getRepositoryService',
            'PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts' => 'getPsAccountsService',
            'PrestaShop\\PsAccountsInstaller\\Installer\\Installer' => 'getInstaller2Service',
            'Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory' => 'getClientFactoryService',
            'annotation_reader' => 'getAnnotationReaderService',
            'array' => 'getArrayService',
            'configuration' => 'getConfiguration3Service',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'context' => 'getContextService',
            'db' => 'getDbService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'hashing' => 'getHashingService',
            'klaviyops.klaviyo_api_wrapper' => 'getKlaviyops_KlaviyoApiWrapperService',
            'klaviyops.klaviyo_service.coupon_generator' => 'getKlaviyops_KlaviyoService_CouponGeneratorService',
            'klaviyops.klaviyo_service.customer_event_service' => 'getKlaviyops_KlaviyoService_CustomerEventServiceService',
            'klaviyops.klaviyo_service.order_event' => 'getKlaviyops_KlaviyoService_OrderEventService',
            'klaviyops.module' => 'getKlaviyops_ModuleService',
            'klaviyops.prestashop_components.context' => 'getKlaviyops_PrestashopComponents_ContextService',
            'klaviyops.prestashop_services.cart_rule' => 'getKlaviyops_PrestashopServices_CartRuleService',
            'klaviyops.prestashop_services.context' => 'getKlaviyops_PrestashopServices_ContextService',
            'klaviyops.prestashop_services.customer' => 'getKlaviyops_PrestashopServices_CustomerService',
            'klaviyops.prestashop_services.datetime' => 'getKlaviyops_PrestashopServices_DatetimeService',
            'klaviyops.prestashop_services.logger' => 'getKlaviyops_PrestashopServices_LoggerService',
            'klaviyops.prestashop_services.order' => 'getKlaviyops_PrestashopServices_OrderService',
            'klaviyops.prestashop_services.product' => 'getKlaviyops_PrestashopServices_ProductService',
            'klaviyops.prestashop_services.validate' => 'getKlaviyops_PrestashopServices_ValidateService',
            'klaviyops.util_services.csv' => 'getKlaviyops_UtilServices_CsvService',
            'klaviyops.util_services.env' => 'getKlaviyops_UtilServices_EnvService',
            'prestashop.adapter.data_provider.country' => 'getPrestashop_Adapter_DataProvider_CountryService',
            'prestashop.adapter.environment' => 'getPrestashop_Adapter_EnvironmentService',
            'prestashop.adapter.module.repository.module_repository' => 'getPrestashop_Adapter_Module_Repository_ModuleRepositoryService',
            'prestashop.adapter.validate' => 'getPrestashop_Adapter_ValidateService',
            'prestashop.core.circuit_breaker.advanced_factory' => 'getPrestashop_Core_CircuitBreaker_AdvancedFactoryService',
            'prestashop.core.circuit_breaker.cache' => 'getPrestashop_Core_CircuitBreaker_CacheService',
            'prestashop.core.circuit_breaker.doctrine_cache' => 'getPrestashop_Core_CircuitBreaker_DoctrineCacheService',
            'prestashop.core.circuit_breaker.storage' => 'getPrestashop_Core_CircuitBreaker_StorageService',
            'prestashop.core.filter.front_end_object.cart' => 'getPrestashop_Core_Filter_FrontEndObject_CartService',
            'prestashop.core.filter.front_end_object.configuration' => 'getPrestashop_Core_Filter_FrontEndObject_ConfigurationService',
            'prestashop.core.filter.front_end_object.customer' => 'getPrestashop_Core_Filter_FrontEndObject_CustomerService',
            'prestashop.core.filter.front_end_object.main' => 'getPrestashop_Core_Filter_FrontEndObject_MainService',
            'prestashop.core.filter.front_end_object.product' => 'getPrestashop_Core_Filter_FrontEndObject_ProductService',
            'prestashop.core.filter.front_end_object.product_collection' => 'getPrestashop_Core_Filter_FrontEndObject_ProductCollectionService',
            'prestashop.core.filter.front_end_object.search_result_product' => 'getPrestashop_Core_Filter_FrontEndObject_SearchResultProductService',
            'prestashop.core.filter.front_end_object.search_result_product_collection' => 'getPrestashop_Core_Filter_FrontEndObject_SearchResultProductCollectionService',
            'prestashop.core.filter.front_end_object.shop' => 'getPrestashop_Core_Filter_FrontEndObject_ShopService',
            'prestashop.core.localization.cache.adapter' => 'getPrestashop_Core_Localization_Cache_AdapterService',
            'prestashop.core.localization.cldr.cache.adapter' => 'getPrestashop_Core_Localization_Cldr_Cache_AdapterService',
            'prestashop.core.localization.cldr.datalayer.locale_cache' => 'getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService',
            'prestashop.core.localization.cldr.datalayer.locale_reference' => 'getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService',
            'prestashop.core.localization.cldr.locale_data_source' => 'getPrestashop_Core_Localization_Cldr_LocaleDataSourceService',
            'prestashop.core.localization.cldr.locale_repository' => 'getPrestashop_Core_Localization_Cldr_LocaleRepositoryService',
            'prestashop.core.localization.cldr.reader' => 'getPrestashop_Core_Localization_Cldr_ReaderService',
            'prestashop.core.localization.currency.datasource' => 'getPrestashop_Core_Localization_Currency_DatasourceService',
            'prestashop.core.localization.currency.middleware.cache' => 'getPrestashop_Core_Localization_Currency_Middleware_CacheService',
            'prestashop.core.localization.currency.middleware.database' => 'getPrestashop_Core_Localization_Currency_Middleware_DatabaseService',
            'prestashop.core.localization.currency.middleware.installed' => 'getPrestashop_Core_Localization_Currency_Middleware_InstalledService',
            'prestashop.core.localization.currency.middleware.reference' => 'getPrestashop_Core_Localization_Currency_Middleware_ReferenceService',
            'prestashop.core.localization.currency.repository' => 'getPrestashop_Core_Localization_Currency_RepositoryService',
            'prestashop.core.localization.locale.context_locale' => 'getPrestashop_Core_Localization_Locale_ContextLocaleService',
            'prestashop.core.string.character_cleaner' => 'getPrestashop_Core_String_CharacterCleanerService',
            'prestashop.database.naming_strategy' => 'getPrestashop_Database_NamingStrategyService',
            'prestashop.translation.translator_language_loader' => 'getPrestashop_Translation_TranslatorLanguageLoaderService',
            'product_comment_criterion_repository' => 'getProductCommentCriterionRepositoryService',
            'product_comment_repository' => 'getProductCommentRepositoryService',
            'ps_accounts.context' => 'getPsAccounts_ContextService',
            'ps_accounts.facade' => 'getPsAccounts_FacadeService',
            'ps_accounts.installer' => 'getPsAccounts_InstallerService',
            'ps_accounts.logger' => 'getPsAccounts_LoggerService',
            'ps_accounts.module' => 'getPsAccounts_ModuleService',
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
            'ps_eventbus' => 'getPsEventbusService',
            'ps_eventbus.context' => 'getPsEventbus_ContextService',
            'ps_eventbus.controller' => 'getPsEventbus_ControllerService',
            'ps_eventbus.cookie' => 'getPsEventbus_CookieService',
            'ps_eventbus.currency' => 'getPsEventbus_CurrencyService',
            'ps_eventbus.db' => 'getPsEventbus_DbService',
            'ps_eventbus.helper.module' => 'getPsEventbus_Helper_ModuleService',
            'ps_eventbus.language' => 'getPsEventbus_LanguageService',
            'ps_eventbus.link' => 'getPsEventbus_LinkService',
            'ps_eventbus.shop' => 'getPsEventbus_ShopService',
            'ps_eventbus.smarty' => 'getPsEventbus_SmartyService',
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
            'psxmarketingwithgoogle' => 'getPsxmarketingwithgoogleService',
            'psxmarketingwithgoogle.cart' => 'getPsxmarketingwithgoogle_CartService',
            'psxmarketingwithgoogle.context' => 'getPsxmarketingwithgoogle_ContextService',
            'psxmarketingwithgoogle.controller' => 'getPsxmarketingwithgoogle_ControllerService',
            'psxmarketingwithgoogle.cookie' => 'getPsxmarketingwithgoogle_CookieService',
            'psxmarketingwithgoogle.country' => 'getPsxmarketingwithgoogle_CountryService',
            'psxmarketingwithgoogle.currency' => 'getPsxmarketingwithgoogle_CurrencyService',
            'psxmarketingwithgoogle.customer' => 'getPsxmarketingwithgoogle_CustomerService',
            'psxmarketingwithgoogle.db' => 'getPsxmarketingwithgoogle_DbService',
            'psxmarketingwithgoogle.language' => 'getPsxmarketingwithgoogle_LanguageService',
            'psxmarketingwithgoogle.link' => 'getPsxmarketingwithgoogle_LinkService',
            'psxmarketingwithgoogle.shop' => 'getPsxmarketingwithgoogle_ShopService',
            'psxmarketingwithgoogle.smarty' => 'getPsxmarketingwithgoogle_SmartyService',
            'prestashop.adapter.tools' => 'getPrestashop_Adapter_ToolsService',
        ];
        $this->aliases = [
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProviderInterface' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProviderInterface' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider',
            'PrestaShop\\PrestaShop\\Core\\Currency\\CurrencyDataProviderInterface' => 'PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider',
            'PrestaShop\\PrestaShop\\Core\\Localization\\LocaleInterface' => 'prestashop.core.localization.locale.context_locale',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'prestashop.adapter.context_state_manager' => 'PrestaShop\\PrestaShop\\Adapter\\ContextStateManager',
            'prestashop.adapter.data_provider.currency' => 'PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider',
            'prestashop.adapter.legacy.configuration' => 'PrestaShop\\PrestaShop\\Adapter\\Configuration',
            'prestashop.adapter.legacy.context' => 'PrestaShop\\PrestaShop\\Adapter\\LegacyContext',
            'prestashop.core.localization.cldr.datalayer.top_layer' => 'prestashop.core.localization.cldr.datalayer.locale_cache',
            'prestashop.core.localization.currency.middleware.top_layer' => 'prestashop.core.localization.currency.middleware.cache',
            'prestashop.core.localization.locale.repository' => 'PrestaShop\\PrestaShop\\Core\\Localization\\Locale\\Repository',
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
            '.service_locator.zH65KBq' => true,
            'Doctrine\\Bundle\\DoctrineBundle\\Controller\\ProfilerController' => true,
            'Doctrine\\Bundle\\DoctrineBundle\\Dbal\\ManagerRegistryAwareConnectionProvider' => true,
            'Doctrine\\Common\\Persistence\\ManagerRegistry' => true,
            'Doctrine\\DBAL\\Connection' => true,
            'Doctrine\\DBAL\\Connection $defaultConnection' => true,
            'Doctrine\\DBAL\\Driver\\Connection' => true,
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => true,
            'Doctrine\\ORM\\EntityManagerInterface' => true,
            'Doctrine\\ORM\\EntityManagerInterface $defaultEntityManager' => true,
            'Doctrine\\Persistence\\ManagerRegistry' => true,
            'PrestaShopBundle\\DependencyInjection\\CacheAdapterFactory' => true,
            'PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor' => true,
            'PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper' => true,
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\EventSubscriber\\PaymentMethodTokenEventSubscriber' => true,
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\EventSubscriber\\PayPalRefundEventSubscriber' => true,
            'PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandlerInterface' => true,
            'PrestaShop\\Module\\PsEventbus\\Service\\ProxyServiceInterface' => true,
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'data_collector.doctrine' => true,
            'doctrine.cache_clear_metadata_command' => true,
            'doctrine.cache_clear_query_cache_command' => true,
            'doctrine.cache_clear_result_command' => true,
            'doctrine.cache_collection_region_command' => true,
            'doctrine.clear_entity_region_command' => true,
            'doctrine.clear_query_region_command' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.database_import_command' => true,
            'doctrine.dbal.connection' => true,
            'doctrine.dbal.connection.configuration' => true,
            'doctrine.dbal.connection.event_manager' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.dbal.default_connection.configuration' => true,
            'doctrine.dbal.default_connection.event_manager' => true,
            'doctrine.dbal.event_manager' => true,
            'doctrine.dbal.logger' => true,
            'doctrine.dbal.logger.backtrace' => true,
            'doctrine.dbal.logger.chain' => true,
            'doctrine.dbal.logger.profiling' => true,
            'doctrine.dbal.schema_asset_filter_manager' => true,
            'doctrine.dbal.well_known_schema_asset_filter' => true,
            'doctrine.ensure_production_settings_command' => true,
            'doctrine.mapping_convert_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine.mapping_info_command' => true,
            'doctrine.orm.configuration' => true,
            'doctrine.orm.container_repository_factory' => true,
            'doctrine.orm.default_annotation_metadata_driver' => true,
            'doctrine.orm.default_configuration' => true,
            'doctrine.orm.default_entity_listener_resolver' => true,
            'doctrine.orm.default_entity_manager.event_manager' => true,
            'doctrine.orm.default_entity_manager.property_info_extractor' => true,
            'doctrine.orm.default_entity_manager.validator_loader' => true,
            'doctrine.orm.default_listeners.attach_entity_listeners' => true,
            'doctrine.orm.default_manager_configurator' => true,
            'doctrine.orm.default_metadata_cache' => true,
            'doctrine.orm.default_metadata_driver' => true,
            'doctrine.orm.default_query_cache' => true,
            'doctrine.orm.default_result_cache' => true,
            'doctrine.orm.entity_manager.abstract' => true,
            'doctrine.orm.listeners.resolve_target_entity' => true,
            'doctrine.orm.manager_configurator.abstract' => true,
            'doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager' => true,
            'doctrine.orm.metadata.annotation_reader' => true,
            'doctrine.orm.naming_strategy.default' => true,
            'doctrine.orm.naming_strategy.underscore' => true,
            'doctrine.orm.naming_strategy.underscore_number_aware' => true,
            'doctrine.orm.proxy_cache_warmer' => true,
            'doctrine.orm.quote_strategy.ansi' => true,
            'doctrine.orm.quote_strategy.default' => true,
            'doctrine.orm.security.user.provider' => true,
            'doctrine.orm.validator.unique' => true,
            'doctrine.orm.validator_initializer' => true,
            'doctrine.query_dql_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine.schema_create_command' => true,
            'doctrine.schema_drop_command' => true,
            'doctrine.schema_update_command' => true,
            'doctrine.schema_validate_command' => true,
            'doctrine.twig.doctrine_extension' => true,
            'form.type.entity' => true,
            'form.type_guesser.doctrine' => true,
            'messenger.middleware.doctrine_close_connection' => true,
            'messenger.middleware.doctrine_open_transaction_logger' => true,
            'messenger.middleware.doctrine_ping_connection' => true,
            'messenger.middleware.doctrine_transaction' => true,
            'messenger.transport.doctrine.factory' => true,
            'ps_checkout.cache.array.paypal.capture' => true,
            'ps_checkout.cache.array.paypal.order' => true,
            'ps_checkout.cache.filesystem.paypal.capture' => true,
            'ps_checkout.cache.filesystem.paypal.order' => true,
            'ps_checkout.event.dispatcher.symfony' => true,
            'ps_checkout.tactician.bus' => true,
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
    protected function getEnv2Service()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env();
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
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\CommandHandler\DeleteUserShopHandler' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\CommandHandler\DeleteUserShopHandler
     */
    protected function getDeleteUserShopHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\DeleteUserShopHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\DeleteUserShopHandler(($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] ?? ($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient('https://accounts-api.distribution.prestashop.net/', NULL, 10))), ($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContext2Service()), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession'] ?? $this->getShopSessionService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\OwnerSession'] ?? $this->getOwnerSessionService()));
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
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\MigrateAndLinkV4ShopHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\MigrateAndLinkV4ShopHandler(($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] ?? ($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient('https://accounts-api.distribution.prestashop.net/', NULL, 10))), ($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContext2Service()), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession'] ?? $this->getShopSessionService()));
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
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UpdateUserShopHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\UpdateUserShopHandler(($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] ?? ($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient('https://accounts-api.distribution.prestashop.net/', NULL, 10))), ($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContext2Service()), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession'] ?? $this->getShopSessionService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\OwnerSession'] ?? $this->getOwnerSessionService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\CommandHandler\UpgradeModuleHandler' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\CommandHandler\UpgradeModuleHandler
     */
    protected function getUpgradeModuleHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UpgradeModuleHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\UpgradeModuleHandler(($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] ?? ($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient('https://accounts-api.distribution.prestashop.net/', NULL, 10))), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\LinkShop'] ?? $this->getLinkShopService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession'] ?? $this->getShopSessionService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContext2Service()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()));
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
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\ShopSession'] = new \PrestaShop\Module\PsAccounts\Account\Session\ShopSession(($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\ShopProvider'] ?? $this->getShopProvider2Service()));
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
        return $this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Link'] = new \PrestaShop\Module\PsAccounts\Adapter\Link(($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContext2Service()));
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
        return $this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\ServicesBillingClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\ServicesBillingClient('https://billing-api.distribution.prestashop.net/', ($this->services['PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService'] ?? $this->getPsAccountsServiceService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider'] ?? $this->getShopProvider3Service()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Context\ShopContext' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Context\ShopContext
     */
    protected function getShopContext2Service()
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
        return $this->services['PrestaShop\\Module\\PsAccounts\\Installer\\Installer'] = new \PrestaShop\Module\PsAccounts\Installer\Installer(($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContext2Service()), ($this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Link'] ?? $this->getLinkService()));
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
    protected function getShopProvider2Service()
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
    protected function getShopProvider3Service()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider'] = new \PrestaShop\Module\PsAccounts\Provider\ShopProvider(($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContext2Service()), ($this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Link'] ?? $this->getLinkService()));
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
     * Gets the public 'PrestaShop\Module\PsEventbus\Api\CollectorApiClient' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Api\CollectorApiClient
     */
    protected function getCollectorApiClientService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Api\\CollectorApiClient'] = new \PrestaShop\Module\PsEventbus\Api\CollectorApiClient('https://eventbus-proxy.psessentials.net', ($this->services['ps_eventbus'] ?? $this->getPsEventbusService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService'] ?? $this->getPsAccountsAdapterServiceService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Api\LiveSyncApiClient' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Api\LiveSyncApiClient
     */
    protected function getLiveSyncApiClientService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Api\\LiveSyncApiClient'] = new \PrestaShop\Module\PsEventbus\Api\LiveSyncApiClient('https://api.cloudsync.prestashop.com/live-sync/v1', ($this->services['ps_eventbus'] ?? $this->getPsEventbusService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService'] ?? $this->getPsAccountsAdapterServiceService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Api\SyncApiClient' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Api\SyncApiClient
     */
    protected function getSyncApiClientService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Api\\SyncApiClient'] = new \PrestaShop\Module\PsEventbus\Api\SyncApiClient('https://eventbus-sync.psessentials.net', ($this->services['ps_eventbus'] ?? $this->getPsEventbusService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService'] ?? $this->getPsAccountsAdapterServiceService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Builder\CarrierBuilder' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Builder\CarrierBuilder
     */
    protected function getCarrierBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Builder\\CarrierBuilder'] = new \PrestaShop\Module\PsEventbus\Builder\CarrierBuilder(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CarrierRepository'] ?? $this->getCarrierRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CountryRepository'] ?? $this->getCountryRepository2Service()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StateRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StateRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StateRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\TaxRepository'] ?? $this->getTaxRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\CategoryDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\CategoryDecorator
     */
    protected function getCategoryDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CategoryDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CategoryDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\CurrencyDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\CurrencyDecorator
     */
    protected function getCurrencyDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CurrencyDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CurrencyDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\CustomPriceDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\CustomPriceDecorator
     */
    protected function getCustomPriceDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CustomPriceDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CustomPriceDecorator(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Service\\SpecificPriceService'] ?? $this->getSpecificPriceServiceService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\CustomerDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\CustomerDecorator
     */
    protected function getCustomerDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CustomerDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CustomerDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\EmployeeDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\EmployeeDecorator
     */
    protected function getEmployeeDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\EmployeeDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\EmployeeDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\ImageDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\ImageDecorator
     */
    protected function getImageDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ImageDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ImageDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\ImageTypeDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\ImageTypeDecorator
     */
    protected function getImageTypeDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ImageTypeDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ImageTypeDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\LanguageDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\LanguageDecorator
     */
    protected function getLanguageDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\LanguageDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\LanguageDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\ManufacturerDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\ManufacturerDecorator
     */
    protected function getManufacturerDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ManufacturerDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ManufacturerDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\PayloadDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\PayloadDecorator
     */
    protected function getPayloadDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\PayloadDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\PayloadDecorator(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\ProductDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\ProductDecorator
     */
    protected function getProductDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ProductDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ProductDecorator(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] ?? $this->getLanguageRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductRepository'] ?? $this->getProductRepository2Service()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CategoryRepository'] ?? $this->getCategoryRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\BundleRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\BundleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\BundleRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\ProductSupplierDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\ProductSupplierDecorator
     */
    protected function getProductSupplierDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ProductSupplierDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ProductSupplierDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\StockDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\StockDecorator
     */
    protected function getStockDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StockDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\StockDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\StoreDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\StoreDecorator
     */
    protected function getStoreDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StoreDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\StoreDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\SupplierDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\SupplierDecorator
     */
    protected function getSupplierDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\SupplierDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\SupplierDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\TranslationDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\TranslationDecorator
     */
    protected function getTranslationDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\TranslationDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\TranslationDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\WishlistDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\WishlistDecorator
     */
    protected function getWishlistDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\WishlistDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\WishlistDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter
     */
    protected function getArrayFormatterService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Formatter\JsonFormatter' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Formatter\JsonFormatter
     */
    protected function getJsonFormatterService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\JsonFormatter();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Handler\ErrorHandler\ErrorHandler' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Handler\ErrorHandler\ErrorHandler
     */
    protected function getErrorHandler2Service()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] = new \PrestaShop\Module\PsEventbus\Handler\ErrorHandler\ErrorHandler(($this->services['ps_eventbus'] ?? $this->getPsEventbusService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService'] ?? $this->getPsAccountsAdapterServiceService()), 'https://457f191226df4b8f9a0d7bf6f250bab2@o298402.ingest.sentry.io/6066714', 'production');
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CarrierDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CarrierDataProvider
     */
    protected function getCarrierDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CarrierDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CarrierDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Builder\\CarrierBuilder'] ?? $this->getCarrierBuilderService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CarrierRepository'] ?? $this->getCarrierRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] ?? $this->getLanguageRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CartDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CartDataProvider
     */
    protected function getCartDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CartDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CartDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRepository'] ?? $this->getCartRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartProductRepository'] ?? $this->getCartProductRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CartRuleDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CartRuleDataProvider
     */
    protected function getCartRuleDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CartRuleDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CartRuleDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRuleRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRuleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CartRuleRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CategoryDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CategoryDataProvider
     */
    protected function getCategoryDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CategoryDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CategoryDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CategoryRepository'] ?? $this->getCategoryRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CategoryDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CategoryDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CategoryDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CurrencyDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CurrencyDataProvider
     */
    protected function getCurrencyDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CurrencyDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CurrencyDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CurrencyRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CurrencyDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CurrencyDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CurrencyDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CustomPriceDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CustomPriceDataProvider
     */
    protected function getCustomPriceDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CustomPriceDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CustomPriceDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CustomPriceRepository'] ?? $this->getCustomPriceRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CustomPriceDecorator'] ?? $this->getCustomPriceDecoratorService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CustomProductCarrierDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CustomProductCarrierDataProvider
     */
    protected function getCustomProductCarrierDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CustomProductCarrierDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CustomProductCarrierDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductCarrierRepository'] ?? $this->getProductCarrierRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CustomerDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CustomerDataProvider
     */
    protected function getCustomerDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CustomerDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CustomerDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CustomerRepository'] ?? $this->getCustomerRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CustomerDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CustomerDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CustomerDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\EmployeeDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\EmployeeDataProvider
     */
    protected function getEmployeeDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\EmployeeDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\EmployeeDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EmployeeRepository'] ?? $this->getEmployeeRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\EmployeeDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\EmployeeDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\EmployeeDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\GoogleTaxonomyDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\GoogleTaxonomyDataProvider
     */
    protected function getGoogleTaxonomyDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\GoogleTaxonomyDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\GoogleTaxonomyDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\GoogleTaxonomyRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\GoogleTaxonomyRepository'] = new \PrestaShop\Module\PsEventbus\Repository\GoogleTaxonomyRepository())), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\ImageDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ImageDataProvider
     */
    protected function getImageDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ImageDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\ImageDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ImageRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ImageRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ImageRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ImageDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ImageDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ImageDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\ImageTypeDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ImageTypeDataProvider
     */
    protected function getImageTypeDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ImageTypeDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\ImageTypeDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ImageTypeRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ImageTypeRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ImageTypeRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ImageTypeDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ImageTypeDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ImageTypeDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\LanguageDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\LanguageDataProvider
     */
    protected function getLanguageDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\LanguageDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\LanguageDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] ?? $this->getLanguageRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\LanguageDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\LanguageDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\LanguageDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\ManufacturerDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ManufacturerDataProvider
     */
    protected function getManufacturerDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ManufacturerDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\ManufacturerDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ManufacturerRepository'] ?? $this->getManufacturerRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ManufacturerDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ManufacturerDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ManufacturerDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\ModuleDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ModuleDataProvider
     */
    protected function getModuleDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ModuleDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\ModuleDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ModuleRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ModuleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ModuleRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ShopRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\OrderDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\OrderDataProvider
     */
    protected function getOrderDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\OrderDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\OrderDataProvider(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderDetailsRepository'] ?? $this->getOrderDetailsRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderHistoryRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderHistoryRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderHistoryRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderCartRuleRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderCartRuleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderCartRuleRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\ProductDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ProductDataProvider
     */
    protected function getProductDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ProductDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\ProductDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductRepository'] ?? $this->getProductRepository2Service()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ProductDecorator'] ?? $this->getProductDecoratorService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ProductSupplierDataProvider'] ?? $this->getProductSupplierDataProviderService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] ?? $this->getLanguageRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\ProductSupplierDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ProductSupplierDataProvider
     */
    protected function getProductSupplierDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ProductSupplierDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\ProductSupplierDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductSupplierRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductSupplierRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ProductSupplierRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ProductSupplierDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ProductSupplierDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ProductSupplierDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\StockDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\StockDataProvider
     */
    protected function getStockDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\StockDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\StockDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StockRepository'] ?? $this->getStockRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StockMvtRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StockMvtRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StockMvtRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StockDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StockDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\StockDecorator())), ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\StoreDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\StoreDataProvider
     */
    protected function getStoreDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\StoreDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\StoreDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StoreRepository'] ?? $this->getStoreRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StoreDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StoreDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\StoreDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\SupplierDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\SupplierDataProvider
     */
    protected function getSupplierDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\SupplierDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\SupplierDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\SupplierRepository'] ?? $this->getSupplierRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\SupplierDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\SupplierDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\SupplierDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\TranslationDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\TranslationDataProvider
     */
    protected function getTranslationDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\TranslationDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\TranslationDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\TranslationRepository'] ?? $this->getTranslationRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\TranslationDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\TranslationDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\TranslationDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\WishlistDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\WishlistDataProvider
     */
    protected function getWishlistDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\WishlistDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\WishlistDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\WishlistRepository'] ?? $this->getWishlistRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\WishlistProductRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\WishlistProductRepository'] = new \PrestaShop\Module\PsEventbus\Repository\WishlistProductRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\WishlistDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\WishlistDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\WishlistDecorator())), ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\BundleRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\BundleRepository
     */
    protected function getBundleRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\BundleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\BundleRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CarrierRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CarrierRepository
     */
    protected function getCarrierRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CarrierRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CarrierRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CartProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CartProductRepository
     */
    protected function getCartProductRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartProductRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CartProductRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CartRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CartRepository
     */
    protected function getCartRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CartRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CartRuleRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CartRuleRepository
     */
    protected function getCartRuleRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRuleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CartRuleRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CategoryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CategoryRepository
     */
    protected function getCategoryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CategoryRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CategoryRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository
     */
    protected function getConfigurationRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CountryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CountryRepository
     */
    protected function getCountryRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CountryRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CountryRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CurrencyRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CurrencyRepository
     */
    protected function getCurrencyRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CurrencyRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CustomPriceRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CustomPriceRepository
     */
    protected function getCustomPriceRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CustomPriceRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CustomPriceRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CustomerRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CustomerRepository
     */
    protected function getCustomerRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CustomerRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CustomerRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\DeletedObjectsRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\DeletedObjectsRepository
     */
    protected function getDeletedObjectsRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\DeletedObjectsRepository'] = new \PrestaShop\Module\PsEventbus\Repository\DeletedObjectsRepository(($this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] ?? $this->getErrorHandler2Service()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\EmployeeRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\EmployeeRepository
     */
    protected function getEmployeeRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EmployeeRepository'] = new \PrestaShop\Module\PsEventbus\Repository\EmployeeRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\EventbusSyncRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\EventbusSyncRepository
     */
    protected function getEventbusSyncRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EventbusSyncRepository'] = new \PrestaShop\Module\PsEventbus\Repository\EventbusSyncRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\GoogleTaxonomyRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\GoogleTaxonomyRepository
     */
    protected function getGoogleTaxonomyRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\GoogleTaxonomyRepository'] = new \PrestaShop\Module\PsEventbus\Repository\GoogleTaxonomyRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ImageRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ImageRepository
     */
    protected function getImageRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ImageRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ImageRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ImageTypeRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ImageTypeRepository
     */
    protected function getImageTypeRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ImageTypeRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ImageTypeRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\IncrementalSyncRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\IncrementalSyncRepository
     */
    protected function getIncrementalSyncRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\IncrementalSyncRepository'] = new \PrestaShop\Module\PsEventbus\Repository\IncrementalSyncRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] ?? $this->getErrorHandler2Service()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\LanguageRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\LanguageRepository
     */
    protected function getLanguageRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] = new \PrestaShop\Module\PsEventbus\Repository\LanguageRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\LiveSyncRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\LiveSyncRepository
     */
    protected function getLiveSyncRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LiveSyncRepository'] = new \PrestaShop\Module\PsEventbus\Repository\LiveSyncRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ManufacturerRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ManufacturerRepository
     */
    protected function getManufacturerRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ManufacturerRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ManufacturerRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ModuleRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ModuleRepository
     */
    protected function getModuleRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ModuleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ModuleRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\OrderCartRuleRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\OrderCartRuleRepository
     */
    protected function getOrderCartRuleRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderCartRuleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderCartRuleRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\OrderDetailsRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\OrderDetailsRepository
     */
    protected function getOrderDetailsRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderDetailsRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderDetailsRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\OrderHistoryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\OrderHistoryRepository
     */
    protected function getOrderHistoryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderHistoryRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderHistoryRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\OrderRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\OrderRepository
     */
    protected function getOrderRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ProductCarrierRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ProductCarrierRepository
     */
    protected function getProductCarrierRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductCarrierRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ProductCarrierRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ProductRepository
     */
    protected function getProductRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ProductRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ProductSupplierRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ProductSupplierRepository
     */
    protected function getProductSupplierRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductSupplierRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ProductSupplierRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ServerInformationRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ServerInformationRepository
     */
    protected function getServerInformationRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ServerInformationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ServerInformationRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService'] ?? $this->getPsAccountsAdapterServiceService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CurrencyRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] ?? $this->getLanguageRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ShopRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] ?? $this->getErrorHandler2Service()), ['EVENT_BUS_SYNC_API_URL' => 'https://eventbus-sync.psessentials.net', 'EVENT_BUS_LIVE_SYNC_API_URL' => 'https://api.cloudsync.prestashop.com/live-sync/v1', 'EVENT_BUS_PROXY_API_URL' => 'https://eventbus-proxy.psessentials.net']);
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ShopRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ShopRepository
     */
    protected function getShopRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ShopRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\SpecificPriceRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\SpecificPriceRepository
     */
    protected function getSpecificPriceRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\SpecificPriceRepository'] = new \PrestaShop\Module\PsEventbus\Repository\SpecificPriceRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\StateRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\StateRepository
     */
    protected function getStateRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StateRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StateRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\StockMvtRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\StockMvtRepository
     */
    protected function getStockMvtRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StockMvtRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StockMvtRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\StockRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\StockRepository
     */
    protected function getStockRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StockRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StockRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\StoreRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\StoreRepository
     */
    protected function getStoreRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StoreRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StoreRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\SupplierRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\SupplierRepository
     */
    protected function getSupplierRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\SupplierRepository'] = new \PrestaShop\Module\PsEventbus\Repository\SupplierRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\TaxRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\TaxRepository
     */
    protected function getTaxRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\TaxRepository'] = new \PrestaShop\Module\PsEventbus\Repository\TaxRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ThemeRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ThemeRepository
     */
    protected function getThemeRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ThemeRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ThemeRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\TranslationRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\TranslationRepository
     */
    protected function getTranslationRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\TranslationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\TranslationRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\WishlistProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\WishlistProductRepository
     */
    protected function getWishlistProductRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\WishlistProductRepository'] = new \PrestaShop\Module\PsEventbus\Repository\WishlistProductRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\WishlistRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\WishlistRepository
     */
    protected function getWishlistRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\WishlistRepository'] = new \PrestaShop\Module\PsEventbus\Repository\WishlistRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\ApiAuthorizationService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\ApiAuthorizationService
     */
    protected function getApiAuthorizationServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\ApiAuthorizationService'] = new \PrestaShop\Module\PsEventbus\Service\ApiAuthorizationService(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EventbusSyncRepository'] ?? $this->getEventbusSyncRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Api\\SyncApiClient'] ?? $this->getSyncApiClientService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\CacheService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\CacheService
     */
    protected function getCacheServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\CacheService'] = new \PrestaShop\Module\PsEventbus\Service\CacheService();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\CompressionService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\CompressionService
     */
    protected function getCompressionServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\CompressionService'] = new \PrestaShop\Module\PsEventbus\Service\CompressionService(($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\JsonFormatter())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\DeletedObjectsService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\DeletedObjectsService
     */
    protected function getDeletedObjectsServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\DeletedObjectsService'] = new \PrestaShop\Module\PsEventbus\Service\DeletedObjectsService(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\DeletedObjectsRepository'] ?? $this->getDeletedObjectsRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Service\\ProxyService'] ?? $this->getProxyServiceService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\PresenterService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\PresenterService
     */
    protected function getPresenterServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\PresenterService'] = new \PrestaShop\Module\PsEventbus\Service\PresenterService();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\ProxyService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\ProxyService
     */
    protected function getProxyServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\ProxyService'] = new \PrestaShop\Module\PsEventbus\Service\ProxyService(($this->services['PrestaShop\\Module\\PsEventbus\\Api\\CollectorApiClient'] ?? $this->getCollectorApiClientService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\JsonFormatter())), ($this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] ?? $this->getErrorHandler2Service()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\PsAccountsAdapterService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\PsAccountsAdapterService
     */
    protected function getPsAccountsAdapterServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService'] = new \PrestaShop\Module\PsEventbus\Service\PsAccountsAdapterService(($this->services['ps_eventbus.helper.module'] ?? $this->getPsEventbus_Helper_ModuleService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\SpecificPriceService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\SpecificPriceService
     */
    protected function getSpecificPriceServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\SpecificPriceService'] = new \PrestaShop\Module\PsEventbus\Service\SpecificPriceService(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\SpecificPriceRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\SpecificPriceRepository'] = new \PrestaShop\Module\PsEventbus\Repository\SpecificPriceRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\SynchronizationService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\SynchronizationService
     */
    protected function getSynchronizationServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\SynchronizationService'] = new \PrestaShop\Module\PsEventbus\Service\SynchronizationService(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EventbusSyncRepository'] ?? $this->getEventbusSyncRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\IncrementalSyncRepository'] ?? $this->getIncrementalSyncRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LiveSyncRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LiveSyncRepository'] = new \PrestaShop\Module\PsEventbus\Repository\LiveSyncRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Service\\ProxyService'] ?? $this->getProxyServiceService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\PayloadDecorator'] ?? $this->getPayloadDecoratorService()));
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
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Adapter\ConfigurationAdapter' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Adapter\ConfigurationAdapter
     */
    protected function getConfigurationAdapter2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Adapter\ConfigurationAdapter(($this->services['psxmarketingwithgoogle.shop'] ?? $this->getPsxmarketingwithgoogle_ShopService())->id);
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer
     */
    protected function getTemplateBuffer2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Config\Env' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Config\Env
     */
    protected function getEnv3Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Config\\Env'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Config\Env();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Conversion\EnhancedConversionToggle' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Conversion\EnhancedConversionToggle
     */
    protected function getEnhancedConversionToggleService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Conversion\\EnhancedConversionToggle'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Conversion\EnhancedConversionToggle(($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapter2Service()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Conversion\UserDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Conversion\UserDataProvider
     */
    protected function getUserDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Conversion\\UserDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Conversion\UserDataProvider(($this->services['psxmarketingwithgoogle.customer'] ?? $this->getPsxmarketingwithgoogle_CustomerService()), ($this->services['psxmarketingwithgoogle.cart'] ?? $this->getPsxmarketingwithgoogle_CartService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Handler\ErrorHandler' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Handler\ErrorHandler
     */
    protected function getErrorHandler3Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\ErrorHandler'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Handler\ErrorHandler();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Handler\RemarketingHookHandler' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Handler\RemarketingHookHandler
     */
    protected function getRemarketingHookHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\RemarketingHookHandler'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Handler\RemarketingHookHandler(($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapter2Service()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer'] ?? ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer())), ($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()), ($this->services['psxmarketingwithgoogle'] ?? $this->getPsxmarketingwithgoogleService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\CartEventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\CartEventDataProvider
     */
    protected function getCartEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\CartEventDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\CartEventDataProvider(($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\PageViewEventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\PageViewEventDataProvider
     */
    protected function getPageViewEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PageViewEventDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\PageViewEventDataProvider(($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\ProductDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\ProductDataProvider
     */
    protected function getProductDataProvider2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\ProductDataProvider(($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\PurchaseEventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\PurchaseEventDataProvider
     */
    protected function getPurchaseEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PurchaseEventDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\PurchaseEventDataProvider(($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider'] ?? $this->getProductDataProvider2Service()), ($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapter2Service()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository'] ?? $this->getLanguageRepository2Service()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository'] ?? $this->getCountryRepository3Service()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\VerificationTagDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\VerificationTagDataProvider
     */
    protected function getVerificationTagDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\VerificationTagDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\VerificationTagDataProvider(($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapter2Service()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository'] ?? $this->getVerificationTagRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\AttributesRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\AttributesRepository
     */
    protected function getAttributesRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\AttributesRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\AttributesRepository(($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CarrierRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CarrierRepository
     */
    protected function getCarrierRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CarrierRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CarrierRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CategoryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CategoryRepository
     */
    protected function getCategoryRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CategoryRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CategoryRepository(($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CountryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CountryRepository
     */
    protected function getCountryRepository3Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CountryRepository(($this->services['psxmarketingwithgoogle.db'] ?? $this->getPsxmarketingwithgoogle_DbService()), ($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()), ($this->services['psxmarketingwithgoogle.country'] ?? $this->getPsxmarketingwithgoogle_CountryService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapter2Service()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CurrencyRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CurrencyRepository
     */
    protected function getCurrencyRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CurrencyRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CurrencyRepository(($this->services['psxmarketingwithgoogle.currency'] ?? $this->getPsxmarketingwithgoogle_CurrencyService()), ($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\LanguageRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\LanguageRepository
     */
    protected function getLanguageRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\LanguageRepository(($this->services['psxmarketingwithgoogle.shop'] ?? $this->getPsxmarketingwithgoogle_ShopService())->id);
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\ManufacturerRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\ManufacturerRepository
     */
    protected function getManufacturerRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ManufacturerRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\ManufacturerRepository(($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\ProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\ProductRepository
     */
    protected function getProductRepository3Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ProductRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\ProductRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\StateRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\StateRepository
     */
    protected function getStateRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\StateRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\StateRepository(($this->services['psxmarketingwithgoogle.db'] ?? $this->getPsxmarketingwithgoogle_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\TabRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TabRepository
     */
    protected function getTabRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TabRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TabRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\TaxRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TaxRepository
     */
    protected function getTaxRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TaxRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TaxRepository(($this->services['psxmarketingwithgoogle.db'] ?? $this->getPsxmarketingwithgoogle_DbService()), ($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\VerificationTagRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\VerificationTagRepository
     */
    protected function getVerificationTagRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\VerificationTagRepository(($this->services['psxmarketingwithgoogle.db'] ?? $this->getPsxmarketingwithgoogle_DbService()), ($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Tracker\Segment' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Tracker\Segment
     */
    protected function getSegment2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Tracker\\Segment'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Tracker\Segment(($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected function getConfiguration2Service()
    {
        return $this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration();
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\ContextStateManager' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\ContextStateManager
     */
    protected function getContextStateManager2Service()
    {
        return $this->services['PrestaShop\\PrestaShop\\Adapter\\ContextStateManager'] = new \PrestaShop\PrestaShop\Adapter\ContextStateManager(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService()));
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider
     */
    protected function getCurrencyDataProvider2Service()
    {
        return $this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] = new \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider(($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ((($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->shop) ? (($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->shop->id) : (null)));
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\LegacyContext' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\LegacyContext
     */
    protected function getLegacyContextService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext('/mails/themes', ($this->services['PrestaShop\\PrestaShop\\Adapter\\Tools'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Tools'] = new \PrestaShop\PrestaShop\Adapter\Tools())));
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Tools' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Tools
     */
    protected function getToolsService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Adapter\\Tools'] = new \PrestaShop\PrestaShop\Adapter\Tools();
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Core\Localization\Locale\Repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Locale\Repository
     */
    protected function getRepositoryService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Core\\Localization\\Locale\\Repository'] = new \PrestaShop\PrestaShop\Core\Localization\Locale\Repository(($this->services['prestashop.core.localization.cldr.locale_repository'] ?? $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()), ($this->services['prestashop.core.localization.currency.repository'] ?? $this->getPrestashop_Core_Localization_Currency_RepositoryService()));
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
     * Gets the public 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\AnnotationReader();
    }

    /**
     * Gets the public 'array' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getArrayService()
    {
        return $this->services['array'] = (new \PrestaShopBundle\DependencyInjection\CacheAdapterFactory())->getCacheAdapter('array');
    }

    /**
     * Gets the public 'configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected function getConfiguration3Service()
    {
        return $this->services['configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration();
    }

    /**
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'const' => ['privates', 'PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor', 'getRuntimeConstEnvVarProcessorService', false],
        ], [
            'const' => '?',
        ]);
    }

    /**
     * Gets the public 'context' shared service.
     *
     * @return \Context
     */
    protected function getContextService()
    {
        return $this->services['context'] = \Context::getContext();
    }

    /**
     * Gets the public 'db' shared service.
     *
     * @return \Db
     */
    protected function getDbService()
    {
        return $this->services['db'] = \Db::getInstance();
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['driver' => 'pdo_mysql', 'host' => 'localhost', 'port' => '', 'dbname' => 'prestashop', 'user' => 'root', 'password' => '', 'charset' => 'utf8mb4', 'driverOptions' => [1002 => 'SET sql_mode=(SELECT REPLACE(@@sql_mode,\'ONLY_FULL_GROUP_BY\',\'\'))', 1013 => $this->getEnv('const:runtime:_PS_ALLOW_MULTI_STATEMENTS_QUERIES_')], 'defaultTableOptions' => []], new \Doctrine\DBAL\Configuration(), new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this), ['enum' => 'string']);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = new \Doctrine\ORM\Configuration();

        $b = ($this->services['array'] ?? $this->getArrayService());
        $c = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();

        $d = ($this->services['annotation_reader'] ?? ($this->services['annotation_reader'] = new \Doctrine\Common\Annotations\AnnotationReader()));
        $e = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($d, [0 => 'C:\\wamp64\\www\\prestashop\\modules\\productcomments\\src\\Entity']);
        $e->addExcludePaths([0 => 'C:\\wamp64\\www\\prestashop\\modules\\productcomments\\src\\Entity/index.php']);
        $f = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($d, [0 => 'C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\src\\Entity']);
        $f->addExcludePaths([0 => 'C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\src\\Entity/index.php']);
        $g = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($d, [0 => 'C:\\wamp64\\www\\prestashop\\modules\\ps_accounts\\src\\Entity']);
        $g->addExcludePaths([0 => 'C:\\wamp64\\www\\prestashop\\modules\\ps_accounts\\src\\Entity/index.php']);
        $h = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($d, [0 => 'C:\\wamp64\\www\\prestashop\\modules\\ps_checkout\\src\\Entity']);
        $h->addExcludePaths([0 => 'C:\\wamp64\\www\\prestashop\\modules\\ps_checkout\\src\\Entity/index.php']);

        $c->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($d, [0 => 'C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Entity']), 'PrestaShop');
        $c->addDriver($e, 'PrestaShop\\Module\\ProductComment\\Entity');
        $c->addDriver($f, 'PrestaShop\\Module\\PsxDesign\\Entity');
        $c->addDriver($g, 'PrestaShop\\Module\\PsAccounts\\Entity');
        $c->addDriver($h, 'PrestaShop\\Module\\PrestashopCheckout\\Entity');

        $a->setEntityNamespaces(['PrestaShopBundle\\Entity' => 'PrestaShop']);
        $a->setMetadataCache($b);
        $a->setQueryCache($b);
        $a->setResultCache($b);
        $a->setMetadataDriverImpl($c);
        $a->setProxyDir('C:\\wamp64\\www\\prestashop/var/cache/prod\\/doctrine/orm/Proxies');
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(false);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(($this->services['prestashop.database.naming_strategy'] ?? ($this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('ps_'))));
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\ServiceLocator([])));
        $a->addCustomStringFunction('regexp', 'DoctrineExtensions\\Query\\Mysql\\Regexp');
        $a->addEntityNamespace('Moduleproductcomments', 'PrestaShop\\Module\\ProductComment\\Entity');
        $a->addEntityNamespace('Modulepsxdesign', 'PrestaShop\\Module\\PsxDesign\\Entity');
        $a->addEntityNamespace('ModulepsAccounts', 'PrestaShop\\Module\\PsAccounts\\Entity');
        $a->addEntityNamespace('ModulepsCheckout', 'PrestaShop\\Module\\PrestashopCheckout\\Entity');

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'hashing' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Crypto\Hashing
     */
    protected function getHashingService()
    {
        return $this->services['hashing'] = new \PrestaShop\PrestaShop\Core\Crypto\Hashing();
    }

    /**
     * Gets the public 'klaviyops.klaviyo_api_wrapper' shared service.
     *
     * @return \KlaviyoPs\Classes\KlaviyoApiWrapper
     */
    protected function getKlaviyops_KlaviyoApiWrapperService()
    {
        return $this->services['klaviyops.klaviyo_api_wrapper'] = new \KlaviyoPs\Classes\KlaviyoApiWrapper();
    }

    /**
     * Gets the public 'klaviyops.klaviyo_service.coupon_generator' shared service.
     *
     * @return \KlaviyoPs\Classes\KlaviyoServices\CouponGeneratorService
     */
    protected function getKlaviyops_KlaviyoService_CouponGeneratorService()
    {
        return $this->services['klaviyops.klaviyo_service.coupon_generator'] = new \KlaviyoPs\Classes\KlaviyoServices\CouponGeneratorService(($this->services['klaviyops.prestashop_services.cart_rule'] ?? ($this->services['klaviyops.prestashop_services.cart_rule'] = new \KlaviyoPs\Classes\PrestashopServices\CartRuleService())));
    }

    /**
     * Gets the public 'klaviyops.klaviyo_service.customer_event_service' shared service.
     *
     * @return \KlaviyoPs\Classes\KlaviyoServices\CustomerEventService
     */
    protected function getKlaviyops_KlaviyoService_CustomerEventServiceService()
    {
        return $this->services['klaviyops.klaviyo_service.customer_event_service'] = new \KlaviyoPs\Classes\KlaviyoServices\CustomerEventService(($this->services['klaviyops.prestashop_services.customer'] ?? $this->getKlaviyops_PrestashopServices_CustomerService()));
    }

    /**
     * Gets the public 'klaviyops.klaviyo_service.order_event' shared service.
     *
     * @return \KlaviyoPs\Classes\KlaviyoServices\OrderEventService
     */
    protected function getKlaviyops_KlaviyoService_OrderEventService()
    {
        return $this->services['klaviyops.klaviyo_service.order_event'] = new \KlaviyoPs\Classes\KlaviyoServices\OrderEventService(($this->services['klaviyops.klaviyo_api_wrapper'] ?? ($this->services['klaviyops.klaviyo_api_wrapper'] = new \KlaviyoPs\Classes\KlaviyoApiWrapper())), ($this->services['klaviyops.prestashop_services.order'] ?? $this->getKlaviyops_PrestashopServices_OrderService()), ($this->services['klaviyops.prestashop_services.product'] ?? ($this->services['klaviyops.prestashop_services.product'] = new \KlaviyoPs\Classes\PrestashopServices\ProductService())), ($this->services['klaviyops.klaviyo_service.customer_event_service'] ?? $this->getKlaviyops_KlaviyoService_CustomerEventServiceService()));
    }

    /**
     * Gets the public 'klaviyops.module' shared service.
     *
     * @return \KlaviyoPsModule
     */
    protected function getKlaviyops_ModuleService()
    {
        return $this->services['klaviyops.module'] = \KlaviyoPsModule::getInstance();
    }

    /**
     * Gets the public 'klaviyops.prestashop_components.context' shared service.
     *
     * @return \Context
     */
    protected function getKlaviyops_PrestashopComponents_ContextService()
    {
        return $this->services['klaviyops.prestashop_components.context'] = \Context::getContext();
    }

    /**
     * Gets the public 'klaviyops.prestashop_services.cart_rule' shared service.
     *
     * @return \KlaviyoPs\Classes\PrestashopServices\CartRuleService
     */
    protected function getKlaviyops_PrestashopServices_CartRuleService()
    {
        return $this->services['klaviyops.prestashop_services.cart_rule'] = new \KlaviyoPs\Classes\PrestashopServices\CartRuleService();
    }

    /**
     * Gets the public 'klaviyops.prestashop_services.context' shared service.
     *
     * @return \KlaviyoPs\Classes\PrestashopServices\ContextService
     */
    protected function getKlaviyops_PrestashopServices_ContextService()
    {
        return $this->services['klaviyops.prestashop_services.context'] = new \KlaviyoPs\Classes\PrestashopServices\ContextService(($this->services['klaviyops.prestashop_components.context'] ?? $this->getKlaviyops_PrestashopComponents_ContextService()));
    }

    /**
     * Gets the public 'klaviyops.prestashop_services.customer' shared service.
     *
     * @return \KlaviyoPs\Classes\PrestashopServices\CustomerService
     */
    protected function getKlaviyops_PrestashopServices_CustomerService()
    {
        return $this->services['klaviyops.prestashop_services.customer'] = new \KlaviyoPs\Classes\PrestashopServices\CustomerService(($this->services['klaviyops.prestashop_services.validate'] ?? ($this->services['klaviyops.prestashop_services.validate'] = new \KlaviyoPs\Classes\PrestashopServices\ValidateService())));
    }

    /**
     * Gets the public 'klaviyops.prestashop_services.datetime' shared service.
     *
     * @return \KlaviyoPs\Classes\PrestashopServices\DateTimeService
     */
    protected function getKlaviyops_PrestashopServices_DatetimeService()
    {
        return $this->services['klaviyops.prestashop_services.datetime'] = new \KlaviyoPs\Classes\PrestashopServices\DateTimeService();
    }

    /**
     * Gets the public 'klaviyops.prestashop_services.logger' shared service.
     *
     * @return \KlaviyoPs\Classes\PrestashopServices\LoggerService
     */
    protected function getKlaviyops_PrestashopServices_LoggerService()
    {
        return $this->services['klaviyops.prestashop_services.logger'] = new \KlaviyoPs\Classes\PrestashopServices\LoggerService();
    }

    /**
     * Gets the public 'klaviyops.prestashop_services.order' shared service.
     *
     * @return \KlaviyoPs\Classes\PrestashopServices\OrderService
     */
    protected function getKlaviyops_PrestashopServices_OrderService()
    {
        return $this->services['klaviyops.prestashop_services.order'] = new \KlaviyoPs\Classes\PrestashopServices\OrderService(($this->services['klaviyops.prestashop_services.context'] ?? $this->getKlaviyops_PrestashopServices_ContextService()), ($this->services['klaviyops.prestashop_services.product'] ?? ($this->services['klaviyops.prestashop_services.product'] = new \KlaviyoPs\Classes\PrestashopServices\ProductService())), ($this->services['klaviyops.prestashop_services.customer'] ?? $this->getKlaviyops_PrestashopServices_CustomerService()));
    }

    /**
     * Gets the public 'klaviyops.prestashop_services.product' shared service.
     *
     * @return \KlaviyoPs\Classes\PrestashopServices\ProductService
     */
    protected function getKlaviyops_PrestashopServices_ProductService()
    {
        return $this->services['klaviyops.prestashop_services.product'] = new \KlaviyoPs\Classes\PrestashopServices\ProductService();
    }

    /**
     * Gets the public 'klaviyops.prestashop_services.validate' shared service.
     *
     * @return \KlaviyoPs\Classes\PrestashopServices\ValidateService
     */
    protected function getKlaviyops_PrestashopServices_ValidateService()
    {
        return $this->services['klaviyops.prestashop_services.validate'] = new \KlaviyoPs\Classes\PrestashopServices\ValidateService();
    }

    /**
     * Gets the public 'klaviyops.util_services.csv' shared service.
     *
     * @return \KlaviyoPs\Classes\UtilServices\CsvService
     */
    protected function getKlaviyops_UtilServices_CsvService()
    {
        return $this->services['klaviyops.util_services.csv'] = new \KlaviyoPs\Classes\UtilServices\CsvService();
    }

    /**
     * Gets the public 'klaviyops.util_services.env' shared service.
     *
     * @return \KlaviyoPs\Classes\UtilServices\EnvService
     */
    protected function getKlaviyops_UtilServices_EnvService()
    {
        return $this->services['klaviyops.util_services.env'] = new \KlaviyoPs\Classes\UtilServices\EnvService(($this->services['klaviyops.module'] ?? $this->getKlaviyops_ModuleService()));
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.country' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_CountryService()
    {
        return $this->services['prestashop.adapter.data_provider.country'] = new \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider();
    }

    /**
     * Gets the public 'prestashop.adapter.environment' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Environment
     */
    protected function getPrestashop_Adapter_EnvironmentService()
    {
        return $this->services['prestashop.adapter.environment'] = new \PrestaShop\PrestaShop\Adapter\Environment(false);
    }

    /**
     * Gets the public 'prestashop.adapter.module.repository.module_repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository
     */
    protected function getPrestashop_Adapter_Module_Repository_ModuleRepositoryService()
    {
        return $this->services['prestashop.adapter.module.repository.module_repository'] = new \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository('C:\\wamp64\\www\\prestashop', 'C:\\wamp64\\www\\prestashop/modules/');
    }

    /**
     * Gets the public 'prestashop.adapter.validate' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Validate
     */
    protected function getPrestashop_Adapter_ValidateService()
    {
        return $this->services['prestashop.adapter.validate'] = new \PrestaShop\PrestaShop\Adapter\Validate();
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.advanced_factory' shared service.
     *
     * @return \PrestaShop\CircuitBreaker\AdvancedCircuitBreakerFactory
     */
    protected function getPrestashop_Core_CircuitBreaker_AdvancedFactoryService()
    {
        return $this->services['prestashop.core.circuit_breaker.advanced_factory'] = new \PrestaShop\CircuitBreaker\AdvancedCircuitBreakerFactory();
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.cache' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getPrestashop_Core_CircuitBreaker_CacheService()
    {
        return $this->services['prestashop.core.circuit_breaker.cache'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('', 0, (($this->services['prestashop.adapter.environment'] ?? ($this->services['prestashop.adapter.environment'] = new \PrestaShop\PrestaShop\Adapter\Environment(false)))->getCacheDir() . "/circuit_breaker"));
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.doctrine_cache' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getPrestashop_Core_CircuitBreaker_DoctrineCacheService()
    {
        return $this->services['prestashop.core.circuit_breaker.doctrine_cache'] = new \Symfony\Component\Cache\DoctrineProvider(($this->services['prestashop.core.circuit_breaker.cache'] ?? $this->getPrestashop_Core_CircuitBreaker_CacheService()));
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.storage' shared service.
     *
     * @return \PrestaShop\CircuitBreaker\Storage\DoctrineCache
     */
    protected function getPrestashop_Core_CircuitBreaker_StorageService()
    {
        return $this->services['prestashop.core.circuit_breaker.storage'] = new \PrestaShop\CircuitBreaker\Storage\DoctrineCache(($this->services['prestashop.core.circuit_breaker.doctrine_cache'] ?? $this->getPrestashop_Core_CircuitBreaker_DoctrineCacheService()));
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.cart' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CartFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_CartService()
    {
        return $this->services['prestashop.core.filter.front_end_object.cart'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CartFilter(($this->services['prestashop.core.filter.front_end_object.product_collection'] ?? $this->getPrestashop_Core_Filter_FrontEndObject_ProductCollectionService()));
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ConfigurationFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ConfigurationService()
    {
        return $this->services['prestashop.core.filter.front_end_object.configuration'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ConfigurationFilter();
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.customer' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CustomerFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_CustomerService()
    {
        return $this->services['prestashop.core.filter.front_end_object.customer'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CustomerFilter();
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.main' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\MainFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_MainService()
    {
        return $this->services['prestashop.core.filter.front_end_object.main'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\MainFilter(['cart' => ($this->services['prestashop.core.filter.front_end_object.cart'] ?? $this->getPrestashop_Core_Filter_FrontEndObject_CartService()), 'customer' => ($this->services['prestashop.core.filter.front_end_object.customer'] ?? ($this->services['prestashop.core.filter.front_end_object.customer'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CustomerFilter())), 'shop' => ($this->services['prestashop.core.filter.front_end_object.shop'] ?? ($this->services['prestashop.core.filter.front_end_object.shop'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ShopFilter())), 'configuration' => ($this->services['prestashop.core.filter.front_end_object.configuration'] ?? ($this->services['prestashop.core.filter.front_end_object.configuration'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ConfigurationFilter()))]);
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.product' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ProductFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ProductService()
    {
        return $this->services['prestashop.core.filter.front_end_object.product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ProductFilter();
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.product_collection' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\CollectionFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ProductCollectionService()
    {
        $this->services['prestashop.core.filter.front_end_object.product_collection'] = $instance = new \PrestaShop\PrestaShop\Core\Filter\CollectionFilter();

        $instance->queue([0 => ($this->services['prestashop.core.filter.front_end_object.product'] ?? ($this->services['prestashop.core.filter.front_end_object.product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ProductFilter()))]);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.search_result_product' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchResultProductFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_SearchResultProductService()
    {
        return $this->services['prestashop.core.filter.front_end_object.search_result_product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchResultProductFilter();
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.search_result_product_collection' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\CollectionFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_SearchResultProductCollectionService()
    {
        $this->services['prestashop.core.filter.front_end_object.search_result_product_collection'] = $instance = new \PrestaShop\PrestaShop\Core\Filter\CollectionFilter();

        $instance->queue([0 => ($this->services['prestashop.core.filter.front_end_object.search_result_product'] ?? ($this->services['prestashop.core.filter.front_end_object.search_result_product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchResultProductFilter()))]);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.shop' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ShopFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ShopService()
    {
        return $this->services['prestashop.core.filter.front_end_object.shop'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ShopFilter();
    }

    /**
     * Gets the public 'prestashop.core.localization.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getPrestashop_Core_Localization_Cache_AdapterService()
    {
        return $this->services['prestashop.core.localization.cache.adapter'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getPrestashop_Core_Localization_Cldr_Cache_AdapterService()
    {
        return $this->services['prestashop.core.localization.cldr.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('CLDR', 0, 'C:\\wamp64\\www\\prestashop/var/cache/prod\\/localization');
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.datalayer.locale_cache' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleCache
     */
    protected function getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService()
    {
        $this->services['prestashop.core.localization.cldr.datalayer.locale_cache'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleCache(($this->services['prestashop.core.localization.cldr.cache.adapter'] ?? ($this->services['prestashop.core.localization.cldr.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('CLDR', 0, 'C:\\wamp64\\www\\prestashop/var/cache/prod\\/localization'))));

        $instance->setLowerLayer(($this->services['prestashop.core.localization.cldr.datalayer.locale_reference'] ?? $this->getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService()));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.datalayer.locale_reference' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleReference
     */
    protected function getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService()
    {
        return $this->services['prestashop.core.localization.cldr.datalayer.locale_reference'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleReference(($this->services['prestashop.core.localization.cldr.reader'] ?? ($this->services['prestashop.core.localization.cldr.reader'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader())));
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.locale_data_source' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataSource
     */
    protected function getPrestashop_Core_Localization_Cldr_LocaleDataSourceService()
    {
        return $this->services['prestashop.core.localization.cldr.locale_data_source'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataSource(($this->services['prestashop.core.localization.cldr.datalayer.locale_cache'] ?? $this->getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.locale_repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository
     */
    protected function getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()
    {
        return $this->services['prestashop.core.localization.cldr.locale_repository'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository(($this->services['prestashop.core.localization.cldr.locale_data_source'] ?? $this->getPrestashop_Core_Localization_Cldr_LocaleDataSourceService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.reader' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader
     */
    protected function getPrestashop_Core_Localization_Cldr_ReaderService()
    {
        return $this->services['prestashop.core.localization.cldr.reader'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader();
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.datasource' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataSource
     */
    protected function getPrestashop_Core_Localization_Currency_DatasourceService()
    {
        return $this->services['prestashop.core.localization.currency.datasource'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataSource(($this->services['prestashop.core.localization.currency.middleware.cache'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_CacheService()), ($this->services['prestashop.core.localization.currency.middleware.installed'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_InstalledService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.cache' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyCache
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_CacheService()
    {
        $this->services['prestashop.core.localization.currency.middleware.cache'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyCache(($this->services['prestashop.core.localization.cache.adapter'] ?? ($this->services['prestashop.core.localization.cache.adapter'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())));

        $instance->setLowerLayer(($this->services['prestashop.core.localization.currency.middleware.database'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_DatabaseService()));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.database' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyDatabase
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_DatabaseService()
    {
        $this->services['prestashop.core.localization.currency.middleware.database'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyDatabase(($this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] ?? $this->getCurrencyDataProvider2Service()));

        $instance->setLowerLayer(($this->services['prestashop.core.localization.currency.middleware.reference'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_ReferenceService()));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.installed' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_InstalledService()
    {
        return $this->services['prestashop.core.localization.currency.middleware.installed'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled(($this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] ?? $this->getCurrencyDataProvider2Service()));
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.reference' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyReference
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_ReferenceService()
    {
        return $this->services['prestashop.core.localization.currency.middleware.reference'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyReference(($this->services['prestashop.core.localization.cldr.locale_repository'] ?? $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\Repository
     */
    protected function getPrestashop_Core_Localization_Currency_RepositoryService()
    {
        return $this->services['prestashop.core.localization.currency.repository'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\Repository(($this->services['prestashop.core.localization.currency.datasource'] ?? $this->getPrestashop_Core_Localization_Currency_DatasourceService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.locale.context_locale' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Locale
     */
    protected function getPrestashop_Core_Localization_Locale_ContextLocaleService()
    {
        return $this->services['prestashop.core.localization.locale.context_locale'] = ($this->services['PrestaShop\\PrestaShop\\Core\\Localization\\Locale\\Repository'] ?? $this->getRepositoryService())->getLocale(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->language->getLocale());
    }

    /**
     * Gets the public 'prestashop.core.string.character_cleaner' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\String\CharacterCleaner
     *
     * @deprecated The "prestashop.core.string.character_cleaner" service is deprecated. You should stop using it, as it will be removed in the future.
     */
    protected function getPrestashop_Core_String_CharacterCleanerService()
    {
        @trigger_error('The "prestashop.core.string.character_cleaner" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        return $this->services['prestashop.core.string.character_cleaner'] = new \PrestaShop\PrestaShop\Core\String\CharacterCleaner();
    }

    /**
     * Gets the public 'prestashop.database.naming_strategy' shared service.
     *
     * @return \PrestaShopBundle\Service\Database\DoctrineNamingStrategy
     */
    protected function getPrestashop_Database_NamingStrategyService()
    {
        return $this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('ps_');
    }

    /**
     * Gets the public 'prestashop.translation.translator_language_loader' shared service.
     *
     * @return \PrestaShopBundle\Translation\TranslatorLanguageLoader
     */
    protected function getPrestashop_Translation_TranslatorLanguageLoaderService()
    {
        return $this->services['prestashop.translation.translator_language_loader'] = new \PrestaShopBundle\Translation\TranslatorLanguageLoader(($this->services['prestashop.adapter.module.repository.module_repository'] ?? ($this->services['prestashop.adapter.module.repository.module_repository'] = new \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository('C:\\wamp64\\www\\prestashop', 'C:\\wamp64\\www\\prestashop/modules/'))));
    }

    /**
     * Gets the public 'product_comment_criterion_repository' shared service.
     *
     * @return \PrestaShop\Module\ProductComment\Repository\ProductCommentCriterionRepository
     */
    protected function getProductCommentCriterionRepositoryService()
    {
        return $this->services['product_comment_criterion_repository'] = new \PrestaShop\Module\ProductComment\Repository\ProductCommentCriterionRepository(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'ps_');
    }

    /**
     * Gets the public 'product_comment_repository' shared service.
     *
     * @return \PrestaShop\Module\ProductComment\Repository\ProductCommentRepository
     */
    protected function getProductCommentRepositoryService()
    {
        return $this->services['product_comment_repository'] = new \PrestaShop\Module\ProductComment\Repository\ProductCommentRepository(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'ps_', ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("PRODUCT_COMMENTS_ALLOW_GUESTS"), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("PRODUCT_COMMENTS_MINIMAL_TIME"));
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

    /**
     * Gets the public 'ps_eventbus' shared service.
     *
     * @return \Ps_eventbus
     */
    protected function getPsEventbusService()
    {
        return $this->services['ps_eventbus'] = \Module::getInstanceByName('ps_eventbus');
    }

    /**
     * Gets the public 'ps_eventbus.context' shared service.
     *
     * @return \Context
     */
    protected function getPsEventbus_ContextService()
    {
        return $this->services['ps_eventbus.context'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getContext();
    }

    /**
     * Gets the public 'ps_eventbus.controller' shared service.
     *
     * @return \Controller
     */
    protected function getPsEventbus_ControllerService()
    {
        return $this->services['ps_eventbus.controller'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getController();
    }

    /**
     * Gets the public 'ps_eventbus.cookie' shared service.
     *
     * @return \Cookie
     */
    protected function getPsEventbus_CookieService()
    {
        return $this->services['ps_eventbus.cookie'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getCookie();
    }

    /**
     * Gets the public 'ps_eventbus.currency' shared service.
     *
     * @return \Currency
     */
    protected function getPsEventbus_CurrencyService()
    {
        return $this->services['ps_eventbus.currency'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getCurrency();
    }

    /**
     * Gets the public 'ps_eventbus.db' shared service.
     *
     * @return \Db
     */
    protected function getPsEventbus_DbService()
    {
        return $this->services['ps_eventbus.db'] = \Db::getInstance();
    }

    /**
     * Gets the public 'ps_eventbus.helper.module' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Helper\ModuleHelper
     */
    protected function getPsEventbus_Helper_ModuleService()
    {
        return $this->services['ps_eventbus.helper.module'] = new \PrestaShop\Module\PsEventbus\Helper\ModuleHelper(($this->services['ps_eventbus'] ?? $this->getPsEventbusService()));
    }

    /**
     * Gets the public 'ps_eventbus.language' shared service.
     *
     * @return \Language
     */
    protected function getPsEventbus_LanguageService()
    {
        return $this->services['ps_eventbus.language'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getLanguage();
    }

    /**
     * Gets the public 'ps_eventbus.link' shared service.
     *
     * @return \Link
     */
    protected function getPsEventbus_LinkService()
    {
        return $this->services['ps_eventbus.link'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getLink();
    }

    /**
     * Gets the public 'ps_eventbus.shop' shared service.
     *
     * @return \Shop
     */
    protected function getPsEventbus_ShopService()
    {
        return $this->services['ps_eventbus.shop'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getShop();
    }

    /**
     * Gets the public 'ps_eventbus.smarty' shared service.
     *
     * @return \Smarty
     */
    protected function getPsEventbus_SmartyService()
    {
        return $this->services['ps_eventbus.smarty'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getSmarty();
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
     * Gets the public 'psxmarketingwithgoogle' shared service.
     *
     * @return \PsxMarketingWithGoogle
     */
    protected function getPsxmarketingwithgoogleService()
    {
        return $this->services['psxmarketingwithgoogle'] = \Module::getInstanceByName('psxmarketingwithgoogle');
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.cart' shared service.
     *
     * @return \Currency
     */
    protected function getPsxmarketingwithgoogle_CartService()
    {
        return $this->services['psxmarketingwithgoogle.cart'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCart();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.context' shared service.
     *
     * @return \Context
     */
    protected function getPsxmarketingwithgoogle_ContextService()
    {
        return $this->services['psxmarketingwithgoogle.context'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getContext();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.controller' shared service.
     *
     * @return \Controller
     */
    protected function getPsxmarketingwithgoogle_ControllerService()
    {
        return $this->services['psxmarketingwithgoogle.controller'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getController();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.cookie' shared service.
     *
     * @return \Cookie
     */
    protected function getPsxmarketingwithgoogle_CookieService()
    {
        return $this->services['psxmarketingwithgoogle.cookie'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCookie();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.country' shared service.
     *
     * @return \Country
     */
    protected function getPsxmarketingwithgoogle_CountryService()
    {
        return $this->services['psxmarketingwithgoogle.country'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCountry();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.currency' shared service.
     *
     * @return \Currency
     */
    protected function getPsxmarketingwithgoogle_CurrencyService()
    {
        return $this->services['psxmarketingwithgoogle.currency'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCurrency();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.customer' shared service.
     *
     * @return \Currency
     */
    protected function getPsxmarketingwithgoogle_CustomerService()
    {
        return $this->services['psxmarketingwithgoogle.customer'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCustomer();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.db' shared service.
     *
     * @return \Db
     */
    protected function getPsxmarketingwithgoogle_DbService()
    {
        return $this->services['psxmarketingwithgoogle.db'] = \Db::getInstance();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.language' shared service.
     *
     * @return \Language
     */
    protected function getPsxmarketingwithgoogle_LanguageService()
    {
        return $this->services['psxmarketingwithgoogle.language'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getLanguage();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.link' shared service.
     *
     * @return \Shop
     */
    protected function getPsxmarketingwithgoogle_LinkService()
    {
        return $this->services['psxmarketingwithgoogle.link'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getLink();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.shop' shared service.
     *
     * @return \Shop
     */
    protected function getPsxmarketingwithgoogle_ShopService()
    {
        return $this->services['psxmarketingwithgoogle.shop'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getShop();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.smarty' shared service.
     *
     * @return \Smarty
     */
    protected function getPsxmarketingwithgoogle_SmartyService()
    {
        return $this->services['psxmarketingwithgoogle.smarty'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getSmarty();
    }

    /**
     * Gets the private 'PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor' shared service.
     *
     * @return \PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor
     */
    protected function getRuntimeConstEnvVarProcessorService()
    {
        return $this->privates['PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor'] = new \PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor();
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

    /**
     * Gets the public 'prestashop.adapter.tools' alias.
     *
     * @return object The "PrestaShop\PrestaShop\Adapter\Tools" service.
     */
    protected function getPrestashop_Adapter_ToolsService()
    {
        @trigger_error('The "prestashop.adapter.tools" service alias is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        return $this->get('PrestaShop\\PrestaShop\\Adapter\\Tools');
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
            'database_host' => 'localhost',
            'database_port' => '',
            'database_name' => 'prestashop',
            'database_user' => 'root',
            'database_password' => '',
            'database_prefix' => 'ps_',
            'database_engine' => 'InnoDB',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'XrRT5QGoFjIbgmk6Gn9hb2cBidegw30npx3uxwhv89mm40kfkvXPapchu85WODcj',
            'ps_caching' => 'CacheMemcache',
            'ps_cache_enable' => false,
            'ps_creation_date' => '2024-07-08',
            'locale' => 'fr-FR',
            'use_debug_toolbar' => true,
            'cookie_key' => 'Oi1EEWzjwkLtXIUXghRaeEEqMQALH7GIj5j4DuxFsvScScAf1viuVH8inpahwbL4',
            'cookie_iv' => '9NBwL0AAeuE5V7QzbSTd0JQQPTXUR0Cc',
            'new_cookie_key' => 'def00000de5067fa30cb3f22359575b8ed6ec4c45de9bde16285e98a9b479acab946cf3bf4c422b29986dee8ce6e37e65411152c09b1c0a4b7e147d301d05256765ea41c',
            'api_public_key' => '',
            'api_private_key' => '',
            'cache.driver' => 'array',
            'cache.adapter' => 'cache.adapter.array',
            'kernel.bundles' => [

            ],
            'kernel.root_dir' => 'C:\\wamp64\\www\\prestashop/app',
            'kernel.project_dir' => 'C:\\wamp64\\www\\prestashop',
            'kernel.name' => 'app',
            'kernel.debug' => false,
            'kernel.environment' => 'prod',
            'kernel.cache_dir' => 'C:\\wamp64\\www\\prestashop/var/cache/prod\\',
            'kernel.active_modules' => [
                0 => 'ps_linklist',
                1 => 'blockreassurance',
                2 => 'blockwishlist',
                3 => 'psgdpr',
                4 => 'ps_contactinfo',
                5 => 'ps_languageselector',
                6 => 'ps_currencyselector',
                7 => 'ps_customersignin',
                8 => 'ps_shoppingcart',
                9 => 'ps_mainmenu',
                10 => 'ps_searchbar',
                11 => 'ps_imageslider',
                12 => 'ps_featuredproducts',
                13 => 'ps_banner',
                14 => 'ps_customtext',
                15 => 'ps_specials',
                16 => 'ps_newproducts',
                17 => 'ps_bestsellers',
                18 => 'ps_emailsubscription',
                19 => 'ps_socialfollow',
                20 => 'ps_customeraccountlinks',
                21 => 'productcomments',
                22 => 'ps_categorytree',
                23 => 'contactform',
                24 => 'ps_sharebuttons',
                25 => 'psassistant',
                26 => 'ps_emailalerts',
                27 => 'gamification',
                28 => 'graphnvd3',
                29 => 'ps_faviconnotificationbo',
                30 => 'ps_accounts',
                31 => 'ps_edition_basic',
                32 => 'ps_eventbus',
                33 => 'gridhtml',
                34 => 'ps_viewedproduct',
                35 => 'ps_checkpayment',
                36 => 'ps_checkout',
                37 => 'ps_wirepayment',
                38 => 'psxmarketingwithgoogle',
                39 => 'ps_facebook',
                40 => 'klaviyopsautomation',
                41 => 'ps_metrics',
                42 => 'statsstock',
                43 => 'statsbestcategories',
                44 => 'statsbestcustomers',
                45 => 'statsbestmanufacturers',
                46 => 'statsbestsuppliers',
                47 => 'statsbestvouchers',
                48 => 'statsbestproducts',
                49 => 'statscarrier',
                50 => 'ps_cashondelivery',
                51 => 'statscheckup',
                52 => 'statscatalog',
                53 => 'ps_crossselling',
                54 => 'statsregistrations',
                55 => 'ps_dataprivacy',
                56 => 'dashactivity',
                57 => 'dashgoals',
                58 => 'dashproducts',
                59 => 'dashtrends',
                60 => 'statsdata',
                61 => 'ps_distributionapiclient',
                62 => 'ps_googleanalytics',
                63 => 'gsitemap',
                64 => 'statsnewsletter',
                65 => 'pagesnotfound',
                66 => 'statsproduct',
                67 => 'ps_categoryproducts',
                68 => 'statspersonalinfos',
                69 => 'statssales',
                70 => 'statssearch',
                71 => 'statsforecast',
                72 => 'ps_themecusto',
                73 => 'ps_facetedsearch',
                74 => 'mbeshipping',
                75 => 'ps_mbo',
                76 => 'psxdesign',
            ],
            'ps_cache_dir' => 'C:\\wamp64\\www\\prestashop/var/cache/prod\\',
            'mail_themes_uri' => '/mails/themes',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.metadata.attribute.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AttributeDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_dir' => 'C:\\wamp64\\www\\prestashop/var/cache/prod\\/doctrine/orm/Proxies',
            'doctrine.orm.proxy_namespace' => 'Proxies',
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
            'ps_eventbus.proxy_api_url' => 'https://eventbus-proxy.psessentials.net',
            'ps_eventbus.sync_api_url' => 'https://eventbus-sync.psessentials.net',
            'ps_eventbus.live_sync_api_url' => 'https://api.cloudsync.prestashop.com/live-sync/v1',
            'ps_eventbus.sentry_dsn' => 'https://457f191226df4b8f9a0d7bf6f250bab2@o298402.ingest.sentry.io/6066714',
            'ps_eventbus.sentry_env' => 'production',
        ];
    }
}
