<?php
include_once(dirname(__FILE__) . "/server.php");

$soap = new SoapServer(null, ['uri' => 'http://test-uri']);
$soap->setClass('Member');
$soap->addFunction('getTime');
$soap->addFunction(SOAP_FUNCTIONS_ALL);
$soap->handle();
//var_dump($soap->getFunctions());exit;
