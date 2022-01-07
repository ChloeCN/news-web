<?php
namespace myframe;
// Containt类表示“容器”，它用来创建对象，并将对象放在容器中，当下回创建相同的类的对象的时候，如果容器中存在，
// 则直接返回，不必重复创建
use ReflectionClass;
use ReflectionMethod;

class Container
{
    protected static $instance;

    protected $instances = [];

    public function __construct()
    {
        $this->request = Container::getInstance()->make(Request::class);
    }
    
    public function make($class)
    {
        if (!isset($this->instances[$class])) {
            // 创建反射对象
            $reflect = new ReflectionClass($class);
            // 获取构造方法
            $constructor = $reflect->getConstructor();
            // 创建构造方法依赖的对象，将对象保存在$args中
            $args = $constructor ? $this->bindParam($constructor) : [];
            // 实例化类，并传入$args参数
            $this->instances[$class] = $reflect->newInstanceArgs($args);
        }
        return $this->instances[$class];
    }
    
    protected function bindParam(ReflectionMethod $reflect)
    {
        $args = [];
        $params = $reflect->getParameters();
        foreach ($params as $param) {
            $class = $param->getClass();
            if ($class) {
                $args[] = $this->make($class->getName());
            }
        }
        return $args;
    }

    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}
