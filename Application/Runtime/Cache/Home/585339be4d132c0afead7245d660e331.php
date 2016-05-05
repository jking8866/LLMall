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
    
    
<link rel="stylesheet" href="/zy/Public/flexselect/css/flexselect.css">
<style>
 

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
            <li class="treeview <?php echo ($navClass['order_add']); ?> <?php echo ($navClass['order_initall']); ?> <?php echo ($navClass['order_initmore']); ?> <?php echo ($navClass['order_initone']); ?>">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>报名缴费管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo ($navClass['order_add']); ?>"><a href="/zy/Order/add"><i class="fa fa-circle-o"></i>报名</a></li>
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
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>优惠活动管理</span> <i class="fa fa-angle-left pull-right"></i>
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
			学生报名<small>报名缴费管理</small>
		</h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<!-- Custom Tabs -->
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab_1" data-toggle="tab">集体班</a></li>
						<li><a href="/zy/Order/addMore"  >一对多</a></li>
						<li><a href="/zy/Order/addOne" >一对一</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_1">
							<div class="row">
								<div class="col-md-6">
									<!-- Horizontal Form -->
									<div class="">
										<div class="box-header with-border">
											<h3 class="box-title">填报信息</h3>
										</div>
										<!-- /.box-header -->
										<!-- form start -->
										<form role="form" method="post" action="/zy/Order/insertClazzAll">
											<div class="box-body">
												<div class="form-group">
													<label for="student_id">学生姓名</label> <select
														class="form-control" id="student_id" name="student_id" onchange="getOrderInfo()">
														<option>请填写</option>
														<?php if(is_array($StudentList)): $i = 0; $__LIST__ = $StudentList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["student_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
													</select>
												</div>
												<div class="form-group">
													<label for="clazz_id">所报班级</label> <select
														class="form-control" id="clazz_id" name="clazz_id"  onchange="getOrderInfo()" >
														<option>请填写</option>
														<?php if(is_array($ClazzList)): $i = 0; $__LIST__ = $ClazzList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["clazz_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
													</select>
												</div>
												<div class="form-group">
													<label for="clazz_id">签单人一</label> 
													<select class="form-control" id="personnel_one"  name="personnel_one">
														<option></option>
														<?php if(is_array($PersonnelList)): $i = 0; $__LIST__ = $PersonnelList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["personnel_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
													 </select>
												</div>
												<div class="form-group">
													<label for="clazz_id">签单人二</label> 
													<select class="form-control" id="personnel_two"  name="personnel_two">
														<option></option>
														<?php if(is_array($PersonnelList)): $i = 0; $__LIST__ = $PersonnelList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["personnel_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
													 </select>
												</div>
												<div class="form-group">
													<label for="rebate">选择折扣</label> <select
														class="form-control " id="rebate" name="rebate" onchange="getOrderInfo()">
														<option value="1">无折扣	</option>
														<option value="0.95">9.5折</option>
														<option value="0.9">9折</option>
														<option value="0.85">8.5折</option>
														<option value="0.8">8折</option>
														<option value="0.75">7.5折</option>
														<option value="0.7">7折</option>
														<option value="0.65">6.5折</option>
														<option value="0.6">6折</option>
														<option value="0.55">5.5折</option>
														<option value="0.5">5折</option>
														<option value="0.45">4.5折</option>
														<option value="0.4">4折</option>
														<option value="0.35">3.5折</option>
														<option value="0.3">3折</option>
														<option value="0.25">2.5折</option>
														<option value="0.2">2折</option>
														<option value="0.15">1.5折</option>
														<option value="0.1">1折</option>
														<option value="0.05">0.5折</option>
													</select>
												</div>
											</div>
											<div class="form-group">
						                      <label for="student_account">使用账户余额(单位:元) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"   id="make_student_account_plus" >使用+</a>  </label>
						                      <input type="text" class="form-control" name="make_student_account" id="make_student_account" value="0" style="display: none;">
						                    </div>
											<div class="form-group">
						                      <label for="clazz_count">减免金额(单位:元) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"   id="derate_cost_plus" >使用+</a> </label>
						                      <input type="text" class="form-control" name="derate_cost" id="derate_cost" value="0" style="display: none;">
						                    </div>
						                     
											<!-- /.box-body -->

											<div class="box-footer">
<!-- 												<button type="submit" class="btn btn-primary">下一步</button> -->
												<button class="btn btn-success pull-right" >
													<i class="fa fa-credit-card"></i> 信息已确认，提交
												</button>
												
											</div>
										</form>
									</div>
									<!-- /.box -->
								</div>
								<div class="col-md-6">


									<section class="invoice">
										<!-- title row -->
										<div class="row">
											<div class="col-xs-12">
												<h2 class="page-header">
													<i class="fa fa-globe"></i>详细信息<small
														class="pull-right">Date: 2/10/2014</small>
												</h2>
											</div>
											<!-- /.col -->
										</div>
										<!-- info row -->
										<div class="row invoice-info">
											<div class="col-sm-12 invoice-col">
												学生信息：
												<address>
													<strong><span id = "order_student_name" ></span></strong>
													<br>学校：<span id = "order_student_school_name" ></span>
													<br>年级：<span id = "order_grade_name" ></span>
													<br>联系电话：<span id = "order_student_parent_phone_num1" ></span>&nbsp;&nbsp;&nbsp;
													 			<span id = "order_student_parent_phone_num2" ></span>&nbsp;&nbsp;&nbsp;
																<span id = "order_student_parent_phone_num3" ></span>
													<br>微信端登录账号:<span id = "order_wx_username" ></span>
													<br>账户余额：<span style="color: #00A65A" id = "order_student_account"></span> 元
												</address>
											</div>
											<div class="col-sm-12 invoice-col">
												课程信息：
												<address>
													<strong><span id="order_clazz_name"></span></strong>
													
													<br>共 <span id="order_clazz_count"></span>20 节课， 每节课 <span id="order_clazz_each_hour"></span> 小时  ，每小时 <span id="order_clazz_hour_cost"></span> 元
													<br>课程费用： <span id="order_total_cost"></span> 元  
													<br>材料费： <span id="order_clazz_material_cost"></span> 元 
													<br>授课老师：<span id="order_teacher_name"></span>
													<br>教务老师：<span id="order_personnel_name"></span>
													
												</address>
											</div>
											<div class="col-sm-12 invoice-col">
												<address>
													享受折扣：<strong style="color: red;"><span id="order_rebate"></span>折</strong>
												</address>
											</div>
											 <div class="col-sm-12 invoice-col">
											 	合计
												<address>
													   <span id="order_total_cost_compute"></span> 元  * <span id="order_rebate_compute"></span>% + <span id="order_clazz_material_cost_compute"></span> 元
													   <br>= <span id= "order_count_compute" ></span>元
												</address>
											</div>
											<!-- /.col -->
										</div>
										<!-- /.row -->

										<!-- Table row -->
										<!-- this row will not appear when printing -->
										<div class="row no-print" style="display: ;">
											<div class="col-xs-12">
<!-- 												<a href="invoice-print.html" target="_blank" -->
<!-- 													class="btn btn-default"><i class="fa fa-print"></i> -->
<!-- 													Print</a> -->
<!-- 												<button class="btn btn-success pull-right" > -->
<!-- 													<i class="fa fa-credit-card"></i> 信息已确认，提交 -->
<!-- 												</button> -->
												<button type="button" class="btn pull-right " onclick="getOrderInfo()">刷新详细信息</button>
<!-- 												<button class="btn btn-primary pull-right" -->
<!-- 													style="margin-right: 5px;"> -->
<!-- 													<i class="fa fa-download"></i> Generate PDF -->
<!-- 												</button> -->
											</div>
										</div>
									</section>
									<!-- /.content -->


								</div>
							</div>
						</div>
						<!-- /.tab-pane -->
						<div class="tab-pane" id="tab_2"></div>
						<!-- /.tab-pane -->
						<div class="tab-pane" id="tab_3"></div>
						<!-- /.tab-pane -->
					</div>
					<!-- /.tab-content -->
				</div>
				<!-- nav-tabs-custom -->
			</div>
			<!-- /.col -->


		</div>
		<!-- /.row -->
	</section>


</div>

	 
	  
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
	
	
     <!-- DataTables --> <script
	src="/zy/Public/flexselect/js/jquery.flexselect.js"></script> <script
	src="/zy/Public/flexselect/js/liquidmetal.js"></script> <script
	type="text/javascript">

$(function(){
	$("#student_id").flexselect();
	$("#clazz_id").flexselect();
	$("#personnel_two").flexselect();
	$("#personnel_one").flexselect();
	
	$("#make_student_account_plus").click(function(){
		if($("#make_student_account").is(":hidden")){
		       $("#make_student_account").show();    //如果元素为隐藏,则将它显现
		}else{
		      $("#make_student_account").hide();     //如果元素为显现,则将其隐藏
		      $("#make_student_account").val();
		}
	})
	
	$("#derate_cost_plus").click(function(){
		if($("#derate_cost").is(":hidden")){
		       $("#derate_cost").show();    //如果元素为隐藏,则将它显现
		}else{
		      $("#derate_cost").hide();     //如果元素为显现,则将其隐藏
		      $("#derate_cost").val();
		}
	})
	
});
function getOrderInfo(){
	
	
	var order_clazz_material_cost_compute = "" ;
	var order_total_cost_compute = "" ;
	var order_rebate_compute = "" ;
	var order_count_compute = "";
	
	$.ajax({
		type: "get",
		url : "/zy/Student/ajax_getStudentInfo",
		data :  {"student_id":$('#student_id').val()},
		dataType : "json",
		async: false,
		success : function( obj ){
			 $('#order_wx_username').html(obj.wx_username);
			 $('#order_student_name').html(obj.student_name);
			 $('#order_grade_name').html(obj.grade_name);
			 $('#order_student_school_name').html(obj.student_school_name);
			 $('#order_student_parent_phone_num1').html(obj.student_parent_phone_num1);
			 $('#order_student_parent_phone_num2').html(obj.student_parent_phone_num2);
			 $('#order_student_parent_phone_num3').html(obj.student_parent_phone_num3);
			 $('#order_student_account').html(obj.student_account);
		},
		error : function( XMLHttpRequest, textStatus, errorThrown ){
		},
		complete : function (XMLHttpRequest, textStatus) {
		}
	});
	
	$.ajax({
		type: "get",
		url : "/zy/Clazz/ajax_getClazzInfo",
		data :  {"clazz_id":$('#clazz_id').val()},
		dataType : "json",
		async: false,
		success : function( obj ){
			 $('#order_clazz_name').html(obj.clazz_name);
			 $('#order_clazz_count').html(obj.clazz_count);
			 $('#order_clazz_each_hour').html(obj.clazz_each_hour);
			 $('#order_clazz_hour_cost').html(obj.clazz_hour_cost);
			 $('#order_total_cost').html(obj.total_cost);
			 $('#order_teacher_name').html(obj.teacher_name);
			 $('#order_personnel_name').html(obj.personnel_name);
			 $('#order_clazz_material_cost').html(obj.clazz_material_cost);
			 
			 $('#order_total_cost_compute').html(obj.total_cost);
			 $('#order_clazz_material_cost_compute').html(obj.clazz_material_cost);
			 order_total_cost_compute = obj.total_cost ;
			 order_clazz_material_cost_compute = obj.clazz_material_cost ;
			 
		},
		error : function( XMLHttpRequest, textStatus, errorThrown ){
		},
		complete : function (XMLHttpRequest, textStatus) {
		}
	});
	
	
	$('#order_rebate').html($('#rebate').val() * 10);
	order_rebate_compute = $('#order_rebate_compute').html($('#rebate').val() *100);
	
	order_count_compute = ( parseInt(order_total_cost_compute) *    $('#rebate').val()    ) + parseInt(order_clazz_material_cost_compute) ;
	$('#order_count_compute').html(order_count_compute);
	
	
}    




</script> 
    

    
  </body>
</html>