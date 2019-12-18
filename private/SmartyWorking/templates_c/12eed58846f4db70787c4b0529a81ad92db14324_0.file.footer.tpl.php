<?php
/* Smarty version 3.1.31, created on 2019-12-15 20:28:24
  from "D:\library\themes\default\general\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5df68958492302_88777074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12eed58846f4db70787c4b0529a81ad92db14324' => 
    array (
      0 => 'D:\\library\\themes\\default\\general\\footer.tpl',
      1 => 1545696268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df68958492302_88777074 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p><?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("footerCredits");?>
</p>
            </div>
        </div>
    </div>
</footer>
<button class="back-to-top" id="back-to-top" role="button"><i class="ti-angle-up"></i></button><?php }
}
