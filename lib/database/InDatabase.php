<?php
/**
 * 适配器模式接口
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
     * 从结果集中取得关联数组
     * @param $result
     * @return mixed
     */
    function fetchArray($result);

    /**
     * 关闭数据库
     * @return mixed
     */
    function close();
}
