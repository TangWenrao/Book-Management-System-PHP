<?php
include 'conn.php';
$id = $_POST['id'];
$psd = $_POST['password'];
echo $id;
if ($id == ''||$psd == '') {
	echo "<script>alert('ID或密码不能为空');window.location.href = 'signin.php';</script>";
}else{
	$sql = "insert into user  (id,password) values ('$id','$psd');";
	if ($conn->query($sql) === TRUE) {
	    echo "<script>alert('注册成功');window.location.href = 'login.php';</script>";
} else {

    echo "Error: " . $sql . "<br>" . $conn->error;
    echo "<script>alert('用户名已存在');window.location.href = 'signin.php';</script>";
}
}
