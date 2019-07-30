<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<title>注册</title>
</head>
<body>
	<div class="panel panel-default" style="width: 500px;margin: 10px auto;">
			<div class="panel-heading">
				用户注册
			</div>
			<div class="panel-body">
				<form class="form-horizontal" role="form" method="post" action="regist.php">
					<div class="form-group">
						<label class="col-sm-2 control-lable">ID</label>

						<div class="col-sm-10">

						<input type="text" name="id" class="form-control" placeholder="Username" id="name">
					    </div>
					</div>
					<div class="form-group">
						<div>
							<label for="inputPassword3" class="col-sm-2 control-lable">密码</label>
						<div class="col-sm-10">
							<input type="password" name="password" 	class="form-control" id="inputPassword3" placeholder="Password">
						</div>
						</div>
						
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<input type="submit" class="btn btn-default" value="注册" onclick="return check()">
						</div>
					</div>
				</form>

			</div>
<div>
			<a href="login.php"><button type="button" value="返回">返回</button></a>
		</div>
		</div>
</body>
</html>