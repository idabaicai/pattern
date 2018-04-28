<?php
/**
 * Created by PhpStorm.
 * User: icandebug@gmail.com
 * Date: 2018/4/23
 * Time: 9:22
 */
namespace demo;
use lib\Db;
use lib\database\Mysqli;

define('BASEDIR',__DIR__);  //根目录

include BASEDIR.'/demo/Loader.php'; //引入Loader.php
spl_autoload_register('\\demo\\Loader::autoload'); //注册给定的函数作为 __autoload 的实现


$girl = Factory::create('girl');
$girl1 = Factory::create('girl1');
var_dump($girl == $girl1);  //true
$girl->song();
echo '<hr />';

//利用注册树
Register::set('aah',Factory::create('aah'));
$aah = Register::get('aah');
$aah->dance('拉丁');
var_dump($aah == $girl1);  //true
//$girl3 = new Girl();        报错
Register::_unset('aah');
var_dump(Register::get('aah'));
echo '<hr />';
var_dump($aah);
var_dump($girl);

//数据库链式操作
$db = Db::getInstance();
var_dump($db);
$list = $db->select();
//$list = $db->name('pattern')->where("id = 1")->select();
var_dump($list);
echo "<hr />";