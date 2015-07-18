<?php
/*
 * 
 * 网页登录控制器
 * 2014/9/11
 *  @author HP_PCW
 *  
 */
	class LoginAction extends Action{
		public function index(){
			$this->display();
		}
		
		public function login(){
			if(I('code','','strtolower')!=session('verify')) $this->error('验证码错误');
			$db=M('user');
			$user=M('user')->Where(array('uid'=>I('username')))->find();
		
			if(!$user ||$user['password']!=I('password','','md5')){
				$this->error('用户名或密码错误');
			}
		
				
			$data=array(
					'id'=>$user['id'],
					'logintime'=>time(),
					'loginip'=>get_client_ip(),
		
			);
					
			$db->save($data);
			session('uid',$user['id']);
			session('userid',$user['uid']);
			session('username',$user['username']);
			session('logintime',date('Y-m-d H:i:s',$user['logintime']));
			session('loginip',$user['loginip']);
			session('type',$user['type']);
			session('college',$user['college']);
			
			
			redirect(__GROUP__);
		
		}
		//验证码类调用
		public function verify(){
			import('Class.Image',APP_PATH);
			Image::verify();
		}
		
		//注册界面
		public function reg(){
			$this->display();
		}
		
		//登出
		public function loginOut(){
			session_unset();
			session_destroy();
			$this->redirect('/Index/Login/index');
		}
	}
?>