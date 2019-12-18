<?php
/* Smarty version 3.1.31, created on 2019-12-14 20:20:58
  from "/home/pulsans/public_html/addondomains/pulsanscom/subdomains/library.pulsans.com/private/Templates/admin/smsSettings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5df5442ae22417_96937563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e52740f43894747051abfd14043446d189e8c432' => 
    array (
      0 => '/home/pulsans/public_html/addondomains/pulsanscom/subdomains/library.pulsans.com/private/Templates/admin/smsSettings.tpl',
      1 => 1545696258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df5442ae22417_96937563 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once '/home/pulsans/public_html/addondomains/pulsanscom/subdomains/library.pulsans.com/private/Smarty/plugins/block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20020482715df5442adf1312_47482354', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14312898245df5442adf7120_03927987', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13679613775df5442adf8066_33485746', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8531774415df5442ae20826_22193676', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5061665645df5442ae215c6_85962560', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_20020482715df5442adf1312_47482354 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20020482715df5442adf1312_47482354',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
SMS Settings<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'headerCss'} */
class Block_14312898245df5442adf7120_03927987 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_14312898245df5442adf7120_03927987',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_13679613775df5442adf8066_33485746 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13679613775df5442adf8066_33485746',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            
            <?php if ($_smarty_tpl->tpl_vars['smsSettings']->value != null) {?>
                <?php $_smarty_tpl->_assignInScope('providers', $_smarty_tpl->tpl_vars['smsSettings']->value->getProviders());
?>
                <form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("smsSettings");?>
" method="post" class="validate" id="general-form">
                    <div class="card">
                        <ul class="nav nav-tabs customtab settings-nav-tabs" role="tablist">
                            <?php if ($_smarty_tpl->tpl_vars['providers']->value != null && count($_smarty_tpl->tpl_vars['providers']->value) > 0) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['providers']->value, 'provider', false, NULL, 'provider', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['provider']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_provider']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_provider']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_provider']->value['index'];
?>
                                    <?php if ($_smarty_tpl->tpl_vars['provider']->value !== null) {?>
                                        <li class="nav-item">
                                            <label class="switch switch-sm" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Status (Active/Inactive)<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                                <input type="checkbox" name="activeProvider" class="active-provider" value="<?php echo $_smarty_tpl->tpl_vars['provider']->value->getName();?>
"<?php if (strcmp($_smarty_tpl->tpl_vars['smsSettings']->value->getActiveProvider(),$_smarty_tpl->tpl_vars['provider']->value->getName()) == 0) {?> checked<?php }?>>
                                            </label>
                                            <a class="nav-link <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_provider']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_provider']->value['first'] : null)) {?>active<?php }?>" data-toggle="tab" href="#provider-<?php echo $_smarty_tpl->tpl_vars['provider']->value->getName();?>
" role="tab" aria-expanded="true">
                                                <span class="hidden-xs-down"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['provider']->value->getTitle();
$_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                                            </a>
                                        </li>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            <?php }?>
                        </ul>
                        <?php if ($_smarty_tpl->tpl_vars['providers']->value != null && count($_smarty_tpl->tpl_vars['providers']->value) > 0) {?>
                            <div class="tab-content">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['providers']->value, 'provider', false, NULL, 'provider', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['provider']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_provider']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_provider']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_provider']->value['index'];
?>
                                    <?php if ($_smarty_tpl->tpl_vars['provider']->value !== null) {?>
                                        <div class="tab-pane p-20 <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_provider']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_provider']->value['first'] : null)) {?>active<?php }?>" id="provider-<?php echo $_smarty_tpl->tpl_vars['provider']->value->getName();?>
" role="tabpanel" aria-expanded="true">
                                            <input type="hidden" name="providers[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_provider']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_provider']->value['index'] : null);?>
][name]" class="provider-name" value="<?php echo $_smarty_tpl->tpl_vars['provider']->value->getName();?>
">
                                            <input type="hidden" name="providers[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_provider']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_provider']->value['index'] : null);?>
][title]" class="provider-title" value="<?php echo $_smarty_tpl->tpl_vars['provider']->value->getTitle();?>
">
                                            <?php $_smarty_tpl->_assignInScope('customFields', $_smarty_tpl->tpl_vars['provider']->value->getTitledConfig());
?>
                                            <div class="row">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customFields']->value, 'field', false, NULL, 'field', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['field']->value->getTitle();?>
</label>
                                                            <input type="text" class="form-control" name="providers[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_provider']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_provider']->value['index'] : null);?>
][<?php echo $_smarty_tpl->tpl_vars['field']->value->getKey();?>
]" value="<?php echo $_smarty_tpl->tpl_vars['field']->value->getValue();?>
">
                                                        </div>
                                                    </div>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                            </div>
                                        </div>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            </div>
                        <?php }?>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Sender<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                <input type="text" class="form-control" name="sender" value="<?php echo $_smarty_tpl->tpl_vars['smsSettings']->value->getSender();?>
">
                            </div>
                            <div class="form-group">
                                <label for="content"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Default Message Template For Notify Delayed Users<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                <textarea name="defaultMessage" class="form-control"><?php echo $_smarty_tpl->tpl_vars['smsSettings']->value->getDefaultMessage();?>
</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <button type="submit" class="btn btn-success pull-right mt-1 mb-4">
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
                </form>
            <?php }?>
        </div>
    </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_8531774415df5442ae20826_22193676 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_8531774415df5442ae20826_22193676',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footerPageJs'} */
/* {block 'footerCustomJs'} */
class Block_5061665645df5442ae215c6_85962560 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_5061665645df5442ae215c6_85962560',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        /*$('.settings-nav-tabs .nav-item').on('click', function (e) {
            $('.settings-nav-tabs .nav-item').addClass('active').not(this).removeClass('active');
        });*/
        $('.active-provider').on("change", function() {
            $('.active-provider').not(this).prop('checked', false);
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerCustomJs'} */
}
