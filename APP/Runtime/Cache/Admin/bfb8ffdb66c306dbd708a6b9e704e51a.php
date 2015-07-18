<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
 <head>
  <title> 饼图</title>
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
        <h2>男女比例</h2>
        <div class="span24" id="canvas"></div>
      </div>

  </div>
  <script type="text/javascript" src="__PUBLIC__/assets/js/jquery-1.8.1.min.js"></script>
  <script type="text/javascript" src="__PUBLIC__/assets/js/bui-min.js"></script>

  <script type="text/javascript" src="__PUBLIC__/assets/js/config-min.js"></script>
  <script type="text/javascript">
    BUI.use('common/page');

    BUI.use('bui/chart',function (Chart) {
      
        var chart = new Chart.Chart({
          render : '#canvas',
          width : 950,
          height : 500,
          title : {
            text : '参与活动男女比例分布图'
          },
          legend : null ,//不显示图例
          seriesOptions : { //设置多个序列共同的属性
            pieCfg : {
              allowPointSelect : true,
              labels : {
                distance : 40,
                label : {
                  //文本信息可以在此配置
                },
                renderer : function(value,item){ //格式化文本
                  return value + ' ' + (item.point.percent * 100).toFixed(2)  + '%'; 
                }
              }
            }
          },
          tooltip : {
            pointRenderer : function(point){
              return (point.percent * 100).toFixed(2)+ '%';
            }
          },
          series : [{
              type: 'pie',
              name: 'Browser share',
              data: [
                ['Firefox',   45.0],
                ['IE',       26.8],
                
                {
                    name: 'Chrome',
                    y: 12.8,
                    sliced: true,
                    selected: true
                },
                
                ['Safari',    8.5],
              ]
          }]
        });
 
        chart.render();
    });

  </script>
  
  <!-- 仅仅为了显示代码使用，不要在项目中引入使用-->
  <script type="text/javascript" src="../assets/js/prettify.js"></script>
  <script type="text/javascript">
    //$(function () {
      prettyPrint();
    //});
  </script>  

<body>
</html>