<?php
class RegAction extends Action{
/*
 *  @author HP_PCW
 *  2014/9/14
 *  报名与取消管理
 * 
 */
	//报名活动
	public function Reg(){
		$aid=I('aid',0,'intval');
		$uid=$_SESSION['uid'];
		if($uid==null){
			$this->error('对不起你尚未登录！');
		}
		
		
		$data=array(
			'aid'=>$aid,
			'uid'=>$uid
		);
		$res=M('regform')->add($data);
		
		if($res){
			$this->success('报名成功!');
		}else{
			$this->error('报名失败');
		}		
	}
	//取消活动
	public function CancelReg(){
		$aid=I('aid',0,'intval');
		$uid=$_SESSION['uid'];
		
		$condition['uid'] = $uid;
		$condition['aid'] = $aid;
		
		
		
		if(M('Regform')->where($condition)->delete()){
			$this->success('删除成功');
		}else{
			$this->error('删除失败');
		}
	}
}

?>