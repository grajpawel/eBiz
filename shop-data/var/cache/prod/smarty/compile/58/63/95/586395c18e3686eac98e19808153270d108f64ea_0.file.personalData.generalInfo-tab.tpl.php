<?php
/* Smarty version 3.1.39, created on 2021-11-15 13:05:40
  from '/var/www/html/modules/psgdpr/views/templates/front/pdf/personalData.generalInfo-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61924d140a5ec8_00103694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '586395c18e3686eac98e19808153270d108f64ea' => 
    array (
      0 => '/var/www/html/modules/psgdpr/views/templates/front/pdf/personalData.generalInfo-tab.tpl',
      1 => 1636971297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61924d140a5ec8_00103694 (Smarty_Internal_Template $_smarty_tpl) {
?>


<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'General info','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</h2>
<br>
<table width="100%">
    <tr>
        <td width="47%">
            <table id="total-tab" width="100%">
                <tr>
                    <td class="grey" width="50%">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Gender','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                    </td>
                    <td class="white" width="50%">
                        <?php echo $_smarty_tpl->tpl_vars['customerInfo']->value['gender'];?>

                    </td>
                </tr>
                <tr>
                    <td class="grey" width="50%">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                    </td>
                    <td class="white" width="50%">
                        <?php echo $_smarty_tpl->tpl_vars['customerInfo']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['customerInfo']->value['lastname'];?>

                    </td>
                </tr>
                <tr>
                    <td class="grey" width="50%">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Birth date','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                    </td>
                    <td class="white" width="50%">
                        <?php echo $_smarty_tpl->tpl_vars['customerInfo']->value['birthday'];?>

                    </td>
                </tr>
                <tr>
                    <td class="grey" width="50%">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Age','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                    </td>
                    <td class="white" width="50%">
                        <?php echo $_smarty_tpl->tpl_vars['customerInfo']->value['age'];?>

                    </td>
                </tr>
                <tr>
                    <td class="grey" width="50%">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                    </td>
                    <td class="white" width="50%">
                        <?php echo $_smarty_tpl->tpl_vars['customerInfo']->value['email'];?>

                    </td>
                </tr>
                <tr>
                    <td class="grey" width="50%">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                    </td>
                    <td class="white" width="50%">
                        <?php echo $_smarty_tpl->tpl_vars['customerInfo']->value['language'];?>

                    </td>
                </tr>
            </table>
        </td>
        <td width="5%"></td>
        <td width="47%">
            <table id="total-tab" width="100%">
                <tr>
                    <td class="grey" width="50%">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Creation account date','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                    </td>
                    <td class="white" width="50%">
                        <?php echo $_smarty_tpl->tpl_vars['customerInfo']->value['date_add'];?>

                    </td>
                </tr>
                <tr>
                    <td class="grey" width="50%">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last visit','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                    </td>
                    <td class="white" width="50%">
                        <?php echo $_smarty_tpl->tpl_vars['customerInfo']->value['last_visit'];?>

                    </td>
                </tr>
                <tr>
                    <td class="grey" width="50%">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Siret','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                    </td>
                    <td class="white" width="50%">
                        <?php echo $_smarty_tpl->tpl_vars['customerInfo']->value['siret'];?>

                    </td>
                </tr>
                <tr>
                    <td class="grey" width="50%">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ape','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                    </td>
                    <td class="white" width="50%">
                        <?php echo $_smarty_tpl->tpl_vars['customerInfo']->value['ape'];?>

                    </td>
                </tr>
                <tr>
                    <td class="grey" width="50%">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Company','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                    </td>
                    <td class="white" width="50%">
                        <?php echo $_smarty_tpl->tpl_vars['customerInfo']->value['company'];?>

                    </td>
                </tr>
                <tr>
                    <td class="grey" width="50%">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Website','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                    </td>
                    <td class="white" width="50%">
                        <?php echo $_smarty_tpl->tpl_vars['customerInfo']->value['website'];?>

                    </td>
                </tr>
            </table>
        </td>
    </tr>
    
    
</table>
<?php }
}
