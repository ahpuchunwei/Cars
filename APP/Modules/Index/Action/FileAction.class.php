<?php
	class UploadFileAction extends Action{
		
/*
 * 
 * 上传文件控制器
 * 2014/9/11
 * @author HP_PCW
 * 
 */		
		public function index(){
			$this->display();
		}
		
		public function upload() {
    		import('ORG.Net.UploadFile');
   			$upload = new UploadFile();// 实例化上传类
   			$upload->maxSize  = 3145728 ;// 设置附件上传大小
   			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    		$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
    		$upload->thumb=  false;    // 使用对上传图片进行缩略图处理
    		if(!$upload->upload()){// 上传错误提示错误信息
        		$this->error($upload->getErrorMsg());
    		}else{// 上传成功
    		
        		$this->success('上传成功！');
    		}
		}
	}
?>