<?php
$num=$_GET['num'];
include "conn.php";
$sql="delete from book where num='{$num}'";
$res=$conn ->query($sql);
if (!$res) {
	echo "<script> alert('删除失败');
	window.location.href='index3.php';</script>";//???
		echo "<a href=index3.php>back</a>";
}else{

	echo "<script> alert('删除成功');
	window.location.href='index3.php';</script>";//???
		echo "<a href=index3.php>back</a>";
}