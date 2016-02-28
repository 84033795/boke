<?php
namespace Admin\Controller;
use Think\Controller;

class DocumentController extends Controller{
	//富文本编辑器
	public function ueditor(){
        $data = new \Org\Util\Ueditor();
        echo $data->output();
    }
    //添加文章
    public function adddocument(){
    	$classObj = D('class');
        $articleObj = D('article');
        if(IS_POST){
            $articleObj -> web_title = $_POST['web_title'];
            $articleObj -> web_author = $_POST['web_author'];
            $articleObj -> web_time =$_POST['web_time'];
            $articleObj -> web_introduce = $_POST['web_introduce'];
            $articleObj -> web_text = $_POST['web_text'];
            $articleObj -> web_claid = $_POST['classid'];
            $z = $articleObj -> add();//文章表添加成功后返回添加的文章的ID
            //dump($z);
            if($z){
                $this->redirect('Column/dshowlist',array(),2,"发布文章成功");
            }else{
                $this->redirect('classadd',array(),2,"发布文章失败，请重试");
            }
        }
    	$show = $classObj->select();
		$this -> assign('show',$show);
        $this -> display();
    }
    
}
