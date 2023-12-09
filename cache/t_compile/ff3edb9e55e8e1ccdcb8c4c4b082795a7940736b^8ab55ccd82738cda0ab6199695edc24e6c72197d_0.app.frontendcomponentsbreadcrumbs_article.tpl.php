<?php
/* Smarty version 4.3.1, created on 2023-12-07 08:40:19
  from 'app:frontendcomponentsbreadcrumbs_article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_657176e3641771_01933738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ab55ccd82738cda0ab6199695edc24e6c72197d' => 
    array (
      0 => 'app:frontendcomponentsbreadcrumbs_article.tpl',
      1 => 1701934813,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657176e3641771_01933738 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="cmp_breadcrumbs" role="navigation" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.breadcrumbLabel"),$_smarty_tpl ) );?>
">
	<ol>
		<div class="bg-[#006A6829] text-[#00504F] font-bold rounded-2xl h-10 p-2 relative">
			<li>
				<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"index",'router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null)),$_smarty_tpl ) );?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.homepageNavigationLabel"),$_smarty_tpl ) );?>

				</a>
				<span class="separator"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.breadcrumbSeparator"),$_smarty_tpl ) );?>
</span>
			</li>
			<li>
				<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"issue",'op'=>"archive"),$_smarty_tpl ) );?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.archives"),$_smarty_tpl ) );?>

				</a>
				<span class="separator"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.breadcrumbSeparator"),$_smarty_tpl ) );?>
</span>
			</li>
			<?php if ($_smarty_tpl->tpl_vars['issue']->value) {?>
				<li>
					<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"issue",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
						<?php echo $_smarty_tpl->tpl_vars['issue']->value->getIssueIdentification();?>

					</a>
					<span class="separator"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.breadcrumbSeparator"),$_smarty_tpl ) );?>
</span>
				</li>
			<?php }?>
			<li>
				<div class="current bg-[#00504F] rounded-r-2xl h-10 p-2 absolute top-0">
				<span aria-current="page" class="text-white whitespace-nowrap overflow-hidden">
					<?php if ($_smarty_tpl->tpl_vars['currentTitleKey']->value) {?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['currentTitleKey']->value),$_smarty_tpl ) );?>

					<?php } else { ?>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentTitle']->value ));?>

					<?php }?>
				</span>
				</div>
			</li>
		</div>
	</ol>
</nav>
<?php }
}
