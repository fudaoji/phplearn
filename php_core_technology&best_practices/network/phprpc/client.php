<?php
include(dirname(__FILE__) . "/../../../../../sdk/phprpc/php/phprpc_client.php");


$client = new PHPRPC_Client("http://demo.com/test/php/php_core_technology&best_practices/network/phprpc/server.php");
echo $client->hello();

?>
