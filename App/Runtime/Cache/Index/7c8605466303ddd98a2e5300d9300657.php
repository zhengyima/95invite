<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="UTF-8" />
		<title>我的预约</title>
				<!-- Import google fonts -->
        <!--link href='http://fonts.useso.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
        
		< Favicon and touch icons -->
		<!--link rel="shortcut icon" href="assets/img/cruc.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="assets/ico/apple-touch-icon.png" />
		<link rel="apple-touch-icon" sizes="57x57" href="assets/ico/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="assets/ico/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="76x76" href="assets/ico/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="assets/ico/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="120x120" href="assets/ico/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="assets/ico/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="152x152" href="assets/ico/apple-touch-icon-152x152.png" /-->
		
	    <!-- start: CSS file-->
		
		<!-- Vendor CSS-->
		
		<!-- Plugins CSS-->
		<link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet" />

		<link href="__PUBLIC__/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

		<link href="__PUBLIC__/css/jquery-ui.css" rel="stylesheet" />	
		<link href="__PUBLIC__/vendor/scrollbar/css/mCustomScrollbar.css" rel="stylesheet" />
		<!--link href="assets/plugins/bootkit/css/bootkit.css" rel="stylesheet" />
		<link href="assets/plugins/magnific-popup/css/magnific-popup.css" rel="stylesheet" />
		<link href="assets/plugins/fullcalendar/css/fullcalendar.css" rel="stylesheet" />
		<link href="assets/plugins/jqvmap/jqvmap.css" rel="stylesheet" /-->
		<!-- Theme CSS -->
		<link href="__PUBLIC__/css/jquery.mmenu.css" rel="stylesheet" />
		<!--link href="__PUBLIC__/vendor/fullcalendar/css/fullcalendar.css" rel="stylesheet" /-->
		
		<link href="__PUBLIC__/css/style.css" rel="stylesheet"/>



		<link href="__PUBLIC__/css/datepicker3.css" rel="stylesheet" />
		<link href="__PUBLIC__/css/datepicker-theme.css" rel="stylesheet" />
		
		<!--link href="__PUBLIC__/css/skycons.css" rel="stylesheet" /-->
		<!--link href="__PUBLIC__/css/pace.preloader.css" rel="stylesheet" /-->
		<!--link href="assets/plugins/select2/select2.css" rel="stylesheet" />
		<link href="assets/css/jquery.mmenu.css" rel="stylesheet" /-->
		<!-- Page CSS -->		
		<!--link href="__PUBLIC__/css/add-ons.min.css" rel="stylesheet" /-->
				

	

	
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />	
		<link href="__PUBLIC__/vendor/jquery-datatables-bs3/css/datatables.css" rel="stylesheet"/>
		<script src="__PUBLIC__/js/modernizr.js"></script>	
		<style type="text/css">
			#mytable_paginate a{
				color:#777
			  }
			  .paginate_button{
				  margin-right:20px;
			  }
		</style>	 				
	</head>
	<body>
			<!-- Start: Header -->
		<div class="navbar" role="navigation">
				<div class="container-fluid container-nav">
					<!-- Navbar Action -->
					<ul class="nav navbar-nav navbar-actions navbar-left">
						<li class="visible-md visible-lg"><a href="#" id="main-menu-toggle"><i class="fa fa-th-large"></i></a></li>
						<li class="visible-xs visible-sm"><a href="#" id="sidebar-menu"><i class="fa fa-navicon"></i></a></li>			
					</ul>
					<!-- Navbar Left -->
					<div class="navbar-left">
						<!-- Search Form -->
					</div>
					<!-- Navbar Right -->
					<div class="navbar-right">					
						<!-- Notifications -->
						<ul class="notifications hidden-xs">						
							<li>
								<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
									<i class="fa fa-tasks"></i>
									<span class="badge">10</span>
								</a>
							</li>
							<li>
								<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
									<i class="fa fa-envelope"></i>
									<span class="badge">5</span>
								</a>
							</li>
							<li>
								<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
									<i class="fa fa-bell"></i>
									<span class="badge">3</span>
								</a>
							</li>
						</ul>
						<!-- End Notifications -->					
						<!-- Userbox -->
						<div class="userbox">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<figure class="profile-picture hidden-xs">
									<img src="__PUBLIC__/images/icon.jpg" class="img-circle" alt="" />
								</figure>
								<div class="profile-info">
									<span class="name">
											<?php echo $_SESSION['uname']; ?>
									</span>
									<span class="role"><i class="fa fa-circle bk-fg-success"></i> 
										<?php if($_SESSION['type']=='student'){ echo "普通用户"; } else{ echo "管理员"; } ?>
									</span>
								</div>			
								<i class="fa custom-caret"></i>
							</a>
							<div class="dropdown-menu">
								<ul class="list-unstyled">
									<li class="dropdown-menu-header bk-bg-white bk-margin-top-15">						
										<div class="progress progress-xs  progress-striped active">
											<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
												60%
											</div>
										</div>							
									</li>	
                                    <li>
                                        <a href="<?php echo U('Index/Changepasswd/index');?>"><i class="fa fa-user"></i> 修改个人资料</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-file"></i> 我的文件</a>
                                    </li>
                                    <li>
										<a href="<?php echo U('Index/Index/index');?>"><i class="fa fa-power-off"></i> 注销</a> 
										<!--  注销这里之后要去session -->
                                    </li>
								</ul>
							</div>						
						</div>
						<!-- End Userbox -->
					</div>
					<!-- End Navbar Right -->
				</div>		
			</div>
			<!-- End: Header -->
		<div class="container-fluid content">	
			<div class="row">		
				﻿				<div class="sidebar">
					<div class="sidebar-collapse">
						<!-- Sidebar Header Logo-->
						<div class="sidebar-header">
							<!--img src="assets/img/ruc.png" class="img-responsive" style="width:50px;margin-left:50px;"  alt="" /-->
						</div>
						<!-- Sidebar Menu-->
						<div class="sidebar-menu">						
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-sidebar">
									<div class="panel-body text-center">								
										<div class="flag">
											<h3> 重点实验室管理系统 </h3> 
										</div>
									</div>

        							<!--li class='nav-parent'>
										<a>
											<i class='fa fa-tasks' aria-hidden='true'></i><span>信息统计</span>
										</a>
										<ul class='nav nav-children'>
											<li><a href='info_upload.php?man_id=".$_GET['man_id']."'><span class='text'> 上传统计文件</span></a></li>
											<li><a href='info_view_upload.php?man_id=".$_GET['man_id']."'><span class='text'> 查看所有上传</span></a></li>
											<li><a href='info_view.php?man_id=".$_GET['man_id']."'><span class='text'> 查看统计信息</span></a></li>			
                                            <li><a href='info_publish_task.php?man_id=".$_GET['man_id']."'><span class='text'> 发布任务</span></a></li>
																						
										</ul>
									</li-->
									<li class='nav-parent'>
										<a>
											<i class='fa fa-tasks' aria-hidden='true'></i><span>会议室预约系统</span>
										</a>
										<ul class='nav nav-children'>
											<li><a href="<?php echo U('Index/Order/index');?>"><span class='text'> 会议室预订</span></a></li>
											<li><a href="<?php echo U('Index/Myreservation/index');?>"><span class='text'> 我的预订</span></a></li>									
										</ul>
									</li>
									 
									<!--li class='nav-parent'>
										<a>
											<i class='fa fa-tasks' aria-hidden='true'></i><span>固定资产管理</span>
										</a>
										<ul class='nav nav-children'>
											<li><a href='resource_info.php?man_id=".$_GET['man_id']."'><span class='text'> 固定资产信息</span></a></li>
											<li><a href='resource_div.php?man_id=".$_GET['man_id']."'><span class='text'> 固定资产领用</span></a></li>								
										</ul>
									</li>
									
									<li class='nav-parent'>
										<a>
											<i class='fa fa-tasks' aria-hidden='true'></i><span>云平台管理</span>
										</a>
										<ul class='nav nav-children'>
											<li><a href='cloud_info.php?man_id=".$_GET['man_id']."'><span class='text'>云平台信息</span></a></li>
											<li><a href='cloud_div.php?man_id=".$_GET['man_id']."'><span class='text'>云平台分配</span></a></li>								
										</ul>
									</li>
									
									<li>
										<a href='seat_manage.php?man_id=".$_GET['man_id']."'>
											<i class='fa fa-life-bouy' aria-hidden='true'></i><span>工位管理</span>
										</a>
									</li>
									<li>
										<a href='member.php?man_id=".$_GET['man_id']."'>
											<i class='fa fa-life-bouy' aria-hidden='true'></i><span>实验室成员管理</span>
										</a>
									</li-->
	


									
									 
								</ul>
							</nav>
						</div>
						<!-- End Sidebar Menu-->
					</div>
					<!-- Sidebar Footer-->
					<div class="sidebar-footer">					
							
					</div>
					<!-- End Sidebar Footer-->
				</div>
				<div class="main ">
					<!-- Page Header -->
					<div class="page-header">
						<div class="pull-left">
							<ol class="breadcrumb visible-sm visible-md visible-lg">								
								<li><a href="<?php echo U('Index/Order/index');?>"><i class="icon fa fa-home"></i>主页</a></li>
								<li class="active"><i class="fa fa-laptop"></i>主页</li>
							</ol>						
						</div>
						<div class="pull-right">
							<h2>我的预约</h2>
						</div>					
					</div>
					<!-- End Page Header -->
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="panel panel-default bk-bg-white">
								<div class="panel-heading bk-bg-white">
								
									<h6><i class="fa fa-table red"></i><span class="break"></span>我的预约单</h6>							
									<div class="panel-actions">
										<a href="#" class="btn-minimize"><i class="fa fa-caret-up"></i></a>
										<a href="#" class="btn-close"><i class="fa fa-times"></i></a>
									</div>
								</div>
								<h6><strong><?php echo ($usernumber); ?></strong></h6>
								<div class="panel-body">
									 
									<table class="table table-bordered table-striped mb-none" id="mytable">
										<thead>
											<tr>
												<th>预约类型</th>
												<th>会议室名称</th>
												<th>预约日期</th>
												<th>预约时间段</th>
												<th>使用理由</th>
											</tr>
										</thead>
										<tbody>		
							
							
								<?php if(is_array($query)): foreach($query as $key=>$row): ?><tr>
									<td><?php echo ($kind); ?></td>
									<td><?php echo ($row['house_name']); ?>
									</td>
									<td><?php echo ($row['use_date']); ?></td>
									<td><?php echo ($row['time']); ?>
									</td>
									<td><?php echo ($row['use_goal']); ?>
									</td>
								</tr><?php endforeach; endif; ?>
																								 
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>					   
			</div>
				<!-- End Main Page -->	
		<div class="clearfix"></div>	
		<script>
			//alert("a");
			var sparklineLineVisitsData = [15, 16, 17, 19, 15, 25, 23, 35, 29, 15, 30, 45];
		</script>
		<div >

