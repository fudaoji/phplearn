<?php
include_once dirname(__FILE__) . "/../Template.php";
$tpl = new Template();

showTest();
//configTest();

function showTest() {
	global $tpl;
	$tpl->show('member');
}

function configTest() {
	print_r($tpl->getConfig());
}

?>