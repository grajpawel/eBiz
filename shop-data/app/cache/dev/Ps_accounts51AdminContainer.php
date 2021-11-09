<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * Ps_accounts51AdminContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class Ps_accounts51AdminContainer extends Container
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
            'prestashop\\module\\psaccounts\\adapter\\configuration' => 'getPrestashop_Module_Psaccounts_Adapter_ConfigurationService',
            'prestashop\\module\\psaccounts\\adapter\\link' => 'getPrestashop_Module_Psaccounts_Adapter_LinkService',
            'prestashop\\module\\psaccounts\\api\\client\\accountsclient' => 'getPrestashop_Module_Psaccounts_Api_Client_AccountsclientService',
            'prestashop\\module\\psaccounts\\api\\client\\servicesbillingclient' => 'getPrestashop_Module_Psaccounts_Api_Client_ServicesbillingclientService',
            'prestashop\\module\\psaccounts\\api\\client\\ssoclient' => 'getPrestashop_Module_Psaccounts_Api_Client_SsoclientService',
            'prestashop\\module\\psaccounts\\context\\shopcontext' => 'getPrestashop_Module_Psaccounts_Context_ShopcontextService',
            'prestashop\\module\\psaccounts\\handler\\error\\sentry' => 'getPrestashop_Module_Psaccounts_Handler_Error_SentryService',
            'prestashop\\module\\psaccounts\\installer\\installer' => 'getPrestashop_Module_Psaccounts_Installer_InstallerService',
            'prestashop\\module\\psaccounts\\presenter\\psaccountspresenter' => 'getPrestashop_Module_Psaccounts_Presenter_PsaccountspresenterService',
            'prestashop\\module\\psaccounts\\provider\\rsakeysprovider' => 'getPrestashop_Module_Psaccounts_Provider_RsakeysproviderService',
            'prestashop\\module\\psaccounts\\provider\\shopprovider' => 'getPrestashop_Module_Psaccounts_Provider_ShopproviderService',
            'prestashop\\module\\psaccounts\\repository\\configurationrepository' => 'getPrestashop_Module_Psaccounts_Repository_ConfigurationrepositoryService',
            'prestashop\\module\\psaccounts\\repository\\shoptokenrepository' => 'getPrestashop_Module_Psaccounts_Repository_ShoptokenrepositoryService',
            'prestashop\\module\\psaccounts\\repository\\usertokenrepository' => 'getPrestashop_Module_Psaccounts_Repository_UsertokenrepositoryService',
            'prestashop\\module\\psaccounts\\service\\psaccountsservice' => 'getPrestashop_Module_Psaccounts_Service_PsaccountsserviceService',
            'prestashop\\module\\psaccounts\\service\\psbillingservice' => 'getPrestashop_Module_Psaccounts_Service_PsbillingserviceService',
            'prestashop\\module\\psaccounts\\service\\shoplinkaccountservice' => 'getPrestashop_Module_Psaccounts_Service_ShoplinkaccountserviceService',
            'ps_accounts.context' => 'getPsAccounts_ContextService',
            'ps_accounts.logger' => 'getPsAccounts_LoggerService',
            'ps_accounts.module' => 'getPsAccounts_ModuleService',
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
     * Gets the public 'prestashop\module\psaccounts\adapter\configuration' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Adapter\Configuration
     */
    protected function getPrestashop_Module_Psaccounts_Adapter_ConfigurationService()
    {
        return $this->services['prestashop\module\psaccounts\adapter\configuration'] = new \PrestaShop\Module\PsAccounts\Adapter\Configuration($this->get('ps_accounts.context'));
    }

    /**
     * Gets the public 'prestashop\module\psaccounts\adapter\link' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Adapter\Link
     */
    protected function getPrestashop_Module_Psaccounts_Adapter_LinkService()
    {
        return $this->services['prestashop\module\psaccounts\adapter\link'] = new \PrestaShop\Module\PsAccounts\Adapter\Link($this->get('prestashop\module\psaccounts\context\shopcontext'));
    }

    /**
     * Gets the public 'prestashop\module\psaccounts\api\client\accountsclient' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient
     */
    protected function getPrestashop_Module_Psaccounts_Api_Client_AccountsclientService()
    {
        return $this->services['prestashop\module\psaccounts\api\client\accountsclient'] = new \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient('https://accounts-api.distribution.prestashop.net/v1/', $this->get('prestashop\module\psaccounts\provider\shopprovider'), $this->get('prestashop\module\psaccounts\adapter\link'));
    }

    /**
     * Gets the public 'prestashop\module\psaccounts\api\client\servicesbillingclient' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Api\Client\ServicesBillingClient
     */
    protected function getPrestashop_Module_Psaccounts_Api_Client_ServicesbillingclientService()
    {
        return $this->services['prestashop\module\psaccounts\api\client\servicesbillingclient'] = new \PrestaShop\Module\PsAccounts\Api\Client\ServicesBillingClient('https://billing-api.distribution.prestashop.net/', $this->get('prestashop\module\psaccounts\service\psaccountsservice'), $this->get('prestashop\module\psaccounts\provider\shopprovider'), $this->get('prestashop\module\psaccounts\adapter\link'));
    }

    /**
     * Gets the public 'prestashop\module\psaccounts\api\client\ssoclient' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Api\Client\SsoClient
     */
    protected function getPrestashop_Module_Psaccounts_Api_Client_SsoclientService()
    {
        return $this->services['prestashop\module\psaccounts\api\client\ssoclient'] = new \PrestaShop\Module\PsAccounts\Api\Client\SsoClient('https://auth.prestashop.com/api/v1/');
    }

    /**
     * Gets the public 'prestashop\module\psaccounts\context\shopcontext' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Context\ShopContext
     */
    protected function getPrestashop_Module_Psaccounts_Context_ShopcontextService()
    {
        return $this->services['prestashop\module\psaccounts\context\shopcontext'] = new \PrestaShop\Module\PsAccounts\Context\ShopContext($this->get('prestashop\module\psaccounts\repository\configurationrepository'), $this->get('prestashop\module\psaccounts\repository\usertokenrepository'), $this->get('ps_accounts.context'));
    }

    /**
     * Gets the public 'prestashop\module\psaccounts\handler\error\sentry' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Handler\Error\Sentry
     */
    protected function getPrestashop_Module_Psaccounts_Handler_Error_SentryService()
    {
        return $this->services['prestashop\module\psaccounts\handler\error\sentry'] = new \PrestaShop\Module\PsAccounts\Handler\Error\Sentry('https://4c7f6c8dd5aa405b8401a35f5cf26ada@o298402.ingest.sentry.io/5354585', 'production', $this->get('prestashop\module\psaccounts\repository\configurationrepository'));
    }

    /**
     * Gets the public 'prestashop\module\psaccounts\installer\installer' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Installer\Installer
     */
    protected function getPrestashop_Module_Psaccounts_Installer_InstallerService()
    {
        return $this->services['prestashop\module\psaccounts\installer\installer'] = new \PrestaShop\Module\PsAccounts\Installer\Installer($this->get('prestashop\module\psaccounts\context\shopcontext'), $this->get('prestashop\module\psaccounts\adapter\link'));
    }

    /**
     * Gets the public 'prestashop\module\psaccounts\presenter\psaccountspresenter' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Presenter\PsAccountsPresenter
     */
    protected function getPrestashop_Module_Psaccounts_Presenter_PsaccountspresenterService()
    {
        return $this->services['prestashop\module\psaccounts\presenter\psaccountspresenter'] = new \PrestaShop\Module\PsAccounts\Presenter\PsAccountsPresenter($this->get('prestashop\module\psaccounts\service\psaccountsservice'), $this->get('prestashop\module\psaccounts\provider\shopprovider'), $this->get('prestashop\module\psaccounts\service\shoplinkaccountservice'), $this->get('prestashop\module\psaccounts\installer\installer'), $this->get('prestashop\module\psaccounts\repository\configurationrepository'), $this->get('ps_accounts.module'));
    }

    /**
     * Gets the public 'prestashop\module\psaccounts\provider\rsakeysprovider' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\RsaKeysProvider
     */
    protected function getPrestashop_Module_Psaccounts_Provider_RsakeysproviderService()
    {
        return $this->services['prestashop\module\psaccounts\provider\rsakeysprovider'] = new \PrestaShop\Module\PsAccounts\Provider\RsaKeysProvider($this->get('prestashop\module\psaccounts\repository\configurationrepository'));
    }

    /**
     * Gets the public 'prestashop\module\psaccounts\provider\shopprovider' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\ShopProvider
     */
    protected function getPrestashop_Module_Psaccounts_Provider_ShopproviderService()
    {
        return $this->services['prestashop\module\psaccounts\provider\shopprovider'] = new \PrestaShop\Module\PsAccounts\Provider\ShopProvider($this->get('prestashop\module\psaccounts\context\shopcontext'), $this->get('prestashop\module\psaccounts\adapter\link'));
    }

    /**
     * Gets the public 'prestashop\module\psaccounts\repository\configurationrepository' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Repository\ConfigurationRepository
     */
    protected function getPrestashop_Module_Psaccounts_Repository_ConfigurationrepositoryService()
    {
        return $this->services['prestashop\module\psaccounts\repository\configurationrepository'] = new \PrestaShop\Module\PsAccounts\Repository\ConfigurationRepository($this->get('prestashop\module\psaccounts\adapter\configuration'));
    }

    /**
     * Gets the public 'prestashop\module\psaccounts\repository\shoptokenrepository' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Repository\ShopTokenRepository
     */
    protected function getPrestashop_Module_Psaccounts_Repository_ShoptokenrepositoryService()
    {
        return $this->services['prestashop\module\psaccounts\repository\shoptokenrepository'] = new \PrestaShop\Module\PsAccounts\Repository\ShopTokenRepository($this->get('prestashop\module\psaccounts\repository\configurationrepository'));
    }

    /**
     * Gets the public 'prestashop\module\psaccounts\repository\usertokenrepository' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Repository\UserTokenRepository
     */
    protected function getPrestashop_Module_Psaccounts_Repository_UsertokenrepositoryService()
    {
        return $this->services['prestashop\module\psaccounts\repository\usertokenrepository'] = new \PrestaShop\Module\PsAccounts\Repository\UserTokenRepository($this->get('prestashop\module\psaccounts\repository\configurationrepository'));
    }

    /**
     * Gets the public 'prestashop\module\psaccounts\service\psaccountsservice' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Service\PsAccountsService
     */
    protected function getPrestashop_Module_Psaccounts_Service_PsaccountsserviceService()
    {
        return $this->services['prestashop\module\psaccounts\service\psaccountsservice'] = new \PrestaShop\Module\PsAccounts\Service\PsAccountsService($this->get('ps_accounts.module'), $this->get('prestashop\module\psaccounts\repository\shoptokenrepository'), $this->get('prestashop\module\psaccounts\repository\usertokenrepository'), $this->get('prestashop\module\psaccounts\adapter\link'));
    }

    /**
     * Gets the public 'prestashop\module\psaccounts\service\psbillingservice' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Service\PsBillingService
     */
    protected function getPrestashop_Module_Psaccounts_Service_PsbillingserviceService()
    {
        return $this->services['prestashop\module\psaccounts\service\psbillingservice'] = new \PrestaShop\Module\PsAccounts\Service\PsBillingService($this->get('prestashop\module\psaccounts\api\client\servicesbillingclient'), $this->get('prestashop\module\psaccounts\repository\shoptokenrepository'), $this->get('prestashop\module\psaccounts\repository\configurationrepository'));
    }

    /**
     * Gets the public 'prestashop\module\psaccounts\service\shoplinkaccountservice' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Service\ShopLinkAccountService
     */
    protected function getPrestashop_Module_Psaccounts_Service_ShoplinkaccountserviceService()
    {
        return $this->services['prestashop\module\psaccounts\service\shoplinkaccountservice'] = new \PrestaShop\Module\PsAccounts\Service\ShopLinkAccountService($this->get('prestashop\module\psaccounts\provider\rsakeysprovider'), $this->get('prestashop\module\psaccounts\repository\shoptokenrepository'), $this->get('prestashop\module\psaccounts\repository\usertokenrepository'), $this->get('prestashop\module\psaccounts\repository\configurationrepository'), $this->get('prestashop\module\psaccounts\adapter\link'));
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
     * @return \Context
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
            'ps_accounts.environment' => 'production',
            'ps_accounts.accounts_api_url' => 'https://accounts-api.distribution.prestashop.net/v1/',
            'ps_accounts.accounts_ui_url' => 'https://accounts.distribution.prestashop.net/en',
            'ps_accounts.sso_api_url' => 'https://auth.prestashop.com/api/v1/',
            'ps_accounts.sso_account_url' => 'https://auth.prestashop.com/login',
            'ps_accounts.sso_resend_verification_email_url' => 'https://auth.prestashop.com/account/send-verification-email',
            'ps_accounts.billing_api_url' => 'https://billing-api.distribution.prestashop.net/',
            'ps_accounts.sentry_credentials' => 'https://4c7f6c8dd5aa405b8401a35f5cf26ada@o298402.ingest.sentry.io/5354585',
            'ps_accounts.segment_api_key' => 'Ga1Oof7CdN9FJJaXkeZHflErYKd0lHgD',
            'ps_accounts.check_api_ssl_cert' => true,
            'ps_accounts.verify_account_tokens' => true,
            'ps_accounts.accounts_vue_cdn_url' => 'https://unpkg.com/prestashop_accounts_vue_components@3/dist/psaccountsVue.umd.min.js',
            'ps_accounts.svc_accounts_ui_url' => 'https://accounts.psessentials.net',
        );
    }
}
