<?php
/* Smarty version 3.1.31, created on 2019-12-14 19:10:58
  from "/home/pulsans/public_html/addondomains/pulsanscom/subdomains/library.pulsans.com/private/Templates/admin/books/readBook.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5df533c25835d3_60192117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b2159590b60746363275e5c51c71725c4a306b6' => 
    array (
      0 => '/home/pulsans/public_html/addondomains/pulsanscom/subdomains/library.pulsans.com/private/Templates/admin/books/readBook.tpl',
      1 => 1545696258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df533c25835d3_60192117 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once '/home/pulsans/public_html/addondomains/pulsanscom/subdomains/library.pulsans.com/private/Smarty/plugins/block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16580320445df533c2544be7_38931856', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38543665df533c254a527_24769439', 'toolbar');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14650136075df533c254b285_52355579', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18187354575df533c2558bf3_44676693', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17307971945df533c2572882_61074127', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6082064555df533c2579190_45012503', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_16580320445df533c2544be7_38931856 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_16580320445df533c2544be7_38931856',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Read Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'toolbar'} */
class Block_38543665df533c254a527_24769439 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'toolbar' => 
  array (
    0 => 'Block_38543665df533c254a527_24769439',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'toolbar'} */
/* {block 'headerCss'} */
class Block_14650136075df533c254b285_52355579 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_14650136075df533c254b285_52355579',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['book']->value->getEBook() != null && pathinfo($_smarty_tpl->tpl_vars['book']->value->getEBook()->getPath(),@constant('PATHINFO_EXTENSION')) == 'fb2') {?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/fb2js/style.css">
    <?php } elseif ($_smarty_tpl->tpl_vars['book']->value->getEBook() != null && pathinfo($_smarty_tpl->tpl_vars['book']->value->getEBook()->getPath(),@constant('PATHINFO_EXTENSION')) == 'epub') {?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/epubjs/style.css">
    <?php }
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_18187354575df533c2558bf3_44676693 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18187354575df533c2558bf3_44676693',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['book']->value->getEBook() != null && pathinfo($_smarty_tpl->tpl_vars['book']->value->getEBook()->getPath(),@constant('PATHINFO_EXTENSION')) == 'pdf') {?>
        <iframe src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/pdfjs/web/viewer.html?file=<?php echo $_smarty_tpl->tpl_vars['book']->value->getEBook()->getWebPath();?>
