<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title></title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.5 -->
      <link rel="stylesheet" href="/LLMall/Public/lte/bootstrap/css/bootstrap.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="/LLMall/Public/css/ionicons.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="/LLMall/Public/lte/dist/css/AdminLTE.min.css">
      <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="/LLMall/Public/lte/dist/css/skins/_all-skins.min.css">
      <!-- iCheck -->
      <link rel="stylesheet" href="/LLMall/Public/lte/plugins/iCheck/flat/blue.css">
      <!-- Morris chart -->
      <link rel="stylesheet" href="/LLMall/Public/lte/plugins/morris/morris.css">
      <!-- jvectormap -->
      <link rel="stylesheet" href="/LLMall/Public/lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
      <!-- Date Picker -->
      <link rel="stylesheet" href="/LLMall/Public/lte/plugins/datepicker/datepicker3.css">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="/LLMall/Public/lte/plugins/daterangepicker/daterangepicker-bs3.css">
      <!-- bootstrap wysihtml5 - text editor -->
      <link rel="stylesheet" href="/LLMall/Public/lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    
    
<link rel="stylesheet" href="/LLMall/Public/lte/plugins/datatables/dataTables.bootstrap.css">
<style>
table {
	 ;
}      
</style>

  </head>
  <body class="hold-transition skin-blue sidebar-mini"> 
  
