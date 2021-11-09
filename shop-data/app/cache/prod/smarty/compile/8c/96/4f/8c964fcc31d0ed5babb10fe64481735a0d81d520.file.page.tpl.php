<?php /* Smarty version Smarty-3.1.19, created on 2021-11-07 20:09:17
         compiled from "/var/www/html/modules/ps_themecusto/views/templates/admin/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12533348516188245d0b6770-92291535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c964fcc31d0ed5babb10fe64481735a0d81d520' => 
    array (
      0 => '/var/www/html/modules/ps_themecusto/views/templates/admin/page.tpl',
      1 => 1636311990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12533348516188245d0b6770-92291535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'enable' => 0,
    'moduleName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6188245d0c18e1_03019763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6188245d0c18e1_03019763')) {function content_6188245d0c18e1_03019763($_smarty_tpl) {?>

<div class="content-div">
    <div class="grid">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php if ($_smarty_tpl->tpl_vars['enable']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("./controllers/".((string)$_smarty_tpl->tpl_vars['configure_type']->value)."/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php } else { ?>
                <div class="panel col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4><?php echo smartyTranslate(array('s'=>'The module %s has been disabled','sprintf'=>$_smarty_tpl->tpl_vars['moduleName']->value,'mod'=>'ps_themecusto'),$_smarty_tpl);?>
</h4>
                </div>
            <?php }?>
        </div>
    </div>
</div>
<?php }} ?>
