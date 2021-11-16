<?php
/* Smarty version 3.1.39, created on 2021-11-15 12:58:46
  from '/var/www/html/modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61924b762d4fb1_74394135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f7201dbda9de06003cb0fd10023f8a24112d0b' => 
    array (
      0 => '/var/www/html/modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl',
      1 => 1636971296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61924b762d4fb1_74394135 (Smarty_Internal_Template $_smarty_tpl) {
if ((!empty($_smarty_tpl->tpl_vars['jsCode']->value))) {?>
    
    <?php echo '<script'; ?>
 type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var MBG = GoogleAnalyticEnhancedECommerce;
            MBG.setCurrency('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['isoCode']->value,'htmlall','UTF-8' ));?>
');
            <?php echo $_smarty_tpl->tpl_vars['jsCode']->value;?>

        });
    <?php echo '</script'; ?>
>
    
<?php }
}
}
