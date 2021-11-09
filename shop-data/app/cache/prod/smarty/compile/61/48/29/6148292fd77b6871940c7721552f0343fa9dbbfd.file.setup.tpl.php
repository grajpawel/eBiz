<?php /* Smarty version Smarty-3.1.19, created on 2021-11-07 19:24:58
         compiled from "/var/www/html/modules/paypal/views/templates/admin/setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155246082618819fa5bed07-71420947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6148292fd77b6871940c7721552f0343fa9dbbfd' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/setup.tpl',
      1 => 1636309496,
      2 => 'file',
    ),
    '43fd25e03431ffb41b334fbdec17fb95585a2463' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/admin.tpl',
      1 => 1636309496,
      2 => 'file',
    ),
    'd5a7ead196d78682f4465a3dd5b79bc8a4f1de84' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/messages/prestashopCheckoutInfo.tpl',
      1 => 1636309496,
      2 => 'file',
    ),
    '7f8f31c066abb5adac2a9c504787b960932ab88d' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/messages/restApiIntegrationMessage.tpl',
      1 => 1636309496,
      2 => 'file',
    ),
    'e005874c463408918bdc208d1f40e1a838fc2253' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/roundingSettings.tpl',
      1 => 1636309496,
      2 => 'file',
    ),
    'e9296b75d662fd89d386d759f73cd5bc7440877e' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/messages/roundingSettingsMessage.tpl',
      1 => 1636309496,
      2 => 'file',
    ),
    '274eb02b7f23dd0f6b116ceadf9f04278ab85fa8' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/paypalBanner/installmentPopup.tpl',
      1 => 1636309496,
      2 => 'file',
    ),
    'c1daeb278c26d820cb6454b0b414b6aebeec4a32' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/headerLogo.tpl',
      1 => 1636309496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155246082618819fa5bed07-71420947',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isModeSandbox' => 0,
    'psVersion' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_618819fa663aa0_11212017',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_618819fa663aa0_11212017')) {function content_618819fa663aa0_11212017($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['isModeSandbox']->value)&&$_smarty_tpl->tpl_vars['isModeSandbox']->value) {?>
  <style>
    .page-head {
      background-color: #585757 !important;
    }

    .bootstrap .page-head .toolbarBox .btn-toolbar .toolbar_btn i {
      color: #fff !important;
    }

    .bootstrap .page-head ul.breadcrumb {
      color: #fff !important;
    }

    .bootstrap .page-head ul.page-breadcrumb li:before {
      color: #fff !important;
    }

    .bootstrap .page-head ul.page-breadcrumb li a {
      color: #fff !important;
    }

    .page-head .wrapper h1 {
      color: #fff !important;
    }

    .bootstrap .page-head .toolbarBox .btn-toolbar .toolbar_btn {
      color: #fff !important;
    }

    <?php if (version_compare($_smarty_tpl->tpl_vars['psVersion']->value,'1.7.4','<')) {?>

    .page-head .page-title {
      color: #fff !important;
    }

    .page-head .page-head-tabs a{
      color: #fff !important;
    }

    .page-head .page-head-tabs a.current{
      border-bottom: 3px solid #fff !important;
    }

    <?php }?>


  </style>
<?php }?>


    <?php if ($_smarty_tpl->tpl_vars['showPsCheckoutInfo']->value) {?>
        <?php /*  Call merged included template "./_partials/messages/prestashopCheckoutInfo.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./_partials/messages/prestashopCheckoutInfo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '155246082618819fa5bed07-71420947');
content_618819fa5d6845_11985875($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "./_partials/messages/prestashopCheckoutInfo.tpl" */?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['showRestApiIntegrationMessage']->value) {?>
        <?php /*  Call merged included template "./_partials/messages/restApiIntegrationMessage.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./_partials/messages/restApiIntegrationMessage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '155246082618819fa5bed07-71420947');
content_618819fa5def81_64871713($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "./_partials/messages/restApiIntegrationMessage.tpl" */?>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['need_rounding']->value)&&$_smarty_tpl->tpl_vars['need_rounding']->value) {?>
        <?php /*  Call merged included template "./_partials/messages/roundingSettingsMessage.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./_partials/messages/roundingSettingsMessage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '155246082618819fa5bed07-71420947');
content_618819fa5e7479_07921557($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "./_partials/messages/roundingSettingsMessage.tpl" */?>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['showInstallmentPopup']->value)&&$_smarty_tpl->tpl_vars['showInstallmentPopup']->value) {?>
        <?php /*  Call merged included template "./_partials/paypalBanner/installmentPopup.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./_partials/paypalBanner/installmentPopup.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '155246082618819fa5bed07-71420947');
content_618819fa615293_60234582($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "./_partials/paypalBanner/installmentPopup.tpl" */?>
    <?php }?>

    <?php /*  Call merged included template "./_partials/headerLogo.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./_partials/headerLogo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '155246082618819fa5bed07-71420947');
content_618819fa620848_61189817($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "./_partials/headerLogo.tpl" */?>

  <div class="pp__flex setup-blocks">
      <?php if (isset($_smarty_tpl->tpl_vars['formAccountSettings']->value)) {?>
        <div class="pp__flex-item-1 pp__mr-1 stretchHeightForm">
            <?php if (isset($_smarty_tpl->tpl_vars['country_iso']->value)&&in_array($_smarty_tpl->tpl_vars['country_iso']->value,array('MX','BR','IN','JP'))) {?>
              <div>
                  <?php echo $_smarty_tpl->tpl_vars['formAccountSettings']->value;?>

              </div>

              <div>
                  <?php if (isset($_smarty_tpl->tpl_vars['formPaymentSettings']->value)) {?>
                    <div>
                        <?php echo $_smarty_tpl->tpl_vars['formPaymentSettings']->value;?>

                    </div>
                  <?php }?>
              </div>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['formAccountSettings']->value;?>

            <?php }?>

        </div>
      <?php }?>

      <?php if (isset($_smarty_tpl->tpl_vars['formEnvironmentSettings']->value)) {?>
        <div class="pp__flex-item-1 pp__mr-1 stretchHeightForm">
            <?php echo $_smarty_tpl->tpl_vars['formEnvironmentSettings']->value;?>

        </div>
      <?php }?>

      <?php if (isset($_smarty_tpl->tpl_vars['country_iso']->value)===false||false===in_array($_smarty_tpl->tpl_vars['country_iso']->value,array('MX','BR','IN','JP'))) {?>
          <?php if (isset($_smarty_tpl->tpl_vars['formPaymentSettings']->value)) {?>
            <div class="pp__flex-item-1 pp__mr-1 stretchHeightForm">
                <?php echo $_smarty_tpl->tpl_vars['formPaymentSettings']->value;?>

            </div>
          <?php }?>
      <?php }?>

      <?php if (isset($_smarty_tpl->tpl_vars['formStatus']->value)) {?>
        <div class="pp__flex-item-1 <?php if (false===isset($_smarty_tpl->tpl_vars['country_iso']->value)||false===in_array($_smarty_tpl->tpl_vars['country_iso']->value,array('MX','BR','IN','JP'))) {?>stretchHeightForm<?php }?>">
            <?php echo $_smarty_tpl->tpl_vars['formStatus']->value;?>

        </div>
      <?php }?>
  </div>


