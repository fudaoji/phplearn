<?php
/**
 * Created by PhpStorm.
 * Script Name: error_set.php
 * Create: 2019/7/4 10:49
 * Description:
 * Author: Doogie<fdj@kuryun.cn>
 */

$display_errors_v = ini_get('display_errors');
echo "当前display_error的设置值是： " . (int) $display_errors_v . "<br>";

//演示错误代码,打印未声明的变量
echo "设置前变量a的值是：" . $a . "<br>";

ini_set('display_errors', 1); //设置错误打印给用户
$display_errors_v = ini_get('display_errors');
echo "当前display_error的设置值是： " . (int) $display_errors_v . "<br>";

error_reporting(E_ERROR); //只显示错误
echo "设置后变量a的值是：" . $a;


