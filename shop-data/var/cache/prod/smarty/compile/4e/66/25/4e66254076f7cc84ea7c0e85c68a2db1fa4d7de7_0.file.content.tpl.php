<?php
/* Smarty version 3.1.39, created on 2021-11-12 20:28:48
  from '/var/www/html/admin0009e8qap/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618ec070a83fe4_50322923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e66254076f7cc84ea7c0e85c68a2db1fa4d7de7' => 
    array (
      0 => '/var/www/html/admin0009e8qap/themes/new-theme/template/content.tpl',
      1 => 1636744557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618ec070a83fe4_50322923 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}