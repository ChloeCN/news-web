<?php
namespace myframe;

use ReflectionMethod; //导入反射类空间。反射API：获取一个方法的有关信息
use Exception; //导入异常类空间。处理异常的类，可以描述异常信息。当发生异常时，使用throw关键字来抛出一个异常对象。

class App extends Container
{
    protected $request;
    protected $rootPath;
    protected $debug = true;

    public function __construct()
    {
        $this->instances[App::class] = $this;
        $this->request = $this->make(Request::class);
        $this->rootPath = dirname(__DIR__) . '/';
        DB::init(require $this->rootPath . 'config/database.php');
    }

    public function getRootPath()
    {
        return $this->rootPath;
    }

    public function run()
    {
        try {
            $dispatch = $this->routeCheck();
            return $this->dispatch($dispatch);
        }catch(HttpException $e) {
            return $e->getResponse();
        }
        catch (Exception $e) {
            $msg = $this->debug ? $e->getMessage() : '';
            return Response::create('系统发生错误。'. $msg, 403);
        }
    }

    public function dispatch(array $dispatch)
    {
        list($controller, $action) = $dispatch;
        $this->request->setAction($action);
        $instance = $this->controller($controller);
        if (is_callable([$instance, $action])) {
            $reflect = new ReflectionMethod($instance, $action);
        } else {
            $msg = '操作不存在：' ;
            $msg .= get_class($instance) . '->' . $action . '()';
            throw new Exception($msg);
        }
        $args = $this->bindParam($reflect);
        $data = $reflect->invokeArgs($instance, $args);
        return Response::create($data);
    }
    
    public function controller($name)
    {
        $class = '\\App\\Http\\Controllers\\' . $name;
        if (!class_exists($class)) {
            $msg = '请求的控制器' . $class . '不存在！';
            throw new Exception($msg);
        }
        return $this->make($class);
    }

    public function routeCheck()
    {
        $path = $this->request->pathinfo();
        $controller = dirname($path);
        $action = basename($path);
        if ($controller === '' || $controller === '.') {
            $controller = 'Index';
        }
        if ($action === '') {
            $action = 'index';
        }
        $arr = explode('/', ucwords($controller, '/'));
        $controller = implode('\\', $arr) . 'Controller';
        $arr[] = $action;
        foreach ($arr as $v) {
            if (!preg_match('/^[A-Za-z]\w{0,20}$/', $v)) {
                $msg = '请求参数包含特殊字符！';
                throw new Exception($msg);
            }
        }
        return [$controller, $action];
    }
}
