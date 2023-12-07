<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2023-12-07 08:37:01
=======
/* Smarty version 4.3.1, created on 2023-11-28 03:50:56
>>>>>>> 511c29197c32fda98855b609b8c73cf71d0ed8b2
  from 'app:formbutton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_6571761dafa398_46305547',
=======
  'unifunc' => 'content_656555903e9334_40776080',
>>>>>>> 511c29197c32fda98855b609b8c73cf71d0ed8b2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5940d70f22ffdd5a7b98e9da0b249a87f1934044' => 
    array (
      0 => 'app:formbutton.tpl',
      1 => 1688091971,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_6571761dafa398_46305547 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_656555903e9334_40776080 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 511c29197c32fda98855b609b8c73cf71d0ed8b2
?><button class="pkp_button <?php echo $_smarty_tpl->tpl_vars['FBV_class']->value;?>
" type="<?php echo $_smarty_tpl->tpl_vars['FBV_type']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FBV_disabled']->value) {?> disabled="disabled"<?php }?> <?php echo $_smarty_tpl->tpl_vars['FBV_buttonParams']->value;?>
><?php if ($_smarty_tpl->tpl_vars['FBV_translate']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['FBV_label']->value),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['FBV_label']->value;
}?></button>
<?php }
}
