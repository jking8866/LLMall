<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title></title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.5 -->
      <link rel="stylesheet" href="/zy/Public/lte/bootstrap/css/bootstrap.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="/zy/Public/css/ionicons.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="/zy/Public/lte/dist/css/AdminLTE.min.css">
      <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="/zy/Public/lte/dist/css/skins/_all-skins.min.css">
      <!-- iCheck -->
      <link rel="stylesheet" href="/zy/Public/lte/plugins/iCheck/flat/blue.css">
      <!-- Morris chart -->
      <link rel="stylesheet" href="/zy/Public/lte/plugins/morris/morris.css">
      <!-- jvectormap -->
      <link rel="stylesheet" href="/zy/Public/lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
      <!-- Date Picker -->
      <link rel="stylesheet" href="/zy/Public/lte/plugins/datepicker/datepicker3.css">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="/zy/Public/lte/plugins/daterangepicker/daterangepicker-bs3.css">
      <!-- bootstrap wysihtml5 - text editor -->
      <link rel="stylesheet" href="/zy/Public/lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    
    
<link rel="stylesheet" href="/zy/Public/lte/plugins/datatables/dataTables.bootstrap.css">
<style>
table {
	 font-size: 12px;
}      
</style>

  </head>
  <body class="hold-transition skin-blue sidebar-mini"> 
  
<?php $m = strtolower(MODULE_NAME); $c = strtolower(CONTROLLER_NAME); $a = strtolower(ACTION_NAME); $navClass[$c.'_'.$a] = 'active'; ?>

    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="/zy/Public/lte/index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>LTE</span>
         
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="/zy/Public/lte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="/zy/Public/lte/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="/zy/Public/lte/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Create a nice theme
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="/zy/Public/lte/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo ($_SESSION['userInfo']['nick_name']); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="/zy/Public/lte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="/zy/Login/loginOut" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <!-- <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears">1111</i></a>
              </li> -->
            </ul>
          </div>
        </nav>
      </header>
      
       
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="/zy/Public/lte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form> -->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
          	<li class="header">功能菜单</li>
            <li class="treeview <?php echo ($navClass['order_add']); ?> <?php echo ($navClass['order_addmore']); ?> <?php echo ($navClass['order_addone']); ?> <?php echo ($navClass['order_initall']); ?> <?php echo ($navClass['order_initmore']); ?> <?php echo ($navClass['order_initone']); ?>">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>报名缴费管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo ($navClass['order_add']); ?> <?php echo ($navClass['order_addmore']); ?> <?php echo ($navClass['order_addone']); ?>"><a href="/zy/Order/add"><i class="fa fa-circle-o"></i>报名</a></li>
                <li class="<?php echo ($navClass['order_initall']); ?>"><a href="/zy/Order/initAll"><i class="fa fa-circle-o"></i>集体班订单</a></li>
                <li class="<?php echo ($navClass['order_initmore']); ?>"><a href="/zy/Order/initMore"><i class="fa fa-circle-o"></i>一对多订单</a></li>
                <li class="<?php echo ($navClass['order_initone']); ?>"><a href="/zy/Order/initOne"><i class="fa fa-circle-o"></i>一对一订单</a></li>
              </ul>
            </li>
            <li class="treeview <?php echo ($navClass['clazz_add']); ?> <?php echo ($navClass['clazz_init']); ?> <?php echo ($navClass['costone_add']); ?>">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>课程管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo ($navClass['clazz_add']); ?>"><a href="/zy/Clazz/add"><i class="fa fa-circle-o"></i>开设班级</a></li>
                <li class="<?php echo ($navClass['clazz_init']); ?>"><a href="/zy/Clazz/init"><i class="fa fa-circle-o"></i>班级列表</a></li>
                <li class="<?php echo ($navClass['costone_add']); ?>"><a href="/zy/CostOne/add"><i class="fa fa-circle-o"></i>一对一价目表</a></li>
                <li class="<?php echo ($navClass['costmore_add']); ?>"><a href="/zy/CostMore/add"><i class="fa fa-circle-o"></i>一对多价目表</a></li>
              </ul>
            </li>
             <li class="treeview ">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>课耗管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo ($navClass['']); ?>"><a href=""><i class="fa fa-circle-o"></i>集体班课耗</a></li>
                <li class="<?php echo ($navClass['']); ?>"><a href=""><i class="fa fa-circle-o"></i>一对多课耗</a></li>
                <li class="<?php echo ($navClass['']); ?>"><a href=""><i class="fa fa-circle-o"></i>一对一课耗</a></li>
              </ul>
            </li>
            <li class="treeview <?php echo ($navClass['student_init']); ?> <?php echo ($navClass['student_add']); ?>">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>学生管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu ">
              	<li class="<?php echo ($navClass['student_add']); ?>"><a href="/zy/Student/add"><i class="fa fa-circle-o"></i>学生注册</a></li>
                <li class="<?php echo ($navClass['student_init']); ?>"><a href="/zy/Student/init"><i class="fa fa-circle-o"></i>学生列表</a></li>
 	              </ul>
            </li>
            <li class="treeview  <?php echo ($navClass['teacher_add']); ?>  <?php echo ($navClass['teacher_init']); ?>">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>授课教师管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo ($navClass['teacher_add']); ?>"><a href="/zy/Teacher/add"><i class="fa fa-circle-o"></i> 授课老师注册</a></li>
                <li class="<?php echo ($navClass['teacher_init']); ?>"><a href="/zy/Teacher/init"><i class="fa fa-circle-o"></i> 授课老师列表</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>教务老师管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class=""><a href="/zy/Personnel/add"><i class="fa fa-circle-o"></i> 教务老师注册</a></li>
                <li><a href="/zy/Personnel/init"><i class="fa fa-circle-o"></i>教务老师列表</a></li>
              </ul>
            </li>
