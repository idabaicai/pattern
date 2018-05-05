<?php
/**
 * 观察者模式
 * Created by PhpStorm.
 * User: LiuHui
 * Date: 2018/5/5
 * Time: 10:51
 */
define('BASEDIR',__DIR__);
include './demo/Loader.php';
spl_autoload_register('\\demo\\Loader::autoload');

$event = new \demo\Event();
$eat = new \demo\Observer2();
$eat::eat();
$eat::eat();
$eat::eat();
$eat::eat();
$event->addObserver(new \demo\Observer1());
$event->addObserver($eat);
$event->trigger();