<?php
/* Smarty version 4.3.1, created on 2023-12-19 03:06:50
  from 'app:frontendpageseditorialTeam.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6580faba1f9809_51110878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63c3703926f6cd217d548df875d7e1620d1ef19f' => 
    array (
      0 => 'app:frontendpageseditorialTeam.tpl',
      1 => 1702538662,
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
function content_6580faba1f9809_51110878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"about.editorialTeam"), 0, false);
?>

<div class="page page_editorial_team">
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>"about.editorialTeam"), 0, false);
?>
	<h1 class="font-bold text-2xl">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.editorialTeam"),$_smarty_tpl ) );?>

	</h1>
	<hr class="my-5 w-full border-t-2 border-[#00504F]">
		<?php echo $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedData('editorialTeam');?>

</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
