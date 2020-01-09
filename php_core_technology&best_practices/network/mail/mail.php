<?php
@header("Content-Type: text/html;charset: utf-8");
include("SmtpMail.php");

$host = "smtp.qq.com";
$port = 25;
$user = "461960962@qq.com";
$pass = "zxbcrwqycirmbich";  //去对应的邮箱设置中生成授权密码

$from = $user;
$to = $user;
$subject = "测试";
$content = "<a href='http://www.huihuiba.net/' target='_blank'>点击链接获取优惠券-".date('Y-m-d H:i')."</a>";

$mail = new SmtpMail($host, $port, $user, $pass, 1, 1);
if($res = $mail->sendMail($from, $to, $subject, $content) === false){
    exit($mail->getErrMsg());
}else{
    exit('发送成功');
}


