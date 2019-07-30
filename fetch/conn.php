<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$database = "fetch";
$conn = new mysqli($servername,$username,$password,$database);
if($conn ->connect_error){
	die("连接失败" .  $conn ->connect_error);
}else{
	// echo "连接成功";
	// echo "<br>";
}