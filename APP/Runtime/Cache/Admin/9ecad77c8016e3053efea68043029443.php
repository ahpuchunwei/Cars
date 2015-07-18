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
</html>
<table class="table">
  <tr>
    <th>通知ID</th>
	<th>通知类型</th>
    <th>通知标题</th>
    <th>所在学院</th>
    <th>发布者</th>
    <th>最后修改时间</th>
    <th>操作</th>  
  <?php if(is_array($inform)): foreach($inform as $key=>$v): ?><tr>
  		<td align="center"><?php echo ($v["id"]); ?></td>
  		<td align="center"><?php echo ($v["type"]); ?></td>
  		<td align="center"><?php echo ($v["title"]); ?></td>
  		<td align="center"><?php echo ($v["college"]); ?></td>
  		<td align="center"><?php echo ($v["username"]); ?></td>
  		<td align="center"><?php echo ($v["time"]); ?></td>
  		<th align="center">
  			<a href="<?php echo U(GROUP_NAME.'/Inform/modifyInform',array('id'=>$v['id']));?>"  id="btnSearch" class="button button-primary">修改</a>
  		 	<a href="<?php echo U(GROUP_NAME.'/Inform/deleteInform',array('id'=>$v['id']));?>"  id="btnSearch" class="button button-primary">删除</a>
  		 </th>
  		
  	</tr><?php endforeach; endif; ?>
    
  </tr>
  <tr align="center">
			<td colspan='10' align='center' class="page">
				<?php echo ($page); ?>
			</td>
	</tr>
</table>



</body>