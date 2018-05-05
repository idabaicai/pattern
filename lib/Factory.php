<?php
/**
 *工厂类
 */
namespace lib;

use demo\Girl;
use demo\User;

Class Factory {
    //利用工厂方法制造指定的类
	public static function create($name)
    {
        return Girl::getInstance($name);
    }
    //获取唯一User类
    public static function getUser($id)
    {
        $key = 'user_'.$id;
        $user = Register::get($key);
        if (!$user) {
            Register::set($key,new User($id));
        } else {
            return $user;
        }
        return Register::get($key);
    }
}