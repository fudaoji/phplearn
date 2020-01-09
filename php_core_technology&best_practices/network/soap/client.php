<?php 

$client = new SoapClient(null, [
		'location' => 'http://demo.com/test/php/php_core_technology&best_practices/network/soap/proxy.php',
		'uri' => 'http://test-uri',
		'style' => SOAP_RPC,
		'use' => SOAP_ENCODED,
		'trace' => 1,
		'exception' => 0
]);
//var_export($client);exit;
echo $client->getTime();

