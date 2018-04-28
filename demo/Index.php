<?php
/**
 * Created by PhpStorm.
 * User: icandebug@gmail.com
 * Date: 2018/4/23
 * Time: 8:58
 */

namespace demo;

use lib\strategy\UserStrategy;
class Index
{
    //策略
    protected $strategy;

    public function __construct()
    {
        if (isset($_GET['boy'])) {
            $this->setStrategy(new \lib\strategy\Boy());
        } elseif (isset($_GET['girl'])) {
            $this->setStrategy(new \lib\strategy\Girl());
        }
    }
    public  function index()
    {
        echo '广告:<br />';
        $this->strategy->showAd();
        echo '<br />爱好:<br />';
        $this->strategy->showLove();
    }

    public function setStrategy(UserStrategy $strategy)
    {
        $this->strategy = $strategy;
    }
}