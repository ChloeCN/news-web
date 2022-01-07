<?php
namespace myframe;
use Exception;
//异常处理类
class HttpException extends Exception{
    //定义$response属性
    protected $response;
    public function __construct(Response $response)
    {
        //把Response的对象$response赋给属性$response
        $this->response = $response;
    }

    //定义得到$response属性的方法
    public function getResponse() {
        return $this->response;
    }
}