<?php
/**
 *工厂类
 */
namespace demo;

use demo\Girl;
Class Factory {
    //利用工厂方法制造指定的类
	public static function create($name)
    {
        return Girl::getInstance($name);
    }
}