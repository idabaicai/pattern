<?php
/**
 * 数据对象映射模式
 * Created by PhpStorm.
 * User: LiuHui
 * Date: 2018/5/4
 * Time: 21:47
 */

namespace demo;

use lib\database\Mysqli;

class User
{
    //数据库实例
    protected $db;
    protected $id;
    //对应数据库的字段
    public $name;
    public $age;
    //查询结果
    public $list;

    public function __construct($id)
    {
        $this->db = new Mysqli();
        $this->db->connect('localhost','root','root','test');
        $list = $this->db->query("SELECT * FROM pattern WHERE id='{$id}'");
        $this->list = $this->db->fetchArray($list);
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
//        var_dump($sql1);
        $this->db->query($sql);
        $this->db->query($sql1);
        $this->db->close();
    }
}