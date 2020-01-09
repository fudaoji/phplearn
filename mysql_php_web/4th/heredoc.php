<?php
/**
 * Created by PhpStorm.
 * Script Name: heredoc.php
 * Create: 2019/7/4 11:31
 * Description:
 * Author: Doogie<fdj@kuryun.cn>
 */

$the_end = <<< theEND
line 1
line 2
line 3
theEND;

echo $the_end;
