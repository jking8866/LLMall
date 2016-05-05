<?php
namespace Admin\Controller;
use Think\Controller;
class MenuController extends Controller {
	
	public function _initialize(){
		if (!isset($_SESSION['userInfo'])) {
			$this->error('请先登录再进行浏览', U('Login/loginPage'), 1);
		}
	}
    
    public function init(){
    	$AdminMenu = M('AdminMenu');
    	$AdminMenu_list = $AdminMenu->select();
    	$this->assign('list' , $AdminMenu_list);
    	$this->display();
    }
    public function insertMenu(){
    	$AdminMenu = D('AdminMenu');
    	$AdminMenu->create();
    	$bool = $AdminMenu->add();
    	if($bool > 0){
    		$this->success('操作成功' , 'init' , 1);
    	}else{
    		$this->error('操作失败' , 'init' , 1);
    	}
    }
    public function updateMenu(){
    	if(!empty($_POST['id'])){
    		$AdminMenu = D('AdminMenu');
    		$AdminMenuData['name'] = $_POST['name'] ;
    		$AdminMenuData['menu_id'] = $_POST['menu_id'] ;
//     		$AdminMenuData['clazz'] = $_POST['clazz'] ;
//     		$AdminMenuData['url'] = $_POST['url'] ;
    			
    		$where['id'] =  $_POST['id'];
    		$bool = $AdminMenu->where($where)->save($AdminMenuData);
    		$this->success('操作成功' , U('Menu/init') , 1);
    	}else{
    		$this->error('操作失败' , U('Menu/init') , 1);
    	}
    }
    public function deleteMenu(){
    	 
    	try {
    		if(!empty($_GET['id'])){
    			$AdminMenu = D('AdminMenu');
    			$where['id'] = I('id');
    			$bool = $AdminMenu->where($where)->delete();
    			if($bool > 0){
    				$this->success('操作成功' , U('Menu/init') , 1);
    			}else{
    				$this->error('操作失败' , U('Menu/init') , 1);
    			}
    		}
    	} catch (\Exception $e) {
    		echo $e->getMessage();
    		$this->error('操作失败' , U('Menu/init') , 1);
    	}
    	 
    }
    public function addMenu(){
    	
    	$this->display();
    }
    public function editMenu(){
    	if(!empty($_GET['id'])){
    		$AdminMenu = D('AdminMenu');
    		$AdminMenuBean = $AdminMenu->find($_GET['id']);
    
    		$this->assign('MenuBean' , $AdminMenuBean);
    		$this->display();
    	}else{
    		$this->error('操作失败' , U('Menu/init') , 1);
    	}
    }
}