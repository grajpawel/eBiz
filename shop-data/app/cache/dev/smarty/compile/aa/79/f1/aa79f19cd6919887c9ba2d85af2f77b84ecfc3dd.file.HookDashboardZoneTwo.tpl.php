<?php /* Smarty version Smarty-3.1.19, created on 2021-11-09 23:18:04
         compiled from "/var/www/html/modules/ps_metrics//views/templates/hook/HookDashboardZoneTwo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:998078361618af39c59b8f7-54320567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa79f19cd6919887c9ba2d85af2f77b84ecfc3dd' => 
    array (
      0 => '/var/www/html/modules/ps_metrics//views/templates/hook/HookDashboardZoneTwo.tpl',
      1 => 1636496037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '998078361618af39c59b8f7-54320567',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pathMetricsApp' => 0,
    'pathVendorMetrics' => 0,
    'pathMetricsAssets' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_618af39c5a8e35_51624045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_618af39c5a8e35_51624045')) {function content_618af39c5a8e35_51624045($_smarty_tpl) {?>
<link href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['pathMetricsApp']->value,'htmlall','UTF-8');?>
" rel=preload as=script>
<link href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['pathVendorMetrics']->value,'htmlall','UTF-8');?>
" rel=preload as=script>

<div id="app"></div>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['pathMetricsAssets']->value,'htmlall','UTF-8');?>
">
<script type="module" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['pathMetricsApp']->value,'htmlall','UTF-8');?>
"></script>
<script type="module" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['pathVendorMetrics']->value,'htmlall','UTF-8');?>
"></script>
<?php }} ?>
