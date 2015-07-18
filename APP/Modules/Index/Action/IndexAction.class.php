<?php
	class IndexAction extends Action{
/*
 * 
 * 后台主页控制器
 * 2014/9/11
 * @author HP_PCW
 * 
 * 
 */		
		//前台主页控制器
		public function index(){
			
			//登录信息
			if(isset($_SESSION['uid'])){
				$this->username=$_SESSION['username'];
				$this->show='<a href="__GROUP__/Login/loginOut">退出</a>';
			}else{
				$this->username='游客';
				$this->show= '<a href="__GROUP__/Login/index" >登录</a>&nbsp
						<a href="__GROUP__/Login/Reg">注册</a>';
			}
			
			
			//通知获取显示开始
			$inform=M('inform')->limit(8)->order('time desc')->select();
			$i=0;
			foreach ($inform as $v){
				$inform[$i]['time'] = substr($v['time'],-5);
				$i++;
			}
			$this->inform=$inform;
			//通知获取结束
			
			
			//热门活动开始
			$hotActivity=M('Activity')->limit(16)->order('starttime desc')->select();
				
			//截取日期最后五位
			$i=0;
			foreach ($hotActivity as $v){
				$hotActivity[$i]['starttime'] = substr($v['starttime'],-5);
				$i++;
			}
			

			$this->hotActivity=$hotActivity;	
			//热门活动结束
			
			//社团活动开始
			$commercialActivity=M('Activity')->limit(17)->order('starttime desc')->select();
			
			//截取日期最后五位开始
			$i=0;
			foreach ($commercialActivity as $v){
				$commercialActivity[$i]['starttime'] = substr($v['starttime'],-5);
				$i++;
			}
			//截取日期最后五位结束
			$this->commercialActivity=$commercialActivity;
			
			
			//校级活动获取开始
			$schoolActivity=M('Activity')->limit(16)->order('starttime desc')->select();
			
			//截取日期最后五位开始
			$i=0;
			foreach ($schoolActivity as $v){
				$schoolActivity[$i]['starttime'] = substr($v['starttime'],-5);
				$i++;
			}
			
			
			//左右分组开始
			$i=0;
			foreach ($schoolActivity as $v){
				if($i<8){
					$schoolActivity_left[$i]=$v;
				}else{
					$schoolActivity_right[$i]=$v;
				}
				$i++;
			}
			//左右分组结束
			
			
			$this->schoolActivity_left=$schoolActivity_left;
			$this->schoolActivity_right=$schoolActivity_right;	
			//校级活动结束
			
			
			//院级活动开始
			$collegeActivity=M('Activity')->limit(16)->order('starttime desc')->select();
			//截取日期最后五位开始
			$i=0;
			foreach ($collegeActivity as $v){
				$collegeActivity[$i]['starttime'] = substr($v['starttime'],-5);
				$i++;
			}
				
				
			//左右分组开始
			$i=0;
			foreach ($collegeActivity as $v){
				if($i<8){
					$collegeActivity_left[$i]=$v;
				}else{
					$collegeActivity_right[$i]=$v;
				}
				$i++;
			}
			//左右分组结束
				
				
			$this->collegeActivity_left=$collegeActivity_left;
			$this->collegeActivity_right=$collegeActivity_right;
			//院级活动结束
			
			
			
			$this->display();
		}
		
		//个人中心
		public function Person(){
			if($_SESSION['uid']==""){
				$this->error('对不起，你尚未登录');
				//$this->redirect('/Index/Login/index');
			}
			
			$this->ip_now=get_client_ip();
			$this->ip_ago=$_SESSION['loginip'];
			$this->time_ago=$_SESSION['logintime'];
			$this->college=$_SESSION['college'];
			//登录信息
			if(isset($_SESSION['uid'])){
				$this->username=$_SESSION['username'];
				$this->show='<a href="__GROUP__/Login/loginOut">退出</a>';
			}else{
				$this->username='游客';
				$this->show= '<a href="__GROUP__/Login/index" >登录</a>&nbsp
						<a href="__GROUP__/Login/Reg">注册</a>';
			}
			//登录信息结束
			$this->display();
		}
		
		//注册视图
		public function Reg(){
			$this->display();
		}
		//注册处理表单
		public function runReg(){
			
		}
		
		//关于本站
		public function about(){
			$this->display();
		}
				
	}
