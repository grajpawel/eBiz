<?php /* Smarty version Smarty-3.1.19, created on 2021-11-08 22:23:01
         compiled from "/var/www/html/admin0009e8qap/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76192201661899535594a72-35112065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37aaa79505b351869a5107ba9b8cd5bc1ea6d90f' => 
    array (
      0 => '/var/www/html/admin0009e8qap/themes/default/template/content.tpl',
      1 => 1635607016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76192201661899535594a72-35112065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_618995355990c5_00244045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_618995355990c5_00244045')) {function content_618995355990c5_00244045($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
