<?php
/* Smarty version 3.1.31, created on 2019-12-16 00:16:31
  from "D:\library\themes\default\custom\pages\contacts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5df6becf4fc791_77423267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f4b57b2f8b091421e9469dad327ab6304a09bf1' => 
    array (
      0 => 'D:\\library\\themes\\default\\custom\\pages\\contacts.tpl',
      1 => 1545696268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df6becf4fc791_77423267 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'D:\\library\\private\\Smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_replace')) require_once 'D:\\library\\private\\Smarty\\plugins\\modifier.replace.php';
if (!is_callable('smarty_block_t')) require_once 'D:\\library\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4093593295df6becf4b5444_96366293', 'metaTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15309914465df6becf4bcdc9_27087884', 'metaDescription');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12823881825df6becf4bdde8_51762940', 'metaKeywords');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14005564135df6becf4bf942_24304116', 'headerCss');
?>

<?php $_smarty_tpl->_assignInScope('pageURL', ((string)$_smarty_tpl->tpl_vars['SiteURL']->value).((string)$_SERVER['REQUEST_URI']));
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20747733705df6becf4dc571_33166279', 'socialNetworksMeta');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6714862585df6becf4ed6a4_35085094', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_914603995df6becf4f58b2_05597943', 'footerJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14110506155df6becf4f69e9_02389376', 'customJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'public.tpl');
}
/* {block 'metaTitle'} */
class Block_4093593295df6becf4b5444_96366293 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaTitle' => 
  array (
    0 => 'Block_4093593295df6becf4b5444_96366293',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value->getMetaTitle()) {
echo $_smarty_tpl->tpl_vars['page']->value->getMetaTitle();
} else {
echo $_smarty_tpl->tpl_vars['page']->value->getTitle();
}
}
}
/* {/block 'metaTitle'} */
/* {block 'metaDescription'} */
class Block_15309914465df6becf4bcdc9_27087884 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaDescription' => 
  array (
    0 => 'Block_15309914465df6becf4bcdc9_27087884',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['page']->value->getMetaDescription();
}
}
/* {/block 'metaDescription'} */
/* {block 'metaKeywords'} */
class Block_12823881825df6becf4bdde8_51762940 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaKeywords' => 
  array (
    0 => 'Block_12823881825df6becf4bdde8_51762940',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['page']->value->getMetaKeywords();
}
}
/* {/block 'metaKeywords'} */
/* {block 'headerCss'} */
class Block_14005564135df6becf4bf942_24304116 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_14005564135df6becf4bf942_24304116',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerCss'} */
/* {block 'socialNetworksMeta'} */
class Block_20747733705df6becf4dc571_33166279 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'socialNetworksMeta' => 
  array (
    0 => 'Block_20747733705df6becf4dc571_33166279',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta property="og:title" content="<?php if ($_smarty_tpl->tpl_vars['page']->value->getMetaTitle()) {
echo $_smarty_tpl->tpl_vars['page']->value->getMetaTitle();
} else {
echo $_smarty_tpl->tpl_vars['page']->value->getTitle();
}?>"/>
    <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['SiteURL']->value;
if ($_smarty_tpl->tpl_vars['page']->value->getImage() != null) {
echo $_smarty_tpl->tpl_vars['page']->value->getImage()->getWebPath('');
} else {
echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noImageFilePath");
}?>"/>
    <meta property="og:description" content="<?php echo smarty_modifier_replace(smarty_modifier_truncate($_smarty_tpl->tpl_vars['page']->value->getMetaDescription(),200),'"','');?>
"/>
    <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['pageURL']->value;?>
"/>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php if ($_smarty_tpl->tpl_vars['page']->value->getMetaTitle()) {
echo $_smarty_tpl->tpl_vars['page']->value->getMetaTitle();
} else {
echo $_smarty_tpl->tpl_vars['page']->value->getTitle();
}?>">
    <meta name="twitter:description" content="<?php echo smarty_modifier_replace(smarty_modifier_truncate($_smarty_tpl->tpl_vars['page']->value->getMetaDescription(),200),'"','');?>
">
    <meta name="twitter:image:src" content="<?php echo $_smarty_tpl->tpl_vars['SiteURL']->value;
if ($_smarty_tpl->tpl_vars['page']->value->getImage() != null) {
echo $_smarty_tpl->tpl_vars['page']->value->getImage()->getWebPath('');
} else {
echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noImageFilePath");
}?>">
<?php
}
}
/* {/block 'socialNetworksMeta'} */
/* {block 'content'} */
class Block_6714862585df6becf4ed6a4_35085094 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6714862585df6becf4ed6a4_35085094',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="page contacts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1><?php echo $_smarty_tpl->tpl_vars['page']->value->getTitle();?>
</h1>
                </div>
                <div class="col-lg-12">
                    <?php if ($_smarty_tpl->tpl_vars['page']->value->getContent()) {?>
                        <div class="page-content">
                            <?php echo $_smarty_tpl->tpl_vars['page']->value->getContent();?>

                        </div>
                    <?php }?>
                    <form id="contact-form" method="post" class="validate mb-3 contact-form">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input class="form-control" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Email<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" type="email" name="email">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input class="form-control" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Full Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" type="text" name="name">
                            </div>
                            <div class="col-md-12 mb-3">
                                <input class="form-control" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Subject<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" type="text" name="subject">
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control mb-3" name="message" rows="3" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Message<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"></textarea>
                                <button type="submit" class="btn btn-primary submit"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Send Message<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerJs'} */
class Block_914603995df6becf4f58b2_05597943 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerJs' => 
  array (
    0 => 'Block_914603995df6becf4f58b2_05597943',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/jquery.validate.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerJs'} */
/* {block 'customJs'} */
class Block_14110506155df6becf4f69e9_02389376 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customJs' => 
  array (
    0 => 'Block_14110506155df6becf4f69e9_02389376',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        var contactFormUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userMessageCreate",array());?>
';
        $(".validate").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                }
            }
        });
        $('.submit').on('click', function (e) {
            e.preventDefault();
            var form = $(this).closest('form');
            if (form.valid()) {
                $.ajax({
                    dataType: 'json',
                    method: 'POST',
                    data: form.serialize(),
                    url: contactFormUrl,
                    beforeSend: function () {
                        $(form).append('<div class="form-message"><i class="fa fa-spinner fa-spin"></i><span class="sr-only"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Loading...<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Sending, Please Wait..<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 </div>');
                    },
                    success: function (data) {
                        app.ajax_redirect(data);
                        if (data.error) {
                            $(form).find('.form-message').addClass('error').text('<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Failed to send your message. Please try later or contact the administrator<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("adminEmail");?>
');
                        } else {
                            $(form).find('.form-message').addClass('success').text('<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Your message was sent successfully. Thanks.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                            $(form).find('input, textarea').val('');
                        }
                    },
                    error: function (jqXHR, exception) {
                        $(form).find('.form-message').addClass('error').text('<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Failed to send your message. Please try later or contact the administrator<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("adminEmail");?>
');
                    },
                    complete: function () {
                        setTimeout(function () {
                            $(form).find('.form-message').fadeOut().remove();
                        }, 10000);
                    }
                });
            }
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'customJs'} */
}
