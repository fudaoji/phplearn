<?php
//生产者，保存用户数据

$list = [];
$number = 10;
for ($i = 0; $i < $number; $i++) {
	$list[] = rand();
}

//var_dump($list);exit;
$redis = new redis();
$result = $redis->connect('127.0.0.1', 6379); //$result：连接成功 bool(true)  失败 false
//$redis->del('rand_list');

foreach ($list as $key => $value) {
	$redis->lpush('rand_list', $value);
}
/*while ($res = $redis->lpop('rand_list')) {
echo $res . "\n";
}
exit;*/
//$res = $redis->lpop('rand_list');

unset($i, $list, $key, $value, $number);
exec('php redis_customer.php &');

echo '此次共产生数据' . count($list) . '条';
?>