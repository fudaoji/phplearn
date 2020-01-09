<?php
/**
 * Created by PhpStorm.
 * Script Name: operator.php
 * Create: 2019/7/5 18:26
 * Description:
 * Author: Doogie<fdj@kuryun.cn>
 */

$a = 5;
$b = &$a;

echo "a: {$a}, b: {$b} <br/>";

$a = 7;
echo '执行$a = 7 <br/>';
echo "a: {$a}, b: {$b} <br/>";
unset($a);
echo '执行unset($a) <br>';
echo "a: ".gettype($a).", b: {$b} <br/>";