<?php /* Smarty version Smarty-3.1.19, created on 2021-11-08 22:46:11
         compiled from "modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88091465561899aa38fb1d3-93169346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b877d9b5dafd25bc3cbe155657b4bda72ab9d6f4' => 
    array (
      0 => 'modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl',
      1 => 1636404471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88091465561899aa38fb1d3-93169346',
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
  'unifunc' => 'content_61899aa3903914_98521430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61899aa3903914_98521430')) {function content_61899aa3903914_98521430($_smarty_tpl) {?>

<?php if ((!empty($_smarty_tpl->tpl_vars['jsCode']->value))) {?>
    
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var MBG = GoogleAnalyticEnhancedECommerce;
            MBG.setCurrency('<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['isoCode']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
');
            <?php echo $_smarty_tpl->tpl_vars['jsCode']->value;?>

        });
    </script>
    
<?php }?>
<?php }} ?>