" frameborder="0" width="100%" height="650" allowfullscreen=""></iframe>
    <?php } elseif ($_smarty_tpl->tpl_vars['book']->value->getEBook() != null && pathinfo($_smarty_tpl->tpl_vars['book']->value->getEBook()->getPath(),@constant('PATHINFO_EXTENSION')) == 'epub') {?>
        <div style="height: 650px;width: 100%;">
            <div id="outerContainer">
                <div id="sidebarContainer">
                    <div id="toolbarSidebar">
                        <div class="splitToolbarButton toggled">
                            <button id="viewOutline" class="toolbarButton" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Show Document Outline (double-click to expand/collapse all items)<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" tabindex="3">
                                <span><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Document Outline<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                            </button>
                        </div>
                    </div>
                    <div id="sidebarContent">
                        <div id="tocView">
                        </div>
                    </div>
                    <div id="sidebarResizer" class="hidden"></div>
                </div>
                <div id="mainContainer">
                    <div class="toolbar">
                        <div id="toolbarContainer">
                            <div id="toolbarViewer">
                                <div id="toolbarViewerLeft">
                                    <button id="sidebarToggle" class="toolbarButton" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Toggle Sidebar<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" tabindex="11">
                                        <span><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Toggle Sidebar<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                                    </button>
                                    <div class="toolbarButtonSpacer"></div>
                                    <div class="splitToolbarButton">
                                        <button class="toolbarButton pageUp" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Previous Page<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" id="previous" tabindex="13" onclick="Book.prevPage();">
                                            <span><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Previous<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                                        </button>
                                        <div class="splitToolbarButtonSeparator"></div>
                                        <button class="toolbarButton pageDown" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Next Page<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" id="next" tabindex="14" onclick="Book.nextPage();">
                                            <span><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Next<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                                        </button>
                                    </div>
                                </div>
                                <div id="toolbarViewerRight">
                                    <button id="presentationMode" class="toolbarButton presentationMode" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Switch to Presentation Mode<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" tabindex="31">
                                        <span><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Presentation Mode<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                                    </button>
                                </div>
                                <div id="toolbarViewerMiddle">
                                    <div class="splitToolbarButton">
                                        <button id="zoomOut" class="toolbarButton zoomOut" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Zoom Out<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" tabindex="21">
                                            <span><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Zoom Out<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                                        </button>
                                        <div class="splitToolbarButtonSeparator"></div>
                                        <button id="zoomIn" class="toolbarButton zoomIn" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Zoom In<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" tabindex="22">
                                            <span><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Zoom In<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                                        </button>
                                    </div>
                                    <div class="splitToolbarButton">
                                        <div class="splitToolbarButtonSeparator"></div>
                                        <button id="zoomReset" class="toolbarButton zoomReset" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Zoom Reset<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" tabindex="23">
                                            <span><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Zoom Reset<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="viewerContainer" tabindex="0">
                        <div id="viewer" class="pdfViewer">
                            <div id="area"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['book']->value->getEBook() != null && pathinfo($_smarty_tpl->tpl_vars['book']->value->getEBook()->getPath(),@constant('PATHINFO_EXTENSION')) == 'fb2') {?>
        <div style="height: 650px;width: 100%;">
            <div id="outerContainer">
                <div id="sidebarContainer">
                    <div id="toolbarSidebar">
                        <div class="splitToolbarButton toggled">
                            <button id="viewOutline" class="toolbarButton" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Show Document Outline (double-click to expand/collapse all items)<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" tabindex="3">
                                <span><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Document Outline<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                            </button>
                        </div>
                    </div>
                    <div id="sidebarContent">
                        <div id="tocView">
                        </div>
                    </div>
                    <div id="sidebarResizer" class="hidden"></div>
                </div>
                <div id="mainContainer">
                    <div class="toolbar">
                        <div id="toolbarContainer">
                            <div id="toolbarViewer">
                                <div id="toolbarViewerLeft">
                                    <button id="sidebarToggle" class="toolbarButton" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Toggle Sidebar<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" tabindex="11">
                                        <span><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Toggle Sidebar<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                                    </button>
                                    <div class="toolbarButtonSpacer"></div>
                                    <div class="splitToolbarButton">
                                        <button class="toolbarButton pageUp" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Previous Page<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" id="previous" tabindex="13">
                                            <span><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Previous<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                                        </button>
                                        <div class="splitToolbarButtonSeparator"></div>
                                        <button class="toolbarButton pageDown" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Next Page<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" id="next" tabindex="14">
                                            <span><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Next<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                                        </button>
                                    </div>
                                </div>
                                <div id="toolbarViewerRight">
                                    <button id="presentationMode" class="toolbarButton presentationMode" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Switch to Presentation Mode<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" tabindex="31">
                                        <span><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Presentation Mode<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                                    </button>
                                </div>
                                <div id="toolbarViewerMiddle">
                                    <div class="splitToolbarButton">
                                        <button id="zoomOut" class="toolbarButton zoomOut" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Zoom Out<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" tabindex="21">
                                            <span><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Zoom Out<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                                        </button>
                                        <div class="splitToolbarButtonSeparator"></div>
                                        <button id="zoomIn" class="toolbarButton zoomIn" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Zoom In<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" tabindex="22">
                                            <span><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Zoom In<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                                        </button>
                                    </div>
                                    <div class="splitToolbarButton">
                                        <div class="splitToolbarButtonSeparator"></div>
                                        <button id="zoomReset" class="toolbarButton zoomReset" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Zoom Reset<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" tabindex="23">
                                            <span><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Zoom Reset<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="viewerContainer" tabindex="0">
                        <div id="viewer" class="pdfViewer">
                            <div id="area"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
This eBook format is not supported yet.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php }
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_17307971945df533c2572882_61074127 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_17307971945df533c2572882_61074127',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['book']->value->getEBook() != null && pathinfo($_smarty_tpl->tpl_vars['book']->value->getEBook()->getPath(),@constant('PATHINFO_EXTENSION')) == 'fb2') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/fb2js/fb2-reader.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/epubjs/screenfull.min.js"><?php echo '</script'; ?>
>
    <?php } elseif ($_smarty_tpl->tpl_vars['book']->value->getEBook() != null && pathinfo($_smarty_tpl->tpl_vars['book']->value->getEBook()->getPath(),@constant('PATHINFO_EXTENSION')) == 'epub') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/epubjs/zip.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/epubjs/epub.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/epubjs/screenfull.min.js"><?php echo '</script'; ?>
