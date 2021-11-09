<?php /* Smarty version Smarty-3.1.19, created on 2021-11-07 20:09:17
         compiled from "/var/www/html/modules/ps_themecusto/views/templates/admin/controllers/advanced/elem/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13119928036188245d0ef6b4-37355198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0128a3aef23ca86dd1716fea82c2670235402625' => 
    array (
      0 => '/var/www/html/modules/ps_themecusto/views/templates/admin/controllers/advanced/elem/modal.tpl',
      1 => 1636311990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13119928036188245d0ef6b4-37355198',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6188245d0faaa9_90023670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6188245d0faaa9_90023670')) {function content_6188245d0faaa9_90023670($_smarty_tpl) {?>

<div class="modal fade" id="upload-child-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title module-modal-title" id="exampleModalLongTitle"><?php echo smartyTranslate(array('s'=>'Upload child theme','mod'=>'ps_themecusto'),$_smarty_tpl);?>
</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="#" class="dropzone dz-clickable" id="importDropzone">
                            <div class="loader"></div>
                            <div class="module-import-start">
                                <i class="module-import-start-icon material-icons">cloud_upload</i><br>
                                <p class="module-import-start-main-text">
                                    <?php echo smartyTranslate(array('s'=>'Drop your child theme archive here or','mod'=>'ps_themecusto'),$_smarty_tpl);?>
 <a href="#" class="module-import-start-select-manual"><?php echo smartyTranslate(array('s'=>'select file','mod'=>'ps_themecusto'),$_smarty_tpl);?>
</a>
                                </p>
                                <p class="module-import-start-footer-text">
                                    <?php echo smartyTranslate(array('s'=>'Please upload one file at a time, .zip. Your child theme will be installed right after that.','mod'=>'ps_themecusto'),$_smarty_tpl);?>

                                </p>
                            </div>
                            <div class="module-import-failure">
                                <i class="module-import-failure-icon material-icons">error</i><br>
                                <p class="module-import-failure-msg"><?php echo smartyTranslate(array('s'=>'Oops... Upload failed.','mod'=>'ps_themecusto'),$_smarty_tpl);?>
</p>
                                <a href="#" class="module-import-failure-details-action"><?php echo smartyTranslate(array('s'=>'What happened?','mod'=>'ps_themecusto'),$_smarty_tpl);?>
</a>
                                <div class="module-import-failure-details"><?php echo smartyTranslate(array('s'=>'An error has occurred.','mod'=>'ps_themecusto'),$_smarty_tpl);?>
</div>
                                <p>
                                    <a class="module-import-failure-retry btn btn-tertiary" href="#"><?php echo smartyTranslate(array('s'=>'Try again','mod'=>'ps_themecusto'),$_smarty_tpl);?>
</a>
                                </p>
                            </div>
                            <div class="module-import-success">
                                <i class="module-import-success-icon material-icons">done</i><br>
                                <p class="module-import-success-msg"></p>
                            </div>
                            <input type="hidden" name="action" value="UploadChildTheme" />
                            <div class="dz-default dz-message"><span></span></div><input name="childthemefile" type="file" class="dz-hidden-input" accept=".zip" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>
