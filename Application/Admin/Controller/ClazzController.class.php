<?php
namespace Admin\Controller;
use Think\Controller;
class ClazzController extends Controller {
	public function _initialize(){
		if (!isset($_SESSION['userInfo'])) {
			$this->error('请先登录再进行浏览', U('Login/loginPage'), 1);
		}
	}

	
    public function init(){
    	 $Clazz = M('Clazz');
    	 $sql='SELECT
					rw_clazz.* ,rw_teacher.teacher_name,rw_personnel.personnel_name,
    	 			rw_clazz.clazz_count * rw_clazz.clazz_each_hour * rw_clazz.clazz_hour_cost as total_cost
				FROM
					`rw_clazz`
				LEFT JOIN  rw_teacher ON rw_teacher.id = rw_clazz.teacher_id
				LEFT JOIN  rw_personnel ON rw_personnel.id = rw_clazz.personnel_id
				WHERE rw_clazz.del_flag = 1 and rw_clazz.area_id = '.$_SESSION['userInfo']['area_id'];
    	 
    	 $ClazzList =  $Clazz->query($sql);
    	 $this->assign('ClazzList'  , $ClazzList) ;
    	 
         $this->display();
    }
    
    
    public function add( $clazz_id = NULL ){
    	
    	$Teacher = M ( "Teacher" );
    	$teacherWhere ['del_flag'] = 1;
    	$teacherWhere ['area_id'] = $_SESSION['userInfo']['area_id'];
    	$TeacherList = $Teacher->where ( $teacherWhere )->select ();
    	$this->assign ( "TeacherList", $TeacherList );
    	
    	$Personnel = M ( "Personnel" );
    	$Personnel_where ['del_flag'] = 1;
    	$Personnel_where ['area_id'] = $_SESSION['userInfo']['area_id'];
    	$PersonnelList = $Personnel->where ( $Personnel_where )->select ();
    	$this->assign ( "PersonnelList", $PersonnelList );
    	

    	$grad = M('Grade');
    	$grad_list =  $grad->select();
    	$this->assign("grad_list",$grad_list);
    	
    	
    	$this->display();
    }
    public function edit(){
    	 
    	$Teacher = M ( "Teacher" );
    	$teacherWhere ['del_flag'] = 1;
    	$TeacherList = $Teacher->where ( $teacherWhere )->select ();
    	$this->assign ( "TeacherList", $TeacherList );
    	 
    	$Personnel = M ( "Personnel" );
    	$Personnel_where ['del_flag'] = 1;
    	$PersonnelList = $Personnel->where ( $Personnel_where )->select ();
    	$this->assign ( "PersonnelList", $PersonnelList );
    	 
    	
    	$Clazz = M('Clazz');
    	$sql='SELECT
					rw_clazz.* ,rw_teacher.teacher_name,rw_personnel.personnel_name
				FROM
					`rw_clazz`
				LEFT JOIN  rw_teacher ON rw_teacher.id = rw_clazz.teacher_id
				LEFT JOIN  rw_personnel ON rw_personnel.id = rw_clazz.personnel_id
				WHERE rw_clazz.del_flag = 1 and rw_clazz.area_id = '.$_SESSION['userInfo']['area_id'] .' and rw_clazz.id = '.$_GET['clazz_id'];
    	
    	$ClazzBean =  $Clazz->query($sql);
    	$this->assign('ClazzBean'  , $ClazzBean[0]) ;
//     	dump($ClazzBean[0]);
//     	die();
    	$this->display();
    }
    
