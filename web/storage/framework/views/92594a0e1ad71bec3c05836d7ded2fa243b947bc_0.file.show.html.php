<?php
/* Smarty version 3.1.36, created on 2020-11-06 11:08:50
  from 'D:\PHPTutorial\WWW\web\resources\views\show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa52ec25f0dc3_19238124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92594a0e1ad71bec3c05836d7ded2fa243b947bc' => 
    array (
      0 => 'D:\\PHPTutorial\\WWW\\web\\resources\\views\\show.html',
      1 => 1604660170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sub/show.html' => 1,
    'file:sub/sidebar.html' => 1,
  ),
),false)) {
function content_5fa52ec25f0dc3_19238124 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9919158145fa52ec25e9e95_08801885', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.html");
}
/* {block "content"} */
class Block_9919158145fa52ec25e9e95_08801885 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9919158145fa52ec25e9e95_08801885',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="main-body">
    <div class="main-wrap">
        <div class="main-left">
            <?php $_smarty_tpl->_subTemplateRender("file:sub/show.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="main-right">
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
