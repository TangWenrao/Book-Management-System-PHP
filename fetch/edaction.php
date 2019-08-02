<?php
include"conn.php";
if ($_FILES["file"]["name"]!=null) {
	if (file_exists("upload/" . $_FILES["file"]["name"]))
            {
                echo $_FILES["file"]["name"] . " 文件已经存在。 ";
                echo "<a href='edit.php'>返回</a>";
            }
            else
            {
                // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
                move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
                echo "文件存储在: " . "upload/" . $_FILES["file"]["name"];
            }
}
$num=$_POST['num'];
$publisher=$_POST['publisher'];
$name=$_POST['name'];
$writer=$_POST['writer'];
$ISBN=$_POST['ISBN'];
if ($name==''||$writer==''||$publisher==''||$ISBN=='') {
	echo "<script>alert('图书信息不能为空');
	window.location.href=edit.php?num='+$num;</script>";
	echo "<a href='edit.php?num='+$num>back</a>";

}
$sql="update book set publisher='{$publisher}',name='{$name}',writer='{$writer}',ISBN='{$ISBN}' where num='{$num}'";
$res=$conn ->query($sql);
if (!$res){
	echo "<script> alert('修改失败');
	window.location.href='edit.php?num='+$num;</script>";//???
		echo "<a href='edit.php?num='+$num>back</a>";
}else{
	echo "<script> alert('修改成功');
	window.location.href='index3.php';</script>";//???
		echo "<a href=index3.php>back</a>";
}
?>