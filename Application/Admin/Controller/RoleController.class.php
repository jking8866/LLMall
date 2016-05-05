<?php
namespace Admin\Controller;
use Think\Controller;
class RoleController extends Controller {
   
	public function _initialize(){
		if (!isset($_SESSION['userInfo'])) {
			$this->error('请先登录再进行浏览', U('Login/loginPage'), 1);
		}
	}
    
    public function init(){
    	
    	$Role = M('Role');
    	$Role_list = $Role->select();
    	$this->assign('list' , $Role_list);
    	$this->display();
    	
    }
    

    
    public function insertRole(){
    	$Role = D('Role');
    	$Role->create();
    	$bool = $Role->add();
    	
    	
    	
    	$AdminMenu  = M('AdminMenu');
    	$AdminMenuList = $AdminMenu->select();
    	 
    	//初始化  创建全部菜单对应关系
    	$BtwRoleMenu = M('BtwRoleMenu');
    	foreach ($AdminMenuList as $k => $v){
    		$BtwRoleMenuData['role_id']=$bool ;
    		$BtwRoleMenuData['menu_id'] = $v['id'];
    		$BtwRoleMenu->add($BtwRoleMenuData);
    	}
    	 
    	//对选中的菜单更改标志位
    	$menuIdList = $_POST['menu_id'] ;
    	
    	foreach ($menuIdList as $k => $v1){
    		$BtwRoleMenuWhere['role_id']  =$bool ;
    		$BtwRoleMenuWhere['menu_id'] = $v1;
    		$BtwRoleMenuData1['is_checked'] = 1;
    		$BtwRoleMenu->where($BtwRoleMenuWhere)->save($BtwRoleMenuData1);
    	}
    	
    	//********************************************************
    	
    	$AdminBtn  = M('AdminBtn');
    	$AdminBtnList = $AdminBtn->select();
    	 
    	//初始化  创建全部按钮对应关系
    	$BtwRoleBtn = M('BtwRoleBtn');
    	foreach ($AdminBtnList as $k => $v){
    		$BtwRoleBtnData['role_id']  =$bool ;
    		$BtwRoleBtnData['btn_id'] = $v['id'];
    		$BtwRoleBtn->add($BtwRoleBtnData);
    	}
    	$btnIdList = $_POST['btn_id'] ;
    	foreach ($btnIdList as $k => $v1){
    		$BtwRoleBtnWhere['role_id']  =$bool ;
    		$BtwRoleBtnWhere['btn_id'] = $v1;
    		$BtwRoleBtnData1['is_checked'] = 1;
    		$BtwRoleBtn->where($BtwRoleBtnWhere)->save($BtwRoleBtnData1);
    	}
    	
    	
    	
    	
    	
    	
    	if($bool > 0){
    		$this->success('操作成功' , 'init' , 1);
    	}else{
    		$this->error('操作失败' , 'init' , 1);
    	}
    }
    
    
    public function updateRole(){
    	if(!empty($_POST['id'])){
    		$Role = D('Role');
    		$RoleData['role_name'] = $_POST['role_name'] ;
    		$where['id'] =  $_POST['id'];
    		$bool = $Role->where($where)->save($RoleData);
    		
    		
    		//********************************************************
    		//将 菜单权限关系 重置 （0）
    		$AdminMenu  = M('AdminMenu');
    		$AdminMenuList = $AdminMenu->select();
    		$AdminBtwRoleMenu = M('BtwRoleMenu');
    		
    		$AdminBtwRoleMenu->where(" role_id =   ". $_POST['id'])->delete();
    		
    		
    		foreach ($AdminMenuList as $k => $v){
    			$AdminBtwRoleMenuData['role_id']  = $_POST['id'] ;
    			$AdminBtwRoleMenuData['menu_id'] = $v['id'];
    			$AdminBtwRoleMenuData['is_checked'] = 0;
    			$AdminBtwRoleMenu->add($AdminBtwRoleMenuData);
    		}
    		
    		$menuIdList = $_POST['menu_id'] ;
    		
    		foreach ($menuIdList as $k => $v1){
    			$AdminBtwRoleMenuWhere['role_id']  =$_POST['id']  ;
    			$AdminBtwRoleMenuWhere['menu_id'] = $v1;
    			$AdminBtwRoleMenuData2['is_checked'] = 1;
    			$AdminBtwRoleMenu->where($AdminBtwRoleMenuWhere)->save($AdminBtwRoleMenuData2);
    		}
    		
    		//********************************************************
    		//将 按钮权限关系 重置 （0）
    		$AdminBtn  = M('AdminBtn');
    		$AdminBtnList = $AdminBtn->select();
    		$AdminBtwRoleBtn = M('BtwRoleBtn');
    		
    		$AdminBtwRoleBtn->where(" role_id =   ". $_POST['id'])->delete();
    		 
    		foreach ($AdminBtnList as $k => $v){
    			$AdminBtwRoleBtnData['role_id']  = $_POST['id'] ;
    			$AdminBtwRoleBtnData['btn_id'] = $v['id'];
    			$AdminBtwRoleBtnData['is_checked'] = 0;
    			$AdminBtwRoleBtn->add($AdminBtwRoleBtnData);
    		}
    		
    		$btnIdList = $_POST['btn_id'] ;
    		
    		foreach ($btnIdList as $k => $v1){
    			$AdminBtwRoleBtnWhere['role_id']  =$_POST['id']  ;
    			$AdminBtwRoleBtnWhere['btn_id'] = $v1;
    			$AdminBtwRoleBtnData2['is_checked'] = 1;
    			$AdminBtwRoleBtn->where($AdminBtwRoleBtnWhere)->save($AdminBtwRoleBtnData2);
    		
    		}
    		
    		//*********************************************************
    		
    		$this->success('操作成功' , U('Role/init') , 1);
    	}else{
    		$this->error('操作失败' , U('Role/init') , 1);
    	}
    }
    public function deleteRole(){
    	 
    	try {
    		if(!empty($_GET['id'])){
    			$Role = D('Role');
    			$where['id'] = I('id');
    			$bool = $Role->where($where)->delete();
    			if($bool > 0){
    				$this->success('操作成功' , U('Role/init') , 1);
    			}else{
    				$this->error('操作失败' , U('Role/init') , 1);
    			}
    		}
    	} catch (\Exception $e) {
    		echo $e->getMessage();
    		$this->error('操作失败' , U('Role/init') , 1);
    	}
    	 
    }
    
    
    
