<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link href="__PUBLIC__/assets/css/bui-min.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/assets/css/dpl-min.css" rel="stylesheet" type="text/css" />

</head>

<body>
<table class='table'>
	<tr>
		<th>ID</th>
		<th>用户名</th>
		<th>类型</th>
		<th>用户学号</th>
		<th>用户性别</th>
		<th>上次登录时间</th>
		<th>上次登录IP</th>
		<th>所在学院</th>
		
		<th>联系方式</th>
		
		<th>操作</th>
	</tr>
	<?php if(is_array($user)): foreach($user as $key=>$v): ?><tr>
			<td align="center"><?php echo ($v["id"]); ?></td>
			
			<td align="center"><?php echo ($v["username"]); ?></td>
			<td align="center">管理员</td>
			<td align="center"><?php echo ($v["uid"]); ?></td>
			<td align="center"><?php echo ($v["sex"]); ?></td>
			<td align="center"><?php echo ($v["logintime"]); ?></td>
			<td align="center"><?php echo ($v["loginip"]); ?></td>			
			<td align="center"><?php echo ($v["college"]); ?></td>
			
			<td align="center"><?php echo ($v["phone"]); ?></td>
			
			
			
			
			<th>
				<a href="<?php echo U(__GROUP_NAME__.'/Admin/User/deleteUser',array('pid'=>$v['id']));?>"  id="btnSearch" class="button button-primary">删除 </a>
				<a href="<?php echo U(__GROUP_NAME__.'/Admin/User/modifyManage',array('pid'=>$v['id']));?>"  id="btnSearch" class="button button-primary">修改 </a>
			</th>
		<tr><?php endforeach; endif; ?>
	
	<tr align="center">
			<td colspan='10' align='center' class="page">
				<?php echo ($page); ?>
			</td>
	</tr>
	
</table>
</body>
</html>