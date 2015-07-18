<?php
 	class  IndexAction extends CommonAction{
 		public  function  index(){
 			$this->username=$_SESSION[username];
 			$this->logintime=$_SESSION[time];
 			$this->display();
 		}
 	}
?>