<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
 <head>
  <title> 搜索表单</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="__PUBLIC__/assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/assets/css/bui-min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/assets/css/page-min.css" rel="stylesheet" type="text/css" />   <!-- 下面的样式，仅是为了显示代码，而不应该在项目中使用-->
   <link href="__PUBLIC__/assets/css/prettify.css" rel="stylesheet" type="text/css" />
   <style type="text/css">
    code {
      padding: 0px 4px;
      color: #d14;
      background-color: #f7f7f9;
      border: 1px solid #e1e1e8;
    }
   </style>
 </head>
 <body>
  
  <div class="container">
    <div class="row">
      <form  id="searchForm"  class="form-horizontal span24"  action="<?php echo U(GROUP_NAME.'/Admin/Search/SearchActivity');?>" method="post">
        <div class="row">
          <div class="control-group span8">
            <label class="control-label">活动类型：</label>
            <div class="controls">
              <select  name='type'>
					<option value='所有活动'>所有活动</option>
 					<option value="校级活动">校级活动</option>
 					<option value="院级活动">院级活动</option>
 					<option value="社团活动">社团活动</option>
 				</select>
            </div>
          </div>
          <div class="control-group span8">
            <label class="control-label">活动标题：</label>
            <div class="controls">
              <input type="text" class="control-text" name="title">
            </div>
          </div>
          <div class="control-group span8">
            <label class="control-label">活动相关内容</label>
            <div class="controls" >
             	<input type="text" class="control-text" name="content">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="control-group span9">
            <label class="control-label">起止时间：</label>
            <div class="controls">
              <input type="text" class=" calendar" name="startDate"><span> - </span><input name="endDate" type="text" class=" calendar">
            </div>
          </div>
          <div class="span3 offset2">
            <button  type="submit" id="btnSearch" class="button button-primary">搜索</button>
          </div>
        </div>
      
      </form>
    </div>
    
  </div>
 
  <table class="table">
  	<tr>
  		
 			<th><?php echo ($aa["id"]); ?></th>
  			<th><?php echo ($aa["type"]); ?></th>
  			<th><?php echo ($aa["title"]); ?></th>
  			<th><?php echo ($aa["time"]); ?></th>
  			<th><?php echo ($aa["college"]); ?></th>
  			<th><?php echo ($aa["state"]); ?></th>
  			<th><?php echo ($aa["opera"]); ?></th>
  	</tr>
  	
  	<?php if(is_array($activity)): foreach($activity as $key=>$v): ?><tr>
  			<td align="center"><?php echo ($v["aid"]); ?></td>
  			<td align="center"><?php echo ($v["type"]); ?></td>
  			<td align="center"><?php echo ($v["title"]); ?></td>
  			<td align="center"><?php echo ($v["starttime"]); ?>至<?php echo ($v["endtime"]); ?></td>
  			<td align="center"><?php echo ($v["college"]); ?></td>
  			<td align="center"><?php echo ($v["numbers"]); ?></td>
  			<td></td>	
  		</tr><?php endforeach; endif; ?>
  	
  
  </table>
   <script type="text/javascript" src="__PUBLIC__/assets/js/jquery-1.8.1.min.js"></script>
  <script type="text/javascript" src="__PUBLIC__/assets/js/bui-min.js"></script>


  <script type="text/javascript" src="__PUBLIC__/assets/js/prettify.js"></script>
  <script type="text/javascript">
    $(function () {
      prettyPrint();
    });
  </script> 
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

  
   
  



<body>
</html>