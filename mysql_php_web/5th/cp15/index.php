<?php
/**
 * Created by PhpStorm.
 * Script Name: index.php
 * Create: 2019/8/14 16:19
 * Description:
 * Author: Doogie<fdj@kuryun.cn>
 */

$users = exec('grep –i 15659827559 D:\DevTools\xampp\htdocs\www\test\php\mysql_php_web\5th\include\phonenums.txt');
// split the output lines into an array
// note that the \n should be \r\n on Windows!
$lines = explode("\r\n", $users);
var_dump($users);exit;
foreach ($lines as $line)
{
// names and phone nums are separated by , char
    $namenum = explode(',', $line);
    echo "Name: {$namenum[0]}, Phone #: {$namenum[1]}<br/>\n";
}
exit;

header("Content-type:text/html;charset=utf-8");
require_once "../include/database.php";
echo file_get_contents('http://localhost/www/test/php/mysql_php_web/5th/include/database.php'); exit;

try{
    $dsn = "mysql:host=".DB_HOST.";dbname=books";
    $db = new PDO($dsn, DB_USER, DB_PWD);

    $query = "SELECT `Desc` FROM Books WHERE `Desc` != ''"; //set up query

    $stmt = $db->prepare($query);  //constructs a statement
    $stmt->execute(); //run the query

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo htmlspecialchars_decode($row['Desc']);
    }

    $db = null; //disconnect from the db
}catch (PDOException $e){
    echo $e->getMessage();
}
exit;


$input_str = "<p align=\"center\">The user gave us \" €15000?\".</p>
<script type=\"text/javascript\">
// malicious JavaScript code goes here.
</script>";


$str = htmlspecialchars($input_str, ENT_QUOTES, "UTF-8");
echo nl2br($str) . '<br>';
$str = htmlentities($input_str, ENT_QUOTES, "UTF-8");
echo nl2br($str);