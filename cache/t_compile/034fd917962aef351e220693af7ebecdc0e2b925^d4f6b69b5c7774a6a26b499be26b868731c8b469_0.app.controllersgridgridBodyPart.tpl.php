<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2023-12-07 08:37:01
=======
/* Smarty version 4.3.1, created on 2023-11-29 03:51:57
>>>>>>> 511c29197c32fda98855b609b8c73cf71d0ed8b2
  from 'app:controllersgridgridBodyPart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_6571761d6cff57_93040601',
=======
  'unifunc' => 'content_6566a74daa0967_02373579',
>>>>>>> 511c29197c32fda98855b609b8c73cf71d0ed8b2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4f6b69b5c7774a6a26b499be26b868731c8b469' => 
    array (
      0 => 'app:controllersgridgridBodyPart.tpl',
      1 => 1688091971,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_6571761d6cff57_93040601 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_6566a74daa0967_02373579 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 511c29197c32fda98855b609b8c73cf71d0ed8b2
?><tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
		<?php echo $_smarty_tpl->tpl_vars['row']->value;?>

	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<tr></tr>
</tbody>

<?php }
}
