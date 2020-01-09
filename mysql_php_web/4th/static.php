<?php
/**
 * Created by PhpStorm.
 * Script Name: static.php
 * Create: 2019/7/4 13:33
 * Description:
 * Author: Doogie<fdj@kuryun.cn>
 */

function testStatic() {
    static $val = 1;
    echo $val++ . '<br>';
}

testStatic();   //output 1
testStatic();   //output 2
testStatic();   //output 3