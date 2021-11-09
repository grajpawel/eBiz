<?php /* Smarty version Smarty-3.1.19, created on 2021-11-08 21:56:04
         compiled from "modules/blockreassurance/views/templates/hook/displayBlockProduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154860362461898ee42f5052-96176196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6079f0076f39292519ebb534795c5c0b49829c21' => 
    array (
      0 => 'modules/blockreassurance/views/templates/hook/displayBlockProduct.tpl',
      1 => 1636400380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154860362461898ee42f5052-96176196',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blocks' => 0,
    'block' => 0,
    'key' => 0,
    'LINK_TYPE_NONE' => 0,
    'textColor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61898ee43199b2_12151990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61898ee43199b2_12151990')) {function content_61898ee43199b2_12151990($_smarty_tpl) {?>

<div class="blockreassurance_product">
    <?php  $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['block']->value] = new Smarty_Variable; $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['block']->value]->_loop = false;
 $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['key']->value] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['blocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['block']->value]->key => $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['block']->value]->value) {
$_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['block']->value]->_loop = true;
 $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['key']->value]->value = $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['block']->value]->key;
?>
        <div<?php if ($_smarty_tpl->tpl_vars['block']->value['type_link']!==$_smarty_tpl->tpl_vars['LINK_TYPE_NONE']->value&&!empty($_smarty_tpl->tpl_vars['block']->value['link'])) {?> style="cursor:pointer;" onclick="window.open('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['link'], ENT_QUOTES, 'UTF-8');?>
')"<?php }?>>
            <span class="item-product">
                <?php if ($_smarty_tpl->tpl_vars['block']->value['icon']!='undefined') {?>
                    <?php if ($_smarty_tpl->tpl_vars['block']->value['icon']) {?>
                    <img class="svg invisible" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['icon'], ENT_QUOTES, 'UTF-8');?>
">
                    <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['custom_icon']) {?>
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['custom_icon'], ENT_QUOTES, 'UTF-8');?>
">
                    <?php }?>
                <?php }?>&nbsp;
            </span>
            <?php if (empty($_smarty_tpl->tpl_vars['block']->value['description'])) {?>
              <p class="block-title" style="color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['textColor']->value, ENT_QUOTES, 'UTF-8');?>
;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['title'], ENT_QUOTES, 'UTF-8');?>
</p>
            <?php } else { ?>
              <span class="block-title" style="color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['textColor']->value, ENT_QUOTES, 'UTF-8');?>
;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
              <p style="color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['textColor']->value, ENT_QUOTES, 'UTF-8');?>
;"><?php echo $_smarty_tpl->tpl_vars['block']->value['description'];?>
</p>
            <?php }?>
        </div>
    <?php } ?>
    <div class="clearfix"></div>
</div>
<?php }} ?>
