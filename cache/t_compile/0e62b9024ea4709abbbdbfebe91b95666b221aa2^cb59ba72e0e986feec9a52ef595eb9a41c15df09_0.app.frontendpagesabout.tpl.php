<?php
/* Smarty version 4.3.1, created on 2023-12-13 01:48:55
  from 'app:frontendpagesabout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6578ff7730f3d4_45723000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb59ba72e0e986feec9a52ef595eb9a41c15df09' => 
    array (
      0 => 'app:frontendpagesabout.tpl',
      1 => 1702428533,
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
function content_6578ff7730f3d4_45723000 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"about.aboutContext"), 0, false);
?>

<div class="page page_about">
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>"about.aboutContext"), 0, false);
?>
	<h1 class="font-bold text-2xl">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.aboutContext"),$_smarty_tpl ) );?>

	</h1>
	<hr class="my-5 w-full border-t-2 border-[#00504F]">
	
	<div class="bg-[#ffffff] rounded-3xl p-2 m-2 shadow-lg">
	<?php echo $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedData('about');?>

	</div>
</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
