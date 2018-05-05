<?php
/**
 * Created by PhpStorm.
 * User: LiuHui
 * Date: 2018/5/5
 * Time: 10:54
 */

namespace lib;


interface Observer
{
    public function update($info = null);
}