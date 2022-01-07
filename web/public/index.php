<?php
namespace myframe;

// 自动加载
require '../vendor/autoload.php';
// 启动应用
App::getInstance()->run()->send();