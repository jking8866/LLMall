<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	
	
	
    public function loginPage(){
        $this->display();
    }
    
    
    public function loginCheck(){
    	$username = I('user_name');
    	$password = I('user_pwd');
    	
    	if(!empty($username) && !empty($password)){
    		$User =M('User');
    		$UserWhere['user_name'] = $_POST['user_name'] ;
    		$UserWhere['user_pwd'] =md5($_POST['user_pwd'])  ;
    		$UserBean = $User->where($UserWhere)->find();
    		if($UserBean != null ){
    			session('userInfo' , $UserBean);
    			$this->redirect('Index/index');
    		}else{
    			$this->error('用户名、密码错误');
    		}
    	}else{
    		$this->error('信息获取失败');
    	}
    	
    	
    	
    	
    }
    
    
    public function loginOut(){
    	$_SESSION = null;
    	$_SESSION['userInfo'] = null;
    	$this->redirect('Login/loginPage');
    }
    
    
    
}
