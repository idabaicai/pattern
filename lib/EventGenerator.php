<?php
/**
 * 产生观察者
 * Created by PhpStorm.
 * User: LiuHui
 * Date: 2018/5/5
 * Time: 10:43
 */

namespace lib;


abstract class EventGenerator
{
    private $observer = [];     //观察者
    //添加观察者
    public function addObserver($observer)
    {
        $this->observer[] = $observer;
//        array_push($this->observer,$observer);
    }
    //通知所有观察者更新
    public function notify()
    {
        foreach ($this->observer as $observer) {
            $observer->update();
        }
    }
}