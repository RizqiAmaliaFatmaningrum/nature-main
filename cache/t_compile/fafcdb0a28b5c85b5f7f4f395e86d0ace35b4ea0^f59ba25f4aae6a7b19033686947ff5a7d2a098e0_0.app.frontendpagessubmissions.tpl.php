<?php
/* Smarty version 4.3.1, created on 2023-12-13 02:55:18
  from 'app:frontendpagessubmissions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65790f06069d97_45924570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f59ba25f4aae6a7b19033686947ff5a7d2a098e0' => 
    array (
      0 => 'app:frontendpagessubmissions.tpl',
      1 => 1702432515,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs.tpl' => 1,
    'app:frontend/components/editLink.tpl' => 2,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_65790f06069d97_45924570 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"about.submissions"), 0, false);
?>

<div class="page page_submissions">

	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>"about.submissions"), 0, false);
?>

		<h1 class="font-bold text-2xl">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.submissions"),$_smarty_tpl ) );?>

	</h1>
		<hr class="my-5 w-full border-t-2 border-[#00504F]">

		<div class="bg-white p-4 m-4 border-l-4 border-[#00504F]">
		<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value) {?>
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "newSubmission", null);?><a
				href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"submission",'op'=>"wizard"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.onlineSubmissions.newSubmission"),$_smarty_tpl ) );?>
</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "viewSubmissions", null);?><a
				href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"submissions"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.onlineSubmissions.viewSubmissions"),$_smarty_tpl ) );?>
</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<div class="alert alert-info">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.onlineSubmissions.submissionActions",'newSubmission'=>$_smarty_tpl->tpl_vars['newSubmission']->value,'viewSubmissions'=>$_smarty_tpl->tpl_vars['viewSubmissions']->value),$_smarty_tpl ) );?>

			</div>
		<?php } else { ?>
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "login", null);?><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"login"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.onlineSubmissions.login"),$_smarty_tpl ) );?>
</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "register", null);?><a
				href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"user",'op'=>"register"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.onlineSubmissions.register"),$_smarty_tpl ) );?>
</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<div class="alert alert-info">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.onlineSubmissions.registrationRequired",'login'=>$_smarty_tpl->tpl_vars['login']->value,'register'=>$_smarty_tpl->tpl_vars['register']->value),$_smarty_tpl ) );?>

			</div>
		<?php }?>
	</div>

		<?php if ($_smarty_tpl->tpl_vars['submissionChecklist']->value) {?>
		<div class="submission_checklist">
			<h2 class="font-bold text-lg mb-3">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.submissionPreparationChecklist"),$_smarty_tpl ) );?>

				<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/editLink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page'=>"management",'op'=>"settings",'path'=>"workflow",'anchor'=>"submission/submissionChecklist",'sectionTitleKey'=>"about.submissionPreparationChecklist"), 0, false);
?>
			</h2>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.submissionPreparationChecklist.description"),$_smarty_tpl ) );?>

						<ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['submissionChecklist']->value, 'checklistItem');
$_smarty_tpl->tpl_vars['checklistItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['checklistItem']->value) {
$_smarty_tpl->tpl_vars['checklistItem']->do_else = false;
?>
					<li>
						<span class="fa fa-check" aria-hidden="true"></span>
						<?php echo nl2br((string) $_smarty_tpl->tpl_vars['checklistItem']->value['content'], (bool) 1);?>

					</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
					</div>
	<?php }?>
	
		<?php if ($_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedData('authorGuidelines')) {?>
	<div class="author_guidelines" id="authorGuidelines">
		<h2>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.authorGuidelines"),$_smarty_tpl ) );?>

			<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/editLink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page'=>"management",'op'=>"settings",'path'=>"workflow",'anchor'=>"submission/authorGuidelines",'sectionTitleKey'=>"about.authorGuidelines"), 0, true);
?>
		</h2>
		<?php echo $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedData('authorGuidelines');?>

	</div>
	<?php }?>
	
	
</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
