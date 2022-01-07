<?php
namespace myframe;

use Smarty;

class Controller
{
    protected $Smarty;
    protected $app;
    protected $request;

    public function __construct(App $app, Request $request, Smarty $Smarty)
    {
        $this->app = $app;
        $this->request = $request;
        $this->Smarty = $Smarty;
        $template_dir = $app->getRootPath() . 'resources/views/';
        $compile_dir = $app->getRootPath() . 'storage/framework/views/';
        $this->Smarty->template_dir = $template_dir;
        $this->Smarty->compile_dir = $compile_dir;
        $this->Smarty->default_modifiers = ['escape:"htmlall"'];
        $this->initialize();
    }
    protected function initialize(){

    }

   
    protected function assign($name, $value = '')
    {
        $this->Smarty->assign($name, $value);
    }

    protected function fetch($template = '')
    {
        return $this->Smarty->fetch($template . '.html');
    }

   

    protected function display($template = '')
    {
        $data = $this->fetch($template);
        throw new HttpException(Response::create($data));
    }

    protected function success($msg = '') {
        $data = json_encode(['code'=>1,'msg'=>$msg]);
        $header = ['Content-Type' => 'application/json'];
        throw new HttpException(Response::create($data,200,$header));
    }

    protected function error($msg = '') {
        $data = json_encode(['code'=>0,'msg'=>$msg]);
        $header = ['Content-Type' => 'application/json'];
        throw new HttpException(Response::create($data,200,$header));
    }

    protected function redirect($url = '',$code = '302'){
        $header = ['Location'=>$url];
        throw new HttpException(Response::create('',$code,$header));
    }
    
}
