<?php /* Smarty version Smarty-3.1.19, created on 2021-11-07 19:24:58
         compiled from "/var/www/html/modules/paypal/views/templates/admin/_partials/statusBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:264640047618819fa5958e3-37262408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed5333746bef3732d049a46b90c2a92edc107841' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/statusBlock.tpl',
      1 => 1636309496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '264640047618819fa5958e3-37262408',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'merchantCountry' => 0,
    'link' => 0,
    'sslActivated' => 0,
    'tlsVersion' => 0,
    'accountConfigured' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_618819fa5b8737_59846952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_618819fa5b8737_59846952')) {function content_618819fa5b8737_59846952($_smarty_tpl) {?>

<div>
    <p>
        <?php echo smartyTranslate(array('s'=>'Merchant Country:','mod'=>'paypal'),$_smarty_tpl);?>
 <b><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['merchantCountry']->value,'htmlall','UTF-8');?>
</b>
    </p>

    <p>
      <?php ob_start();?><?php echo smartyTranslate(array('s'=>'To  modify country: [a @href1@]International > Localization[/a]','mod'=>'paypal'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminLocalization',true);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo 'target="blank"';?>
<?php $_tmp3=ob_get_clean();?><?php echo smarty_modifier_paypalreplace($_tmp1,array('@href1@'=>$_tmp2,'@target@'=>$_tmp3));?>

    </p>

    <p>
        <span class="btn btn-default" id="btn-check-requirements"><?php echo smartyTranslate(array('s'=>'Check requirements','mod'=>'paypal'),$_smarty_tpl);?>
</span>
    </p>

    <ul class="list-unstyled">
        <li>
            <?php if (isset($_smarty_tpl->tpl_vars['sslActivated']->value)&&$_smarty_tpl->tpl_vars['sslActivated']->value) {?>
                <i class="icon-check text-success"></i>
                <?php echo smartyTranslate(array('s'=>'SSL enabled.','mod'=>'paypal'),$_smarty_tpl);?>

            <?php } else { ?>
                <i class="icon-remove text-danger"></i>
                <?php echo smartyTranslate(array('s'=>'SSL should be enabled on your website.','mod'=>'paypal'),$_smarty_tpl);?>

            <?php }?>
        </li>

        <li>
            <?php if (isset($_smarty_tpl->tpl_vars['tlsVersion']->value)&&$_smarty_tpl->tpl_vars['tlsVersion']->value['status']) {?>
                <i class="icon-check text-success"></i>
                <?php echo smartyTranslate(array('s'=>'The PHP cURL extension must be enabled on your server. Please contact your hosting provider for more information.','mod'=>'paypal'),$_smarty_tpl);?>

            <?php } elseif (isset($_smarty_tpl->tpl_vars['tlsVersion']->value)&&$_smarty_tpl->tpl_vars['tlsVersion']->value['status']==false) {?>
                <i class="icon-remove text-danger"></i>
                <?php echo smartyTranslate(array('s'=>'The PHP cURL extension must be enabled on your server. Please contact your hosting provider for more information.','mod'=>'paypal'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['tlsVersion']->value['error_message'];?>

            <?php }?>

        </li>

        <li>
            <?php if (isset($_smarty_tpl->tpl_vars['accountConfigured']->value)&&$_smarty_tpl->tpl_vars['accountConfigured']->value) {?>
                <i class="icon-check text-success"></i>
            <?php } else { ?>
                <i class="icon-remove text-danger"></i>
            <?php }?>
            <?php echo smartyTranslate(array('s'=>'You must connect your PayPal account','mod'=>'paypal'),$_smarty_tpl);?>

        </li>
    </ul>
</div>



<?php }} ?>
