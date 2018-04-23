<?php
/**
 *注册树类
 */
namespace demo;

class Register {
	//容器
	protected static $content = [];

    /**
     * 将一个类通过工厂方法挂载到树上
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
		return self::$content[$key];
	}
	//销毁一个对象
	public function _unset($key)
	{
		__unset(self::$content[$key]);
	}
}
