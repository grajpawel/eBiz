<?php /* Smarty version Smarty-3.1.19, created on 2021-11-08 22:35:04
         compiled from "module:paypal/views/templates/front/prefetch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15128121016189980805db20-79052579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '15128121016189980805db20-79052579',
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
  'unifunc' => 'content_6189980806dd73_51036757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6189980806dd73_51036757')) {function content_6189980806dd73_51036757($_smarty_tpl) {?>

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

<?php }} ?>
