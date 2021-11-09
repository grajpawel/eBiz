<?php /* Smarty version Smarty-3.1.19, created on 2021-11-07 20:09:17
         compiled from "/var/www/html/modules/ps_themecusto/views/templates/admin/controllers/advanced/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2178807246188245d0c3bd0-63907879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84f7a923e7688e69e9a70d256b74cb2a86071f48' => 
    array (
      0 => '/var/www/html/modules/ps_themecusto/views/templates/admin/controllers/advanced/index.tpl',
      1 => 1636311990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2178807246188245d0c3bd0-63907879',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isPsReady' => 0,
    'images' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6188245d0ebac0_37880897',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6188245d0ebac0_37880897')) {function content_6188245d0ebac0_37880897($_smarty_tpl) {?>

<div id="psthemecusto">
    <div class="panel col-lg-12">
        <div class="panel-heading">
            <?php echo smartyTranslate(array('s'=>'Advanced Customization','mod'=>'ps_themecusto'),$_smarty_tpl);?>

        </div>
        <div class="row">
            <div class="col-ld-12">
                <p><?php echo smartyTranslate(array('s'=>'You can edit your theme sheet by using the Parent/Child theme feature','mod'=>'ps_themecusto'),$_smarty_tpl);?>
:</p>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['isPsReady']->value) {?>
            <div class="alert alert-warning" role="alert">
                <b><?php echo smartyTranslate(array('s'=>'Advanced use only.','mod'=>'ps_themecusto'),$_smarty_tpl);?>
</b>
                <p class="alert-text">
                    <?php echo smartyTranslate(array('s'=>'Support team might not be able to assist you on issues created by your own child theme.','mod'=>'ps_themecusto'),$_smarty_tpl);?>

                </p>
            </div>
            <?php }?>
            <div class="col-ld-12 steps">
                <div class="col-lg-3">
                    <div class="col-lg-12 center-img">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
download.png"/>
                    </div>
                    <b>1 - <?php echo smartyTranslate(array('s'=>'Download your current theme','mod'=>'ps_themecusto'),$_smarty_tpl);?>
</b>
                    <div class="col-lg-12">
                        <p><?php echo smartyTranslate(array('s'=>'You picked a theme but still want to bring some specific adjustments? Get a child theme, it will allow you to keep the parts you want and customize the others!','mod'=>'ps_themecusto'),$_smarty_tpl);?>
</p>
                    </div>
                </div>
                <div class="col-lg-3 col-lg-push-1">
                    <div class="col-lg-12 center-img">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
edit.png"/>
                    </div>
                    <b>2 - <?php echo smartyTranslate(array('s'=>'Edit your child theme','mod'=>'ps_themecusto'),$_smarty_tpl);?>
</b>
                    <div class="col-lg-12">
                        <p><?php echo smartyTranslate(array('s'=>'Once the child theme created, next step is simple: apply the changes you want within the desired files, it will handle the customization part while keeping the parent theme’s look and functionality.','mod'=>'ps_themecusto'),$_smarty_tpl);?>
</p>
                    </div>
                </div>
                <div class="col-lg-3 col-lg-push-2">
                    <div class="col-lg-12 center-img">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
reupload.png"/>
                    </div>
                    <b>3 - <?php echo smartyTranslate(array('s'=>'Upload your child theme','mod'=>'ps_themecusto'),$_smarty_tpl);?>
</b>
                    <div class="col-lg-12">
                        <p><?php echo smartyTranslate(array('s'=>'As you only bring modification to the child theme, you can upgrade the parent theme easily, without losing your customization.','mod'=>'ps_themecusto'),$_smarty_tpl);?>
</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-buttons">
            <div class="col-lg-3">
                <div class="alert alert-danger download_child_theme_error" role="alert">
                    <b><?php echo smartyTranslate(array('s'=>'An error occurred','mod'=>'ps_themecusto'),$_smarty_tpl);?>
</b>
                    <p class="alert-text"><?php echo smartyTranslate(array('s'=>'Please check that you have the rights to write to the folders /app/cache/ and /themes/','mod'=>'ps_themecusto'),$_smarty_tpl);?>
</p>
                </div>
                <div class="btn btn-primary btn-lg btn-block" rel="noopener" id="download_child_theme">
                    <?php echo smartyTranslate(array('s'=>'Download theme','mod'=>'ps_themecusto'),$_smarty_tpl);?>

                </div>
                <div class="btn btn-primary btn-lg btn-block js-loader" rel="noopener" >
                    <?php echo smartyTranslate(array('s'=>'Downloading','mod'=>'ps_themecusto'),$_smarty_tpl);?>
<div class="loader"></div>
                </div>
            </div>
            <div class="col-lg-3 col-lg-push-1">
                <a href="https://devdocs.prestashop.com/1.7/themes/reference/template_inheritance/parent_child_feature/" class="link-child btn btn-outline-secondary btn-lg btn-block" rel="noopener" target="_blank"><?php echo smartyTranslate(array('s'=>'How to use parents/child themes','mod'=>'ps_themecusto'),$_smarty_tpl);?>
 <i class="icon-external-link"></i></a>
            </div>
            <div class="col-lg-3 col-lg-push-2">
                <a href="#" class="btn btn-primary btn-lg btn-block" rel="noopener" data-toggle="modal" data-target="#upload-child-modal" ><?php echo smartyTranslate(array('s'=>'Upload child theme','mod'=>'ps_themecusto'),$_smarty_tpl);?>
</a>
            </div>
        </div>
        <div class="alert alert-info col-lg-12" role="alert">
            <b><?php echo smartyTranslate(array('s'=>'Information','mod'=>'ps_themecusto'),$_smarty_tpl);?>
</b>
            <?php if ($_smarty_tpl->tpl_vars['isPsReady']->value) {?>
                <p class="alert-text"><?php echo smartyTranslate(array('s'=>'By using this method you can only override the CSS of your theme.','mod'=>'ps_themecusto'),$_smarty_tpl);?>
</p>
            <?php } else { ?>
                <p class="alert-text"><?php echo smartyTranslate(array('s'=>'By using this method you can override the CSS and html of your theme, and add analytics tags.','mod'=>'ps_themecusto'),$_smarty_tpl);?>
</p>
            <?php }?>
            <p class="alert-text"><?php echo smartyTranslate(array('s'=>'Once uploaded, the child theme will be available in your Theme & Logo section','mod'=>'ps_themecusto'),$_smarty_tpl);?>
</p>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("./elem/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</div>
<?php }} ?>
