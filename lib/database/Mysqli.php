<?php
/**
 * Created by PhpStorm.
 * User: LiuHui
 * Date: 2018/4/24
 * Time: 9:20
 */

namespace lib\database;


class Mysqli implements InDatabase
{
    protected static $con;

    /**
     * @param $host
     * @param $user
     * @param $password
     * @param $db
     * @return mixed|void
     */
    function connect($host, $user, $password, $db)
    {
        $con = mysqli_connect($host,$user,$password,$db);
        if (!$con) {
            echo mysqli_error().PHP_EOL;
            exit();
        } else {
            self::$con = $con;
        }
    }
    function query($sql)
    {
        return mysqli_query(self::$con,$sql);
    }
    function fetchArray($result)
    {
        return mysqli_fetch_array($result);
    }

    function close()
    {
        mysqli_close(self::$con);
    }
}