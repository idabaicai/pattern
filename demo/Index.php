<?php
/**
 * Created by PhpStorm.
 * User: icandebug@gmail.com
 * Date: 2018/4/23
 * Time: 8:58
 */

namespace demo;

use lib\strategy\UserStrategy;
use lib\strategy\Boy;
use lib\strategy\Girl;
class Index
{
    //策略
    protected $strategy;

    public function __construct()       //?boy
    {
        if (isset($_GET['boy'])) {
            $this->setStrategy(new Boy());
        } elseif (isset($_GET['girl'])) {
            $this->setStrategy(new Girl());
        } else {
            $this->setStrategy(new Boy());
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