<?php
/**
 * Created by PhpStorm.
 * User: LiuHui
 * Date: 2018/4/24
 * Time: 9:07
 */

namespace lib\database;


class Mysql implements InDatabase
{
    protected  $con;
    public function connect($host, $user, $password, $db)
    {
        $con = mysql_connect($host,$user,$password);
        mysql_select_db($db,$con);
        $this->con = $con;
    }
    function query($sql)
    {
        return mysql_query($sql,$this->con);
    }
    function fetchArray($result)
    {
        return mysql_fetch_array($result);
    }

    function close()
    {
        // TODO: Implement close() method.
        mysql_close($this->con);
    }
}