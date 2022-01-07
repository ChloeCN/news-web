<?php
/* Smarty version 3.1.36, created on 2020-11-06 10:44:02
  from 'D:\PHPTutorial\WWW\web\resources\views\admin\category_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa528f2eb1cd2_48131735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70da6345f9972798f10f302fd85e5485c9d434ba' => 
    array (
      0 => 'D:\\PHPTutorial\\WWW\\web\\resources\\views\\admin\\category_list.html',
      1 => 1604229110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa528f2eb1cd2_48131735 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-title">
        <h2>栏目管理</h2>
    </div>
    <div class="main-section form-inline"><a href="/index.php/admin/category/edit" class="btn btn-success">+ 新增</a></div>
    <div class="main-section"></div>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>栏目名称</th>
                    <th>排序值</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <tr>
                    <td><a href="/index.php/admin/category/edit?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></td>
                    <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['sort'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                    <td>
                        <a href="/index.php/admin/category/edit?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" style="margin-right:5xp">编辑</a>
                        <a href="/index.php/admin/category/delete?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="j-del text-danger">删除</a>
                    </td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php } else { ?>
                <tr>
                    <td colspan="3" class="text-center">列表为空</td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    <?php echo '<script'; ?>
>
        main.menuActive('category');
        $('.j-del').click(function(){
            if(confirm('您确定要删除此项吗？')){
                main.ajaxPost($(this).attr('href'),function(){
                    main.contentRefresh();
                })
            }
            return false;
        })
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
