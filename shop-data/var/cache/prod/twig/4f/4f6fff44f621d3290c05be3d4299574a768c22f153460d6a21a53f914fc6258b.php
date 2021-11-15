<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__6edb2070770c0771834508efb77270093be9135cb497d39cb45211a464df71a0 */
class __TwigTemplate_6bb7c7a5dbe0114d36e2a9a36210ae803caf2a21446e1ec1d26af80305b9d905 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Tłumaczenia • jaśniej - sklep z lampami</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminTranslations';
    var iso_user = 'pl';
    var lang_is_rtl = '0';
    var full_language_code = 'pl';
    var full_cldr_language_code = 'pl-PL';
    var country_iso_code = 'PL';
    var _PS_VERSION_ = '1.7.8.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Złożono nowe zamówienie w Twoim sklepie.';
    var order_number_msg = 'Numer zamówienia: ';
    var total_msg = 'Razem: ';
    var from_msg = 'Od: ';
    var see_order_msg = 'Zobacz to zamówienie';
    var new_customer_msg = 'Nowy klient zarejestrował się w Twoim sklepie.';
    var customer_name_msg = 'Nazwa klienta: ';
    var new_msg = 'Nowa wiadomość pojawiła się w Twoim sklepie.';
    var see_msg = 'Przeczytaj tą wiadomość';
    var token = '899d41983f5c2c55d1285ef86024e150';
    var token_admin_orders = tokenAdminOrders = '956fba5d01be7142a5ea86c547e355b6';
    var token_admin_customers = '3f138668bd453c03a294f4e8fcd9e09c';
    var token_admin_customer_threads = tokenAdminCustomerThreads = 'dfb0ddf7d5c0fe0c06fe5bc7a5e67df1';
    var currentIndex = 'index.php?controller=AdminTranslations';
    var employee_token = 'db065ce881e761290d47337d2783e34f';
    var choose_language_translate = 'Wybierz język:';
    var default_language = '1';
    var admin_modules_link = '/admin0009e8qap/index.php/improve/modules/catalog/recommended?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg';
    var admin_notification_get_link = '/admin0009e8qap/index.php/common/notifications?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg';
    var admin_notification_push_link = adminNotificationPushLink = '/admin0009e8qap/index.php/common/notifications/ack?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg';
    var tab_modules_list = '';
    var update_success_msg = 'Aktualizacja powiodła się';
    var errorLogin = 'PrestaShop nie mógł zalogować się do Dodatków, sprawdź swoje uprawnienia i połączenie internetowe.';
    var search_product_msg = 'Szukaj produktu';
  </script>

      <link href=\"/admin0009e8qap/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin0009e8qap/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin0009e8qap\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin0009e8qap\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\u0142\",\"name\":\"Z\\u0142oty polski\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\u0142\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin0009e8qap/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.8.0\"></script>
<script type=\"text/javascript\" src=\"/admin0009e8qap/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.8.0\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin0009e8qap/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_googleanalytics/views/js/GoogleAnalyticActionLib.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"https:\\/\\/localhost\\/admin0009e8qap\\/index.php?controller=AdminGamification&token=780aa281114a4616ac45c1d120cf11f2\";
            var current_id_tab = 72;
        </script>
<script type=\"text/javascript\">
\t(window.gaDevIds=window.gaDevIds||[]).push('d6YPbH');
\t(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
\t(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
\tm=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
\t})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-212801011-1', 'auto');
                        ga('set', 'nonInteraction', true);
    
    ga('require', 'ec');
</script>



