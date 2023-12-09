<?php
/* Smarty version 4.3.1, created on 2023-12-08 02:04:46
  from 'app:frontendcomponentsfooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65726bae861bc2_05674834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dffb64063bb972c37e05619a2ccd9d0ea7473ac' => 
    array (
      0 => 'app:frontendcomponentsfooter.tpl',
      1 => 1701997475,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65726bae861bc2_05674834 (Smarty_Internal_Template $_smarty_tpl) {
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

        <?php if ($_smarty_tpl->tpl_vars['issue']->value || $_smarty_tpl->tpl_vars['section']->value || $_smarty_tpl->tpl_vars['categories']->value) {?>
    <div class="item issue">
        <?php if ($_smarty_tpl->tpl_vars['issue']->value) {?>
        <section class="sub_item bg-[#DAE4E3] mb-5 rounded-2xl text-[#00504F] flex flex-col pl-5"
            style="width: 250px; height: 80px;">
            <h2 class="label font-bold mb-4">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"issue.issue"),$_smarty_tpl ) );?>

            </h2>
            <div class="value inline-block bg-[#00504F] text-white rounded-2xl text-white px-4" style="width: 250px;">
                <a class="title" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"issue",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
                    <?php echo $_smarty_tpl->tpl_vars['issue']->value->getIssueIdentification();?>

                </a>
            </div>
        </section>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['section']->value) {?>
        <section class="sub_item bg-[#DAE4E3] mb-5 rounded-2xl text-[#00504F] flex flex-col pl-5 "
            style="width: 250px; height: 70px;">
            <h2 class="label font-bold mb-4">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"section.section"),$_smarty_tpl ) );?>

            </h2>
            <div class="value inline-block bg-[#00504F] rounded-2xl text-white px-4" style="width: 230px;">
                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['section']->value->getLocalizedTitle() ));?>

            </div>
        </section>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
        <section class="sub_item">
            <h2 class="label">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"category.category"),$_smarty_tpl ) );?>

            </h2>
            <div class="value">
                <ul class="categories">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                    <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"catalog",'op'=>"category",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->getPath() ))),$_smarty_tpl ) );?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->getLocalizedTitle() ));?>
</a>
                    </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </section>
        <?php }?>
    </div>
    <?php }?>




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
