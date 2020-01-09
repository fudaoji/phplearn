<?php
/**
 * Created by PhpStorm.
 * Script Name: index.php
 * Create: 2019/7/26 13:49
 * Description:
 * Author: Doogie<fdj@kuryun.cn>
 */

/*$class = new ReflectionClass("Exception");
echo "<pre>".$class."</pre>";  exit;*/

try {
    throw new Exception("A terrible error has occurred", 42);
}
catch (Exception $e) {
    /*echo "Exception ". $e->getCode(). ": ". $e->getMessage()."<br />".
        " in ". $e->getFile(). " on line ". $e->getLine(). "<br />";*/
    echo $e;
}