<?php
/* Smarty version 3.1.39, created on 2021-11-15 13:04:48
  from '/var/www/html/themes/classic/templates/customer/address.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61924ce087a5d5_14344378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71855c1e8191590c1cf130e386d27e8a0d3d275d' => 
    array (
      0 => '/var/www/html/themes/classic/templates/customer/address.tpl',
      1 => 1636971297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61924ce087a5d5_14344378 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106137927461924ce086fce4_94106469', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207577175661924ce0876341_52934045', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_106137927461924ce086fce4_94106469 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_106137927461924ce086fce4_94106469',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['editing']->value) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update your address','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

  <?php } else { ?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New address','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

  <?php }
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_207577175661924ce0876341_52934045 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_207577175661924ce0876341_52934045',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="address-form">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('template'=>"customer/_partials/address-form.tpl",'ui'=>$_smarty_tpl->tpl_vars['address_form']->value),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'page_content'} */
}
