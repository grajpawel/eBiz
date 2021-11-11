<?php /* Smarty version Smarty-3.1.19, created on 2021-11-11 11:55:13
         compiled from "/var/www/html/themes/classic/modules/ps_emailalerts/views/templates/hook/my-account-footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:812694306618cf6910d3132-82701783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea95af2ac4751fa4085faa99ac4a2ca8a3c74168' => 
    array (
      0 => '/var/www/html/themes/classic/modules/ps_emailalerts/views/templates/hook/my-account-footer.tpl',
      1 => 1636627111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '812694306618cf6910d3132-82701783',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_618cf6910e2e09_69580825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_618cf6910e2e09_69580825')) {function content_618cf6910e2e09_69580825($_smarty_tpl) {?>

<li>
  <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'module','name'=>'ps_emailalerts','controller'=>'account'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
">
    <?php echo smartyTranslate(array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

  </a>
</li>
<?php }} ?>
