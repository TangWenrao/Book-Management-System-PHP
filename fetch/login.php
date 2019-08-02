<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/login.js" ></script>
	<title>登录</title>
</head>
<body>
	<div class="container">
		<ul id="myTab" class="nav nav-tabs">
   			<li ><a href="#home" data-toggle="tab">管理员登录</a></li>
   			<li class="active"><a href="#ios" data-toggle="tab">用户登录</a></li>
   		</ul>
   		<div id="myTabContent" class="tab-content" style="padding-top: 80px;">
   			<div class="tab-pane fade" id="home">
   				<div>
   					<form class="form-horizontal" action="cklog.php" method="post">
					 <div class="form-group">
					    <label  class="col-sm-2 control-label">ID</label>
					    <div class="col-sm-10">
					    	<input type="text" class="form-control" name="id1" placeholder="ID">
					    </div>
					  </div>
					  	<div class="form-group">
						    <label  class="col-sm-2 control-label">Password</label>
						    <div class="col-sm-10">
						    	<input type="password" class="form-control" name="password1" placeholder="Password">
						    </div>
						</div>
					    <div class="form-group">
					    	<div class="col-sm-offset-2 col-sm-10">
					      		<div class="checkbox">
						        	<label>
						            <input type="checkbox"> Remember me
						        	</label>
						        	
					        	</div>
					    	</div>
					    </div>
					    <div class="form-group">
					    	<div class="col-sm-offset-2 col-sm-10">
					        	<button onclick="ck" type="submit" class="btn btn-default">Sign in</button>
					    	</div>
					    </div>
					</form>
   				</div>
   			</div>
   			<div class="tab-pane fade in active" id="ios">
   				<div>
   					<form class="form-horizontal" role = "form" method="post" action="ulogin.php">
					 <div class="form-group">
					    <label  class="col-sm-2 control-label">userID</label>
					    <div class="col-sm-10">
					    	<input type="text" class="form-control"  name="id2" placeholder="ID">
					    </div>
					  	</div>
					  	<div class="form-group">
						    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
						    <div class="col-sm-10">
						    	<input type="password" class="form-control"  name="password2" placeholder="Password">
						    </div>
						</div>
					    <div class="form-group">
					    	<div class="col-sm-offset-2 col-sm-10">
					      		<div class="checkbox">
						        	<label>
						            <input type="checkbox"> Remember me
						        	</label>
						        </div>
						        <label>
						        		<button><a href="signin.php">注册</a></button>
						        	</label>

					    	</div>
					    </div>
					    <div class="form-group ">
					    	<div class="col-sm-offset-2 col-sm-10 btn2">
					        	<button type="submit" class="btn btn-default" >登录</button>
					    	</div>
					    </div>
					</form>
   				</div>
    		</div>
    	</div>
    	<div>
			<a href="index1.php"><button type="button" value="返回" class="btn btn-default">回首页</button></a>
		</div>
			
			
</div>

</body>
</html>