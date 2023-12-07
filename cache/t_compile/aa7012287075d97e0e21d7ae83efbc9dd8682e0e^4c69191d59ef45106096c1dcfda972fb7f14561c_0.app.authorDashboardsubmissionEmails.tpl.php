<?php
/* Smarty version 4.3.1, created on 2023-12-05 03:58:37
  from 'app:authorDashboardsubmissionEmails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_656e91ddbb9d01_36040550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c69191d59ef45106096c1dcfda972fb7f14561c' => 
    array (
      0 => 'app:authorDashboardsubmissionEmails.tpl',
      1 => 1688091971,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656e91ddbb9d01_36040550 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\openjournal\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<?php if ($_smarty_tpl->tpl_vars['submissionEmails']->value && $_smarty_tpl->tpl_vars['submissionEmails']->value->getCount()) {?>

	<div class="pkp_submission_emails">
		<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"notification.notifications"),$_smarty_tpl ) );?>
</h3>

		<ul>
			<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyIterate'))) {
throw new SmartyException('block tag \'iterate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('iterate', array('from'=>'submissionEmails','item'=>'submissionEmail'));
$_block_repeat=true;
echo $_block_plugin1->smartyIterate(array('from'=>'submissionEmails','item'=>'submissionEmail'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'submissionEmailLinkId', null);?>submissionEmail-<?php echo $_smarty_tpl->tpl_vars['submissionEmail']->value->getId();
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<?php echo '<script'; ?>
 type="text/javascript">
					// Initialize JS handler.
					$(function() {
						$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['submissionEmailLinkId']->value,"javascript" ));?>
').pkpHandler(
							'$.pkp.pages.authorDashboard.SubmissionEmailHandler',
							{
																actionRequest: '$.pkp.classes.linkAction.ModalRequest',
								actionRequestOptions: {
									titleIcon: 'modal_information',
									title: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"notification.notifications"),$_smarty_tpl ) ) ));?>
,
									modalHandler: '$.pkp.controllers.modal.AjaxModalHandler',
									url: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"authorDashboard",'op'=>"readSubmissionEmail",'submissionId'=>$_smarty_tpl->tpl_vars['submission']->value->getId(),'stageId'=>$_smarty_tpl->tpl_vars['stageId']->value,'reviewRoundId'=>$_smarty_tpl->tpl_vars['reviewRoundId']->value,'submissionEmailId'=>$_smarty_tpl->tpl_vars['submissionEmail']->value->getId(),'escape'=>false),$_smarty_tpl ) ) ));?>

								}
							}
						);
					});
				<?php echo '</script'; ?>
>

				<li>
					<span class="message">
						<a href="#" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['submissionEmailLinkId']->value ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['submissionEmail']->value->getSubject() ));?>
</a>
					</span>
					<span class="date">
						<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['submissionEmail']->value->getDateSent(),$_smarty_tpl->tpl_vars['datetimeFormatShort']->value);?>

					</span>
				</li>

			<?php $_block_repeat=false;
echo $_block_plugin1->smartyIterate(array('from'=>'submissionEmails','item'=>'submissionEmail'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		</ul>
	</div>
<?php }
}
}
