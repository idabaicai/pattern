<?php

namespace demo;

/**
 * 单一类
 * Class Girl
 * @package pattern
 */
class Girl
{
    //属性
    protected $name;
    //当前类的唯一实例
    protected static $instance;

    //将构造方法设置为私有
    private function __construct($name)
    {
        $this->name = $name;
    }


    //获取当前类的唯一实例
    public static function getInstance($name = 'YY')
    {
        //错误的单例模式，每次都要实例化，因为没有保存当前实例
        //return self::$instance instanceof self ? self::$instance : new self($name);
        if (self::$instance instanceof self) {
            return self::$instance;
        } else {
            self::$instance = new self($name);
            return self::$instance;
        }
    }

    //Girl可以唱歌
    public function song($song = '三生三世')
    {
        echo 'I can song'.$song.'<br />';
    }
    //Girl可以跳舞
    public function dance($dance = '芭蕾')
    {
        echo 'I can dance'.$dance;
    }
}