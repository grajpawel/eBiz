<?php /* Smarty version Smarty-3.1.19, created on 2021-11-08 22:35:10
         compiled from "/var/www/html/modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5415853976189980e469e39-17480302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b877d9b5dafd25bc3cbe155657b4bda72ab9d6f4' => 
    array (
      0 => '/var/www/html/modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl',
      1 => 1636404471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5415853976189980e469e39-17480302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jsCode' => 0,
    'isoCode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6189980e471a73_65280339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6189980e471a73_65280339')) {function content_6189980e471a73_65280339($_smarty_tpl) {?>

<?php if ((!empty($_smarty_tpl->tpl_vars['jsCode']->value))) {?>
    
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var MBG = GoogleAnalyticEnhancedECommerce;
            MBG.setCurrency('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['isoCode']->value,'htmlall','UTF-8');?>
');
            <?php echo $_smarty_tpl->tpl_vars['jsCode']->value;?>

        });
    </script>
    
<?php }?>
<?php }} ?>
