<?php
/* Smarty version 4.3.1, created on 2023-12-16 03:31:02
  from 'app:manageIssuesissues.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_657d0be67a4491_27233657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efebebd5ddd268c3b68497d4c314565b00f3746d' => 
    array (
      0 => 'app:manageIssuesissues.tpl',
      1 => 1688091695,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657d0be67a4491_27233657 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2100026463657d0be6748b68_52975043', "page");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/backend.tpl");
}
/* {block "page"} */
class Block_2100026463657d0be6748b68_52975043 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_2100026463657d0be6748b68_52975043',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h1 class="app__pageHeading">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.navigation.issues"),$_smarty_tpl ) );?>

	</h1>

	<tabs :track-history="true">
		<tab id="future" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.navigation.futureIssues"),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"issue-management",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'futureIssuesGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"grid.issues.FutureIssueGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"futureIssuesGridContainer",'url'=>$_smarty_tpl->tpl_vars['futureIssuesGridUrl']->value),$_smarty_tpl ) );?>

		</tab>
		<tab id="back" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.navigation.issueArchive"),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"issue-management",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'backIssuesGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"grid.issues.BackIssueGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"backIssuesGridContainer",'url'=>$_smarty_tpl->tpl_vars['backIssuesGridUrl']->value),$_smarty_tpl ) );?>

		</tab>
	</tabs>
<?php
}
}
/* {/block "page"} */
}
