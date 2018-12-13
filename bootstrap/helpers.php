<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 2018/12/13
 * Time: 上午11:41
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}