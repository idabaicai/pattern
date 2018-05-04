<?php
/**
 *适配器模式、策略模式
 * Created by PhpStorm.
 * User: liuhui
 * Date: 18-4-28
 * Time: 下午5:38
 */

define('BASEDIR',__DIR__);
include BASEDIR.'/demo/Loader.php';
spl_autoload_register('\\demo\\Loader::autoload');

//适配器模式
$db = new \lib\database\Mysqli();
$db->connect('localhost','root','root','test');
$list = $db->query('select * from pattern');
$list = $db->fetchArray($list);
var_dump($list);
echo '<hr />';

//策略模式
$st1 = new \demo\Index();
$st1->index();