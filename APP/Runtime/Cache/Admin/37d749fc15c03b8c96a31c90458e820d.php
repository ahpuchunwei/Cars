<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<script language="javascript" type="text/javascript">   
         //定义 城市 数据数组   
cityArray = new Array();   
cityArray[0] = new Array("计算机学院","12级物联网班|嵌入式班|计算机科学与技术1班|计算机科学与技术2班|网络工程1班|网络工程二班|软件服务外包1班|软件服务外包二班|软件服务外包3班");   
cityArray[1] = new Array("外国语学院","商务英语1班|商务英语二班|日语一班|日语二班");   
cityArray[2] = new Array("体育学院","体育一班|体育二班|体育三班|体操");   

  
         function getCity(currProvince)   
         {   
             //当前 所选择 的 省   
             var currProvincecurrProvince = currProvince;   
             var i,j,k;   
             //清空 城市 下拉选单   
            document.all.selCity.length = 0 ;   
             for (i = 0 ;i <cityArray.length;i++)   
               {      
                   //得到 当前省 在 城市数组中的位置   
                   if(cityArray[i][0]==currProvince)   
                     {      
                         //得到 当前省 所辖制的 地市   
                        tmpcityArray = cityArray[i][1].split("|")   
                           for(j=0;j<tmpcityArray.length;j++)   
                           {   
                             //填充 城市 下拉选单   
                             document.all.selCity.options[document.all.selCity.length] = new Option(tmpcityArray[j],tmpcityArray[j]);   
                           }   
                     }   
               }   
         }   
</script>

<link href="__PUBLIC__/assets/css/bui-min.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
<style type="text/css">


.bt2{padding:8px 15px;margin-right:6px; background: #4884D5;color:#fff;border-radius: 3px; text-align: center;;display: block;cursor: pointer;}  


   </style>   
</head>
<body>
<form action="<?php echo U(GROUP_NAME.'/Admin/User/runAddUser');?>" method="post">

<table class='table'>
	<tr>
		<th colspan='2' align="left">添加用户</td>
	</tr>
	
	<tr>
		<td align="right">真实姓名:</td>
		<td><input type="text" name='username'></td>
	<tr>
	
	<tr>
		<td align="right">学号:</td>
		<td><input type="text" name='uid'></td>
	<tr>
	
	
	<tr>
		<td align="right">密码:</td>
		<td><input type="password" name='password' /></td>
	</tr>
	<tr>
          <td align="right">性　　别：</td>
          <td><input name="sex" type="radio" value="保密" />&nbsp保密   &nbsp<input name="sex" type="radio" value="男" />&nbsp男&nbsp<input name="sex" type="radio" value="女" />&nbsp女</td>
        </tr>

	
	<tr>
		<td align="right">所在学院</td>
		<td>
 					<select name='college' id="selProvince" onChange = "getCity(this.options[this.selectedIndex].value)">   
        				<option value="">——-请选择-——</option>   
        				<option value="计算机学院">计算机学院</option>   
        				<option value="外国语学院">外国语学院</option>   
        				<option value="体育学院">体育学院</option>    
    				</select>   
    				&nbsp;&nbsp;
 				    <select id="selCity" name='class'>   
        				<option>--——-----城市----——--</option>   
    		    	</select>   
 			
		</td>
	</tr>
	
	<tr>
          <td align="right">联系方式:</td>
          <td ><input name="phone" type="text" size="30" maxlength="30"  class="txt"/></td>
        </tr>
	
	
	
	<tr>
		<td colspan='2'  align="center"><input type="submit" value='保存添加' class="button button-primary"></td>
		
	<tr>
</table>

</form>


</body>
</html>