<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title> 活动在线报名系统</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	    
	    
	    <link href="__PUBLIC__/Css/login.css" rel="stylesheet" />
	    
		<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/Js/login.js"></script>
		<script type="text/javascript">
			var URL='<?php echo U(GROUP_NAME."/Login/verify");?>/';
		</script> 
	</head>
	<body>
		<div id="top">

		</div>
		<div class="login">	
			<form action="<?php echo U(GROUP_NAME.'/Login/login');?>" method="post" id="login">
			<div class="title">
				  校园活动在线报名系统 | 登录后台
			</div>
			<table border="1" width="100%">
				<tr>
					<th>管理员帐号:</th>
					<td>
						<input type="username" name="uid" class="len250"/>
					</td>
				</tr>
				<tr>
					<th>密码:</th>
					<td>
						<input type="password" class="len250" name="password"/>
					</td>
				</tr>
				<tr>
					<th>验证码:</th>
					<td>
						<input type="code" class="len250" name="code"/>  <a href="javascript:void(change_code(this));"><img src="<?php echo U(GROUP_NAME.'/Login/verify');?>" id="code"/></a>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="padding-left:160px;"> <input type="submit" class="submit" value="登录"/></td>
				</tr>
			</table>
		</form>
	</div>
	</body>
</html>