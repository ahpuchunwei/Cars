<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>活动在线报名系统</title>
<link rel="__PUBLIC__/shortcut icon" href="favicon.ico" />
<link href="__PUBLIC__/style/common.css" rel="stylesheet" />
<link href="__PUBLIC__/style/read.css" rel="stylesheet" />
<style>
.reg{
	float:right;
	margin-right:50px;
}
.btn {
  display: inline-block;
  *display: inline;
  padding: 4px 12px;
  margin-bottom: 0;
  *margin-left: .3em;
  font-size: 14px;
  line-height: 20px;
  color: #333333;
  text-align: center;
  text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
  vertical-align: middle;
  cursor: pointer;
  background-color: #f5f5f5;
  *background-color: #e6e6e6;
  background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));
  background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
  background-repeat: repeat-x;
  border: 1px solid #cccccc;
  *border: 0;
  border-color: #e6e6e6 #e6e6e6 #bfbfbf;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  border-bottom-color: #b3b3b3;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe6e6e6', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
  *zoom: 1;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
     -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
          box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
}

.btn:hover,
.btn:focus,
.btn:active,
.btn.active,
.btn.disabled,
.btn[disabled] {
  color: #333333;
  background-color: #e6e6e6;
  *background-color: #d9d9d9;
}

.btn:active,
.btn.active {
  background-color: #cccccc \9;
}

.btn:first-child {
  *margin-left: 0;
}

.btn:hover,
.btn:focus {
  color: #333333;
  text-decoration: none;
  background-position: 0 -15px;
  -webkit-transition: background-position 0.1s linear;
     -moz-transition: background-position 0.1s linear;
       -o-transition: background-position 0.1s linear;
          transition: background-position 0.1s linear;
}

.btn:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}

.btn.active,
.btn:active {
  background-image: none;
  outline: 0;
  -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
     -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
          box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
}

.btn.disabled,
.btn[disabled] {
  cursor: default;
  background-image: none;
  opacity: 0.65;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
     -moz-box-shadow: none;
          box-shadow: none;
}

.btn-large {
  padding: 11px 19px;
  font-size: 17.5px;
  -webkit-border-radius: 6px;
     -moz-border-radius: 6px;
          border-radius: 6px;
}

