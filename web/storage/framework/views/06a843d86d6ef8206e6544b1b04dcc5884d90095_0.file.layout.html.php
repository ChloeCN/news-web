<?php
/* Smarty version 3.1.36, created on 2020-11-06 11:32:04
  from 'D:\PHPTutorial\WWW\web\resources\views\admin\layout.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa534346ba204_36800197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06a843d86d6ef8206e6544b1b04dcc5884d90095' => 
    array (
      0 => 'D:\\PHPTutorial\\WWW\\web\\resources\\views\\admin\\layout.html',
      1 => 1604745489,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa534346ba204_36800197 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/common/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
    <!--导入新style-->
    <link rel="stylesheet" href="/static/common/font-awesome-4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/static/common/toastr.js/2.1.4/toastr.min.css">
    <link rel="stylesheet" href="/static/admin/css/main.css">
    <?php echo '<script'; ?>
 src="/static/common/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/static/common/twitter-bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/static/common/toastr.js/2.1.4/toastr.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/static/admin/js/main.js"><?php echo '</script'; ?>
>
    <title>陈泳羽的内容管理系统</title>
</head>
<body>
    <!--顶部导航-->
    <nav class="navbar navbar-default navbar-static-top main-nav" role="navigation">
        <div class="navbr-header">
            <!--button>span.icon-bar*4-->
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="navbar-brand">内容管理系统</div>
        </div>
        <div class="collapse navbar-collapse">
            <div class="main-sidebar">
                <!--左侧菜单-->
                <ul class="nav main-menu">
                    <li><a href="/index.php/admin/index/index"><i class="fa fa-home fa-fw"></i>首页</a></li>   
                    <li><a href="/index.php/admin/category/index"><i class="fa fa-list fa-fw"></i>栏目管理</a></li> 
                    <li><a href="/index.php/admin/article/index"><i class="fa fa-file-o fa-fw"></i>文章管理</a></li> 
                </ul>
            </div>
            <!--右上角按钮-->
            <ul class="nav navbar-right">
                <li><a href="javacript:;"><i class="fa fa-user fa-fw"></i><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></li>
                <li><a href="/index.php/admin/login/logout"><i class="fa fa-power-off fa-fw"></i>退出</a></li>
            </ul>
        </div>
    </nav>

    <div class="main-container">
    <div class="main-content">
    </div>
</div>
            <div class="main-loading"style="display: none;">
            <div class="dot-carousel"></div>
        </div>
    </div>
    <?php echo '<script'; ?>
>
        main.layout();//初始化后台布局基本逻辑
        main.contentRefresh();//页面打开后，加载内容区域
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
