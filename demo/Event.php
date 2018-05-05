<?php
/**
 * 事件1
 * Created by PhpStorm.
 * User: LiuHui
 * Date: 2018/5/5
 * Time: 10:49
 */

namespace demo;

use lib\EventGenerator;

class Event extends EventGenerator
{
    public function trigger()
    {
        $this->notify();
    }
}