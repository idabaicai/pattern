<?php
/**
 *
 * Created by PhpStorm.
 * User: LiuHui
 * Date: 2018/5/4
 * Time: 21:46
 */
define('BASEDIR',__DIR__);
include './demo/Loader.php';
spl_autoload_register('\\demo\\Loader::autoload');

//数据映射
$user = new \demo\User();
$sql = 'select * from pattern';
$res = $user->query($sql);
$user->age = 20;
$user->name = 'Java';
var_dump($res);