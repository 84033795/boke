<?php
namespace Admin\Controller;
use Think\Controller;

class columnController extends Controller{
    public function showlist(){
    	$classObj = D('class');
        //显示栏目start
    	$show = $classObj->select();
		$this -> assign('show',$show);
        $this -> display();
        //显示栏目end
    }
    public function dshowlist(){
        $columnObj = D('article');
        $show = $columnObj->join(
            'web_class on web_article.web_claid=web_class.web_claid'
        )->select();
        $this -> assign('show',$show);
        $this -> display();
    }
    public function recycle(){
        $this -> display();
    }
    //添加栏目
    public function classadd(){
    	$classObj = D('class');
    	if($_POST){
    		//收集表单
    		$classObj -> web_name = $_POST['classname'];
    		$z = $classObj -> add();
    		
            if($z){
                $this -> redirect('showlist',array(),2,'添加栏目成功');
            }else{
                $this -> redirect('classadd',array(),2,'添加栏目失败，请重试');
            }
    	}else{
    		//显示表单
    		$show = $classObj->select();
    		$this -> assign('show',$show);
    		$this -> display();
    	}
    }
    //修改栏目
    public function classupd(){
        if(IS_POST){
            $ids = $_POST['web_claid'];
            $z = M("class")->where("web_claid=".$ids)->save($_POST);
            
            if($z === false){
                $this->redirect('classupd',array(),2,'修改失败，请重试');
            }else{
                $this->redirect('showlist',array(),2,'修改成功');
            }
        }else{
            $id = I('get.web_claid');
            $classObj = M('class');
            $show = $classObj->where("web_claid=".$id)->find();       
            $this->assign('show',$show);
            $this->display();
        }
    }
    //删除栏目
    public function classdel(){
        $delObj = D('class');
        $id = I('get.web_claid');
        $z = $delObj->delete($id);
        if($z){
             $this->redirect('showlist',array(),2,"删除成功");
        }else{
             $this->redirect('classdel',array(),2,"删除失败，请重试");
        } 
    }
}