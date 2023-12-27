<?php
/* Smarty version 4.3.1, created on 2023-12-16 03:38:54
  from 'app:frontendobjectsgalley_link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_657d0dbe6ff452_40983060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9190456890661656c2db668fc3c363ee4354c517' => 
    array (
      0 => 'app:frontendobjectsgalley_link.tpl',
      1 => 1702690605,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657d0dbe6ff452_40983060 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['journalOverride']->value) {?>
	<?php $_smarty_tpl->_assignInScope('currentJournal', $_smarty_tpl->tpl_vars['journalOverride']->value);
}?>


<?php if ($_smarty_tpl->tpl_vars['galley']->value->isPdfGalley()) {?>
	<?php $_smarty_tpl->_assignInScope('type', "pdf");
} else { ?>
	<?php $_smarty_tpl->_assignInScope('type', "file");
}?>


<?php if ($_smarty_tpl->tpl_vars['parent']->value instanceOf Issue) {?>
	<?php $_smarty_tpl->_assignInScope('page', "issue");?>
	<?php $_smarty_tpl->_assignInScope('parentId', $_smarty_tpl->tpl_vars['parent']->value->getBestIssueId());?>
	<?php $_smarty_tpl->_assignInScope('path', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['parentId']->value,$_smarty_tpl->tpl_vars['galley']->value->getBestGalleyId() )));
} else { ?>
	<?php $_smarty_tpl->_assignInScope('page', "article");?>
	<?php $_smarty_tpl->_assignInScope('parentId', $_smarty_tpl->tpl_vars['parent']->value->getBestId());?>
		<?php if ($_smarty_tpl->tpl_vars['publication']->value && $_smarty_tpl->tpl_vars['publication']->value->getId() !== $_smarty_tpl->tpl_vars['parent']->value->getCurrentPublication()->getId()) {?>
		<?php $_smarty_tpl->_assignInScope('path', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['parentId']->value,"version",$_smarty_tpl->tpl_vars['publication']->value->getId(),$_smarty_tpl->tpl_vars['galley']->value->getBestGalleyId() )));?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('path', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['parentId']->value,$_smarty_tpl->tpl_vars['galley']->value->getBestGalleyId() )));?>
	<?php }
}?>

<?php if (!$_smarty_tpl->tpl_vars['hasAccess']->value) {?>
	<?php if ($_smarty_tpl->tpl_vars['restrictOnlyPdf']->value && $_smarty_tpl->tpl_vars['type']->value == "pdf") {?>
		<?php $_smarty_tpl->_assignInScope('restricted', "1");?>
	<?php } elseif (!$_smarty_tpl->tpl_vars['restrictOnlyPdf']->value) {?>
		<?php $_smarty_tpl->_assignInScope('restricted', "1");?>
	<?php }
}?>

<button class="relative bg-[#FF8E06] text-white font-bold py-2 px-4 rounded-2xl ml-4">
    <a class="flex items-center <?php if ($_smarty_tpl->tpl_vars['isSupplementary']->value) {?>obj_galley_link_supplementary<?php } else {
}?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['type']->value ));
if ($_smarty_tpl->tpl_vars['restricted']->value) {?> restricted<?php }?>" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>$_smarty_tpl->tpl_vars['page']->value,'op'=>'view','path'=>$_smarty_tpl->tpl_vars['path']->value),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['labelledBy']->value) {?>aria-labelledby=<?php echo $_smarty_tpl->tpl_vars['labelledBy']->value;
}?>>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
            <path strokeLinecap="round" strokeLinejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
        </svg>
                <?php if ($_smarty_tpl->tpl_vars['restricted']->value) {?>
            <span class="pkp_screen_reader">
                <?php if ($_smarty_tpl->tpl_vars['purchaseArticleEnabled']->value) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"reader.subscriptionOrFeeAccess"),$_smarty_tpl ) );?>

                <?php } else { ?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"reader.subscriptionAccess"),$_smarty_tpl ) );?>

                <?php }?>
            </span>
        <?php }?>

        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['galley']->value->getGalleyLabel() ));?>


        <?php if ($_smarty_tpl->tpl_vars['restricted']->value && $_smarty_tpl->tpl_vars['purchaseFee']->value && $_smarty_tpl->tpl_vars['purchaseCurrency']->value) {?>
            <span class="purchase_cost">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"reader.purchasePrice",'price'=>$_smarty_tpl->tpl_vars['purchaseFee']->value,'currency'=>$_smarty_tpl->tpl_vars['purchaseCurrency']->value),$_smarty_tpl ) );?>

            </span>
        <?php }?>
    </a>
</button>

<?php }
}
