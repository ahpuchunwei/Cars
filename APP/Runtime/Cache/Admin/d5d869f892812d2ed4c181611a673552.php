<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
 <head>
  <title> 活动在线报名系统</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link href="__PUBLIC__/assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
   <link href="__PUBLIC__/assets/css/bui-min.css" rel="stylesheet" type="text/css" />
   <link href="__PUBLIC__/assets/css/main-min.css" rel="stylesheet" type="text/css" />
 </head>
 <body>

  <div class="header">
    
      <div class="dl-title">
          <span class="lp-title-port"></span><span class="dl-title-text">活动在线报名系统</span>
      </div>

    <div class="dl-log">欢迎您，<span class="dl-log-user">&nbsp<?php echo ($username); ?>&nbsp管理员！ 
    </span><a href="__GROUP__/Login/loginOut" title="退出系统" class="dl-log-quit">[退出]</a>
    </div>
  </div>
   <div class="content">
    <div class="dl-main-nav">
      <div class="dl-inform"><div class="dl-inform-title">贴心小秘书<s class="dl-inform-icon dl-up"></s></div></div>
      <ul id="J_Nav"  class="nav-list ks-clear">
        <li class="nav-item dl-selected"><div class="nav-item-inner nav-home">活动管理</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-order">用户管理</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-inventory">搜索页</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-marketing" >图表分析</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-supplier" >系统设置</div></li>
        
      </ul>
    </div>
    <ul id="J_NavContent" class="dl-tab-conten">

    </ul>
   </div>
   
  <script type="text/javascript" src="__PUBLIC__/assets/js/jquery-1.8.1.min.js"></script>
  <script type="text/javascript" src="__PUBLIC__/assets/js/bui.js"></script>
  <script type="text/javascript" src="__PUBLIC__/assets/js/config.js"></script>

  <script>
    BUI.use('common/main',function(){
      var config = [{
          id:'menu', 
          homePage : 'code',
          menu:[{
              text:'活动首页',
              items:[
                {id:'code',text:'进行中的活动',href:"__GROUP__/Activity/showRunActivity",closeable : false},
                {id:'code',text:'历史活动',href:"__GROUP__/Activity/historyActivity",closeable : false},
                {id:'main-menu',text:'添加活动',href:'__GROUP__/Activity/addActivity'},
              ]
            },{
              text:'查看活动',
              items:[
				{id:'operation',text:'近一个月的活动',href:"__GROUP__/Activity/nearMonthActivity"},
                {id:'operation',text:'近三个月的活动',href:"__GROUP__/Activity/nearThreeMonthActivity"},
                {id:'quick',text:'近半年的活动',     href:"__GROUP__/Activity/nearHalfYearActivity"}  
              ]
            },{
              text:'查看报名表',
              items:[
                {id:'resource',text:'查看报名表',href:'main/resource.html'},  
              ]
            }]
          },{
            id:'code',
            homePage : 'select',
            menu:[{
                text:'用户管理',
                items:[
				  {id:'select',text:'所有用户',href:'__GROUP__/User/index',closeable : false},
                  {id:'add',text:'添加用户',href:"__GROUP__/User/adduser"},
                 
                ]
              },{
                text:'管理员管理',
                items:[
				  {id:'showManage',text:'查看所有管理员',href:"__GROUP__/User/Manage"},
                  {id:'addManage',text:'添加管理员',href:"__GROUP__/User/addManage"},
                ]
              }]
          },{
            id:'search',
            homePage : 'code',
            menu:[{
                text : '搜索活动',
                items : [
                  {id : 'code',text : '综合搜索',href : "__GROUP__/Search/searchActivity"},
                ]
              },
              {
                  text : '搜索通知',
                  items : [
                  
                    {id : 'tab',text : '综合搜索',href : "__GROUP__/Search/searchInform"},
                  ]
               },{
                   text:'搜索用户',
                   items:[
   				  {id:'tab',text:'综合搜索',href : "__GROUP__/Search/searchUser",closeable : false},
   				  
                   ]
                 },
              ]
          },
          	{
            id:'detail',
            homePage : 'code',
            menu:[{
                text:'图表分析',
                items:[
                  {id:'code',text:'参加活动男女比例',href:"__GROUP__/Chart/index",closeable : false},
                  {id:'example',text:'参加活动年级比例',href:"__GROUP__/Chart/yearChart"},
                ]
              }]
          },{
            id : 'chart',
            homePage : 'code',
            menu : [{
              text : '系统通知',
              
              items:[
                  {id:'code',text:'所有通知',href:"__GROUP__/Inform/showAllInform",closeable : false},
                  {id:'line',text:'发布通知',href:"__GROUP__/Inform/addInform"},
              ]
            },{
                text : '查看通知',
                items:[
                    {id:'line',text:'近一个月的通知',href:"__GROUP__/Inform/nearMonthInform"},
                    {id:'line',text:'近三个月的通知',href:"__GROUP__/Inform/nearThreeMonthInform"},
                    {id:'line',text:'近六个月的通知',href:"__GROUP__/Inform/nearHalfYearInform"},
                ]
              },{
                  text : '系统管理',
                  items:[
                      {id:'code',text:'注册开关',href:'chart/code.html'},
                      {id:'code',text:'验证码管理',href:'chart/code.html'},
                  ]
                },
            
            ]
        
          
          
          }];
      new PageUtil.MainPage({
        modulesConfig : config
      });
    });
  </script>
 </body>
</html>