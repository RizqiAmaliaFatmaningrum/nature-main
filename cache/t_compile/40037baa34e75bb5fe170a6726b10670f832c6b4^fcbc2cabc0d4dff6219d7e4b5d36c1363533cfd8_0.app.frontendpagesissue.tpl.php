<?php
/* Smarty version 4.3.1, created on 2023-12-22 08:52:23
  from 'app:frontendpagesissue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65854037958dd1_50067286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcbc2cabc0d4dff6219d7e4b5d36c1363533cfd8' => 
    array (
      0 => 'app:frontendpagesissue.tpl',
      1 => 1703231536,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs_issue.tpl' => 2,
    'app:frontend/components/notification.tpl' => 1,
    'app:frontend/objects/issue_toc.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_65854037958dd1_50067286 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitleTranslated'=>$_smarty_tpl->tpl_vars['issueIdentification']->value), 0, false);
?>

<div class="page page_issue">

		<?php if (!$_smarty_tpl->tpl_vars['issue']->value) {?>
		<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs_issue.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>"current.noCurrentIssue"), 0, false);
?>
		<h1 class="font-bold">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"current.noCurrentIssue"),$_smarty_tpl ) );?>

		</h1>
		<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"warning",'messageKey'=>"current.noCurrentIssueDesc"), 0, false);
?>

		<?php } else { ?>
		<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs_issue.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitle'=>$_smarty_tpl->tpl_vars['issueIdentification']->value), 0, true);
?>
		<p class="text-lg font-bold">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issueIdentification']->value ));?>

		</p>
		<hr class="my-5 w-full border-t-2 border-[#00504F]">
		<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/issue_toc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }?>
</div>

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
