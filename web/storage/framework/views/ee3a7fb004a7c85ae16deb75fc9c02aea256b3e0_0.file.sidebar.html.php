<?php
/* Smarty version 3.1.36, created on 2020-12-21 10:37:51
  from 'D:\PHPTutorial\WWW\web\resources\views\sub\sidebar.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe07aff7364e9_96656388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee3a7fb004a7c85ae16deb75fc9c02aea256b3e0' => 
    array (
      0 => 'D:\\PHPTutorial\\WWW\\web\\resources\\views\\sub\\sidebar.html',
      1 => 1604928875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe07aff7364e9_96656388 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="si">
        <!-- 热门标签 -->
        <div class="si-each">
            <div class="si-title">热门标签</div>
            <div class="si-p1">
                <a href="javascript:;">PHP</a>
                <a href="javascript:;">JavaScript</a>
                <a href="javascript:;">MySQL</a>
                <a href="javascript:;">Python</a>
                <a href="javascript:;">Java</a>
                <a href="javascript:;">C++</a>
                <a href="javascript:;">Linux</a>
                <a href="javascript:;">shell</a>
            </div>
        </div>
    <!-- 最新文章 -->
    <div class="si-each">
        <div class="si-title">最新文章</div>
        <div class="si-p2">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article_new']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <p><a href="/index.php/show?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></p>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <!-- 最热文章 -->
    <div class="si-each">
        <div class="si-title"><span class="si-p3-top"> TOP 7 </span>最热文章</div>
        <div class="si-p3">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article_hot']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <p><a href="/index.php/show?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></p>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div><?php }
}
