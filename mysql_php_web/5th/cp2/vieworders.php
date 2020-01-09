<?php
// create short variable name
$document_root = dirname(__FILE__);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bob's Auto Parts - Customer Orders</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Customer Orders</h2>
<?php
@$fp = fopen("$document_root/../orders/orders.txt", 'rb');

/*fseek($fp, 30 ,SEEK_CUR);  //从21个字符开始读取
echo nl2br(fread($fp, filesize("$document_root/../orders/orders.txt")));*/

/*while (!feof($fp)){
    $char = fgetc($fp);
    //echo ($char=="\n" ? "<br />": $char);
    if (!feof($fp)) {
        echo ($char=="\n" ? "<br />": $char);
    }
}*/

//file_get_contents  用法
//echo (file_get_contents("$document_root/../orders/orders.txt"));

//readfile用法
//readfile("$document_root/../orders/orders.txt");

//fpassthru 用法
/*@$fp = fopen("$document_root/../orders/orders.txt", 'rb');
$res = fpassthru($fp);
var_dump(explode("\n", $res));exit;*/

//file用法  返回array split by \n
//file("$document_root/../orders/orders.txt");

//fopen用法
/*@$fp = fopen("$document_root/../orders/orders.txt", 'rb');
flock($fp, LOCK_SH); // lock file for reading

if (!$fp) {
    echo "<p><strong>No orders pending.<br />
              Please try again later.</strong></p>";
    exit;
}

while (!feof($fp)) {
    $order = fgets($fp); //读取一行
    //var_dump(fgetcsv($fp, 0, "\t"));exit;
    echo htmlspecialchars($order)."<br />";
}

flock($fp, LOCK_UN); // release read lock
*/
echo 'Final position of the file pointer is '.(ftell($fp));
echo '<br />';
rewind($fp);
echo 'After rewind, the position is '.(ftell($fp));
echo '<br />';
fclose($fp);
?>
</body>
</html>