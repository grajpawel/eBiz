<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * Ps_eventbusAdminContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class Ps_eventbusAdminContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array();
        $this->scopeChildren = array();
        $this->methodMap = array(
            'prestashop\\module\\pseventbus\\api\\eventbusproxyclient' => 'getPrestashop_Module_Pseventbus_Api_EventbusproxyclientService',
            'prestashop\\module\\pseventbus\\api\\eventbussyncclient' => 'getPrestashop_Module_Pseventbus_Api_EventbussyncclientService',
            'prestashop\\module\\pseventbus\\builder\\carrierbuilder' => 'getPrestashop_Module_Pseventbus_Builder_CarrierbuilderService',
            'prestashop\\module\\pseventbus\\decorator\\categorydecorator' => 'getPrestashop_Module_Pseventbus_Decorator_CategorydecoratorService',
            'prestashop\\module\\pseventbus\\decorator\\payloaddecorator' => 'getPrestashop_Module_Pseventbus_Decorator_PayloaddecoratorService',
            'prestashop\\module\\pseventbus\\decorator\\productdecorator' => 'getPrestashop_Module_Pseventbus_Decorator_ProductdecoratorService',
            'prestashop\\module\\pseventbus\\formatter\\arrayformatter' => 'getPrestashop_Module_Pseventbus_Formatter_ArrayformatterService',
            'prestashop\\module\\pseventbus\\formatter\\dateformatter' => 'getPrestashop_Module_Pseventbus_Formatter_DateformatterService',
            'prestashop\\module\\pseventbus\\formatter\\jsonformatter' => 'getPrestashop_Module_Pseventbus_Formatter_JsonformatterService',
            'prestashop\\module\\pseventbus\\provider\\carrierdataprovider' => 'getPrestashop_Module_Pseventbus_Provider_CarrierdataproviderService',
            'prestashop\\module\\pseventbus\\provider\\cartdataprovider' => 'getPrestashop_Module_Pseventbus_Provider_CartdataproviderService',
            'prestashop\\module\\pseventbus\\provider\\categorydataprovider' => 'getPrestashop_Module_Pseventbus_Provider_CategorydataproviderService',
            'prestashop\\module\\pseventbus\\provider\\googletaxonomydataprovider' => 'getPrestashop_Module_Pseventbus_Provider_GoogletaxonomydataproviderService',
            'prestashop\\module\\pseventbus\\provider\\moduledataprovider' => 'getPrestashop_Module_Pseventbus_Provider_ModuledataproviderService',
            'prestashop\\module\\pseventbus\\provider\\orderdataprovider' => 'getPrestashop_Module_Pseventbus_Provider_OrderdataproviderService',
            'prestashop\\module\\pseventbus\\provider\\productdataprovider' => 'getPrestashop_Module_Pseventbus_Provider_ProductdataproviderService',
            'prestashop\\module\\pseventbus\\repository\\carrierrepository' => 'getPrestashop_Module_Pseventbus_Repository_CarrierrepositoryService',
            'prestashop\\module\\pseventbus\\repository\\cartproductrepository' => 'getPrestashop_Module_Pseventbus_Repository_CartproductrepositoryService',
            'prestashop\\module\\pseventbus\\repository\\cartrepository' => 'getPrestashop_Module_Pseventbus_Repository_CartrepositoryService',
            'prestashop\\module\\pseventbus\\repository\\categoryrepository' => 'getPrestashop_Module_Pseventbus_Repository_CategoryrepositoryService',
            'prestashop\\module\\pseventbus\\repository\\configurationrepository' => 'getPrestashop_Module_Pseventbus_Repository_ConfigurationrepositoryService',
            'prestashop\\module\\pseventbus\\repository\\countryrepository' => 'getPrestashop_Module_Pseventbus_Repository_CountryrepositoryService',
            'prestashop\\module\\pseventbus\\repository\\currencyrepository' => 'getPrestashop_Module_Pseventbus_Repository_CurrencyrepositoryService',
            'prestashop\\module\\pseventbus\\repository\\deletedobjectsrepository' => 'getPrestashop_Module_Pseventbus_Repository_DeletedobjectsrepositoryService',
            'prestashop\\module\\pseventbus\\repository\\eventbussyncrepository' => 'getPrestashop_Module_Pseventbus_Repository_EventbussyncrepositoryService',
            'prestashop\\module\\pseventbus\\repository\\googletaxonomyrepository' => 'getPrestashop_Module_Pseventbus_Repository_GoogletaxonomyrepositoryService',
            'prestashop\\module\\pseventbus\\repository\\imagerepository' => 'getPrestashop_Module_Pseventbus_Repository_ImagerepositoryService',
            'prestashop\\module\\pseventbus\\repository\\incrementalsyncrepository' => 'getPrestashop_Module_Pseventbus_Repository_IncrementalsyncrepositoryService',
            'prestashop\\module\\pseventbus\\repository\\languagerepository' => 'getPrestashop_Module_Pseventbus_Repository_LanguagerepositoryService',
            'prestashop\\module\\pseventbus\\repository\\modulerepository' => 'getPrestashop_Module_Pseventbus_Repository_ModulerepositoryService',
            'prestashop\\module\\pseventbus\\repository\\orderdetailsrepository' => 'getPrestashop_Module_Pseventbus_Repository_OrderdetailsrepositoryService',
            'prestashop\\module\\pseventbus\\repository\\orderrepository' => 'getPrestashop_Module_Pseventbus_Repository_OrderrepositoryService',
            'prestashop\\module\\pseventbus\\repository\\productrepository' => 'getPrestashop_Module_Pseventbus_Repository_ProductrepositoryService',
            'prestashop\\module\\pseventbus\\repository\\serverinformationrepository' => 'getPrestashop_Module_Pseventbus_Repository_ServerinformationrepositoryService',
            'prestashop\\module\\pseventbus\\repository\\shoprepository' => 'getPrestashop_Module_Pseventbus_Repository_ShoprepositoryService',
            'prestashop\\module\\pseventbus\\repository\\staterepository' => 'getPrestashop_Module_Pseventbus_Repository_StaterepositoryService',
            'prestashop\\module\\pseventbus\\repository\\taxrepository' => 'getPrestashop_Module_Pseventbus_Repository_TaxrepositoryService',
            'prestashop\\module\\pseventbus\\repository\\themerepository' => 'getPrestashop_Module_Pseventbus_Repository_ThemerepositoryService',
            'prestashop\\module\\pseventbus\\service\\apiauthorizationservice' => 'getPrestashop_Module_Pseventbus_Service_ApiauthorizationserviceService',
            'prestashop\\module\\pseventbus\\service\\compressionservice' => 'getPrestashop_Module_Pseventbus_Service_CompressionserviceService',
            'prestashop\\module\\pseventbus\\service\\deletedobjectsservice' => 'getPrestashop_Module_Pseventbus_Service_DeletedobjectsserviceService',
            'prestashop\\module\\pseventbus\\service\\proxyservice' => 'getPrestashop_Module_Pseventbus_Service_ProxyserviceService',
            'prestashop\\module\\pseventbus\\service\\synchronizationservice' => 'getPrestashop_Module_Pseventbus_Service_SynchronizationserviceService',
            'prestashop\\psaccountsinstaller\\installer\\facade\\psaccounts' => 'getPrestashop_Psaccountsinstaller_Installer_Facade_PsaccountsService',
            'prestashop\\psaccountsinstaller\\installer\\installer' => 'getPrestashop_Psaccountsinstaller_Installer_InstallerService',
            'ps_eventbus' => 'getPsEventbusService',
            'ps_eventbus.context' => 'getPsEventbus_ContextService',
            'ps_eventbus.controller' => 'getPsEventbus_ControllerService',
            'ps_eventbus.cookie' => 'getPsEventbus_CookieService',
            'ps_eventbus.currency' => 'getPsEventbus_CurrencyService',
            'ps_eventbus.db' => 'getPsEventbus_DbService',
            'ps_eventbus.language' => 'getPsEventbus_LanguageService',
            'ps_eventbus.link' => 'getPsEventbus_LinkService',
            'ps_eventbus.shop' => 'getPsEventbus_ShopService',
            'ps_eventbus.smarty' => 'getPsEventbus_SmartyService',
        );

        $this->aliases = array();
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /**
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        return true;
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\api\eventbusproxyclient' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Api\EventBusProxyClient
     */
    protected function getPrestashop_Module_Pseventbus_Api_EventbusproxyclientService()
    {
        return $this->services['prestashop\module\pseventbus\api\eventbusproxyclient'] = new \PrestaShop\Module\PsEventbus\Api\EventBusProxyClient($this->get('ps_eventbus.link'), $this->get('prestashop\psaccountsinstaller\installer\facade\psaccounts'), 'https://eventbus-proxy.psessentials.net');
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\api\eventbussyncclient' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Api\EventBusSyncClient
     */
    protected function getPrestashop_Module_Pseventbus_Api_EventbussyncclientService()
    {
        return $this->services['prestashop\module\pseventbus\api\eventbussyncclient'] = new \PrestaShop\Module\PsEventbus\Api\EventBusSyncClient($this->get('ps_eventbus.link'), $this->get('prestashop\psaccountsinstaller\installer\facade\psaccounts'), 'https://eventbus-sync.psessentials.net');
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\builder\carrierbuilder' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Builder\CarrierBuilder
     */
    protected function getPrestashop_Module_Pseventbus_Builder_CarrierbuilderService()
    {
        return $this->services['prestashop\module\pseventbus\builder\carrierbuilder'] = new \PrestaShop\Module\PsEventbus\Builder\CarrierBuilder($this->get('prestashop\module\pseventbus\repository\carrierrepository'), $this->get('prestashop\module\pseventbus\repository\countryrepository'), $this->get('prestashop\module\pseventbus\repository\staterepository'), $this->get('prestashop\module\pseventbus\repository\taxrepository'), $this->get('prestashop\module\pseventbus\repository\configurationrepository'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\decorator\categorydecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\CategoryDecorator
     */
    protected function getPrestashop_Module_Pseventbus_Decorator_CategorydecoratorService()
    {
        return $this->services['prestashop\module\pseventbus\decorator\categorydecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CategoryDecorator();
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\decorator\payloaddecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\PayloadDecorator
     */
    protected function getPrestashop_Module_Pseventbus_Decorator_PayloaddecoratorService()
    {
        return $this->services['prestashop\module\pseventbus\decorator\payloaddecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\PayloadDecorator($this->get('prestashop\module\pseventbus\formatter\dateformatter'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\decorator\productdecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\ProductDecorator
     */
    protected function getPrestashop_Module_Pseventbus_Decorator_ProductdecoratorService()
    {
        return $this->services['prestashop\module\pseventbus\decorator\productdecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ProductDecorator($this->get('ps_eventbus.context'), $this->get('prestashop\module\pseventbus\repository\languagerepository'), $this->get('prestashop\module\pseventbus\repository\productrepository'), $this->get('prestashop\module\pseventbus\repository\categoryrepository'), $this->get('prestashop\module\pseventbus\formatter\arrayformatter'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\formatter\arrayformatter' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter
     */
    protected function getPrestashop_Module_Pseventbus_Formatter_ArrayformatterService()
    {
        return $this->services['prestashop\module\pseventbus\formatter\arrayformatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter();
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\formatter\dateformatter' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Formatter\DateFormatter
     */
    protected function getPrestashop_Module_Pseventbus_Formatter_DateformatterService()
    {
        return $this->services['prestashop\module\pseventbus\formatter\dateformatter'] = new \PrestaShop\Module\PsEventbus\Formatter\DateFormatter();
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\formatter\jsonformatter' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Formatter\JsonFormatter
     */
    protected function getPrestashop_Module_Pseventbus_Formatter_JsonformatterService()
    {
        return $this->services['prestashop\module\pseventbus\formatter\jsonformatter'] = new \PrestaShop\Module\PsEventbus\Formatter\JsonFormatter();
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\provider\carrierdataprovider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CarrierDataProvider
     */
    protected function getPrestashop_Module_Pseventbus_Provider_CarrierdataproviderService()
    {
        return $this->services['prestashop\module\pseventbus\provider\carrierdataprovider'] = new \PrestaShop\Module\PsEventbus\Provider\CarrierDataProvider($this->get('prestashop\module\pseventbus\repository\configurationrepository'), $this->get('prestashop\module\pseventbus\builder\carrierbuilder'), $this->get('prestashop\module\pseventbus\repository\carrierrepository'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\provider\cartdataprovider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CartDataProvider
     */
    protected function getPrestashop_Module_Pseventbus_Provider_CartdataproviderService()
    {
        return $this->services['prestashop\module\pseventbus\provider\cartdataprovider'] = new \PrestaShop\Module\PsEventbus\Provider\CartDataProvider($this->get('prestashop\module\pseventbus\repository\cartrepository'), $this->get('prestashop\module\pseventbus\repository\cartproductrepository'), $this->get('prestashop\module\pseventbus\formatter\arrayformatter'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\provider\categorydataprovider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CategoryDataProvider
     */
    protected function getPrestashop_Module_Pseventbus_Provider_CategorydataproviderService()
    {
        return $this->services['prestashop\module\pseventbus\provider\categorydataprovider'] = new \PrestaShop\Module\PsEventbus\Provider\CategoryDataProvider($this->get('prestashop\module\pseventbus\repository\categoryrepository'), $this->get('prestashop\module\pseventbus\decorator\categorydecorator'), $this->get('prestashop\module\pseventbus\formatter\arrayformatter'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\provider\googletaxonomydataprovider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\GoogleTaxonomyDataProvider
     */
    protected function getPrestashop_Module_Pseventbus_Provider_GoogletaxonomydataproviderService()
    {
        return $this->services['prestashop\module\pseventbus\provider\googletaxonomydataprovider'] = new \PrestaShop\Module\PsEventbus\Provider\GoogleTaxonomyDataProvider($this->get('prestashop\module\pseventbus\repository\googletaxonomyrepository'), $this->get('ps_eventbus.context'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\provider\moduledataprovider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ModuleDataProvider
     */
    protected function getPrestashop_Module_Pseventbus_Provider_ModuledataproviderService()
    {
        return $this->services['prestashop\module\pseventbus\provider\moduledataprovider'] = new \PrestaShop\Module\PsEventbus\Provider\ModuleDataProvider($this->get('prestashop\module\pseventbus\repository\modulerepository'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\provider\orderdataprovider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\OrderDataProvider
     */
    protected function getPrestashop_Module_Pseventbus_Provider_OrderdataproviderService()
    {
        return $this->services['prestashop\module\pseventbus\provider\orderdataprovider'] = new \PrestaShop\Module\PsEventbus\Provider\OrderDataProvider($this->get('ps_eventbus.context'), $this->get('prestashop\module\pseventbus\repository\orderrepository'), $this->get('prestashop\module\pseventbus\repository\orderdetailsrepository'), $this->get('prestashop\module\pseventbus\formatter\arrayformatter'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\provider\productdataprovider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ProductDataProvider
     */
    protected function getPrestashop_Module_Pseventbus_Provider_ProductdataproviderService()
    {
        return $this->services['prestashop\module\pseventbus\provider\productdataprovider'] = new \PrestaShop\Module\PsEventbus\Provider\ProductDataProvider($this->get('prestashop\module\pseventbus\repository\productrepository'), $this->get('prestashop\module\pseventbus\decorator\productdecorator'), $this->get('prestashop\module\pseventbus\repository\languagerepository'), $this->get('prestashop\module\pseventbus\formatter\arrayformatter'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\repository\carrierrepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CarrierRepository
     */
    protected function getPrestashop_Module_Pseventbus_Repository_CarrierrepositoryService()
    {
        return $this->services['prestashop\module\pseventbus\repository\carrierrepository'] = new \PrestaShop\Module\PsEventbus\Repository\CarrierRepository($this->get('ps_eventbus.db'), $this->get('ps_eventbus.context'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\repository\cartproductrepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CartProductRepository
     */
    protected function getPrestashop_Module_Pseventbus_Repository_CartproductrepositoryService()
    {
        return $this->services['prestashop\module\pseventbus\repository\cartproductrepository'] = new \PrestaShop\Module\PsEventbus\Repository\CartProductRepository($this->get('ps_eventbus.db'), $this->get('ps_eventbus.context'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\repository\cartrepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CartRepository
     */
    protected function getPrestashop_Module_Pseventbus_Repository_CartrepositoryService()
    {
        return $this->services['prestashop\module\pseventbus\repository\cartrepository'] = new \PrestaShop\Module\PsEventbus\Repository\CartRepository($this->get('ps_eventbus.db'), $this->get('ps_eventbus.context'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\repository\categoryrepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CategoryRepository
     */
    protected function getPrestashop_Module_Pseventbus_Repository_CategoryrepositoryService()
    {
        return $this->services['prestashop\module\pseventbus\repository\categoryrepository'] = new \PrestaShop\Module\PsEventbus\Repository\CategoryRepository($this->get('ps_eventbus.db'), $this->get('ps_eventbus.context'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\repository\configurationrepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository
     */
    protected function getPrestashop_Module_Pseventbus_Repository_ConfigurationrepositoryService()
    {
        return $this->services['prestashop\module\pseventbus\repository\configurationrepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository();
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\repository\countryrepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CountryRepository
     */
    protected function getPrestashop_Module_Pseventbus_Repository_CountryrepositoryService()
    {
        return $this->services['prestashop\module\pseventbus\repository\countryrepository'] = new \PrestaShop\Module\PsEventbus\Repository\CountryRepository($this->get('ps_eventbus.db'), $this->get('ps_eventbus.context'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\repository\currencyrepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CurrencyRepository
     */
    protected function getPrestashop_Module_Pseventbus_Repository_CurrencyrepositoryService()
    {
        return $this->services['prestashop\module\pseventbus\repository\currencyrepository'] = new \PrestaShop\Module\PsEventbus\Repository\CurrencyRepository();
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\repository\deletedobjectsrepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\DeletedObjectsRepository
     */
    protected function getPrestashop_Module_Pseventbus_Repository_DeletedobjectsrepositoryService()
    {
        return $this->services['prestashop\module\pseventbus\repository\deletedobjectsrepository'] = new \PrestaShop\Module\PsEventbus\Repository\DeletedObjectsRepository($this->get('ps_eventbus.db'), $this->get('ps_eventbus.context'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\repository\eventbussyncrepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\EventbusSyncRepository
     */
    protected function getPrestashop_Module_Pseventbus_Repository_EventbussyncrepositoryService()
    {
        return $this->services['prestashop\module\pseventbus\repository\eventbussyncrepository'] = new \PrestaShop\Module\PsEventbus\Repository\EventbusSyncRepository($this->get('ps_eventbus.db'), $this->get('ps_eventbus.context'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\repository\googletaxonomyrepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\GoogleTaxonomyRepository
     */
    protected function getPrestashop_Module_Pseventbus_Repository_GoogletaxonomyrepositoryService()
    {
        return $this->services['prestashop\module\pseventbus\repository\googletaxonomyrepository'] = new \PrestaShop\Module\PsEventbus\Repository\GoogleTaxonomyRepository($this->get('ps_eventbus.db'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\repository\imagerepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ImageRepository
     */
    protected function getPrestashop_Module_Pseventbus_Repository_ImagerepositoryService()
    {
        return $this->services['prestashop\module\pseventbus\repository\imagerepository'] = new \PrestaShop\Module\PsEventbus\Repository\ImageRepository($this->get('ps_eventbus.db'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\repository\incrementalsyncrepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\IncrementalSyncRepository
     */
    protected function getPrestashop_Module_Pseventbus_Repository_IncrementalsyncrepositoryService()
    {
        return $this->services['prestashop\module\pseventbus\repository\incrementalsyncrepository'] = new \PrestaShop\Module\PsEventbus\Repository\IncrementalSyncRepository($this->get('ps_eventbus.db'), $this->get('ps_eventbus.context'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\repository\languagerepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\LanguageRepository
     */
    protected function getPrestashop_Module_Pseventbus_Repository_LanguagerepositoryService()
    {
        return $this->services['prestashop\module\pseventbus\repository\languagerepository'] = new \PrestaShop\Module\PsEventbus\Repository\LanguageRepository();
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\repository\modulerepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ModuleRepository
     */
    protected function getPrestashop_Module_Pseventbus_Repository_ModulerepositoryService()
    {
        return $this->services['prestashop\module\pseventbus\repository\modulerepository'] = new \PrestaShop\Module\PsEventbus\Repository\ModuleRepository($this->get('ps_eventbus.db'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\repository\orderdetailsrepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\OrderDetailsRepository
     */
    protected function getPrestashop_Module_Pseventbus_Repository_OrderdetailsrepositoryService()
    {
        return $this->services['prestashop\module\pseventbus\repository\orderdetailsrepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderDetailsRepository($this->get('ps_eventbus.db'), $this->get('ps_eventbus.context'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\repository\orderrepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\OrderRepository
     */
    protected function getPrestashop_Module_Pseventbus_Repository_OrderrepositoryService()
    {
        return $this->services['prestashop\module\pseventbus\repository\orderrepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderRepository($this->get('ps_eventbus.db'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\repository\productrepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ProductRepository
     */
    protected function getPrestashop_Module_Pseventbus_Repository_ProductrepositoryService()
    {
        return $this->services['prestashop\module\pseventbus\repository\productrepository'] = new \PrestaShop\Module\PsEventbus\Repository\ProductRepository($this->get('ps_eventbus.db'), $this->get('ps_eventbus.context'), $this->get('prestashop\module\pseventbus\formatter\arrayformatter'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\repository\serverinformationrepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ServerInformationRepository
     */
    protected function getPrestashop_Module_Pseventbus_Repository_ServerinformationrepositoryService()
    {
        return $this->services['prestashop\module\pseventbus\repository\serverinformationrepository'] = new \PrestaShop\Module\PsEventbus\Repository\ServerInformationRepository($this->get('ps_eventbus.context'), $this->get('ps_eventbus.db'), $this->get('prestashop\module\pseventbus\repository\currencyrepository'), $this->get('prestashop\module\pseventbus\repository\languagerepository'), $this->get('prestashop\module\pseventbus\repository\configurationrepository'), $this->get('prestashop\module\pseventbus\repository\shoprepository'), $this->get('prestashop\module\pseventbus\formatter\arrayformatter'), $this->get('prestashop\psaccountsinstaller\installer\facade\psaccounts'), array('EVENT_BUS_SYNC_API_URL' => 'https://eventbus-sync.psessentials.net', 'EVENT_BUS_PROXY_API_URL' => 'https://eventbus-proxy.psessentials.net'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\repository\shoprepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ShopRepository
     */
    protected function getPrestashop_Module_Pseventbus_Repository_ShoprepositoryService()
    {
        return $this->services['prestashop\module\pseventbus\repository\shoprepository'] = new \PrestaShop\Module\PsEventbus\Repository\ShopRepository($this->get('ps_eventbus.context'), $this->get('ps_eventbus.db'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\repository\staterepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\StateRepository
     */
    protected function getPrestashop_Module_Pseventbus_Repository_StaterepositoryService()
    {
        return $this->services['prestashop\module\pseventbus\repository\staterepository'] = new \PrestaShop\Module\PsEventbus\Repository\StateRepository($this->get('ps_eventbus.db'), $this->get('ps_eventbus.context'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\repository\taxrepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\TaxRepository
     */
    protected function getPrestashop_Module_Pseventbus_Repository_TaxrepositoryService()
    {
        return $this->services['prestashop\module\pseventbus\repository\taxrepository'] = new \PrestaShop\Module\PsEventbus\Repository\TaxRepository($this->get('ps_eventbus.db'), $this->get('ps_eventbus.context'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\repository\themerepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ThemeRepository
     */
    protected function getPrestashop_Module_Pseventbus_Repository_ThemerepositoryService()
    {
        return $this->services['prestashop\module\pseventbus\repository\themerepository'] = new \PrestaShop\Module\PsEventbus\Repository\ThemeRepository($this->get('ps_eventbus.context'), $this->get('ps_eventbus.db'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\service\apiauthorizationservice' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\ApiAuthorizationService
     */
    protected function getPrestashop_Module_Pseventbus_Service_ApiauthorizationserviceService()
    {
        return $this->services['prestashop\module\pseventbus\service\apiauthorizationservice'] = new \PrestaShop\Module\PsEventbus\Service\ApiAuthorizationService($this->get('prestashop\module\pseventbus\repository\eventbussyncrepository'), $this->get('prestashop\module\pseventbus\api\eventbussyncclient'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\service\compressionservice' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\CompressionService
     */
    protected function getPrestashop_Module_Pseventbus_Service_CompressionserviceService()
    {
        return $this->services['prestashop\module\pseventbus\service\compressionservice'] = new \PrestaShop\Module\PsEventbus\Service\CompressionService($this->get('prestashop\module\pseventbus\formatter\jsonformatter'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\service\deletedobjectsservice' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\DeletedObjectsService
     */
    protected function getPrestashop_Module_Pseventbus_Service_DeletedobjectsserviceService()
    {
        return $this->services['prestashop\module\pseventbus\service\deletedobjectsservice'] = new \PrestaShop\Module\PsEventbus\Service\DeletedObjectsService($this->get('ps_eventbus.context'), $this->get('prestashop\module\pseventbus\repository\deletedobjectsrepository'), $this->get('prestashop\module\pseventbus\service\proxyservice'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\service\proxyservice' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\ProxyService
     */
    protected function getPrestashop_Module_Pseventbus_Service_ProxyserviceService()
    {
        return $this->services['prestashop\module\pseventbus\service\proxyservice'] = new \PrestaShop\Module\PsEventbus\Service\ProxyService($this->get('prestashop\module\pseventbus\api\eventbusproxyclient'), $this->get('prestashop\module\pseventbus\formatter\jsonformatter'));
    }

    /**
     * Gets the public 'prestashop\module\pseventbus\service\synchronizationservice' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\SynchronizationService
     */
    protected function getPrestashop_Module_Pseventbus_Service_SynchronizationserviceService()
    {
        return $this->services['prestashop\module\pseventbus\service\synchronizationservice'] = new \PrestaShop\Module\PsEventbus\Service\SynchronizationService($this->get('prestashop\module\pseventbus\repository\eventbussyncrepository'), $this->get('prestashop\module\pseventbus\repository\incrementalsyncrepository'), $this->get('prestashop\module\pseventbus\service\proxyservice'), $this->get('prestashop\module\pseventbus\decorator\payloaddecorator'));
    }

    /**
     * Gets the public 'prestashop\psaccountsinstaller\installer\facade\psaccounts' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts
     */
    protected function getPrestashop_Psaccountsinstaller_Installer_Facade_PsaccountsService()
    {
        return $this->services['prestashop\psaccountsinstaller\installer\facade\psaccounts'] = new \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts($this->get('prestashop\psaccountsinstaller\installer\installer'));
    }

    /**
     * Gets the public 'prestashop\psaccountsinstaller\installer\installer' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Installer
     */
    protected function getPrestashop_Psaccountsinstaller_Installer_InstallerService()
    {
        return $this->services['prestashop\psaccountsinstaller\installer\installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('4.0.0');
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
     * @return \Shop
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
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'ps_eventbus.proxy_api_url' => 'https://eventbus-proxy.psessentials.net',
            'ps_eventbus.sync_api_url' => 'https://eventbus-sync.psessentials.net',
        );
    }
}
