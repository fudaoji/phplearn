<?php

$servername = "localhost";
$username = "root";
$password = "123456";
 
// 创建连接
$conn = new mysqli($servername, $username, $password);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

$name = $_GET['user'];
$pwd = $_GET['pwd'];
$sql = "SELECT * FROM j2ee_user where name='{$name}' and password='{$pwd}'";

$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"] . "<br>";
    }
} else {
    echo "empty";
}

$conn->close();

?>