    public function addRole(){
    	
    	$AdminMenu  = M('AdminMenu');
    	$AdminMenuList = $AdminMenu->select();
    	
    	foreach ($AdminMenuList as  $k => $v){
    		$AdminBtn  = M('AdminBtn');
    		$BtnList = $AdminBtn->where('  menu_id = '.$v['id'] )-> select();
    		$AdminMenuList[$k]['btn']= $BtnList ;
    	}
    	$this->assign('Menu' , $AdminMenuList );
    	
    	$this->display();
    }
    public function editRole(){
    	if(!empty($_GET['id'])){
    		$Role = D('Role');
    		$RoleBean = $Role->find($_GET['id']);
     
    		$AdminMenu  = M('AdminMenu');
    		$AdminMenuList = $AdminMenu->select();
    		
    		foreach ($AdminMenuList as  $k => $v){
    			$AdminBtn  = M('AdminBtn');
    			$BtnList = $AdminBtn->where('  menu_id = '.$v['id'] )-> select();
    			$AdminMenuList[$k]['btn']= $BtnList ;
    		}
    		$this->assign('Menu' , $AdminMenuList );
    
    		$this->assign('RoleBean' , $RoleBean);
    		$this->display();
    	}else{
    		$this->error('操作失败' , U('Role/init') , 1);
    	}
    }
    public function setRolePublic(){
    	$MemberPublic = M ( 'MemberPublic' );
    	$MemberPublicList = $MemberPublic->select ();
    	$this->assign ( 'memberPublic', $MemberPublicList );
    	
    	$this->assign ( 'role_id', $_GET['id'] );
    	
    	$this->display();
    }
    public function updateRolePublic(){
    	
    	$AdminBtwRolePublic =M('AdminBtwRolePublic');
    	$AdminBtwRolePublic->where("  role_id = ".$_POST['role_id'] )->delete();
    	
    	$MemberPublic = M ( 'MemberPublic' );
    	$MemberPublicList = $MemberPublic->select ();
    	foreach ($MemberPublicList as $k => $v ){
    		$RolePublicData['public_id']=$v['public_id'];
    		$RolePublicData['role_id']=$_POST['role_id'];
    		$AdminBtwRolePublic->add($RolePublicData);
    		 
    	}
    	
    	$public_idList= $_POST['public_id'];
    	 
    	foreach ($public_idList as $k => $v ){
    		 
	    	$RolePublicWhere['public_id']=$v;
	    	$RolePublicWhere['role_id']=$_POST['role_id'];
	    	$RolePublicData2['is_checked']=1;
	    	$AdminBtwRolePublic->where($RolePublicWhere)->save($RolePublicData2);
	    	 
    	}
    	
    	  
    	 $this->success('操作成功' , 'init' , 1);

//     	$this->display();
    }
    
    public function ajax_getRolePublic(){
    	$AdminBtwRolePublic =M('AdminBtwRolePublic');
    	$RolePublicWhere['public_id']=$_GET['public_id'];
    	$RolePublicWhere['role_id']=$_GET['role_id']; 
    	$AdminBtwRolePublicBean = $AdminBtwRolePublic->where($RolePublicWhere)->find();
    	if($AdminBtwRolePublicBean['is_checked'] == 1 ){
    		$this->ajaxReturn(1);
    	}else{
    		$this->ajaxReturn(0);
    	}
    }
    
	//验证是否有菜单权限
    public function ajax_getRoleMenu(){
    
    	$BtwRoleMenu  = M('BtwRoleMenu');
    	$BtwRoleMenuWhere['role_id'] =$_GET['role_id'] ;
    	$BtwRoleMenuWhere['menu_id'] =$_GET['menu_id'] ;
    	$AdminPrivilegeMenuList = $BtwRoleMenu->where($BtwRoleMenuWhere)->find();
    	if($AdminPrivilegeMenuList['is_checked'] == 1 ){
    		$this->ajaxReturn(1);
    	}else{
    		$this->ajaxReturn(0);
    	}
    }
    
    //验证是否有按钮权限
    public function ajax_getRoleBtn(){
    
    	$BtwRoleBtn  = M('BtwRoleBtn');
    	$BtwRoleBtnWhere['role_id'] =$_GET['role_id'] ;
    	$BtwRoleBtnWhere['btn_id'] =$_GET['btn_id'] ;
    	$AdminBtwPrivilegeBtnList = $BtwRoleBtn->where($BtwRoleBtnWhere)->find();
    	if($AdminBtwPrivilegeBtnList['is_checked'] == 1 ){
    		$this->ajaxReturn(1);
    	}else{
    		$this->ajaxReturn(0);
    	}
    }
    
}