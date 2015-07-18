<?php
   class InformAction extends  Action{
   		//显示通知视图
   		public function index($data,$title,$page){
   			
   			$this->inform=$data;
   			$this->title=$title;
   			$this->page=$page;
   			
   			$this->display(index);
   		} 
   		
   		
   		//显示所有通知
   		public function showAllInform(){
   			import('ORG.Util.Page');
   			$count=M('inform')->count();   //统计通知数量
   			$page=new Page($count,5);     //设置页面的大小
   			$limit=$page->firstRow.','.$page->listRows;
   			$inform=M('inform')->limit($limit)->select();
   			$this->index($inform,'所有通知',$page->show());
   		}
   		
   		//添加通知视图
   		public function addInform(){
   			$this->display();
   		}
   		
   		//添加通知处理表单
   		public function runAddInform(){
   			$data=$_POST;   //类型  标题  内容
   			$data['time']=date('Y-m-d',time());
   			
   			if($_POST['type']=='院级通知'){
   				$data['college']=$_SESSION['college'];
   			}else if($_POST['type']=='校级通知'){
   				$data['college']='校级通知';
   			}else{
   				$data['college']='社团通知';
   			}
   			$data['username']=$_SESSION['username'];
   			
   			if(M('inform')->add($data)){
   				$this->success('添加成功',U(GROUP_NAME.'/Inform/showAllInform'));
   			}else{
   				$this->error('添加失败');
   			}
   			
   		}
   		
   		public function deleteInform(){
   			$id=I('id',0,'intval');  //intval转换成为整形
   			if(M('inform')->where("id=$id")->delete()){
   				$this->success('删除成功');
   			}else{
   				$this->error('删除失败');
   			}
   		}
   		
   		//修改通知视图
   		public  function modifyInform(){
   			$id=I('id',0,'intval');
   	
   			$this->inform=M('inform')->where("id=$id")->find();
   			$this->display();
   		}
   		
   		
   		//修改通知处理表单
   		public function runModifyInform(){
   			$data=$_POST;
   			
   			if(M('inform')->save($data)){
   				$this->success('修改成功');
   			}else{   			}
   				$this->error('修改失败');
   			}
   		public function nearMonthInform(){
   			import('ORG.Util.Page');
   			$now_time=date('Y-m-d', strtotime("now"));
   			$lastMonth_time=date('Y-m-d',strtotime('last month'));
   			$map['time']=array(array('egt',$lastMonth_time),array('elt',$now_time));
   			$count=M('Inform')->where($map)->count();
   			$page=new Page($count,5);     //设置页面的大小
   			$limit=$page->firstRow.','.$page->listRows;
   			$inform=M('Inform')->where($map)->limit($limit)->order('time')->select();
   			$this->index($inform, '近一个月的通知',$page->show());
   			
   		}
   		public function nearThreeMonthInform(){
   			import('ORG.Util.Page');
   			$now_time=date('Y-m-d', strtotime("now"));
   			$lastMonth_time=date('Y-m-d',strtotime("-3 month"));
   			$map['time']=array(array('egt',$lastMonth_time),array('elt',$now_time));
   			$count=M('Inform')->where($map)->count();
   			$page=new Page($count,5);     //设置页面的大小
   			$limit=$page->firstRow.','.$page->listRows;
   			$inform=M('Inform')->where($map)->limit($limit)->order('time')->select();
   			$this->index($inform, '近三个月的通知',$page->show());
   			
   		}
   		public function nearHalfYearInform(){
   			import('ORG.Util.Page');
   			$now_time=date('Y-m-d', strtotime("now"));
   			$lastMonth_time=date('Y-m-d',strtotime('-6 month'));
   			$map['time']=array(array('egt',$lastMonth_time),array('elt',$now_time));
   			$count=M('Inform')->where($map)->count();
   			$page=new Page($count,5);     //设置页面的大小
   			$limit=$page->firstRow.','.$page->listRows;
   			$inform=M('Inform')->where($map)->limit($limit)->order('time')->select();
   			$this->index($inform, '近六个月的通知',$page->show());
   		}
   	
   }
	
?>