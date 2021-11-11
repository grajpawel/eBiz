<?php /* Smarty version Smarty-3.1.19, created on 2021-11-09 23:18:04
         compiled from "/var/www/html/admin0009e8qap/themes/default/template/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1265184847618af39c99e031-04637865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '530c5553e9dd9f91483db743e29c13e38de2d7bb' => 
    array (
      0 => '/var/www/html/admin0009e8qap/themes/default/template/error.tpl',
      1 => 1636496035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1265184847618af39c99e031-04637865',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'php_errors' => 0,
    'php_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_618af39c9b3a72_08176440',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_618af39c9b3a72_08176440')) {function content_618af39c9b3a72_08176440($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['php_errors']->value)&&count($_smarty_tpl->tpl_vars['php_errors']->value)) {?>
<div class="bootstrap">
	<div id="error-modal" class="modal fade">
		<div class="modal-dialog">
			<div class="alert alert-danger clearfix">
				<?php  $_smarty_tpl->tpl_vars['php_error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['php_error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['php_errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['php_error']->key => $_smarty_tpl->tpl_vars['php_error']->value) {
$_smarty_tpl->tpl_vars['php_error']->_loop = true;
?>
					<?php echo smartyTranslate(array('s'=>'%1$s on line %2$s in file %3$s','sprintf'=>array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['php_error']->value['type']),$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['php_error']->value['errline']),$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['php_error']->value['errfile']))),$_smarty_tpl);?>
<br />
					[<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['php_error']->value['errno']);?>
] <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['php_error']->value['errstr']);?>
<br /><br />
				<?php } ?>
				<button type="button" class="btn btn-default pull-right" data-dismiss="modal"><i class="icon-remove"></i> Close</button>
			</div>
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