";
        // line 100
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body
  class=\"lang-pl admintranslations\"
  data-base-url=\"/admin0009e8qap/index.php\"  data-token=\"1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://localhost/admin0009e8qap/index.php?controller=AdminDashboard&amp;token=79122b56a0bbed1584201bb3d55e9022\"></a>
      <span id=\"shop_version\">1.7.8.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Szybki dostęp
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/admin0009e8qap/index.php?controller=AdminCategories&amp;addcategory&amp;token=b432ed7af01a6f7f98d9b46d98c87575\"
                 data-item=\"Nowa kategoria\"
      >Nowa kategoria</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/admin0009e8qap/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=d3c5fe281b9556d80b7529dbcac2ad95\"
                 data-item=\"Nowy kupon\"
      >Nowy kupon</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/admin0009e8qap/index.php/sell/catalog/products/new?token=97315b0bd23548103b3876b85b39e349\"
                 data-item=\"Nowy produkt\"
      >Nowy produkt</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/admin0009e8qap/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=3fa8b062730b4168be0ef0f397f6e131\"
                 data-item=\"Ocena katalogu\"
      >Ocena katalogu</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/admin0009e8qap/index.php/improve/modules/manage?token=97315b0bd23548103b3876b85b39e349\"
                 data-item=\"Zainstalowane moduły\"
      >Zainstalowane moduły</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/admin0009e8qap/index.php?controller=AdminOrders&amp;token=956fba5d01be7142a5ea86c547e355b6\"
                 data-item=\"Zamówienia\"
      >Zamówienia</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"58\"
        data-icon=\"icon-AdminInternational\"
        data-method=\"add\"
        data-url=\"index.php/improve/international/translations/?lang=pl&type=themes&locale=pl-PL&selected=0\"
        data-post-link=\"https://localhost/admin0009e8qap/index.php?controller=AdminQuickAccesses&token=10dd7ff5e96ca6291366cad572c64a7e\"
        data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
        data-link=\"Tłumaczenia - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Dodaj aktualną stronę do Szybkiego dostępu
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://localhost/admin0009e8qap/index.php?controller=AdminQuickAccesses&token=10dd7ff5e96ca6291366cad572c64a7e\">
      <i class=\"material-icons\">settings</i>
      Zarządzaj Szybkiem dostępem
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin0009e8qap/index.php?controller=AdminSearch&amp;token=9d3d29fea6a899568da0c905ad90510f\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Szukaj (np.: indeks produktu, nazwa klienta...)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Wszędzie
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Wszędzie\" href=\"#\" data-value=\"0\" data-placeholder=\"Czego szukasz?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Wszędzie</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nazwa produktu, odniesienie itp.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Klienci Wg nazwy\" href=\"#\" data-value=\"2\" data-placeholder=\"Nazwa\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Klienci Wg nazwy</a>
        <a class=\"dropdown-item\" data-item=\"Klienci wg adresu IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Klienci wg adresu IP</a>
        <a class=\"dropdown-item\" data-item=\"Zamówienia\" href=\"#\" data-value=\"3\" data-placeholder=\"ID zamówienia\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Zamówienia</a>
        <a class=\"dropdown-item\" data-item=\"Faktury\" href=\"#\" data-value=\"4\" data-placeholder=\"Numer faktury\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faktury</a>
        <a class=\"dropdown-item\" data-item=\"Koszyki\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Koszyka\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Koszyki</a>
        <a class=\"dropdown-item\" data-item=\"Moduły\" href=\"#\" data-value=\"7\" data-placeholder=\"Nazwa modułu\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Moduły</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">WYSZUKIWANIE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://localhost/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Zobacz sklep</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Zamówienia<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Klienci<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Wiadomości<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych zamówień :(<br>
              Czy sprawdziłeś <strong><a href=\"https://localhost/admin0009e8qap/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=d8ece5ed25da3c8842efda34e9e84907\">porzucone koszyki</a></strong>?<br>Może znajdziesz tam swoje następne zamówienie!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych klientów :(<br>
              Czy jesteś aktywny w mediach społecznościowych?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych wiadomości.<br>
              Wydaje się, wszyscy Twoi klienci są zadowoleni :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      od <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - zarejestrowany <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://localhost/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Witaj ponownie Admin</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin0009e8qap/index.php/configure/advanced/employees/1/edit?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\">
      <i class=\"material-icons\">edit</i>
      <span>Twój profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/zasoby/dokumentacja\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Materiały</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Trening</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/eksperci\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Znajdź eksperta</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/pl/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centrum pomocy</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://localhost/admin0009e8qap/index.php?controller=AdminLogin&amp;logout=1&amp;token=52d09d0f2e5ccf1f7418717d7b9a9999\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Wyloguj się</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin0009e8qap/index.php/configure/advanced/employees/toggle-navigation?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://localhost/admin0009e8qap/index.php?controller=AdminDashboard&amp;token=79122b56a0bbed1584201bb3d55e9022\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Pulpit</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sprzedaż</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin0009e8qap/index.php/sell/orders/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Zamówienia
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin0009e8qap/index.php/sell/orders/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin0009e8qap/index.php/sell/orders/invoices/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Faktury
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin0009e8qap/index.php/sell/orders/credit-slips/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Druki kredytowe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin0009e8qap/index.php/sell/orders/delivery-slips/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Druk wysyłki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://localhost/admin0009e8qap/index.php?controller=AdminCarts&amp;token=d8ece5ed25da3c8842efda34e9e84907\" class=\"link\"> Koszyki zakupowe
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin0009e8qap/index.php/sell/catalog/products?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Katalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin0009e8qap/index.php/sell/catalog/products?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin0009e8qap/index.php/sell/catalog/categories?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Kategorie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin0009e8qap/index.php/sell/catalog/monitoring/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Monitorowanie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://localhost/admin0009e8qap/index.php?controller=AdminAttributesGroups&amp;token=99e8adefcd55797f54923aa297b6ccf9\" class=\"link\"> Atrybuty &amp; Cechy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin0009e8qap/index.php/sell/catalog/brands/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Marki &amp; Dostawcy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin0009e8qap/index.php/sell/attachments/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Pliki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://localhost/admin0009e8qap/index.php?controller=AdminCartRules&amp;token=d3c5fe281b9556d80b7529dbcac2ad95\" class=\"link\"> Rabaty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin0009e8qap/index.php/sell/stocks/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin0009e8qap/index.php/sell/customers/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Klienci
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin0009e8qap/index.php/sell/customers/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin0009e8qap/index.php/sell/addresses/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Adresy
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://localhost/admin0009e8qap/index.php?controller=AdminCustomerThreads&amp;token=dfb0ddf7d5c0fe0c06fe5bc7a5e67df1\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Obsługa klienta
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://localhost/admin0009e8qap/index.php?controller=AdminCustomerThreads&amp;token=dfb0ddf7d5c0fe0c06fe5bc7a5e67df1\" class=\"link\"> Obsługa klienta
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin0009e8qap/index.php/sell/customer-service/order-messages/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Wiadomości zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://localhost/admin0009e8qap/index.php?controller=AdminReturn&amp;token=7aa43f28281176c59a220bcf3f58301b\" class=\"link\"> Zwroty produktów
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"https://localhost/admin0009e8qap/index.php?controller=AdminMetricsStats&amp;token=b52abf4fef535656c66077cc8211e4f6\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statystyki
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminMetricsStats\">
                                <a href=\"https://localhost/admin0009e8qap/index.php?controller=AdminMetricsStats&amp;token=b52abf4fef535656c66077cc8211e4f6\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"127\" id=\"subtab-AdminLegacyStatsMetrics\">
                                <a href=\"https://localhost/admin0009e8qap/index.php?controller=AdminLegacyStatsMetrics&amp;token=5b15edff36a36127285eb87d13b1d510\" class=\"link\"> Statystyki
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                                            
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Ulepszenia</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin0009e8qap/index.php/improve/modules/manage?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Moduły
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin0009e8qap/index.php/improve/modules/manage?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Wybrane
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"152\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/admin0009e8qap/index.php/improve/modules/catalog?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Module Catalog
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"47\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin0009e8qap/index.php/improve/design/themes/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Wygląd
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"142\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin0009e8qap/index.php/improve/design/themes/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Szablony
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminThemesCatalog\">
                                <a href=\"/admin0009e8qap/index.php/improve/design/themes-catalog/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Katalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"50\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin0009e8qap/index.php/improve/design/cms-pages/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Strony
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin0009e8qap/index.php/improve/design/mail_theme/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Email Themes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin0009e8qap/index.php/improve/design/modules/positions/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Pozycje
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminImages\">
                                <a href=\"https://localhost/admin0009e8qap/index.php?controller=AdminImages&amp;token=fe5853c022a65f2214d5f70646605334\" class=\"link\"> Zdjęcia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin0009e8qap/index.php/modules/link-widget/list?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Link Widget
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://localhost/admin0009e8qap/index.php?controller=AdminCarriers&amp;token=6ce5a7fd5c48ee61239035375fedb162\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Wysyłka
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://localhost/admin0009e8qap/index.php?controller=AdminCarriers&amp;token=6ce5a7fd5c48ee61239035375fedb162\" class=\"link\"> Przewoźnicy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin0009e8qap/index.php/improve/shipping/preferences/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin0009e8qap/index.php/improve/payment/payment_methods?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Płatność
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin0009e8qap/index.php/improve/payment/payment_methods?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Płatności
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin0009e8qap/index.php/improve/payment/preferences?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"158\" id=\"subtab-AdminCODwFeePlus\">
                                <a href=\"https://localhost/admin0009e8qap/index.php?controller=AdminCODwFeePlus&amp;token=4dea760772f794557a41aec56884cc04\" class=\"link\"> COD with Fee Plus
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"59\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin0009e8qap/index.php/improve/international/localization/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Międzynarodowy
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"60\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin0009e8qap/index.php/improve/international/localization/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Lokalizacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin0009e8qap/index.php/improve/international/zones/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Położenie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin0009e8qap/index.php/improve/international/taxes/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Podatki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"72\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin0009e8qap/index.php/improve/international/translations/settings?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Tłumaczenia
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"130\" id=\"subtab-Marketing\">
                    <a href=\"https://localhost/admin0009e8qap/index.php?controller=AdminPsfacebookModule&amp;token=f9cfcf773981a57839d6cf959a68240a\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-130\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"131\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"https://localhost/admin0009e8qap/index.php?controller=AdminPsfacebookModule&amp;token=f9cfcf773981a57839d6cf959a68240a\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"73\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Konfiguruj</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"74\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin0009e8qap/index.php/configure/shop/preferences/preferences?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Preferencje
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin0009e8qap/index.php/configure/shop/preferences/preferences?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Ogólny
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin0009e8qap/index.php/configure/shop/order-preferences/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"81\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin0009e8qap/index.php/configure/shop/product-preferences/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin0009e8qap/index.php/configure/shop/customer-preferences/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin0009e8qap/index.php/configure/shop/contacts/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Kontakt
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin0009e8qap/index.php/configure/shop/seo-urls/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Ruch
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://localhost/admin0009e8qap/index.php?controller=AdminSearchConf&amp;token=adec4a84cffd9782f746b8fbe297af0e\" class=\"link\"> Szukaj
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"119\" id=\"subtab-AdminGamification\">
                                <a href=\"https://localhost/admin0009e8qap/index.php?controller=AdminGamification&amp;token=780aa281114a4616ac45c1d120cf11f2\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"96\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin0009e8qap/index.php/configure/advanced/system-information/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Zaawansowane
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin0009e8qap/index.php/configure/advanced/system-information/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Informacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin0009e8qap/index.php/configure/advanced/performance/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Wydajność
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"99\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin0009e8qap/index.php/configure/advanced/administration/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Administracja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin0009e8qap/index.php/configure/advanced/emails/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Adres e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"101\" id=\"subtab-AdminImport\">
                                <a href=\"/admin0009e8qap/index.php/configure/advanced/import/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Importuj
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin0009e8qap/index.php/configure/advanced/employees/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Zespół
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin0009e8qap/index.php/configure/advanced/sql-requests/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Baza danych
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin0009e8qap/index.php/configure/advanced/logs/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Logi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin0009e8qap/index.php/configure/advanced/webservice-keys/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> API
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"156\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin0009e8qap/index.php/configure/advanced/feature-flags/?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" class=\"link\"> Experimental Feature
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"114\" id=\"tab-DEFAULT\">
                <span class=\"title\">Więcej</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"147\" id=\"subtab-AdminSelfUpgrade\">
                    <a href=\"https://localhost/admin0009e8qap/index.php?controller=AdminSelfUpgrade&amp;token=acad180f6a2c5b6317ac90ce2530cb83\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      1-Click Upgrade
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Międzynarodowy</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin0009e8qap/index.php/improve/international/translations/settings?_token=1YeuzwhsCLhE89DDNWZnG5tsasm53z_li_TQEsH_Jxg\" aria-current=\"page\">Tłumaczenia</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Tłumaczenia          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help\" href=\"https://help.prestashop.com/pl/doc/AdminTranslations?version=1.7.8.0&amp;country=pl\" title=\"Pomoc\">
                  Pomoc
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help\" href=\"https://help.prestashop.com/pl/doc/AdminTranslations?version=1.7.8.0&amp;country=pl\" title=\"Pomoc\">
              Pomoc
            </a>
                        </div>
    </div>
  </div>
  
