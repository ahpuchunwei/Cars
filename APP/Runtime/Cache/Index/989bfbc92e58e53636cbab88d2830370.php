<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>个人中心-校园活动在线报名系统Provided by:Up-Team</title>
<link rel="__PUBLIC__/shortcut icon" href="favicon.ico" />
<link href="__PUBLIC__/style/common.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/style/user.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/style/user_info_pwd.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!--网页头部开始-->
<div id="head_part">
<!--固定的顶部栏-->
<div id="Top">
	<div id="top_con">
    	<!--日期插件-->
		<div id="time">
		<script type="text/javascript">
		today=new Date();
		var day; var date; var hello;
		hour=new Date().getHours()
		if(hour < 6)hello='  凌晨好! '
		else if(hour < 9)hello=' 早上好! '
		else if(hour < 12)hello=' 上午好! '
		else if(hour < 14)hello=' 中午好! '
		else if(hour < 17)hello=' 下午好! '
		else if(hour < 19)hello=' 傍晚好! '	
		else if(hour < 22)hello=' 晚上好! '
		else {hello='夜深了! '}
		var webUrl = webUrl;
		document.write(' '+hello);
		</script>
		<span id=localtime>
		<script type="text/javascript">
		function showLocale(objD)
		{
		var str,colorhead,colorfoot;
		var yy = objD.getYear();	
		if(yy<1900) yy = yy+1900;
		var MM = objD.getMonth()+1;
		if(MM<10) MM = '0' + MM;
      	var dd = objD.getDate();
      	if(dd<10) dd = '0' + dd;
      	var hh = objD.getHours();
      	if(hh<10) hh = '0' + hh;
      	var mm = objD.getMinutes();
      	if(mm<10) mm = '0' + mm;
     	var ss = objD.getSeconds();
      	if(ss<10) ss = '0' + ss;
      	var ww = objD.getDay();
      	if ( ww==0 ) colorhead="<font color=\"#000\">";
     	if ( ww > 0 && ww < 6 ) colorhead="<font color=\"#000\">";
      	if ( ww==6 ) colorhead="<font color=\"#000\">";
      	if (ww==0) ww="星期日";
      	if (ww==1) ww="星期一";
      	if (ww==2) ww="星期二";
      	if (ww==3) ww="星期三";
      	if (ww==4) ww="星期四";
      	if (ww==5) ww="星期五";
      	if (ww==6) ww="星期六";
      	colorfoot="</font>"
      	str = colorhead + yy + "年" + MM + "月" + dd + "日 " + hh + ":" + mm + ":" + ss + " " + ww + colorfoot;
      	return(str);
      	}
      	function tick()
      	{
      	var today;
      	today = new Date();
      	document.getElementById("localtime").innerHTML = showLocale(today);
      	window.setTimeout("tick()", 1000);
      	}
      	tick();
      	</script>
        </span>
      	</div>
        
        <!--天气插件-->
      	<div id="weather">
      	<iframe name="weather_inc" src="http://cache.xixik.com.cn/10/nanchang/" width="300px" height="25" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" ></iframe>
      	</div>
     	
        <!--欢迎、登录-->
    	<div id=top_right>
     		欢迎你 !&nbsp <?php echo ($username); ?> &nbsp <?php echo ($show); ?> 
     	</div>
	</div>
</div>

<!--logo标志于与底图-->
<div id="logo">
	<div id="face" style="background-image:url(__PUBLIC__/images/photo.png)">
		<img src="__PUBLIC__/images/logo.png" />
	</div>
</div>
<!--logo标志于与底图结束-->

<!--导航条-->
<div id="bar">
	<div id="lm">
		<a href="<?php echo U(GROUP_NAME.'/Index/index');?>" class="nv">首页</a>
      	<a href="<?php echo U(GROUP_NAME.'/Index/Read/hotActivity');?>" class="nv" >热门活动</a>
      	<a href="<?php echo U(GROUP_NAME.'/Index/Read/schoolActivity');?>" class="nv" >校级活动</a>
        <a href="<?php echo U(GROUP_NAME.'/Index/Read/collegeActivity');?>" class="nv" >院级活动</a>
        <!--登录后部分开始-->
        
        <a href="<?php echo U(GROUP_NAME.'/Index/User/index');?>" class="nv">个人中心</a>
        
     	<a href="<?php echo U(GROUP_NAME.'/Index/index');?>" class="nv" target="_blank">关于我们</a>
      	<!--导航条上的搜索功能-->
      	<form id="search_area" name="search_area" method="post" action="search.php">
		<select name="type" id="fenlei">
          	<option>所有分类</option>
          	<option>校级活动</option>
         	<option>院级活动</option>
          	<option>社团活动</option>
        </select>
        <input type="text" name="txt_search" id="txt_search" />
        <input type="submit" name="btn_search" id="btn_search" value="搜索" />
        </form>
        <!--导航条上的搜索功能结束-->
	</div>
