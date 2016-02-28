<?php
namespace Home\Controller;
use Think\Controller;
class SaidController extends Controller {
    public function Said(){
    	//友情链接
    	$linkObj = D('link');
    	$showLink = $linkObj->select();
    	$this->assign('showLink',$showLink);
      	$this->display();
    }
}