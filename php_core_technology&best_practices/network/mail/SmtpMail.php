<?php

/**
 * e.g:
 *
$host = "smtp.qq.com";
$port = 25;
$user = "461960962@qq.com";
$pass = "xxxxxxxxxxxxxx";  //去对应的邮箱设置中生成授权密码

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
 *
 * Class SmtpMail
 */
class SmtpMail
{
	private $host = '';
	private $port = 25;
	private $user = ''; //登录SMTP服务器使用的用户名
	private $pass = ''; //登录SMTP服务器的密码
	private $debug = false; //是否开启调试
	private $sock;  //与SMTP服务器链接的句柄
	private $mailFormat = 0; //0: 文本   1：HTML内容
    private $errMsg = ''; //错误信息
    private $from = ''; //发件人
    private $to = ''; //收件人
    private $data = ''; //邮件data

	public function __construct($host, $port, $user, $pass, $format, $debug=0){
		$this->host = $host;
		$this->port = $port;
		$this->user = base64_encode($user);
		$this->pass = base64_encode($pass);
		$this->mailFormat = $format;
		$this->debug = $debug;

		$this->sock = fsockopen($this->host, $this->port, $errno, $errstr, 10);
		if(! $this->sock){
			exit("Error number: $errno, Error message: $errstr\n");
		}
		$response = fgets( $this->sock );
		if(strstr($response, "220") === false){
			exit("sever error: $response \n");
		}

	}

    /**
     * 返回错误信息
     * @return string
     * Author: Doogie<fdj@kuryun.cn>
     */
	function getErrMsg(){
	    return $this->errMsg;
    }

    /**
     * 设置msg
     * @param string $msg
     * Author: Doogie<fdj@kuryun.cn>
     */
	private function setErrMsg($msg = ''){
	    $msg && $this->errMsg = $msg;
    }

    /**
     * 显示调试信息
     * @param string $message
     * Author: Doogie<fdj@kuryun.cn>
     */
	private function showDebug($message = ''){
		if($this->debug){
			echo "<p>Debug: $message</p>";
		}
	}

    /**
     * 把命令发送到smtp服务器中执行
     * @param string $cmd
     * @param int $return_code
     * @return bool
     * Author: Doogie<fdj@kuryun.cn>
     */
	private function doCommand($cmd = '', $return_code = 0){
	    if($this->getErrMsg()){
	        return false;
        }
		fwrite($this->sock, $cmd);
		$response = fgets( $this->sock );
        $this->showDebug("response: " . $response);
		if(strstr($response, "$return_code") === false){
            $this->setErrMsg("send Command Error: " . $response);
			$this->showDebug("Error: " . $response);
			return false;
		}
		return true;
	}

    /**
     * 判断邮件地址是否合法
     * @param string $email
     * @return mixed
     * Author: Doogie<fdj@kuryun.cn>
     */
	private function isEmail($email = ''){
		return filter_var($email, FILTER_VALIDATE_EMAIL);
	}

    /**
     * 设置邮件内容
     * @param string $from
     * @param string $to
     * @param string $subject
     * @param string $body
     * @return bool
     * Author: Doogie<fdj@kuryun.cn>
     */
	private function setMail($from = '', $to = '', $subject = '', $body = ''){
        if(! $this->from = $this->isEmail($from)
            or ! $this->to = $this->isEmail($to)){
            $this->setErrMsg("Please enter valid from/to email");
            $this->showDebug("Please enter valid from/to email");
            return false;
        }

        if(empty($subject) or empty($body)){
            $this->setErrMsg("Please enter subject/body");
            $this->showDebug("Please enter subject/body");
            return false;
        }
        $subject = "=?UTF-8?B?".base64_encode($subject)."?=";  //解决中文乱码

        $detail = "MIME-Version: 1.0 \r\n";
        if($this->mailFormat == 1){
            $detail .= "Content-Type: text/html;Charset: utf-8 \r\n";
        }else{
            $detail .= "Content-Type: text/plain;Charset: utf-8 \r\n";
        }
        $detail .= "From: " . $from . "\r\n";
        $detail .= "To: " . $to . "\r\n";
        $detail .= "Subject: " . $subject . "\r\n\r\n";
        $detail .= $body;
        $this->data = $detail;
        return true;
    }

    /**
     * 发送指令
     * Author: Doogie<fdj@kuryun.cn>
     */
    private function sendCommands(){
	    $commands = [
	        ["HELO sendMail \r\n", 250],
            ["AUTH LOGIN\r\n", 334],
            [$this->user . "\r\n", 334],
            [$this->pass . "\r\n", 235],
            ["MAIL FROM: " . $this->from . "\r\n", 250],
            ["RCPT TO:" . $this->to . "\r\n", 250],
            ["DATA \r\n", 354],
            [$this->data."\r\n.\r\n", 250],
            ["QUIT \r\n", 221]
        ];
	    foreach ($commands as $command){
	        list($cmd, $code) = $command;
	        $this->doCommand($cmd, $code);
        }
    }

    /**
     * 发送操作
     * @param string $from
     * @param string $to
     * @param string $subject
     * @param string $body
     * @return bool
     * Author: Doogie<fdj@kuryun.cn>
     */
	function sendMail($from = '', $to = '', $subject = '', $body = ''){
	    if(! $this->setMail($from, $to, $subject, $body)){
	        return false;
        }

		$this->sendCommands();

		if($this->getErrMsg()){
		    return false;
        }
		return true;

	}
}
