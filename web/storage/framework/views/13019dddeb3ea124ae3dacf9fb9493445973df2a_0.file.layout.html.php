<?php
/* Smarty version 3.1.36, created on 2020-12-21 10:37:51
  from 'D:\PHPTutorial\WWW\web\resources\views\layout.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe07aff6de822_48339650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13019dddeb3ea124ae3dacf9fb9493445973df2a' => 
    array (
      0 => 'D:\\PHPTutorial\\WWW\\web\\resources\\views\\layout.html',
      1 => 1604928075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe07aff6de822_48339650 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 - 高校新闻网</title>
    <link rel="stylesheet" href="/static/css/style.css">
    <?php echo '<script'; ?>
 src="/static/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/static/js/common.js"><?php echo '</script'; ?>
>
</head>
<body>
    <!-- 页面顶部 -->
    <div class="top">
        <div class="top-container">
            <div class="top-logo">
                <a href="./">
                    <img src="/static/images/logo.png" alt="内容管理系统">
                </a>
            </div>
            <div class="top-nav">
                <a href="/" class="<?php if ($_smarty_tpl->tpl_vars['id']->value == 0) {?>curr<?php }?>">首页</a>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <a href="/?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['id']->value == $_smarty_tpl->tpl_vars['v']->value['id']) {?>curr<?php }?>"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="top-toggle jq-toggle-btn"><i></i><i></i><i></i></div>
        </div>
    </div>
    <!-- 页面内容 -->
    <div class="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12653796775fe07aff6dc3e2_05694544', 'content');
?>

    </div>
    <!-- 页面尾部 -->
    <div class="footer">高校新闻网 版权所有 陈泳羽 <a href="/index.php/admin/login/index">后台管理</a></div>
</body>
</html><?php }
/* {block 'content'} */
class Block_12653796775fe07aff6dc3e2_05694544 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12653796775fe07aff6dc3e2_05694544',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
