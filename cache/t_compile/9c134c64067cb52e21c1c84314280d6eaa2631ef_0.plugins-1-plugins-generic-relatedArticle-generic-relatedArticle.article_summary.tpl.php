<?php
/* Smarty version 4.3.1, created on 2023-12-19 03:06:24
  from 'plugins-1-plugins-generic-relatedArticle-generic-relatedArticle:article_summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6580faa03198c8_98249744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c134c64067cb52e21c1c84314280d6eaa2631ef' => 
    array (
      0 => 'plugins-1-plugins-generic-relatedArticle-generic-relatedArticle:article_summary.tpl',
      1 => 1698645862,
      2 => 'plugins-1-plugins-generic-relatedArticle-generic-relatedArticle',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/objects/galley_link.tpl' => 1,
  ),
),false)) {
function content_6580faa03198c8_98249744 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\openjournal\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

<?php $_smarty_tpl->_assignInScope('articlePath', $_smarty_tpl->tpl_vars['article']->value->getBestArticleId($_smarty_tpl->tpl_vars['currentJournal']->value));?>

<?php if ((!$_smarty_tpl->tpl_vars['section']->value->_data['hideAuthor'] && $_smarty_tpl->tpl_vars['article']->value->getHideAuthor() == (defined('AUTHOR_TOC_DEFAULT') ? constant('AUTHOR_TOC_DEFAULT') : null)) || $_smarty_tpl->tpl_vars['article']->value->getHideAuthor() == (defined('AUTHOR_TOC_SHOW') ? constant('AUTHOR_TOC_SHOW') : null)) {?>
	<?php $_smarty_tpl->_assignInScope('showAuthor', true);
}?>


<?php $_smarty_tpl->_assignInScope('doi', $_smarty_tpl->tpl_vars['article']->value->_data['pub-id::doi']);?>	
<?php if (!$_smarty_tpl->tpl_vars['doi']->value) {?>
 <?php $_smarty_tpl->_assignInScope('doi', $_smarty_tpl->tpl_vars['article']->value->_data['publications'][0]->_data['pub-id::doi']);
}?>

<?php $_smarty_tpl->_assignInScope('categoryIds', $_smarty_tpl->tpl_vars['article']->value->_data['categoryIds']);?>	
<?php if (!$_smarty_tpl->tpl_vars['categoryIds']->value) {?>
 <?php $_smarty_tpl->_assignInScope('categoryIds', $_smarty_tpl->tpl_vars['article']->value->_data['publications'][0]->_data['categoryIds']);
}?>


<div class="article-summary media">

	<div class="media-body">

		<?php $_smarty_tpl->_assignInScope('isCoverAvailable', $_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImage());?>

		<?php if ($_smarty_tpl->tpl_vars['isCoverAvailable']->value && !$_smarty_tpl->tpl_vars['hideImagePreview']->value) {?>
			<div class="col-md-3 col-xs-12 cover pl-0 pb-4">
				<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageUrl() ));?>
" data-lightbox="image-<?php echo $_smarty_tpl->tpl_vars['article']->value->getId();?>
" data-title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle() ));?>
">
				<img class="media-object" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageUrl() ));?>
">
				</a>
			</div>
		<?php }?>

		<div class="<?php if ($_smarty_tpl->tpl_vars['isCoverAvailable']->value && !$_smarty_tpl->tpl_vars['hideImagePreview']->value) {?> col-md-9 px-0 <?php } else { ?> col-md-12 col-xs-12 px-0<?php }?>">

			<?php if ($_smarty_tpl->tpl_vars['isEnableArticleCategory']->value && $_smarty_tpl->tpl_vars['categoryIds']->value) {?>
				<div class="mb-3">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoryIds']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
						<?php $_smarty_tpl->_assignInScope('category', $_smarty_tpl->tpl_vars['categoryDAO']->value->getById($_smarty_tpl->tpl_vars['category']->value));?>
						<?php $_smarty_tpl->_assignInScope('path', $_smarty_tpl->tpl_vars['category']->value->getPath());?>
						<small class="categories">
						<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"catalog",'op'=>"category",'path'=>$_smarty_tpl->tpl_vars['category']->value->getPath()),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->getLocalizedTitle();?>
				</a>
						</small>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php }?>

			<h3 class="media-heading mb-2 text-justify">
				<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['articlePath']->value),$_smarty_tpl ) );?>
" >
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle() ));?>

					<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedSubtitle()) {?>
						<p>
							<small><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedSubtitle() ));?>
</small>
						</p>
					<?php }?>
				</a>
			</h3>

				<?php if ($_smarty_tpl->tpl_vars['showAuthor']->value || $_smarty_tpl->tpl_vars['article']->value->getPages()) {?>

					<?php if ($_smarty_tpl->tpl_vars['showAuthor']->value) {?>
						<div class="meta">
							<?php if ($_smarty_tpl->tpl_vars['showAuthor']->value) {?>
								<div class="authors ">
									<?php echo smarty_modifier_truncate(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getAuthorString() )),100);?>

									
								</div>
							<?php }?>
						</div>
					<?php }?>

					
				
					<div class="row py-1">					

						<?php if ($_smarty_tpl->tpl_vars['enableStatistic']->value) {?>
						<div class="col-md-8 col-xs-12 article_statistic mt-3 px-0" >
							<div class="col-md-7 col-xs-6 abstract_count pr-0">
							<span class="article_stat" >
							<svg class="icon line-color" width="18" height="18" id="statistic-grow" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><line id="secondary" x1="3" y1="19" x2="21" y2="19" style="fill: none; stroke: rgb(246, 146, 30); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;"></line><path id="primary" d="M21,5l-7,7L8,9,3,15m18-5V5H16" style="fill: none; stroke: rgb(101, 45, 144); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;"></path></svg>  
								Abstract View : <?php echo $_smarty_tpl->tpl_vars['article']->value->getViews();?>
 
							</span>
							</div>					
							<?php if ($_smarty_tpl->tpl_vars['article']->value->getGalleys()) {?>
							<div class="col-md-5 col-xs-6 pdf_count  text-right text-sm-left px-0">
							<?php $_smarty_tpl->_assignInScope('totalDownloadGalley', 0);?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getGalleys(), 'galley');
$_smarty_tpl->tpl_vars['galley']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
$_smarty_tpl->tpl_vars['galley']->do_else = false;
?>
								<?php $_smarty_tpl->_assignInScope('totalDownloadGalley', $_smarty_tpl->tpl_vars['galley']->value->getViews()+$_smarty_tpl->tpl_vars['totalDownloadGalley']->value);?>					
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
							<svg class="icon line-color" width="15" height="15" id="down" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><line id="secondary" x1="12" y1="21" x2="12" y2="3" style="fill: none; stroke: rgb(246, 146, 30); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;"></line><polyline id="primary" points="19 14 12 21 5 14" style="fill: none; stroke: rgb(101, 45, 144); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;"></polyline></svg>
								<span class="galley_stat"> Download :<?php echo $_smarty_tpl->tpl_vars['totalDownloadGalley']->value;?>
 </span>				
							</div>
							<?php }?>
						</div>
						<?php }?>


						<div class="<?php if ($_smarty_tpl->tpl_vars['enableStatistic']->value) {?>col-md-4<?php } else { ?>col-md-12 <?php }?> col-xs-12 pl-0 text-right pr-0 pr-sm-1 pr-md-2">
							<?php if ($_smarty_tpl->tpl_vars['doi']->value) {?>
								<div class="doi_container">
									<span class="doi_logo"> </span>				
									<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['articlePath']->value),$_smarty_tpl ) );?>
" class="doi_link"> <?php echo $_smarty_tpl->tpl_vars['doi']->value;?>
 </a>
								</div>
							<?php }?>
						</div>
						
					</div>
				<?php }?>
			

		<?php if (!$_smarty_tpl->tpl_vars['hideGalleys']->value && $_smarty_tpl->tpl_vars['article']->value->getGalleys()) {?>
			<div class="btn-group" role="group">
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
					<?php $_smarty_tpl->_assignInScope('hasArticleAccess', $_smarty_tpl->tpl_vars['hasAccess']->value);?>
					<?php if ($_smarty_tpl->tpl_vars['currentContext']->value->getSetting('publishingMode') == (defined('PUBLISHING_MODE_OPEN') ? constant('PUBLISHING_MODE_OPEN') : null) || $_smarty_tpl->tpl_vars['publication']->value->getData('accessStatus') == (defined('ARTICLE_ACCESS_OPEN') ? constant('ARTICLE_ACCESS_OPEN') : null)) {?>					
						<?php $_smarty_tpl->_assignInScope('hasArticleAccess', 1);?>
					<?php }?>
					<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/galley_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>$_smarty_tpl->tpl_vars['article']->value,'hasAccess'=>$_smarty_tpl->tpl_vars['hasArticleAccess']->value), 0, true);
?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		<?php }?>
		</div>

			

	</div>

	
</div><!-- .article-summary -->
<?php }
}
