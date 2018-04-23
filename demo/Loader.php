<?php
/**
 * Created by PhpStorm.
 * User: icandebug@gmail.com
 * Date: 2018/4/23
 * Time: 9:28
 */

namespace demo;

class Loader
{
    public static function autoload($class)
    {
       require BASEDIR.'/'.str_replace('\\','/',$class).'.php';
    }
}