</div>
      
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1172
        $this->displayBlock('content_header', $context, $blocks);
        // line 1173
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1174
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1175
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1176
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>O nie!</h1>
  <p class=\"mt-3\">
    Wersja mobilna tej strony nie jest jeszcze dostępna.
  </p>
  <p class=\"mt-2\">
    Prosimy korzystać z komputera stacjonarnego, aby uzyskać dostęp do tej strony, dopóki nie zostanie zoptymalizowana pod kątem urządzeń mobilnych.
  </p>
  <p class=\"mt-2\">
    Dziękujemy.
  </p>
  <a href=\"https://localhost/admin0009e8qap/index.php?controller=AdminDashboard&amp;token=79122b56a0bbed1584201bb3d55e9022\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Wstecz
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-PL&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/pl/login?email=admin%40jasniej.pl&amp;firstname=Admin&amp;lastname=Admin&amp;website=http%3A%2F%2Flocalhost%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin0009e8qap/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Połącz swój sklep z rynkiem PrestaShop, żeby automatycznie importować wszystkie zakupione dodatki.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Nie masz konta ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Odkryj siłę PrestaShop Addons! Przeglądaj Oficjalny Rynek PrestaShop i znajdź ponad 3500 innowacyjnych modułów i szablonów, które optymalizują stopnie konwersji, zwiększają ruch, budują lojalność klientów i zwiększają Twoją produktywność</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Połącz się z PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/pl/forgot-your-password\">Zapomniałem hasła</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/pl/login?email=admin%40jasniej.pl&amp;firstname=Admin&amp;lastname=Admin&amp;website=http%3A%2F%2Flocalhost%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tUtwórz konto
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Zaloguj się
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1283
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 100
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1172
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1173
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1174
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1175
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1283
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__6edb2070770c0771834508efb77270093be9135cb497d39cb45211a464df71a0";
    }

    public function getDebugInfo()
    {
        return array (  1373 => 1283,  1368 => 1175,  1363 => 1174,  1358 => 1173,  1353 => 1172,  1344 => 100,  1336 => 1283,  1227 => 1176,  1224 => 1175,  1221 => 1174,  1218 => 1173,  1216 => 1172,  140 => 100,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6edb2070770c0771834508efb77270093be9135cb497d39cb45211a464df71a0", "");
    }
}