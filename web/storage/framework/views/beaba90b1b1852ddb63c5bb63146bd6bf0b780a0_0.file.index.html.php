<?php
/* Smarty version 3.1.36, created on 2020-11-06 10:43:59
  from 'D:\PHPTutorial\WWW\web\resources\views\admin\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa528efb0c635_44490490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'beaba90b1b1852ddb63c5bb63146bd6bf0b780a0' => 
    array (
      0 => 'D:\\PHPTutorial\\WWW\\web\\resources\\views\\admin\\index.html',
      1 => 1604745439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa528efb0c635_44490490 (Smarty_Internal_Template $_smarty_tpl) {
?> <div class="main-content">
        <div class="main-title">
        <h2>首页</h2>
    </div>
    <div class="mian-section">
        <div class="panel panel-default">
            <div class="panel-heading">欢迎访问</div>
            <div class="panel-body">欢迎进入陈泳羽内容管理系统</div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">服务器信息</div>
            <ul class="list-group">
                <li class="list-group-item">系统环境:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['server_info']->value['server_version'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li>
                <li class="list-group-item">MYSQL版本:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['server_info']->value['mysql_version'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li>
                <li class="list-group-item">文件上传限制:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['server_info']->value['upload_max_filesize'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li>
                <li class="list-group-item">脚本执行时限:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['server_info']->value['max_execution_time'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li>
                <li class="list-group-item">服务器时间:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['server_info']->value['server_time'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li>
            </ul>
        </div>
</div>
</div>
<?php echo '<script'; ?>
>
    main.menuActive('index');
<?php echo '</script'; ?>
><?php }
}
