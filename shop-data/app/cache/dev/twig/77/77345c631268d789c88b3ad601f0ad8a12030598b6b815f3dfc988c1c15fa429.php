<?php

/* __string_template__1de33cad5903a57539aa3e7affa1f1ed80db911d19cec6b59217c21aa9f11ff2 */
class __TwigTemplate_ed84796518f42aba331ad41e24775df6d7d7889f96eb85463a30aa89d28748f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fa7205efccc2bba3f3eb789c3afc967a648e0148659b528a2f7a5216931f20c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa7205efccc2bba3f3eb789c3afc967a648e0148659b528a2f7a5216931f20c->enter($__internal_6fa7205efccc2bba3f3eb789c3afc967a648e0148659b528a2f7a5216931f20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__1de33cad5903a57539aa3e7affa1f1ed80db911d19cec6b59217c21aa9f11ff2"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Wybór modułu • jaśniej - sklep z lampami</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModules';
    var iso_user = 'pl';
    var full_language_code = 'pl';
    var full_cldr_language_code = 'pl-PL';
    var country_iso_code = 'PL';
    var _PS_VERSION_ = '1.7.2.4';
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
    var token = 'bce77a1c818797af23f64b17bc7747a0';
    var token_admin_orders = '956fba5d01be7142a5ea86c547e355b6';
    var token_admin_customers = '3f138668bd453c03a294f4e8fcd9e09c';
    var token_admin_customer_threads = 'dfb0ddf7d5c0fe0c06fe5bc7a5e67df1';
    var currentIndex = 'index.php?controller=AdminModules';
    var employee_token = 'db065ce881e761290d47337d2783e34f';
    var choose_language_translate = 'Wybierz język';
    var default_language = '1';
    var admin_modules_link = '/admin0009e8qap/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=ZNXubYiFbVtdPzuchNrkraOeTnPLb4hI1QCzddI656s';
    var tab_modules_list = '';
    var update_success_msg = 'Aktualizacja powiodła się';
    var errorLogin = 'PrestaShop nie mógł zalogować się do Dodatków, sprawdź swoje uprawnienia i połączenie internetowe.';
    var search_product_msg = 'Szukaj produktu';
  </script>

      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin0009e8qap/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin0009e8qap/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin0009e8qap\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\u0142\",\"name\":\"z\\u0142oty polski\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin0009e8qap/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.2.4\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.2.4\"></script>
<script type=\"text/javascript\" src=\"/admin0009e8qap/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin0009e8qap/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>


  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/admin0009e8qap\\/index.php?controller=AdminGamification&token=780aa281114a4616ac45c1d120cf11f2\";
            var current_id_tab = 45;
        </script>

";
        // line 80
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"adminmodules\">



<header>
  <nav class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

    
    

    
    <i class=\"material-icons pull-left p-x-1 js-mobile-menu hidden-md-up\">menu</i>
    <a class=\"logo pull-left\" href=\"http://localhost/admin0009e8qap/index.php?controller=AdminDashboard&amp;token=79122b56a0bbed1584201bb3d55e9022\"></a>

    <div class=\"component pull-left hidden-md-down\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Szybki dostęp</span> 
    <i class=\"material-icons arrow-down pull-right\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCategories&amp;addcategory&amp;token=b432ed7af01a6f7f98d9b46d98c87575\"
                 data-item=\"Nowa kategoria\"
      >Nowa kategoria</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=d3c5fe281b9556d80b7529dbcac2ad95\"
                 data-item=\"Nowy kupon\"
      >Nowy kupon</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin0009e8qap/index.php/product/new?token=97315b0bd23548103b3876b85b39e349\"
                 data-item=\"Nowy produkt\"
      >Nowy produkt</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin0009e8qap/index.php/module/manage?token=97315b0bd23548103b3876b85b39e349\"
                 data-item=\"Zainstalowane moduły\"
      >Zainstalowane moduły</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin0009e8qap/index.php?controller=AdminOrders&amp;token=956fba5d01be7142a5ea86c547e355b6\"
                 data-item=\"Zamówienia\"
      >Zamówienia</a>
        <hr>
          <a
        class=\"dropdown-item js-quick-link\"
        data-rand=\"149\"
        data-icon=\"icon-AdminParentModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/module/catalog\"
        data-post-link=\"http://localhost/admin0009e8qap/index.php?controller=AdminQuickAccesses&token=10dd7ff5e96ca6291366cad572c64a7e\"
        data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
        data-link=\" - Lista\"
      >
        <i class=\"material-icons\">add_circle_outline</i>
        Dodaj bieżącą stronę do zakładki
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/admin0009e8qap/index.php?controller=AdminQuickAccesses&token=10dd7ff5e96ca6291366cad572c64a7e\">
      <i class=\"material-icons\">settings</i>
      Zarządzaj szybkim dostępem
    </a>
  </div>
</div>
</div>
    <div class=\"component hidden-md-down\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/admin0009e8qap/index.php?controller=AdminSearch&amp;token=9d3d29fea6a899568da0c905ad90510f\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Szukaj (np.: indeks produktu, nazwa klienta...)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          Wszędzie
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"Wszędzie\" href=\"#\" data-value=\"0\" data-placeholder=\"Czego szukasz?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> Wszędzie</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nazwa produktu, SKU, odniesienie...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Katalog
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Klienci Wg nazwy\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nazwisko...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Klienci Wg nazwy
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Klienci wg adresu IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Klienci wg adresu IP</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Zamówienia\" href=\"#\" data-value=\"3\" data-placeholder=\"ID zamówienia\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Zamówienia
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Faktury\" href=\"#\" data-value=\"4\" data-placeholder=\"Numer faktury\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Faktury
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Koszyki\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Koszyka\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Koszyki
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Moduły\" href=\"#\" data-value=\"7\" data-placeholder=\"Nazwa modułu\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Moduły
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">WYSZUKIWANIE<i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>


    <div class=\"component pull-md-right -norightmargin hidden-md-down\"><div class=\"employee-dropdown dropdown\">
      <div class=\"img-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right p-a-1 m-r-2\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/admin%40jasniej.pl.jpg\" /><br>
      <span>Admin Admin</span>
    </div>
    <hr>
    <a class=\"employee-link profile-link\" href=\"http://localhost/admin0009e8qap/index.php?controller=AdminEmployees&amp;token=db065ce881e761290d47337d2783e34f&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i> Twój profil
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://localhost/admin0009e8qap/index.php?controller=AdminLogin&amp;token=52d09d0f2e5ccf1f7418717d7b9a9999&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Wyloguj się
    </a>
  </div>
</div>
</div>
          <div class=\"component pull-xs-right\"><div id=\"notif\" class=\"notification-center dropdown\">
  <div class=\"notification js-notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </div>
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
              Czy sprawdziłeś <strong><a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCarts&token=d8ece5ed25da3c8842efda34e9e84907&action=filterOnlyAbandonedCarts\">porzucone koszyki</a></strong>?<br>Może znajdziesz tam swoje następne zamówienie!
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
              To więcej, czasu na coś innego!
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
      <strong class=\"pull-xs-right\">_total_paid_</strong>
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
        <div class=\"component pull-md-right hidden-md-down\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://localhost/\" target= \"_blank\">jaśniej - sklep z lampami</a>
  </div>
</div>
              <div class=\"component pull-right hidden-md-down\">
        <div class=\"shop-state\" id=\"debug-mode\">
          <i class=\"material-icons\">bug_report</i>
          <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\"
            title=\"<p class='text-left text-nowrap'><strong>Twój sklep jest w trybie debugowania.</strong></p><p class='text-left'>Wyświetlane są wszystkie błędy i komunikaty PHP. Gdy nie jest już potrzebny, <strong>wyłącz</strong> ten tryb.</p>\">Tryb debugowania</span>
        </div>
      </div>
        

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminDashboard&amp;token=79122b56a0bbed1584201bb3d55e9022\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Pulpit</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"2\">
              <span class=\"title\">Sprzedaż</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminOrders&amp;token=956fba5d01be7142a5ea86c547e355b6\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Zamówienia
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminOrders&amp;token=956fba5d01be7142a5ea86c547e355b6\" class=\"link\"> Zamówienia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminInvoices&amp;token=16bd421d127b099e5b2b035244bda322\" class=\"link\"> Faktury
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminSlip&amp;token=e99a044ee7b9736f87dbc150bfcd4ac0\" class=\"link\"> Druki kredytowe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminDeliverySlip&amp;token=c0ee74ea36083a06dd335b862a5930cb\" class=\"link\"> Druk wysyłki
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCarts&amp;token=d8ece5ed25da3c8842efda34e9e84907\" class=\"link\"> Koszyki zakupowe
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"9\">
                  <a href=\"/admin0009e8qap/index.php/product/catalog?_token=ZNXubYiFbVtdPzuchNrkraOeTnPLb4hI1QCzddI656s\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Katalog
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\">
                              <a href=\"/admin0009e8qap/index.php/product/catalog?_token=ZNXubYiFbVtdPzuchNrkraOeTnPLb4hI1QCzddI656s\" class=\"link\"> Produkty
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCategories&amp;token=b432ed7af01a6f7f98d9b46d98c87575\" class=\"link\"> Kategorie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminTracking&amp;token=a8696e52ee7329d2c553623f0943362e\" class=\"link\"> Monitorowanie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminAttributesGroups&amp;token=99e8adefcd55797f54923aa297b6ccf9\" class=\"link\"> Atrybuty &amp; Cechy
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminManufacturers&amp;token=129ace9f06cf150d1e2fc177da9208fc\" class=\"link\"> Marki &amp; Dostawcy
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminAttachments&amp;token=4d9a1d88ecda9f5b8bfd50dd64119e33\" class=\"link\"> Pliki
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCartRules&amp;token=d3c5fe281b9556d80b7529dbcac2ad95\" class=\"link\"> Rabaty
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\">
                              <a href=\"/admin0009e8qap/index.php/stock/?_token=ZNXubYiFbVtdPzuchNrkraOeTnPLb4hI1QCzddI656s\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\">
                  <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCustomers&amp;token=3f138668bd453c03a294f4e8fcd9e09c\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Klienci
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCustomers&amp;token=3f138668bd453c03a294f4e8fcd9e09c\" class=\"link\"> Klienci
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminAddresses&amp;token=8f8e5ab1942011a5bef84ff5669837b8\" class=\"link\"> Adresy
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\">
                  <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCustomerThreads&amp;token=dfb0ddf7d5c0fe0c06fe5bc7a5e67df1\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    Obsługa klienta
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCustomerThreads&amp;token=dfb0ddf7d5c0fe0c06fe5bc7a5e67df1\" class=\"link\"> Obsługa klienta
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminOrderMessage&amp;token=5c5eb7d2dfefb6ab3a080f1581e9c1a4\" class=\"link\"> Wiadomości zamówienia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminReturn&amp;token=7aa43f28281176c59a220bcf3f58301b\" class=\"link\"> Zwroty produktów
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\">
                  <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminMetricsStats&amp;token=b52abf4fef535656c66077cc8211e4f6\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Statystyki
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminMetricsStats&amp;token=b52abf4fef535656c66077cc8211e4f6\" class=\"link\"> PrestaShop Metrics
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"127\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminLegacyStatsMetrics&amp;token=5b15edff36a36127285eb87d13b1d510\" class=\"link\"> Statystyki
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                                    
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down -active\" data-submenu=\"42\">
              <span class=\"title\">Ulepszenia</span>
          </li>

                          
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"43\">
                  <a href=\"/admin0009e8qap/index.php/module/catalog?_token=ZNXubYiFbVtdPzuchNrkraOeTnPLb4hI1QCzddI656s\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Moduły
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\">
                              <a href=\"/admin0009e8qap/index.php/module/catalog?_token=ZNXubYiFbVtdPzuchNrkraOeTnPLb4hI1QCzddI656s\" class=\"link\"> Wybrane
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminAddonsCatalog&amp;token=c4330199c9459c7e7aca66e9af47efba\" class=\"link\"> Katalog
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\">
                  <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminThemes&amp;token=9bc416220869f44bc51024e5b73a0e38\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Wygląd
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"142\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminThemes&amp;token=9bc416220869f44bc51024e5b73a0e38\" class=\"link\"> Szablony
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminThemesCatalog&amp;token=4b59289eb5110477bc6625af9b88f2ce\" class=\"link\"> Katalog
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCmsContent&amp;token=36d6075317d72a2bf64920cd916ebaef\" class=\"link\"> Strony
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminModulesPositions&amp;token=354728ade2675b0b1ba7e862c0094597\" class=\"link\"> Pozycje
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminImages&amp;token=fe5853c022a65f2214d5f70646605334\" class=\"link\"> Zdjęcia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminLinkWidget&amp;token=f2272e2bb01c889348ae6308151b2388\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\">
                  <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCarriers&amp;token=6ce5a7fd5c48ee61239035375fedb162\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Wysyłka
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCarriers&amp;token=6ce5a7fd5c48ee61239035375fedb162\" class=\"link\"> Przewoźnicy
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminShipping&amp;token=5c9bc57c2062aa622efe17f42df4f7be\" class=\"link\"> Preferencje
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\">
                  <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminPayment&amp;token=f551d5358760e46da96c9b403b1ef3f5\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Płatność
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminPayment&amp;token=f551d5358760e46da96c9b403b1ef3f5\" class=\"link\"> Płatności
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminPaymentPreferences&amp;token=e487ac6572dfe9873338397ca3e657a4\" class=\"link\"> Preferencje
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\">
                  <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminLocalization&amp;token=c84bd3aa2c02150cb216281b1ce1f95d\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    Międzynarodowy
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminLocalization&amp;token=c84bd3aa2c02150cb216281b1ce1f95d\" class=\"link\"> Lokalizacja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCountries&amp;token=abdc01506d8033c8447482179b008b1e\" class=\"link\"> Położenie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminTaxes&amp;token=15ac783a64fad2eecd1db1287ddaaed9\" class=\"link\"> Podatki
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminTranslations&amp;token=899d41983f5c2c55d1285ef86024e150\" class=\"link\"> Tłumaczenia
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"130\">
                  <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminPsfacebookModule&amp;token=f9cfcf773981a57839d6cf959a68240a\" class=\"link\">
                    <i class=\"material-icons\">campaign</i>
                    <span>
                    Marketing
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-130\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"131\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminPsfacebookModule&amp;token=f9cfcf773981a57839d6cf959a68240a\" class=\"link\"> Facebook
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"73\">
              <span class=\"title\">Konfiguruj</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\">
                  <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminPreferences&amp;token=30050ff95c0986b61fc94c8e4b8355ca\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Preferencje
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminPreferences&amp;token=30050ff95c0986b61fc94c8e4b8355ca\" class=\"link\"> Ogólny
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminOrderPreferences&amp;token=6d2afb9688237751bbb4423e20ac0bc5\" class=\"link\"> Zamówienia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminPPreferences&amp;token=ec17c6e0737fa8a1ec78fd9c9d019a05\" class=\"link\"> Produkty
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCustomerPreferences&amp;token=f63abbd882424516dff2e410da860500\" class=\"link\"> Klienci
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminContacts&amp;token=8a5fc45ed8e9cb9a897946f6056e660f\" class=\"link\"> Kontakt
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminMeta&amp;token=992114d3cfe935d203f4d09165dfdd2b\" class=\"link\"> Ruch
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminSearchConf&amp;token=adec4a84cffd9782f746b8fbe297af0e\" class=\"link\"> Szukaj
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminGamification&amp;token=780aa281114a4616ac45c1d120cf11f2\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\">
                  <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminInformation&amp;token=0b15cfcb966f06a52aef6d3cc94210f2\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Zaawansowane
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminInformation&amp;token=0b15cfcb966f06a52aef6d3cc94210f2\" class=\"link\"> Informacja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminPerformance&amp;token=c67c10d671b8e270f0203db7327d550f\" class=\"link\"> Wydajność
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminAdminPreferences&amp;token=5914f0c89d4ff971a5a3fab58a4ac110\" class=\"link\"> Administracja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminEmails&amp;token=2234e2080b29163603a4cbdf7c2a444b\" class=\"link\"> Adres e-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminImport&amp;token=e18441485d3ee52814a3991fb5773258\" class=\"link\"> Importuj
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminEmployees&amp;token=db065ce881e761290d47337d2783e34f\" class=\"link\"> Zespół
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminRequestSql&amp;token=73f97fd653575aa0630d849956ccf552\" class=\"link\"> Baza danych
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminLogs&amp;token=a44afa9d838e367a64cf28196d036442\" class=\"link\"> Logi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminWebservice&amp;token=ecfffd87aa0be25ac7eaedac7cd90bfc\" class=\"link\"> API
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse hidden-md-down\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <ol class=\"breadcrumb\">

              <li>
                      <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminParentModulesSf&amp;token=ea453823fa73b83312accccbe6e6fd95\">Moduły</a>
                  </li>
      
      
    </ol>
  

  
    <h2 class=\"title\">
      Wybór modułu    </h2>
  

  
    <div class=\"toolbar-icons\">
                        
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add_module\"
            href=\"#\"            title=\"Załaduj moduł\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">cloud_upload</i>
            <span class=\"title\">Załaduj moduł</span>
          </a>
                                
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-addons_connect\"
            href=\"#\"            title=\"Połącz z Addons marketplace\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">vpn_key</i>
            <span class=\"title\">Połącz z Addons marketplace</span>
          </a>
                          
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Pomoc\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/admin0009e8qap/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Fpl%252Fdoc%252FAdminModules%253Fversion%253D1.7.2.4%2526country%253Dpl/Pomoc?_token=ZNXubYiFbVtdPzuchNrkraOeTnPLb4hI1QCzddI656s\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Pomoc</span>
          </a>
                  </div>
  
        <div class=\"page-head-tabs\">
                <a class=\"tab current\"
   href=\"/admin0009e8qap/index.php/module/catalog?_token=ZNXubYiFbVtdPzuchNrkraOeTnPLb4hI1QCzddI656s\">Wybór</a>

                <a class=\"tab\"
   href=\"/admin0009e8qap/index.php/module/manage?_token=ZNXubYiFbVtdPzuchNrkraOeTnPLb4hI1QCzddI656s\">Zainstalowane moduły</a>

                <a class=\"tab\"
   href=\"/admin0009e8qap/index.php/module/notifications?_token=ZNXubYiFbVtdPzuchNrkraOeTnPLb4hI1QCzddI656s\">Powiadomienia  <div class=\"notification-container\">
    <span class=\"notification-counter\">24</span>
  </div>
  </a>

            </div>
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-PL&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
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
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/pl/forgot-your-password\">Zapomniałem hasła</a>
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

    <div class=\"content-div \">

      

      

      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1193
        $this->displayBlock('content_header', $context, $blocks);
        // line 1194
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1195
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1196
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1197
        echo "
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>O nie!</h1>
  <p class=\"m-t-3\">
    Wersja mobilna tej strony nie jest jeszcze dostępna.
  </p>
  <p class=\"m-t-2\">
    Prosimy korzystać z komputera stacjonarnego, aby uzyskać dostęp do tej strony, dopóki nie zostanie zoptymalizowana pod kątem urządzeń mobilnych.
  </p>
  <p class=\"m-t-2\">
    Dziękujemy.
  </p>
  <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminDashboard&amp;token=79122b56a0bbed1584201bb3d55e9022\" class=\"btn btn-primary p-y-1 m-t-3\">
    <i class=\"material-icons\">arrow_back</i>
    Wstecz
  </a>
</div>
<div class=\"mobile-layer\"></div>



  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Czas ładowania: \"></i> 6.775s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-PL&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Kontakt
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-PL&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Zgłoś błąd
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-PL&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Forum angielskie
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-PL&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Dodatki
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-PL&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Trening
      </a>
                </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-PL&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
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
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/pl/forgot-your-password\">Zapomniałem hasła</a>
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
        // line 1362
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
        
        $__internal_6fa7205efccc2bba3f3eb789c3afc967a648e0148659b528a2f7a5216931f20c->leave($__internal_6fa7205efccc2bba3f3eb789c3afc967a648e0148659b528a2f7a5216931f20c_prof);

    }

    // line 80
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5e33c27128232e3a254d1bc5065dac7a29bfdf9344ecda9933be6cda6bd1bcbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e33c27128232e3a254d1bc5065dac7a29bfdf9344ecda9933be6cda6bd1bcbb->enter($__internal_5e33c27128232e3a254d1bc5065dac7a29bfdf9344ecda9933be6cda6bd1bcbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5e33c27128232e3a254d1bc5065dac7a29bfdf9344ecda9933be6cda6bd1bcbb->leave($__internal_5e33c27128232e3a254d1bc5065dac7a29bfdf9344ecda9933be6cda6bd1bcbb_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
        $__internal_9f9b158c3648bbe6b5ceb428d00ed1daac43a18cfa1702f94ce980b4cecf11dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9b158c3648bbe6b5ceb428d00ed1daac43a18cfa1702f94ce980b4cecf11dc->enter($__internal_9f9b158c3648bbe6b5ceb428d00ed1daac43a18cfa1702f94ce980b4cecf11dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_9f9b158c3648bbe6b5ceb428d00ed1daac43a18cfa1702f94ce980b4cecf11dc->leave($__internal_9f9b158c3648bbe6b5ceb428d00ed1daac43a18cfa1702f94ce980b4cecf11dc_prof);

    }

    // line 1193
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_4ea1f4b4884847bb9ecc6c0cd162784e936c580a955e10cf509483715319b1be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ea1f4b4884847bb9ecc6c0cd162784e936c580a955e10cf509483715319b1be->enter($__internal_4ea1f4b4884847bb9ecc6c0cd162784e936c580a955e10cf509483715319b1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_4ea1f4b4884847bb9ecc6c0cd162784e936c580a955e10cf509483715319b1be->leave($__internal_4ea1f4b4884847bb9ecc6c0cd162784e936c580a955e10cf509483715319b1be_prof);

    }

    // line 1194
    public function block_content($context, array $blocks = array())
    {
        $__internal_573178e1dab9e2c6d2dbf6df5b97ab826935bb4370b93134025b95c06fdfa4ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_573178e1dab9e2c6d2dbf6df5b97ab826935bb4370b93134025b95c06fdfa4ba->enter($__internal_573178e1dab9e2c6d2dbf6df5b97ab826935bb4370b93134025b95c06fdfa4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_573178e1dab9e2c6d2dbf6df5b97ab826935bb4370b93134025b95c06fdfa4ba->leave($__internal_573178e1dab9e2c6d2dbf6df5b97ab826935bb4370b93134025b95c06fdfa4ba_prof);

    }

    // line 1195
    public function block_content_footer($context, array $blocks = array())
    {
        $__internal_20bc98971871da77158ff90c61955257d32d157f79ba42d5a8193fd8b9007070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20bc98971871da77158ff90c61955257d32d157f79ba42d5a8193fd8b9007070->enter($__internal_20bc98971871da77158ff90c61955257d32d157f79ba42d5a8193fd8b9007070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_20bc98971871da77158ff90c61955257d32d157f79ba42d5a8193fd8b9007070->leave($__internal_20bc98971871da77158ff90c61955257d32d157f79ba42d5a8193fd8b9007070_prof);

    }

    // line 1196
    public function block_sidebar_right($context, array $blocks = array())
    {
        $__internal_ca8f21b055312d617feeeeba4151edb8900ca4620ef6666d58eade523754b2c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca8f21b055312d617feeeeba4151edb8900ca4620ef6666d58eade523754b2c0->enter($__internal_ca8f21b055312d617feeeeba4151edb8900ca4620ef6666d58eade523754b2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_ca8f21b055312d617feeeeba4151edb8900ca4620ef6666d58eade523754b2c0->leave($__internal_ca8f21b055312d617feeeeba4151edb8900ca4620ef6666d58eade523754b2c0_prof);

    }

    // line 1362
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e39d5a350de62ac6cf3f6dbd061243b39750c63fd3c9212a94773006cb737580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e39d5a350de62ac6cf3f6dbd061243b39750c63fd3c9212a94773006cb737580->enter($__internal_e39d5a350de62ac6cf3f6dbd061243b39750c63fd3c9212a94773006cb737580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e39d5a350de62ac6cf3f6dbd061243b39750c63fd3c9212a94773006cb737580->leave($__internal_e39d5a350de62ac6cf3f6dbd061243b39750c63fd3c9212a94773006cb737580_prof);

    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
        $__internal_5da4f36d95953cc81c09bdf21b016c3f9bf3d3b33b6635967dfef8298356e735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da4f36d95953cc81c09bdf21b016c3f9bf3d3b33b6635967dfef8298356e735->enter($__internal_5da4f36d95953cc81c09bdf21b016c3f9bf3d3b33b6635967dfef8298356e735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_5da4f36d95953cc81c09bdf21b016c3f9bf3d3b33b6635967dfef8298356e735->leave($__internal_5da4f36d95953cc81c09bdf21b016c3f9bf3d3b33b6635967dfef8298356e735_prof);

    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
        $__internal_2f856c91a5e1387601cebeee86282812e2f86a2984a5d14cb0c3e5984ee7ff3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f856c91a5e1387601cebeee86282812e2f86a2984a5d14cb0c3e5984ee7ff3f->enter($__internal_2f856c91a5e1387601cebeee86282812e2f86a2984a5d14cb0c3e5984ee7ff3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_2f856c91a5e1387601cebeee86282812e2f86a2984a5d14cb0c3e5984ee7ff3f->leave($__internal_2f856c91a5e1387601cebeee86282812e2f86a2984a5d14cb0c3e5984ee7ff3f_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__1de33cad5903a57539aa3e7affa1f1ed80db911d19cec6b59217c21aa9f11ff2";
    }

    public function getDebugInfo()
    {
        return array (  1483 => 1362,  1472 => 1196,  1461 => 1195,  1450 => 1194,  1439 => 1193,  1418 => 80,  1407 => 1362,  1240 => 1197,  1237 => 1196,  1234 => 1195,  1231 => 1194,  1229 => 1193,  112 => 80,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Wybór modułu • jaśniej - sklep z lampami</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModules';
    var iso_user = 'pl';
    var full_language_code = 'pl';
    var full_cldr_language_code = 'pl-PL';
    var country_iso_code = 'PL';
    var _PS_VERSION_ = '1.7.2.4';
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
    var token = 'bce77a1c818797af23f64b17bc7747a0';
    var token_admin_orders = '956fba5d01be7142a5ea86c547e355b6';
    var token_admin_customers = '3f138668bd453c03a294f4e8fcd9e09c';
    var token_admin_customer_threads = 'dfb0ddf7d5c0fe0c06fe5bc7a5e67df1';
    var currentIndex = 'index.php?controller=AdminModules';
    var employee_token = 'db065ce881e761290d47337d2783e34f';
    var choose_language_translate = 'Wybierz język';
    var default_language = '1';
    var admin_modules_link = '/admin0009e8qap/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=ZNXubYiFbVtdPzuchNrkraOeTnPLb4hI1QCzddI656s';
    var tab_modules_list = '';
    var update_success_msg = 'Aktualizacja powiodła się';
    var errorLogin = 'PrestaShop nie mógł zalogować się do Dodatków, sprawdź swoje uprawnienia i połączenie internetowe.';
    var search_product_msg = 'Szukaj produktu';
  </script>

      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin0009e8qap/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin0009e8qap/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin0009e8qap\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\u0142\",\"name\":\"z\\u0142oty polski\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin0009e8qap/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.2.4\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.2.4\"></script>
<script type=\"text/javascript\" src=\"/admin0009e8qap/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin0009e8qap/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>


  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/admin0009e8qap\\/index.php?controller=AdminGamification&token=780aa281114a4616ac45c1d120cf11f2\";
            var current_id_tab = 45;
        </script>

{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>
<body class=\"adminmodules\">



<header>
  <nav class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

    
    

    
    <i class=\"material-icons pull-left p-x-1 js-mobile-menu hidden-md-up\">menu</i>
    <a class=\"logo pull-left\" href=\"http://localhost/admin0009e8qap/index.php?controller=AdminDashboard&amp;token=79122b56a0bbed1584201bb3d55e9022\"></a>

    <div class=\"component pull-left hidden-md-down\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Szybki dostęp</span> 
    <i class=\"material-icons arrow-down pull-right\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCategories&amp;addcategory&amp;token=b432ed7af01a6f7f98d9b46d98c87575\"
                 data-item=\"Nowa kategoria\"
      >Nowa kategoria</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=d3c5fe281b9556d80b7529dbcac2ad95\"
                 data-item=\"Nowy kupon\"
      >Nowy kupon</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin0009e8qap/index.php/product/new?token=97315b0bd23548103b3876b85b39e349\"
                 data-item=\"Nowy produkt\"
      >Nowy produkt</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin0009e8qap/index.php/module/manage?token=97315b0bd23548103b3876b85b39e349\"
                 data-item=\"Zainstalowane moduły\"
      >Zainstalowane moduły</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin0009e8qap/index.php?controller=AdminOrders&amp;token=956fba5d01be7142a5ea86c547e355b6\"
                 data-item=\"Zamówienia\"
      >Zamówienia</a>
        <hr>
          <a
        class=\"dropdown-item js-quick-link\"
        data-rand=\"149\"
        data-icon=\"icon-AdminParentModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/module/catalog\"
        data-post-link=\"http://localhost/admin0009e8qap/index.php?controller=AdminQuickAccesses&token=10dd7ff5e96ca6291366cad572c64a7e\"
        data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
        data-link=\" - Lista\"
      >
        <i class=\"material-icons\">add_circle_outline</i>
        Dodaj bieżącą stronę do zakładki
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/admin0009e8qap/index.php?controller=AdminQuickAccesses&token=10dd7ff5e96ca6291366cad572c64a7e\">
      <i class=\"material-icons\">settings</i>
      Zarządzaj szybkim dostępem
    </a>
  </div>
</div>
</div>
    <div class=\"component hidden-md-down\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/admin0009e8qap/index.php?controller=AdminSearch&amp;token=9d3d29fea6a899568da0c905ad90510f\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Szukaj (np.: indeks produktu, nazwa klienta...)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          Wszędzie
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"Wszędzie\" href=\"#\" data-value=\"0\" data-placeholder=\"Czego szukasz?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> Wszędzie</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nazwa produktu, SKU, odniesienie...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Katalog
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Klienci Wg nazwy\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nazwisko...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Klienci Wg nazwy
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Klienci wg adresu IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Klienci wg adresu IP</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Zamówienia\" href=\"#\" data-value=\"3\" data-placeholder=\"ID zamówienia\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Zamówienia
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Faktury\" href=\"#\" data-value=\"4\" data-placeholder=\"Numer faktury\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Faktury
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Koszyki\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Koszyka\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Koszyki
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Moduły\" href=\"#\" data-value=\"7\" data-placeholder=\"Nazwa modułu\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Moduły
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">WYSZUKIWANIE<i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>


    <div class=\"component pull-md-right -norightmargin hidden-md-down\"><div class=\"employee-dropdown dropdown\">
      <div class=\"img-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right p-a-1 m-r-2\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/admin%40jasniej.pl.jpg\" /><br>
      <span>Admin Admin</span>
    </div>
    <hr>
    <a class=\"employee-link profile-link\" href=\"http://localhost/admin0009e8qap/index.php?controller=AdminEmployees&amp;token=db065ce881e761290d47337d2783e34f&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i> Twój profil
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://localhost/admin0009e8qap/index.php?controller=AdminLogin&amp;token=52d09d0f2e5ccf1f7418717d7b9a9999&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Wyloguj się
    </a>
  </div>
</div>
</div>
          <div class=\"component pull-xs-right\"><div id=\"notif\" class=\"notification-center dropdown\">
  <div class=\"notification js-notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </div>
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
              Czy sprawdziłeś <strong><a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCarts&token=d8ece5ed25da3c8842efda34e9e84907&action=filterOnlyAbandonedCarts\">porzucone koszyki</a></strong>?<br>Może znajdziesz tam swoje następne zamówienie!
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
              To więcej, czasu na coś innego!
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
      <strong class=\"pull-xs-right\">_total_paid_</strong>
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
        <div class=\"component pull-md-right hidden-md-down\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://localhost/\" target= \"_blank\">jaśniej - sklep z lampami</a>
  </div>
</div>
              <div class=\"component pull-right hidden-md-down\">
        <div class=\"shop-state\" id=\"debug-mode\">
          <i class=\"material-icons\">bug_report</i>
          <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\"
            title=\"<p class='text-left text-nowrap'><strong>Twój sklep jest w trybie debugowania.</strong></p><p class='text-left'>Wyświetlane są wszystkie błędy i komunikaty PHP. Gdy nie jest już potrzebny, <strong>wyłącz</strong> ten tryb.</p>\">Tryb debugowania</span>
        </div>
      </div>
        

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminDashboard&amp;token=79122b56a0bbed1584201bb3d55e9022\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Pulpit</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"2\">
              <span class=\"title\">Sprzedaż</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminOrders&amp;token=956fba5d01be7142a5ea86c547e355b6\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Zamówienia
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminOrders&amp;token=956fba5d01be7142a5ea86c547e355b6\" class=\"link\"> Zamówienia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminInvoices&amp;token=16bd421d127b099e5b2b035244bda322\" class=\"link\"> Faktury
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminSlip&amp;token=e99a044ee7b9736f87dbc150bfcd4ac0\" class=\"link\"> Druki kredytowe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminDeliverySlip&amp;token=c0ee74ea36083a06dd335b862a5930cb\" class=\"link\"> Druk wysyłki
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCarts&amp;token=d8ece5ed25da3c8842efda34e9e84907\" class=\"link\"> Koszyki zakupowe
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"9\">
                  <a href=\"/admin0009e8qap/index.php/product/catalog?_token=ZNXubYiFbVtdPzuchNrkraOeTnPLb4hI1QCzddI656s\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Katalog
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\">
                              <a href=\"/admin0009e8qap/index.php/product/catalog?_token=ZNXubYiFbVtdPzuchNrkraOeTnPLb4hI1QCzddI656s\" class=\"link\"> Produkty
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCategories&amp;token=b432ed7af01a6f7f98d9b46d98c87575\" class=\"link\"> Kategorie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminTracking&amp;token=a8696e52ee7329d2c553623f0943362e\" class=\"link\"> Monitorowanie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminAttributesGroups&amp;token=99e8adefcd55797f54923aa297b6ccf9\" class=\"link\"> Atrybuty &amp; Cechy
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminManufacturers&amp;token=129ace9f06cf150d1e2fc177da9208fc\" class=\"link\"> Marki &amp; Dostawcy
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminAttachments&amp;token=4d9a1d88ecda9f5b8bfd50dd64119e33\" class=\"link\"> Pliki
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCartRules&amp;token=d3c5fe281b9556d80b7529dbcac2ad95\" class=\"link\"> Rabaty
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\">
                              <a href=\"/admin0009e8qap/index.php/stock/?_token=ZNXubYiFbVtdPzuchNrkraOeTnPLb4hI1QCzddI656s\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\">
                  <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCustomers&amp;token=3f138668bd453c03a294f4e8fcd9e09c\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Klienci
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCustomers&amp;token=3f138668bd453c03a294f4e8fcd9e09c\" class=\"link\"> Klienci
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminAddresses&amp;token=8f8e5ab1942011a5bef84ff5669837b8\" class=\"link\"> Adresy
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\">
                  <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCustomerThreads&amp;token=dfb0ddf7d5c0fe0c06fe5bc7a5e67df1\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    Obsługa klienta
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCustomerThreads&amp;token=dfb0ddf7d5c0fe0c06fe5bc7a5e67df1\" class=\"link\"> Obsługa klienta
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminOrderMessage&amp;token=5c5eb7d2dfefb6ab3a080f1581e9c1a4\" class=\"link\"> Wiadomości zamówienia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminReturn&amp;token=7aa43f28281176c59a220bcf3f58301b\" class=\"link\"> Zwroty produktów
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\">
                  <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminMetricsStats&amp;token=b52abf4fef535656c66077cc8211e4f6\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Statystyki
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminMetricsStats&amp;token=b52abf4fef535656c66077cc8211e4f6\" class=\"link\"> PrestaShop Metrics
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"127\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminLegacyStatsMetrics&amp;token=5b15edff36a36127285eb87d13b1d510\" class=\"link\"> Statystyki
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                                    
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down -active\" data-submenu=\"42\">
              <span class=\"title\">Ulepszenia</span>
          </li>

                          
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"43\">
                  <a href=\"/admin0009e8qap/index.php/module/catalog?_token=ZNXubYiFbVtdPzuchNrkraOeTnPLb4hI1QCzddI656s\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Moduły
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\">
                              <a href=\"/admin0009e8qap/index.php/module/catalog?_token=ZNXubYiFbVtdPzuchNrkraOeTnPLb4hI1QCzddI656s\" class=\"link\"> Wybrane
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminAddonsCatalog&amp;token=c4330199c9459c7e7aca66e9af47efba\" class=\"link\"> Katalog
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\">
                  <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminThemes&amp;token=9bc416220869f44bc51024e5b73a0e38\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Wygląd
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"142\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminThemes&amp;token=9bc416220869f44bc51024e5b73a0e38\" class=\"link\"> Szablony
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminThemesCatalog&amp;token=4b59289eb5110477bc6625af9b88f2ce\" class=\"link\"> Katalog
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCmsContent&amp;token=36d6075317d72a2bf64920cd916ebaef\" class=\"link\"> Strony
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminModulesPositions&amp;token=354728ade2675b0b1ba7e862c0094597\" class=\"link\"> Pozycje
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminImages&amp;token=fe5853c022a65f2214d5f70646605334\" class=\"link\"> Zdjęcia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminLinkWidget&amp;token=f2272e2bb01c889348ae6308151b2388\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\">
                  <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCarriers&amp;token=6ce5a7fd5c48ee61239035375fedb162\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Wysyłka
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCarriers&amp;token=6ce5a7fd5c48ee61239035375fedb162\" class=\"link\"> Przewoźnicy
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminShipping&amp;token=5c9bc57c2062aa622efe17f42df4f7be\" class=\"link\"> Preferencje
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\">
                  <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminPayment&amp;token=f551d5358760e46da96c9b403b1ef3f5\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Płatność
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminPayment&amp;token=f551d5358760e46da96c9b403b1ef3f5\" class=\"link\"> Płatności
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminPaymentPreferences&amp;token=e487ac6572dfe9873338397ca3e657a4\" class=\"link\"> Preferencje
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\">
                  <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminLocalization&amp;token=c84bd3aa2c02150cb216281b1ce1f95d\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    Międzynarodowy
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminLocalization&amp;token=c84bd3aa2c02150cb216281b1ce1f95d\" class=\"link\"> Lokalizacja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCountries&amp;token=abdc01506d8033c8447482179b008b1e\" class=\"link\"> Położenie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminTaxes&amp;token=15ac783a64fad2eecd1db1287ddaaed9\" class=\"link\"> Podatki
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminTranslations&amp;token=899d41983f5c2c55d1285ef86024e150\" class=\"link\"> Tłumaczenia
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"130\">
                  <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminPsfacebookModule&amp;token=f9cfcf773981a57839d6cf959a68240a\" class=\"link\">
                    <i class=\"material-icons\">campaign</i>
                    <span>
                    Marketing
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-130\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"131\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminPsfacebookModule&amp;token=f9cfcf773981a57839d6cf959a68240a\" class=\"link\"> Facebook
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"73\">
              <span class=\"title\">Konfiguruj</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\">
                  <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminPreferences&amp;token=30050ff95c0986b61fc94c8e4b8355ca\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Preferencje
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminPreferences&amp;token=30050ff95c0986b61fc94c8e4b8355ca\" class=\"link\"> Ogólny
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminOrderPreferences&amp;token=6d2afb9688237751bbb4423e20ac0bc5\" class=\"link\"> Zamówienia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminPPreferences&amp;token=ec17c6e0737fa8a1ec78fd9c9d019a05\" class=\"link\"> Produkty
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminCustomerPreferences&amp;token=f63abbd882424516dff2e410da860500\" class=\"link\"> Klienci
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminContacts&amp;token=8a5fc45ed8e9cb9a897946f6056e660f\" class=\"link\"> Kontakt
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminMeta&amp;token=992114d3cfe935d203f4d09165dfdd2b\" class=\"link\"> Ruch
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminSearchConf&amp;token=adec4a84cffd9782f746b8fbe297af0e\" class=\"link\"> Szukaj
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminGamification&amp;token=780aa281114a4616ac45c1d120cf11f2\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\">
                  <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminInformation&amp;token=0b15cfcb966f06a52aef6d3cc94210f2\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Zaawansowane
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminInformation&amp;token=0b15cfcb966f06a52aef6d3cc94210f2\" class=\"link\"> Informacja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminPerformance&amp;token=c67c10d671b8e270f0203db7327d550f\" class=\"link\"> Wydajność
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminAdminPreferences&amp;token=5914f0c89d4ff971a5a3fab58a4ac110\" class=\"link\"> Administracja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminEmails&amp;token=2234e2080b29163603a4cbdf7c2a444b\" class=\"link\"> Adres e-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminImport&amp;token=e18441485d3ee52814a3991fb5773258\" class=\"link\"> Importuj
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminEmployees&amp;token=db065ce881e761290d47337d2783e34f\" class=\"link\"> Zespół
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminRequestSql&amp;token=73f97fd653575aa0630d849956ccf552\" class=\"link\"> Baza danych
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminLogs&amp;token=a44afa9d838e367a64cf28196d036442\" class=\"link\"> Logi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\">
                              <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminWebservice&amp;token=ecfffd87aa0be25ac7eaedac7cd90bfc\" class=\"link\"> API
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse hidden-md-down\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <ol class=\"breadcrumb\">

              <li>
                      <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminParentModulesSf&amp;token=ea453823fa73b83312accccbe6e6fd95\">Moduły</a>
                  </li>
      
      
    </ol>
  

  
    <h2 class=\"title\">
      Wybór modułu    </h2>
  

  
    <div class=\"toolbar-icons\">
                        
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add_module\"
            href=\"#\"            title=\"Załaduj moduł\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">cloud_upload</i>
            <span class=\"title\">Załaduj moduł</span>
          </a>
                                
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-addons_connect\"
            href=\"#\"            title=\"Połącz z Addons marketplace\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">vpn_key</i>
            <span class=\"title\">Połącz z Addons marketplace</span>
          </a>
                          
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Pomoc\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/admin0009e8qap/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Fpl%252Fdoc%252FAdminModules%253Fversion%253D1.7.2.4%2526country%253Dpl/Pomoc?_token=ZNXubYiFbVtdPzuchNrkraOeTnPLb4hI1QCzddI656s\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Pomoc</span>
          </a>
                  </div>
  
        <div class=\"page-head-tabs\">
                <a class=\"tab current\"
   href=\"/admin0009e8qap/index.php/module/catalog?_token=ZNXubYiFbVtdPzuchNrkraOeTnPLb4hI1QCzddI656s\">Wybór</a>

                <a class=\"tab\"
   href=\"/admin0009e8qap/index.php/module/manage?_token=ZNXubYiFbVtdPzuchNrkraOeTnPLb4hI1QCzddI656s\">Zainstalowane moduły</a>

                <a class=\"tab\"
   href=\"/admin0009e8qap/index.php/module/notifications?_token=ZNXubYiFbVtdPzuchNrkraOeTnPLb4hI1QCzddI656s\">Powiadomienia  <div class=\"notification-container\">
    <span class=\"notification-counter\">24</span>
  </div>
  </a>

            </div>
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-PL&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
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
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/pl/forgot-your-password\">Zapomniałem hasła</a>
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

    <div class=\"content-div \">

      

      

      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  {% block content_header %}{% endblock %}
                 {% block content %}{% endblock %}
                 {% block content_footer %}{% endblock %}
                 {% block sidebar_right %}{% endblock %}

        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>O nie!</h1>
  <p class=\"m-t-3\">
    Wersja mobilna tej strony nie jest jeszcze dostępna.
  </p>
  <p class=\"m-t-2\">
    Prosimy korzystać z komputera stacjonarnego, aby uzyskać dostęp do tej strony, dopóki nie zostanie zoptymalizowana pod kątem urządzeń mobilnych.
  </p>
  <p class=\"m-t-2\">
    Dziękujemy.
  </p>
  <a href=\"http://localhost/admin0009e8qap/index.php?controller=AdminDashboard&amp;token=79122b56a0bbed1584201bb3d55e9022\" class=\"btn btn-primary p-y-1 m-t-3\">
    <i class=\"material-icons\">arrow_back</i>
    Wstecz
  </a>
</div>
<div class=\"mobile-layer\"></div>



  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Czas ładowania: \"></i> 6.775s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-PL&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Kontakt
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-PL&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Zgłoś błąd
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-PL&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Forum angielskie
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-PL&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Dodatki
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-PL&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Trening
      </a>
                </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-PL&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
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
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/pl/forgot-your-password\">Zapomniałem hasła</a>
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

{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>
</html>", "__string_template__1de33cad5903a57539aa3e7affa1f1ed80db911d19cec6b59217c21aa9f11ff2", "");
    }
}
