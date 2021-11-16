<?php
/* Smarty version 3.1.39, created on 2021-11-15 13:03:22
  from 'module:psemailalertsviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61924c8a5f1fe4_96247599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a70f1148674812fc2b12ef98cae998f807e5133a' => 
    array (
      0 => 'module:psemailalertsviewstemplat',
      1 => 1636971296,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_emailalerts/views/templates/front/mailalerts-account-line.tpl' => 1,
  ),
),false)) {
function content_61924c8a5f1fe4_96247599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189804924861924c8a5e5586_80945505', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45066493761924c8a5e8209_92427007', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_189804924861924c8a5e5586_80945505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_189804924861924c8a5e5586_80945505',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My alerts','d'=>'Modules.Emailalerts.Shop'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_45066493761924c8a5e8209_92427007 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_45066493761924c8a5e8209_92427007',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['mailAlerts']->value) {?>
    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mailAlerts']->value, 'mailAlert');
$_smarty_tpl->tpl_vars['mailAlert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mailAlert']->value) {
$_smarty_tpl->tpl_vars['mailAlert']->do_else = false;
?>
        <li><?php $_smarty_tpl->_subTemplateRender('module:ps_emailalerts/views/templates/front/mailalerts-account-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mailAlert'=>$_smarty_tpl->tpl_vars['mailAlert']->value), 0, true);
?></li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  <?php } else { ?>
    <p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No mail alerts yet.','d'=>'Modules.Emailalerts.Shop'),$_smarty_tpl ) );?>
</p>
  <?php }
}
}
/* {/block 'page_content'} */
}
