<?php
/* Smarty version 4.3.1, created on 2023-12-22 01:23:43
  from 'app:frontendobjectsissue_toc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6584d70f224b86_50916840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26de9c47ced54328a8eb56e39bb4d4079aa049c6' => 
    array (
      0 => 'app:frontendobjectsissue_toc.tpl',
      1 => 1703204557,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/notification.tpl' => 1,
    'app:frontend/objects/galley_link.tpl' => 2,
    'app:frontend/objects/article_summary.tpl' => 1,
  ),
),false)) {
function content_6584d70f224b86_50916840 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['heading']->value) {?>
	<?php $_smarty_tpl->_assignInScope('heading', "h2");
}
$_smarty_tpl->_assignInScope('articleHeading', "h3");
if ($_smarty_tpl->tpl_vars['heading']->value == "h3") {?>
	<?php $_smarty_tpl->_assignInScope('articleHeading', "h4");
} elseif ($_smarty_tpl->tpl_vars['heading']->value == "h4") {?>
	<?php $_smarty_tpl->_assignInScope('articleHeading', "h5");
} elseif ($_smarty_tpl->tpl_vars['heading']->value == "h5") {?>
	<?php $_smarty_tpl->_assignInScope('articleHeading', "h6");
}?>

<div class="">


		<?php if (!$_smarty_tpl->tpl_vars['issue']->value->getPublished()) {?>
		<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"warning",'messageKey'=>"editor.issues.preview"), 0, false);
?>
	<?php }?>

		<div class="heading">

				
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pubIdPlugins']->value, 'pubIdPlugin');
$_smarty_tpl->tpl_vars['pubIdPlugin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pubIdPlugin']->value) {
$_smarty_tpl->tpl_vars['pubIdPlugin']->do_else = false;
?>
			<?php $_smarty_tpl->_assignInScope('pubId', $_smarty_tpl->tpl_vars['issue']->value->getStoredPubId($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType()));?>
			<?php if ($_smarty_tpl->tpl_vars['pubId']->value) {?>
				<?php $_smarty_tpl->_assignInScope('doiUrl', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getResolvingURL($_smarty_tpl->tpl_vars['currentJournal']->value->getId(),$_smarty_tpl->tpl_vars['pubId']->value) )));?>
				<div class="pub_id <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType() ));?>
">
					<span class="type">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdDisplayType() ));?>
:
					</span>
					<span class="id">
						<?php if ($_smarty_tpl->tpl_vars['doiUrl']->value) {?>
							<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['doiUrl']->value ));?>
">
								<?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>

							</a>
						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['pubId']->value;?>

						<?php }?>
					</span>
				</div>
			<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					</div>

		<?php if ($_smarty_tpl->tpl_vars['issueGalleys']->value) {?>
		<div class="galleys">
			<<?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
 id="issueTocGalleyLabel">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"issue.fullIssue"),$_smarty_tpl ) );?>

			</<?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
>
			<ul class="galleys_links">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['issueGalleys']->value, 'galley');
$_smarty_tpl->tpl_vars['galley']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
$_smarty_tpl->tpl_vars['galley']->do_else = false;
?>
					<li>
						<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/galley_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>$_smarty_tpl->tpl_vars['issue']->value,'labelledBy'=>"issueTocGalleyLabel",'purchaseFee'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getData('purchaseIssueFee'),'purchaseCurrency'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getData('currency')), 0, true);
?>
					</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
	<?php }?>

		<div class="sections">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['publishedSubmissions']->value, 'section', false, NULL, 'sections', array (
));
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
		<div class="section">
		<?php if ($_smarty_tpl->tpl_vars['section']->value['articles']) {?>
			<?php if ($_smarty_tpl->tpl_vars['section']->value['title']) {?>
				<div class="flex justify-center items-center h-32 text-2xl text-center font-bold text-[#00504F] bg-[url('../../../img/Union.png')] bg-no-repeat bg-center my-5">
													<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['section']->value['title'] ));?>

												</div>
			<?php }?>
			
			
				<div class="cmp_article_list articles">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section']->value['articles'], 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
							<div class="flex items-center">
									<?php if (!$_smarty_tpl->tpl_vars['hideGalleys']->value) {?>
										<ul class="galleys_links flex space-x-2">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getGalleys(), 'galley');
$_smarty_tpl->tpl_vars['galley']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
$_smarty_tpl->tpl_vars['galley']->do_else = false;
?>
												<?php if ($_smarty_tpl->tpl_vars['primaryGenreIds']->value) {?>
													<?php $_smarty_tpl->_assignInScope('file', $_smarty_tpl->tpl_vars['galley']->value->getFile());?>
													<?php if (!$_smarty_tpl->tpl_vars['galley']->value->getRemoteUrl() && !($_smarty_tpl->tpl_vars['file']->value && in_array($_smarty_tpl->tpl_vars['file']->value->getGenreId(),$_smarty_tpl->tpl_vars['primaryGenreIds']->value))) {?>
														<?php continue 1;?>
													<?php }?>
												<?php }?>
												<li>
													<?php $_smarty_tpl->_assignInScope('hasArticleAccess', $_smarty_tpl->tpl_vars['hasAccess']->value);?>
													<?php if ($_smarty_tpl->tpl_vars['currentContext']->value->getSetting('publishingMode') == (defined('PUBLISHING_MODE_OPEN') ? constant('PUBLISHING_MODE_OPEN') : null) || $_smarty_tpl->tpl_vars['publication']->value->getData('accessStatus') == (defined('ARTICLE_ACCESS_OPEN') ? constant('ARTICLE_ACCESS_OPEN') : null)) {?>
														<?php $_smarty_tpl->_assignInScope('hasArticleAccess', 1);?>
													<?php }?>
													<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/galley_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>$_smarty_tpl->tpl_vars['article']->value,'labelledBy'=>"article-".((string)$_smarty_tpl->tpl_vars['article']->value->getId()),'hasAccess'=>$_smarty_tpl->tpl_vars['hasArticleAccess']->value,'purchaseFee'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getData('purchaseArticleFee'),'purchaseCurrency'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getData('currency')), 0, true);
?>
												</li>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</ul>
									<?php }?>
									
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Issue::Issue::Article"),$_smarty_tpl ) );?>

							
																<div class="w-4/5 right-0 bg-white rounded-3xl p-4 m-2 shadow-lg">
									<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/article_summary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('heading'=>$_smarty_tpl->tpl_vars['articleHeading']->value), 0, true);
?>
								</div>
																
							</div>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						
									</div>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

	
	</div><!-- .sections -->

</div>

<?php }
}
