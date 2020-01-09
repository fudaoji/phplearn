<?php

function test03(){
	$url = "http://www.baidu.com/";
	$html = file_get_contents($url);
	print_r($http_response_header);

	$fp = fopen($url, "r");
	print_r(stream_get_meta_data($fp));
	fclose($fp);
}
test03();exit;
function test02(){
	$res = get_headers('http://www.baidu.com');
	return $res;
}
var_dump(test02());exit;

function test01(){
	var_export($_SERVER);
}
?>
