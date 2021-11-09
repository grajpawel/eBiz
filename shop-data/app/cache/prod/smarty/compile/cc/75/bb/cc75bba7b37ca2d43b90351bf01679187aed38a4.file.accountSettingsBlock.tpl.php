<?php /* Smarty version Smarty-3.1.19, created on 2021-11-07 19:24:58
         compiled from "/var/www/html/modules/paypal/views/templates/admin/_partials/accountSettingsBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1585813165618819fa451e58-50938017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc75bba7b37ca2d43b90351bf01679187aed38a4' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/accountSettingsBlock.tpl',
      1 => 1636309496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1585813165618819fa451e58-50938017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'method' => 0,
    'country_iso' => 0,
    'accountConfigured' => 0,
    'idShop' => 0,
    'mode' => 0,
    'urlOnboarding' => 0,
    'paypalOnboardingLib' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_618819fa4b54f7_62166991',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_618819fa4b54f7_62166991')) {function content_618819fa4b54f7_62166991($_smarty_tpl) {?>

<div>

    <?php if (isset($_smarty_tpl->tpl_vars['method']->value)&&$_smarty_tpl->tpl_vars['method']->value=='PPP'||($_smarty_tpl->tpl_vars['method']->value=='EC'&&(isset($_smarty_tpl->tpl_vars['country_iso']->value)&&in_array($_smarty_tpl->tpl_vars['country_iso']->value,array('IN','JP'))==false))) {?>
        <p class="h3">
            <?php if (isset($_smarty_tpl->tpl_vars['accountConfigured']->value)&&$_smarty_tpl->tpl_vars['accountConfigured']->value) {?><i class="icon-check text-success"></i><?php }?>
            <?php echo smartyTranslate(array('s'=>'PayPal Account','mod'=>'paypal'),$_smarty_tpl);?>

            <?php if (isset($_smarty_tpl->tpl_vars['accountConfigured']->value)&&$_smarty_tpl->tpl_vars['accountConfigured']->value) {?><?php echo smartyTranslate(array('s'=>'connected','mod'=>'paypal'),$_smarty_tpl);?>
<?php }?>
        </p>
        <?php if (isset($_smarty_tpl->tpl_vars['accountConfigured']->value)==false||$_smarty_tpl->tpl_vars['accountConfigured']->value==false) {?>
          <p>
              <?php echo smartyTranslate(array('s'=>'In order to activate the module, you must connect your existing PayPal account or create a new one.','mod'=>'paypal'),$_smarty_tpl);?>

          </p>
        <?php }?>

    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['accountConfigured']->value)&&$_smarty_tpl->tpl_vars['accountConfigured']->value) {?>

        <?php if (isset($_smarty_tpl->tpl_vars['method']->value)&&$_smarty_tpl->tpl_vars['method']->value=='MB') {?>
            <?php echo $_smarty_tpl->getSubTemplate ('./mbCredentialsForm.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['country_iso']->value)&&in_array($_smarty_tpl->tpl_vars['country_iso']->value,array('IN','JP'))) {?>
          <div class="modal-body">
            <h4><?php echo smartyTranslate(array('s'=>'API Credentials','mod'=>'paypal'),$_smarty_tpl);?>
</h4>
            <p><?php echo smartyTranslate(array('s'=>'In order to accept PayPal payments, please fill in your API REST credentials.','mod'=>'paypal'),$_smarty_tpl);?>
</p>
            <ul>
              <li><?php echo smartyTranslate(array('s'=>'Access','mod'=>'paypal'),$_smarty_tpl);?>
 <a target="_blank" href="https://developer.paypal.com/developer/applications/"><?php echo smartyTranslate(array('s'=>'https://developer.paypal.com/developer/applications/','mod'=>'paypal'),$_smarty_tpl);?>
</a></li>
              <li><?php echo smartyTranslate(array('s'=>'Log in or Create a business account','mod'=>'paypal'),$_smarty_tpl);?>
</li>
              <li><?php echo smartyTranslate(array('s'=>'Create a « REST API apps »','mod'=>'paypal'),$_smarty_tpl);?>
</li>
              <li><?php echo smartyTranslate(array('s'=>'Click « Show » below « Secret: »','mod'=>'paypal'),$_smarty_tpl);?>
</li>
              <li><?php echo smartyTranslate(array('s'=>'Copy/paste your « Client ID » and « Secret » below for each environment','mod'=>'paypal'),$_smarty_tpl);?>
</li>
            </ul>
            <hr/>

            <input type="hidden" name="id_shop" value="<?php if (isset($_smarty_tpl->tpl_vars['idShop']->value)) {?><?php echo $_smarty_tpl->tpl_vars['idShop']->value;?>
<?php }?>"/>
            <h4><?php echo smartyTranslate(array('s'=>'API Credentials for','mod'=>'paypal'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
</h4>
              <?php echo $_smarty_tpl->getSubTemplate ('./ecCredentialFields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


          </div>
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['method']->value)&&$_smarty_tpl->tpl_vars['method']->value=='PPP'||($_smarty_tpl->tpl_vars['method']->value=='EC'&&(isset($_smarty_tpl->tpl_vars['country_iso']->value)&&in_array($_smarty_tpl->tpl_vars['country_iso']->value,array('IN','JP'))==false))) {?>
            <span class="btn btn-default pp__mt-5" id="logoutAccount">
              <i class="icon-signout"></i>
				      <?php echo smartyTranslate(array('s'=>'Logout','mod'=>'paypal'),$_smarty_tpl);?>

            </span>
        <?php }?>
    <?php } else { ?>
        <?php if (isset($_smarty_tpl->tpl_vars['method']->value)&&$_smarty_tpl->tpl_vars['method']->value=='MB') {?>
            <?php echo $_smarty_tpl->getSubTemplate ('./mbCredentialsForm.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php } elseif (isset($_smarty_tpl->tpl_vars['country_iso']->value)&&in_array($_smarty_tpl->tpl_vars['country_iso']->value,array('IN','JP'))) {?>
          <div class="modal-body">
            <h4><?php echo smartyTranslate(array('s'=>'API Credentials','mod'=>'paypal'),$_smarty_tpl);?>
</h4>
            <p><?php echo smartyTranslate(array('s'=>'In order to accept PayPal payments, please fill in your API REST credentials.','mod'=>'paypal'),$_smarty_tpl);?>
</p>
            <ul>
              <li><?php echo smartyTranslate(array('s'=>'Access','mod'=>'paypal'),$_smarty_tpl);?>
 <a target="_blank" href="https://developer.paypal.com/developer/applications/"><?php echo smartyTranslate(array('s'=>'https://developer.paypal.com/developer/applications/','mod'=>'paypal'),$_smarty_tpl);?>
</a></li>
              <li><?php echo smartyTranslate(array('s'=>'Log in or Create a business account','mod'=>'paypal'),$_smarty_tpl);?>
</li>
              <li><?php echo smartyTranslate(array('s'=>'Create a « REST API apps »','mod'=>'paypal'),$_smarty_tpl);?>
</li>
              <li><?php echo smartyTranslate(array('s'=>'Click « Show » below « Secret: »','mod'=>'paypal'),$_smarty_tpl);?>
</li>
              <li><?php echo smartyTranslate(array('s'=>'Copy/paste your « Client ID » and « Secret » below for each environment','mod'=>'paypal'),$_smarty_tpl);?>
</li>
            </ul>
            <hr/>

            <input type="hidden" name="id_shop" value="<?php if (isset($_smarty_tpl->tpl_vars['idShop']->value)) {?><?php echo $_smarty_tpl->tpl_vars['idShop']->value;?>
<?php }?>"/>
            <h4><?php echo smartyTranslate(array('s'=>'API Credentials for','mod'=>'paypal'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
</h4>
              <?php echo $_smarty_tpl->getSubTemplate ('./ecCredentialFields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


          </div>
        <?php } elseif (isset($_smarty_tpl->tpl_vars['method']->value)&&in_array($_smarty_tpl->tpl_vars['method']->value,array('EC','PPP'))) {?>
          <a href="<?php echo addslashes($_smarty_tpl->tpl_vars['urlOnboarding']->value);?>
"
            target="_blank"
            data-paypal-button
            data-paypal-onboard-complete="onboardCallback"
            class="btn btn-default spinner-button"
          >
            <i class="icon-signin"></i>
            <div class="spinner pp__mr-1"></div>
            <?php echo smartyTranslate(array('s'=>'Connect or create PayPal account','mod'=>'paypal'),$_smarty_tpl);?>

          </a>

          <script src="<?php echo addslashes($_smarty_tpl->tpl_vars['paypalOnboardingLib']->value);?>
"></script>
        <?php }?>

    <?php }?>
</div>

<?php }} ?>
