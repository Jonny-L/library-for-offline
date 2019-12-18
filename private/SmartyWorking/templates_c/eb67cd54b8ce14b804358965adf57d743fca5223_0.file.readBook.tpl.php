<?php
/* Smarty version 3.1.31, created on 2019-12-14 12:33:01
  from "/home/pulsans/public_html/addondomains/pulsanscom/subdomains/library.pulsans.com/themes/default/books/readBook.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5df4d67d5e1650_55150397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb67cd54b8ce14b804358965adf57d743fca5223' => 
    array (
      0 => '/home/pulsans/public_html/addondomains/pulsanscom/subdomains/library.pulsans.com/themes/default/books/readBook.tpl',
      1 => 1545696268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df4d67d5e1650_55150397 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once '/home/pulsans/public_html/addondomains/pulsanscom/subdomains/library.pulsans.com/private/Smarty/plugins/block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13101200325df4d67d594886_54995313', 'metaTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3739461295df4d67d59c998_21005783', 'metaDescription');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_454609705df4d67d59d581_40559724', 'metaKeywords');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3583305075df4d67d59e3a3_22605972', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19874117625df4d67d5a9323_10718499', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10555527895df4d67d5cff07_85110666', 'footerJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10524312455df4d67d5d76b3_70290307', 'customJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'public.tpl');
}
/* {block 'metaTitle'} */
class Block_13101200325df4d67d594886_54995313 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaTitle' => 
  array (
    0 => 'Block_13101200325df4d67d594886_54995313',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['book']->value->getTitle();
if ($_smarty_tpl->tpl_vars['book']->value->getSubTitle() != null) {?> <?php echo $_smarty_tpl->tpl_vars['book']->value->getSubTitle();
}
}
}
/* {/block 'metaTitle'} */
/* {block 'metaDescription'} */
class Block_3739461295df4d67d59c998_21005783 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaDescription' => 
  array (
    0 => 'Block_3739461295df4d67d59c998_21005783',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaDescription'} */
/* {block 'metaKeywords'} */
class Block_454609705df4d67d59d581_40559724 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaKeywords' => 
  array (
    0 => 'Block_454609705df4d67d59d581_40559724',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaKeywords'} */
/* {block 'headerCss'} */
class Block_3583305075df4d67d59e3a3_22605972 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_3583305075df4d67d59e3a3_22605972',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['book']->value->getEBook() != null && pathinfo($_smarty_tpl->tpl_vars['book']->value->getEBook()->getPath(),@constant('PATHINFO_EXTENSION')) == 'fb2') {?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/fb2js/style.css">
    <?php } elseif ($_smarty_tpl->tpl_vars['book']->value->getEBook() != null && pathinfo($_smarty_tpl->tpl_vars['book']->value->getEBook()->getPath(),@constant('PATHINFO_EXTENSION')) == 'epub') {?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/epubjs/style.css">
    <?php }
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_19874117625df4d67d5a9323_10718499 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19874117625df4d67d5a9323_10718499',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="single-book">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class=""><?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();
if ($_smarty_tpl->tpl_vars['book']->value->getSubTitle() != null) {?> <?php echo $_smarty_tpl->tpl_vars['book']->value->getSubTitle();
}?></h1>
                </div>
                <div class="col-lg-4 text-right">
                    <a href="<?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("bookUrlType")) {
echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookViewPublic",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));
} else {
echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookViewViaUrlPublic",array("bookUrl"=>$_smarty_tpl->tpl_vars['book']->value->getUrl()));
}?>" class="btn btn-outline-primary"><i class="far fa-file-alt mr-1" aria-hidden="true"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book Description<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                </div>
                <div class="col-lg-12 mt-3">
                    <?php if ($_smarty_tpl->tpl_vars['book']->value->getEBook() != null && pathinfo($_smarty_tpl->tpl_vars['book']->value->getEBook()->getPath(),@constant('PATHINFO_EXTENSION')) == 'pdf') {?>
                        <iframe src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/pdfjs/web/viewer.html?file=<?php echo $_smarty_tpl->tpl_vars['book']->value->getEBook()->getWebPath();?>
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

                    <?php }?>
                    
                </div>
            </div>
        </div>
    </section>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerJs'} */
class Block_10555527895df4d67d5cff07_85110666 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerJs' => 
  array (
    0 => 'Block_10555527895df4d67d5cff07_85110666',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['book']->value->getEBook() != null && pathinfo($_smarty_tpl->tpl_vars['book']->value->getEBook()->getPath(),@constant('PATHINFO_EXTENSION')) == 'fb2') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/fb2js/fb2-reader.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/epubjs/screenfull.min.js"><?php echo '</script'; ?>
>
    <?php } elseif ($_smarty_tpl->tpl_vars['book']->value->getEBook() != null && pathinfo($_smarty_tpl->tpl_vars['book']->value->getEBook()->getPath(),@constant('PATHINFO_EXTENSION')) == 'epub') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/epubjs/zip.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/epubjs/epub.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/epubjs/screenfull.min.js"><?php echo '</script'; ?>
>
    <?php }
}
}
/* {/block 'footerJs'} */
/* {block 'customJs'} */
class Block_10524312455df4d67d5d76b3_70290307 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customJs' => 
  array (
    0 => 'Block_10524312455df4d67d5d76b3_70290307',
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
/* {/block 'customJs'} */
}
