<?php
include"conn.php";
 $num=$_GET['num'];
$sql="select *from book where num='{$num}'";
 $res=$conn ->query($sql);
 $row=$res ->fetch_assoc();
 // var_dump($row);
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<title>更改</title>
</head>
<body>
	<div class="panel panel-default" style="width: 500px;margin: 10px auto;">
			<div class="panel-heading">
				图书信息更改
			</div>
			<div class="panel-body">

				<form class="form-horizontal" role="form" method="post" action="edaction.php" enctype="multipart/form-data">
					<input type="hidden" name="num" <?php echo $row['num'] ?>>
					<div class="form-group">
						<label class="col-sm-2 control-lable">书名</label>

						<div class="col-sm-10">

						<input type="text" name="name" class="form-control" value="<?php echo $row['name']?>">
					    </div>
					</div>
					<div class="form-group">
						<div>
							<label for="inputPassword3"  class="col-sm-2 control-lable">作者</label>
						<div class="col-sm-10">
							<input type="text" name="writer" 	class="form-control" value="<?php echo $row['writer']?>">
						</div>
						</div>
						
					</div>
					<div class="form-group">
						<div>
							<label for="inputPassword3" class="col-sm-2 control-lable">出版社</label>
						<div class="col-sm-10">
							<input type="text" name="publisher" 	class="form-control" value="<?php echo $row['publisher']?>">
						</div>
						</div>
						
					</div>
					<div class="form-group">
						<div>
							<label for="inputPassword3" class="col-sm-2 control-lable">ISBN</label>
						<div class="col-sm-10">
							<input type="text" name="ISBN" 	class="form-control" value="<?php echo $row['ISBN']?>">
						</div>
						</div>
					</div>
					<div class="form-group">
						<label for="file" class="col-sm-3 control-lable">图片更改：</label>
					<input type="file" name="file" id="file" value="<?php echo $row['ims']?>"><br>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<input type="submit" class="btn btn-default" value="上传">
						</div>
					</div>
				</form>
				

			</div>
			<div>
			<a href="index3.php"><button type="button" value="返回">返回</button></a>
		</div>
		</div>
</body>
</html>

	



</body>
</html>