<!--             <li class="treeview <?php echo ($navClass['course_init']); ?> <?php echo ($navClass['course_add']); ?>"> -->
<!--               <a href="#"> -->
<!--                 <i class="fa fa-dashboard"></i> <span>课程管理</span> <i class="fa fa-angle-left pull-right"></i> -->
<!--               </a> -->
<!--               <ul class="treeview-menu"> -->
<!--                 <li class="<?php echo ($navClass['course_init']); ?>"><a href="/zy/Course/init"><i class="fa fa-circle-o"></i>课程列表</a></li> -->
<!--                 <li class="<?php echo ($navClass['course_add']); ?>"><a href="/zy/Course/add"><i class="fa fa-circle-o"></i>新增课程</a></li> -->
<!--               </ul> -->
<!--             </li> -->
            
            <li class="treeview <?php echo ($navClass['area_init']); ?> <?php echo ($navClass['area_add']); ?> ">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>校区管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo ($navClass['area_init']); ?>"><a href="/zy/Area/init"><i class="fa fa-circle-o"></i>校区列表</a></li>
                <li class="<?php echo ($navClass['area_add']); ?>"><a href="/zy/Area/add"><i class="fa fa-circle-o"></i>新增校区</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>师生信管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class=""><a href=""><i class="fa fa-circle-o"></i>课程评价</a></li>
                <li class=""><a href=""><i class="fa fa-circle-o"></i>教师评价</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>综合统计管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class=""><a href=""><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li class=""><a href=""><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul>
            </li>
            <li class="treeview <?php echo ($navClass['btn_init']); ?> <?php echo ($navClass['menu_init']); ?>  <?php echo ($navClass['role_init']); ?> <?php echo ($navClass['user_init']); ?>  ">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>系统权限管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo ($navClass['user_init']); ?> "><a href="/zy/User/init"><i class="fa fa-circle-o"></i>用户管理</a></li>
                <li class="<?php echo ($navClass['role_init']); ?>"><a href="/zy/Role/init"><i class="fa fa-circle-o"></i>	权限管理</a></li>
                <li class="<?php echo ($navClass['menu_init']); ?>"><a href="/zy/Menu/init"><i class="fa fa-circle-o"></i> 菜单管理</a></li>
                <li class="<?php echo ($navClass['btn_init']); ?> "><a href="/zy/Btn/init"><i class="fa fa-circle-o"></i> 按钮管理</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

	
	   
	
	
       <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			一对一订单列表 <small>订单管理</small>
		</h1>
	</section>
	
	<!-- Main content -->
	<section class="invoice">
		 <div class="row">
            <div class="col-xs-12 table-responsive">
              <table id  ="demo" class="table table-striped">
                 <thead>
                      <tr>
                        <th width="10%">订单编号</th>
                        <th>学生姓名</th>
                        <th>教师等级</th>
                        <th>一对多类型</th>
                        <th>年级</th>
                        <th>所报小时</th>
                        <th>单价(元/小时)</th>
                        <th>订单总价</th>
                        <th>已缴纳</th>
                        <th>订单状态</th>
                        <th>操作</th>
                      </tr>
                    </thead>
                    <tbody>
								<?php if(is_array($OrderList)): $i = 0; $__LIST__ = $OrderList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bean): $mod = ($i % 2 );++$i;?><tr>
									<td><?php echo ($bean["order_code"]); ?></td>
									<td><?php echo ($bean["student_name"]); ?></td>
									<td>
 									<?php switch($bean["teacher_level"]): case "1": ?>普通<?php break;?>
									    <?php case "2": ?>中级<?php break;?>
									    <?php case "3": ?>高级<?php break;?>
									    <?php case "4": ?>五所<?php break; endswitch;?>
 									</td>
 									<td>
 									<?php switch($bean["one_to_more_type"]): case "1": ?>一对二<?php break;?>
									    <?php case "2": ?>一对三<?php break;?>
									    <?php case "3": ?>一对四<?php break;?>
									    <?php case "4": ?>一对五<?php break; endswitch;?>
 									</td>
			                        <td><?php echo ($bean["grade_name"]); ?></td>
			                        <td><?php echo ($bean["hour_count"]); ?></td>
			                        <td><?php echo ($bean["each_cost"]); ?></td>
			                        <td><?php echo ($bean["all_cost"]); ?></td>
			                        <td><?php echo ($bean["sign_up_cost"]); ?></td>
			                        <td>
			                        <?php switch($bean["order_state"]): case "0": ?>欠费<?php break;?>
									    <?php case "1": ?>已缴纳<?php break; endswitch;?>
			                        </td>
									<td>
									 	<a href="/zy/Order/payOrderCost/order_id/<?php echo ($bean["order_id"]); ?>/clazz_type/2"  >缴费</a>
									</td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>

						 
                    </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->
		 
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper --> 


