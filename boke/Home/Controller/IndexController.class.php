<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    //展示首页
    public function index(){
        //当前操作系统
        if(!empty($_SERVER['HTTP_USER_AGENT'])){
            $user_os=$_SERVER['HTTP_USER_AGENT'];  
            if(preg_match('/win/i',$user_os)){
                $user_os='windows';
            }else if(preg_match('nux/i',$user_os)){ 
                $user_os='linux';     
            }else if(preg_match('/unix/i',$user_os)){    
                $user_os='unix';       
            }else if(preg_match('/mac/i',$user_os)){    
                $user_os='Macintosh';
            }else{  
                $user_os='other';
            }
            $this->assign('user_os',$user_os);
        }
        if(!empty($_SERVER['HTTP_USER_AGENT'])){
            $user_os=$_SERVER['HTTP_USER_AGENT'];  
            if(preg_match('/win/i',$user_os)){
                $user_os='windows';
            }else if(preg_match('nux/i',$user_os)){ 
                $user_os='linux';     
            }else if(preg_match('/unix/i',$user_os)){    
                $user_os='unix';       
            }else if(preg_match('/mac/i',$user_os)){    
                $user_os='Macintosh';
            }else{  
                $user_os='other';
            }
            $this->assign('user_os',$user_os);
        }




    	//最新文章
    	$artObj = D('article');
    	$showArt = $artObj->join(
            'web_class on web_article.web_claid=web_class.web_claid'
        )->order('web_artid desc')->select();
        //dump($showArt);
        $this -> assign('showArt',$showArt);
        //友情链接
        $linkObj = D('link');
        $showLink = $linkObj->select();
        $this->assign('showLink',$showLink);
      	$this->display();
      	
    }
}