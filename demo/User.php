<?php
/**
 * 对象数据映射
 * Created by PhpStorm.
 * User: LiuHui
 * Date: 2018/5/4
 * Time: 21:47
 */

namespace demo;

use lib\Factory;
use lib\Register;

class User
{
    //数据库实例
    protected $db;
    protected $id;
    //对应数据库的字段
    public $name;
    public $age;

    public function __construct()
    {
        Register::set('Db',Factory::getInstance());
        $this->db = Register::get('Db');
        $this->db->connect('localhost','root','root','test');
    }

    public function query($sql)
    {
        $list = $this->db->query($sql);
        $res = $this->db->fetchArray($list);
        $this->id = $res['id'];
        return $res;
    }
    public function __destruct()
    {
        $sql = "UPDATE pattern SET name='{$this->name}' WHERE id={$this->id}";
        $sql1 = "UPDATE pattern SET age={$this->age} WHERE id={$this->id}";
        $this->db->query($sql);
        $this->db->query($sql1);
        $this->db->close();
    }
}