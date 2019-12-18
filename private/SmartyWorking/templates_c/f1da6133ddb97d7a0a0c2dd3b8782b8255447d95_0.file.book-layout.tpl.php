<?php
/* Smarty version 3.1.31, created on 2019-12-14 20:19:50
  from "/home/pulsans/public_html/addondomains/pulsanscom/subdomains/library.pulsans.com/private/Templates/admin/books/book-layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5df543e6153343_10275698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1da6133ddb97d7a0a0c2dd3b8782b8255447d95' => 
    array (
      0 => '/home/pulsans/public_html/addondomains/pulsanscom/subdomains/library.pulsans.com/private/Templates/admin/books/book-layout.tpl',
      1 => 1545696258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df543e6153343_10275698 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once '/home/pulsans/public_html/addondomains/pulsanscom/subdomains/library.pulsans.com/private/Smarty/plugins/block.t.php';
if (!is_callable('smarty_function_unset')) require_once '/home/pulsans/public_html/addondomains/pulsanscom/subdomains/library.pulsans.com/private/Smarty/plugins/function.unset.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7594773255df543e611d0c7_36085053', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9618374495df543e6122cb0_62762857', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10356681305df543e61266b4_79933869', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18294873055df543e614b246_38339351', 'footerPageJs');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7376105285df543e614d4b2_69929369', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_7594773255df543e611d0c7_36085053 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7594773255df543e611d0c7_36085053',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book Layout<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'headerCss'} */
class Block_9618374495df543e6122cb0_62762857 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_9618374495df543e6122cb0_62762857',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/jquery/jquery-ui.min.css" rel="stylesheet"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/gridstack/gridstack.css" rel="stylesheet"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/gridstack/gridstack-extra.min.css" rel="stylesheet"/>
<?php
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_10356681305df543e61266b4_79933869 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10356681305df543e61266b4_79933869',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['isDemoMode']->value === true) {?>
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-info text-center">In the demo version you can't change book layout.</div>
            </div>
        </div>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['bookLayoutSettings']->value) && $_smarty_tpl->tpl_vars['bookLayoutSettings']->value->getLayoutContainers() != null) {?>
        <?php $_smarty_tpl->_assignInScope('tempBookVisibleFieldList', $_smarty_tpl->tpl_vars['bookVisibleFieldList']->value);
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bookLayoutSettings']->value->getLayoutContainers(), 'container', false, NULL, 'container', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['container']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['container']->value->getElements() != null) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['container']->value->getElements(), 'element', false, NULL, 'element', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
?>
                    <?php echo smarty_function_unset(array('array'=>'tempBookVisibleFieldList','index'=>$_smarty_tpl->tpl_vars['element']->value->getName()),$_smarty_tpl);?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    <?php }?>
    <div class="card p-l-10 p-t-30 p-b-10 p-r-10">
        <div class="book-layout-additional-elements">
            <span class="title"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Not Used Elements<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tempBookVisibleFieldList']->value, 'title', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['title']->value) {
