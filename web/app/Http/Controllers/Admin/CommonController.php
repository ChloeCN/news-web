<?php
namespace App\Http\Controllers\Admin;
use myframe\Controller;
class CommonController extends Controller{
    protected $checkLoginExclude = [];
    protected function initialize()
    {
        //启动
        session_start();
        //为项目创建Session；统一保存到cms数组中
        if(!isset($_SESSION['cms'])){
            $_SESSION = ['cms' => []];
        }

        //检查用户登录
        $action = $this -> request -> action();
        if(in_array($action,$this->checkLoginExclude)){
            return;
        }
        if(empty($_SESSION['cms']['admin'])){
            $this->redirect('/index.php/admin/login/index');
        }else{
            $user = $_SESSION['cms']['admin'];
            $this->assign('user',$user);
        }
        //如果不是ajax请求，返回布局
        if(!$this->request->isAjax()){
            $this->display('admin/layout');
        }
    }
}