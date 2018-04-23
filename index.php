<?php
/**
 * Created by PhpStorm.
 * User: LiuHui
 * Date: 2018/4/23
 * Time: 9:22
 */
namespace demo;
define('BASEDIR',__DIR__);  //根目录

include BASEDIR.'/demo/Loader.php'; //引入Loader.php
spl_autoload_register('\\demo\\Loader::autoload'); //注册给定的函数作为 __autoload 的实现

Index::index();
//
$girl = Factory::create();
$girl1 = Factory::create();
var_dump($girl == $girl1);  //true
$girl->song();
echo '<hr />';
//利用注册树
Register::set('aah',Factory::create());
$aah = Register::get('aah');
$aah->dance('拉丁');
var_dump($aah == $girl1);  //true
//$girl3 = new Girl();        报错