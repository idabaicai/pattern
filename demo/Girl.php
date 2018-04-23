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

    //禁用构造方法
    private function __construct($name)
    {
        $this->name = $name;
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

    //获取当前类的唯一实例
    public static function getInstance($name = 'YY')
    {
        return self::$instance instanceof self ? self::$instance : new self($name);
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