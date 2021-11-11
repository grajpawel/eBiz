<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * Ps_facebookAdminContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class Ps_facebookAdminContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array();
        $this->scopeChildren = array();
        $this->methodMap = array(
            'prestashop\\module\\prestashopfacebook\\adapter\\configurationadapter' => 'getPrestashop_Module_Prestashopfacebook_Adapter_ConfigurationadapterService',
            'prestashop\\module\\prestashopfacebook\\adapter\\toolsadapter' => 'getPrestashop_Module_Prestashopfacebook_Adapter_ToolsadapterService',
            'prestashop\\module\\prestashopfacebook\\api\\eventsubscriber\\accountsuspendedsubscriber' => 'getPrestashop_Module_Prestashopfacebook_Api_Eventsubscriber_AccountsuspendedsubscriberService',
            'prestashop\\module\\prestashopfacebook\\api\\facebookcategoryclient' => 'getPrestashop_Module_Prestashopfacebook_Api_FacebookcategoryclientService',
            'prestashop\\module\\prestashopfacebook\\api\\facebookclient' => 'getPrestashop_Module_Prestashopfacebook_Api_FacebookclientService',
            'prestashop\\module\\prestashopfacebook\\buffer\\templatebuffer' => 'getPrestashop_Module_Prestashopfacebook_Buffer_TemplatebufferService',
            'prestashop\\module\\prestashopfacebook\\config\\env' => 'getPrestashop_Module_Prestashopfacebook_Config_EnvService',
            'prestashop\\module\\prestashopfacebook\\database\\installer' => 'getPrestashop_Module_Prestashopfacebook_Database_InstallerService',
            'prestashop\\module\\prestashopfacebook\\database\\uninstaller' => 'getPrestashop_Module_Prestashopfacebook_Database_UninstallerService',
            'prestashop\\module\\prestashopfacebook\\dispatcher\\eventdispatcher' => 'getPrestashop_Module_Prestashopfacebook_Dispatcher_EventdispatcherService',
            'prestashop\\module\\prestashopfacebook\\factory\\facebookessentialsapiclientfactory' => 'getPrestashop_Module_Prestashopfacebook_Factory_FacebookessentialsapiclientfactoryService',
            'prestashop\\module\\prestashopfacebook\\factory\\googlecategoryessentialsapiclientfactory' => 'getPrestashop_Module_Prestashopfacebook_Factory_GooglecategoryessentialsapiclientfactoryService',
            'prestashop\\module\\prestashopfacebook\\factory\\psapiclientfactory' => 'getPrestashop_Module_Prestashopfacebook_Factory_PsapiclientfactoryService',
            'prestashop\\module\\prestashopfacebook\\handler\\apiconversionhandler' => 'getPrestashop_Module_Prestashopfacebook_Handler_ApiconversionhandlerService',
            'prestashop\\module\\prestashopfacebook\\handler\\categorymatchhandler' => 'getPrestashop_Module_Prestashopfacebook_Handler_CategorymatchhandlerService',
            'prestashop\\module\\prestashopfacebook\\handler\\configurationhandler' => 'getPrestashop_Module_Prestashopfacebook_Handler_ConfigurationhandlerService',
            'prestashop\\module\\prestashopfacebook\\handler\\errorhandler\\errorhandler' => 'getPrestashop_Module_Prestashopfacebook_Handler_Errorhandler_ErrorhandlerService',
            'prestashop\\module\\prestashopfacebook\\handler\\eventbusproducthandler' => 'getPrestashop_Module_Prestashopfacebook_Handler_EventbusproducthandlerService',
            'prestashop\\module\\prestashopfacebook\\handler\\messengerhandler' => 'getPrestashop_Module_Prestashopfacebook_Handler_MessengerhandlerService',
            'prestashop\\module\\prestashopfacebook\\handler\\pixelhandler' => 'getPrestashop_Module_Prestashopfacebook_Handler_PixelhandlerService',
            'prestashop\\module\\prestashopfacebook\\handler\\prevalidationscanrefreshhandler' => 'getPrestashop_Module_Prestashopfacebook_Handler_PrevalidationscanrefreshhandlerService',
            'prestashop\\module\\prestashopfacebook\\manager\\fbefeaturemanager' => 'getPrestashop_Module_Prestashopfacebook_Manager_FbefeaturemanagerService',
            'prestashop\\module\\prestashopfacebook\\presenter\\moduleupgradepresenter' => 'getPrestashop_Module_Prestashopfacebook_Presenter_ModuleupgradepresenterService',
            'prestashop\\module\\prestashopfacebook\\provider\\accesstokenprovider' => 'getPrestashop_Module_Prestashopfacebook_Provider_AccesstokenproviderService',
            'prestashop\\module\\prestashopfacebook\\provider\\eventdataprovider' => 'getPrestashop_Module_Prestashopfacebook_Provider_EventdataproviderService',
            'prestashop\\module\\prestashopfacebook\\provider\\facebookdataprovider' => 'getPrestashop_Module_Prestashopfacebook_Provider_FacebookdataproviderService',
            'prestashop\\module\\prestashopfacebook\\provider\\fbedataprovider' => 'getPrestashop_Module_Prestashopfacebook_Provider_FbedataproviderService',
            'prestashop\\module\\prestashopfacebook\\provider\\fbefeaturedataprovider' => 'getPrestashop_Module_Prestashopfacebook_Provider_FbefeaturedataproviderService',
            'prestashop\\module\\prestashopfacebook\\provider\\googlecategoryprovider' => 'getPrestashop_Module_Prestashopfacebook_Provider_GooglecategoryproviderService',
            'prestashop\\module\\prestashopfacebook\\provider\\multishopdataprovider' => 'getPrestashop_Module_Prestashopfacebook_Provider_MultishopdataproviderService',
            'prestashop\\module\\prestashopfacebook\\provider\\prevalidationscancacheprovider' => 'getPrestashop_Module_Prestashopfacebook_Provider_PrevalidationscancacheproviderService',
            'prestashop\\module\\prestashopfacebook\\provider\\prevalidationscandataprovider' => 'getPrestashop_Module_Prestashopfacebook_Provider_PrevalidationscandataproviderService',
            'prestashop\\module\\prestashopfacebook\\provider\\productavailabilityprovider' => 'getPrestashop_Module_Prestashopfacebook_Provider_ProductavailabilityproviderService',
            'prestashop\\module\\prestashopfacebook\\provider\\productsyncreportprovider' => 'getPrestashop_Module_Prestashopfacebook_Provider_ProductsyncreportproviderService',
            'prestashop\\module\\prestashopfacebook\\repository\\googlecategoryrepository' => 'getPrestashop_Module_Prestashopfacebook_Repository_GooglecategoryrepositoryService',
            'prestashop\\module\\prestashopfacebook\\repository\\productrepository' => 'getPrestashop_Module_Prestashopfacebook_Repository_ProductrepositoryService',
            'prestashop\\module\\prestashopfacebook\\repository\\serverinformationrepository' => 'getPrestashop_Module_Prestashopfacebook_Repository_ServerinformationrepositoryService',
            'prestashop\\module\\prestashopfacebook\\repository\\shoprepository' => 'getPrestashop_Module_Prestashopfacebook_Repository_ShoprepositoryService',
            'prestashop\\module\\prestashopfacebook\\repository\\tabrepository' => 'getPrestashop_Module_Prestashopfacebook_Repository_TabrepositoryService',
            'prestashop\\module\\ps_facebook\\tracker\\segment' => 'getPrestashop_Module_PsFacebook_Tracker_SegmentService',
            'prestashop\\module\\ps_facebook\\translations\\psfacebooktranslations' => 'getPrestashop_Module_PsFacebook_Translations_PsfacebooktranslationsService',
            'prestashop\\psaccountsinstaller\\installer\\facade\\psaccounts' => 'getPrestashop_Psaccountsinstaller_Installer_Facade_PsaccountsService',
            'prestashop\\psaccountsinstaller\\installer\\installer' => 'getPrestashop_Psaccountsinstaller_Installer_InstallerService',
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
        );
        $this->aliases = array(
            'prestashop\\module\\prestashopfacebook\\provider\\googlecategoryproviderinterface' => 'prestashop\\module\\prestashopfacebook\\provider\\googlecategoryprovider',
            'prestashop\\module\\prestashopfacebook\\provider\\productavailabilityproviderinterface' => 'prestashop\\module\\prestashopfacebook\\provider\\productavailabilityprovider',
        );
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
     * Gets the public 'prestashop\module\prestashopfacebook\adapter\configurationadapter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Adapter\ConfigurationAdapter
     */
    protected function getPrestashop_Module_Prestashopfacebook_Adapter_ConfigurationadapterService()
    {
        return $this->services['prestashop\module\prestashopfacebook\adapter\configurationadapter'] = new \PrestaShop\Module\PrestashopFacebook\Adapter\ConfigurationAdapter($this->get("ps_facebook.shop")->id);
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\adapter\toolsadapter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter
     */
    protected function getPrestashop_Module_Prestashopfacebook_Adapter_ToolsadapterService()
    {
        return $this->services['prestashop\module\prestashopfacebook\adapter\toolsadapter'] = new \PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter();
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\api\eventsubscriber\accountsuspendedsubscriber' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\AccountSuspendedSubscriber
     */
    protected function getPrestashop_Module_Prestashopfacebook_Api_Eventsubscriber_AccountsuspendedsubscriberService()
    {
        return $this->services['prestashop\module\prestashopfacebook\api\eventsubscriber\accountsuspendedsubscriber'] = new \PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\AccountSuspendedSubscriber($this->get('prestashop\module\prestashopfacebook\adapter\configurationadapter'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\api\facebookcategoryclient' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\FacebookCategoryClient
     */
    protected function getPrestashop_Module_Prestashopfacebook_Api_FacebookcategoryclientService()
    {
        return $this->services['prestashop\module\prestashopfacebook\api\facebookcategoryclient'] = new \PrestaShop\Module\PrestashopFacebook\API\FacebookCategoryClient($this->get('prestashop\module\prestashopfacebook\factory\googlecategoryessentialsapiclientfactory'), $this->get('prestashop\module\prestashopfacebook\repository\googlecategoryrepository'), $this->get('prestashop\module\prestashopfacebook\handler\errorhandler\errorhandler'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\api\facebookclient' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\FacebookClient
     */
    protected function getPrestashop_Module_Prestashopfacebook_Api_FacebookclientService()
    {
        return $this->services['prestashop\module\prestashopfacebook\api\facebookclient'] = new \PrestaShop\Module\PrestashopFacebook\API\FacebookClient($this->get('prestashop\module\prestashopfacebook\factory\facebookessentialsapiclientfactory'), $this->get('prestashop\module\prestashopfacebook\provider\accesstokenprovider'), $this->get('prestashop\module\prestashopfacebook\adapter\configurationadapter'), $this->get('prestashop\module\prestashopfacebook\handler\errorhandler\errorhandler'), $this->get('prestashop\module\prestashopfacebook\handler\configurationhandler'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\buffer\templatebuffer' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Buffer\TemplateBuffer
     */
    protected function getPrestashop_Module_Prestashopfacebook_Buffer_TemplatebufferService()
    {
        return $this->services['prestashop\module\prestashopfacebook\buffer\templatebuffer'] = new \PrestaShop\Module\PrestashopFacebook\Buffer\TemplateBuffer();
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\config\env' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Config\Env
     */
    protected function getPrestashop_Module_Prestashopfacebook_Config_EnvService()
    {
        return $this->services['prestashop\module\prestashopfacebook\config\env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env();
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\database\installer' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Database\Installer
     */
    protected function getPrestashop_Module_Prestashopfacebook_Database_InstallerService()
    {
        return $this->services['prestashop\module\prestashopfacebook\database\installer'] = new \PrestaShop\Module\PrestashopFacebook\Database\Installer($this->get('ps_facebook'), $this->get('prestashop\module\ps_facebook\tracker\segment'), $this->get('prestashop\module\prestashopfacebook\handler\errorhandler\errorhandler'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\database\uninstaller' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Database\Uninstaller
     */
    protected function getPrestashop_Module_Prestashopfacebook_Database_UninstallerService()
    {
        return $this->services['prestashop\module\prestashopfacebook\database\uninstaller'] = new \PrestaShop\Module\PrestashopFacebook\Database\Uninstaller($this->get('ps_facebook'), $this->get('prestashop\module\prestashopfacebook\repository\tabrepository'), $this->get('prestashop\module\ps_facebook\tracker\segment'), $this->get('prestashop\module\prestashopfacebook\handler\errorhandler\errorhandler'), $this->get('prestashop\module\prestashopfacebook\api\facebookclient'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\dispatcher\eventdispatcher' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Dispatcher\EventDispatcher
     */
    protected function getPrestashop_Module_Prestashopfacebook_Dispatcher_EventdispatcherService()
    {
        return $this->services['prestashop\module\prestashopfacebook\dispatcher\eventdispatcher'] = new \PrestaShop\Module\PrestashopFacebook\Dispatcher\EventDispatcher($this->get('prestashop\module\prestashopfacebook\handler\apiconversionhandler'), $this->get('prestashop\module\prestashopfacebook\handler\pixelhandler'), $this->get('prestashop\module\prestashopfacebook\adapter\configurationadapter'), $this->get('prestashop\module\prestashopfacebook\provider\eventdataprovider'), $this->get('ps_facebook.context'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\factory\facebookessentialsapiclientfactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Factory\FacebookEssentialsApiClientFactory
     */
    protected function getPrestashop_Module_Prestashopfacebook_Factory_FacebookessentialsapiclientfactoryService()
    {
        return $this->services['prestashop\module\prestashopfacebook\factory\facebookessentialsapiclientfactory'] = new \PrestaShop\Module\PrestashopFacebook\Factory\FacebookEssentialsApiClientFactory();
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\factory\googlecategoryessentialsapiclientfactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Factory\GoogleCategoryEssentialsApiClientFactory
     */
    protected function getPrestashop_Module_Prestashopfacebook_Factory_GooglecategoryessentialsapiclientfactoryService()
    {
        return $this->services['prestashop\module\prestashopfacebook\factory\googlecategoryessentialsapiclientfactory'] = new \PrestaShop\Module\PrestashopFacebook\Factory\GoogleCategoryEssentialsApiClientFactory();
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\factory\psapiclientfactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Factory\PsApiClientFactory
     */
    protected function getPrestashop_Module_Prestashopfacebook_Factory_PsapiclientfactoryService()
    {
        return $this->services['prestashop\module\prestashopfacebook\factory\psapiclientfactory'] = new \PrestaShop\Module\PrestashopFacebook\Factory\PsApiClientFactory($this->get('prestashop\module\prestashopfacebook\config\env'), $this->get('prestashop\psaccountsinstaller\installer\facade\psaccounts'), $this->get('prestashop\module\prestashopfacebook\api\eventsubscriber\accountsuspendedsubscriber'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\handler\apiconversionhandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\ApiConversionHandler
     */
    protected function getPrestashop_Module_Prestashopfacebook_Handler_ApiconversionhandlerService()
    {
        return $this->services['prestashop\module\prestashopfacebook\handler\apiconversionhandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\ApiConversionHandler($this->get('prestashop\module\prestashopfacebook\adapter\configurationadapter'), $this->get('prestashop\module\prestashopfacebook\handler\errorhandler\errorhandler'), $this->get('prestashop\module\prestashopfacebook\api\facebookclient'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\handler\categorymatchhandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\CategoryMatchHandler
     */
    protected function getPrestashop_Module_Prestashopfacebook_Handler_CategorymatchhandlerService()
    {
        return $this->services['prestashop\module\prestashopfacebook\handler\categorymatchhandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\CategoryMatchHandler($this->get('prestashop\module\prestashopfacebook\repository\googlecategoryrepository'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\handler\configurationhandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\ConfigurationHandler
     */
    protected function getPrestashop_Module_Prestashopfacebook_Handler_ConfigurationhandlerService()
    {
        return $this->services['prestashop\module\prestashopfacebook\handler\configurationhandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\ConfigurationHandler($this->get('prestashop\module\prestashopfacebook\adapter\configurationadapter'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\handler\errorhandler\errorhandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\ErrorHandler\ErrorHandler
     */
    protected function getPrestashop_Module_Prestashopfacebook_Handler_Errorhandler_ErrorhandlerService()
    {
        return $this->services['prestashop\module\prestashopfacebook\handler\errorhandler\errorhandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\ErrorHandler\ErrorHandler($this->get('ps_facebook'), $this->get('prestashop\module\prestashopfacebook\config\env'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\handler\eventbusproducthandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\EventBusProductHandler
     */
    protected function getPrestashop_Module_Prestashopfacebook_Handler_EventbusproducthandlerService()
    {
        return $this->services['prestashop\module\prestashopfacebook\handler\eventbusproducthandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\EventBusProductHandler($this->get('prestashop\module\prestashopfacebook\repository\productrepository'), $this->get('prestashop\module\ps_facebook\translations\psfacebooktranslations'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\handler\messengerhandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\MessengerHandler
     */
    protected function getPrestashop_Module_Prestashopfacebook_Handler_MessengerhandlerService()
    {
        return $this->services['prestashop\module\prestashopfacebook\handler\messengerhandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\MessengerHandler($this->get('ps_facebook.language'), $this->get('prestashop\module\prestashopfacebook\adapter\configurationadapter'), $this->get('prestashop\module\prestashopfacebook\config\env'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\handler\pixelhandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\PixelHandler
     */
    protected function getPrestashop_Module_Prestashopfacebook_Handler_PixelhandlerService()
    {
        return $this->services['prestashop\module\prestashopfacebook\handler\pixelhandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\PixelHandler($this->get('ps_facebook'), $this->get('prestashop\module\prestashopfacebook\adapter\configurationadapter'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\handler\prevalidationscanrefreshhandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\PrevalidationScanRefreshHandler
     */
    protected function getPrestashop_Module_Prestashopfacebook_Handler_PrevalidationscanrefreshhandlerService()
    {
        return $this->services['prestashop\module\prestashopfacebook\handler\prevalidationscanrefreshhandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\PrevalidationScanRefreshHandler($this->get('prestashop\module\prestashopfacebook\provider\prevalidationscancacheprovider'), $this->get('prestashop\module\prestashopfacebook\repository\productrepository'), $this->get("ps_facebook.shop")->id);
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\manager\fbefeaturemanager' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Manager\FbeFeatureManager
     */
    protected function getPrestashop_Module_Prestashopfacebook_Manager_FbefeaturemanagerService()
    {
        return $this->services['prestashop\module\prestashopfacebook\manager\fbefeaturemanager'] = new \PrestaShop\Module\PrestashopFacebook\Manager\FbeFeatureManager($this->get('prestashop\module\prestashopfacebook\adapter\configurationadapter'), $this->get('prestashop\module\prestashopfacebook\api\facebookclient'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\presenter\moduleupgradepresenter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Presenter\ModuleUpgradePresenter
     */
    protected function getPrestashop_Module_Prestashopfacebook_Presenter_ModuleupgradepresenterService()
    {
        return $this->services['prestashop\module\prestashopfacebook\presenter\moduleupgradepresenter'] = new \PrestaShop\Module\PrestashopFacebook\Presenter\ModuleUpgradePresenter($this->get('ps_facebook.context'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\provider\accesstokenprovider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\AccessTokenProvider
     */
    protected function getPrestashop_Module_Prestashopfacebook_Provider_AccesstokenproviderService()
    {
        return $this->services['prestashop\module\prestashopfacebook\provider\accesstokenprovider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\AccessTokenProvider($this->get('prestashop\module\prestashopfacebook\adapter\configurationadapter'), $this->get('prestashop\module\prestashopfacebook\handler\errorhandler\errorhandler'), $this->get('ps_facebook.controller'), $this->get('prestashop\module\prestashopfacebook\factory\psapiclientfactory'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\provider\eventdataprovider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\EventDataProvider
     */
    protected function getPrestashop_Module_Prestashopfacebook_Provider_EventdataproviderService()
    {
        return $this->services['prestashop\module\prestashopfacebook\provider\eventdataprovider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\EventDataProvider($this->get('prestashop\module\prestashopfacebook\adapter\toolsadapter'), $this->get('prestashop\module\prestashopfacebook\adapter\configurationadapter'), $this->get('prestashop\module\prestashopfacebook\repository\productrepository'), $this->get('ps_facebook.context'), $this->get('ps_facebook'), $this->get('prestashop\module\prestashopfacebook\provider\productavailabilityprovider'), $this->get('prestashop\module\prestashopfacebook\repository\googlecategoryrepository'), $this->get('prestashop\module\prestashopfacebook\provider\googlecategoryprovider'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\provider\facebookdataprovider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\FacebookDataProvider
     */
    protected function getPrestashop_Module_Prestashopfacebook_Provider_FacebookdataproviderService()
    {
        return $this->services['prestashop\module\prestashopfacebook\provider\facebookdataprovider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\FacebookDataProvider($this->get('prestashop\module\prestashopfacebook\api\facebookclient'), $this->get('prestashop\module\prestashopfacebook\adapter\configurationadapter'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\provider\fbedataprovider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\FbeDataProvider
     */
    protected function getPrestashop_Module_Prestashopfacebook_Provider_FbedataproviderService()
    {
        return $this->services['prestashop\module\prestashopfacebook\provider\fbedataprovider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\FbeDataProvider($this->get('prestashop\module\prestashopfacebook\adapter\configurationadapter'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\provider\fbefeaturedataprovider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\FbeFeatureDataProvider
     */
    protected function getPrestashop_Module_Prestashopfacebook_Provider_FbefeaturedataproviderService()
    {
        return $this->services['prestashop\module\prestashopfacebook\provider\fbefeaturedataprovider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\FbeFeatureDataProvider($this->get('prestashop\module\prestashopfacebook\api\facebookclient'), $this->get('prestashop\module\prestashopfacebook\adapter\configurationadapter'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\provider\googlecategoryprovider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\GoogleCategoryProvider
     */
    protected function getPrestashop_Module_Prestashopfacebook_Provider_GooglecategoryproviderService()
    {
        return $this->services['prestashop\module\prestashopfacebook\provider\googlecategoryprovider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\GoogleCategoryProvider($this->get('prestashop\module\prestashopfacebook\repository\googlecategoryrepository'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\provider\multishopdataprovider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\MultishopDataProvider
     */
    protected function getPrestashop_Module_Prestashopfacebook_Provider_MultishopdataproviderService()
    {
        return $this->services['prestashop\module\prestashopfacebook\provider\multishopdataprovider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\MultishopDataProvider($this->get('prestashop\module\prestashopfacebook\repository\shoprepository'), $this->get('prestashop\module\ps_facebook\tracker\segment'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\provider\prevalidationscancacheprovider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanCacheProvider
     */
    protected function getPrestashop_Module_Prestashopfacebook_Provider_PrevalidationscancacheproviderService()
    {
        return $this->services['prestashop\module\prestashopfacebook\provider\prevalidationscancacheprovider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanCacheProvider($this->get('ps_facebook'), $this->get('ps_facebook.cache'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\provider\prevalidationscandataprovider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanDataProvider
     */
    protected function getPrestashop_Module_Prestashopfacebook_Provider_PrevalidationscandataproviderService()
    {
        return $this->services['prestashop\module\prestashopfacebook\provider\prevalidationscandataprovider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanDataProvider($this->get('prestashop\module\prestashopfacebook\provider\prevalidationscancacheprovider'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\provider\productavailabilityprovider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider
     */
    protected function getPrestashop_Module_Prestashopfacebook_Provider_ProductavailabilityproviderService()
    {
        return $this->services['prestashop\module\prestashopfacebook\provider\productavailabilityprovider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider();
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\provider\productsyncreportprovider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\ProductSyncReportProvider
     */
    protected function getPrestashop_Module_Prestashopfacebook_Provider_ProductsyncreportproviderService()
    {
        return $this->services['prestashop\module\prestashopfacebook\provider\productsyncreportprovider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\ProductSyncReportProvider($this->get('prestashop\module\prestashopfacebook\adapter\configurationadapter'), $this->get('prestashop\module\prestashopfacebook\factory\psapiclientfactory'), $this->get('prestashop\module\prestashopfacebook\handler\errorhandler\errorhandler'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\repository\googlecategoryrepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\GoogleCategoryRepository
     */
    protected function getPrestashop_Module_Prestashopfacebook_Repository_GooglecategoryrepositoryService()
    {
        return $this->services['prestashop\module\prestashopfacebook\repository\googlecategoryrepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\GoogleCategoryRepository($this->get('prestashop\module\prestashopfacebook\adapter\configurationadapter'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\repository\productrepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository
     */
    protected function getPrestashop_Module_Prestashopfacebook_Repository_ProductrepositoryService()
    {
        return $this->services['prestashop\module\prestashopfacebook\repository\productrepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository($this->get('prestashop\module\ps_facebook\translations\psfacebooktranslations'), $this->get('ps_facebook.language'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\repository\serverinformationrepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\ServerInformationRepository
     */
    protected function getPrestashop_Module_Prestashopfacebook_Repository_ServerinformationrepositoryService()
    {
        return $this->services['prestashop\module\prestashopfacebook\repository\serverinformationrepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ServerInformationRepository($this->get('prestashop\psaccountsinstaller\installer\facade\psaccounts'));
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\repository\shoprepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository
     */
    protected function getPrestashop_Module_Prestashopfacebook_Repository_ShoprepositoryService()
    {
        return $this->services['prestashop\module\prestashopfacebook\repository\shoprepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository();
    }

    /**
     * Gets the public 'prestashop\module\prestashopfacebook\repository\tabrepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\TabRepository
     */
    protected function getPrestashop_Module_Prestashopfacebook_Repository_TabrepositoryService()
    {
        return $this->services['prestashop\module\prestashopfacebook\repository\tabrepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\TabRepository();
    }

    /**
     * Gets the public 'prestashop\module\ps_facebook\tracker\segment' shared service.
     *
     * @return \PrestaShop\Module\Ps_facebook\Tracker\Segment
     */
    protected function getPrestashop_Module_PsFacebook_Tracker_SegmentService()
    {
        return $this->services['prestashop\module\ps_facebook\tracker\segment'] = new \PrestaShop\Module\Ps_facebook\Tracker\Segment($this->get('ps_facebook.context'), $this->get('prestashop\module\prestashopfacebook\config\env'), $this->get('prestashop\module\prestashopfacebook\adapter\configurationadapter'), $this->get('prestashop\psaccountsinstaller\installer\facade\psaccounts'));
    }

    /**
     * Gets the public 'prestashop\module\ps_facebook\translations\psfacebooktranslations' shared service.
     *
     * @return \PrestaShop\Module\Ps_facebook\Translations\PsFacebookTranslations
     */
    protected function getPrestashop_Module_PsFacebook_Translations_PsfacebooktranslationsService()
    {
        return $this->services['prestashop\module\ps_facebook\translations\psfacebooktranslations'] = new \PrestaShop\Module\Ps_facebook\Translations\PsFacebookTranslations($this->get('ps_facebook'));
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
        return $this->services['prestashop\psaccountsinstaller\installer\installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('3.0.0');
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
}
