<?php
/* Smarty version 4.3.1, created on 2023-12-22 01:41:40
  from 'app:frontendobjectsarticle_summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6584db44e86be0_80672913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cf1cd52b8ba8108de77f197078de34b733dd394' => 
    array (
      0 => 'app:frontendobjectsarticle_summary.tpl',
      1 => 1703205151,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6584db44e86be0_80672913 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\openjournal\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_assignInScope('articlePath', $_smarty_tpl->tpl_vars['article']->value->getBestId());
if (!$_smarty_tpl->tpl_vars['heading']->value) {?>
	<?php $_smarty_tpl->_assignInScope('heading', "h2");
}?>

<?php if ((!$_smarty_tpl->tpl_vars['section']->value['hideAuthor'] && $_smarty_tpl->tpl_vars['article']->value->getHideAuthor() == (defined('AUTHOR_TOC_DEFAULT') ? constant('AUTHOR_TOC_DEFAULT') : null)) || $_smarty_tpl->tpl_vars['article']->value->getHideAuthor() == (defined('AUTHOR_TOC_SHOW') ? constant('AUTHOR_TOC_SHOW') : null)) {?>
	<?php $_smarty_tpl->_assignInScope('showAuthor', true);
}?>

<?php $_smarty_tpl->_assignInScope('publication', $_smarty_tpl->tpl_vars['article']->value->getCurrentPublication());?>
<div class="">
	
	<<?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
 class="title">
		<a id="article-<?php echo $_smarty_tpl->tpl_vars['article']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['journal']->value) {?>href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('journal'=>$_smarty_tpl->tpl_vars['journal']->value->getPath(),'page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['articlePath']->value),$_smarty_tpl ) );?>
"<?php } else { ?>href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['articlePath']->value),$_smarty_tpl ) );?>
"<?php }?>>
			<span class="text-2xl font-bold">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle() ));?>

			</span>
			<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedSubtitle()) {?>
				<span class="subtitle">
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedSubtitle() ));?>

				</span>
			<?php }?>
		</a>
	</<?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
>


	<?php if ($_smarty_tpl->tpl_vars['showAuthor']->value || $_smarty_tpl->tpl_vars['article']->value->getPages()) {?>
        <?php if ($_smarty_tpl->tpl_vars['showAuthor']->value && !$_smarty_tpl->tpl_vars['activeTheme']->value->getOption('author_affiliation')) {?>
          <div class="meta">
            <?php if ($_smarty_tpl->tpl_vars['showAuthor']->value) {?>
              <div class="authors font-bold text-[#006A68] border-2 border-[#006A68] rounded-3xl px-4 mb-2">
                <?php echo smarty_modifier_truncate(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getAuthorString() )),100);?>

              </div>
            <?php }?>
          </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['showAuthor']->value && $_smarty_tpl->tpl_vars['activeTheme']->value->getOption('author_affiliation') && $_smarty_tpl->tpl_vars['publication']->value->getData('authors')) {?>
			<div class="author">
				<span class="flex items-center authors ">
					<svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512" class="h-4 w-5">
						<path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
					</svg>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['publication']->value->getData('authors'), 'author');
$_smarty_tpl->tpl_vars['author']->iteration = 0;
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
$_smarty_tpl->tpl_vars['author']->iteration++;
$__foreach_author_0_saved = $_smarty_tpl->tpl_vars['author'];
?>
						
						<a class="text-decoration-none" href="<?php echo $_smarty_tpl->tpl_vars['journalUrl']->value;?>
search?authors=<?php echo $_smarty_tpl->tpl_vars['author']->value->getFullName();?>
"><?php echo $_smarty_tpl->tpl_vars['author']->value->getFullName();?>
</a>
											<?php
$_smarty_tpl->tpl_vars['author'] = $__foreach_author_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</span>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['publication']->value->getData('authors'), 'author', false, NULL, 'authors', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['author']->iteration = 0;
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
$_smarty_tpl->tpl_vars['author']->iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_authors']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_authors']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_authors']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_authors']->value['total'];
$__foreach_author_1_saved = $_smarty_tpl->tpl_vars['author'];
?>
				<div class="italic text-sm text-gray-600">
					(<?php echo $_smarty_tpl->tpl_vars['author']->iteration;?>
)
					<span class="" data-author-id="<?php echo $_smarty_tpl->tpl_vars['author']->value->getId();?>
">
					<?php echo $_smarty_tpl->tpl_vars['author']->value->getLocalizedData('affiliation');?>
</span><?php if ($_smarty_tpl->tpl_vars['author']->value->getData('country')) {?><span
						class=""
						data-author-id="<?php echo $_smarty_tpl->tpl_vars['author']->value->getId();?>
">,&nbsp;<?php echo $_smarty_tpl->tpl_vars['author']->value->getCountryLocalized();?>
</span><?php }
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_authors']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_authors']->value['last'] : null)) {?><span>,</span><?php }?>
				</div>
				<?php
$_smarty_tpl->tpl_vars['author'] = $__foreach_author_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
        <?php }?>

        <div class="row py-4">
            <?php if ($_smarty_tpl->tpl_vars['enableDimensionCitation']->value && !$_smarty_tpl->tpl_vars['hideDimensionsCitation']->value) {?>
				<div class="col-md-8 col-xs-6">
					<?php if ($_smarty_tpl->tpl_vars['doi']->value) {?>
					<span class="__dimensions_badge_embed__" data-doi="<?php echo $_smarty_tpl->tpl_vars['doi']->value;?>
" data-style="large_rectangle"></span>
					<?php } else { ?>
					<small class="font-italic text-grey ">DOI record not available </small>
					<?php }?>
				</div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['article']->value->getPages()) {?>
				<div class="<?php if ($_smarty_tpl->tpl_vars['enableDimensionCitation']->value && !$_smarty_tpl->tpl_vars['hideDimensionsCitation']->value) {?>col-md-4 <?php } else { ?> col-md-12 <?php }?> col-xs-6 text-right page_number ">
										<span class="flex items-center">
					<svg class="icon line-color mr-2" width="14" height="14" id="file-search" data-name="line color"
					xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
					<path id="primary"
						d="M8,20H4a1,1,0,0,1-1-1V4A1,1,0,0,1,4,3h8.59a1,1,0,0,1,.7.29l3.42,3.42a1,1,0,0,1,.29.7V8"
						style="fill: none; stroke: rgb(101, 45, 144); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;">
					</path>
					<path id="secondary" d="M17,17.6,21,21m-7-2a4,4,0,1,0-4-4A4,4,0,0,0,14,19Z"
						style="fill: none; stroke: rgb(246, 146, 30); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;">
					</path>
					</svg>
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getPages() ));?>

					</span>
				</div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['enableStatistic']->value) {?>
				<div class="col-md-8 col-xs-12 article_statistic mt-3 px-0">
					<div class="col-md-7 col-xs-6 abstract_count pr-0">
					<span class="article_stat">
						<svg class="icon line-color" width="18" height="18" id="statistic-grow" data-name="Line Color"
						xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<line id="secondary" x1="3" y1="19" x2="21" y2="19"
							style="fill: none; stroke: rgb(246, 146, 30); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;">
						</line>
						<path id="primary" d="M21,5l-7,7L8,9,3,15m18-5V5H16"
							style="fill: none; stroke: rgb(101, 45, 144); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;">
						</path>
						</svg>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.abstractViews"),$_smarty_tpl ) );?>
 : <?php echo $_smarty_tpl->tpl_vars['article']->value->getViews();?>

					</span>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['article']->value->getGalleys()) {?>
					<div class="col-md-5 col-xs-6 pdf_count  text-right text-sm-left px-md-0">
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
						<svg class="icon line-color" width="15" height="15" id="down" data-name="Line Color"
						xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<line id="secondary" x1="12" y1="21" x2="12" y2="3"
							style="fill: none; stroke: rgb(246, 146, 30); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;">
						</line>
						<polyline id="primary" points="19 14 12 21 5 14"
							style="fill: none; stroke: rgb(101, 45, 144); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;">
						</polyline>
						</svg>
						<span class="galley_stat"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.download"),$_smarty_tpl ) );?>
 :<?php echo $_smarty_tpl->tpl_vars['totalDownloadGalley']->value;?>
 </span>
					</div>
					<?php }?>
				</div>
            <?php }?>


            <div class="<?php if ($_smarty_tpl->tpl_vars['enableStatistic']->value) {?>col-md-4<?php } else { ?>col-md-12 <?php }?> col-xs-12 pl-0 text-right pr-0 pr-sm-1 pr-md-2">
				<?php if ($_smarty_tpl->tpl_vars['doi']->value) {?>
					<div class="doi_container">
										<a href="https://www.doi.org/<?php echo $_smarty_tpl->tpl_vars['doi']->value;?>
" class="doi_link"> <?php echo $_smarty_tpl->tpl_vars['doi']->value;?>
 </a>
					</div>
				<?php }?>
            </div>
        </div>
    <?php }?>

	
				
	</div>


<?php }
}