.btn-large [class^="icon-"],
.btn-large [class*=" icon-"] {
  margin-top: 4px;
}
.btn-primary {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #006dcc;
  *background-color: #0044cc;
  background-image: -moz-linear-gradient(top, #0088cc, #0044cc);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
  background-image: -webkit-linear-gradient(top, #0088cc, #0044cc);
  background-image: -o-linear-gradient(top, #0088cc, #0044cc);
  background-image: linear-gradient(to bottom, #0088cc, #0044cc);
  background-repeat: repeat-x;
  border-color: #0044cc #0044cc #002a80;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0044cc', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active,
.btn-primary.disabled,
.btn-primary[disabled] {
  color: #ffffff;
  background-color: #0044cc;
  *background-color: #003bb3;
}

.btn-primary:active,
.btn-primary.active {
  background-color: #003399 \9;
}
</style>
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
		<!--左半边：正文和评论区 开始-->
		<div class="con_left">
			<!--当前位置开始-->
			<div class="current_nav">
				<span>当前位置：</span> <a href="index.html">首页</a> <span class="sub">></span>
				<a href="#"><?php echo ($position); ?></a>
			</div>
			<!--当前位置结束-->

			<!--文章阅览部分开始-->
			<div class="artical_part">
				<!--文章标题开始-->
				<div class="artical_title">
					
					<?php if(is_array($data)): foreach($data as $key=>$v): ?><h1><?php echo ($v["title"]); ?></h1>
					

					<!--文章发布信息开始-->
					<div class="artical_info">
						<span class="artical_posttime">发布时间: 09-01 </span> 
						<span
							class="artical_postuser"> 发布者：蒲春伟
						</span> <span class="artical_hitnum"> 人气： 10086
						</span>
						<!--文章发布信息结束-->
					</div>
				</div>
				<!--文章标题结束-->
				<div class="artical_content">
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["content"]); ?>	</p>
					
				</div>
				
				
				<div class="reg">
					<a href="<?php echo ($state['link']); ?>"  class="<?php echo ($class); ?>" ><?php echo ($state['state']); ?></a>
				</div>
				
				
			</div>
			<!--文章阅览部分结束-->

			<!--评论区部分开始-->
			<div id="discuss_part">
				<!-- 多说评论框 start --> 
				<div class="ds-thread" data-thread-key="<?php echo ($v["title"]); ?>" data-title="<?php echo ($v["title"]); ?>" data-url="请替换成文章的网址">
				</div> <!-- 多说评论框 end --> 
				<!-- 多说公共JS代码 start (一个网页只需插入一次) --> 
				<script type="text/javascript"> 
				var duoshuoQuery = {short_name:"ahpuchunwei"}; 
				(
					function() { var ds = document.createElement('script'); 
					ds.type = 'text/javascript';ds.async = true; 
					ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js'; 
					ds.charset = 'UTF-8'; (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ds); })();
 				</script> <!-- 多说公共JS代码 end --> 
				
<!-- 				</div>
				<!--评论读取部分结束-->
				
			</div>
			<!--评论区部分结束-->
			
		</div>
		<!--左半边：正文和评论区 结束--><?php endforeach; endif; ?>
		<!--右半边：相关活动、通知推荐 开始-->
		<div class="con_right">
			<!-- 热门活动分块开始 -->
			<div id="right_act">
				<div class="list_Title">
					<div class="list_Title_con">热门活动</div>
					<div class="list_Title_more">
						<a href="#" style="color: #DB2323">更多>></a>
					</div>
				</div>
				<div class="list_Con">
					<div class="list_ul">
			            <div class="list_li">
			            	<span class="hot_num" style="background-color:#F00">1</span>
			                <a class="title_a" href="<?php echo U(GROUP_NAME.'/Index/Read/detailActivity',array('aid'=>$hotActivity[0]['aid'] ,'position'=>热门活动) );?>"><?php echo ($hotActivity[0][title]); ?></a>
			                <span class="title_date">[<?php echo ($hotActivity[0][starttime]); ?>]</span>
						</div>
						
						<div class="list_li">
			            	<span class="hot_num" style="background-color:#DB2323">2</span>
			                <a class="title_a" href="<?php echo U(GROUP_NAME.'/Index/Read/detailActivity',array('aid'=>$hotActivity[1]['aid'] ,'position'=>'热门活动') );?>"><?php echo ($hotActivity[1][title]); ?></a>
			                <span class="title_date">[<?php echo ($hotActivity[1][starttime]); ?>]</span>
						</div>
						
						<div class="list_li">
			            	<span class="hot_num" style="background-color:#D42763">3</span>
			                <a class="title_a" href="<?php echo U(GROUP_NAME.'/Index/Read/detailActivity',array('aid'=>$hotActivity[2]['aid'] ,'position'=>'热门活动') );?>"><?php echo ($hotActivity[2][title]); ?></a>
			                <span class="title_date">[<?php echo ($hotActivity[2][starttime]); ?>]</span>
						</div>
						
						<div class="list_li">
			            	<span class="hot_num">4</span>
			                <a class="title_a" href="<?php echo U(GROUP_NAME.'/Index/Read/detailActivity',array('aid'=>$hotActivity[3]['aid'] ,'position'=>'热门活动') );?>"><?php echo ($hotActivity[3][title]); ?></a>
			                <span class="title_date">[<?php echo ($hotActivity[3][starttime]); ?>]</span>
						</div>
						
						<div class="list_li">
			            	<span class="hot_num">5</span>
			                <a class="title_a" href="<?php echo U(GROUP_NAME.'/Index/Read/detailActivity',array('aid'=>$hotActivity[4]['aid'] ,'position'=>'热门活动') );?>"><?php echo ($hotActivity[4][title]); ?></a>
			                <span class="title_date">[<?php echo ($hotActivity[4][starttime]); ?>]</span>
						</div>
						
						<div class="list_li">
			            	<span class="hot_num">6</span>
			                <a class="title_a" href="<?php echo U(GROUP_NAME.'/Index/Read/detailActivity',array('aid'=>$hotActivity[5]['aid'] ,'position'=>'热门活动') );?>"><?php echo ($hotActivity[5][title]); ?></a>
			                <span class="title_date">[<?php echo ($hotActivity[5][starttime]); ?>]</span>
						</div>
						
						<div class="list_li">
			            	<span class="hot_num">7</span>
			                <a class="title_a" href="<?php echo U(GROUP_NAME.'/Index/Read/detailActivity',array('aid'=>$hotActivity[6]['aid'] ,'position'=>'热门活动') );?>"><?php echo ($hotActivity[6][title]); ?></a>
			                <span class="title_date">[<?php echo ($hotActivity[6][starttime]); ?>]</span>
						</div>
						
						<div class="list_li">
			            	<span class="hot_num">8</span>
			                <a class="title_a" href="<?php echo U(GROUP_NAME.'/Index/Read/hotActivity',array('aid'=>$hotActivity[7]['aid'] ,'position'=>'热门活动') );?>"><?php echo ($hotActivity[7][title]); ?></a>
			                <span class="title_date">[<?php echo ($hotActivity[7][starttime]); ?>]</span>
						</div>
						
						<div class="list_li">
			            	<span class="hot_num">9</span>
			              	<a class="title_a" href="<?php echo U(GROUP_NAME.'/Index/Read/hotActivity',array('aid'=>$hotActivity[8]['aid'] ,'position'=>'热门活动') );?>"><?php echo ($hotActivity[8][title]); ?></a>
			                <span class="title_date">[<?php echo ($hotActivity[8][starttime]); ?>]</span>
						</div>
						
						<div class="list_li">
			            	<span class="hot_num">10</span>
			              	<a class="title_a" href="<?php echo U(GROUP_NAME.'/Index/Read/hotActivity',array('aid'=>$hotActivity[9]['aid'] ,'position'=>'热门活动') );?>"><?php echo ($hotActivity[9][title]); ?></a>
			                <span class="title_date">[<?php echo ($hotActivity[9][starttime]); ?>]</span>
						</div>
			       	</div>
				</div>
			</div>
			<!-- 热门活动分块结束 -->
			<!-- 相关活动分块开始 -->
			<div id="right_act">
				<div class="list_Title">
					<div class="list_Title_con">相关推荐</div>
					<div class="list_Title_more">
						<a href="#" style="color: #DB2323">更多>></a>
					</div>
				</div>
				<div class="list_Con">
					<div class="list_ul">
						<?php if(is_array($relateMMs)): foreach($relateMMs as $key=>$v): ?><div class="list_li">
								<span class="hot_num"></span>
								<a class="title_a" href="<?php echo U(GROUP_NAME.'/Index/Read/detailActivity',array('aid'=>$v['aid'],'position'=>'相关推荐') );?>"><?php echo ($v["title"]); ?></a>
								<span class="title_date">[07-01]</span>
							</div><?php endforeach; endif; ?>
						
					</div>
				</div>
			</div>
			<!-- 热门活动分块结束 -->
		</div>
		<!--右半边：相关活动、通知推荐 结束-->
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