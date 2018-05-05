<?php
/**
 *
 * Created by PhpStorm.
 * User: LiuHui
 * Date: 2018/5/4
 * Time: 21:46
 */
//根目录
define('BASEDIR',__DIR__);
//换行
define('BR','<hr />');
include './demo/Loader.php';
spl_autoload_register('\\demo\\Loader::autoload');

//数据映射
$user = \lib\Factory::getUser(1);
$user1 = \lib\Factory::getUser(1);
//var_dump($user);echo BR;
//var_dump($user1);echo BR;
var_dump($user->list);echo "<br />";
$sql = 'select * from pattern WHERE id=1';
$res = $user->query($sql);
$user->age = 18;
$user->name = 'JavaScript';
var_dump($res);echo BR;