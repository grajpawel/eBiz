<?php /* Smarty version Smarty-3.1.19, created on 2021-11-08 22:46:11
         compiled from "module:paypal/views/templates/front/prefetch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171240958661899aa386e114-11317583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fb5b414db934f3cbce1f81a5328eb449f2525ce' => 
    array (
      0 => 'module:paypal/views/templates/front/prefetch.tpl',
      1 => 1636309496,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '171240958661899aa386e114-11317583',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resources' => 0,
    'resource' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61899aa387c341_55397779',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61899aa387c341_55397779')) {function content_61899aa387c341_55397779($_smarty_tpl) {?><!-- begin /var/www/html/modules/paypal/views/templates/front/prefetch.tpl -->

<?php if (isset($_smarty_tpl->tpl_vars['resources']->value)&&is_array($_smarty_tpl->tpl_vars['resources']->value)&&empty($_smarty_tpl->tpl_vars['resources']->value)==false) {?>
    <?php  $_smarty_tpl->tpl_vars['resource'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resource']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->key => $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->_loop = true;
?>
      <link href="<?php echo htmlspecialchars(addslashes($_smarty_tpl->tpl_vars['resource']->value), ENT_QUOTES, 'UTF-8');?>
" rel="prefetch" as="script">
    <?php } ?>
<?php }?>

<!-- end /var/www/html/modules/paypal/views/templates/front/prefetch.tpl --><?php }} ?>
