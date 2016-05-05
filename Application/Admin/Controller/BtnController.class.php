<?php
namespace Admin\Controller;
use Think\Controller;
class BtnController extends Controller {

	public function _initialize(){
		if (!isset($_SESSION['userInfo'])) {
			$this->error('请先登录再进行浏览', U('Login/loginPage'), 1);
		}
	}	
	
 public function init(){
 	
 		$Model = new \Think\Model();
 		 
 		 
 		 
 		 
 		$sql = "SELECT ab.*, am.name FROM rw_admin_btn as ab LEFT JOIN rw_admin_menu as am ON am.id = ab.menu_id WHERE 1=1  "  ;
 		$list = $Model->query($sql);
 		 
    	$this->assign('list' , $list);
    	$this->display();
    }
    public function insertBtn(){
    	$AdminBtn = D('AdminBtn');
    	$AdminBtn->create();
    	$bool = $AdminBtn->add();
    	if($bool > 0){
    		$this->success('操作成功' , 'init' , 1);
    	}else{
    		$this->error('操作失败' , 'init' , 1);
    	}
    }
    public function updateBtn(){
    	if(!empty($_POST['id'])){
    		$AdminBtn = D('AdminBtn');
    		$AdminBtnData['btn_name'] = $_POST['btn_name'] ;
    		$AdminBtnData['menu_id'] = $_POST['menu_id'] ;
    		$AdminBtnData['btn_id'] = $_POST['btn_id'] ;
    			
    		$where['id'] =  $_POST['id'];
    		$bool = $AdminBtn->where($where)->save($AdminBtnData);
    		$this->success('操作成功' , U('Btn/init') , 1);
    	}else{
    		$this->error('操作失败' , U('Btn/init') , 1);
    	}
    }
    public function deleteBtn(){
    	 
    	try {
    		if(!empty($_GET['id'])){
    			$AdminBtn = D('AdminBtn');
    			$where['id'] = I('id');
    			$bool = $AdminBtn->where($where)->delete();
    			if($bool > 0){
    				$this->success('操作成功' , U('Btn/init') , 1);
    			}else{
    				$this->error('操作失败' , U('Btn/init') , 1);
    			}
    		}
    	} catch (\Exception $e) {
    		echo $e->getMessage();
    		$this->error('操作失败' , U('Btn/init') , 1);
    	}
    	 
    }
    public function addBtn(){
    	$AdminMenu  = M('AdminMenu');
    	$AdminMenuList = $AdminMenu->select();
    	$this->assign('AdminMenuList' , $AdminMenuList );
    	
    	
    	$this->display();
    }
    public function editBtn(){
    	if(!empty($_GET['id'])){
    		$AdminBtn = D('AdminBtn');
    		$AdminBtnBean = $AdminBtn->find($_GET['id']);
    		$this->assign('BtnBean' , $AdminBtnBean);
    		
    		$AdminMenu  = M('AdminMenu');
    		$AdminMenuList = $AdminMenu->select();
    		$this->assign('menuList' , $AdminMenuList );
    		
    		
    		$this->display();
    	}else{
    		$this->error('操作失败' , U('Btn/init') , 1);
    	}
    }
}