<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>用户信息列表</title>
<link rel="stylesheet" href="/jobcms/Public/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="<?php echo U('user/add');?>" class="btn btn-primary btn-sm">添加</a>
            </div>
            <div class="col-md-10">
                <form action="<?php echo U('user/view');?>" class="form-inline" method="post">
                    <div class="form-group">
                        <label for="" class="control-label">关键字</label>
                        <input type="text" name="keyword" id="keyword" class="form-control"/>
                        <label for="" class="control-label">类型</label>
                        <select name="type" id="type" class="form-control">
                                <option value="username">用户名</option>
                                <option value="name">昵称</option>
                                <option value="id">ID</option>
                        </select>
                        <input type="submit" value="搜索" class="btn btn-primary btn-sm"/>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <th>ID</th>
                        <th>用户名</th>
                        <th>昵称</th>
                        <th>是否激活</th>
                        <th>操作</th>
                    </thead>
                    <?php if(is_array($userList)): $i = 0; $__LIST__ = $userList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($vo["id"]); ?></td>
                            <td><?php echo ($vo["username"]); ?></td>
                            <td><?php echo ($vo["name"]); ?></td>
                            <td><?php echo ($vo["active"]); ?></td>
                            <td>
                                <a href="<?php echo U('user/edit?id='.$vo['id']);?>">编辑</a>
                                <a href="<?php echo U('user/delete?id='.$vo['id']);?>">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>