<?php
/* Smarty version 3.1.31, created on 2019-12-14 12:27:24
  from "/home/pulsans/public_html/addondomains/pulsanscom/subdomains/library.pulsans.com/private/Templates/admin/roles/permissions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5df4d52c263781_57829589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd807ff4af1cdaa726e9168d707661db90849dcbd' => 
    array (
      0 => '/home/pulsans/public_html/addondomains/pulsanscom/subdomains/library.pulsans.com/private/Templates/admin/roles/permissions.tpl',
      1 => 1545696258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df4d52c263781_57829589 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once '/home/pulsans/public_html/addondomains/pulsanscom/subdomains/library.pulsans.com/private/Smarty/plugins/block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3295501105df4d52c2452d7_08109346', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7545017215df4d52c24ace1_94351110', 'breadcrumb');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3636291705df4d52c24c430_93000177', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7133296775df4d52c24d065_11703386', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6954253745df4d52c261f37_71226364', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8138416385df4d52c262bf7_35538021', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_3295501105df4d52c2452d7_08109346 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3295501105df4d52c2452d7_08109346',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Permissions<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'breadcrumb'} */
class Block_7545017215df4d52c24ace1_94351110 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_7545017215df4d52c24ace1_94351110',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="active"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Permissions<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</li><?php
}
}
/* {/block 'breadcrumb'} */
/* {block 'headerCss'} */
class Block_3636291705df4d52c24c430_93000177 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_3636291705df4d52c24c430_93000177',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_7133296775df4d52c24d065_11703386 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7133296775df4d52c24d065_11703386',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("permissionListUpdate");?>
" method="post" class="">
                    <div class="block-heading">
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-success pull-right mt-3 <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>ml-3<?php } else { ?>mr-3<?php }?> mb-3 save-role">
                                <span class="btn-icon"><i class="far fa-save"></i></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Update Permissions<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            </button>
                        </div>
                    </div>
                    <div class="table-responsive-sm">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                                <th width="40">#</th>
                                <th width="70" class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Public Access<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                <th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Permission Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 (<span class="route-size"></span>)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($_smarty_tpl->tpl_vars['permissions']->value) && $_smarty_tpl->tpl_vars['permissions']->value != null) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permissions']->value, 'permission', false, NULL, 'permission', array (
));
$_smarty_tpl->tpl_vars['permission']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['permission']->value) {
$_smarty_tpl->tpl_vars['permission']->index++;
$__foreach_permission_0_saved = $_smarty_tpl->tpl_vars['permission'];
?>
                                    <tr <?php if ($_smarty_tpl->tpl_vars['permission']->value->isPublic()) {?>class="bg-success text-white"<?php }?>>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['permission']->index+1;?>

                                        </td>
                                        <td class="text-center">
                                            <?php if ($_smarty_tpl->tpl_vars['permission']->value->isPublic()) {?>yes<?php } else { ?>no<?php }?>
                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['permission']->value->getRouteTitle();?>

                                        </td>
                                    </tr>
                                <?php
$_smarty_tpl->tpl_vars['permission'] = $__foreach_permission_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            <?php }?>
                        </tbody>
                    </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_6954253745df4d52c261f37_71226364 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_6954253745df4d52c261f37_71226364',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footerPageJs'} */
/* {block 'footerCustomJs'} */
class Block_8138416385df4d52c262bf7_35538021 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_8138416385df4d52c262bf7_35538021',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            var count = $('table tr').length;
            $('.route-size').text(count);
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerCustomJs'} */
}
