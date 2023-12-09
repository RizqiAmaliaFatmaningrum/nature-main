<?php
/* Smarty version 4.3.1, created on 2023-12-08 04:19:44
  from 'app:frontendcomponentsfooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65728b50e7de75_09593655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dffb64063bb972c37e05619a2ccd9d0ea7473ac' => 
    array (
      0 => 'app:frontendcomponentsfooter.tpl',
      1 => 1702000348,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65728b50e7de75_09593655 (Smarty_Internal_Template $_smarty_tpl) {
?>
</div><!-- pkp_structure_main -->

<?php if (empty($_smarty_tpl->tpl_vars['isFullWidth']->value)) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "sidebarCode", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Sidebar"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['sidebarCode']->value) {?>

<div class="pkp_structure_sidebar right bg-[#F4FEFD]" role="complementary"
    aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.sidebar"),$_smarty_tpl ) ) ));?>
">
    <?php echo $_smarty_tpl->tpl_vars['sidebarCode']->value;?>

    
        <div class="flex-initial w-64 p-2">
        <div class="h-auto items-center justify-between md:8/12 bg-[#DAE4E3] rounded-2xl">
            <section class="flex">
                <input type="text" class="w-full h-10 font-medium ml-2 focus:outline-none bg-transparent" placeholder="Search...">
                <a href="http://localhost/nature-main1/index.php/MS/search" class="w-10 h-10 bg-[#00504F] flex justify-center item-center rounded-2xl p-3"><em class="fa fa-search" style="margin-right: -3px;"></em></a>
            </section>
        </div>
    </div>

</div><!-- pkp_sidebar.left -->
<?php }
}?>
</div><!-- pkp_structure_content -->

<div class="pkp_structure_footer_wrapper" role="contentinfo">
    <a id="pkp_content_footer"></a>
    <div class="bg-[#00504F] text-white">
        <div class="pkp_structure_footer">

            <?php if ($_smarty_tpl->tpl_vars['pageFooter']->value) {?>
            <div class="pkp_footer_content">
                <?php echo $_smarty_tpl->tpl_vars['pageFooter']->value;?>

            </div>
            <?php }?>

            <div class="pkp_brand_footer" role="complementary">
                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"about",'op'=>"aboutThisPublishingSystem"),$_smarty_tpl ) );?>
">
                    <img alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.aboutThisPublishingSystem"),$_smarty_tpl ) );?>
" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['brandImage']->value;?>
">
                </a>
            </div>
        </div>
    </div>
</div><!-- pkp_structure_footer_wrapper -->

</div><!-- pkp_structure_page -->

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_script'][0], array( array('context'=>"frontend"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Footer::PageFooter"),$_smarty_tpl ) );?>

</body>

</html>
<?php }
}
