<?php /* Smarty version Smarty-3.1.19, created on 2021-11-09 23:26:19
         compiled from "/var/www/html/modules/ps_metrics/views/templates/admin/metricsSettings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1777786461618af58bf1bea5-20660386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b40fdc68d0a34f741adf8f760334602ba50f3086' => 
    array (
      0 => '/var/www/html/modules/ps_metrics/views/templates/admin/metricsSettings.tpl',
      1 => 1636496037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1777786461618af58bf1bea5-20660386',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pathSettingsVendor' => 0,
    'pathSettingsApp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_618af58bf2aaa0_68741882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_618af58bf2aaa0_68741882')) {function content_618af58bf2aaa0_68741882($_smarty_tpl) {?>

<link href="https://js.chargebee.com/v2/chargebee.js" rel=preload as=script>
<link href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['pathSettingsVendor']->value,'htmlall','UTF-8');?>
" rel=preload as=script>
<link href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['pathSettingsApp']->value,'htmlall','UTF-8');?>
" rel=preload as=script>

<div id="settingsApp"></div>
<script src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['pathSettingsVendor']->value,'htmlall','UTF-8');?>
"></script>
<script src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['pathSettingsApp']->value,'htmlall','UTF-8');?>
"></script>
<script src="https://js.chargebee.com/v2/chargebee.js"></script>

<style>
  /** Hide native multistore module activation panel, because of visual regressions on non-bootstrap content */
  #content.nobootstrap div.bootstrap.panel {
    display: none;
  }
</style>
<?php }} ?>
