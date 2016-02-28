<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    //公共友链
    public function link(){
    	//友情链接
    	$linkObj = D('link');
    	$showLink = $linkObj->select();
    	$this->assign('showLink',$showLink);
      	$this->display();
    }
}