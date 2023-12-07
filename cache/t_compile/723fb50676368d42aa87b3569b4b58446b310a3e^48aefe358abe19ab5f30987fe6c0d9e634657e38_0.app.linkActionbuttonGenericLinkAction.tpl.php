<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2023-12-07 08:37:00
=======
/* Smarty version 4.3.1, created on 2023-11-29 03:51:56
>>>>>>> 511c29197c32fda98855b609b8c73cf71d0ed8b2
  from 'app:linkActionbuttonGenericLinkAction.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_6571761c821207_49611930',
=======
  'unifunc' => 'content_6566a74c8795a8_61679475',
>>>>>>> 511c29197c32fda98855b609b8c73cf71d0ed8b2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48aefe358abe19ab5f30987fe6c0d9e634657e38' => 
    array (
      0 => 'app:linkActionbuttonGenericLinkAction.tpl',
      1 => 1688091971,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:linkAction/linkActionOptions.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_6571761c821207_49611930 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_6566a74c8795a8_61679475 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 511c29197c32fda98855b609b8c73cf71d0ed8b2
echo '<script'; ?>
>
	$(function() {
		$('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['buttonSelector']->value,'jsid' ));?>
').pkpHandler(
				'$.pkp.controllers.linkAction.LinkActionHandler',
				<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkActionOptions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['action']->value), 0, false);
?>);
	});
<?php echo '</script'; ?>
>
<?php }
}
