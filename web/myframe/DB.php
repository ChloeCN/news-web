<?php
namespace myframe;

use PDO;
use PDOException;
use Exception;

class DB
{
    protected static $initConfig = [];

    protected static $instance;

    protected $pdo;

    protected $config = [
        'type' => 'mysql',
        'host' => 'localhost',
        'port' => '3306',
        'dbname' => 'myframe',
        'charset' => 'utf8',
        'user' => 'root',
        'pwd' => 'root',
        'prefix' => 'cms_'
    ];
    
    public function __construct(array $config = [])
    {
        $this->config = array_merge($this->config, $config);
        $this->initPDO();
    }

    protected function initPDO()
    {
        // 取出数据库连接信息
        $type = $this->config['type'];
        $host = $this->config['host'];
        $port = $this->config['port'];
        $dbname = $this->config['dbname'];
        $charset = $this->config['charset'];
        // 拼接数据库连接的DSN
        $dsn="$type:host=$host;port=$port;dbname=$dbname;charset=$charset";
        try {
            // 连接数据库，创建PDO实例
            $this->pdo = new PDO($dsn, $this->config['user'], $this->config['pwd']);
        } catch (PDOException $e) {
            // 抛出错误信息
            throw new Exception('数据库连接失败，错误信息：' . $e->getMessage());
        }
        // 设置PDO的错误模式为抛出异常
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getConfig($name = null)
    {
        return $name ? $this->config[$name] : $this->config;
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new static(static::$initConfig);
        }
        return self::$instance;
    }

    public static function init(array $config = [])
    {
        static::$initConfig = $config;
    }

    public function fetchRow($sql, array $bind = [])
    {
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($bind);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $error = $this->errorMsg($e, $sql);
            throw new Exception($error);
        }
    }

    protected function errorMsg($e, $sql = '')
    {
        $error = $e->getMessage();
        if ($sql != '') {
            $error .= ' SQL语句执行失败：' . $sql;
        }
        return $error;
    }
    public function fetchAll($sql, array $bind = [])
    {
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($bind);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $error = $this->errorMsg($e, $sql);
            throw new Exception($error);
        }
    }

    public function execute($sql, array $bind = [])
    {
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($bind);
            return $stmt->rowCount();
        } catch (PDOException $e) {
            $error = $this->errorMsg($e, $sql);
            throw new Exception($error);
        }
    }

    public function lastInsertId()
    {
        return $this->pdo->lastInsertId();
    }
}
