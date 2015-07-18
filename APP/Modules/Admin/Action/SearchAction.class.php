<?php
 class SearchAction extends Action{
 	
 	//综合搜索活动
 	public function searchActivity(){
 		//如果提交搜索表单
 		$aa=array(id=>'ID',type=>'活动类型',title=>'活动标题', time=>'活动起止时间',college=>'单位',state=>'报名/总数',opera=>'操作');
 		if(IS_POST){
 			
 			$type=$_POST['type'];
 			$title=$_POST['title'];
 			$content=$_POST['content'];
 			$starttime=$_POST['startDate'];
 			$endtime=$_POST['endDate'];
 			
 			if($endtime==''){
 				$endtime=date('Y-m-d',strtotime("+2 year"));
 			}
 			if ($starttime==''){
 				$starttime=date('Y-m-d',strtotime("-2 year"));
 			}
 			

 			
 			if($type=='所有活动'){
 				$map['title&content&starttime']=array("$title","$content",array(array('egt',$starttime),array('elt',$endtime)),'_multi'=>true);
 			}else{
 				$map['title&type&content&starttime']=array("$title","$type","$content",array(array('egt',$starttime),array('elt',$endtime)),'_multi'=>true,'and');
 			}
 			
 			$activity=M('activity')->where($map)->select();
 			
 			$this->aa=$aa;
 			$this->activity=$activity;
 			
 		}
 		
 		
 		$this->display();
 	}
	//通知综合搜索 	
 	public function searchInform(){
 		
 		$aa=array(id=>'通知ID',type=>'通知类型',title=>'通知标题', college=>'所在学院',username=>'发布者',modifyTime=>'最后修改时间',opera=>'操作');
 		
 		if(IS_POST){     
 			//如果用户提交表单，则显示搜索出的结果
 			
 			//表单提交搜索内容
 			
 			$type=$_POST['type'];
 			$title=$_POST['title'];
 			$content=$_POST['content'];
 			$starttime=$_POST['startDate'];
 			$endtime=$_POST['endDate'];
 			
 			
 			if($endtime==''){                       //默认时间设置
 				$endtime=date('Y-m-d',strtotime("+2 year"));
 			}
 			if ($starttime==''){
 				$starttime=date('Y-m-d',strtotime("-2 year"));
 			}
 			
 			if($type=='所有通知'){
 				$map['title&content&time']=array("$title","$content",array(array('egt',$starttime),array('elt',$endtime)),'_multi'=>true);
 			}else{
 				$map['title&type&content&time']=array("$title","$type","$content",array(array('egt',$starttime),array('elt',$endtime)),'_multi'=>true,'and');
 			}
 			
 			$inform=M('inform')->where($map)->select();

 			
 			$this->aa=$aa;
 			$this->inform=$inform;
 			
 		}
 		
 		
 		
 		$this->display();
 	}
 	//用户综合搜索
 	public function searchUser(){
 		$aa=array(id=>'用户ID',username=>'用户名',uid=>'用户学号', sex=>'用户性别',logintime=>'上次登陆时间',loginip=>'上次登录IP',college=>'所在学院',_class=>'班级/单位',phone=>'电话',operate=>'操作');
 			
 		//如果提交表单则进行输出操作
 		if(IS_POST){
 			$uid=$_POST['uid'];
 			$username=$_POST['username'];
 			$sex=$_POST['sex'];
 			$college=$_POST['college'];
 			
 			$map['uid&username&sex&college']=array("$uid","$username","$sex","$college");
 			
 			$this->user=M('user')->where($map)->select();
 			$this->aa=$aa;
 		}
 		
 		
 		$this->display();
 	}
 	 	
 }
?>