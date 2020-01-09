<?php

$mysqli = mysqli_connect("localhost", "root", "123456", "test");
// 检查连接
if (!$mysqli) {
	die("连接错误: " . mysqli_connect_error());
}
$mysqli->query("set names 'UTF-8'");

/*$sql = "SELECT id,number FROM randnum";
$result = mysqli_query($con, $sql);
// 获取数据
$list = mysqli_fetch_all($result, MYSQLI_ASSOC);
var_dump($list);exit;*/

set_time_limit(0);

$redis = new redis();
$result = $redis->pconnect('127.0.0.1', 6379); //$result：连接成功 bool(true)  失败 false

$number_count = 0;
$sqls = '';
while ($res = $redis->lpop('rand_list')) {
	//2、数据插入语句
	$sqls .= "insert into randnum(number) values({$res});";
	++$number_count;
}
if ($number_count) {
	//3、执行，注意批量执行函数
	$res = $mysqli->multi_query($sqls); //返回的是布尔值
	//4、判断是否执行成功
	if ($res) {
		echo "成功！！！";
	} else {
		echo "数据插入失败";
	}
}
//5、关闭连接
$mysqli->close();
unset($res, $mysqli, $sqls);

echo $number_count;exit;

?>