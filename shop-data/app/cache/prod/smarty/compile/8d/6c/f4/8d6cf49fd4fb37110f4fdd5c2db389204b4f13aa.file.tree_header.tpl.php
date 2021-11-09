<?php /* Smarty version Smarty-3.1.19, created on 2021-11-07 19:33:39
         compiled from "/var/www/html/admin0009e8qap/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156793383461881c03f04770-96217192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d6cf49fd4fb37110f4fdd5c2db389204b4f13aa' => 
    array (
      0 => '/var/www/html/admin0009e8qap/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1635607016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156793383461881c03f04770-96217192',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61881c03f0c7c6_05617952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61881c03f0c7c6_05617952')) {function content_61881c03f0c7c6_05617952($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div>
<?php }} ?>
