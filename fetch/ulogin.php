<?php
include 'conn.php';
$id1 = $_POST['id2'];
$psd1 = $_POST['password2'];
if ($id1 == ''||$psd1 == '') {
	// echo "ID或密码不能为空";
	echo "<script>alert('ID或密码不能为空');window.location.href = 'login.php';</script>";
}else{
	 $sql = "select id,password from user where id = '$id1';";
	 $result = $conn->query($sql);
	 // var_dump($result);
	 if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        // echo "id: " . $row["id"]. " - Name: " . $row["password"]. "<br>";
        if ($psd1 == $row["password"]) {
        	echo $psd1,$row["password"];
        	echo "<script>alert('登录成功');window.location.href = 'index2.php';</script>";
        }else{
        	echo "<script>alert('密码错误');window.location.href = 'login.php';</script>";
        }
    }
	} else {
    	echo "0 结果";
    	echo "<script>alert('没有找到用户，请检查输入或先注册');window.location.href = 'login.php';</script>";
	}
}
setcookie("user", "$id1", time()+3600);