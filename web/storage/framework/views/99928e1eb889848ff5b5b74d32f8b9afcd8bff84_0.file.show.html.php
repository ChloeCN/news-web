<?php
/* Smarty version 3.1.36, created on 2020-12-21 10:37:57
  from 'D:\PHPTutorial\WWW\web\resources\views\sub\show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe07b055cae14_90062677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99928e1eb889848ff5b5b74d32f8b9afcd8bff84' => 
    array (
      0 => 'D:\\PHPTutorial\\WWW\\web\\resources\\views\\sub\\show.html',
      1 => 1604663851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe07b055cae14_90062677 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="as">
    <?php if ($_smarty_tpl->tpl_vars['article']->value) {?>
        <div class="as-title"><h1><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h1></div>
        <div class="as-row">
            <span>栏目：
                <?php if ((isset($_smarty_tpl->tpl_vars['category_name']->value))) {?>
                <a href="/index.php/show?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['cid'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['category_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
                <?php } else { ?>
                无
                <?php }?>
            </span>
            <span>作者：<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['author'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
            <span>发表时间：<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['created_at'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
            <span>阅读：<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['views'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
次</span>
        </div>
        <div class="as-content"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</div>
        <?php } else { ?>
        <div class="as-message">
            您查看的文章不存在。<p><a href="/">点我返回首页</a></p>
        </div>
    <?php }?>
</div>

<div class="as-change">
    <span>上一篇：
        <?php if ($_smarty_tpl->tpl_vars['article_prev']->value) {?>
        <a href="/index.php/show?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article_prev']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article_prev']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article_prev']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

        </a>
        <?php } else { ?>
        无
        <?php }?>
    </span>
    <span>下一篇：
        <?php if ($_smarty_tpl->tpl_vars['article_next']->value) {?>
        <a href="/index.php/show?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article_next']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article_next']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article_next']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

        </a>
        <?php } else { ?>
        无
        <?php }?>
    </span>
</div><?php }
}
