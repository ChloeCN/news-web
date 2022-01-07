<?php
/* Smarty version 3.1.36, created on 2020-11-06 11:57:56
  from 'D:\PHPTutorial\WWW\web\resources\views\sub\list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa53a44bf8979_33526988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e9298a51f5ed4907131b8df2b7f47a7fbf80884' => 
    array (
      0 => 'D:\\PHPTutorial\\WWW\\web\\resources\\views\\sub\\list.html',
      1 => 1604663794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa53a44bf8979_33526988 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="al">
    <?php if ((isset($_smarty_tpl->tpl_vars['category_name']->value))) {?>
    <div class="al-title"><h1><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['category_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h1></div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['article']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
    <div class="al-each">
        <div class="al-info">
            <a href="/index.php/show?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['v']->value['image']) {?>
        <!-- 显示文章封面图 -->
        <div class="al-img">
            <a href="/index.php/show?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><img src="/uploads/images/<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" style="width: 200px;height: 160px;" alt="点击阅读文章" ></a>
        </div>
        <?php }?>
        <div class="al-more"><span>作者：<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['author'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
|发表于:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['created_at'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span></div>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
    <div class="al-message">
        该栏目暂时没有内容。<p><a href="/">点击返回首页</a></p>
    </div>
    <?php }?>
</div>
<div class="pagelist"><?php echo $_smarty_tpl->tpl_vars['page_html']->value;?>
</div>
<?php }
}
