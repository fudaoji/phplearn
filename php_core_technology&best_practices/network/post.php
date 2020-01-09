<?php
if(empty($_POST)){
?>
<!doctype html>
<html>
<head>
</head>
<body>
<form method="post" action="">
<input name="author" placeholder="enter author" /><br>
<input name="email" placeholder="enter email" /> <br>
<input name="content" placeholder="enter content" /> <br>
<button type="submit">提交</button>
</form>
</body>
</html>

<?php
} else {
$post_data = $_POST;
//var_dump($post_data);exit;
if(empty($post_data)){
	echo "请填写数据在提交";exit;
}
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = 'test';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, [
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8';"
	]);

    // 设置 PDO 错误模式为异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 预处理 SQL 并绑定参数
    $stmt = $conn->prepare("INSERT INTO comment (author, email, content)
    VALUES (:author, :email, :content)");
    $stmt->bindParam(':author', $author);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':content', $content);

    // 插入行
    $author = $post_data['author'];
    $email = $post_data['email'];
    $content = $post_data['content'];
    $stmt->execute();

    echo "新记录插入成功";
}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}
$conn = null;

}
?>
