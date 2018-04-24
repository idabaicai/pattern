<?php
/**
 * Created by PhpStorm.
 * User: LiuHui
 * Date: 2018/4/23
 * Time: 19:47
 */

namespace lib;

class Db
{
    protected static $host = 'localhost';
    protected static $user = 'root';
    protected static $password = 'root';
    protected static $db = 'test';
    //查询条件
    protected $where;
    //数据表
    protected $table;
    //连接资源符
    protected static $connect;
    //当前类唯一实例
    protected static $instance;
    //禁用构造方法
    private function __construct($host,$user,$password,$db)
    {
        self::$connect = mysqli_connect($host,$user,$password);
        if (self::$connect == null) {
            throw new \Exception('数据库连接失败'.mysqli_connect_error());
        }
    }
    //生成唯一实例
    public static function getInstance()
    {
        return self::$instance instanceof self ? self::$instance : new self(self::$host,self::$user,self::$password,self::$db);
    }

    //数据表
    public function name($table)
    {
        $this->table = $table;
        return $this;
    }
    public function where($where)
    {
        $this->where = $where;
        return $this;
    }

    public function select()
    {
//        $sql = "select from ".$this->table."where".$this->where;
        $sql = 'select from patten where id = 1';
        $result = mysqli_query(self::$connect,$sql);
        return $result;
    }
}