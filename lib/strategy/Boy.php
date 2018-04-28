<?php
/**
 * Created by PhpStorm.
 * User: liuhui
 * Date: 18-4-28
 * Time: 下午5:55
 */

namespace lib\strategy;


class Boy implements UserStrategy
{
    public function showAd()
    {
        echo '火箭';
    }
    public function showLove()
    {
        echo 'I love girl';
    }
}