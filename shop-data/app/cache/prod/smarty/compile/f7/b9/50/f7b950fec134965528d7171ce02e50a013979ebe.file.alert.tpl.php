<?php /* Smarty version Smarty-3.1.19, created on 2021-11-07 19:24:58
         compiled from "/var/www/html/modules/paypal/views/templates/admin/_partials/alert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1591382188618819fa4d77a0-57973838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7b950fec134965528d7171ce02e50a013979ebe' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/alert.tpl',
      1 => 1636309496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1591382188618819fa4d77a0-57973838',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'widthByContent' => 0,
    'class' => 0,
    'btnClose' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_618819fa4e5733_88402531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_618819fa4e5733_88402531')) {function content_618819fa4e5733_88402531($_smarty_tpl) {?>

<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 <?php if (isset($_smarty_tpl->tpl_vars['widthByContent']->value)&&$_smarty_tpl->tpl_vars['widthByContent']->value) {?>d-inline-block<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['class']->value)&&$_smarty_tpl->tpl_vars['class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 <?php }?>">
    <?php if (isset($_smarty_tpl->tpl_vars['btnClose']->value)&&$_smarty_tpl->tpl_vars['btnClose']->value) {?>
        <button type="button" class="close" data-dismiss="alert">×</button>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

</div>
<?php }} ?>
