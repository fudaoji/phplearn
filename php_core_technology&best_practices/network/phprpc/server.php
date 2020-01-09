<?php
include(dirname(__FILE__) . "/../../../../../sdk/phprpc/php/phprpc_server.php");

class Server
{
	static function hello(){
		return "Hello World!";
	}
}

$server = new PHPRPC_Server();
$server->add('hello', 'server');
$server->start();

?>
