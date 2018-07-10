<?php

/* __string_template__82d51bf2d9ecd7bdc7662f5268780726c01e19bcb254d6ea5e9b7d91c05bb22a */
class __TwigTemplate_23daec8f367048674482b74d9eb9e305a07b61aeb1990c7c320209aa29e114e2 extends Twig_Template
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
        $__internal_bec14aa51e11986512406d2413eb48f79b3a24803a1a81d278428a641c195176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec14aa51e11986512406d2413eb48f79b3a24803a1a81d278428a641c195176->enter($__internal_bec14aa51e11986512406d2413eb48f79b3a24803a1a81d278428a641c195176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__82d51bf2d9ecd7bdc7662f5268780726c01e19bcb254d6ea5e9b7d91c05bb22a"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ro\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/psgit/psgit/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/psgit/psgit/img/app_icon.png\" />

<title>Gestioneaza modulele instalate • PS Git</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModules';
    var iso_user = 'ro';
    var lang_is_rtl = '0';
    var full_language_code = 'ro-ro';
    var full_cldr_language_code = 'ro-RO';
    var country_iso_code = 'RO';
    var _PS_VERSION_ = '1.7.3.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A fst plasata o comanda noua in magazin.';
    var order_number_msg = 'Numarul comenzii: ';
    var total_msg = 'Total: ';
    var from_msg = 'Din ';
    var see_order_msg = 'Vezi comanda';
    var new_customer_msg = 'S-a inregistrat un client nou in magazin.';
    var customer_name_msg = 'Numele clientului: ';
    var new_msg = 'A fost postat un mesaj nou in magazin.';
    var see_msg = 'Citire mesaj';
    var token = '425f8818c27d7cf76efdbc6ab2e4e008';
    var token_admin_orders = '3df70b6885cead9d0551415628cbb383';
    var token_admin_customers = '2873fb9586edc417c4641b6b32dea8cb';
    var token_admin_customer_threads = '4b1ffb26545a359367b146d60794dbb8';
    var currentIndex = 'index.php?controller=AdminModules';
    var employee_token = '05d8802b072b639c98825ceb3c0b5bb6';
    var choose_language_translate = 'Alege limba';
    var default_language = '1';
    var admin_modules_link = '/psgit/psgit/sec_admin/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA';
    var tab_modules_list = '';
    var update_success_msg = 'Actualizare reusita';
    var errorLogin = 'PrestaShop nu putut efectua autentificarea in Addons. Te rugam sa verifici datele de autentificare si conexiunea la internet.';
    var search_product_msg = 'Cauta un produs';
  </script>

      <link href=\"/psgit/psgit/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/psgit/psgit/sec_admin/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/psgit/psgit/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/psgit/psgit/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/psgit/psgit/sec_admin/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/psgit\\/psgit\\/sec_admin\\/\";
var baseDir = \"\\/psgit\\/psgit\\/\";
var currency = {\"iso_code\":\"RON\",\"sign\":\"RON\",\"name\":\"leu rom\\u00e2nesc\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/psgit/psgit/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/psgit/psgit/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/psgit/psgit/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/psgit/psgit/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/psgit/psgit/sec_admin/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/psgit/psgit/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/psgit/psgit/js/admin.js?v=1.7.3.4\"></script>
<script type=\"text/javascript\" src=\"/psgit/psgit/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/psgit/psgit/js/tools.js?v=1.7.3.4\"></script>
<script type=\"text/javascript\" src=\"/psgit/psgit/sec_admin/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/psgit/psgit/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/psgit/psgit/sec_admin/themes/default/js/vendor/nv.d3.min.js\"></script>


  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminGamification&token=e493c339aa6a0a9994236e2bfe376cca';
\t\t\t\tvar current_id_tab = 45;
\t\t\t</script>

";
        // line 83
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-ro adminmodules\">



<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

    
    

    
    <i class=\"material-icons float-left px-1 js-mobile-menu d-md-none\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminDashboard&amp;token=d88ced7116a8074b1ec982fff87c9daf\"></a>

    <div class=\"component d-none d-md-flex\" id=\"quick-access-container\"><div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acces rapid
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCategories&amp;addcategory&amp;token=43ba92fda3aeb15afa726bbf51e70fd7\"
                 data-item=\"Categorie noua\"
      >Categorie noua</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminOrders&amp;token=3df70b6885cead9d0551415628cbb383\"
                 data-item=\"Comenzi\"
      >Comenzi</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=5b82177c7b58bf0d5120b2b4a642a10a\"
                 data-item=\"Cupon nou\"
      >Cupon nou</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=682a8ae81ab08ebdd6a1a5228cb28cef\"
                 data-item=\"Evaluarea catalogului\"
      >Evaluarea catalogului</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/psgit/psgit/sec_admin/index.php/module/manage?token=7d352622620c76e8e44d2a2fc57de473\"
                 data-item=\"Module instalate\"
      >Module instalate</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/psgit/psgit/sec_admin/index.php/product/new?token=7d352622620c76e8e44d2a2fc57de473\"
                 data-item=\"Produs nou\"
      >Produs nou</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"33\"
        data-icon=\"icon-AdminParentModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/module/manage?-e3tJARtcVfV2owljKq4UkfA\"
        data-post-link=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminQuickAccesses&token=c064d56ae4c09d53f98b28464c06a1e2\"
        data-prompt-text=\"Te rog numeste aceasta scurtatura:\"
        data-link=\" - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Adauga pagina curenta la lista de Acces rapid
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminQuickAccesses&token=c064d56ae4c09d53f98b28464c06a1e2\">
      <i class=\"material-icons\">settings</i>
      Administreaza linkurile de Acces Rapid
    </a>
  </div>
</div>
</div>
    <div class=\"component d-none d-md-inline-block col-md-4\" id=\"header-search-container\">
<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/psgit/psgit/sec_admin/index.php?controller=AdminSearch&amp;token=d458f9764213c23e289e30e3f256cf64\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Cauta (de exemplu, referinta produsului, nume client...)\">
    <div class=\"input-group-btn\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Oriunde
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Oriunde\" href=\"#\" data-value=\"0\" data-placeholder=\"Ce anume cautati?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Oriunde</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog de produse\" href=\"#\" data-value=\"1\" data-placeholder=\"Numele produsului, unitatea de stoc (SKU), referinta...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog de produse</a>
        <a class=\"dropdown-item\" data-item=\"Clienti dupa nume\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nume...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clienti dupa nume</a>
        <a class=\"dropdown-item\" data-item=\"Clienti dupa adresa ip\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clienti dupa adresa IP</a>
        <a class=\"dropdown-item\" data-item=\"Comenzi\" href=\"#\" data-value=\"3\" data-placeholder=\"ID comanda\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Comenzi</a>
        <a class=\"dropdown-item\" data-item=\"Facturi\" href=\"#\" data-value=\"4\" data-placeholder=\"Numar factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i></i> Facturi</a>
        <a class=\"dropdown-item\" data-item=\"Cosuri\" href=\"#\" data-value=\"5\" data-placeholder=\"ID cos\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Cosuri</a>
        <a class=\"dropdown-item\" data-item=\"Module\" href=\"#\" data-value=\"7\" data-placeholder=\"Nume modul\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Module</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">CAUTA</span><i class=\"material-icons\">search</i></button>
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

          <div class=\"component d-none d-md-inline-block\">
        <div class=\"shop-state\" id=\"debug-mode\">
          <i class=\"material-icons\">bug_report</i>
          <span class=\"label-tooltip\" data-toggle=\"pstooltip\" data-placement=\"bottom\" data-html=\"true\"
                title=\"<p class='text-left text-nowrap'><strong>Magazinul tau este in modul de depanare.</strong></p><p class='text-left'>Toate erorile si mesajele PHP sunt afisate. Cand nu mai ai nevoie, <strong>dezactiveaza</strong> aceasta optiune.</p>\">Modul depanare</span>
        </div>
      </div>
            <div class=\"component d-none d-md-inline-block\">  <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/psgit/psgit/\" target= \"_blank\">PS Git</a>
  </div>
</div>
          <div class=\"component\"><div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <div class=\"notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
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
              Comenzi<span id=\"_nb_new_orders_\"></span>
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
              Clienti<span id=\"_nb_new_customers_\"></span>
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
              Mesaje<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nici o comanda noua pentru moment :(<br>
              Ti-ai verificat <strong><a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCarts&token=b80010618f24822f0aeda427cdfad349&action=filterOnlyAbandonedCarts\">cosurile abandonate</a></strong>?<br>Urmatoarea ta comanda s-ar putea ascunde acolo!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nici un client nou pentru moment :(<br>
              Te-ai gandit sa vinzi in marketplace-uri?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nu sunt mesaje noi pana acum.<br>
              Ai mai mult timp pentru alte lucruri!
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
      de_la <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - inregistrati <strong>_date_add_</strong>
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
        <div class=\"component -norightmargin d-none d-md-inline-block\"><div class=\"employee-dropdown dropdown\">
      <div class=\"person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">account_circle</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/ecomm.dev%40seniorsoftware.ro.jpg\" /><br>
      <span>EComm Dev</span>
    </div>
    <div>
      <a class=\"employee-link profile-link\" href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminEmployees&amp;token=05d8802b072b639c98825ceb3c0b5bb6&amp;id_employee=1&amp;updateemployee\">
        <i class=\"material-icons\">settings_applications</i> Profilul tau
      </a>
    </div>
    <div>
      <a class=\"employee-link\" id=\"header_logout\" href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminLogin&amp;token=02d62b6ed6cdd9f1efb85487928b8293&amp;logout\">
        <i class=\"material-icons\">power_settings_new</i> Deconectare
      </a>
    </div>
  </div>
</div>
</div>

    
  </nav>
  </header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminDashboard&amp;token=d88ced7116a8074b1ec982fff87c9daf\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tablou de bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vinde</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminOrders&amp;token=3df70b6885cead9d0551415628cbb383\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Comenzi
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminOrders&amp;token=3df70b6885cead9d0551415628cbb383\" class=\"link\"> Comenzi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminInvoices&amp;token=ef3f843b924a9244112d25cf265e4f57\" class=\"link\"> Facturi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminSlip&amp;token=b491f163af92c0d046dc60afc5e2fe20\" class=\"link\"> Note de credit
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminDeliverySlip&amp;token=b57d4558df629777624a18acc50c2ec4\" class=\"link\"> Avize de livrare
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCarts&amp;token=b80010618f24822f0aeda427cdfad349\" class=\"link\"> Cosuri de cumparaturi
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/psgit/psgit/sec_admin/index.php/product/catalog?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Catalog de produse
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/psgit/psgit/sec_admin/index.php/product/catalog?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\" class=\"link\"> Produse
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCategories&amp;token=43ba92fda3aeb15afa726bbf51e70fd7\" class=\"link\"> Categorii
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminTracking&amp;token=9e04558b1454ca5c4e62983e8b28d7e5\" class=\"link\"> Monitorizare
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminAttributesGroups&amp;token=ac5818b1bcfe943d05cb4d807ed157d1\" class=\"link\"> Atribute si caracteristici
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminManufacturers&amp;token=7efac78657f7ee3b6b3fbd62e4a8128e\" class=\"link\"> Marci si furnizori
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminAttachments&amp;token=ef5b5211f22a420c5c67a159860b6a9a\" class=\"link\"> Fisiere
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCartRules&amp;token=5b82177c7b58bf0d5120b2b4a642a10a\" class=\"link\"> Reduceri
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/psgit/psgit/sec_admin/index.php/stock/?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCustomers&amp;token=2873fb9586edc417c4641b6b32dea8cb\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Clienti
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCustomers&amp;token=2873fb9586edc417c4641b6b32dea8cb\" class=\"link\"> Clienti
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminAddresses&amp;token=86273153c7ca1eb35bceca501c76b670\" class=\"link\"> Adrese
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCustomerThreads&amp;token=4b1ffb26545a359367b146d60794dbb8\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    Asistenta pentru clienti
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCustomerThreads&amp;token=4b1ffb26545a359367b146d60794dbb8\" class=\"link\"> Asistenta pentru clienti
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminOrderMessage&amp;token=9e5ef8f9c044f1e421e961cebda3266a\" class=\"link\"> Mesaje la comenzi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminReturn&amp;token=00494491f7803d4f88d1020348fe7529\" class=\"link\"> Returnari de produse
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminStats&amp;token=682a8ae81ab08ebdd6a1a5228cb28cef\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Statistici
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Imbunatateste</span>
          </li>

                          
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/psgit/psgit/sec_admin/index.php/module/catalog?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Module
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/psgit/psgit/sec_admin/index.php/module/catalog?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\" class=\"link\"> Module si servicii
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\" id=\"subtab-AdminAddonsCatalog\">
                              <a href=\"/psgit/psgit/sec_admin/index.php/module/addons-store?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\" class=\"link\"> Catalog de module
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\" id=\"subtab-AdminParentThemes\">
                  <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminThemes&amp;token=795b24e02ea29df5bf9499fbcab60cf6\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Design
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminThemes\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminThemes&amp;token=795b24e02ea29df5bf9499fbcab60cf6\" class=\"link\"> Tema si sigla
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\" id=\"subtab-AdminThemesCatalog\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminThemesCatalog&amp;token=bc4604e88a1c14a5398e60ea630bc327\" class=\"link\"> Catalog de teme
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\" id=\"subtab-AdminCmsContent\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCmsContent&amp;token=eea7f04baa6d4c06e3745fa86ad0ea77\" class=\"link\"> Pagini
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminModulesPositions&amp;token=cb8da96446c58e6be8720ad6f9009734\" class=\"link\"> Pozitii
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminImages&amp;token=374d0c9b551acb07ca60498cd1fb4eee\" class=\"link\"> Optiuni pentru imagini
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminLinkWidget&amp;token=ba2efdeb3603db83544a0841589ed7b9\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCarriers&amp;token=93e69ac0e925a0b83dac0012f439686f\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Livrare
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCarriers&amp;token=93e69ac0e925a0b83dac0012f439686f\" class=\"link\"> Transportatori
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminShipping\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminShipping&amp;token=bcc6dedab7a8a0f8063f167cc2bab427\" class=\"link\"> Preferinte
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\" id=\"subtab-AdminParentPayment\">
                  <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminPayment&amp;token=341146f054d7606a6ae054b20ae25987\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Plata
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminPayment\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminPayment&amp;token=341146f054d7606a6ae054b20ae25987\" class=\"link\"> Modalitati de plata
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminPaymentPreferences&amp;token=93a751419abb87e6e3e648cb94263d5b\" class=\"link\"> Preferinte
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\" id=\"subtab-AdminInternational\">
                  <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminLocalization&amp;token=a28b7f7a74eff88b1050f183c8054401\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    International
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminLocalization&amp;token=a28b7f7a74eff88b1050f183c8054401\" class=\"link\"> Localizare
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminZones&amp;token=32a2ae48995c422087efe3d4885c8565\" class=\"link\"> Locatii
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminTaxes&amp;token=85c51475660f42a650ebb970d92bf053\" class=\"link\"> Taxe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminTranslations\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminTranslations&amp;token=1a1e595f40690c5ba91a1dd3b3290160\" class=\"link\"> Traduceri
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block \" data-submenu=\"73\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configureaza</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\" id=\"subtab-ShopParameters\">
                  <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminPreferences&amp;token=7c7d532bf0a90d3e4b2e5075e445724d\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Parametri ai magazinului
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminPreferences&amp;token=7c7d532bf0a90d3e4b2e5075e445724d\" class=\"link\"> Parametri generali
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminOrderPreferences&amp;token=a88d7093d86cf123abb84901fb07b87c\" class=\"link\"> Comenzi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\" id=\"subtab-AdminPPreferences\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminPPreferences&amp;token=bbab9783832383eb705f148bad2068e1\" class=\"link\"> Produse
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCustomerPreferences&amp;token=848827a5399bdc4ea355b2ab2b627c8e\" class=\"link\"> Clienti
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminParentStores\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminContacts&amp;token=3cec734d118dd50d75cb4b8944091fc1\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentMeta\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminMeta&amp;token=bc0a548f28682b4c8203cbcc61eb23b1\" class=\"link\"> Trafic si SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminSearchConf&amp;token=4b8ee8a315e87dc52b6cf4eff30a9fb5\" class=\"link\"> Cauta
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminGamification&amp;token=e493c339aa6a0a9994236e2bfe376cca\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/psgit/psgit/sec_admin/index.php/configure/advanced/system_information?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Parametri avansați
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\" id=\"subtab-AdminInformation\">
                              <a href=\"/psgit/psgit/sec_admin/index.php/configure/advanced/system_information?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\" class=\"link\"> Informatii
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\" id=\"subtab-AdminPerformance\">
                              <a href=\"/psgit/psgit/sec_admin/index.php/configure/advanced/performance?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\" class=\"link\"> Performanta
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminAdminPreferences&amp;token=a8057ccb6fe1b7ed17081462fc581f97\" class=\"link\"> Administrare
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminEmails\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminEmails&amp;token=9d573c2bac8af19d1463cd9e28e9c938\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\" id=\"subtab-AdminImport\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminImport&amp;token=3729d106b8d8b92943fe7f3ef3bf1958\" class=\"link\"> Importa
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminEmployees&amp;token=05d8802b072b639c98825ceb3c0b5bb6\" class=\"link\"> Angajati
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminRequestSql&amp;token=157220ceb0f50ec30b2f3c937cb1238a\" class=\"link\"> Baza de date
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminLogs\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminLogs&amp;token=3394cc94f87aefc524048773b7961642\" class=\"link\"> Jurnale
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\" id=\"subtab-AdminWebservice\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminWebservice&amp;token=55afe3950b4d9bf3575579308b6cb217\" class=\"link\"> Servicii Web
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse d-none d-md-block\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <nav class=\"breadcrumb\">

                        <a class=\"breadcrumb-item\" href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminParentModulesSf&amp;token=557f1a06a84cd0839cf597754e1423b4\">Module</a>
              
      
    </nav>
  

  
    <h2 class=\"title\">
      Gestioneaza modulele instalate    </h2>
  

  
    <div class=\"toolbar-icons\">
      
                        
          <a
            class=\"mx-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add_module\"
            href=\"#\"            title=\"Incarca un modul\"            data-toggle=\"pstooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">cloud_upload</i>
            <span class=\"title\">Incarca un modul</span>
          </a>
                                
          <a
            class=\"mx-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-addons_connect\"
            href=\"#\"            title=\"Conecteaza-te la piata Addons\"            data-toggle=\"pstooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">vpn_key</i>
            <span class=\"title\">Conecteaza-te la piata Addons</span>
          </a>
                          
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Ajutor\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/psgit/psgit/sec_admin/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Fro%252Fdoc%252FAdminModules%253Fversion%253D1.7.3.4%2526country%253Dro/Ajutor?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Ajutor</span>
          </a>
                  </div>
  
        <div class=\"page-head-tabs\" id=\"head_tabs\">
                <a class=\"tab\"
   href=\"/psgit/psgit/sec_admin/index.php/module/catalog?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\">Selectie</a>

                <a class=\"tab current\"
   href=\"/psgit/psgit/sec_admin/index.php/module/manage?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\">Module instalate</a>

                <a class=\"tab\"
   href=\"/psgit/psgit/sec_admin/index.php/module/notifications?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\">Notificari  <div class=\"notification-container\">
    <span class=\"notification-counter\">6</span>
  </div>
  </a>

            </div>
      
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-RO&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/ro/login?email=ecomm.dev%40seniorsoftware.ro&amp;firstname=EComm&amp;lastname=Dev&amp;website=http%3A%2F%2Flocalhost%2Fpsgit%2Fpsgit%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RO&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/psgit/psgit/sec_admin/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecteaza magazinul la piata PrestaShop pentru a importa automat toate achizitiile tale.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Nu ai cont?</h4>
\t\t\t\t\t\t<p class='text-justify'>Descopera puterea PrestaShop Addons! Exploreaza PrestaShop Official Marketplace si gaseste peste 3500 de module si teme inovatoare, care optimizeaza ratele de conversie, cresc traficul, construiesc loialitatea clientilor si iti sporesc productivitatea</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectare la Module Prestashop</h4>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/ro/forgot-your-password\">Am uitat parola</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/ro/login?email=ecomm.dev%40seniorsoftware.ro&amp;firstname=EComm&amp;lastname=Dev&amp;website=http%3A%2F%2Flocalhost%2Fpsgit%2Fpsgit%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RO&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreeaza un cont
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Autentificare
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
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1121
        $this->displayBlock('content_header', $context, $blocks);
        // line 1122
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1123
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1124
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1125
        echo "
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh nu!</h1>
  <p class=\"mt-3\">
    Versiunea mobila a acestei pagini nu este inca disponibila.
  </p>
  <p class=\"mt-2\">
    Te rugam sa utilizezi un calculator de tip desktop pentru a accesa aceasta pagina, pana cand este adaptata pentru mobil.
  </p>
  <p class=\"mt-2\">
    Multumesc.
  </p>
  <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminDashboard&amp;token=d88ced7116a8074b1ec982fff87c9daf\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Inapoi
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-RO&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/ro/login?email=ecomm.dev%40seniorsoftware.ro&amp;firstname=EComm&amp;lastname=Dev&amp;website=http%3A%2F%2Flocalhost%2Fpsgit%2Fpsgit%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RO&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/psgit/psgit/sec_admin/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecteaza magazinul la piata PrestaShop pentru a importa automat toate achizitiile tale.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Nu ai cont?</h4>
\t\t\t\t\t\t<p class='text-justify'>Descopera puterea PrestaShop Addons! Exploreaza PrestaShop Official Marketplace si gaseste peste 3500 de module si teme inovatoare, care optimizeaza ratele de conversie, cresc traficul, construiesc loialitatea clientilor si iti sporesc productivitatea</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectare la Module Prestashop</h4>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/ro/forgot-your-password\">Am uitat parola</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/ro/login?email=ecomm.dev%40seniorsoftware.ro&amp;firstname=EComm&amp;lastname=Dev&amp;website=http%3A%2F%2Flocalhost%2Fpsgit%2Fpsgit%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RO&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreeaza un cont
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Autentificare
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
        // line 1233
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
        
        $__internal_bec14aa51e11986512406d2413eb48f79b3a24803a1a81d278428a641c195176->leave($__internal_bec14aa51e11986512406d2413eb48f79b3a24803a1a81d278428a641c195176_prof);

    }

    // line 83
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1814daf0e72eedd90f2802ccbf90b09272c2a3f5521f38d8dedbd1f1154c8103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1814daf0e72eedd90f2802ccbf90b09272c2a3f5521f38d8dedbd1f1154c8103->enter($__internal_1814daf0e72eedd90f2802ccbf90b09272c2a3f5521f38d8dedbd1f1154c8103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1814daf0e72eedd90f2802ccbf90b09272c2a3f5521f38d8dedbd1f1154c8103->leave($__internal_1814daf0e72eedd90f2802ccbf90b09272c2a3f5521f38d8dedbd1f1154c8103_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
        $__internal_54a9ae0cdc517d8be68d75450c67a713c9f0cbd5da41c5693b77280837968bd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a9ae0cdc517d8be68d75450c67a713c9f0cbd5da41c5693b77280837968bd1->enter($__internal_54a9ae0cdc517d8be68d75450c67a713c9f0cbd5da41c5693b77280837968bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_54a9ae0cdc517d8be68d75450c67a713c9f0cbd5da41c5693b77280837968bd1->leave($__internal_54a9ae0cdc517d8be68d75450c67a713c9f0cbd5da41c5693b77280837968bd1_prof);

    }

    // line 1121
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_c39391e6478827dacf21e1afa89a9bed3703f408337a57f181662a92f989fda8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c39391e6478827dacf21e1afa89a9bed3703f408337a57f181662a92f989fda8->enter($__internal_c39391e6478827dacf21e1afa89a9bed3703f408337a57f181662a92f989fda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_c39391e6478827dacf21e1afa89a9bed3703f408337a57f181662a92f989fda8->leave($__internal_c39391e6478827dacf21e1afa89a9bed3703f408337a57f181662a92f989fda8_prof);

    }

    // line 1122
    public function block_content($context, array $blocks = array())
    {
        $__internal_2a633049a6a38702882965e97af0d2091455905765b7886334711f5aaab813c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a633049a6a38702882965e97af0d2091455905765b7886334711f5aaab813c9->enter($__internal_2a633049a6a38702882965e97af0d2091455905765b7886334711f5aaab813c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_2a633049a6a38702882965e97af0d2091455905765b7886334711f5aaab813c9->leave($__internal_2a633049a6a38702882965e97af0d2091455905765b7886334711f5aaab813c9_prof);

    }

    // line 1123
    public function block_content_footer($context, array $blocks = array())
    {
        $__internal_07244163a373f448c7ac4976d8bba374fe9355cbc721d52f09153f4e89cd2fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07244163a373f448c7ac4976d8bba374fe9355cbc721d52f09153f4e89cd2fd1->enter($__internal_07244163a373f448c7ac4976d8bba374fe9355cbc721d52f09153f4e89cd2fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_07244163a373f448c7ac4976d8bba374fe9355cbc721d52f09153f4e89cd2fd1->leave($__internal_07244163a373f448c7ac4976d8bba374fe9355cbc721d52f09153f4e89cd2fd1_prof);

    }

    // line 1124
    public function block_sidebar_right($context, array $blocks = array())
    {
        $__internal_651a66db298d0108415b15506bbc87cc6e5e3969e37e61eea580d642bdf47cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651a66db298d0108415b15506bbc87cc6e5e3969e37e61eea580d642bdf47cba->enter($__internal_651a66db298d0108415b15506bbc87cc6e5e3969e37e61eea580d642bdf47cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_651a66db298d0108415b15506bbc87cc6e5e3969e37e61eea580d642bdf47cba->leave($__internal_651a66db298d0108415b15506bbc87cc6e5e3969e37e61eea580d642bdf47cba_prof);

    }

    // line 1233
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06e32fddbb92d52d3c3288cd9f0545194a15c481aaed192c14064382573333e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06e32fddbb92d52d3c3288cd9f0545194a15c481aaed192c14064382573333e8->enter($__internal_06e32fddbb92d52d3c3288cd9f0545194a15c481aaed192c14064382573333e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_06e32fddbb92d52d3c3288cd9f0545194a15c481aaed192c14064382573333e8->leave($__internal_06e32fddbb92d52d3c3288cd9f0545194a15c481aaed192c14064382573333e8_prof);

    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
        $__internal_d3e95f249227d32d2cb6e90b5fa2d300e11860c03118f1ffdf107296a756d73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e95f249227d32d2cb6e90b5fa2d300e11860c03118f1ffdf107296a756d73f->enter($__internal_d3e95f249227d32d2cb6e90b5fa2d300e11860c03118f1ffdf107296a756d73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_d3e95f249227d32d2cb6e90b5fa2d300e11860c03118f1ffdf107296a756d73f->leave($__internal_d3e95f249227d32d2cb6e90b5fa2d300e11860c03118f1ffdf107296a756d73f_prof);

    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
        $__internal_fc71913dd2d2f158e0d6a579107fa9989c1d4919a5cf6210e230d73f88c72712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc71913dd2d2f158e0d6a579107fa9989c1d4919a5cf6210e230d73f88c72712->enter($__internal_fc71913dd2d2f158e0d6a579107fa9989c1d4919a5cf6210e230d73f88c72712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_fc71913dd2d2f158e0d6a579107fa9989c1d4919a5cf6210e230d73f88c72712->leave($__internal_fc71913dd2d2f158e0d6a579107fa9989c1d4919a5cf6210e230d73f88c72712_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__82d51bf2d9ecd7bdc7662f5268780726c01e19bcb254d6ea5e9b7d91c05bb22a";
    }

    public function getDebugInfo()
    {
        return array (  1354 => 1233,  1343 => 1124,  1332 => 1123,  1321 => 1122,  1310 => 1121,  1289 => 83,  1278 => 1233,  1168 => 1125,  1165 => 1124,  1162 => 1123,  1159 => 1122,  1157 => 1121,  115 => 83,  31 => 1,);
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
<html lang=\"ro\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/psgit/psgit/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/psgit/psgit/img/app_icon.png\" />

<title>Gestioneaza modulele instalate • PS Git</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModules';
    var iso_user = 'ro';
    var lang_is_rtl = '0';
    var full_language_code = 'ro-ro';
    var full_cldr_language_code = 'ro-RO';
    var country_iso_code = 'RO';
    var _PS_VERSION_ = '1.7.3.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A fst plasata o comanda noua in magazin.';
    var order_number_msg = 'Numarul comenzii: ';
    var total_msg = 'Total: ';
    var from_msg = 'Din ';
    var see_order_msg = 'Vezi comanda';
    var new_customer_msg = 'S-a inregistrat un client nou in magazin.';
    var customer_name_msg = 'Numele clientului: ';
    var new_msg = 'A fost postat un mesaj nou in magazin.';
    var see_msg = 'Citire mesaj';
    var token = '425f8818c27d7cf76efdbc6ab2e4e008';
    var token_admin_orders = '3df70b6885cead9d0551415628cbb383';
    var token_admin_customers = '2873fb9586edc417c4641b6b32dea8cb';
    var token_admin_customer_threads = '4b1ffb26545a359367b146d60794dbb8';
    var currentIndex = 'index.php?controller=AdminModules';
    var employee_token = '05d8802b072b639c98825ceb3c0b5bb6';
    var choose_language_translate = 'Alege limba';
    var default_language = '1';
    var admin_modules_link = '/psgit/psgit/sec_admin/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA';
    var tab_modules_list = '';
    var update_success_msg = 'Actualizare reusita';
    var errorLogin = 'PrestaShop nu putut efectua autentificarea in Addons. Te rugam sa verifici datele de autentificare si conexiunea la internet.';
    var search_product_msg = 'Cauta un produs';
  </script>

      <link href=\"/psgit/psgit/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/psgit/psgit/sec_admin/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/psgit/psgit/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/psgit/psgit/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/psgit/psgit/sec_admin/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/psgit\\/psgit\\/sec_admin\\/\";
var baseDir = \"\\/psgit\\/psgit\\/\";
var currency = {\"iso_code\":\"RON\",\"sign\":\"RON\",\"name\":\"leu rom\\u00e2nesc\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/psgit/psgit/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/psgit/psgit/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/psgit/psgit/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/psgit/psgit/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/psgit/psgit/sec_admin/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/psgit/psgit/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/psgit/psgit/js/admin.js?v=1.7.3.4\"></script>
<script type=\"text/javascript\" src=\"/psgit/psgit/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/psgit/psgit/js/tools.js?v=1.7.3.4\"></script>
<script type=\"text/javascript\" src=\"/psgit/psgit/sec_admin/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/psgit/psgit/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/psgit/psgit/sec_admin/themes/default/js/vendor/nv.d3.min.js\"></script>


  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminGamification&token=e493c339aa6a0a9994236e2bfe376cca';
\t\t\t\tvar current_id_tab = 45;
\t\t\t</script>

{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>
<body class=\"lang-ro adminmodules\">



<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

    
    

    
    <i class=\"material-icons float-left px-1 js-mobile-menu d-md-none\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminDashboard&amp;token=d88ced7116a8074b1ec982fff87c9daf\"></a>

    <div class=\"component d-none d-md-flex\" id=\"quick-access-container\"><div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acces rapid
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCategories&amp;addcategory&amp;token=43ba92fda3aeb15afa726bbf51e70fd7\"
                 data-item=\"Categorie noua\"
      >Categorie noua</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminOrders&amp;token=3df70b6885cead9d0551415628cbb383\"
                 data-item=\"Comenzi\"
      >Comenzi</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=5b82177c7b58bf0d5120b2b4a642a10a\"
                 data-item=\"Cupon nou\"
      >Cupon nou</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=682a8ae81ab08ebdd6a1a5228cb28cef\"
                 data-item=\"Evaluarea catalogului\"
      >Evaluarea catalogului</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/psgit/psgit/sec_admin/index.php/module/manage?token=7d352622620c76e8e44d2a2fc57de473\"
                 data-item=\"Module instalate\"
      >Module instalate</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/psgit/psgit/sec_admin/index.php/product/new?token=7d352622620c76e8e44d2a2fc57de473\"
                 data-item=\"Produs nou\"
      >Produs nou</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"33\"
        data-icon=\"icon-AdminParentModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/module/manage?-e3tJARtcVfV2owljKq4UkfA\"
        data-post-link=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminQuickAccesses&token=c064d56ae4c09d53f98b28464c06a1e2\"
        data-prompt-text=\"Te rog numeste aceasta scurtatura:\"
        data-link=\" - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Adauga pagina curenta la lista de Acces rapid
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminQuickAccesses&token=c064d56ae4c09d53f98b28464c06a1e2\">
      <i class=\"material-icons\">settings</i>
      Administreaza linkurile de Acces Rapid
    </a>
  </div>
</div>
</div>
    <div class=\"component d-none d-md-inline-block col-md-4\" id=\"header-search-container\">
<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/psgit/psgit/sec_admin/index.php?controller=AdminSearch&amp;token=d458f9764213c23e289e30e3f256cf64\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Cauta (de exemplu, referinta produsului, nume client...)\">
    <div class=\"input-group-btn\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Oriunde
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Oriunde\" href=\"#\" data-value=\"0\" data-placeholder=\"Ce anume cautati?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Oriunde</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog de produse\" href=\"#\" data-value=\"1\" data-placeholder=\"Numele produsului, unitatea de stoc (SKU), referinta...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog de produse</a>
        <a class=\"dropdown-item\" data-item=\"Clienti dupa nume\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nume...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clienti dupa nume</a>
        <a class=\"dropdown-item\" data-item=\"Clienti dupa adresa ip\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clienti dupa adresa IP</a>
        <a class=\"dropdown-item\" data-item=\"Comenzi\" href=\"#\" data-value=\"3\" data-placeholder=\"ID comanda\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Comenzi</a>
        <a class=\"dropdown-item\" data-item=\"Facturi\" href=\"#\" data-value=\"4\" data-placeholder=\"Numar factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i></i> Facturi</a>
        <a class=\"dropdown-item\" data-item=\"Cosuri\" href=\"#\" data-value=\"5\" data-placeholder=\"ID cos\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Cosuri</a>
        <a class=\"dropdown-item\" data-item=\"Module\" href=\"#\" data-value=\"7\" data-placeholder=\"Nume modul\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Module</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">CAUTA</span><i class=\"material-icons\">search</i></button>
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

          <div class=\"component d-none d-md-inline-block\">
        <div class=\"shop-state\" id=\"debug-mode\">
          <i class=\"material-icons\">bug_report</i>
          <span class=\"label-tooltip\" data-toggle=\"pstooltip\" data-placement=\"bottom\" data-html=\"true\"
                title=\"<p class='text-left text-nowrap'><strong>Magazinul tau este in modul de depanare.</strong></p><p class='text-left'>Toate erorile si mesajele PHP sunt afisate. Cand nu mai ai nevoie, <strong>dezactiveaza</strong> aceasta optiune.</p>\">Modul depanare</span>
        </div>
      </div>
            <div class=\"component d-none d-md-inline-block\">  <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/psgit/psgit/\" target= \"_blank\">PS Git</a>
  </div>
</div>
          <div class=\"component\"><div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <div class=\"notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
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
              Comenzi<span id=\"_nb_new_orders_\"></span>
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
              Clienti<span id=\"_nb_new_customers_\"></span>
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
              Mesaje<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nici o comanda noua pentru moment :(<br>
              Ti-ai verificat <strong><a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCarts&token=b80010618f24822f0aeda427cdfad349&action=filterOnlyAbandonedCarts\">cosurile abandonate</a></strong>?<br>Urmatoarea ta comanda s-ar putea ascunde acolo!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nici un client nou pentru moment :(<br>
              Te-ai gandit sa vinzi in marketplace-uri?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nu sunt mesaje noi pana acum.<br>
              Ai mai mult timp pentru alte lucruri!
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
      de_la <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - inregistrati <strong>_date_add_</strong>
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
        <div class=\"component -norightmargin d-none d-md-inline-block\"><div class=\"employee-dropdown dropdown\">
      <div class=\"person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">account_circle</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/ecomm.dev%40seniorsoftware.ro.jpg\" /><br>
      <span>EComm Dev</span>
    </div>
    <div>
      <a class=\"employee-link profile-link\" href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminEmployees&amp;token=05d8802b072b639c98825ceb3c0b5bb6&amp;id_employee=1&amp;updateemployee\">
        <i class=\"material-icons\">settings_applications</i> Profilul tau
      </a>
    </div>
    <div>
      <a class=\"employee-link\" id=\"header_logout\" href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminLogin&amp;token=02d62b6ed6cdd9f1efb85487928b8293&amp;logout\">
        <i class=\"material-icons\">power_settings_new</i> Deconectare
      </a>
    </div>
  </div>
</div>
</div>

    
  </nav>
  </header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminDashboard&amp;token=d88ced7116a8074b1ec982fff87c9daf\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tablou de bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vinde</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminOrders&amp;token=3df70b6885cead9d0551415628cbb383\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Comenzi
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminOrders&amp;token=3df70b6885cead9d0551415628cbb383\" class=\"link\"> Comenzi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminInvoices&amp;token=ef3f843b924a9244112d25cf265e4f57\" class=\"link\"> Facturi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminSlip&amp;token=b491f163af92c0d046dc60afc5e2fe20\" class=\"link\"> Note de credit
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminDeliverySlip&amp;token=b57d4558df629777624a18acc50c2ec4\" class=\"link\"> Avize de livrare
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCarts&amp;token=b80010618f24822f0aeda427cdfad349\" class=\"link\"> Cosuri de cumparaturi
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/psgit/psgit/sec_admin/index.php/product/catalog?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Catalog de produse
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/psgit/psgit/sec_admin/index.php/product/catalog?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\" class=\"link\"> Produse
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCategories&amp;token=43ba92fda3aeb15afa726bbf51e70fd7\" class=\"link\"> Categorii
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminTracking&amp;token=9e04558b1454ca5c4e62983e8b28d7e5\" class=\"link\"> Monitorizare
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminAttributesGroups&amp;token=ac5818b1bcfe943d05cb4d807ed157d1\" class=\"link\"> Atribute si caracteristici
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminManufacturers&amp;token=7efac78657f7ee3b6b3fbd62e4a8128e\" class=\"link\"> Marci si furnizori
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminAttachments&amp;token=ef5b5211f22a420c5c67a159860b6a9a\" class=\"link\"> Fisiere
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCartRules&amp;token=5b82177c7b58bf0d5120b2b4a642a10a\" class=\"link\"> Reduceri
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/psgit/psgit/sec_admin/index.php/stock/?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCustomers&amp;token=2873fb9586edc417c4641b6b32dea8cb\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Clienti
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCustomers&amp;token=2873fb9586edc417c4641b6b32dea8cb\" class=\"link\"> Clienti
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminAddresses&amp;token=86273153c7ca1eb35bceca501c76b670\" class=\"link\"> Adrese
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCustomerThreads&amp;token=4b1ffb26545a359367b146d60794dbb8\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    Asistenta pentru clienti
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCustomerThreads&amp;token=4b1ffb26545a359367b146d60794dbb8\" class=\"link\"> Asistenta pentru clienti
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminOrderMessage&amp;token=9e5ef8f9c044f1e421e961cebda3266a\" class=\"link\"> Mesaje la comenzi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminReturn&amp;token=00494491f7803d4f88d1020348fe7529\" class=\"link\"> Returnari de produse
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminStats&amp;token=682a8ae81ab08ebdd6a1a5228cb28cef\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Statistici
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Imbunatateste</span>
          </li>

                          
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/psgit/psgit/sec_admin/index.php/module/catalog?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Module
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/psgit/psgit/sec_admin/index.php/module/catalog?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\" class=\"link\"> Module si servicii
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\" id=\"subtab-AdminAddonsCatalog\">
                              <a href=\"/psgit/psgit/sec_admin/index.php/module/addons-store?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\" class=\"link\"> Catalog de module
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\" id=\"subtab-AdminParentThemes\">
                  <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminThemes&amp;token=795b24e02ea29df5bf9499fbcab60cf6\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Design
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminThemes\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminThemes&amp;token=795b24e02ea29df5bf9499fbcab60cf6\" class=\"link\"> Tema si sigla
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\" id=\"subtab-AdminThemesCatalog\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminThemesCatalog&amp;token=bc4604e88a1c14a5398e60ea630bc327\" class=\"link\"> Catalog de teme
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\" id=\"subtab-AdminCmsContent\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCmsContent&amp;token=eea7f04baa6d4c06e3745fa86ad0ea77\" class=\"link\"> Pagini
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminModulesPositions&amp;token=cb8da96446c58e6be8720ad6f9009734\" class=\"link\"> Pozitii
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminImages&amp;token=374d0c9b551acb07ca60498cd1fb4eee\" class=\"link\"> Optiuni pentru imagini
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminLinkWidget&amp;token=ba2efdeb3603db83544a0841589ed7b9\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCarriers&amp;token=93e69ac0e925a0b83dac0012f439686f\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Livrare
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCarriers&amp;token=93e69ac0e925a0b83dac0012f439686f\" class=\"link\"> Transportatori
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminShipping\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminShipping&amp;token=bcc6dedab7a8a0f8063f167cc2bab427\" class=\"link\"> Preferinte
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\" id=\"subtab-AdminParentPayment\">
                  <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminPayment&amp;token=341146f054d7606a6ae054b20ae25987\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Plata
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminPayment\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminPayment&amp;token=341146f054d7606a6ae054b20ae25987\" class=\"link\"> Modalitati de plata
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminPaymentPreferences&amp;token=93a751419abb87e6e3e648cb94263d5b\" class=\"link\"> Preferinte
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\" id=\"subtab-AdminInternational\">
                  <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminLocalization&amp;token=a28b7f7a74eff88b1050f183c8054401\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    International
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminLocalization&amp;token=a28b7f7a74eff88b1050f183c8054401\" class=\"link\"> Localizare
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminZones&amp;token=32a2ae48995c422087efe3d4885c8565\" class=\"link\"> Locatii
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminTaxes&amp;token=85c51475660f42a650ebb970d92bf053\" class=\"link\"> Taxe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminTranslations\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminTranslations&amp;token=1a1e595f40690c5ba91a1dd3b3290160\" class=\"link\"> Traduceri
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block \" data-submenu=\"73\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configureaza</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\" id=\"subtab-ShopParameters\">
                  <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminPreferences&amp;token=7c7d532bf0a90d3e4b2e5075e445724d\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Parametri ai magazinului
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminPreferences&amp;token=7c7d532bf0a90d3e4b2e5075e445724d\" class=\"link\"> Parametri generali
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminOrderPreferences&amp;token=a88d7093d86cf123abb84901fb07b87c\" class=\"link\"> Comenzi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\" id=\"subtab-AdminPPreferences\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminPPreferences&amp;token=bbab9783832383eb705f148bad2068e1\" class=\"link\"> Produse
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminCustomerPreferences&amp;token=848827a5399bdc4ea355b2ab2b627c8e\" class=\"link\"> Clienti
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminParentStores\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminContacts&amp;token=3cec734d118dd50d75cb4b8944091fc1\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentMeta\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminMeta&amp;token=bc0a548f28682b4c8203cbcc61eb23b1\" class=\"link\"> Trafic si SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminSearchConf&amp;token=4b8ee8a315e87dc52b6cf4eff30a9fb5\" class=\"link\"> Cauta
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminGamification&amp;token=e493c339aa6a0a9994236e2bfe376cca\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/psgit/psgit/sec_admin/index.php/configure/advanced/system_information?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Parametri avansați
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\" id=\"subtab-AdminInformation\">
                              <a href=\"/psgit/psgit/sec_admin/index.php/configure/advanced/system_information?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\" class=\"link\"> Informatii
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\" id=\"subtab-AdminPerformance\">
                              <a href=\"/psgit/psgit/sec_admin/index.php/configure/advanced/performance?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\" class=\"link\"> Performanta
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminAdminPreferences&amp;token=a8057ccb6fe1b7ed17081462fc581f97\" class=\"link\"> Administrare
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminEmails\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminEmails&amp;token=9d573c2bac8af19d1463cd9e28e9c938\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\" id=\"subtab-AdminImport\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminImport&amp;token=3729d106b8d8b92943fe7f3ef3bf1958\" class=\"link\"> Importa
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminEmployees&amp;token=05d8802b072b639c98825ceb3c0b5bb6\" class=\"link\"> Angajati
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminRequestSql&amp;token=157220ceb0f50ec30b2f3c937cb1238a\" class=\"link\"> Baza de date
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminLogs\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminLogs&amp;token=3394cc94f87aefc524048773b7961642\" class=\"link\"> Jurnale
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\" id=\"subtab-AdminWebservice\">
                              <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminWebservice&amp;token=55afe3950b4d9bf3575579308b6cb217\" class=\"link\"> Servicii Web
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse d-none d-md-block\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <nav class=\"breadcrumb\">

                        <a class=\"breadcrumb-item\" href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminParentModulesSf&amp;token=557f1a06a84cd0839cf597754e1423b4\">Module</a>
              
      
    </nav>
  

  
    <h2 class=\"title\">
      Gestioneaza modulele instalate    </h2>
  

  
    <div class=\"toolbar-icons\">
      
                        
          <a
            class=\"mx-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add_module\"
            href=\"#\"            title=\"Incarca un modul\"            data-toggle=\"pstooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">cloud_upload</i>
            <span class=\"title\">Incarca un modul</span>
          </a>
                                
          <a
            class=\"mx-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-addons_connect\"
            href=\"#\"            title=\"Conecteaza-te la piata Addons\"            data-toggle=\"pstooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">vpn_key</i>
            <span class=\"title\">Conecteaza-te la piata Addons</span>
          </a>
                          
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Ajutor\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/psgit/psgit/sec_admin/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Fro%252Fdoc%252FAdminModules%253Fversion%253D1.7.3.4%2526country%253Dro/Ajutor?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Ajutor</span>
          </a>
                  </div>
  
        <div class=\"page-head-tabs\" id=\"head_tabs\">
                <a class=\"tab\"
   href=\"/psgit/psgit/sec_admin/index.php/module/catalog?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\">Selectie</a>

                <a class=\"tab current\"
   href=\"/psgit/psgit/sec_admin/index.php/module/manage?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\">Module instalate</a>

                <a class=\"tab\"
   href=\"/psgit/psgit/sec_admin/index.php/module/notifications?_token=PGqFGglMIBNmDDFLfN9-e3tJARtcVfV2owljKq4UkfA\">Notificari  <div class=\"notification-container\">
    <span class=\"notification-counter\">6</span>
  </div>
  </a>

            </div>
      
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-RO&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/ro/login?email=ecomm.dev%40seniorsoftware.ro&amp;firstname=EComm&amp;lastname=Dev&amp;website=http%3A%2F%2Flocalhost%2Fpsgit%2Fpsgit%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RO&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/psgit/psgit/sec_admin/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecteaza magazinul la piata PrestaShop pentru a importa automat toate achizitiile tale.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Nu ai cont?</h4>
\t\t\t\t\t\t<p class='text-justify'>Descopera puterea PrestaShop Addons! Exploreaza PrestaShop Official Marketplace si gaseste peste 3500 de module si teme inovatoare, care optimizeaza ratele de conversie, cresc traficul, construiesc loialitatea clientilor si iti sporesc productivitatea</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectare la Module Prestashop</h4>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/ro/forgot-your-password\">Am uitat parola</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/ro/login?email=ecomm.dev%40seniorsoftware.ro&amp;firstname=EComm&amp;lastname=Dev&amp;website=http%3A%2F%2Flocalhost%2Fpsgit%2Fpsgit%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RO&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreeaza un cont
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Autentificare
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
        <div class=\"col-sm-12\">
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
  <h1>Oh nu!</h1>
  <p class=\"mt-3\">
    Versiunea mobila a acestei pagini nu este inca disponibila.
  </p>
  <p class=\"mt-2\">
    Te rugam sa utilizezi un calculator de tip desktop pentru a accesa aceasta pagina, pana cand este adaptata pentru mobil.
  </p>
  <p class=\"mt-2\">
    Multumesc.
  </p>
  <a href=\"http://localhost/psgit/psgit/sec_admin/index.php?controller=AdminDashboard&amp;token=d88ced7116a8074b1ec982fff87c9daf\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Inapoi
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-RO&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/ro/login?email=ecomm.dev%40seniorsoftware.ro&amp;firstname=EComm&amp;lastname=Dev&amp;website=http%3A%2F%2Flocalhost%2Fpsgit%2Fpsgit%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RO&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/psgit/psgit/sec_admin/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecteaza magazinul la piata PrestaShop pentru a importa automat toate achizitiile tale.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Nu ai cont?</h4>
\t\t\t\t\t\t<p class='text-justify'>Descopera puterea PrestaShop Addons! Exploreaza PrestaShop Official Marketplace si gaseste peste 3500 de module si teme inovatoare, care optimizeaza ratele de conversie, cresc traficul, construiesc loialitatea clientilor si iti sporesc productivitatea</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectare la Module Prestashop</h4>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/ro/forgot-your-password\">Am uitat parola</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/ro/login?email=ecomm.dev%40seniorsoftware.ro&amp;firstname=EComm&amp;lastname=Dev&amp;website=http%3A%2F%2Flocalhost%2Fpsgit%2Fpsgit%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RO&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreeaza un cont
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Autentificare
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
</html>", "__string_template__82d51bf2d9ecd7bdc7662f5268780726c01e19bcb254d6ea5e9b7d91c05bb22a", "");
    }
}
