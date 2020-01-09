<?php

print_r($_SERVER);exit;

$data = [
	'author' => 'doogie',
	'email' => 'info@mail.com',
	'content' => '写入时间：' . date('Y-m-d H:i:s')
];

$data = http_build_query($data);

$opts = [
	'http' => [
		'method' => 'POST',
		'header' => "Content-type: application/x-www-form-urlencoded \r\n" .
			"Content-Length: " . strlen($data) . "\r\n",
		"content" => $data
	]
];

$context = stream_context_create($opts);
$url = 'http://demo.com/test/php/php_core_technology&best_practices/network/post.php?name=111';
$html = @file_get_contents($url, false, $context);

var_dump($html);
?>
