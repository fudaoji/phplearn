<?php
@header("Content-type: text/html; charset=utf-8");
//使用curl提交评论
$post_data = [
	'author' => '王五',
	'email' => 'wangwu@mail.com',
	'content' => 'the content was posted by curl'
];

//1、初始化
$curl = curl_init();  //curl resource
//2、设置选项
$url = 'http://demo.com/test/php/php_core_technology&best_practices/network/post.php';
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  //将获取的信息以文件流的形式返回，而不是直接输入
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);

curl_setopt($curl, CURLOPT_HEADER, 1); //将头文件的信息作为数据流输出

//3、执行并获取HTML文档内容
$output = curl_exec($curl);
//4、释放句柄
curl_close($curl);

echo $output;
?>
