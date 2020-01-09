<?php

$url = 'http://demo.com/test/php/php_core_technology&best_practices/network/upload_output.php';
$post_data = [
	'foo' => 'bar',
	//'upload' => '@' . dirname(__FILE__) . "/test.txt"
	'upload' => "@test.txt"
];
//var_dump($post_data['upload']);exit;
//1、初始化
$ch = curl_init();

//2、设置选项
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

//3、执行
$output = curl_exec($ch);

$info = curl_getinfo($ch);
//4、释放句柄
curl_close($ch);

var_dump($info);exit;
echo $output;

?>
