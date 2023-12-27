<?php
/* Smarty version 4.3.1, created on 2023-12-26 01:52:02
  from 'app:frontendcomponentsheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_658a23b2c29717_25714055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10ae5578a0959129b8d4ceeb9f99c1bb2a9cbd65' => 
    array (
      0 => 'app:frontendcomponentsheader.tpl',
      1 => 1703302178,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/headerHead.tpl' => 1,
  ),
),false)) {
function content_658a23b2c29717_25714055 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\openjournal\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php $_smarty_tpl->_assignInScope('showingLogo', true);
if (!$_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value) {
$_smarty_tpl->_assignInScope('showingLogo', false);
}?>

<?php $_smarty_tpl->_assignInScope('onlineIssn', $_smarty_tpl->tpl_vars['currentJournal']->value->getSetting('onlineIssn'));
$_smarty_tpl->_assignInScope('printIssn', $_smarty_tpl->tpl_vars['currentJournal']->value->getSetting('printIssn'));?>

<!DOCTYPE html>
<html lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
" xml:lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
">
<?php if (!$_smarty_tpl->tpl_vars['pageTitleTranslated']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "pageTitleTranslated", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['pageTitle']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
$_smarty_tpl->_subTemplateRender("app:frontend/components/headerHead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body class="pkp_page_<?php echo (($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value )) ?? null)===null||$tmp==='' ? "index" ?? null : $tmp);?>
 pkp_op_<?php echo (($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedOp']->value )) ?? null)===null||$tmp==='' ? "index" ?? null : $tmp);
if ($_smarty_tpl->tpl_vars['showingLogo']->value) {?> has_site_logo<?php }?>">
    <span class="hidden">Nature OJS 3 Theme by openjournaltheme.com theme</span>

    <?php if ($_smarty_tpl->tpl_vars['isMaintenanceMode']->value) {?>
    <div id="maintenance_container">
        <!-- Other elements here -->
        <div id="maintenance_content" style="text-align:center; color: #DBB539; padding: 5px 0">
            <i class="fa fa-wrench mr-3"> </i> <a href="https://openjournaltheme.com" style="color: #DBB539; padding: 5px 0"> Site is in maintenance mode</a>			
        </div>
    </div>
    <?php }?>

    <div class="pkp_structure_page">

                <header class="bg-white" id="headerNavigationContainer" role="banner">
                                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "homeUrl", null);?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"index",'router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null)),$_smarty_tpl ) );?>

            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <div class="container mx-auto">
                <div class="p-5 bg-[#F4FEFD] shadow xl:flex xl:items-center xl:justify-between">
                    <div class="flex justify-between">
                        <span class="text-2xl font-bold text-dark hover:text-[#00504F] cursor-pointer">
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
" class="is_text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value ));?>
</a>
                        </span>
        
                        <button id="hamburger" >
                            <span class="text-3xl cursor-pointer mx-2 xl:hidden block">
                                <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
                            </span>
                        </button>
                    </div>
                    
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "primaryMenu", null);?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_menu'][0], array( array('name'=>"primary",'id'=>"main-navigation",'ulClass'=>"nav navbar-nav"),$_smarty_tpl ) );?>

                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <nav id="navbar" class="navbar xl:flex xl:items-center xl:justify-between">
                        <?php if (!empty(trim($_smarty_tpl->tpl_vars['primaryMenu']->value)) || $_smarty_tpl->tpl_vars['currentContext']->value) {?>
                        <!-- Primary navigation menu for the current application -->
                        <div class="font-bold">
                            <?php echo $_smarty_tpl->tpl_vars['primaryMenu']->value;?>

                        </div>
                        <?php }?>

                        <nav aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.user"),$_smarty_tpl ) ) ));?>
" class="md:col-12 pr-0">
                            <button class="bg-[#FF8E06] text-white font-bold my-0 py-2 px-4 rounded-3xl ml-4">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_menu'][0], array( array('name'=>"user",'id'=>"navigationUser",'ulClass'=>"nav nav-pills tab-list pull-right flex"),$_smarty_tpl ) );?>

                            </button>
                        </nav>
                    </nav>
                </div>
            </div>


            <div class="container mx-auto">
                <?php if ($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
" class="is_img">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['publicFilesDir']->value;?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['uploadName'],"url" ));?>
"
                        width="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['width'] ));?>
" height="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['height'] ));?>
"
                        <?php if ($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['altText'] != '') {?>alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['altText'] ));?>
" <?php }?> />
                </a>
                <?php } elseif ($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
" class="is_text text-2xl text-center font-bold"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value ));?>
</a>
                <?php } else { ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
" class="is_img">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/templates/images/structure/logo.png" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['applicationName']->value ));?>
"
                        title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['applicationName']->value ));?>
" class="w-48 h-24 object-contain" />
                </a>
                <?php }?>

                <div class="bg-[#00504F] text-white lg:py-10 lg:px-40 z-10 py-10 px-20">
                    <h3 class="text-3xl font-bold mb-3">About Juornal</h3>
                    <?php if ($_smarty_tpl->tpl_vars['journalDescription']->value) {?>
                    <div class="text-justify">
                        <?php echo $_smarty_tpl->tpl_vars['journalDescription']->value;?>

                    </div>
                    <?php }?>
                </div>
                

            </div>



                        
                            

                        </header><!-- .pkp_structure_head -->

                


        <div class="lg:flex bg-[#F4FEFD] rounded-t-3xl pkp_structure_content container">

        <aside id="left" class="lg:w-1/4 xl:w-1/4 m-2 col-md-3"></aside>
        <main class="lg:w-1/2 xl:w-1/2 bg-[#DAE4E3] rounded-3xl p-4 m-2 col-xs-12 col-sm-10 col-md-6 relative" role="main"><?php }
}
