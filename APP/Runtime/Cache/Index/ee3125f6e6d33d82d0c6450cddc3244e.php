<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录--活动在线报名系统</title>
<link rel="__PUBLIC__/shortcut icon" href="favicon.ico" />
<link href="__PUBLIC__/style/common.css" rel="stylesheet" />
<link href="__PUBLIC__/style/login.css" rel="stylesheet" />
<script type="text/javascript">
			var URL='<?php echo U(GROUP_NAME."/Login/verify");?>/';
</script> 
</head>

<body>
<!--网页头部开始-->
<div id="head_part">
	<div class="head_inner">
    	<a href="#"><img src="__PUBLIC__/images/login/small_logo.png" alt="Up-Team作品：校园活动在线报名系统" /></a>
    	<h1>用户登录</h1>
    </div>
</div>
<!--网页头部结束-->

<!--网页中部开始-->
<div id="main">
	<!--左半边开始-->
	<div class="left_con">
    	<div class="for_ad">
        	<img src="__PUBLIC__/images/login/login_left.jpg"/>
        </div>
    </div>
    <!--左半边结束-->
    
    <!--右半边开始-->
    <div class="right_con">
        <form action="<?php echo U(GROUP_NAME.'/Login/login');?>" method="post" name="login_tab" class="login_tab">
        <div class="info_part">
        	<h2>登录</h2>
            <!--登录错误信息提醒-->
            <span class="error">
            	提醒：密码错误，请重试！
                <!--display:none与block显示-->
            </span>
        </div>
        <!--账户密码验证码输入区-->
        <div class="input_part">
        	<p>帐号</p>
            <input name="username" type="text" value="在此输入帐号..."  maxlength="10"
            	onfocus="
                        if(this.value =='在此输入帐号...')
                        {
                        	this.value =''
                        }"
                    onblur="
                    	if(this.value =='')
                    	{
                        	this.value='在此输入帐号...'
                        }"
            /><br />
            <p>密码</p>
            <input name="password" type="password" value="在此输入密码..."  maxlength="16"
            	onfocus="
                        if(this.value =='在此输入密码...')
                        {
                        	this.value =''
                        }"
                    onblur="
                    	if(this.value =='')
                    	{
                        	this.value='在此输入密码...'
                        }"
            /><br />
            <span class="checksum">
            <input name="code" type="text" value="输入验证码..." class="txt_check" maxlength="4"
            		onfocus="
                        if(this.value =='输入验证码...')
                        {
                        	this.value =''
                        }"
                    onblur="
                    	if(this.value =='')
                    	{
                        	this.value='输入验证码...'
                        }"
            />
            <a href="#"><img src="<?php echo U(GROUP_NAME.'/Login/verify');?>" id="code"/></a>
            </span>
        </div>
        <!--输入区结束-->
        <!--按钮区开始-->
        <div class="button_part">
        	<a href="#"><input name="btn_login" class="btn btn_login" type="submit" value="登&nbsp;&nbsp;&nbsp;&nbsp;录" /></a>
            <a href="#"><input name="btn_reg" class="btn btn_reg" type="button" value="注&nbsp;&nbsp;&nbsp;&nbsp;册" /></a>
            <a href="<?php echo U(GROUP_NAME.'/Index/index');?>"><input name="btn_backhome" class="btn btn_backhome" type="button" value="返&nbsp;&nbsp;&nbsp;&nbsp;回" /></a>
        </div>
        <!--按钮区结束-->
        </form>
    </div>
    <!--右半边开始-->
</div>
<!--网页中部结束-->

<!--底部开始-->
<div id="bottom">
	<div class="friend_link">
    	<div class="list_Title">
        	<span class="list_Title_icon">FLs</span>
            <span class="list_Title_con">友情链接</span>
        </div>
        <!--友情链接图片和连接地址-->
        <div class="list_Con">
        <a href="http://jwc.jxnu.edu.cn" target="new"><img class="fls_icon" src="__PUBLIC__/images/fls_icon/jwc_jxnu.png" alt="江西师大教务在线"/></a>
        <a href="http://jwc.jxnu.edu.cn" target="new"><img class="fls_icon" src="__PUBLIC__/images/fls_icon/jwc_jxnu.png" alt="江西师大教务在线"/></a>
        <a href="http://jwc.jxnu.edu.cn" target="new"><img class="fls_icon" src="__PUBLIC__/images/fls_icon/jwc_jxnu.png" alt="江西师大教务在线"/></a>
        <a href="http://jwc.jxnu.edu.cn" target="new"><img class="fls_icon" src="__PUBLIC__/images/fls_icon/jwc_jxnu.png" alt="江西师大教务在线"/></a>
        <a href="http://jwc.jxnu.edu.cn" target="new"><img class="fls_icon" src="__PUBLIC__/images/fls_icon/jwc_jxnu.png" alt="江西师大教务在线"/></a>
        </div>
        <!--友情链接图片和连接地址结束-->
    </div>
    
    <!--网站地图-->
    <div class="map_info">
    	<!--连接地图-->
    	<ul class="foot_1">
        	<!--关注我们-->
        	<li class="span_foot_help">
            	<h2 class="icon_weibo">关注我们</h2>
                <p><a href="#">新浪微博</a></p>
                <p><a href="#">腾讯微博</a></p>
            </li>
            
            <!--客服中心-->
            <li class="span_foot_help">
            	<h2 class="icon_centre">客服中心</h2>
                <p><a href="#">联系我们</a></p>
                <p><a href="#">咨询建议</a></p>
            </li>
            
            <!--关于本站-->
            <li class="span_foot_help">
            	<h2 class="icon_about">关于本站</h2>
                <p><a href="#">关于我们</a></p>
                <p><a href="#">用户协议</a></p>
                <p><a href="#">免责声明</a></p>
            </li>
        </ul>
        
        <!--二维码-->
		<div class="foot_2">
        	<img src="__PUBLIC__/images/2_icon.png" alt="二维码"/>
        </div>
    </div>
    <!--网站地图结束-->
    
    <!--版权信息-->
    <div class="copyrights">
    	<p align="center">版权：©校园活动在线报名系统   备案案号： 联系邮箱：</p>
    </div>
    
    <!--安全检测图标认证-->
    <div class="anquantubiao"></div>
</div>
<!--底部结束-->
</body>
</html>