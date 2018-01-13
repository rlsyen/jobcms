<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>用户信息添加与编辑</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="/jobcms/Public/css/bootstrap.min.css">
<link rel="stylesheet" href="/jobcms/Public/css/mycss.css">
</head>
<body>
	<div class="container divwidth">
		<div class="row">
			<div class="col-md-12">
				<form action="<?php echo ($act); ?>" class="form-horizontal" method="post">
					<div class="form-group">
						<label for="" class="control-label col-md-2">
							用户名：
						</label>
						<div class="col-md-10">
							<input type="text" name="username" id="username" class="form-control" value="<?php if(!empty($userInfo)): echo ($userInfo["username"]); endif; ?>"/>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="control-label col-md-2">
							密码：
						</label>
						<div class="col-md-10">
							<input type="password" name="password" id="password" class="form-control"/>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="control-label col-md-2">
							昵称：
						</label>
						<div class="col-md-10">
							<input type="text" name="name" id="name" class="form-control"/>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="control-label col-md-2">
							邮箱：
						</label>
						<div class="col-md-10">
							<input type="text" name="email" id="email" class="form-control"/>
						</div>
					</div>
					<div class="from-group">
						<label for="" class="control-label col-md-2">
							激活：
						</label>
						<div class="col-md-10">
							是<input type="radio" name="active" id="active" value="1" checked="checked" />
							否<input type="radio" name="active"  value="0" >
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-10 col-md-offset-2">
							<input type="submit" value="<?php echo ($actInfo); ?>" class="btn btn-primary"/>
						</div>
					</div>
					<input type="hidden" name="id" value="<?php if(!empty($userInfo["id"])): echo ($userInfo["id"]); endif; ?>">
				</form>
			</div>
		</div>
	</div>
</body>
</html>