?>
                <div class="grid-stack-item" data-gs-min-width="2" data-gs-max-height="1" data-gs-x="0" data-gs-y="0" data-gs-width="4" data-gs-height="1" data-gs-title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" data-gs-name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                    <div class="grid-stack-item-content form-element">
                        <div class="form-element-header"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
                        <button class="form-element-remove"><i class="ti-trash"></i></button>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </div>
    </div>
    <?php if (isset($_smarty_tpl->tpl_vars['bookLayoutSettings']->value) && $_smarty_tpl->tpl_vars['bookLayoutSettings']->value->getLayoutContainers() != null) {?>
        <div class="book-layout">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="grid-stack grid-stack-12 content-block">
                            <?php if ($_smarty_tpl->tpl_vars['bookLayoutSettings']->value->getContainer('content')->getElements() != null) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bookLayoutSettings']->value->getContainer('content')->getElements(), 'element', false, NULL, 'element', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
?>
                                    <div class="grid-stack-item" data-gs-min-width="3" data-gs-max-height="1" data-gs-x="<?php echo $_smarty_tpl->tpl_vars['element']->value->getX();?>
" data-gs-y="<?php echo $_smarty_tpl->tpl_vars['element']->value->getY();?>
" data-gs-width="<?php echo $_smarty_tpl->tpl_vars['element']->value->getWidth();?>
" data-gs-height="<?php echo $_smarty_tpl->tpl_vars['element']->value->getHeight();?>
" data-gs-title="<?php echo $_smarty_tpl->tpl_vars['element']->value->getTitle();?>
" data-gs-name="<?php echo $_smarty_tpl->tpl_vars['element']->value->getName();?>
">
                                        <div class="grid-stack-item-content form-element">
                                            <div class="form-element-header">
                                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['element']->value->getTitle();
$_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                            </div>
                                            <button class="form-element-remove"><i class="ti-trash"></i></button>
                                        </div>
                                    </div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="grid-stack grid-stack-4 sidebar-block">
                            <?php if ($_smarty_tpl->tpl_vars['bookLayoutSettings']->value->getContainer('sidebar')->getElements() != null) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bookLayoutSettings']->value->getContainer('sidebar')->getElements(), 'element', false, NULL, 'element', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
?>
                                    <div class="grid-stack-item" data-gs-min-width="2" data-gs-max-height="1" data-gs-x="<?php echo $_smarty_tpl->tpl_vars['element']->value->getX();?>
" data-gs-y="<?php echo $_smarty_tpl->tpl_vars['element']->value->getY();?>
" data-gs-width="<?php echo $_smarty_tpl->tpl_vars['element']->value->getWidth();?>
" data-gs-height="<?php echo $_smarty_tpl->tpl_vars['element']->value->getHeight();?>
" data-gs-title="<?php echo $_smarty_tpl->tpl_vars['element']->value->getTitle();?>
" data-gs-name="<?php echo $_smarty_tpl->tpl_vars['element']->value->getName();?>
">
                                        <div class="grid-stack-item-content form-element">
                                            <div class="form-element-header">
                                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['element']->value->getTitle();
$_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                            </div>
                                            <button class="form-element-remove"><i class="ti-trash"></i></button>
                                        </div>
                                    </div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>

    <div class="row">
        <div class="col-lg-12">
            <button class="btn btn-primary m-t-20 pull-right" id="save-layout"<?php if ($_smarty_tpl->tpl_vars['isDemoMode']->value === true) {?> disabled<?php }?>>
                <span class="btn-icon"><i class="far fa-save"></i></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Save<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            </button>
        </div>
    </div>

<?php
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_18294873055df543e614b246_38339351 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_18294873055df543e614b246_38339351',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/jquery/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/lodash/lodash.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/gridstack/gridstack.all.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/gridstack/gridstack.jQueryUI.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerPageJs'} */
/* {block 'footerCustomJs'} */
class Block_7376105285df543e614d4b2_69929369 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_7376105285df543e614d4b2_69929369',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            var options = {
                width: 12,
                float: false,
                cellHeight: 80,
                verticalMargin: 0,
                acceptWidgets: '.grid-stack-item',
                resizable: {
                    handles: 'se, sw'
                }
            };
            $('.content-block').gridstack(options);
            $('.sidebar-block').gridstack(_.defaults({
                float: false,
                width: 4
            }, options));

            $(document).on('click', '.form-element-remove', function (e) {
                e.preventDefault();
                var item = $(this).closest('.grid-stack-item');
                var itemClone = $(this).closest('.grid-stack-item').clone();
                $('.book-layout-additional-elements').append(itemClone);
                $(item).remove();
                $('.book-layout-additional-elements .grid-stack-item').draggable({
                    refreshPositions: true,
                    revert: 'invalid',
                    handle: '.grid-stack-item-content',
                    scroll: false,
                    appendTo: 'body'
                });
            });

            $('.book-layout-additional-elements .grid-stack-item').draggable({
                refreshPositions: true,
                revert: 'invalid',
                handle: '.grid-stack-item-content',
                scroll: false,
                appendTo: 'body'
            });

            function getGridLayout(searchBlock) {
                var items = [];
                $(searchBlock).each(function () {
                    var $this = $(this);
                    items.push({
                        x: $this.attr('data-gs-x'),
                        y: $this.attr('data-gs-y'),
                        width: $this.attr('data-gs-width'),
                        height: $this.attr('data-gs-height'),
                        title: $this.attr('data-gs-title'),
                        name: $this.attr('data-gs-name')
                    });
                });

                return JSON.stringify(items);
            }
            <?php if ($_smarty_tpl->tpl_vars['isDemoMode']->value === false) {?>
            var bookLayoutUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookLayout",array());?>
';
            $('#save-layout').on('click', function (e) {
                e.preventDefault();
                console.log();
                var contentBlock = getGridLayout($('.content-block .grid-stack-item.ui-draggable'));
                var sidebarBlock = getGridLayout($('.sidebar-block .grid-stack-item.ui-draggable'));
                $.ajax({
                    dataType: 'json',
                    method: 'POST',
                    data: {
                        content: contentBlock,
                        sidebar: sidebarBlock
                    },
                    url: bookLayoutUrl,
                    beforeSend: function (data) {
                        app.card.loading.start('.card');
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                app.notification('success', data.success);
                            }
                        }
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    },
                    complete: function (data) {
                        app.card.loading.finish('.card');
                    }
                });
            });
            <?php }?>
        });
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'footerCustomJs'} */
}
