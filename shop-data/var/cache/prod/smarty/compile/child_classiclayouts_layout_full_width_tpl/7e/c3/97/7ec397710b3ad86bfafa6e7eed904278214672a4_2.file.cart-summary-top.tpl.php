<?php
/* Smarty version 3.1.39, created on 2021-11-15 00:12:41
  from '/var/www/html/themes/classic/templates/checkout/_partials/cart-summary-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619197e9d1a858_08924799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ec397710b3ad86bfafa6e7eed904278214672a4' => 
    array (
      0 => '/var/www/html/themes/classic/templates/checkout/_partials/cart-summary-top.tpl',
      1 => 1636758691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619197e9d1a858_08924799 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="cart-summary-top js-cart-summary-top">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCheckoutSummaryTop'),$_smarty_tpl ) );?>

</div>
<?php }
}
