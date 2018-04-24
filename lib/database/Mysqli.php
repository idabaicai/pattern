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
    function connect($host, $user, $password, $db)
    {
        // TODO: Implement connect() method.
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
        // TODO: Implement query() method.
        return mysqli_query(self::$con,$sql);
    }
    function close()
    {
        // TODO: Implement close() method.
        mysqli_close(self::$con);
    }
}