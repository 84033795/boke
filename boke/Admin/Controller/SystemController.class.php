<?php
namespace Admin\Controller;
use Think\Controller;

class SystemController extends Controller{
    public function home(){
        $aobjCount = M('article');
        $arttext = $aobjCount->limit(0,9)->field("web_title")->order('web_artid desc')->select();
        //dump($arttext);
        /****获取会员数****/
        $uobjCount = M('Admin');
        //获取会员数：
        $userCount = $uobjCount->count();

        $artCount = $aobjCount->count();
        //获取文章数
        $this -> assign('artCount',$artCount);
        //显示会员数
        $this -> assign('userCount',$userCount);

        $this -> assign('arttext',$arttext);
        $this -> display();
    }
    public function info(){
        $objModelInfo = D('Info');
        //修改操作
        if(IS_POST){
            $params = array();
            $params['web_basehost'] = I('web_basehost');
            $params['web_indexurl'] = I('web_indexurl');
            $params['web_indexname'] = I('web_indexname');
            $params['web_name'] = I('web_name');
            $params['web_powerby'] = I('web_powerby');
            $params['web_keywords'] = I('web_keywords');
            $params['web_description'] = I('web_description');
            $params['web_tongji'] = I('web_tongji');
            $params['web_beian'] = I('web_beian');
            foreach($params as $k=>$v){
                $data = array(
                    'web_value' => $v,
                );
                $where = array(
                    'web_key' => $k,
                );
                //dump($where);
                $z=$objModelInfo->where($where)->data($data)->save();
            }
            if($z === false){
                $this->redirect('info',array(),2,'修改失败，请重试');
            }else{
                $this->redirect('info',array(),2,'修改成功');
            }
        }
        //显示系统基本设置后台信息
        $info = $objModelInfo -> select();
        if(!empty($info)){
            $_info = array();
            foreach ($info as $v){
                $_info[$v['web_key']] = $v;
            }
            $info = $_info;
        }
        $this->assign('info',$info);
        $this->display();
        
    }
    public function make(){
        $this -> display();
    }
    public function ads(){
        //展示页面
        $this -> display();
    }
    public function link(){
        $linkObj = D('link');
        //搜索功能
        $keyword = I("keyword");
        $where = array();
        if(!empty($keyword)){
            $where['web_name'] = array('like', "%{$keyword}%");
        }
        $show = $linkObj -> select();
        //dump($linkObj);
        $this->assign('show',$show);
        $this -> display();
    }
    //新增友链
    public function addlink(){
        $linkObj = D('link');
        if(IS_POST){
            $linkObj -> web_name = $_POST['web_name'];
            $linkObj -> web_url = $_POST['web_url'];
            $linkObj -> web_email = $_POST['web_email'];
            //dump($linkObj);
            $z = $linkObj -> add();
            if($z){
                $this -> redirect('link',array(),2,'恭喜添加友链成功');
            }else{
                $this -> redirect('addlink',array(),2,'友情链接添加失败，请重试');
            }
        }
        $this -> display();
    }
    //修改友情链接
    public function updlink(){
        $linkObj = D('link');
        if(IS_POST){
            $ids = $_POST['web_id'];
            $z =  $linkObj->where("web_id=".$ids)->save($_POST);
            //dump($_POST);
            if($z === false){
                $this->redirect('updlink',array(),2,'修改失败，请重试');
            }else{
                $this->redirect('link',array(),2,'修改成功');
            }
        }else{
            $id = I('get.web_id');
            //dump($id);
            $show = $linkObj->where("web_id=".$id)->find($id);
            dump($show);
            $this -> assign('show',$show);
            $this -> display();
        }
    }
    //删除友情链接
    public function dellink(){
        $linkObj = D('link');
        $id = I('get.web_id');
        $z = $linkObj->delete($id);
        if($z){
            $this -> redirect('link',array(),2,"删除成功");
        }else{
            $this -> redirect('link',array(),2,"删除失败");
        }
    }
}