<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;

class MembersController extends Controller{
    //显示管理
    public function showlist(){
        //搜索功能
        $keyword = I('keyword');//接收搜索框参数
        $where = array();
        if(!empty($keyword)){
            $where['web_uname'] = array('like', "%{$keyword}%");
        }
        //分页功能
        $objModelAdmin = D('Admin');
        $count = $objModelAdmin->where($where)->count();//总条数
        $objPage = new Page($count, 3);//3页
        $pageHtml = $objPage->show();
        $this->assign('show', $pageHtml);
        $info = $objModelAdmin->where($where)->limit($objPage->firstRow, $objPage->listRows)->select();
        //显示
        $this->assign('info',$info);
        $this->display(); 
    }
    //添加管理
    public function add(){
        $membersObj = D('admin');
        if(IS_POST){
            //收集表单
            //添加数据
            $membersObj -> web_uname = $_POST['new_name'];
            $membersObj -> web_pwd = md5($_POST['new_pwd']);
            $membersObj -> web_email = $_POST['new_email'];
            $membersObj -> web_usertype = $_POST['new_vip'];
            $z = $membersObj -> add();
            if($z){
                $this -> redirect('showlist',array(),2,'添加管理员成功');
            }else{
                $this -> redirect('tianjia',array(),2,'添加管理员失败，请重试');
            }
        }else{
            //展示表单
            $this -> display();
        }
    	
    }
    //修改管理
    public function update(){
        if(IS_POST){
            $ids = $_POST['id'];
            $z = M("admin")->where("web_id=".$ids)->save($_POST);
            
            if($z === false){
                $this->redirect('update',array(),2,'修改失败，请重试');
            }else{ 
                $this->redirect('showlist',array(),2,'修改成功');
            }
        }else{
            $id = I('get.web_id');
            $info = M("admin")->find($id);
            $this->assign('info',$info);
            $this->display();
        }
        
    }
    //删除管理
    public function delete(){
        $delObj = D('admin');
        $id = I('get.web_id');
        $z = $delObj->delete($id);
        //print_r($z);
        if($z){
             $this->redirect('showlist',array(),1,"删除成功");
        }else{
             $this->redirect('showlist',array(),1,"删除失败，请重试");
        }
    }
}