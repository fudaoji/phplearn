<?php
/**
 * Created by PhpStorm.
 * Script Name: instanceof.php
 * Create: 2019/7/8 10:04
 * Description:
 * Author: Doogie<fdj@kuryun.cn>
 */

class SampleClass
{

}

$obj = new SampleClass();

echo ($obj instanceof SampleClass) ? '是' : '否';