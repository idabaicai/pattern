<?php
/**
 * 策略模式
 * Created by PhpStorm.
 * User: liuhui
 * Date: 18-4-28
 * Time: 下午5:50
 */

namespace lib\strategy;


interface UserStrategy
{
    //展示喜好
    function showLove();
    //展示广告
    function showAd();
}