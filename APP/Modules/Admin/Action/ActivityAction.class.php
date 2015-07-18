<?php
	class ActivityAction extends Action{
		//所有活动主页视图
		public function index($data,$title,$page){
			$this->activity=$data;
			$this->title=$title;
			$this->page=$page;
			$this->display(index);
		}
		//所有进行中的活动获取
		public function showRunActivity(){
			import('ORG.Util.Page');
			
			$now_time=date('Y-m-d', strtotime("now"));
			$map['endtime']=array('egt',$now_time);
			
			$count=M('activity')->where($map)->count();
			
			$page=new Page($count,5);     //设置页面的大小s
			$limit=$page->firstRow.','.$page->listRows;
			
			$activity=M('activity')->where($map)->limit($limit)->order('starttime')->select();
			
			$n=0;
			foreach ($activity as $val){
				if($val['type']=='校级活动'){
					$activity[$n]['college']=$val['type'];
				}else if($val['type']=='社团活动'){
					$activity[$n]['college']='社团活动';
				}
				$n++;
			};
			
			$this->index($activity,'进行中的活动',$page->show());
				
		}
		//历史活动数据获取
		public function historyActivity(){
			import('ORG.Util.Page');
			
			$now_time=date('Y-m-d', strtotime("now"));
			$map['endtime']=array('elt',$now_time);
			
			$count=M('activity')->where($map)->count();
			$page=new Page($count,5);     //设置页面的大小
			$limit=$page->firstRow.','.$page->listRows;
			
			$activity=M('activity')->where($map)->limit($limit)->order('starttime')->select();
			
			$n=0;
			foreach ($activity as $val){
				if($val['type']=='校级活动'){
					$activity[$n]['college']=$val['type'];
				}else if($val['type']=='社团活动'){
					$activity[$n]['college']='社团活动';
				}
				$n++;
			}
			
			$this->index($activity, '历史活动',$page->show());
		}
		
		
		//添加活动显示视图
		public function addActivity(){
			$this->display();
		}
		//添加活动表单处理	
		public function runAddActivity(){
			$data=$_POST;
			$n=0;
			foreach ($data as $val){
				if($val['type']=='校级活动'){
					$activity[$n]['college']=$val['type'];
				}else if($val['type']=='社团活动'){
					$data[$n]['college']='社团活动';
				}else{
					$data['college']=$_SESSION['college'];
				}
				$n++;
			}
			if(M('activity')->add($data)){
				$this->success('添加成功',U(GROUP_NAME.'/Activity/showRunActivity'));
			}else{
				$this->error('失败',U(GROUP_NAME.'/Activity/addActivity'));
			}	
		}
		//修改活动视图
		public function modifyActivity(){
			$aid=I('aid',0,'intval');
			$this->info=M('activity')->where("aid=$aid")->find();
			$this->display();
		}
		
		//修改活动处理表单
		public function runModifyActivity(){
			var_dump($_POST);
			if(M('activity')->save($_POST)){
				$this->success('修改成功',U(GROUP_NAME.'/Activity/showRunActivity'));
			}else{
				$this->error('修改失败');
			}
		}
		
		
		//删除活动
		public function deleteActivity(){
			$aid=I('aid',0,'intval');  //intval转换成为整形
			if(M('activity')->where("aid=$aid")->delete()){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}
			
		}
		
		//近一个月的活动
		public function nearMonthActivity(){
			import('ORG.Util.Page');
			
			
			$now_time=date('Y-m-d', strtotime("now"));
			$lastMonth_time=date('Y-m-d',strtotime('last month'));
			
			$map['starttime']=array(array('gt',$lastMonth_time),array('lt',$now_time));
			
			$count=M('activity')->where($map)->count();
			$page=new Page($count,5);     //设置页面的大小
			$limit=$page->firstRow.','.$page->listRows;
			$activity=M('activity')->where($map)->limit($limit)->order('starttime')->select();
			$n=0;
			foreach ($activity as $val){
				if($val['type']=='校级活动'){
					$activity[$n]['college']=$val['type'];
				}else if($val['type']=='社团活动'){
					$activity[$n]['college']='社团活动';
				}
				$n++;
			}
				
			$this->index($activity, '近一个月的活动',$page->show());
		}
		//近三个月的活动
		public function nearThreeMonthActivity(){
			import('ORG.Util.Page');
			
			$now_time=date('Y-m-d', strtotime("now"));
			$lastThreeMonth_time=date('Y-m-d',strtotime("-3 month"));
			
			$map['starttime']=array(array('gt',$lastThreeMonth_time),array('lt',$now_time));
			
			$count=M('activity')->where($map)->count();
			$page=new Page($count,5);     //设置页面的大小
			$limit=$page->firstRow.','.$page->listRows;
			
			$activity=M('activity')->where($map)->limit($limit)->order('starttime')->select();
			$n=0;
			foreach ($activity as $val){
				if($val['type']=='校级活动'){
					$activity[$n]['college']=$val['type'];
				}else if($val['type']=='社团活动'){
					$activity[$n]['college']='社团活动';
				}
				$n++;
			}
			
			$this->index($activity, '近三个月的活动',$page->show());
		}
		//近半年的活动
		public function nearHalfYearActivity(){
			import('ORG.Util.Page');
			
			$now_time=date('Y-m-d', strtotime("now"));
			$lastHalfYear_time=date('Y-m-d',strtotime("-6 month"));
				
			$map['starttime']=array(array('gt',$lastHalfYear_time),array('lt',$now_time));
			
			$count=M('activity')->where($map)->count();
			$page=new Page($count,5);     //设置页面的大小
			$limit=$page->firstRow.','.$page->listRows;
			
			$activity=M('activity')->where($map)->limit($limit)->order('starttime')->select();
			$n=0;
			foreach ($activity as $val){
				if($val['type']=='校级活动'){
					$activity[$n]['college']=$val['type'];
				}else if($val['type']=='社团活动'){
					$activity[$n]['college']='社团活动';
				}
				$n++;
			}
				
			$this->index($activity, '近半年的活动',$page->show());
		}

		
	}
?>