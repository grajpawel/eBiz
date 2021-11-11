<?php /* Smarty version Smarty-3.1.19, created on 2021-11-09 23:18:04
         compiled from "/var/www/html/admin0009e8qap/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1528921192618af39c75ca36-69223920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37aaa79505b351869a5107ba9b8cd5bc1ea6d90f' => 
    array (
      0 => '/var/www/html/admin0009e8qap/themes/default/template/content.tpl',
      1 => 1636496035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1528921192618af39c75ca36-69223920',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_618af39c763409_52860793',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_618af39c763409_52860793')) {function content_618af39c763409_52860793($_smarty_tpl) {?>
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
