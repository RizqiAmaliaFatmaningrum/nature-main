<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2023-12-07 08:37:04
=======
/* Smarty version 4.3.1, created on 2023-11-29 03:51:58
>>>>>>> 511c29197c32fda98855b609b8c73cf71d0ed8b2
  from 'app:linkActionlinkActionOptions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65717620f3cb29_07403153',
=======
  'unifunc' => 'content_6566a74e5fb091_51409161',
>>>>>>> 511c29197c32fda98855b609b8c73cf71d0ed8b2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f065f79ce9f12ef974cd073de14c3fdb7589018' => 
    array (
      0 => 'app:linkActionlinkActionOptions.tpl',
      1 => 1688091971,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_65717620f3cb29_07403153 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_6566a74e5fb091_51409161 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 511c29197c32fda98855b609b8c73cf71d0ed8b2
?>
{
	<?php if ($_smarty_tpl->tpl_vars['selfActivate']->value) {?>
		selfActivate: <?php echo $_smarty_tpl->tpl_vars['selfActivate']->value;?>
,
	<?php }?>
	staticId: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['staticId']->value ));?>
,
	<?php $_smarty_tpl->_assignInScope('actionRequest', $_smarty_tpl->tpl_vars['action']->value->getActionRequest());?>
	actionRequest: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['actionRequest']->value->getJSLinkActionRequest() ));?>
,
	actionRequestOptions: {
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actionRequest']->value->getLocalizedOptions(), 'optionValue', false, 'optionName', 'actionRequestOptions', array (
));
$_smarty_tpl->tpl_vars['optionValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['optionName']->value => $_smarty_tpl->tpl_vars['optionValue']->value) {
$_smarty_tpl->tpl_vars['optionValue']->do_else = false;
?>
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['optionName']->value ));?>
: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['optionValue']->value ));?>
,
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	}
}
<?php }
}
