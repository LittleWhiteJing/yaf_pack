<?php

/**
  * 控制器示例
  * 
  */

class IndexController extends Yaf_Controller_Abstract {

	public function indexAction() {
   		
       $this->getView()->assign("content", "hello");
   	
   }

   public function noticeAction() {

   	   $this->getView()->assign("content", "notice");
   	   		 	
   }
}
?>