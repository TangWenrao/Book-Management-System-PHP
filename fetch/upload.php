<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<title>上传</title>
</head>
<body>
	<div class="panel panel-default" style="width: 500px;margin: 10px auto;">
			<div class="panel-heading">
				图书上传
			</div>
			<div class="panel-body">
				<form class="form-horizontal" role="form" method="post" action="load.php">
					<div class="form-group">
						<label class="col-sm-2 control-lable">书名</label>

						<div class="col-sm-10">

						<input type="text" name="name" class="form-control" placeholder="书名" >
					    </div>
					</div>
					<div class="form-group">
						<div>
							<label for="inputPassword3" class="col-sm-2 control-lable">作者</label>
						<div class="col-sm-10">
							<input type="text" name="writer" 	class="form-control"  placeholder="作者">
						</div>
						</div>
						
					</div>
					<div class="form-group">
						<div>
							<label for="inputPassword3" class="col-sm-2 control-lable">出版社</label>
						<div class="col-sm-10">
							<input type="text" name="publish" 	class="form-control" placeholder="出版社">
						</div>
						</div>
						
					</div>
					<div class="form-group">
						<div>
							<label for="inputPassword3" class="col-sm-2 control-lable">ISBN</label>
						<div class="col-sm-10">
							<input type="text" name="isbn" 	class="form-control" placeholder="ISBN（可选）">
						</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<input type="submit" class="btn btn-default" value="上传">
						</div>
					</div>
				</form>
				<form action="load.php" method="post" enctype="multipart/form-data">
					<label for="file">图片上传：</label>
					<input type="file" name="file" id="file"><br>
					<input type="submit" name="submit" value="上传">
				</form>

			</div>
			<div>
			<a href="/"><button type="button" value="返回">返回</button></a>
		</div>
		</div>
</body>
</html>
