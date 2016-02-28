<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller{
    public function login(){
    	if(IS_POST){
    		$name = $_POST['admin_user'];
    		$pwd = $_POST['admin_pwd'];
    		$infoObj = D('admin') -> where(array('web_uname' => $name,'web_pwd' => $pwd)) -> find(); 
    		//dump($infoObj);
    		if($infoObj){
    			//session持久化：用户名、用户id
    			session('web_id',$infoObj['web_id']);
    			session('web_uname',$infoObj['web_uname']);
    			$this -> redirect('Index/index');
    		}else{
    			echo "<script>alert('用户名或密码错误');</script>";
    		}
    	}
        if(empty($infoObj['web_uname'])){
            $js = <<<eof
            <script type="text/javascript">
                window.location.href="index.php/Admin/login/login";
            </script>
            echo $js;
eof;
        }
        $this -> display();
    }
    //退出登录
    public function logout(){
    	session(null);
    	$this -> redirect('login');
    }
}