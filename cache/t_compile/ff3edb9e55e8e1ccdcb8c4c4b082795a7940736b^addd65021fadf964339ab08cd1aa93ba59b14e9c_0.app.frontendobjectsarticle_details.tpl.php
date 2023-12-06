<?php
/* Smarty version 4.3.1, created on 2023-12-06 04:45:59
  from 'app:frontendobjectsarticle_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_656fee778eec70_11496792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'addd65021fadf964339ab08cd1aa93ba59b14e9c' => 
    array (
      0 => 'app:frontendobjectsarticle_details.tpl',
      1 => 1701834358,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656fee778eec70_11496792 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\nature-main1\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
    <?php if (!$_smarty_tpl->tpl_vars['heading']->value) {?>
    <?php $_smarty_tpl->_assignInScope('heading', "h3");?>
    <?php }?>
    <article class="obj_article_details">
                <?php if ($_smarty_tpl->tpl_vars['publication']->value->getData('status') !== (defined('STATUS_PUBLISHED') ? constant('STATUS_PUBLISHED') : null)) {?>
        <div class="cmp_notification notice">
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "submissionUrl", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"workflow",'op'=>"access",'path'=>$_smarty_tpl->tpl_vars['article']->value->getId()),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.viewingPreview",'url'=>$_smarty_tpl->tpl_vars['submissionUrl']->value),$_smarty_tpl ) );?>

        </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['currentPublication']->value->getId() !== $_smarty_tpl->tpl_vars['publication']->value->getId()) {?>
        <div class="cmp_notification notice">
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "latestVersionUrl", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['article']->value->getBestId()),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.outdatedVersion",'datePublished'=>smarty_modifier_date_format($_smarty_tpl->tpl_vars['publication']->value->getData('datePublished'),$_smarty_tpl->tpl_vars['dateFormatShort']->value),'urlRecentVersion'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['latestVersionUrl']->value ))),$_smarty_tpl ) );?>

        </div>
        <?php }?>

        <h1 class="page_title">
            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publication']->value->getLocalizedTitle() ));?>

        </h1>

                <div class="flex-2">
            <div class="w-30 h-20 bg-[#F4FEFD] rounded-2xl flex p-4 m-2" style="width: 200px; height: 80px;">
                <h1 class="text-lg m-auto text-[#00504F] font-bold pr-12">Galleys</h1>
                <div class="w-10 h-10 bg-[#00504F] rounded-full flex ">
                    <a href="#" class="text-lg m-auto text-white"><svg xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 17.25L12 21m0 0l-3.75-3.75M12 21V3" />
                        </svg>

                    </a>
                </div>
            </div>
        </div>

                <?php if ($_smarty_tpl->tpl_vars['publication']->value->getData('datePublished')) {?>
        <div class="item published">
            <section class="sub_item bg-[#F4FEFD] rounded-2xl text-[#00504F] flex flex-col pl-5"
                style="width: 300px; height: 80px;">
                <h2 class="label ">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submissions.published"),$_smarty_tpl ) );?>

                </h2>
                <div class="value">
                                        <?php if ($_smarty_tpl->tpl_vars['firstPublication']->value->getID() === $_smarty_tpl->tpl_vars['publication']->value->getId()) {?>
                    <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['firstPublication']->value->getData('datePublished'),$_smarty_tpl->tpl_vars['dateFormatShort']->value);?>
</span>
                                        <?php } else { ?>
                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.updatedOn",'datePublished'=>smarty_modifier_date_format($_smarty_tpl->tpl_vars['firstPublication']->value->getData('datePublished'),$_smarty_tpl->tpl_vars['dateFormatShort']->value),'dateUpdated'=>smarty_modifier_date_format($_smarty_tpl->tpl_vars['publication']->value->getData('datePublished'),$_smarty_tpl->tpl_vars['dateFormatShort']->value)),$_smarty_tpl ) );?>
</span>
                    <?php }?>
                </div>
            </section>
            <?php if (count($_smarty_tpl->tpl_vars['article']->value->getPublishedPublications()) > 1) {?>
            <section class="sub_item versions">
                <h2 class="label">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.versions"),$_smarty_tpl ) );?>

                </h2>
                <ul class="value">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_reverse($_smarty_tpl->tpl_vars['article']->value->getPublishedPublications()), 'iPublication');
$_smarty_tpl->tpl_vars['iPublication']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['iPublication']->value) {
$_smarty_tpl->tpl_vars['iPublication']->do_else = false;
?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "name", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.versionIdentity",'datePublished'=>smarty_modifier_date_format($_smarty_tpl->tpl_vars['iPublication']->value->getData('datePublished'),$_smarty_tpl->tpl_vars['dateFormatShort']->value),'version'=>$_smarty_tpl->tpl_vars['iPublication']->value->getData('version')),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <li>
                        <?php if ($_smarty_tpl->tpl_vars['iPublication']->value->getId() === $_smarty_tpl->tpl_vars['publication']->value->getId()) {?>
                        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['iPublication']->value->getId() === $_smarty_tpl->tpl_vars['currentPublication']->value->getId()) {?>
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['article']->value->getBestId()),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
                        <?php } else { ?>
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"view",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getBestId(),"version",$_smarty_tpl->tpl_vars['iPublication']->value->getId() ))),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
                        <?php }?>
                    </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </section>
            <?php }?>
        </div>
        <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['issue']->value || $_smarty_tpl->tpl_vars['section']->value || $_smarty_tpl->tpl_vars['categories']->value) {?>
        <div class="item issue">

            <?php if ($_smarty_tpl->tpl_vars['issue']->value) {?>
            <section class="sub_item bg-[#F4FEFD] rounded-2xl text-[#00504F] flex flex-col pl-5"
                style="width: 300px; height: 80px;">
                <h2 class="label">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"issue.issue"),$_smarty_tpl ) );?>

                </h2>
                <div class="value inline-block bg-[#00504F] text-white rounded-2xl text-white px-4" style="width: 280px;">
                    <a class="title" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"issue",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
                        <?php echo $_smarty_tpl->tpl_vars['issue']->value->getIssueIdentification();?>

                    </a>
                </div>
            </section>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['section']->value) {?>
            <section class="sub_item bg-[#F4FEFD] rounded-2xl text-[#00504F] flex flex-col pl-5 "
                style="width: 300px; height: 80px;">
                <h2 class="label">
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

        <?php if ($_smarty_tpl->tpl_vars['publication']->value->getLocalizedData('coverImage') || ($_smarty_tpl->tpl_vars['issue']->value && $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImage())) {?>
        <div class="item cover_image">
            <div class="sub_item">
                <?php if ($_smarty_tpl->tpl_vars['publication']->value->getLocalizedData('coverImage')) {?>
                <?php $_smarty_tpl->_assignInScope('coverImage', $_smarty_tpl->tpl_vars['publication']->value->getLocalizedData('coverImage'));?>
                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publication']->value->getLocalizedCoverImageUrl($_smarty_tpl->tpl_vars['article']->value->getData('contextId')) ));?>
"
                    alt="<?php echo (($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['coverImage']->value['altText'] )) ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" style="width: 400px; height: auto;"
                    class="mx-auto border rounded-lg">
                <ul class="flex space-x-4 mt-6 mb-0 justify-center text-teal-800 font-bold">
                    <li>
                        <section class="label flex hover:bg-[#6FF7F429] border-solid">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.5 3.75H6A2.25 2.25 0 003.75 6v1.5M16.5 3.75H18A2.25 2.25 0 0120.25 6v1.5m0 9V18A2.25 2.25 0 0118 20.25h-1.5m-9 0H6A2.25 2.25 0 013.75 18v-1.5M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <h2 class="label">
                                <a href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"article.abstract"),$_smarty_tpl ) );?>
</a>
                            </h2>
                        </section>
                    </li>
                    <li>
                        <section class="sub_item citation_display flex hover:bg-[#6FF7F429]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75" />
                            </svg>
                            <h2 class="label">
                                <a href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.howToCite"),$_smarty_tpl ) );?>
</a>
                            </h2>
                        </section>
                    </li>
                    <li>
                        <section class="sub_item flex hover:bg-[#6FF7F429]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                            </svg>
                            <h2 class="label">
                                <a href="#">Matrics</a>
                            </h2>
                        </section>
                    </li>
                    <li>
                        <section class="sub_item flex hover:bg-[#6FF7F429]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                            </svg>
                            <h2 class="label">
                                <a href="#">References</a>
                            </h2>
                        </section>
                    </li>
                </ul>
                <?php } else { ?>
                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"issue",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageUrl() ));?>
"
                        alt="<?php echo (($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText() )) ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                </a>
                <?php }?>
            </div>
        </div>
                <div class="container mx-md">
            <div class="bg-[#00504F] text-white rounded-2xl"
                style="max-width: 700px; margin: 0 auto; display: flex; align-items: center; text-align: justify;">
                <?php if ($_smarty_tpl->tpl_vars['publication']->value->getLocalizedData('abstract')) {?>
                <section class="item abstract">
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['publication']->value->getLocalizedData('abstract') ));?>

                </section>
                <?php }?>
            </div>

                        <iframe class="mt-2 rounded-2xl" style="display: block; margin: 0 auto;"
                src="http://localhost/nature-main1/index.php/MS/article/view/3/3" width="700px"
                height="900px"></iframe>


        </div>
        <?php }?>
        
        
                                
                                
                                
                
                                            
                                                                                                                                                                                
                                
                                
                                
                                            <?php }
}
