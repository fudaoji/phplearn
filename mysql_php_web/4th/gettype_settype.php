<?php
/**
 * Created by PhpStorm.
 * Script Name: gettype_settype.php
 * Create: 2019/7/8 10:18
 * Description:
 * Author: Doogie<fdj@kuryun.cn>
 */

$a = 55;
echo 'The type of $a is: ' . gettype($a) . '<br>';

//change the type of $a
settype($a, 'double');
echo 'The type of $a is: ' . gettype($a). '<br>';

echo (int) is_int(23);