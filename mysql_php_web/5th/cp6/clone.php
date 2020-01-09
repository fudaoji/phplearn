<?php
/**
 * Created by PhpStorm.
 * Script Name: clone.php
 * Create: 2019/7/25 14:08
 * Description:
 * Author: Doogie<fdj@kuryun.cn>
 */

require_once("page.php");
$class = new ReflectionClass("Page");
echo "<pre>".$class."</pre>";  exit;

class Printable
{
    public $testone;
    public $testtwo;
    public function __toString()
    {
        return (var_export($this, TRUE));
    }
}

$p = new Printable;
echo $p;exit;

function xrange($start = 1, $limit, $step = 1) {
    if ($start < $limit) {
        if ($step <= 0) {
            throw new LogicException('Step must be +ve');
        }

        for ($i = $start; $i <= $limit; $i += $step) {
            yield $i;
        }
    } else {
        if ($step >= 0) {
            throw new LogicException('Step must be -ve');
        }

        for ($i = $start; $i >= $limit; $i += $step) {
            yield $i;
        }
    }
}

/*
 * 注意下面range()和xrange()输出的结果是一样的。
 */
$low = 1;
$high = 10000000;
$mem_r1_before = memory_get_usage();
$r1 = range($low, $high);
$mem_r1_after = memory_get_usage();
echo "memory used from range():" . ($mem_r1_after - $mem_r1_before);

echo "<br>";

$mem_r2_before = memory_get_usage();
$r2 = xrange($low, $high);
/*foreach ($r2 as $number) {
    echo "$number 、";
}*/
$mem_r2_after = memory_get_usage();

echo "memory used from range():" . ($mem_r2_after - $mem_r2_before);
exit;

class myClass
{
    public $a = "5";
    public $b = "7";
    public $c = "9";
}
$x = new myClass;
foreach ($x as $attribute) {
    echo $attribute."<br />";
}

class A
{
    public $name = 'doogie';
    public $objData;

    public function __clone()
    {
        $this->objData = clone $this->objData;
    }
}
$datetime = new DateTime("2014-07-05", new DateTimeZone("UTC"));
$a = new A();
$a->objData = $datetime;

$a_reference = clone $a;
$a_reference->objData->add(new DateInterval('P10D'));

var_dump($a);
var_dump($a_reference);