<script  type="text/javascript">
function ajax_getBeanInfo(bean_id){
	 $('#bean_id').val("");
	 $('#course_name').val("");
	$.ajax({
		type: "get",
		url : "/zy/Course/ajax_getBeanInfo",
		data :  {"bean_id":bean_id},
		dataType : "json",
		success : function( obj ){
			 $('#bean_id').val(obj.id);
			 $('#course_name').val(obj.course_name);
			 
		},
		error : function( XMLHttpRequest, textStatus, errorThrown ){
		},
		complete : function (XMLHttpRequest, textStatus) {
		}
	});
}



 
</script>   



	 
	  
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
	  	
	  

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
    
     
    
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
	
	
	
	
 	
 	<!-- jQuery 2.1.4 -->
    <script src="/zy/Public/lte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/zy/Public/lte/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="/zy/Public/lte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/zy/Public/lte/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="/zy/Public/lte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/zy/Public/lte/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/zy/Public/lte/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
	
	
    
  <!-- DataTables -->
<script src="/zy/Public/lte/plugins/datatables/jquery.dataTables.js"></script>
<script src="/zy/Public/lte/plugins/datatables/dataTables.bootstrap.js"></script>
<script  type="text/javascript">
$('#example1').DataTable();
$('#demo').DataTable();
      
</script>    

    

    
  </body>
</html>