</div>
				
		<!-- Vendor JS-->				
		<!--script src="__PUBLIC__/js/jquery-3.2.1.js"></script-->
		<!--script src="assets/vendor/js/jquery-2.1.1.min.js"></script-->

		<script src="__PUBLIC__/js/jquery.min.js"></script>

		<script src="__PUBLIC__/js/jquery-2.1.1.min.js"></script>
		<script src="__PUBLIC__/js/jquery-migrate-1.2.1.min.js"></script>
		<script src="__PUBLIC__/js/bootstrap.js"></script>
		<!--script src="assets/vendor/skycons/js/skycons.js"></script-->
		<script src="__PUBLIC__/js/pace.min.js"></script>
		
		<!-- Plugins JS-->
		<script src="__PUBLIC__/js/jquery-ui.js"></script>
		<script src="__PUBLIC__/js/bootbox.min.js"></script>
		<script src="__PUBLIC__/vendor/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
		<!--script src="assets/plugins/bootkit/js/bootkit.js"></script>
		<script src="assets/plugins/magnific-popup/js/magnific-popup.js"></script-->
		
		
		<!--script src="assets/plugins/flot/js/jquery.flot.min.js"></script>
		<script src="assets/plugins/flot/js/jquery.flot.pie.min.js"></script>
		<script src="assets/plugins/flot/js/jquery.flot.resize.min.js"></script>
		<script src="assets/plugins/flot/js/jquery.flot.stack.min.js"></script>
		<script src="assets/plugins/flot/js/jquery.flot.time.min.js"></script>
		<script src="assets/plugins/flot-tooltip/js/jquery.flot.tooltip.js"></script-->
		<script src="__PUBLIC__/js/Chart.js"></script>
		
		<!--script src="assets/plugins/jqvmap/jquery.vmap.js"></script>
		<script src="assets/plugins/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="assets/plugins/jqvmap/maps/jquery.vmap.world.js"></script-->
		<script src="__PUBLIC__/js/jquery.sparkline.min.js"></script>
		<!--script src="assets/plugins/select2/select2.js"></script>
		<script src="assets/plugins/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="assets/plugins/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="assets/plugins/jquery-datatables-bs3/js/datatables.js"></script>
		<script src="assets/plugins/sparkline/js/jquery.sparkline.min.js"></script-->
		<!-- Theme JS -->		
		<!-- Theme JS -->		
		<script src="__PUBLIC__/js/jquery.mmenu.min.js"></script>
		<script src="__PUBLIC__/js/core.min.js"></script>
		<script src="__PUBLIC__/js/form-elements.js"></script>

		<script src="__PUBLIC__/js/klms.js"></script>
		<!-- Pages JS -->
		<!--script src="assets/js/pages/index.js"></script-->
		
		<script src="__PUBLIC__/js/pages/index.js"></script>

		<script src="__PUBLIC__/vendor/jquery-datatables-bs3/js/jquery.dataTables.min.js"></script>
		<script>
				$("#mytable").DataTable({
						"paging": true,
						"iDisplayLength": 10, //默认每页数量
						"bPaginate": true, //翻页功能
						"bLengthChange": false, //改变每页显示数据数量
						"bFilter": false, //过滤功能
						"bInfo": true, //页脚信息
						"bAutoWidth": true, //自动宽度
						"bRetrieve": true,
						"processing": true,
						//"ordering": false,
						//"bSort": false, 
						//"serverSide" : true,//服务器端进行分页处理的意思
						//"bPaginate": true,
						//"bProcessing": true
						columns : [{data : "id"},{data:"value"},{data:"value2"},{data:"value3"},{data:"value4"}],
				});
		</script>
	</body>
</html>