<?php
/**
 * 观察者1
 * Created by PhpStorm.
 * User: LiuHui
 * Date: 2018/5/5
 * Time: 10:55
 */

namespace demo;

use lib\Observer;

class Observer1 implements Observer
{
    //车速
    protected $speed = 30;

    public function update($info = "加速")
    {
        $this->speed ++;
        echo $info.'请注意!'.'<br />';
    }
}