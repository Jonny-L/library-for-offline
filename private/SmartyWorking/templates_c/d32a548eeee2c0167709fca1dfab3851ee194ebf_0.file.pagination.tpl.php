<?php
/* Smarty version 3.1.31, created on 2019-12-16 00:16:15
  from "D:\library\themes\default\general\pagination.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5df6bebf72c9d5_35781822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd32a548eeee2c0167709fca1dfab3851ee194ebf' => 
    array (
      0 => 'D:\\library\\themes\\default\\general\\pagination.tpl',
      1 => 1545696268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df6bebf72c9d5_35781822 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'D:\\library\\private\\Smarty\\plugins\\block.t.php';
if (isset($_smarty_tpl->tpl_vars['pages']->value) && ($_smarty_tpl->tpl_vars['pages']->value != null && count($_smarty_tpl->tpl_vars['pages']->value) > 1)) {?>
    <nav class="m-auto">
        <ul class="pagination">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
                <li class="page-item <?php if ($_smarty_tpl->tpl_vars['page']->value->isCurrent()) {?> active<?php }?>">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['page']->value->getLink();?>
" class="page-link ajax-page">
                        <?php if ($_smarty_tpl->tpl_vars['page']->value->isFirst()) {?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
First Page<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['page']->value->isLast()) {?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Last Page<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['page']->value->isNext()) {?>
                            <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?><i class="fa fa-angle-left"></i><?php } else { ?><i class="fa fa-angle-right"></i><?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['page']->value->isPrevious()) {?>
                            <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?><i class="fa fa-angle-right"></i><?php } else { ?><i class="fa fa-angle-left"></i><?php }?>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['page']->value->getTitle();?>

                        <?php }?>
                    </a>
                </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </ul>
    </nav>
<?php }
}
}