    public function insert(){
    	
    	$Clazz = M('Clazz');
    	$Clazz_bean = bean_copy($_POST);
    	$Clazz_bean['create_time'] = date('Y-m-d H:i:s' , time());
    	$Clazz_bean['clazz_code'] = date('YmdHis' , time());
    	$Clazz_bean['area_id'] =$_SESSION['userInfo']['area_id'];
    	
    	$clazz_id = $Clazz->add($Clazz_bean);
    	
    	if( $clazz_id > 0){
    		for($i =0 ; $i < $_POST['clazz_count'] ; $i++ ){
    			$ClazzConsume = M('ClazzConsume');
    			$ClazzConsumeBean['consume_name'] = $_POST['clazz_name'].',第'.($i + 1).'次课';
    			$ClazzConsumeBean['consume_num'] = ($i + 1);// 排序
    			$ClazzConsumeBean['teacher_id'] = $_POST['teacher_id'];
    			$ClazzConsumeBean['personnel_id'] = $_POST['personnel_id'];
    			$ClazzConsumeBean['clazz_id'] = $clazz_id;
    			$ClazzConsumeBean['clazz_type'] = 1 ;
    			$ClazzConsumeBean['area_id'] = $_SESSION['userInfo']['area_id'] ;
    			$ClazzConsumeBean['create_time'] = date('Y-m-d H:i:s' , time());
    			$ClazzConsume->add($ClazzConsumeBean);
    		}
    	}else{
    		$this->error('操作失败' );
    	}
    	
    	$this->redirect("Clazz/nextStep","clazz_id=".$clazz_id);
    }
    
    public function  nextStep(){
    	
    	$clazz_id = I("clazz_id");
    	$ClazzConsume = M('ClazzConsume');
    	$where['clazz_id'] = $clazz_id;
    	$ClazzConsume_list= $ClazzConsume->where($where)->select();
    	$this->assign("consumeList",$ClazzConsume_list);
    	
    	$this->display();
    }
    
    public function  doNextStep(){
    	$ClazzConsume = M('ClazzConsume');
    	$list  =  bean_copy($_POST);
    	for ($i = 1; $i <= count($list)/2; $i++) {
    		$ClazzConsume_bean['open_consume_time'] = $list['open_consume_time'.$i];
    		$ClazzConsume_where["id"]=$list['id'.$i];
    		$ClazzConsume->where($ClazzConsume_where)->save($ClazzConsume_bean);
    	}
    	
	$this->success("操作成功",U("clazz/init"));    	
    }
    
    
    public function  nextStepUpdate(){
		$clazz_id = I("clazz_id");
    	$ClazzConsume = M('ClazzConsume');
    	$where['clazz_id'] = $clazz_id;
    	$ClazzConsume_list= $ClazzConsume->where($where)->select();
    	$this->assign("consumeList",$ClazzConsume_list);
    	$this->display();
    }
    
    
    
    
    
    
    public function update(){
    	$Clazz = M('Clazz');
    	$Clazz->create();
    	$Clazz->save();
    	$this->redirect('init');
    }
    
    
    public function ajax_getBeanInfo(){
    	
    	$Course = M('Course');
    	$CourseBean = $Course -> find( $_GET['bean_id'] );
    	$this->ajaxReturn( $CourseBean );
    	
    }
    public function ajax_getClazzInfo(){
    	 
    	$Clazz = M('Clazz');
    	$sql='SELECT
					rw_clazz.* ,rw_course.course_name,rw_teacher.teacher_name,rw_personnel.personnel_name,
    	 			rw_clazz.clazz_count * rw_clazz.clazz_each_hour * rw_clazz.clazz_hour_cost as total_cost
				FROM
					`rw_clazz`
				LEFT JOIN  rw_course ON rw_course.id = rw_clazz.course_id
				LEFT JOIN  rw_teacher ON rw_teacher.id = rw_clazz.teacher_id
				LEFT JOIN  rw_personnel ON rw_personnel.id = rw_clazz.personnel_id
				WHERE rw_clazz.del_flag = 1 and rw_clazz.area_id = '.$_SESSION['userInfo']['area_id'].' and rw_clazz.id = '.$_GET['clazz_id'] ;
    	$ClazzQueryList =  $Clazz ->query($sql);
    	$this->ajaxReturn( $ClazzQueryList[0] );
    	 
    }
   
    public function updateClazzState(){
    	$clazz_id = $_GET['clazz_id'];
    	
    	$Clazz = M('Clazz');
    	$ClazzBean = $Clazz -> find($clazz_id);
    	$ClazzBean['clazz_state'] = 2;
    	$Clazz->save($ClazzBean);
    	
    	$this->success("成功开课！");
    }
    
    
    
    
}