<?php $m = strtolower(MODULE_NAME); $c = strtolower(CONTROLLER_NAME); $a = strtolower(ACTION_NAME); $navClass[$c.'_'.$a] = 'active'; ?>

    <div class="wrapper">
	  
      <header class="main-header">
        <!-- Logo -->
        <a href="/LLMall/Public/lte/index2.html" class="logo">
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
                            <img src="/LLMall/Public/lte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
                            <img src="/LLMall/Public/lte/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
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
                            <img src="/LLMall/Public/lte/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
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
                  <img src="/LLMall/Public/lte/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo ($_SESSION['userInfo']['nick_name']); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="/LLMall/Public/lte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
                      <a href="/LLMall/Login/loginOut" class="btn btn-default btn-flat">Sign out</a>
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
              <img src="/LLMall/Public/lte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
                <li class="<?php echo ($navClass['order_add']); ?> <?php echo ($navClass['order_addmore']); ?> <?php echo ($navClass['order_addone']); ?>"><a href="/LLMall/Order/add"><i class="fa fa-circle-o"></i>报名</a></li>
                <li class="<?php echo ($navClass['order_initall']); ?>"><a href="/LLMall/Order/initAll"><i class="fa fa-circle-o"></i>集体班订单</a></li>
                <li class="<?php echo ($navClass['order_initmore']); ?>"><a href="/LLMall/Order/initMore"><i class="fa fa-circle-o"></i>一对多订单</a></li>
                <li class="<?php echo ($navClass['order_initone']); ?>"><a href="/LLMall/Order/initOne"><i class="fa fa-circle-o"></i>一对一订单</a></li>
              </ul>
            </li>
            <li class="treeview <?php echo ($navClass['consume_consumeall']); ?>   
            					<?php echo ($navClass['consume_eachconsumeall']); ?> 
            					<?php echo ($navClass['consumeclazzmore_consumemore']); ?>  
            					<?php echo ($navClass['consumeclazzmore_studentconsumemore']); ?> 
            					<?php echo ($navClass['consumeclazzone_consumeone']); ?>
            					<?php echo ($navClass['consumeclazzmore_consumemoreinit']); ?>
            					<?php echo ($navClass['consumeclazzone_consumeoneinit']); ?>
            					<?php echo ($navClass['consumeclazzone_studentconsumeone']); ?>">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>课耗管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo ($navClass['consume_consumeall']); ?> 
                			<?php echo ($navClass['consume_eachconsumeall']); ?>">
                			<a href="/LLMall/Consume/consumeAll"><i class="fa fa-circle-o"></i>集体班课耗</a>
                </li>
                 <li class="<?php echo ($navClass['consumeclazzmore_consumemore']); ?>  
                 			<?php echo ($navClass['consumeclazzmore_studentconsumemore']); ?>
                 			<?php echo ($navClass['consumeclazzmore_consumemoreinit']); ?>">
                 			<a href="/LLMall/ConsumeClazzMore/consumeMoreInit"><i class="fa fa-circle-o"></i>一对多课耗列表</a>
                 </li>
                <li class="<?php echo ($navClass['consumeclazzone_consumeone']); ?>
                			<?php echo ($navClass['consumeclazzone_consumeoneinit']); ?>
                			<?php echo ($navClass['consumeclazzone_studentconsumeone']); ?>">
                			<a href="/LLMall/ConsumeClazzOne/consumeOneInit"><i class="fa fa-circle-o"></i>一对一课耗列表</a>
                </li>
              </ul>
            </li>
            <li class="treeview <?php echo ($navClass['clazz_add']); ?> <?php echo ($navClass['clazz_init']); ?> <?php echo ($navClass['costone_add']); ?>">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>课程管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo ($navClass['clazz_add']); ?>"><a href="/LLMall/Clazz/add"><i class="fa fa-circle-o"></i>开设班级</a></li>
                <li class="<?php echo ($navClass['clazz_init']); ?>"><a href="/LLMall/Clazz/init"><i class="fa fa-circle-o"></i>班级列表</a></li>
                <li class="<?php echo ($navClass['costone_add']); ?>"><a href="/LLMall/CostOne/add"><i class="fa fa-circle-o"></i>一对一价目表</a></li>
                <li class="<?php echo ($navClass['costmore_add']); ?>"><a href="/LLMall/CostMore/add"><i class="fa fa-circle-o"></i>一对多价目表</a></li>
              </ul>
            </li>
             
            <li class="treeview <?php echo ($navClass['student_init']); ?> <?php echo ($navClass['student_add']); ?>">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>学生管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu ">
              	<li class="<?php echo ($navClass['student_add']); ?>"><a href="/LLMall/Student/add"><i class="fa fa-circle-o"></i>学生注册</a></li>
                <li class="<?php echo ($navClass['student_init']); ?>"><a href="/LLMall/Student/init"><i class="fa fa-circle-o"></i>学生列表</a></li>
 	              </ul>
            </li>
            <li class="treeview  <?php echo ($navClass['teacher_add']); ?>  <?php echo ($navClass['teacher_init']); ?>  <?php echo ($navClass['formula_teacherall']); ?>">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>授课教师管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo ($navClass['teacher_add']); ?>"><a href="/LLMall/Teacher/add"><i class="fa fa-circle-o"></i> 授课老师注册</a></li>
                <li class="<?php echo ($navClass['teacher_init']); ?> <?php echo ($navClass['formula_teacherall']); ?>"><a href="/LLMall/Teacher/init"><i class="fa fa-circle-o"></i> 授课老师列表</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>教务老师管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class=""><a href="/LLMall/Personnel/add"><i class="fa fa-circle-o"></i> 教务老师注册</a></li>
                <li ><a href="/LLMall/Personnel/init"><i class="fa fa-circle-o"></i>教务老师列表</a></li>
              </ul>
            </li>
            <li class="treeview <?php echo ($navClass['course_init']); ?> <?php echo ($navClass['course_add']); ?>">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>公式管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo ($navClass['course_init']); ?>"><a href="/LLMall/Formula/teacherAll"><i class="fa fa-circle-o"></i>公式管理</a></li>
              </ul>
            </li>
            
            <li class="treeview <?php echo ($navClass['area_init']); ?> <?php echo ($navClass['area_add']); ?> ">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>校区管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo ($navClass['area_init']); ?>"><a href="/LLMall/Area/init"><i class="fa fa-circle-o"></i>校区列表</a></li>
                <li class="<?php echo ($navClass['area_add']); ?>"><a href="/LLMall/Area/add"><i class="fa fa-circle-o"></i>新增校区</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>师生信管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo ($navClass['studentEvaluateClazz_init']); ?>"><a href="/LLMall/StudentEvaluateClazz/init"><i class="fa fa-circle-o"></i>课程评价</a></li>
                <li class="<?php echo ($navClass['studentEvaluateTeacher_init']); ?>"><a href="/LLMall/StudentEvaluateTeacher/init"><i class="fa fa-circle-o"></i>教师评价</a></li>
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
                <li class="<?php echo ($navClass['user_init']); ?> "><a href="/LLMall/User/init"><i class="fa fa-circle-o"></i>用户管理</a></li>
                <li class="<?php echo ($navClass['role_init']); ?>"><a href="/LLMall/Role/init"><i class="fa fa-circle-o"></i>	权限管理</a></li>
                <li class="<?php echo ($navClass['menu_init']); ?>"><a href="/LLMall/Menu/init"><i class="fa fa-circle-o"></i> 菜单管理</a></li>
                <li class="<?php echo ($navClass['btn_init']); ?> "><a href="/LLMall/Btn/init"><i class="fa fa-circle-o"></i> 按钮管理</a></li>
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
			班级列表 <small>班级管理</small>
		</h1>
		<!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol> -->
	</section>
	
	<!-- Main content -->
	<section class="invoice">
		 <div class="row">
            <div class="col-xs-12 table-responsive">
              <table id  ="demo" class="table table-striped">
                 <thead>
                      <tr>
                        
                        <th width="10%">班级名称</th>
                        <th>课时(总价)</th>
                        <th>授课教师</th>
                        <th>教务老师</th>
                        <th>时长(小时)</th>
                        <th>课时(节)</th>
                        <th>单价(元/小时)</th>
                      	<th>状态</th>
                        
                        <th>操作</th>
                      </tr>
                    </thead>
                    <tbody>
								<?php if(is_array($ClazzList)): $i = 0; $__LIST__ = $ClazzList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bean): $mod = ($i % 2 );++$i;?><tr>
									 
									<td><?php echo ($bean["clazz_name"]); ?></td>
									<td><?php echo ($bean["total_cost"]); ?></td>
 
			                        <td><?php echo ($bean["teacher_name"]); ?></td>
			                        <td><?php echo ($bean["personnel_name"]); ?></td>
			                        <td><?php echo ($bean["clazz_each_hour"]); ?></td>
			                       
			                        <td><?php echo ($bean["clazz_count"]); ?></td>
			                        <td><?php echo ($bean["clazz_hour_cost"]); ?></td>
			                        <td>
			                        
			                        <?php switch($bean["clazz_state"]): case "1": ?>报名期<?php break;?>
									    <?php case "2": ?>进行中<?php break;?>
									    <?php case "3": ?>完结<?php break; endswitch;?>
			                        
			                        </td>
									<td>
									 <a href="/LLMall/Clazz/edit/clazz_id/<?php echo ($bean["id"]); ?>"  >编辑</a>
									 <a href="/LLMall/Clazz/updateClazzState/clazz_id/<?php echo ($bean["id"]); ?>"  >开课</a>
									
									
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
		url : "/LLMall/Course/ajax_getBeanInfo",
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
          <li><a href="#" data-toggle="control-sidebar">取消</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane active" id="control-sidebar-home-tab">
            <h5 class="control-sidebar-heading">修改信息</h5>
             <form role="form" method="post" action="/LLMall/Course/update">
             	  <input type="hidden" name="id" id="bean_id" >
                  <div class="box-body">
                    <div class="form-group">
                      <label for="student_name">姓名</label>
                      <input type="text" class="form-control" name="course_name"  id="course_name" placeholder="">
                    </div>
                     <button type="submit" class="btn btn-primary"   >提交</button>
                     
                  </div><!-- /.box-body -->
                </form>

          </div><!-- /.tab-pane -->
          
        </div>
   
      </aside><!-- /.control-sidebar -->
    
     
    
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
	
	
	
	
 	
 	<!-- jQuery 2.1.4 -->
    <script src="/LLMall/Public/lte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/LLMall/Public/lte/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="/LLMall/Public/lte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/LLMall/Public/lte/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="/LLMall/Public/lte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/LLMall/Public/lte/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/LLMall/Public/lte/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
	
	
    
  <!-- DataTables -->
<script src="/LLMall/Public/lte/plugins/datatables/jquery.dataTables.js"></script>
<script src="/LLMall/Public/lte/plugins/datatables/dataTables.bootstrap.js"></script>
<script  type="text/javascript">
$('#example1').DataTable();
$('#demo').DataTable();
      
</script>    

    

    
  </body>
</html>