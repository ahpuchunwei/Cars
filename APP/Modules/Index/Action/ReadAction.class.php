<?php


/*
 * 显示详情页
 * 2014/9/11
 * @author HP_PCW
 * 
 */
	class ReadAction extends Action{
		public function index($position,$data,$state){
			$uid=$_SESSION['uid'];
			$aid=$data[0]['aid'];
			
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
			
			$this->class='btn btn-primary';
			if($position=='网站公告'){
				$this->class=null;
			}
			
			
			$url_1=U('Index/Reg/Reg',array('aid'=>$aid));
			$url_2=U('Index/Reg/CancelReg',array('aid'=>$aid));
				
			
			$this->state=array(
					state=>'参加活动',
					link=>$url_1,
			);
			
			foreach ($state as $v){
				if ($v['uid']==$uid){
					$this->state=array(
							state=>'取消参加',
							link=>$url_2,
								
					);
					
				}
			}
			if($position=='网站公告'){
				$this->class=null;
				$this->state=null;
			}
			
			
			$this->position=$position;
			$this->data=$data;
			
			if($position=="校级活动"||$position=="院级活动"||$position=="社团活动"){
				$this->relateMMs=M('activity')->limit(10)->select();
			}else{
				$this->relateMMs=M('activity')->limit(10)->select();
			}
			
			//热门活动开始
			$hotActivity=M('Activity')->limit(16)->order('starttime desc')->select();
			//截取日期最后五位开始
			$i=0;
			foreach ($hotActivity as $v){
				$hotActivity[$i]['starttime'] = substr($v['starttime'],-5);
				$i++;
			}
			//截取日期最后五位结束
			$this->hotActivity=$hotActivity;
			//热门活动结束
			
			$this->display(index);		
		}
		
		public function inform(){
			$id=I('id',0,'intval');
			$position="网站公告";
			$data=M('inform')->where("id=$id")->select();
			$this->index($position, $data);
		}
		
		public function detailActivity(){
			$aid=I('aid',0,'intval');
			$position=I('position');

			$state=M('regform')->where("aid=$aid")->select();
			if(M('activity')->where("aid=$aid")->select()==""){
				$id=$aid;
			}else{
				$data=M('activity')->where("aid=$aid")->select();
			}
			
			
			$this->index($position,$data,$state);
		}
		
		
/*
 *显示列表页
 *2014/9/11
 * @author HP_PCW
 * 
 */
		public function showList($data,$position,$page){
			if($position=="校级活动"||$position=="院级活动"||$position=="社团活动"){
				$this->relateMMs=M('activity')->limit(10)->select();
			}else{
				$this->relateMMs=M('activity')->limit(10)->select();
			}
				
			//热门活动开始
			$hotActivity=M('Activity')->limit(16)->order('starttime desc')->select();
			//截取日期最后五位开始
			$i=0;
			foreach ($hotActivity as $v){
				$hotActivity[$i]['starttime'] = substr($v['starttime'],-5);
				$i++;
			}
			//截取日期最后五位结束
			$this->hotActivity=$hotActivity;
			//热门活动结束
			
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
			
			$i=0;
			foreach ($data as $v){
				$data[$i]['content'] = substr($v['content'],0,500);
				$i++;
			}
			$this->data=$data;
			$this->page=$page;
			$this->position=$position;
			$this->display(showList);
		}
		//所有活动
		public function hotActivity(){
			import('ORG.Util.Page');
			$count=M('Activity')->count();
			$page=new Page($count,12);
			$limit=$page->firstRow.','.$page->listRows;
			
			$data=M('Activity')->limit($limit)->order('starttime desc')->select();
			$position="热门活动";
			
			$this->showList($data, $position,$page->show());
		}
		//校级活动
		public function schoolActivity(){
			
			import('ORG.Util.Page');
			$count=M('Activity')->count();
			$page=new Page($count,12);
			$limit=$page->firstRow.','.$page->listRows;
			
			$data=M('Activity')->limit($limit)->order('starttime desc')->select();
			
			$position="校级活动";
			$this->showList($data, $position);
		}
		
		//院级活动
		public function collegeActivity(){
			import('ORG.Util.Page');
			$count=M('Activity')->count();
			$page=new Page($count,12);
			$limit=$page->firstRow.','.$page->listRows;
			
			$data=M('Activity')->limit($limit)->order('starttime desc')->select();
			
			$position="院级活动";
			$this->showList($data, $position);
		}
		//社团活动
		public function commericalActivity(){
			import('ORG.Util.Page');
			$count=M('Activity')->count();
			$page=new Page($count,12);
			$limit=$page->firstRow.','.$page->listRows;
			
			$data=M('Activity')->limit($limit)->order('starttime desc')->select();
			
			$position="社团活动";
			$this->showList($data, $position);
		}
		
		
		//帮助中心
		public function HelpCenter(){
			$this->display();
		}
		
			
	}
?>