<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2021-11-07 19:24:58
         compiled from "/var/www/html/modules/paypal/views/templates/admin/_partials/messages/prestashopCheckoutInfo.tpl" */ ?>
<?php if ($_valid && !is_callable('content_618819fa5d6845_11985875')) {function content_618819fa5d6845_11985875($_smarty_tpl) {?>

<div class="alert alert-info ps-checkout-info">
  <button type="button" class="close" data-dismiss="alert" data-action="close">×</button>
    <?php ob_start();?><?php echo smartyTranslate(array('s'=>'This module allows your customers to pay with their PayPal account. If you wish to accept credit cards and other payment methods in addition to PayPal, we recommend the [a @href1@]PrestaShop Checkout[/a] module.','mod'=>'paypal'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo '#';?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo 'data-action="install"';?>
<?php $_tmp6=ob_get_clean();?><?php echo smarty_modifier_paypalreplace($_tmp4,array('@href1@'=>$_tmp5,'@target@'=>$_tmp6));?>

</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2021-11-07 19:24:58
         compiled from "/var/www/html/modules/paypal/views/templates/admin/_partials/messages/restApiIntegrationMessage.tpl" */ ?>
<?php if ($_valid && !is_callable('content_618819fa5def81_64871713')) {function content_618819fa5def81_64871713($_smarty_tpl) {?>

<div class="alert alert-warning">
    <button type="button" class="close" data-dismiss="alert">×</button>

    <div>
        <?php echo smartyTranslate(array('s'=>'As we are constantly working on the security of your information, a new version of your merchant account authentication is available starting from the v5.2.0 of PayPal Official module.','mod'=>'paypal'),$_smarty_tpl);?>

    </div>

    <div>
        <?php ob_start();?><?php echo smartyTranslate(array('s'=>'Please pay attention that it is required to [b]reconnect your PayPal merchant account[/b] in order to continue to use PayPal payment solution.','mod'=>'paypal'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php echo smarty_modifier_paypalreplace($_tmp7);?>

    </div>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2021-11-07 19:24:58
         compiled from "/var/www/html/modules/paypal/views/templates/admin/_partials/messages/roundingSettingsMessage.tpl" */ ?>
<?php if ($_valid && !is_callable('content_618819fa5e7479_07921557')) {function content_618819fa5e7479_07921557($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['variant'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['variant']->value)===null||$tmp==='' ? 'normal' : $tmp), null, 0);?>

<div class="alert alert-warning <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames(array('hidden'=>$_smarty_tpl->tpl_vars['variant']->value=='hidden'));?>
" data-rounding-alert>
  <button type="button" class="close" data-dismiss="alert">×</button>
    <div>
      <?php ob_start();?><?php echo smartyTranslate(array('s'=>'Your rounding settings are not fully compatible with PayPal requirements. In order to avoid some of the transactions to fail, please change the PrestaShop rounding mode in [a @href1@] Preferences > General[/a] to:','mod'=>'paypal'),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPreferences',true);?>
<?php $_tmp9=ob_get_clean();?><?php ob_start();?><?php echo 'target="blank"';?>
<?php $_tmp10=ob_get_clean();?><?php echo smarty_modifier_paypalreplace($_tmp8,array('@href1@'=>$_tmp9,'@target@'=>$_tmp10));?>

    </div>

    <?php /*  Call merged included template "../../_partials/roundingSettings.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../_partials/roundingSettings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '155246082618819fa5bed07-71420947');
content_618819fa5f6884_30832556($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../../_partials/roundingSettings.tpl" */?>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2021-11-07 19:24:58
         compiled from "/var/www/html/modules/paypal/views/templates/admin/_partials/roundingSettings.tpl" */ ?>
<?php if ($_valid && !is_callable('content_618819fa5f6884_30832556')) {function content_618819fa5f6884_30832556($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['variant'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['variant']->value)===null||$tmp==='' ? 'normal' : $tmp), null, 0);?>

<ul>
  <li>
    <?php if ($_smarty_tpl->tpl_vars['variant']->value=='help') {?><p class='h4'><?php }?>
      <?php echo smartyTranslate(array('s'=>'Round mode: "Round up away from zero, when it is half way there (recommended) "','mod'=>'paypal'),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['variant']->value=='help') {?></p><?php }?>
  </li>
  <li>
    <?php if ($_smarty_tpl->tpl_vars['variant']->value=='help') {?><p class='h4'><?php }?>
      <?php echo smartyTranslate(array('s'=>'Round type: "Round on each item"','mod'=>'paypal'),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['variant']->value=='help') {?></p><?php }?>
  </li>
  <li>
    <?php if ($_smarty_tpl->tpl_vars['variant']->value=='help') {?><p class='h4'><?php }?>
      <?php echo smartyTranslate(array('s'=>'Number of decimals','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl);?>
: "2"
    <?php if ($_smarty_tpl->tpl_vars['variant']->value=='help') {?>
      <p>
      <button class="btn btn-default" data-show-rounding-alert>
        <?php echo smartyTranslate(array('s'=>'Check requirements','mod'=>'paypal'),$_smarty_tpl);?>

      </button>
      </p>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['variant']->value=='help') {?></p><?php }?>
  </li>
</ul>

<?php if ($_smarty_tpl->tpl_vars['variant']->value!='help') {?>
</br>
  <button class="btn btn-default" data-update-rounding-settings>
    <?php echo smartyTranslate(array('s'=>'Change rounding settings automatically','mod'=>'paypal'),$_smarty_tpl);?>

  </button>
<?php }?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2021-11-07 19:24:58
         compiled from "/var/www/html/modules/paypal/views/templates/admin/_partials/paypalBanner/installmentPopup.tpl" */ ?>
<?php if ($_valid && !is_callable('content_618819fa615293_60234582')) {function content_618819fa615293_60234582($_smarty_tpl) {?>

<style>
  [installment-popup] .modal-dialog {
    position: relative;
    top: 40%;
  }
</style>

<div installment-popup class="modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="pp__pt-2 pp__pr-4">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="h3 pp__flex pp__justify-content-center pp__my-5">
          <?php echo smartyTranslate(array('s'=>'Offer your customers payment in 4X','mod'=>'paypal'),$_smarty_tpl);?>

      </div>

      <div class="pp__flex pp__justify-content-center pp__mb-2">
        <?php echo smartyTranslate(array('s'=>'Now your customers can pay in 4 installments with PayPal!','mod'=>'paypal'),$_smarty_tpl);?>

      </div>

      <div class="pp__flex pp__justify-content-center pp__mb-2">
          <?php echo smartyTranslate(array('s'=>'Improve your conversion rate by showing 4x payment information to your customers.','mod'=>'paypal'),$_smarty_tpl);?>

      </div>

      <div class="pp__flex pp__justify-content-center pp__mb-5 pp__mt-4">
        <a
                class="btn btn-primary"
                href="<?php if (isset($_smarty_tpl->tpl_vars['installmentController']->value)) {?><?php echo $_smarty_tpl->tpl_vars['installmentController']->value;?>
<?php }?>"
        >
          <?php echo smartyTranslate(array('s'=>'Enable now','mod'=>'paypal'),$_smarty_tpl);?>

        </a>
      </div>
    </div>
  </div>
</div>

<script>
  window.addEventListener('load', function() {
      $('[installment-popup]').modal('show');
  });
</script>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2021-11-07 19:24:58
         compiled from "/var/www/html/modules/paypal/views/templates/admin/_partials/headerLogo.tpl" */ ?>
<?php if ($_valid && !is_callable('content_618819fa620848_61189817')) {function content_618819fa620848_61189817($_smarty_tpl) {?>

<div class="panel active-panel pp__flex pp__align-items-center">
	<div class="pp__pr-4">
		<img style="width: 135px" src="<?php echo addslashes($_smarty_tpl->tpl_vars['moduleDir']->value);?>
paypal/views/img/paypal.png">
	</div>
	<div class="pp__pl-5">
		<p>
			<?php echo smartyTranslate(array('s'=>'Activate the PayPal module to start selling to +300M PayPal customers around the globe','mod'=>'paypal'),$_smarty_tpl);?>
.
		</p>
		<?php if (isset($_smarty_tpl->tpl_vars['headerToolBar']->value)&&$_smarty_tpl->tpl_vars['headerToolBar']->value) {?>
        	<?php if (isset($_smarty_tpl->tpl_vars['methodType']->value)&&$_smarty_tpl->tpl_vars['methodType']->value=='EC') {?>
				<p><?php echo smartyTranslate(array('s'=>'Activate in three easy steps','mod'=>'paypal'),$_smarty_tpl);?>
: </p>
			<?php } else { ?>
				<p><?php echo smartyTranslate(array('s'=>'Activate in two easy steps','mod'=>'paypal'),$_smarty_tpl);?>
: </p>
        	<?php }?>

			<p>
				<ul>
					<li>
						<a href="#pp_config_account" data-pp-link-settings> <?php echo smartyTranslate(array('s'=>'Connect below your existing PayPal account or create a new one','mod'=>'paypal'),$_smarty_tpl);?>
.</a>
					</li>

					<?php if (isset($_smarty_tpl->tpl_vars['methodType']->value)&&$_smarty_tpl->tpl_vars['methodType']->value=='EC') {?>
						<li>
							<a href="#pp_config_payment" data-pp-link-settings> <?php echo smartyTranslate(array('s'=>'Adjust your Payment setting to either capture payments instantly (Sale), or after you confirm the order (Authorize)','mod'=>'paypal'),$_smarty_tpl);?>
.</a>
						</li>
					<?php }?>

					<li>
						<a href="#pp_config_environment" data-pp-link-settings> <?php echo smartyTranslate(array('s'=>'Make sure the module is set to Production mode','mod'=>'paypal'),$_smarty_tpl);?>
.</a>
					</li>
				</ul>
			</p>
			<p><?php echo smartyTranslate(array('s'=>'Voilà! Your store is ready to accept payments!','mod'=>'paypal'),$_smarty_tpl);?>
</p>
		<?php }?>
	</div>
</div>

<?php }} ?>
