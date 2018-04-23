<?php
/**
 *注册树类
 */
namespace demo;

class Register {
	//容器
	protected static $content = [];

    /**
     * 将一个类挂载到树上
     * @param $key
     * @param $instance
     */
	public static function set($key,$instance)
	{
		self::$content[$key] = $instance;
	}

    /**
     * 将一个对象从树上取下
     * @param $key
     * @return mixed
     */
	public static function get($key)
	{
		return empty(self::$content[$key]) ? null : self::$content[$key];
	}
	//销毁一个对象
	public static function _unset($key)
	{
		unset(self::$content[$key]);
	}
}
