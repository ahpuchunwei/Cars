<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link href="__PUBLIC__/assets/css/bui-min.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
<style type="text/css">
/*****分页处理*******/

.page {
	font-size:12px;color:#666;PADDING-RIGHT: 3px; PADDING-LEFT: 3px; PADDING-BOTTOM: 3px; MARGIN: 3px; PADDING-TOP: 3px;
	
}
.page .count,.page .nowpage{margin-right:10px;}
.page .selfpage {
	background:#2E6AB1;color:#fff;BORDER-RIGHT: #9aafe5 1px solid; PADDING-RIGHT: 5px; BORDER-TOP: #9aafe5 1px solid; PADDING-LEFT: 5px; PADDING-BOTTOM: 2px; BORDER-LEFT: #9aafe5 1px solid; MARGIN-RIGHT: 2px; PADDING-TOP: 2px; BORDER-BOTTOM: #9aafe5 1px solid; TEXT-DECORATION: none
}
.page a {
	BORDER-RIGHT: #9aafe5 1px solid; PADDING-RIGHT: 5px; BORDER-TOP: #9aafe5 1px solid; PADDING-LEFT: 5px; PADDING-BOTTOM: 2px; BORDER-LEFT: #9aafe5 1px solid; COLOR: #2e6ab1; MARGIN-RIGHT: 2px; PADDING-TOP: 2px; BORDER-BOTTOM: #9aafe5 1px solid; TEXT-DECORATION: none
}
.page a:hover {
	BORDER-RIGHT: #2b66a5 1px solid; BORDER-TOP: #2b66a5 1px solid; BORDER-LEFT: #2b66a5 1px solid; COLOR: #000; BORDER-BOTTOM: #2b66a5 1px solid; BACKGROUND-COLOR: lightyellow
}
.page a:active {
	BORDER-RIGHT: #2b66a5 1px solid; BORDER-TOP: #2b66a5 1px solid; BORDER-LEFT: #2b66a5 1px solid; COLOR: #000; BORDER-BOTTOM: #2b66a5 1px solid; BACKGROUND-COLOR: lightyellow
}
.page span.current {
	BORDER-RIGHT: navy 1px solid; PADDING-RIGHT: 5px; BORDER-TOP: navy 1px solid; PADDING-LEFT: 5px; FONT-WEIGHT: bold; PADDING-BOTTOM: 2px; BORDER-LEFT: navy 1px solid; COLOR: #fff; MARGIN-RIGHT: 2px; PADDING-TOP: 2px; BORDER-BOTTOM: navy 1px solid; BACKGROUND-COLOR: #2e6ab1
}
.page span.disabled {
	BORDER-RIGHT: #929292 1px solid; PADDING-RIGHT: 5px; BORDER-TOP: #929292 1px solid; PADDING-LEFT: 5px; PADDING-BOTTOM: 2px; BORDER-LEFT: #929292 1px solid; COLOR: #929292; MARGIN-RIGHT: 2px; PADDING-TOP: 2px; BORDER-BOTTOM: #929292 1px solid
}
.page #pagekeydown{}
.page input{height:22px;line-height:16px;padding:0px 0px;margin:0px;margin-right: 5px;}
.page button{height:22px;line-height: 6px;display: inline;}
.page select{}
</style>
</head>

<body>
<table class='table'>
	<tr>
		<th>ID</th>
		<th>用户名</th>
		<th>用户学号</th>
		<th>用户性别</th>
		<th>上次登录时间</th>
		<th>上次登录IP</th>
		<th>所在学院</th>
		<th>班级/单位</th>
		<th>联系方式</th>
		
		<th>操作</th>
	</tr>
	<?php if(is_array($user)): foreach($user as $key=>$v): ?><tr>
			<td align="center"><?php echo ($v["id"]); ?></td>
			<td align="center"><?php echo ($v["username"]); ?></td>
			<td align="center"><?php echo ($v["uid"]); ?></td>
			<td align="center"><?php echo ($v["sex"]); ?></td>
			<td align="center"><?php echo ($v["logintime"]); ?></td>
			<td align="center"><?php echo ($v["loginip"]); ?></td>			
			<td align="center"><?php echo ($v["college"]); ?></td>
			<td align="center"><?php echo ($v["class"]); ?></td>
			<td align="center"><?php echo ($v["phone"]); ?></td>
			
			
			
			
			<th>
				<a href="<?php echo U(__GROUP_NAME__.'/Admin/User/deleteUser',array('pid'=>$v['id']));?>"  id="btnSearch" class="button button-primary">删除 </a>
				<a href="<?php echo U(__GROUP_NAME__.'/Admin/User/modifyUser',array('pid'=>$v['id']));?>"  id="btnSearch" class="button button-primary">修改 </a>
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