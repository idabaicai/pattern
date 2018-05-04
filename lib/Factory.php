<?php
/**
 *工厂类
 */
namespace lib;

use lib\database\Mysqli;

Class Factory {
    //利用工厂方法制造指定的类
	public static function create($name)
    {
        return \demo\Girl::getInstance($name);
    }
    public static function getInstance()
    {
        return new Mysqli();
    }
}