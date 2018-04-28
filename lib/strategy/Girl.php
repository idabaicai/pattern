<?php
/**
 * Created by PhpStorm.
 * User: liuhui
 * Date: 18-4-28
 * Time: 下午5:57
 */

namespace lib\strategy;


class Girl implements UserStrategy
{
    public function showAd()
    {
        echo '猫';
    }
    public function showLove()
    {
        echo 'I love boy';
    }
}