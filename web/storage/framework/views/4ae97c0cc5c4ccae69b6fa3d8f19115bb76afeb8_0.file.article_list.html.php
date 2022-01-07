<?php
/* Smarty version 3.1.36, created on 2020-11-06 11:38:53
  from 'D:\PHPTutorial\WWW\web\resources\views\admin\article_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa535cd85d8e7_29976778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ae97c0cc5c4ccae69b6fa3d8f19115bb76afeb8' => 
    array (
      0 => 'D:\\PHPTutorial\\WWW\\web\\resources\\views\\admin\\article_list.html',
      1 => 1604839147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa535cd85d8e7_29976778 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-title">
    <h2>文章管理</h2>
</div>
<div class="main-section form-inline">
    <a href="/index.php/admin/article/edit" class="btn btn-success">+ 新增</a> 
</div>
<div class="main-section">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>标题</th>
                <th>作者</th>
                <th>已发布</th>
                <th>阅读量</th>
                <th>创建时间</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($_smarty_tpl->tpl_vars['article']->value) {?>
            
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <tr>
                <td><a href="/index.php/admin/article/edit?=id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></td>
                <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['author'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['v']->value['show']) {?>是<?php } else { ?>否<?php }?></td>
                <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['views'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['created_at'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                <td>
                    <a href="/index.php/admin/article/edit?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" style="margin-right:5xp">编辑</a>
                    <a href="/index.php/admin/article/delete?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="j-del text-danger">删除</a>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
            <tr><td class="text-center" colspan="6">列表为空</td></tr>
            <?php }?>
        </tbody>
    </table>
    <div class="text-center"><?php echo $_smarty_tpl->tpl_vars['page_html']->value;?>
</div>
</div>
<?php echo '<script'; ?>
>
    main.menuActive('article');
    $('.j-del').click(function(){
        if(confirm('您确定要删除此项？')){
            main.ajaxPost($(this).attr('href'),function(){
                main.contentRefresh();
            });
        }
        return false;
    });
<?php echo '</script'; ?>
><?php }
}
