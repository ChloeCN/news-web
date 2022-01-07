<?php
/* Smarty version 3.1.36, created on 2020-11-06 11:57:56
  from 'D:\PHPTutorial\WWW\web\resources\views\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa53a44bc3691_46007350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '408f55440dc455ae82023d9bcb17ef439645f327' => 
    array (
      0 => 'D:\\PHPTutorial\\WWW\\web\\resources\\views\\index.html',
      1 => 1604663872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sub/slide.html' => 1,
    'file:sub/list.html' => 1,
    'file:sub/sidebar.html' => 1,
  ),
),false)) {
function content_5fa53a44bc3691_46007350 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11274920385fa53a44bb7f58_23908572', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.html");
}
/* {block "content"} */
class Block_11274920385fa53a44bb7f58_23908572 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11274920385fa53a44bb7f58_23908572',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
    <!-- 轮播图 -->
    <?php $_smarty_tpl->_subTemplateRender("file:sub/slide.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
    <div class="main-body">
        <div class="main-wrap">
            <div class="main-left">
                <!-- 文章列表 -->
                <?php $_smarty_tpl->_subTemplateRender("file:sub/list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>

            <div class="main-right">
                <!-- 侧边栏 -->
                <?php $_smarty_tpl->_subTemplateRender("file:sub/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
