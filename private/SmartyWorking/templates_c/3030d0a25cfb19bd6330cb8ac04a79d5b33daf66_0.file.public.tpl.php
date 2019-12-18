<?php
/* Smarty version 3.1.31, created on 2019-12-15 20:28:23
  from "D:\library\themes\default\public.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5df68957833b71_65045553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3030d0a25cfb19bd6330cb8ac04a79d5b33daf66' => 
    array (
      0 => 'D:\\library\\themes\\default\\public.tpl',
      1 => 1545696268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:general/header.tpl' => 1,
    'file:general/footer.tpl' => 1,
    'file:auth/login.tpl' => 1,
  ),
),false)) {
function content_5df68957833b71_65045553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("publicForRegisteredUsersOnly") && isset($_smarty_tpl->tpl_vars['user']->value)) || !$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("publicForRegisteredUsersOnly") || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'userRegistration') {?>
    <!DOCTYPE html>
    <html lang="en" class="" dir="<?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>rtl<?php } else { ?>ltr<?php }?>">
    <head <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7324966735df68957827019_86177962', 'headerPrefix');
?>
>
        <meta charset="UTF-8">
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14510317245df68957827d13_58779391', 'metaTitle');
?>
</title>
        <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11470154705df689578289e7_91413966', 'metaDescription');
?>
">
        <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19053911845df68957829308_12261412', 'metaKeywords');
?>
">
        <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("favIconFilePath");?>
"/>
        <meta name=viewport content="width=device-width, initial-scale=1">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4785746985df6895782a6d1_42230977', 'socialNetworksMeta');
?>

        <?php $_smarty_tpl->_assignInScope('colorSchemas', $_smarty_tpl->tpl_vars['theme']->value->getColorSchemas());
?>
        <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/bootstrap.rtl.min.css">
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/plugins.css">
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/style.rtl.css">
        <?php } else { ?>
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/bootstrap.min.css">
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/plugins.css">
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/style.css">
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['theme']->value->getActiveColorSchema() == 'dark') {?>
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/themes/dark.css">
        <?php }?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13437787415df6895782ea69_04121353', 'headerCss');
?>

    </head>
    <body>
    <?php $_smarty_tpl->_subTemplateRender('file:general/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20996681285df6895782fa56_77573195', 'content');
?>

    <?php $_smarty_tpl->_subTemplateRender('file:general/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9967500635df689578309e4_00768781', 'footerJs');
?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/plugins.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/custom.js"><?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14943338985df689578325c8_74830911', 'customJs');
?>

    </body>
    </html>
<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:auth/login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
/* {block 'headerPrefix'} */
class Block_7324966735df68957827019_86177962 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerPrefix' => 
  array (
    0 => 'Block_7324966735df68957827019_86177962',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerPrefix'} */
/* {block 'metaTitle'} */
class Block_14510317245df68957827d13_58779391 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaTitle' => 
  array (
    0 => 'Block_14510317245df68957827d13_58779391',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Library CMS<?php
}
}
/* {/block 'metaTitle'} */
/* {block 'metaDescription'} */
class Block_11470154705df689578289e7_91413966 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaDescription' => 
  array (
    0 => 'Block_11470154705df689578289e7_91413966',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaDescription'} */
/* {block 'metaKeywords'} */
class Block_19053911845df68957829308_12261412 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaKeywords' => 
  array (
    0 => 'Block_19053911845df68957829308_12261412',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaKeywords'} */
/* {block 'socialNetworksMeta'} */
class Block_4785746985df6895782a6d1_42230977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'socialNetworksMeta' => 
  array (
    0 => 'Block_4785746985df6895782a6d1_42230977',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'socialNetworksMeta'} */
/* {block 'headerCss'} */
class Block_13437787415df6895782ea69_04121353 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_13437787415df6895782ea69_04121353',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_20996681285df6895782fa56_77573195 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20996681285df6895782fa56_77573195',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'footerJs'} */
class Block_9967500635df689578309e4_00768781 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerJs' => 
  array (
    0 => 'Block_9967500635df689578309e4_00768781',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/popper.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php
}
}
/* {/block 'footerJs'} */
/* {block 'customJs'} */
class Block_14943338985df689578325c8_74830911 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customJs' => 
  array (
    0 => 'Block_14943338985df689578325c8_74830911',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'customJs'} */
}
