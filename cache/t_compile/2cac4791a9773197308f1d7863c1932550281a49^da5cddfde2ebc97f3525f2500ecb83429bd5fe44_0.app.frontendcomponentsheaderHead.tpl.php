<?php
/* Smarty version 4.3.1, created on 2023-12-08 09:40:29
  from 'app:frontendcomponentsheaderHead.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6572d67d2e2882_98574834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da5cddfde2ebc97f3525f2500ecb83429bd5fe44' => 
    array (
      0 => 'app:frontendcomponentsheaderHead.tpl',
      1 => 1701934818,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6572d67d2e2882_98574834 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\openjournal\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\openjournal\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>
 <head>
 <meta charset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['defaultCharset']->value ));?>
">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="generator" content="<?php echo smarty_modifier_replace(preg_replace('!\s+!u', ' ',call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['pageTitleTranslated']->value ?: '') ))),'	','');
if ((($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value )) ?? null)===null||$tmp==='' ? "index" ?? null : $tmp) != 'index' && $_smarty_tpl->tpl_vars['currentContext']->value && $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedName()) {?> | <?php echo $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedName();
}?>- Novelty 1.1 by openjournaltheme.com">
	<meta name="title" content="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['pageTitleTranslated']->value ?: '');
if ((($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value )) ?? null)===null||$tmp==='' ? "index" ?? null : $tmp) != 'index' && $_smarty_tpl->tpl_vars['currentContext']->value && $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedName()) {?>	| <?php echo $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedName();
}?>">	
 <title>
	 <?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['pageTitleTranslated']->value ?: '');?>

	 	 <?php if ((($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value )) ?? null)===null||$tmp==='' ? "index" ?? null : $tmp) != 'index' && $_smarty_tpl->tpl_vars['currentContext']->value && $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedName()) {?> | <?php echo $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedName();?>
	<?php }?>
 </title>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_header'][0], array( array('context'=>"frontend"),$_smarty_tpl ) );?>

   <?php if ($_smarty_tpl->tpl_vars['requestedOp']->value != 'index' && $_smarty_tpl->tpl_vars['currentContext']->value && $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedName()) {?>
 <meta name="description" content="<?php echo smarty_modifier_replace(smarty_modifier_regex_replace(strip_tags((string) $_smarty_tpl->tpl_vars['description']->value),"/(<|&(amp;)?lt;).*?(>|&(amp;)?gt;)/",''),'&#039;','');?>
">
 <meta name="og:description" content="<?php echo smarty_modifier_replace(smarty_modifier_regex_replace(strip_tags((string) $_smarty_tpl->tpl_vars['description']->value),"/(<|&(amp;)?lt;).*?(>|&(amp;)?gt;)/",''),'&#039;','');?>
">	
 <meta name="copyright" content="<?php echo $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedName();?>
 - <?php echo $_smarty_tpl->tpl_vars['publisherName']->value;?>
" />	
  <?php if ($_smarty_tpl->tpl_vars['requestedPage']->value == 'article') {?>
 <meta name="keywords" content="<?php if (!empty($_smarty_tpl->tpl_vars['keywords']->value[$_smarty_tpl->tpl_vars['currentLocale']->value])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['keywords']->value, 'keyword');
$_smarty_tpl->tpl_vars['keyword']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyword']->value) {
$_smarty_tpl->tpl_vars['keyword']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['keyword']->value, 'keywordItem', false, NULL, 'keyword', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['keywordItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keywordItem']->value) {
$_smarty_tpl->tpl_vars['keywordItem']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_keyword']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_keyword']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_keyword']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_keyword']->value['total'];
echo trim(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['keywordItem']->value )));
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_keyword']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_keyword']->value['last'] : null)) {?>,<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>">		
 <!-- Open Graph / Facebook -->
 <meta property="og:type" content="article">
 <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['siteProtocol']->value;?>
://<?php echo $_SERVER['HTTP_HOST'];
echo $_SERVER['REQUEST_URI'];?>
">
 <meta property="og:title" content="<?php echo trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle() ?: ''));?>
">
 <meta property="og:description" content="<?php echo trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['article']->value->getLocalizedAbstract() ?: ''));?>
">
 <?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImage()) {?>
 <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['journalPublicFolder']->value;
echo $_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImage();?>
">        
 <?php }?>
 <!-- Twitter -->
 <meta property="twitter:card" content="summary_large_image">
 <meta property="twitter:url" content="<?php echo $_smarty_tpl->tpl_vars['siteProtocol']->value;?>
://<?php echo $_SERVER['HTTP_HOST'];
echo $_SERVER['REQUEST_URI'];?>
">
 <meta property="twitter:title" content="<?php echo trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle() ?: ''));?>
">
 <meta property="twitter:description" content="<?php echo trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['article']->value->getLocalizedAbstract() ?: ''));?>
">
 <?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImage()) {?>
 <meta property="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['journalPublicFolder']->value;
echo $_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImage();?>
">
 <?php }?>
 <?php }?>
  <?php } else { ?>    
 <meta name="description" content="<?php echo strip_tags((string) $_smarty_tpl->tpl_vars['about']->value);?>
">
 <meta name="og:description" content="<?php echo strip_tags((string) $_smarty_tpl->tpl_vars['about']->value);?>
">
 <meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value;?>
" />
 <meta name="copyright" content="<?php echo $_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value;?>
" />  
 <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['siteProtocol']->value;?>
://<?php echo $_SERVER['HTTP_HOST'];
echo $_SERVER['REQUEST_URI'];?>
">
 <meta property="twitter:url" content="<?php echo $_smarty_tpl->tpl_vars['siteProtocol']->value;?>
://<?php echo $_SERVER['HTTP_HOST'];
echo $_SERVER['REQUEST_URI'];?>
">
 <?php }?>
 
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_stylesheet'][0], array( array('context'=>"frontend"),$_smarty_tpl ) );?>


</head>

<?php }
}
