<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * Ps_metricsAdminContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class Ps_metricsAdminContainer extends Container
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
            'ps_accounts.facade' => 'getPsAccounts_FacadeService',
            'ps_accounts.installer' => 'getPsAccounts_InstallerService',
            'ps_metrics.adapter.link' => 'getPsMetrics_Adapter_LinkService',
            'ps_metrics.adapter.logger' => 'getPsMetrics_Adapter_LoggerService',
            'ps_metrics.api.analytics' => 'getPsMetrics_Api_AnalyticsService',
            'ps_metrics.api.client.analytics' => 'getPsMetrics_Api_Client_AnalyticsService',
            'ps_metrics.api.client.factory' => 'getPsMetrics_Api_Client_FactoryService',
            'ps_metrics.api.client.http' => 'getPsMetrics_Api_Client_HttpService',
            'ps_metrics.api.http' => 'getPsMetrics_Api_HttpService',
            'ps_metrics.api.manager' => 'getPsMetrics_Api_ManagerService',
            'ps_metrics.cache.data' => 'getPsMetrics_Cache_DataService',
            'ps_metrics.cache.specificdirectory' => 'getPsMetrics_Cache_SpecificdirectoryService',
            'ps_metrics.context.prestashop' => 'getPsMetrics_Context_PrestashopService',
            'ps_metrics.data.tipscards' => 'getPsMetrics_Data_TipscardsService',
            'ps_metrics.env.analytics' => 'getPsMetrics_Env_AnalyticsService',
            'ps_metrics.env.cache' => 'getPsMetrics_Env_CacheService',
            'ps_metrics.env.segment' => 'getPsMetrics_Env_SegmentService',
            'ps_metrics.graphql.dataloaders' => 'getPsMetrics_Graphql_DataloadersService',
            'ps_metrics.graphql.dataloaders.avgsessions' => 'getPsMetrics_Graphql_Dataloaders_AvgsessionsService',
            'ps_metrics.graphql.dataloaders.bouncerate' => 'getPsMetrics_Graphql_Dataloaders_BouncerateService',
            'ps_metrics.graphql.dataloaders.cartabandonedaverage' => 'getPsMetrics_Graphql_Dataloaders_CartabandonedaverageService',
            'ps_metrics.graphql.dataloaders.conversionrate' => 'getPsMetrics_Graphql_Dataloaders_ConversionrateService',
            'ps_metrics.graphql.dataloaders.engagementrate' => 'getPsMetrics_Graphql_Dataloaders_EngagementrateService',
            'ps_metrics.graphql.dataloaders.factory' => 'getPsMetrics_Graphql_Dataloaders_FactoryService',
            'ps_metrics.graphql.dataloaders.orderaverage' => 'getPsMetrics_Graphql_Dataloaders_OrderaverageService',
            'ps_metrics.graphql.dataloaders.orderaveragegroupbydate' => 'getPsMetrics_Graphql_Dataloaders_OrderaveragegroupbydateService',
            'ps_metrics.graphql.dataloaders.ordergroupbycustomer' => 'getPsMetrics_Graphql_Dataloaders_OrdergroupbycustomerService',
            'ps_metrics.graphql.dataloaders.ordersum' => 'getPsMetrics_Graphql_Dataloaders_OrdersumService',
            'ps_metrics.graphql.dataloaders.ordersumgroupbydate' => 'getPsMetrics_Graphql_Dataloaders_OrdersumgroupbydateService',
            'ps_metrics.graphql.dataloaders.ordersumgroupbysource' => 'getPsMetrics_Graphql_Dataloaders_OrdersumgroupbysourceService',
            'ps_metrics.graphql.dataloaders.producttopseller' => 'getPsMetrics_Graphql_Dataloaders_ProducttopsellerService',
            'ps_metrics.graphql.dataloaders.revenuegross' => 'getPsMetrics_Graphql_Dataloaders_RevenuegrossService',
            'ps_metrics.graphql.dataloaders.revenuegrossgroupbycategories' => 'getPsMetrics_Graphql_Dataloaders_RevenuegrossgroupbycategoriesService',
            'ps_metrics.graphql.dataloaders.revenuegrossgroupbydate' => 'getPsMetrics_Graphql_Dataloaders_RevenuegrossgroupbydateService',
            'ps_metrics.graphql.dataloaders.revenuegrossgroupbydistribution' => 'getPsMetrics_Graphql_Dataloaders_RevenuegrossgroupbydistributionService',
            'ps_metrics.graphql.dataloaders.sessions' => 'getPsMetrics_Graphql_Dataloaders_SessionsService',
            'ps_metrics.graphql.dataloaders.sessionsgroupbycategory' => 'getPsMetrics_Graphql_Dataloaders_SessionsgroupbycategoryService',
            'ps_metrics.graphql.dataloaders.sessionsgroupbydate' => 'getPsMetrics_Graphql_Dataloaders_SessionsgroupbydateService',
            'ps_metrics.graphql.dataloaders.sessionsgroupbyhour' => 'getPsMetrics_Graphql_Dataloaders_SessionsgroupbyhourService',
            'ps_metrics.graphql.dataloaders.setproducttouradvanceddone' => 'getPsMetrics_Graphql_Dataloaders_SetproducttouradvanceddoneService',
            'ps_metrics.graphql.dataloaders.setproducttourfreedone' => 'getPsMetrics_Graphql_Dataloaders_SetproducttourfreedoneService',
            'ps_metrics.graphql.dataloaders.tipscards' => 'getPsMetrics_Graphql_Dataloaders_TipscardsService',
            'ps_metrics.graphql.dataloaders.uniqueusers' => 'getPsMetrics_Graphql_Dataloaders_UniqueusersService',
            'ps_metrics.handler.guzzleapi' => 'getPsMetrics_Handler_GuzzleapiService',
            'ps_metrics.helper.api' => 'getPsMetrics_Helper_ApiService',
            'ps_metrics.helper.data' => 'getPsMetrics_Helper_DataService',
            'ps_metrics.helper.db' => 'getPsMetrics_Helper_DbService',
            'ps_metrics.helper.json' => 'getPsMetrics_Helper_JsonService',
            'ps_metrics.helper.module' => 'getPsMetrics_Helper_ModuleService',
            'ps_metrics.helper.number' => 'getPsMetrics_Helper_NumberService',
            'ps_metrics.helper.segment' => 'getPsMetrics_Helper_SegmentService',
            'ps_metrics.helper.shop' => 'getPsMetrics_Helper_ShopService',
            'ps_metrics.helper.tools' => 'getPsMetrics_Helper_ToolsService',
            'ps_metrics.kpi.configuration' => 'getPsMetrics_Kpi_ConfigurationService',
            'ps_metrics.kpi.conversion' => 'getPsMetrics_Kpi_ConversionService',
            'ps_metrics.kpi.kpi' => 'getPsMetrics_Kpi_KpiService',
            'ps_metrics.kpi.manager' => 'getPsMetrics_Kpi_ManagerService',
            'ps_metrics.kpi.orders' => 'getPsMetrics_Kpi_OrdersService',
            'ps_metrics.kpi.revenues' => 'getPsMetrics_Kpi_RevenuesService',
            'ps_metrics.kpi.strategyinterface' => 'getPsMetrics_Kpi_StrategyinterfaceService',
            'ps_metrics.kpi.total' => 'getPsMetrics_Kpi_TotalService',
            'ps_metrics.kpi.visits' => 'getPsMetrics_Kpi_VisitsService',
            'ps_metrics.middleware' => 'getPsMetrics_MiddlewareService',
            'ps_metrics.middleware.log' => 'getPsMetrics_Middleware_LogService',
            'ps_metrics.middleware.response' => 'getPsMetrics_Middleware_ResponseService',
            'ps_metrics.middleware.response.default' => 'getPsMetrics_Middleware_Response_DefaultService',
            'ps_metrics.middleware.sentry' => 'getPsMetrics_Middleware_SentryService',
            'ps_metrics.module' => 'getPsMetrics_ModuleService',
            'ps_metrics.module.dashboard.modules' => 'getPsMetrics_Module_Dashboard_ModulesService',
            'ps_metrics.module.gainstaller' => 'getPsMetrics_Module_GainstallerService',
            'ps_metrics.module.install' => 'getPsMetrics_Module_InstallService',
            'ps_metrics.module.uninstall' => 'getPsMetrics_Module_UninstallService',
            'ps_metrics.presenter.store.context' => 'getPsMetrics_Presenter_Store_ContextService',
            'ps_metrics.presenter.store.dashboard' => 'getPsMetrics_Presenter_Store_DashboardService',
            'ps_metrics.presenter.store.settings' => 'getPsMetrics_Presenter_Store_SettingsService',
            'ps_metrics.presenter.store.store' => 'getPsMetrics_Presenter_Store_StoreService',
            'ps_metrics.provider.analyticsaccountslist' => 'getPsMetrics_Provider_AnalyticsaccountslistService',
            'ps_metrics.provider.googletag' => 'getPsMetrics_Provider_GoogletagService',
            'ps_metrics.provider.shops' => 'getPsMetrics_Provider_ShopsService',
            'ps_metrics.repository.configuration' => 'getPsMetrics_Repository_ConfigurationService',
            'ps_metrics.repository.hookmodule' => 'getPsMetrics_Repository_HookmoduleService',
            'ps_metrics.repository.orders' => 'getPsMetrics_Repository_OrdersService',
            'ps_metrics.repository.payment' => 'getPsMetrics_Repository_PaymentService',
            'ps_metrics.tracker.segment' => 'getPsMetrics_Tracker_SegmentService',
            'ps_metrics.translation.dashboard' => 'getPsMetrics_Translation_DashboardService',
            'ps_metrics.translation.settings' => 'getPsMetrics_Translation_SettingsService',
            'ps_metrics.validation.processselectaccountanalytics' => 'getPsMetrics_Validation_ProcessselectaccountanalyticsService',
            'ps_metrics.validation.retrievedata' => 'getPsMetrics_Validation_RetrievedataService',
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
     * Gets the public 'ps_accounts.facade' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts
     */
    protected function getPsAccounts_FacadeService()
    {
        return $this->services['ps_accounts.facade'] = new \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts($this->get('ps_accounts.installer'));
    }

    /**
     * Gets the public 'ps_accounts.installer' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Installer
     */
    protected function getPsAccounts_InstallerService()
    {
        return $this->services['ps_accounts.installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('5.0');
    }

    /**
     * Gets the public 'ps_metrics.adapter.link' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Adapter\LinkAdapter
     */
    protected function getPsMetrics_Adapter_LinkService()
    {
        return $this->services['ps_metrics.adapter.link'] = new \PrestaShop\Module\Ps_metrics\Adapter\LinkAdapter($this->get('ps_metrics.module'), $this->get('ps_metrics.context.prestashop'), $this->get('ps_metrics.helper.tools'));
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
        return $this->services['ps_metrics.api.analytics'] = new \PrestaShop\Module\Ps_metrics\Api\AnalyticsApi($this->get('ps_metrics.api.client.analytics'), $this->get('ps_metrics.context.prestashop'), $this->get('ps_metrics.env.analytics'), $this->get('ps_metrics.helper.json'));
    }

    /**
     * Gets the public 'ps_metrics.api.client.analytics' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Api\Client\AnalyticsClient
     */
    protected function getPsMetrics_Api_Client_AnalyticsService()
    {
        return $this->services['ps_metrics.api.client.analytics'] = new \PrestaShop\Module\Ps_metrics\Api\Client\AnalyticsClient($this->get('ps_accounts.facade'), $this->get('ps_metrics.middleware.response.default'), $this->get('ps_metrics.middleware.log'), $this->get('ps_metrics.middleware.sentry'), $this->get('ps_metrics.middleware.response'), $this->get('ps_metrics.handler.guzzleapi'));
    }

    /**
     * Gets the public 'ps_metrics.api.client.factory' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Api\Client\ClientManager
     */
    protected function getPsMetrics_Api_Client_FactoryService()
    {
        return $this->services['ps_metrics.api.client.factory'] = new \PrestaShop\Module\Ps_metrics\Api\Client\ClientManager($this->get('ps_metrics.middleware.response.default'), $this->get('ps_metrics.middleware.log'), $this->get('ps_metrics.middleware.sentry'), $this->get('ps_metrics.middleware.response'), $this->get('ps_metrics.handler.guzzleapi'));
    }

    /**
     * Gets the public 'ps_metrics.api.client.http' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Api\Client\HttpClient
     */
    protected function getPsMetrics_Api_Client_HttpService()
    {
        return $this->services['ps_metrics.api.client.http'] = new \PrestaShop\Module\Ps_metrics\Api\Client\HttpClient($this->get('ps_metrics.middleware.response.default'), $this->get('ps_metrics.middleware.log'), $this->get('ps_metrics.middleware.sentry'), $this->get('ps_metrics.middleware.response'), $this->get('ps_metrics.handler.guzzleapi'));
    }

    /**
     * Gets the public 'ps_metrics.api.http' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Api\HttpApi
     */
    protected function getPsMetrics_Api_HttpService()
    {
        return $this->services['ps_metrics.api.http'] = new \PrestaShop\Module\Ps_metrics\Api\HttpApi($this->get('ps_metrics.api.client.http'));
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
     * Gets the public 'ps_metrics.cache.data' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Cache\DataCache
     */
    protected function getPsMetrics_Cache_DataService()
    {
        return $this->services['ps_metrics.cache.data'] = new \PrestaShop\Module\Ps_metrics\Cache\DataCache($this->get('ps_metrics.cache.specificdirectory'), $this->get('ps_metrics.env.cache'), $this->get('ps_metrics.helper.json'), $this->get('ps_metrics.adapter.logger'));
    }

    /**
     * Gets the public 'ps_metrics.cache.specificdirectory' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Cache\DirectoryCache
     */
    protected function getPsMetrics_Cache_SpecificdirectoryService()
    {
        return $this->services['ps_metrics.cache.specificdirectory'] = new \PrestaShop\Module\Ps_metrics\Cache\DirectoryCache();
    }

    /**
     * Gets the public 'ps_metrics.context.prestashop' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Context\PrestaShopContext
     */
    protected function getPsMetrics_Context_PrestashopService()
    {
        return $this->services['ps_metrics.context.prestashop'] = new \PrestaShop\Module\Ps_metrics\Context\PrestaShopContext();
    }

    /**
     * Gets the public 'ps_metrics.data.tipscards' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Data\TipsCardsData
     */
    protected function getPsMetrics_Data_TipscardsService()
    {
        return $this->services['ps_metrics.data.tipscards'] = new \PrestaShop\Module\Ps_metrics\Data\TipsCardsData($this->get('ps_metrics.api.analytics'));
    }

    /**
     * Gets the public 'ps_metrics.env.analytics' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Environment\AnalyticsEnv
     */
    protected function getPsMetrics_Env_AnalyticsService()
    {
        return $this->services['ps_metrics.env.analytics'] = new \PrestaShop\Module\Ps_metrics\Environment\AnalyticsEnv();
    }

    /**
     * Gets the public 'ps_metrics.env.cache' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Environment\CacheEnv
     */
    protected function getPsMetrics_Env_CacheService()
    {
        return $this->services['ps_metrics.env.cache'] = new \PrestaShop\Module\Ps_metrics\Environment\CacheEnv();
    }

    /**
     * Gets the public 'ps_metrics.env.segment' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Environment\SegmentEnv
     */
    protected function getPsMetrics_Env_SegmentService()
    {
        return $this->services['ps_metrics.env.segment'] = new \PrestaShop\Module\Ps_metrics\Environment\SegmentEnv();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\DataLoaders
     */
    protected function getPsMetrics_Graphql_DataloadersService()
    {
        return $this->services['ps_metrics.graphql.dataloaders'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\DataLoaders($this->get('ps_metrics.cache.data'), $this->get('ps_metrics.helper.json'));
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.avgsessions' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\AvgSessionsDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_AvgsessionsService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.avgsessions'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\AvgSessionsDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.bouncerate' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\BounceRateDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_BouncerateService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.bouncerate'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\BounceRateDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.cartabandonedaverage' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\CartAbandonedAverageDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_CartabandonedaverageService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.cartabandonedaverage'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\CartAbandonedAverageDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.conversionrate' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\ConversionRateDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_ConversionrateService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.conversionrate'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\ConversionRateDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.engagementrate' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\EngagementRateDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_EngagementrateService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.engagementrate'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\EngagementRateDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.factory' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\DataLoaderFactory
     */
    protected function getPsMetrics_Graphql_Dataloaders_FactoryService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.factory'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\DataLoaderFactory();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.orderaverage' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderAverageDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_OrderaverageService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.orderaverage'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderAverageDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.orderaveragegroupbydate' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderAverageGroupByDateDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_OrderaveragegroupbydateService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.orderaveragegroupbydate'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderAverageGroupByDateDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.ordergroupbycustomer' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderGroupByCustomerDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_OrdergroupbycustomerService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.ordergroupbycustomer'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderGroupByCustomerDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.ordersum' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderSumDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_OrdersumService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.ordersum'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderSumDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.ordersumgroupbydate' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderSumGroupByDateDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_OrdersumgroupbydateService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.ordersumgroupbydate'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderSumGroupByDateDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.ordersumgroupbysource' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderSumGroupBySourceDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_OrdersumgroupbysourceService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.ordersumgroupbysource'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderSumGroupBySourceDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.producttopseller' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\ProductTopSellerDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_ProducttopsellerService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.producttopseller'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\ProductTopSellerDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.revenuegross' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\RevenueGrossDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_RevenuegrossService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.revenuegross'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\RevenueGrossDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.revenuegrossgroupbycategories' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\RevenueGrossGroupByCategoriesDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_RevenuegrossgroupbycategoriesService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.revenuegrossgroupbycategories'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\RevenueGrossGroupByCategoriesDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.revenuegrossgroupbydate' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\RevenueGrossGroupByDateDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_RevenuegrossgroupbydateService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.revenuegrossgroupbydate'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\RevenueGrossGroupByDateDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.revenuegrossgroupbydistribution' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\revenueGrossGroupByDistributionDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_RevenuegrossgroupbydistributionService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.revenuegrossgroupbydistribution'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\revenueGrossGroupByDistributionDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.sessions' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_SessionsService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.sessions'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.sessionsgroupbycategory' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsGroupByCategoryDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_SessionsgroupbycategoryService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.sessionsgroupbycategory'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsGroupByCategoryDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.sessionsgroupbydate' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsGroupByDateDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_SessionsgroupbydateService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.sessionsgroupbydate'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsGroupByDateDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.sessionsgroupbyhour' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsGroupByHourDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_SessionsgroupbyhourService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.sessionsgroupbyhour'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsGroupByHourDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.setproducttouradvanceddone' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SetProductTourAdvancedDoneDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_SetproducttouradvanceddoneService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.setproducttouradvanceddone'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SetProductTourAdvancedDoneDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.setproducttourfreedone' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SetProductTourFreeDoneDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_SetproducttourfreedoneService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.setproducttourfreedone'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SetProductTourFreeDoneDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.tipscards' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\TipsCardsDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_TipscardsService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.tipscards'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\TipsCardsDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.uniqueusers' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\UniqueUsersDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_UniqueusersService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.uniqueusers'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\UniqueUsersDataLoaders();
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
     * Gets the public 'ps_metrics.helper.api' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\ApiHelper
     */
    protected function getPsMetrics_Helper_ApiService()
    {
        return $this->services['ps_metrics.helper.api'] = new \PrestaShop\Module\Ps_metrics\Helper\ApiHelper();
    }

    /**
     * Gets the public 'ps_metrics.helper.data' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\DataHelper
     */
    protected function getPsMetrics_Helper_DataService()
    {
        return $this->services['ps_metrics.helper.data'] = new \PrestaShop\Module\Ps_metrics\Helper\DataHelper();
    }

    /**
     * Gets the public 'ps_metrics.helper.db' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\DbHelper
     */
    protected function getPsMetrics_Helper_DbService()
    {
        return $this->services['ps_metrics.helper.db'] = new \PrestaShop\Module\Ps_metrics\Helper\DbHelper($this->get('ps_metrics.cache.data'));
    }

    /**
     * Gets the public 'ps_metrics.helper.json' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\JsonHelper
     */
    protected function getPsMetrics_Helper_JsonService()
    {
        return $this->services['ps_metrics.helper.json'] = new \PrestaShop\Module\Ps_metrics\Helper\JsonHelper($this->get('ps_metrics.adapter.logger'));
    }

    /**
     * Gets the public 'ps_metrics.helper.module' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\ModuleHelper
     */
    protected function getPsMetrics_Helper_ModuleService()
    {
        return $this->services['ps_metrics.helper.module'] = new \PrestaShop\Module\Ps_metrics\Helper\ModuleHelper();
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
     * Gets the public 'ps_metrics.helper.segment' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\SegmentHelper
     */
    protected function getPsMetrics_Helper_SegmentService()
    {
        return $this->services['ps_metrics.helper.segment'] = new \PrestaShop\Module\Ps_metrics\Helper\SegmentHelper($this->get('ps_metrics.env.segment'));
    }

    /**
     * Gets the public 'ps_metrics.helper.shop' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\ShopHelper
     */
    protected function getPsMetrics_Helper_ShopService()
    {
        return $this->services['ps_metrics.helper.shop'] = new \PrestaShop\Module\Ps_metrics\Helper\ShopHelper();
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
     * Gets the public 'ps_metrics.kpi.configuration' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\Configuration\KpiConfiguration
     */
    protected function getPsMetrics_Kpi_ConfigurationService()
    {
        return $this->services['ps_metrics.kpi.configuration'] = new \PrestaShop\Module\Ps_metrics\Kpi\Configuration\KpiConfiguration();
    }

    /**
     * Gets the public 'ps_metrics.kpi.conversion' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\ConversionKpi
     */
    protected function getPsMetrics_Kpi_ConversionService()
    {
        return $this->services['ps_metrics.kpi.conversion'] = new \PrestaShop\Module\Ps_metrics\Kpi\ConversionKpi($this->get('ps_metrics.kpi.configuration'), $this->get('ps_metrics.helper.number'), $this->get('ps_metrics.repository.configuration'), $this->get('ps_metrics.kpi.visits'), $this->get('ps_metrics.kpi.orders'), $this->get('ps_metrics.kpi.revenues'));
    }

    /**
     * Gets the public 'ps_metrics.kpi.kpi' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\Kpi
     */
    protected function getPsMetrics_Kpi_KpiService()
    {
        return $this->services['ps_metrics.kpi.kpi'] = new \PrestaShop\Module\Ps_metrics\Kpi\Kpi($this->get('ps_metrics.kpi.configuration'));
    }

    /**
     * Gets the public 'ps_metrics.kpi.manager' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\KpiManager
     */
    protected function getPsMetrics_Kpi_ManagerService()
    {
        return $this->services['ps_metrics.kpi.manager'] = new \PrestaShop\Module\Ps_metrics\Kpi\KpiManager($this->get('ps_metrics.kpi.configuration'));
    }

    /**
     * Gets the public 'ps_metrics.kpi.orders' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\OrdersKpi
     */
    protected function getPsMetrics_Kpi_OrdersService()
    {
        return $this->services['ps_metrics.kpi.orders'] = new \PrestaShop\Module\Ps_metrics\Kpi\OrdersKpi($this->get('ps_metrics.kpi.configuration'), $this->get('ps_metrics.helper.data'), $this->get('ps_metrics.repository.orders'), $this->get('ps_metrics.helper.number'), $this->get('ps_metrics.kpi.revenues'), $this->get('ps_metrics.repository.payment'));
    }

    /**
     * Gets the public 'ps_metrics.kpi.revenues' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\RevenuesKpi
     */
    protected function getPsMetrics_Kpi_RevenuesService()
    {
        return $this->services['ps_metrics.kpi.revenues'] = new \PrestaShop\Module\Ps_metrics\Kpi\RevenuesKpi($this->get('ps_metrics.kpi.configuration'), $this->get('ps_metrics.helper.data'), $this->get('ps_metrics.repository.orders'));
    }

    /**
     * Gets the public 'ps_metrics.kpi.strategyinterface' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\KpiStrategyInterface
     */
    protected function getPsMetrics_Kpi_StrategyinterfaceService()
    {
        return $this->services['ps_metrics.kpi.strategyinterface'] = new \PrestaShop\Module\Ps_metrics\Kpi\KpiStrategyInterface();
    }

    /**
     * Gets the public 'ps_metrics.kpi.total' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\TotalKpi
     */
    protected function getPsMetrics_Kpi_TotalService()
    {
        return $this->services['ps_metrics.kpi.total'] = new \PrestaShop\Module\Ps_metrics\Kpi\TotalKpi($this->get('ps_metrics.kpi.configuration'), $this->get('ps_metrics.kpi.visits'), $this->get('ps_metrics.kpi.orders'), $this->get('ps_metrics.kpi.revenues'));
    }

    /**
     * Gets the public 'ps_metrics.kpi.visits' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\VisitsKpi
     */
    protected function getPsMetrics_Kpi_VisitsService()
    {
        return $this->services['ps_metrics.kpi.visits'] = new \PrestaShop\Module\Ps_metrics\Kpi\VisitsKpi($this->get('ps_metrics.kpi.configuration'), $this->get('ps_metrics.helper.data'), $this->get('ps_metrics.cache.data'), $this->get('ps_metrics.repository.configuration'), $this->get('ps_metrics.api.analytics'));
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
        return $this->services['ps_metrics.middleware.log'] = new \PrestaShop\Module\Ps_metrics\Middleware\LogMiddleware($this->get('ps_metrics.adapter.logger'));
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
        return $this->services['ps_metrics.middleware.response.default'] = new \PrestaShop\Module\Ps_metrics\Middleware\CheckResponseMiddleware($this->get('ps_metrics.helper.json'));
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
     * Gets the public 'ps_metrics.module.dashboard.modules' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Module\DashboardModules
     */
    protected function getPsMetrics_Module_Dashboard_ModulesService()
    {
        return $this->services['ps_metrics.module.dashboard.modules'] = new \PrestaShop\Module\Ps_metrics\Module\DashboardModules($this->get('ps_metrics.module'), $this->get('ps_metrics.repository.configuration'));
    }

    /**
     * Gets the public 'ps_metrics.module.gainstaller' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Module\GAInstaller
     */
    protected function getPsMetrics_Module_GainstallerService()
    {
        return $this->services['ps_metrics.module.gainstaller'] = new \PrestaShop\Module\Ps_metrics\Module\GAInstaller($this->get('ps_metrics.adapter.link'), $this->get('ps_metrics.helper.module'), $this->get('ps_metrics.helper.tools'));
    }

    /**
     * Gets the public 'ps_metrics.module.install' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Module\Install
     */
    protected function getPsMetrics_Module_InstallService()
    {
        return $this->services['ps_metrics.module.install'] = new \PrestaShop\Module\Ps_metrics\Module\Install($this->get('ps_metrics.module'), $this->get('ps_metrics.repository.configuration'), $this->get('ps_metrics.repository.hookmodule'));
    }

    /**
     * Gets the public 'ps_metrics.module.uninstall' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Module\Uninstall
     */
    protected function getPsMetrics_Module_UninstallService()
    {
        return $this->services['ps_metrics.module.uninstall'] = new \PrestaShop\Module\Ps_metrics\Module\Uninstall($this->get('ps_metrics.module'), $this->get('ps_accounts.facade'), $this->get('ps_metrics.repository.configuration'), $this->get('ps_metrics.api.analytics'));
    }

    /**
     * Gets the public 'ps_metrics.presenter.store.context' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Presenter\Store\Context\ContextPresenter
     */
    protected function getPsMetrics_Presenter_Store_ContextService()
    {
        return $this->services['ps_metrics.presenter.store.context'] = new \PrestaShop\Module\Ps_metrics\Presenter\Store\Context\ContextPresenter($this->get('ps_metrics.module'), $this->get('ps_metrics.context.prestashop'), $this->get('ps_accounts.facade'), $this->get('ps_metrics.adapter.link'), $this->get('ps_metrics.repository.configuration'), $this->get('ps_metrics.provider.shops'), $this->get('ps_metrics.module.dashboard.modules'), $this->get('ps_metrics.provider.analyticsaccountslist'), $this->get('ps_metrics.api.http'), $this->get('ps_metrics.helper.tools'), $this->get('ps_metrics.helper.db'));
    }

    /**
     * Gets the public 'ps_metrics.presenter.store.dashboard' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Presenter\Store\Dashboard\DashboardPresenter
     */
    protected function getPsMetrics_Presenter_Store_DashboardService()
    {
        return $this->services['ps_metrics.presenter.store.dashboard'] = new \PrestaShop\Module\Ps_metrics\Presenter\Store\Dashboard\DashboardPresenter($this->get('ps_metrics.module'), $this->get('ps_metrics.context.prestashop'), $this->get('ps_metrics.translation.dashboard'), $this->get('ps_metrics.adapter.link'));
    }

    /**
     * Gets the public 'ps_metrics.presenter.store.settings' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Presenter\Store\Settings\SettingsPresenter
     */
    protected function getPsMetrics_Presenter_Store_SettingsService()
    {
        return $this->services['ps_metrics.presenter.store.settings'] = new \PrestaShop\Module\Ps_metrics\Presenter\Store\Settings\SettingsPresenter($this->get('ps_metrics.module'), $this->get('ps_metrics.context.prestashop'), $this->get('ps_metrics.translation.settings'), $this->get('ps_metrics.adapter.link'), $this->get('ps_metrics.repository.configuration'), $this->get('ps_metrics.provider.shops'), $this->get('ps_metrics.provider.analyticsaccountslist'), $this->get('ps_metrics.provider.googletag'), $this->get('ps_metrics.module.gainstaller'), $this->get('ps_metrics.api.http'));
    }

    /**
     * Gets the public 'ps_metrics.presenter.store.store' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Presenter\Store\StorePresenter
     */
    protected function getPsMetrics_Presenter_Store_StoreService()
    {
        return $this->services['ps_metrics.presenter.store.store'] = new \PrestaShop\Module\Ps_metrics\Presenter\Store\StorePresenter($this->get('ps_metrics.module'), $this->get('ps_metrics.context.prestashop'), $this->get('ps_metrics.presenter.store.context'), $this->get('ps_metrics.presenter.store.dashboard'), $this->get('ps_metrics.presenter.store.settings'));
    }

    /**
     * Gets the public 'ps_metrics.provider.analyticsaccountslist' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Provider\AnalyticsAccountsListProvider
     */
    protected function getPsMetrics_Provider_AnalyticsaccountslistService()
    {
        return $this->services['ps_metrics.provider.analyticsaccountslist'] = new \PrestaShop\Module\Ps_metrics\Provider\AnalyticsAccountsListProvider($this->get('ps_metrics.repository.configuration'), $this->get('ps_metrics.helper.json'), $this->get('ps_metrics.api.analytics'));
    }

    /**
     * Gets the public 'ps_metrics.provider.googletag' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Provider\GoogleTagProvider
     */
    protected function getPsMetrics_Provider_GoogletagService()
    {
        return $this->services['ps_metrics.provider.googletag'] = new \PrestaShop\Module\Ps_metrics\Provider\GoogleTagProvider($this->get('ps_metrics.api.http'));
    }

    /**
     * Gets the public 'ps_metrics.provider.shops' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Provider\ShopsProvider
     */
    protected function getPsMetrics_Provider_ShopsService()
    {
        return $this->services['ps_metrics.provider.shops'] = new \PrestaShop\Module\Ps_metrics\Provider\ShopsProvider($this->get('ps_metrics.helper.tools'), $this->get('ps_metrics.helper.shop'));
    }

    /**
     * Gets the public 'ps_metrics.repository.configuration' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Repository\ConfigurationRepository
     */
    protected function getPsMetrics_Repository_ConfigurationService()
    {
        return $this->services['ps_metrics.repository.configuration'] = new \PrestaShop\Module\Ps_metrics\Repository\ConfigurationRepository($this->get('ps_metrics.context.prestashop'));
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
     * Gets the public 'ps_metrics.repository.orders' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Repository\OrdersRepository
     */
    protected function getPsMetrics_Repository_OrdersService()
    {
        return $this->services['ps_metrics.repository.orders'] = new \PrestaShop\Module\Ps_metrics\Repository\OrdersRepository($this->get('ps_metrics.helper.db'), $this->get('ps_metrics.helper.shop'), $this->get('ps_metrics.context.prestashop'), NULL);
    }

    /**
     * Gets the public 'ps_metrics.repository.payment' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Repository\PaymentRepository
     */
    protected function getPsMetrics_Repository_PaymentService()
    {
        return $this->services['ps_metrics.repository.payment'] = new \PrestaShop\Module\Ps_metrics\Repository\PaymentRepository();
    }

    /**
     * Gets the public 'ps_metrics.tracker.segment' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Tracker\Segment
     */
    protected function getPsMetrics_Tracker_SegmentService()
    {
        return $this->services['ps_metrics.tracker.segment'] = new \PrestaShop\Module\Ps_metrics\Tracker\Segment($this->get('ps_metrics.env.segment'), $this->get('ps_metrics.helper.segment'), $this->get('ps_metrics.context.prestashop'), $this->get('ps_metrics.helper.shop'));
    }

    /**
     * Gets the public 'ps_metrics.translation.dashboard' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Translation\DashboardTranslation
     */
    protected function getPsMetrics_Translation_DashboardService()
    {
        return $this->services['ps_metrics.translation.dashboard'] = new \PrestaShop\Module\Ps_metrics\Translation\DashboardTranslation($this->get('ps_metrics.module'), $this->get('ps_metrics.context.prestashop'));
    }

    /**
     * Gets the public 'ps_metrics.translation.settings' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Translation\SettingsTranslation
     */
    protected function getPsMetrics_Translation_SettingsService()
    {
        return $this->services['ps_metrics.translation.settings'] = new \PrestaShop\Module\Ps_metrics\Translation\SettingsTranslation($this->get('ps_metrics.module'), $this->get('ps_metrics.context.prestashop'));
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

    /**
     * Gets the public 'ps_metrics.validation.retrievedata' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Validation\RetrieveData
     */
    protected function getPsMetrics_Validation_RetrievedataService()
    {
        return $this->services['ps_metrics.validation.retrievedata'] = new \PrestaShop\Module\Ps_metrics\Validation\RetrieveData();
    }
}
