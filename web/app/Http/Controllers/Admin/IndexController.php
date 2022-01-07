<?php
namespace App\Http\Controllers\Admin;
use myframe\DB;
header("content-type:text/html;charset=utf-8");
class IndexController extends CommonController{
    public function index(){
        // return "登录成功，欢迎来到后台首页。";
        //return '<a href="/index.php/admin/login/logout">退出登录</a>';
        $this->assign('server_info',[
            //系统环境
            'server_version' => $this->request->server('SERVER_SOFTWARE'),
            //MYSQL版本
            'mysql_version' => $this->getMySQLVer(),
            //文件上传限制
            'upload_max_filesize' => ini_get('file_uploads')?ini_get('upload_max_filesize') : '已禁用',
            //脚本执行时限
            'max_execution_time' => ini_get('max_execution_time').'秒',
            //服务器时间
            'server_time' => date('Y-m-d H:i:s',time())
        ]);
        return $this->fetch('admin/index');
    }
    protected function getMySQLVer(){
        $db=DB::getInstance();
        $res=$db->fetchRow('SELECT VERSION() AS ver');
        return $res ? $res['ver'] : '未知版本'; 
    }
}

?>