</div>
<!--导航条结束-->
</div>
<!--网页头部结束-->

<!--网页中部开始-->
<div id="main">
	<!--左半边用户菜单-->
    <div class="con_left">
    	<h4>个人信息</h4>
        <div class="info">
        	<div class="info_1">
            	<div class="img">
                	<img src="__PUBLIC__/images/up_team_icon.png" width="50px;" height="50px;"/>
                </div>
            	<div class="name">
                	<b><?php echo ($username); ?></b> 同学
                </div>
            </div>
            <div class="info_2">
            	<div class="acc"><?php echo ($college); ?></div>
            </div>
            <div class="quit">
            	<a href="#"><?php echo ($show); ?></a>
            </div>
        </div>
        <div class="control">
        	<div class="control_ul">
            	<h4>账户管理</h4>
            	<ul>
                	<a href="<?php echo U(GROUP_NAME.'/Index/User/index');?>"><li>欢迎信息</li></a>
                    <a href="<?php echo U(GROUP_NAME.'/Index/User/userInfo');?>"><li>基本信息</li></a> 
                    <a href="<?php echo U(GROUP_NAME.'/Index/User/userPWD');?>"><li>密码修改</li></a>
                </ul>
            </div>
            <div class="control_ul">
            	<h4>活动管理</h4>
            	<ul>
                	<a href="<?php echo U(GROUP_NAME.'/Index/User/allActivity');?>"><li>所有参加</li></a>
                    <a href=""><li>即将开始</li></a>
                    <a href=""><li>已经结束</li></a>
                </ul>
            </div>
        </div>
    </div>
    
    <!--右半边详细界面-->
    <div class="con_right">
    	<h4>基本信息</h4>
        <!--用户信息区域-->
        <div class="info_part">
        	<div class="info_con">
            	<form action="" method="post" name="reg_table" class="info_table">
    			<div class="input_part">
    				<p class="item_name">
        				<label class="item">账户：</label>
            			<span><?php echo ($userid); ?></span>
                    </p>
                    
        			<p class="item_realname">
        				<label class="item">真实姓名：</label>
           				<span><?php echo ($username); ?></span>
        			</p>
                    
        			<p class="item_sex">
       	  				<label class="item">性别：</label>
           				<span>男</span>
        			</p>
                    
        			<p class="item_acc_class">
       	  				<label class="item">所在学院：</label>
            			<span><?php echo ($college); ?></span>
       				</p>
                    
        			<p class="item_phone">
        				<label class="item">联系电话：</label>
            			<input name="txt_phone" type="text" maxlength="11" class="txt" value="18270838010"/><!--自动读取数据库中该账户的电话号码-->
            			<br /><span class="tips">为了方便通知您活动进展，请填写能接收消息的号码</span>
       				</p>
                    
        			<p class="item_pwd">
        				<label class="item">密码：</label>
            			<input name="txt_pwd1" type="password" maxlength="16" class="txt"/>
            			<br /><span class="tips">需要登录密码正确才能修改</span>
        			</p>
                    
        			<p class="item_checksum">
        				<label class="item">验证码：</label>
            			<input name="txt_check" type="text" maxlength="4" class="txt txt_check"/>
             			<a href="#"><img src="<?php echo U(GROUP_NAME.'/Login/verify');?>" id="code"/></a>
             			<br /><span class="tips">看不清验证码？点击图片刷新验证码</span>
        			</p>
       			</div>
        
        		<div class="btn_part">
        			<input name="btn_submit" type="submit" value="提交" class="btn btn_submit"/>
            		<input name="btn_reset" type="reset" value="重置" class="btn btn_reset"/>
       			</div>
    		</form>
            </div>
        </div>
        <!--用户信息区域结束-->
    </div>
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