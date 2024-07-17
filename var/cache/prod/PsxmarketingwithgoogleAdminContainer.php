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
class PsxmarketingwithgoogleAdminContainer extends Container
{
    private $parameters = [];

    public function __construct()
    {
        $this->services = $this->privates = [];
        $this->methodMap = [
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter' => 'getConfigurationAdapterService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer' => 'getTemplateBufferService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Builder\\CarrierBuilder' => 'getCarrierBuilderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Config\\Env' => 'getEnvService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Conversion\\EnhancedConversionToggle' => 'getEnhancedConversionToggleService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Conversion\\UserDataProvider' => 'getUserDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Database\\Installer' => 'getInstallerService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Database\\Uninstaller' => 'getUninstallerService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\ErrorHandler' => 'getErrorHandlerService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\RemarketingHookHandler' => 'getRemarketingHookHandlerService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\AttributeQueryBuilder\\BrandQueryBuilder' => 'getBrandQueryBuilderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\AttributeQueryBuilder\\CategoryQueryBuilder' => 'getCategoryQueryBuilderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\AttributeQueryBuilder\\FeatureQueryBuilder' => 'getFeatureQueryBuilderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\AttributeQueryBuilder\\OutOfStockQueryBuilder' => 'getOutOfStockQueryBuilderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\AttributeQueryBuilder\\PriceQueryBuilder' => 'getPriceQueryBuilderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\AttributeQueryBuilder\\ProductIdQueryBuilder' => 'getProductIdQueryBuilderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\FilterValidator' => 'getFilterValidatorService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\ProductEnumerator' => 'getProductEnumeratorService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\QueryBuilder' => 'getQueryBuilderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\Options\\BrandOptionsProvider' => 'getBrandOptionsProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\Options\\CategoryOptionsProvider' => 'getCategoryOptionsProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\Options\\FeatureOptionsProvider' => 'getFeatureOptionsProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\Options\\Resolver' => 'getResolverService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\CarrierDataProvider' => 'getCarrierDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\CartEventDataProvider' => 'getCartEventDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PageViewEventDataProvider' => 'getPageViewEventDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider' => 'getProductDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PurchaseEventDataProvider' => 'getPurchaseEventDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\VerificationTagDataProvider' => 'getVerificationTagDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\AttributesRepository' => 'getAttributesRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CarrierRepository' => 'getCarrierRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CategoryRepository' => 'getCategoryRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository' => 'getCountryRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CurrencyRepository' => 'getCurrencyRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository' => 'getLanguageRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ManufacturerRepository' => 'getManufacturerRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ProductRepository' => 'getProductRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\StateRepository' => 'getStateRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TabRepository' => 'getTabRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TaxRepository' => 'getTaxRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository' => 'getVerificationTagRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Tracker\\Segment' => 'getSegmentService',
            'PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts' => 'getPsAccountsService',
            'PrestaShop\\PsAccountsInstaller\\Installer\\Installer' => 'getInstaller2Service',
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
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Adapter\ConfigurationAdapter' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Adapter\ConfigurationAdapter
     */
    protected function getConfigurationAdapterService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Adapter\ConfigurationAdapter(($this->services['psxmarketingwithgoogle.shop'] ?? $this->getPsxmarketingwithgoogle_ShopService())->id);
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer
     */
    protected function getTemplateBufferService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Builder\CarrierBuilder' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Builder\CarrierBuilder
     */
    protected function getCarrierBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Builder\\CarrierBuilder'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Builder\CarrierBuilder(($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CarrierRepository'] ?? ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CarrierRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CarrierRepository())), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository'] ?? $this->getCountryRepositoryService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\StateRepository'] ?? $this->getStateRepositoryService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TaxRepository'] ?? $this->getTaxRepositoryService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Config\Env' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Config\Env
     */
    protected function getEnvService()
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
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Conversion\\EnhancedConversionToggle'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Conversion\EnhancedConversionToggle(($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()));
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
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Database\Installer' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Database\Installer
     */
    protected function getInstallerService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Database\\Installer'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Database\Installer(($this->services['psxmarketingwithgoogle'] ?? $this->getPsxmarketingwithgoogleService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Tracker\\Segment'] ?? $this->getSegmentService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\ErrorHandler'] ?? ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\ErrorHandler'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Handler\ErrorHandler())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Database\Uninstaller' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Database\Uninstaller
     */
    protected function getUninstallerService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Database\\Uninstaller'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Database\Uninstaller(($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TabRepository'] ?? ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TabRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TabRepository())), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Tracker\\Segment'] ?? $this->getSegmentService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\ErrorHandler'] ?? ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\ErrorHandler'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Handler\ErrorHandler())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Handler\ErrorHandler' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Handler\ErrorHandler
     */
    protected function getErrorHandlerService()
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
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\RemarketingHookHandler'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Handler\RemarketingHookHandler(($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer'] ?? ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer())), ($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()), ($this->services['psxmarketingwithgoogle'] ?? $this->getPsxmarketingwithgoogleService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\AttributeQueryBuilder\BrandQueryBuilder' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\AttributeQueryBuilder\BrandQueryBuilder
     */
    protected function getBrandQueryBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\AttributeQueryBuilder\\BrandQueryBuilder'] = new \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\AttributeQueryBuilder\BrandQueryBuilder();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\AttributeQueryBuilder\CategoryQueryBuilder' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\AttributeQueryBuilder\CategoryQueryBuilder
     */
    protected function getCategoryQueryBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\AttributeQueryBuilder\\CategoryQueryBuilder'] = new \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\AttributeQueryBuilder\CategoryQueryBuilder(($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\AttributeQueryBuilder\FeatureQueryBuilder' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\AttributeQueryBuilder\FeatureQueryBuilder
     */
    protected function getFeatureQueryBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\AttributeQueryBuilder\\FeatureQueryBuilder'] = new \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\AttributeQueryBuilder\FeatureQueryBuilder(($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository'] ?? $this->getLanguageRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\AttributeQueryBuilder\OutOfStockQueryBuilder' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\AttributeQueryBuilder\OutOfStockQueryBuilder
     */
    protected function getOutOfStockQueryBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\AttributeQueryBuilder\\OutOfStockQueryBuilder'] = new \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\AttributeQueryBuilder\OutOfStockQueryBuilder();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\AttributeQueryBuilder\PriceQueryBuilder' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\AttributeQueryBuilder\PriceQueryBuilder
     */
    protected function getPriceQueryBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\AttributeQueryBuilder\\PriceQueryBuilder'] = new \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\AttributeQueryBuilder\PriceQueryBuilder();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\AttributeQueryBuilder\ProductIdQueryBuilder' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\AttributeQueryBuilder\ProductIdQueryBuilder
     */
    protected function getProductIdQueryBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\AttributeQueryBuilder\\ProductIdQueryBuilder'] = new \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\AttributeQueryBuilder\ProductIdQueryBuilder();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\FilterValidator' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\FilterValidator
     */
    protected function getFilterValidatorService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\FilterValidator'] = new \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\FilterValidator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\ProductEnumerator' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\ProductEnumerator
     */
    protected function getProductEnumeratorService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\ProductEnumerator'] = new \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\ProductEnumerator(($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\FilterValidator'] ?? ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\FilterValidator'] = new \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\FilterValidator())), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\QueryBuilder'] ?? $this->getQueryBuilderService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\QueryBuilder' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\QueryBuilder
     */
    protected function getQueryBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\QueryBuilder'] = new \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\QueryBuilder(($this->services['psxmarketingwithgoogle.shop'] ?? $this->getPsxmarketingwithgoogle_ShopService())->id, ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\AttributeQueryBuilder\\BrandQueryBuilder'] ?? ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\AttributeQueryBuilder\\BrandQueryBuilder'] = new \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\AttributeQueryBuilder\BrandQueryBuilder())), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\AttributeQueryBuilder\\CategoryQueryBuilder'] ?? $this->getCategoryQueryBuilderService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\AttributeQueryBuilder\\FeatureQueryBuilder'] ?? $this->getFeatureQueryBuilderService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\AttributeQueryBuilder\\OutOfStockQueryBuilder'] ?? ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\AttributeQueryBuilder\\OutOfStockQueryBuilder'] = new \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\AttributeQueryBuilder\OutOfStockQueryBuilder())), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\AttributeQueryBuilder\\PriceQueryBuilder'] ?? ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\AttributeQueryBuilder\\PriceQueryBuilder'] = new \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\AttributeQueryBuilder\PriceQueryBuilder())), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\AttributeQueryBuilder\\ProductIdQueryBuilder'] ?? ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\AttributeQueryBuilder\\ProductIdQueryBuilder'] = new \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\AttributeQueryBuilder\ProductIdQueryBuilder())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\Options\BrandOptionsProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\Options\BrandOptionsProvider
     */
    protected function getBrandOptionsProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\Options\\BrandOptionsProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\Options\BrandOptionsProvider(($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ManufacturerRepository'] ?? $this->getManufacturerRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\Options\CategoryOptionsProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\Options\CategoryOptionsProvider
     */
    protected function getCategoryOptionsProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\Options\\CategoryOptionsProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\Options\CategoryOptionsProvider(($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CategoryRepository'] ?? $this->getCategoryRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\Options\FeatureOptionsProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\Options\FeatureOptionsProvider
     */
    protected function getFeatureOptionsProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\Options\\FeatureOptionsProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\Options\FeatureOptionsProvider(($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\AttributesRepository'] ?? $this->getAttributesRepositoryService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository'] ?? $this->getLanguageRepositoryService()), ($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService())->language->id);
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\Options\Resolver' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\Options\Resolver
     */
    protected function getResolverService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\Options\\Resolver'] = new \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\Options\Resolver();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\CarrierDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\CarrierDataProvider
     */
    protected function getCarrierDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\CarrierDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\CarrierDataProvider(($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Builder\\CarrierBuilder'] ?? $this->getCarrierBuilderService()));
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
    protected function getProductDataProviderService()
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
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PurchaseEventDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\PurchaseEventDataProvider(($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider'] ?? $this->getProductDataProviderService()), ($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository'] ?? $this->getLanguageRepositoryService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository'] ?? $this->getCountryRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\VerificationTagDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\VerificationTagDataProvider
     */
    protected function getVerificationTagDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\VerificationTagDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\VerificationTagDataProvider(($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository'] ?? $this->getVerificationTagRepositoryService()));
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
    protected function getCarrierRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CarrierRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CarrierRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CategoryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CategoryRepository
     */
    protected function getCategoryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CategoryRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CategoryRepository(($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CountryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CountryRepository
     */
    protected function getCountryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CountryRepository(($this->services['psxmarketingwithgoogle.db'] ?? $this->getPsxmarketingwithgoogle_DbService()), ($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()), ($this->services['psxmarketingwithgoogle.country'] ?? $this->getPsxmarketingwithgoogle_CountryService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CurrencyRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CurrencyRepository
     */
    protected function getCurrencyRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CurrencyRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CurrencyRepository(($this->services['psxmarketingwithgoogle.currency'] ?? $this->getPsxmarketingwithgoogle_CurrencyService()), ($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\LanguageRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\LanguageRepository
     */
    protected function getLanguageRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\LanguageRepository(($this->services['psxmarketingwithgoogle.shop'] ?? $this->getPsxmarketingwithgoogle_ShopService())->id);
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\ManufacturerRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\ManufacturerRepository
     */
    protected function getManufacturerRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ManufacturerRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\ManufacturerRepository(($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\ProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\ProductRepository
     */
    protected function getProductRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ProductRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\ProductRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\StateRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\StateRepository
     */
    protected function getStateRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\StateRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\StateRepository(($this->services['psxmarketingwithgoogle.db'] ?? $this->getPsxmarketingwithgoogle_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\TabRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TabRepository
     */
    protected function getTabRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TabRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TabRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\TaxRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TaxRepository
     */
    protected function getTaxRepositoryService()
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
    protected function getSegmentService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Tracker\\Segment'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Tracker\Segment(($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts
     */
    protected function getPsAccountsService()
    {
        return $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] = new \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts(($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] ?? ($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('5.0.2'))));
    }

    /**
     * Gets the public 'PrestaShop\PsAccountsInstaller\Installer\Installer' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Installer
     */
    protected function getInstaller2Service()
    {
        return $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('5.0.2');
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
}
