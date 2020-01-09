<?php
/**
 * Created by PhpStorm.
 * Script Name: closures.php
 * Create: 2019/7/19 10:38
 * Description:
 * Author: Doogie<fdj@kuryun.cn>
 */

$printer = function ($value){
    echo $value . "<br>";
};

$products = [
    'Tires' => 100,
    'Oil' => 10,
    'Spark Plugs' => 4
];

$markup = 0.20;
$apply = function (&$value) use ($markup){
    $value += $markup;
};

array_walk($products, $apply);

array_walk($products, $printer);