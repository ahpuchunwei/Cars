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

<script type="text/javascript">
	function danger(){
		window.alert("确定删除?");
		
	}
</script>

</head>
<body>
<form action="" method="post">
	<table class='table' >
		<tr>
			<th colspan="8" align="left"  >
				<?php echo ($title); ?>
			</th>
		</tr>
		<tr>
			<th align="center">活动ID</th>
			<th align="center">活动类型</th>
			<th align="center">活动标题</th>
			
			<th align="center" >活动起止时间</th>
		
			<th align="center">举办单位/学院</th>
			<th>报名/总数</th>
			<th align="center">操作</th>
		</tr>
		
			<?php if(is_array($activity)): foreach($activity as $key=>$v): ?><tr>	
				<td align="center"><?php echo ($v["aid"]); ?></td>
				<td align="center"><?php echo ($v["type"]); ?></td>
				<td align="center"><?php echo ($v["title"]); ?></td>
				
				<td align="center"><?php echo ($v["starttime"]); ?> 至  <?php echo ($v["endtime"]); ?></td>
				<td align="center"><?php echo ($v["college"]); ?></td>
				<td align="center"><?php echo ($v["count"]); ?>/<?php echo ($v["numbers"]); ?></td>
				<th >
					<a href="<?php echo U(GROUP_NAME.'/Admin/ExportExcel/index',array('aid'=>$v['aid']));?>"  id="btnSearch" class="button button-primary">报名表</a>
					<a  href="<?php echo U(GROUP_NAME.'/Admin/Activity/modifyActivity',array('aid'=>$v['aid']));?>"  id="btnSearch" class="button button-primary">修改</a>
					<a onclick="danger()" href="<?php echo U(GROUP_NAME.'/Admin/Activity/deleteActivity',array('aid'=>$v['aid' ]));?>"  id="btnSearch" class="button button-primary">删除</a>
				</th>
			</tr><?php endforeach; endif; ?>
			
			 <tr align="center">
			<td colspan='10' align='center' class="page">
				<?php echo ($page); ?>
			</td>
	</tr>
			
	</table>

</form>
</body>
</html>