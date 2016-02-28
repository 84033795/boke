<?php
namespace Home\Controller;
use Think\Controller;
class LiuyanController extends Controller {
    //显示留言
    public function liuyan(){
    	//友情链接
    	$linkObj = D('link');
    	$showLink = $linkObj->select();
    	$this->assign('showLink',$showLink);
      	$this->display();
    }
    //验证码
    public function verifyImg(){
    	$cfg = array(
			'fontSize'  =>  15,              // 验证码字体大小(px)
			'fontttf'   =>  '4.ttf',         // 验证码字体，不设置随机获取
    		'imageH'    =>  31,              // 验证码图片高度
	        'imageW'    =>  105,             // 验证码图片宽度
	        'length'    =>  4,               // 验证码位数
    	);
    	$very = new \Think\Verify($cfg);
    	$very -> entry();
    }
}