<?php
/**
 * Created by PhpStorm.
 * User: LiuHui
 * Date: 2018/4/24
 * Time: 9:12
 */

namespace lib\database;

interface InDatabase
{
    /**
     * 连接数据库
     * @param $host
     * @param $user
     * @param $password
     * @param $db
     * @return mixed
     */
    function connect($host,$user,$password,$db);

    /**
     * 查询
     * @param $sql
     * @return mixed
     */
    function query($sql);

    /**
     * 关闭数据库
     * @return mixed
     */
    function close();
}
