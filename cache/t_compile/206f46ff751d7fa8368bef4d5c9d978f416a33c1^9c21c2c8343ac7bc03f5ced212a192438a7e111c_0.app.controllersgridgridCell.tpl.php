<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2023-12-07 08:37:00
=======
/* Smarty version 4.3.1, created on 2023-11-29 03:51:56
>>>>>>> 511c29197c32fda98855b609b8c73cf71d0ed8b2
  from 'app:controllersgridgridCell.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_6571761c494f83_72888791',
=======
  'unifunc' => 'content_6566a74ce76a71_09968492',
>>>>>>> 511c29197c32fda98855b609b8c73cf71d0ed8b2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c21c2c8343ac7bc03f5ced212a192438a7e111c' => 
    array (
      0 => 'app:controllersgridgridCell.tpl',
      1 => 1688091971,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/grid/gridCellContents.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_6571761c494f83_72888791 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_6566a74ce76a71_09968492 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 511c29197c32fda98855b609b8c73cf71d0ed8b2
if ($_smarty_tpl->tpl_vars['id']->value) {?>
	<?php $_smarty_tpl->_assignInScope('cellId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "cell-",$_smarty_tpl->tpl_vars['id']->value )));
} else { ?>
	<?php $_smarty_tpl->_assignInScope('cellId', '');
}?>
<span <?php if ($_smarty_tpl->tpl_vars['cellId']->value) {?>id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cellId']->value ));?>
" <?php }?>class="gridCellContainer">
	<?php $_smarty_tpl->_subTemplateRender("app:controllers/grid/gridCellContents.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</span>

<?php }
}
