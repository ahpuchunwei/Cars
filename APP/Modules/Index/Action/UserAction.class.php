<?php
   class UserAction extends Action{
   		//个人中心
		public function index(){
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
		
		public function userInfo(){
			//登录信息
			$this->college=$_SESSION['college'];
			$this->userid=$_SESSION['userid'];
			
			
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
		public function userPWD(){
			//登录信息
			$this->college=$_SESSION['college'];
			$this->userid=$_SESSION['userid'];
				
				
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
		public function activity($data){
			$this->display(activity);
		}
		
		
		public function userAct($data,$title,$page){
			
			
			//登录信息
			$this->college=$_SESSION['college'];
			$this->userid=$_SESSION['userid'];
			if(isset($_SESSION['uid'])){
				$this->username=$_SESSION['username'];
				$this->show='<a href="__GROUP__/Login/loginOut">退出</a>';
			}else{
				$this->username='游客';
				$this->show= '<a href="__GROUP__/Login/index" >登录</a>&nbsp
						<a href="__GROUP__/Login/Reg">注册</a>';
			}
			//登录信息结束
			$this->activity=($data);
			$this->page=$page;
			$this->title=$title;
			
			$this->display(userAct);
		}
		//学生参加的所有活动数据获取
		public function allActivity(){
			import('ORG.Util.Page');
			
			$uid=$_SESSION[uid];  	//获取用户的学号
			//$res=M('regform')->where("uid=$uid")->select();
			
			
			$count=M('regform')->where("uid=$uid")->count();
			$page=new Page($count,5);     //设置页面的大小s
			$limit=$page->firstRow.','.$page->listRows;
			
			$res=M('regform')->where("uid=$uid")->limit($limit)->order('id')->select();
			
			
			$i=0;
			foreach ($res as $v){
				$data[$i]=$v['aid'];
				$i++;
			}
				
				
			$i=0;
			foreach ($data as $v){
			
				$condition['aid']=$v;
				$res=M('activity')->where($condition)->find();
				$data[$i]=$res;
				$i++;
			}
			
			
			
			$this->userAct($data,'所有活动',$page->show());
			
		}
		public function futureActivity(){
			
		}
		public function invalidActivity(){
			
		}
   	
   }