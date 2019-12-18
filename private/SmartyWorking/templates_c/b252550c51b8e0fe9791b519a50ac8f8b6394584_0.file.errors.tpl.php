<?php
/* Smarty version 3.1.31, created on 2019-12-16 01:34:53
  from "D:\library\themes\default\errors.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5df6d12d82e6e7_63228783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b252550c51b8e0fe9791b519a50ac8f8b6394584' => 
    array (
      0 => 'D:\\library\\themes\\default\\errors.tpl',
      1 => 1545696268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df6d12d82e6e7_63228783 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_SESSION['messages']) && count($_SESSION['messages']) > 0) {?>
    <div class="row">
        <div class="col-sm-12">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['messages'], 'message');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
?>
                <div class="alert <?php if ($_smarty_tpl->tpl_vars['message']->value->getStatus() == 'INFO') {?>alert-success<?php } elseif (strcmp($_smarty_tpl->tpl_vars['message']->value->getStatus(),'WARNING') === 0) {?>alert-warning<?php } else { ?>alert-danger<?php }?> alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo $_smarty_tpl->tpl_vars['message']->value->getMessage();?>

                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </div>
    </div>
<?php }
}
}
