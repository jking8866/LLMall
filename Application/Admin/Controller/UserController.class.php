<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
	
	public function _initialize(){
		if (!isset($_SESSION['userInfo'])) {
			$this->error('请先登录再进行浏览', U('Login/loginPage'), 1);
		}
	}
	
 public function init(){
    	$User = M('User');
    	 
    	$sql ="SELECT u.*,r.role_name ,a.area_name  FROM rw_user  as u  LEFT JOIN rw_role as r ON r.id = u.role_id LEFT JOIN rw_area AS a ON a.id = u.area_id  ";
    	$User_list = $User->query($sql);
     
    	$this->assign('list' , $User_list);
     
      	$this->display();
    }
   	public function insertUser(){
   		$User = D('User');
   		$User->create();
   		$User->user_pwd = md5('111111');
   		$User->user_s_pwd = '111111';
   		$bool = $User->add();
   		if($bool > 0){
   			$this->success('操作成功' , 'init' , 1);
   		}else{
   			$this->error('操作失败' , 'init' , 1);
   		}
   	}
    

   	public function updateUser(){
   		if(!empty($_POST['id'])){
   			$User = M('User');
   			$UserData['nick_name'] = $_POST['nick_name'] ;
   			$UserData['user_name'] = $_POST['user_name'] ;
   			$UserData['role_id'] = $_POST['role_id'] ;
   			$UserData['logo_type'] = $_POST['logo_type'] ;
//    			$UserData['city_id'] = $_POST['city_id'] ;
   			$where['id'] =  $_POST['id'];
   			
   			$bool = $User->where($where)->save($UserData);
   			$this->success('操作成功' , U('init') , 1);
   		}else{
   			$this->error('操作失败' , U('init') , 1);
   		}
   	}
   	public function updateUserPwd(){
   		if(!empty($_POST['userId'])){
   			$User = M('User');
    		$UserData['user_pwd'] = md5($_POST['user_pwd']);
    		$UserData['user_s_pwd'] = $_POST['user_pwd'];
    		$UserWhere['id'] = $_POST['userId'];
    		$User->where($UserWhere)->save($UserData);
    		$this->success('操作成功' , U('init') , 1);
   		}else{
   			$this->error('操作1失败' , U('init') , 1);
   		}
   	}
   	public function deleteUser(){
   		try {
   			if(!empty($_GET['id'])){
   				$User = M('User');
   				$where['id'] = I('id');
   				$bool = $User->where($where)->delete();
   				if($bool > 0){
   					$this->success('操作成功' , U('init') , 1);
   				}else{
   					$this->error('操作失败' , U('init') , 1);
   				}
   			}
   		} catch (\Exception $e) {
   			echo $e->getMessage();
   			$this->error('操作失败' , U('init') , 1);
   		}
   	}
   	
   	
   	//    跳转、、、、、、、、、、
    public function addUser(){
    	$Role = M('Role');
    	$RoleList = $Role->select();
    	$this->assign('roleList' , $RoleList);
    	
    	$Area = M('Area');
    	$AreaWhere['del_flag']= 1;
    	$AreaList = $Area -> where($AreaWhere) ->select();
    	$this->assign("AreaList" , $AreaList ) ;
    	 
    	
    	$this->display();
    }
    
    
    public function editUser(){
    	if(!empty($_GET['id'])){
    		$User = D('User');
    		$UserBean = $User->find($_GET['id']);
    		
    		$Role = M('Role');
    		$RoleList = $Role->select();
    		$this->assign('roleList' , $RoleList);
    		
    		$Area = M('Area');
    		$AreaWhere['del_flag']= 1;
    		$AreaList = $Area -> where($AreaWhere) ->select();
    		$this->assign("AreaList" , $AreaList ) ;
    		
    		$this->assign('UserBean' , $UserBean);
    		$this->display();
    	}else{
    		$this->error('操作失败' , U('init') , 1);
    	}
    }
    
    public function editUserPwd(){
    	if(!empty($_GET['id'])){
    		$this->assign('userId' , $_GET['id']);
    		$this->display();
    	}else{
    		$this->error('操作失败' , U('init') , 1);
    	}
    }
}