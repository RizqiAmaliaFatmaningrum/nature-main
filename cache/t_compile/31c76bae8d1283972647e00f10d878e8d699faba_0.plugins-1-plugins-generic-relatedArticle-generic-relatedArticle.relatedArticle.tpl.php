<?php
/* Smarty version 4.3.1, created on 2023-12-19 03:06:24
  from 'plugins-1-plugins-generic-relatedArticle-generic-relatedArticle:relatedArticle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6580faa0257558_19880120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31c76bae8d1283972647e00f10d878e8d699faba' => 
    array (
      0 => 'plugins-1-plugins-generic-relatedArticle-generic-relatedArticle:relatedArticle.tpl',
      1 => 1698645862,
      2 => 'plugins-1-plugins-generic-relatedArticle-generic-relatedArticle',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6580faa0257558_19880120 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
        <h2 id="related_articles" class="animatedParent" data-sequence='300' >
        <span class="title animated fadeInUp" data-id='1'><?php echo $_smarty_tpl->tpl_vars['relatedArticleTitle']->value;?>
 </span> 
        <span class="pull-right animated fadeIn slow" data-id='2'"><small> <i> based on the article keywords </i> </small> </span></h2>

        <?php if ($_smarty_tpl->tpl_vars['relatedSubmission']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['relatedSubmission']->value, 'article', false, 'key');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>      
                <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['article_summary']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('article'=>$_smarty_tpl->tpl_vars['article']->value,'showDatePublished'=>true,'hideImagePreview'=>$_smarty_tpl->tpl_vars['relatedArticleHideImage']->value,'hideDimensionsCitation'=>true), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php } else { ?>

        <small style="color: grey">No Related Submission Found </small>

        <?php }?>
</div><?php }
}
