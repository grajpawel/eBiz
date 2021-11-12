<?php
/* Smarty version 3.1.39, created on 2021-11-12 20:27:56
  from '/var/www/html/admin0009e8qap/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618ec03c43d506_62776885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd353581ba4903610fb43d895dc8d18b981a6d72e' => 
    array (
      0 => '/var/www/html/admin0009e8qap/themes/default/template/content.tpl',
      1 => 1636744556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618ec03c43d506_62776885 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
