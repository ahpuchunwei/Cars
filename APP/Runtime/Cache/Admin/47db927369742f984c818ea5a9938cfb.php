<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>

<link href="__PUBLIC__/assets/css/bui-min.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
  
<script type="text/javascript">
	window.UEDITOR_HOME_URL='__ROOT__/Data/Ueditor/';
	window.onload=function(){
	window.UEDITOR_CONFIG.initialFrameHeight=400;
	window.UEDITOR_CONFIG.initialFrameWidth=1440;
	UE.getEditor('content');
}
	
</script>
<style type="text/css">


.bt2{padding:8px 15px;margin-right:6px; background: #4884D5;color:#fff;border-radius: 3px; text-align: center;;display: block;cursor: pointer;}  


   </style>
<script type="text/javascript" src="__ROOT__/Data/Ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="__ROOT__/Data/Ueditor/ueditor.all.min.js"></script>

<body>
 <form action="<?php echo U(GROUP_NAME.'/Activity/runAddActivity');?>" id="searchForm" method='post' ">
 <table class='table'>
 		<tr>
 			<th colspan='2' align="left">添加活动</th>
 		</tr>
 		
 		<tr>
 			<td align="right" width='10%'>所属分类</td>
 			<td>
 				<select  name='type'>
 					<option value="">===请选择分类===</option>
 					<option value="校级活动">校级活动</option>
 					<option value="院级活动">院级活动</option>
 					<option value="社团活动">社团活动</option>
 					<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); echo ($v["name"]); ?></option><?php endforeach; endif; ?>
 				</select>
 			</td>
 		</tr>
 		
 		<tr>
 			<td align="right">起始时间:</td>
 			<td >  
              		<input type="text" class="calendar" name="starttime" height="20px"><span> - </span><input name="endtime" type="text" class=" calendar">
 			</td>
 		</tr>
 		
 		<tr>
 			<td align="right">总人数</td>
 			<td><input type="text" name="numbers"/>人</td>
 			
 		</tr>
 		
 		<tr>
 			<td align="right">标题</td>
 			<td>
 				<input type="text" name="title"/>
 			</td>
 		</tr>
 		<tr>
 			<td colspan='2'>
 				<textarea name="content" id="content" ></textarea>
 			</td>
 		</tr>
 		
 		<tr>
 			<td align="center" colspan='2'>
 			<input type="submit" value="发布" id="btnSearch" class="button button-primary"/>
 			</td>
 		</tr>
 		  
 		
 </table>
 <script type="text/javascript" src="__PUBLIC__/assets/js/jquery-1.8.1.min.js"></script>
 <script type="text/javascript" src="__PUBLIC__/assets/js/bui-min.js"></script>
 
<script type="text/javascript">
  BUI.use(['common/search','bui/overlay'],function (Search,Overlay) {
    
    var enumObj = {},
      columns = [
          {renderer:function(v){
		  
		  }},
        ],
      store = Search.createStore(),
      gridCfg = Search.createGridCfg();

    var  search = new Search({
      }),
      grid = search.get('grid');
  });
</script>
 </form>
</body>
</html>