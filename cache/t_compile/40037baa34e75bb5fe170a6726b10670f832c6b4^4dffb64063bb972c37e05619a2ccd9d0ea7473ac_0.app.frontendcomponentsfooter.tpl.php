<?php
/* Smarty version 4.3.1, created on 2023-12-12 08:31:32
  from 'app:frontendcomponentsfooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65780c54ab0e74_98574646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dffb64063bb972c37e05619a2ccd9d0ea7473ac' => 
    array (
      0 => 'app:frontendcomponentsfooter.tpl',
      1 => 1702364564,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65780c54ab0e74_98574646 (Smarty_Internal_Template $_smarty_tpl) {
?>
</main><!-- pkp_structure_main -->


<?php if (empty($_smarty_tpl->tpl_vars['isFullWidth']->value)) {?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "sidebarCode", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Sidebar"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php if ($_smarty_tpl->tpl_vars['sidebarCode']->value) {?>
		<aside id="right" class="lg:w-1/4 xl:w-1/4 pkp_structure_sidebar left col-xs-12 col-sm-2 col-md-3" role="complementary" aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.sidebar"),$_smarty_tpl ) ) ));?>
">
		
		
		<?php echo $_smarty_tpl->tpl_vars['sidebarCode']->value;?>


				<?php if ($_smarty_tpl->tpl_vars['additionalHomeContent']->value) {?>
			<div class="">
								<?php echo $_smarty_tpl->tpl_vars['additionalHomeContent']->value;?>

							</div>
		<?php }?>
		</aside><!-- pkp_sidebar.left -->
	<?php }
}?>
</div><!-- pkp_structure_content -->

	<footer class="footer" role="contentinfo">

		<div class="container mx-auto rounded-t-3xl bg-[#002020] text-white">
			
			
				<div class="row">
					<?php if ($_smarty_tpl->tpl_vars['pageFooter']->value) {?>
						<div class="pkp_footer_content">
							<?php echo $_smarty_tpl->tpl_vars['pageFooter']->value;?>

						</div>
					<?php }?>

									</div>
			
		</div>
	
	</footer>
</div><!-- pkp_structure_page -->

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_script'][0], array( array('context'=>"frontend"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Footer::PageFooter"),$_smarty_tpl ) );?>




<button id="scrollTop" onclick="scrollToTop()" href="#accessibility-nav" title="Go to top" style ><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
</body>

</html><?php }
}
