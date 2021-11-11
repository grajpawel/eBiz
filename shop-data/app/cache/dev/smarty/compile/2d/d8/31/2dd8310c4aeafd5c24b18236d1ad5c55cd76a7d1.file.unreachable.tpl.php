<?php /* Smarty version Smarty-3.1.19, created on 2021-11-10 00:11:41
         compiled from "/var/www/html/themes/classic/templates/checkout/_partials/steps/unreachable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:664485215618b002dbb7852-52757364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dd8310c4aeafd5c24b18236d1ad5c55cd76a7d1' => 
    array (
      0 => '/var/www/html/themes/classic/templates/checkout/_partials/steps/unreachable.tpl',
      1 => 1636496038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '664485215618b002dbb7852-52757364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identifier' => 0,
    'position' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_618b002dbbd227_34181995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_618b002dbbd227_34181995')) {function content_618b002dbbd227_34181995($_smarty_tpl) {?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>

<?php }} ?>
