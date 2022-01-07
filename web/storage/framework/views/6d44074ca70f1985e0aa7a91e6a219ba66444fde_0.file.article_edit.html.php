<?php
/* Smarty version 3.1.36, created on 2020-11-06 11:38:46
  from 'D:\PHPTutorial\WWW\web\resources\views\admin\article_edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa535c6b77c92_39233475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d44074ca70f1985e0aa7a91e6a219ba66444fde' => 
    array (
      0 => 'D:\\PHPTutorial\\WWW\\web\\resources\\views\\admin\\article_edit.html',
      1 => 1604927591,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa535c6b77c92_39233475 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-title">
    <h2><?php if ($_smarty_tpl->tpl_vars['id']->value) {?>修改<?php } else { ?>添加<?php }?>文章</h2>
</div>
<div class="main-section">
    <form action="/index.php/admin/article/save" method="POST" class="j-form">
        <ul class="form-group form-inline">
            <li>
                <input type="text" class="form-control" name="title" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" required>
                <label>文章标题</label>
            </li>
            <li>
                <select name="cid" class="form-control" style="min-width: 196px;">
                    <option value="0">---</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                    <option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['id'] === $_smarty_tpl->tpl_vars['data']->value['cid']) {?>selected<?php }?>><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <label>所属分类</label>
            </li>
            <li>
                <input type="text" class="form-control" name="author" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['author'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" required>
                <label>作者</label>
            </li>
            <li>
                <label>封面图</label>
                <input type="file" name="image">
            </li>
            <?php if ($_smarty_tpl->tpl_vars['data']->value['image']) {?>
            <li>
                <ul class="main-imglist">
                    <li>
                        <div class="main-imglist-item">
                            <a href="/index.php/uploads/images/<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" target="_blank">
                                <img src="/uploads/images/<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"></a>
                        </div>
                    </li>
                </ul>
            </li>
            <?php }?>
            <li>
                <label>文章内容</label>
                <div><textarea name="content" class="j-content"  style="height: 500px"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['content'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</textarea></div>
            </li>
            <li>
                <label><input type="checkbox" name="show" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['show']) {?>checked<?php }?>>发布</label>
            </li>
            <li>
                <input type="hidden" name="id" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                <input type="submit" value="提交表单" class="btn btn-primary">
                <a href="/index.php/admin/article/index" class="btn btn-default">返回列表</a>
            </li>
        </ul>
    </form>
</div>
<?php echo '<script'; ?>
>
    main.loadJS('/static/admin/editor/ueditor1.4.3.3/ueditor.config.js');
    main.loadJS('/static/admin/editor/ueditor1.4.3.3/ueditor.all.min.js');
    main.loadJS('/static/admin/editor/main.editor.js');
    main.editor($('.j-content'), 'article_edit', function (opt) {
        opt.UEDITOR_HOME_URL = '/static/admin/editor/ueditor1.4.3.3/'
    }, function (editor) {
        $('.j-form').submit(function () {
            editor.sync();
        });
    });
    main.menuActive('article');
    main.ajaxForm('.j-form', function () {
        main.content('/index.php/admin/article/index');
    })
<?php echo '</script'; ?>
><?php }
}