>
    <?php }
}
}
/* {/block 'footerPageJs'} */
/* {block 'footerCustomJs'} */
class Block_6082064555df533c2579190_45012503 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_6082064555df533c2579190_45012503',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['book']->value->getEBook() != null && pathinfo($_smarty_tpl->tpl_vars['book']->value->getEBook()->getPath(),@constant('PATHINFO_EXTENSION')) == 'fb2') {?>
        <?php echo '<script'; ?>
>
            var outerContainer = $('#outerContainer');
            $('#sidebarToggle').on('click', function (e) {
                $(this).toggleClass('toggled');
                $(outerContainer).toggleClass('sidebarOpen');
            });

            $fullscreen = $('#presentationMode');
            if (typeof screenfull !== 'undefined') {
                console.log(screenfull);
                $fullscreen.on("click", function () {
                    screenfull.toggle($('#outerContainer')[0]);
                });
            }
            $("#zoomIn").on('click', function (e) {
                ZoomIn();
            });
            $("#zoomOut").on('click', function (e) {
                ZoomOut();
            });
            $("#zoomReset").on('click', function (e) {
                $("#area").width('816px');
                $('#area').css("font-size", '100%');
            });

            var defaultPercentage = 100;
            var stepPercentage = 10;
            function ZoomIn() {
                $("#area").width($("#area").width() + 150);
                //$("#area").height($("#area").height() + 150);
                var size = $('#area').attr('data-size');
                if (!size) {
                    size = defaultPercentage;
                    $('#area').attr('data-size', defaultPercentage);
                }
                var fontSize = (parseInt(size) + stepPercentage) + "%";
                $('#area').attr('data-size', (parseInt(size) + stepPercentage));
                $('#area').css("font-size", fontSize);
            }
            function ZoomOut() {
                $("#area").width($("#area").width() - 150);
                //$("#area").height($("#area").height() - 150);
                var size = $('#area').attr('data-size');
                if (!size) {
                    size = defaultPercentage;
                    $('#area').attr('data-size', defaultPercentage);
                }
                var fontSize = (parseInt(size) - stepPercentage) + "%";
                $('#area').attr('data-size', (parseInt(size) - stepPercentage));
                $('#area').css("font-size", fontSize);
            }
            function setup_nav_links(toc, current_section) {
                var prev_link = document.getElementById("previous");
                var next_link = document.getElementById("next");
                if (current_section <= 0) {
                    prev_link.style.display = "none";
                } else {
                    prev_link.style.display = "inline";
                }
                if (current_section >= (toc.length - 1)) {
                    next_link.style.display = "none";
                } else {
                    next_link.style.display = "inline";
                }
            }
            function setup_toc(toc, book) {
                document.getElementById("tocView").innerHTML = "";
                for (var i = 0; i < toc.length; i++) {
                    var div = document.createElement("div");
                    div.setAttribute('class', 'outlineItem');
                    document.getElementById("tocView").appendChild(div);

                    var a = document.createElement("a");
                    a.href = "#area";
                    a.onclick = toc_handler(toc, i, book);
                    div.appendChild(a);

                    var title = FicR.getSectionTitle(toc[i]);
                    if (!title) title = "(unnamed)";
                    a.innerHTML = title;
                }
            }

            var current_section = 0;

            function toc_handler(toc, section_num, book) {
                return function () {
                    load_section(toc[section_num], book);
                    setup_nav_links(toc, section_num);
                    current_section = section_num;
                    //return false; // Let the anchor work.
                }
            }

            function load_section(section, book) {
                var content = document.getElementById("area");
                content.innerHTML = "";
                content.appendChild(FicR.render_section(section, book));
            }

            function loadDoc() {
                var xhttp = new XMLHttpRequest();
                xhttp.open("GET", "<?php echo $_smarty_tpl->tpl_vars['book']->value->getEBook()->getWebPath();?>
", false);
                xhttp.send();
                fb2(xhttp);
            }
            function fb2(xml) {
                var xmlDoc = xml.responseXML;
                var parser = new DOMParser();
                xmlDoc = parser.parseFromString(xml.responseText, "application/xml");
                

                var booksrc = parser.parseFromString(
                        xml.responseText, "application/xml");
                var book = new FictionReader(booksrc);
                var toc = book.getTableOfContents();

                setup_toc(toc, book);
                load_section(toc[0], book);
                setup_nav_links(toc, current_section);

                var prev_link = document.getElementById("previous");
                prev_link.addEventListener("click", function () {
                    console.log(current_section);
                    console.log('previous');
                    if (current_section <= 0) {
                        alert("You're at the beginning of the document.");
                    } else {
                        current_section--;
                        load_section(toc[current_section], book);
                        setup_nav_links(toc, current_section);
                    }
                }, false);
                var next_link = document.getElementById("next");
                next_link.addEventListener("click", function () {
                    console.log(current_section);
                    console.log('next');
                    if (current_section >= (toc.length - 1)) {
                        alert("You're at the end of the document.");
                    } else {
                        current_section++;
                        load_section(toc[current_section], book);
                        setup_nav_links(toc, current_section);
                    }
                }, false);
            }
            loadDoc();
        <?php echo '</script'; ?>
>
    <?php } elseif ($_smarty_tpl->tpl_vars['book']->value->getEBook() != null && pathinfo($_smarty_tpl->tpl_vars['book']->value->getEBook()->getPath(),@constant('PATHINFO_EXTENSION')) == 'epub') {?>
        <?php echo '<script'; ?>
>
            var outerContainer = $('#outerContainer');
            $('#sidebarToggle').on('click', function (e) {
                $(this).toggleClass('toggled');
                $(outerContainer).toggleClass('sidebarOpen');
            });

            $fullscreen = $('#presentationMode');
            if (typeof screenfull !== 'undefined') {
                console.log(screenfull);
                $fullscreen.on("click", function () {
                    screenfull.toggle($('#outerContainer')[0]);
                });
            }
            $("#zoomIn").on('click', function (e) {
                ZoomIn();
            });
            $("#zoomOut").on('click', function (e) {
                ZoomOut();
            });
            $("#zoomReset").on('click', function (e) {
                $("#area").width('816px');
                $("#area").height('1056px');
            });

            var defaultPercentage = 100;
            var stepPercentage = 10;
            function ZoomIn() {
                $("#area").width($("#area").width() + 150);
                $("#area").height($("#area").height() + 150);
                var size = $('#area').attr('data-size');
                if (!size) {
                    size = defaultPercentage;
                    $('#area').attr('data-size', defaultPercentage);
                }
                var fontSize = (parseInt(size) + stepPercentage) + "%";
                $('#area').attr('data-size', (parseInt(size) + stepPercentage));
                Book.setStyle("font-size", fontSize);
            }

            function ZoomOut() {
                $("#area").width($("#area").width() - 150);
                $("#area").height($("#area").height() - 150);
                var size = $('#area').attr('data-size');
                if (!size) {
                    size = defaultPercentage;
                    $('#area').attr('data-size', defaultPercentage);
                }
                var fontSize = (parseInt(size) - stepPercentage) + "%";
                $('#area').attr('data-size', (parseInt(size) - stepPercentage));
                Book.setStyle("font-size", fontSize);
            }

            var Book = ePub("<?php echo $_smarty_tpl->tpl_vars['book']->value->getEBook()->getWebPath();?>
", {
                spreads: false,
                styles: {
                    padding: '25px'
                }
            });
            Book.forceSingle();
            Book.renderTo("area");
            Book.setStyle("font-size", "100%");

            var generateTocItems = function (toc, level) {
                var container = document.createElement("div");

                if (!level) level = 1;

                toc.forEach(function (chapter) {
                    var listitem = document.createElement("div"),
                            link = document.createElement("a");
                    toggle = document.createElement("a");
                    listitem.setAttribute('class', 'outlineItem');
                    var subitems;

                    listitem.id = "toc-" + chapter.id;
                    listitem.classList.add('list_item');

                    link.textContent = chapter.label;
                    link.href = chapter.href;

                    link.classList.add('toc_link');

                    listitem.appendChild(link);

                    if (chapter.subitems.length > 0) {
                        level++;
                        subitems = generateTocItems(chapter.subitems, level);
                        toggle.classList.add('toc_toggle');

                        listitem.insertBefore(toggle, link);
                        listitem.appendChild(subitems);
                    }


                    container.appendChild(listitem);

                });

                return container;
            };

            Book.getToc().then(function (toc) {
                var tocItems = generateTocItems(toc);
                $("#tocView").append(tocItems);
            });

            $(document).on('click', '.toc_link', function (e) {
                e.preventDefault();
                Book.goto($(this).attr('href'));
            });

        <?php echo '</script'; ?>
>
    <?php }
}
}
/* {/block 'footerCustomJs'} */
}
