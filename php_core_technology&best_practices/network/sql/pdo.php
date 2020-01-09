<?php
/**
 * Created by PhpStorm.
 * Script Name: pdo.php
 * Create: 2019/11/28 11:47
 * Description:
 * Author: Doogie<fdj@kuryun.cn>
 */

$user = 'root';
$pwd = '123456';
//1、准备数据源
$dsn = "mysql: host=localhost;dbname=test";
$db = new PDO($dsn, $user, $pwd);

//2、选项设置
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //设置异常可捕获
$db->exec("set names 'utf8'");  //设置字符集

//3、操作
$table = 'goods';
//直接插入
function insertData(){
    global $table, $db;
    $sql_insert = "insert into $table (goods_name, counts) VALUES ('phone".time()."', 120)";
    $result_insert = $db->exec($sql_insert);
    if($result_insert){
        return $db->lastInsertId();
    }
    return false;
}
//预处理插入
function insertDataPrepare(){
    global $table, $db;
    $sql_insert = "insert into $table (goods_name, counts) VALUES (:goods_name, :counts)";
    $statement_insert = $db->prepare($sql_insert);
    $goods_name = 'honor'.time();
    $counts = 10;
    $statement_insert->bindParam(':goods_name', $goods_name);
    $statement_insert->bindParam(':counts', $counts);
    $result_insert = $statement_insert->execute();
    if($result_insert){
        return $db->lastInsertId();
    }
    return false;
}

//直接查询
function query(){
    global $table, $db;
    $sql_select = "select *  from $table Where id > 1";
    return $db->query($sql_select)->fetchAll(PDO::FETCH_ASSOC);
}

//预处理查询
function queryPrepare(){
    global $table, $db;
    $sql_select_prepare = "select *  from $table where id > :id";
    $statement_select = $db->prepare($sql_select_prepare);
    $statement_select->execute([':id' => 1]);
    return $statement_select->fetch(PDO::FETCH_ASSOC);
}

var_dump(queryPrepare());exit;


