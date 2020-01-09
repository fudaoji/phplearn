<?php
/**
 * Created by PhpStorm.
 * Script Name: traits.php
 * Create: 2019/7/24 18:06
 * Description:
 * Author: Doogie<fdj@kuryun.cn>
 */

class A
{
    public static function whichClass(){
        echo __CLASS__;
    }

    public static function test(){
        static::whichClass();
    }
}

class B extends A
{
    public static function whichClass(){
        echo __CLASS__;
    }
}

A::test();
B::test();