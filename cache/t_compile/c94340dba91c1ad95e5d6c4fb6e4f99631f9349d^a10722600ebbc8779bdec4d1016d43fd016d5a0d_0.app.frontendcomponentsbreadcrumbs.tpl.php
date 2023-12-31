<?php
/* Smarty version 4.3.1, created on 2023-12-23 04:08:37
  from 'app:frontendcomponentsbreadcrumbs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65864f3588ee06_27227596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a10722600ebbc8779bdec4d1016d43fd016d5a0d' => 
    array (
      0 => 'app:frontendcomponentsbreadcrumbs.tpl',
      1 => 1703297154,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65864f3588ee06_27227596 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="inline-block" role="navigation" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'navigation.breadcrumbLabel'),$_smarty_tpl ) );?>
">
	<ol class="pkp_unstyled_list py-2 pl-0 leading-8 text-sm">
		<div class="bg-[#006A6829] text-[#00504F] rounded-2xl h-10 p-2 relative flex items-center">
			<li class="inline-block">
				<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>'index','router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null)),$_smarty_tpl ) );?>
" class="inline-block text-decoration-none">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'common.homepageNavigationLabel'),$_smarty_tpl ) );?>

				</a>
				<span class="separator text-light px-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'navigation.breadcrumbSeparator'),$_smarty_tpl ) );?>
</span>
			</li>
			<li class="inline-block">
				<div class="current bg-[#00504F] rounded-r-2xl h-10 p-2 absolute top-0 flex items-center">
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
