<?php
/**
 * 观察者2
 * Created by PhpStorm.
 * User: LiuHui
 * Date: 2018/5/5
 * Time: 10:58
 */

namespace demo;

use lib\Observer;

class Observer2 implements Observer
{
    //吃了多少碗
    protected static $eat_num = 1;
    //提示信息
    protected $info;
    //每次吃一碗
    public static function eat()
    {
        self::$eat_num ++;
    }
    //检测饭量
    protected function getInfo()
    {
        switch (self::$eat_num) {
            case 1:$this->info = '这饭量合适'; break;
            case 2:$this->info = '这饭量有点大'; break;
            case 3:$this->info = '你今天去挖矿去了吗'; break;
            case 4:$this->info = '天蓬元帅下凡呀'; break;
            default:$this->info = '我竟无言以对';
        }
        return $this->info;
    }
    public function update($info = '吃了')
    {
        echo $info.':'.self::$eat_num.'碗饭';
        echo $this->getInfo();
    }
}