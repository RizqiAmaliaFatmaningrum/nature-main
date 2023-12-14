<?php
/* Smarty version 4.3.1, created on 2023-12-13 01:16:05
  from 'app:frontendpagesprivacy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6578f7c5dd6cc2_89966139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e9355d736f1a824701a88bfa3ecd03068d56f99' => 
    array (
      0 => 'app:frontendpagesprivacy.tpl',
      1 => 1702426563,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_6578f7c5dd6cc2_89966139 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"manager.setup.privacyStatement"), 0, false);
?>

<div class="page page_privacy">
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>"manager.setup.privacyStatement"), 0, false);
?>
	<h1 class="font-bold text-2xl">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.privacyStatement"),$_smarty_tpl ) );?>

	</h1>
	<hr class="my-5 w-full border-t-2 border-[#00504F]">
	<?php echo $_smarty_tpl->tpl_vars['privacyStatement']->value;?>

</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
