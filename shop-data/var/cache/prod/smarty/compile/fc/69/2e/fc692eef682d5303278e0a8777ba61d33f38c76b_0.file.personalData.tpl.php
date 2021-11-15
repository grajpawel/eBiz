<?php
/* Smarty version 3.1.39, created on 2021-11-15 13:05:40
  from '/var/www/html/modules/psgdpr/views/templates/front/pdf/personalData.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61924d1411e3f7_54978538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc692eef682d5303278e0a8777ba61d33f38c76b' => 
    array (
      0 => '/var/www/html/modules/psgdpr/views/templates/front/pdf/personalData.tpl',
      1 => 1636971297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61924d1411e3f7_54978538 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['style_tab']->value;?>



<table width="100%" id="body" border="0" cellpadding="0" cellspacing="0" style="margin:0;">
    <!-- general customer info -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['generalInfo_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="30">&nbsp;</td>
    </tr>

    <!-- addresses tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['addresses_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="10">&nbsp;</td>
    </tr>

    <!-- order list tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['orders_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="20">&nbsp;</td>
    </tr>

    <!-- cart list tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['carts_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="10">&nbsp;</td>
    </tr>

    <!-- messages tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['messages_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="10">&nbsp;</td>
    </tr>

    <!-- connections tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['connections_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="10">&nbsp;</td>
    </tr>


    <!-- modules tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['modules_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="10">&nbsp;</td>
    </tr>
</table>
<?php }
}
