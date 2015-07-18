<?php
  class UserAction extends CommonAction{
  	
  	//显示用户管理视图
  	public function index(){
  		
  		import('ORG.Util.Page');
  		$count=M('user')->where("type=0")->count();   //统计总计的记录条数
  		$page=new Page($count,5);     //设置页面的大小
  		
  		$limit=$page->firstRow.','.$page->listRows;
  		$user=M('user')->limit($limit)->where("type=0")->select();
  		
  		$this->user=$user;	
  		$this->page=$page->show();
  		$this->display();
  	}
  	
  	//添加用户视图
  	public function addUser(){
  		$this->attr=M('attr')->select();
  		
  		$this->display();	
  	}
  	
  	//添加用户处理表单
  	public function  runAddUser(){
  		
  		$data=$_POST;
   		var_dump($data);
   		var_dump($data['class']);

  		
  		$data['type']=0;
  		$data['password']=null;
  		$data['password']=md5($_POST['password']);
  		$data['logintime']=time();
  		$data['loginip']=get_client_ip();
  		
  		
  		
  		if(M('user')->add($data)){
  			$this->success('添加成功',U(GROUP_NAME.'/User/index'));
  		}else{
  			$this->error('添加失败',U(GROUP_NAME.'/User/addUser'));
  		}
  	}
  	//修改用户视图
  	public function modifyUser(){
  		$pid=I('pid',0,'intval');  //intval转换成为整形
  		var_dump($pid);
  		$this->user=M('user')->where("id=$pid")->find();
  		$this->display();
  	}
  	
  	//修改用户处理表单
  	public function runModifyUser(){
  		
  		$data=$_POST;
  		$data['type']=0;
  		$data['password']=null;
  		$data['password']=md5($_POST['password']);
  		if(M('user')->save($data)){
  			$this->success('修改成功',U(GROUP_NAME.'/User/index'));
  		}else{
  			$this->error('修改失败');
  		}
  	}
  	
  	//删除用户控制器
  	public function deleteUser(){
  		
  		$pid=I('pid',0,'intval');  //intval转换成为整形
  		var_dump($pid);
  		if(M('user')->where("id=$pid")->delete()){
  			$this->success('删除成功',U(GROUP_NAME.'/User/index'));
  			
  		}else{
  			$this->error('失败');
  		}	
  	}
  	
  	//管理员主页视图
  	public function Manage(){
  		import('ORG.Util.Page');
  		$count=M('user')->where("type=1")->count();   //统计总计的记录条数
  		$page=new Page($count,5);     //设置页面的大小
  		$limit=$page->firstRow.','.$page->listRows;
  		
  		
  		
  		$this->user=M('user')->limit($limit)->where("type=1")->select();
  		$this->page=$page->show();
  		$this->display();
  	}
  	//管理员管理
  	public function addManage(){
  		$this->display();
  	}
  	
  	
  	public function runAddManage(){
  		$data=$_POST;
  		var_dump($data);
  		
  		
  		$data['type']=1;
  		$data['password']=null;
  		$data['password']=md5($_POST['password']);
  		$data['logintime']=time();
  		$data['loginip']=get_client_ip();
  		if(M('user')->add($data)){
  			$this->success('添加成功',U(GROUP_NAME.'/User/index'));
  		}else{
  			$this->error('添加失败',U(GROUP_NAME.'/User/addUser'));
  		}
  		
  	}
  	public function modifyManage(){
  		$pid=I('pid',0,'intval');  //intval转换成为整形
  		var_dump($pid);
  		$this->user=M('user')->where("id=$pid")->find();
  		
  		$this->display();
  	}
  	public function runModifyManage(){
  		var_dump($_POST);
  		
  		
  		$data=$_POST;
  		$data['type']=1;
  		$data['password']=null;
  		$data['password']=md5($_POST['password']);
  		
  		if(M('user')->save($data)){
  			$this->success('修改成功',U(GROUP_NAME.'/User/Manage'));
  		}else{
  			$this->error('修改失败');
  		}
  	}
  	
  	public function Test(){
  		$user=M('user')->select();
  		$this->user=$user;

  		$this->display();
  		
  	}
  	
  	
  	
  }