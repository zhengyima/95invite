<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

	<head>
	
		<!-- Basic -->
    	<meta charset="UTF-8" />
        
                <title>Dashboard | Fire - Admin Template</title>
             
                <!-- Mobile Metas -->
                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

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
		<link href="__PUBLIC__/assets/plugins/fullcalendar/css/fullcalendar.css" rel="stylesheet" />
		<!-- Theme CSS -->
		<link href="__PUBLIC__/assets/css/jquery.mmenu.css" rel="stylesheet" />
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
				

	

	
                
		
	</head>
	
	<body>
	
		<!-- Start: Header -->
		
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
									<img src="assets/img/avatar.jpg" class="img-circle" alt="" />
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
						
				<!-- Main Page -->
				<div class="main ">
					<!-- Page Header -->
					<div class="page-header">
						<div class="pull-left">
							<ol class="breadcrumb visible-sm visible-md visible-lg">								
								<li><a href="index.html"><i class="icon fa fa-home"></i>Home</a></li>
								<li class="active"><i class="fa fa-laptop"></i>Dashboard</li>
							</ol>						
						</div>
						<div class="pull-right">
							<h2>Dashboard</h2>
						</div>					
					</div>
					<!-- End Page Header -->
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<div class="panel bk-widget bk-border-off">
								<div class="panel-body text-left bk-bg-white bk-padding-top-10 bk-padding-bottom-10">
									<div class="row">
										<div class="col-xs-4 bk-vcenter text-center">
											<div class="small-chart-wrapper">
												<div class="small-chart" id="sparklineBarweeklystats"></div>										
												<script type="text/javascript">
													var sparklineBarweeklystatsData = [5, 6, 7, 2, 0, 4 , 2, 4, 2, 0, 4 , 2, 4, 2, 0, 4];
												</script>
											</div>
											<strong>Weekly stats</strong>
										</div>
										<div class="col-xs-8 text-left bk-vcenter text-center">
											<small>DOWNLOAD: 60%</small>
											<div class="progress light progress-xs  progress-striped active bk-margin-bottom-10">
												<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
													<span class="sr-only">60% Complete</span>
												</div>
											</div>
											<small>PROCESSED: 88%</small>
											<div class="progress light progress-xs  progress-striped active bk-margin-bottom-10">
												<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width: 88%;">
													<span class="sr-only">88% Complete</span>
												</div>
											</div>
											<small>SALE: 60%</small>
											<div class="progress light progress-xs  progress-striped active bk-margin-bottom-10">
												<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
													<span class="sr-only">60% Complete</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>						
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="panel bk-widget bk-border-off">
								<div class="panel-body bk-bg-very-light-gray">
									<h4 class="bk-margin-off-bottom bk-docs-font-weight-300">TOTAL PROFIT</h4>
									<div class="clearfix  bk-padding-top-10">
										<div class="pull-right bk-margin-left-15">
											<i class="fa fa-dollar fa-3x"></i>
										</div>
										<h1 class="bk-margin-off-top pull-right">73,695</h1>
									</div>									
									<a><h6 class="text-right bk-padding-top-20 bk-margin-off">Withdraw</h6></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="panel bk-widget bk-border-off">
								<div class="panel-body bk-bg-very-light-gray">									
									<h4 class="bk-margin-off-bottom bk-docs-font-weight-300">CONVERSIONS</h4>
									<div class="clearfix bk-padding-top-20">
										<div class="text-center">
											<i class="fa fa-random fa-3x bk-fg-warning"></i>
										</div>
									</div>
									<h4 class="text-right bk-padding-top-15 bk-margin-off">369</h4>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-body">
									<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">							
										<div class="tabs tabs-bottom tabs-primary bk-margin-bottom-15 bk-margin-top-15">
											<div class="tab-content bk-bg-very-light-gray">
												<div id="adminCart" class="tab-pane active">
													<div class="row">
														<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
															<div id="adminChartUpdate" style="height:198px"></div>															
														</div>
													</div>
												</div>
												<div id="widget" class="tab-pane">
													<div class="row">
														<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
															<div class="panel bk-widget bk-border-off">
																<div class="bk-bg-white  bk-border-very-light-gray bk-fg-danger bk-ltr bk-padding-15 bk-radius">
																	<div class="row">
																		<div class="col-xs-4 text-left bk-vcenter bk-padding-off">
																			<span class="bk-round bk-icon bk-icon-2x bk-bg-danger bk-border-off">
																				<i class="fa fa-users fa-2x"></i>
																			</span>
																		</div>
																		<div class="col-xs-8 text-left bk-vcenter">
																			<h6 class="bk-margin-off">TOTAL USERS</h6>
																			<strong class="bk-margin-off">326,269</strong>
																		</div>
																	</div>
																	<div class="progress light progress-striped active bk-margin-off-bottom bk-margin-top-10 bk-noradius" style="height: 6px;">
																		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
																			<span class="sr-only">90% Complete</span>
																		</div>
																	</div>
																	<div class="bk-margin-top-10">
																		<div class="row">
																			<div class="col-xs-6">
																				<small>Monthly: 6,269</small>
																			</div>
																			<div class="col-xs-6 text-right">
																				<a href="#" class="bk-fg-danger bk-fg-darken"><small>View details</small> <i class="fa fa-database"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
															<div class="panel bk-widget bk-border-off">
																<div class="bk-bg-white bk-border-very-light-gray bk-fg-success bk-ltr bk-padding-15 bk-radius">
																	<div class="row">
																		<div class="col-xs-4 text-left bk-vcenter bk-padding-off">
																			<span class="bk-round bk-border-off bk-icon bk-icon-2x bk-bg-success">
																				<i class="fa fa-download fa-2x"></i>
																			</span>
																		</div>
																		<div class="col-xs-8 text-left bk-vcenter">
																			<h6 class="bk-margin-off">DOWNLOAD</h6>
																			<strong class="bk-margin-off">1,256</strong>
																		</div>
																	</div>
																	<div class="progress light progress-striped active bk-margin-off-bottom bk-margin-top-10 bk-noradius" style="height: 6px;">
																		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
																			<span class="sr-only">80% Complete</span>
																		</div>
																	</div>
																	<div class="bk-margin-top-10">
																		<div class="row">
																			<div class="col-xs-6">
																				<small>Stock: 32,269</small>
																			</div>
																			<div class="col-xs-6 text-right">
																				<a href="#" class="bk-fg-success bk-fg-darken"><small>View details</small> <i class="fa fa-database"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
															<div class="panel bk-widget bk-border-off">
																<div class="bk-bg-white  bk-border-very-light-gray bk-fg-warning bk-ltr bk-padding-15 bk-radius">
																	<div class="row">
																		<div class="col-xs-4 text-left bk-vcenter bk-padding-off">
																			<span class="bk-round bk-border-off bk-icon bk-icon-2x bk-bg-warning">
																				<i class="fa fa-shopping-cart fa-2x"></i>
																			</span>
																		</div>
																		<div class="col-xs-8 text-left bk-vcenter">
																			<h6 class="bk-margin-off">PURCHASE</h6>
																			<strong class="bk-margin-off">$526,369</strong>
																		</div>
																	</div>
																	<div class="progress light progress-striped active bk-margin-off-bottom bk-margin-top-10 bk-noradius" style="height: 6px;">
																		<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
																			<span class="sr-only">80% Complete</span>
																		</div>
																	</div>
																	<div class="bk-margin-top-10">
																		<div class="row">
																			<div class="col-xs-6">
																				<small>Top day: 11/25/2014</small>
																			</div>
																			<div class="col-xs-6 text-right">
																				<a href="#" class="bk-fg-warning bk-fg-darken"><small>View details</small> <i class="fa fa-database"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>	
													</div>
													<div class="text-center">
														<p> Fire Admin Transaction Activity</p> 
													</div>
												</div>
											</div>
											<ul class="nav nav-tabs nav-right">
												<li class="active">
													<a href="#adminCart" data-toggle="tab"> Fire Admin</a>
												</li>
												<li>
													<a href="#widget" data-toggle="tab"> Widget Update</a>
												</li>
											</ul>
										</div>
									</div>
									
									<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">										
										<div class="text-center bk-margin-bottom-15 bk-margin-top-15">
											<canvas id="polarArea" height="215" width="215"></canvas>
										</div>
										<h4 class="text-center">Monthly Sales</h4>
									</div>
								</div>
							</div>
						</div>
					</div>				
					
					<div class="row">
						<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h6><i class="fa fa-signal"></i>Server Usage</h6>									
									<div class="panel-actions">
										<a href="#" class="btn-minimize"><i class="fa fa-caret-up"></i></a>
										<a href="#" class="btn-close"><i class="fa fa-times"></i></a>
									</div>
									<p>You can update a chart periodically to get a real-time effect by using a timer to insert the new data in the plot and redraw it.</p>
								</div>
								<div class="panel-body">
									<div id="realtimeServerUsage" style="height:200px;"></div>
									<div class="bk-margin-top-10 bk-padding-right-10 pull-right">									
										<p>Time between updates: <input id="updateInterval" type="text" value="" style="text-align: right; width:5em" /> milliseconds</p>
									</div>
								</div>
							</div>
							
							<div class="panel">
								<div class="panel-heading panel-heading-transparent bk-border-off">
									<h6><strong>Market Inventory</strong></h6>
									<div class="panel-actions">
										<a href="#" class="btn-minimize"><i class="fa fa-caret-up"></i></a>
										<a href="#" class="btn-close"><i class="fa fa-times"></i></a>
									</div>
								</div>
								<div class="panel-body">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
										<h4 class="bk-fg-warning">Best Seller</h4>
										<div id="piechart" style="height:280px"></div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
										<h4 class="bk-fg-warning">Marketplace Area</h4>
										<canvas id="radar" height="280" width="220"></canvas>	
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="panel">								
								<div class="panel-heading panel-heading-transparent">									
									<h6><strong>Chat room</strong></h6>
									<div class="panel-actions">
										<a href="#" class="btn-minimize"><i class="fa fa-caret-up"></i></a>
										<a href="#" class="btn-close"><i class="fa fa-times"></i></a>
									</div>
								</div>
								<div class="panel-body">
									<div class="bk-docs-scroll-hidden">
										<div class="bk-padding-left-20 bk-padding-right-20">
											<a class="bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
												<div class="pull-left bk-margin-top-10 bk-margin-right-10">
													<div class="bk-avatar">
														<img src="assets/img/avatar1.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
													</div>
												</div>
												<div class="bk-fg-inverse bk-margin-top-10">
													<strong class="bk-fg-primary"><div class="point point-success point-lg"></div>John Doe</strong>
													<span class="pull-right"><i class="fa fa-clock-o"></i><small> just now</small></span>
												</div>
												<p>
													Cum sociis natoque pen ibus Mauris pede arcuats moles tied Aliquam or Mauris pede arcuats
												</p>
											</a>									
											<hr class="bk-margin-off" />
										</div>
										<div class="bk-padding-left-20 bk-padding-right-20">
											<a class="bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
												<div class="pull-right bk-margin-top-10 bk-margin-left-10">
													<div class="bk-avatar">
														<img src="assets/img/avatar.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
													</div>
												</div>
												<div class="bk-fg-inverse bk-margin-top-10">
													<strong class="pull-right bk-fg-primary"><div class="point point-success point-lg"></div>Robert</strong>
													<span><i class="fa fa-clock-o"></i><small> 3' ago</small></span>
												</div>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget turpis pulvinar, tempor odio sed, adipiscing dolor.
												</p>
											</a>
											<hr class="bk-margin-off" />
										</div>
										<div class="bk-padding-left-20 bk-padding-right-20">
											<a class="bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
												<div class="pull-left bk-margin-top-10 bk-margin-right-10">
													<div class="bk-avatar">
														<img src="assets/img/avatar1.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
													</div>
												</div>
												<div class="bk-fg-inverse bk-margin-top-10">
													<strong class="bk-fg-primary"><div class="point point-success point-lg"></div>John Doe</strong>
													<span class="pull-right"><i class="fa fa-clock-o"></i><small> 6' ago</small></span>
												</div>
												<p>
													Cum sociis natoque pen ibus Mauris pede arcuats moles tied Aliquam or Mauris pede arcuats
												</p>
											</a>
											<hr class="bk-margin-off" />
										</div>
										<div class="bk-padding-left-20 bk-padding-right-20">
											<a class="bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
												<div class="pull-right bk-margin-top-10 bk-margin-left-10">
													<div class="bk-avatar">
														<img src="assets/img/avatar.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
													</div>
												</div>
												<div class="bk-fg-inverse bk-margin-top-10">
													<strong class="pull-right bk-fg-primary"><div class="point point-success point-lg"></div>Robert</strong>
													<span><i class="fa fa-clock-o"></i><small> 11' ago</small></span>
												</div>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget turpis pulvinar, tempor odio sed, adipiscing dolor.
												</p>
											</a>
											<hr class="bk-margin-off" />
										</div>
										<div class="bk-padding-left-20 bk-padding-right-20">
											<a class="bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
												<div class="pull-left bk-margin-top-10 bk-margin-right-10">
													<div class="bk-avatar">
														<img src="assets/img/avatar1.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
													</div>
												</div>
												<div class="bk-fg-inverse bk-margin-top-10">
													<strong class="bk-fg-primary"><div class="point point-success point-lg"></div>John Doe</strong>
													<span class="pull-right"><i class="fa fa-clock-o"></i><small> 6' ago</small></span>
												</div>
												<p>
													Cum sociis natoque pen ibus Mauris pede arcuats moles tied Aliquam or Mauris pede arcuats
												</p>
											</a>
											<hr class="bk-margin-off" />
										</div>
										<div class="bk-padding-left-20 bk-padding-right-20">
											<a class="bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
												<div class="pull-right bk-margin-top-10 bk-margin-left-10">
													<div class="bk-avatar">
														<img src="assets/img/avatar.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
													</div>
												</div>
												<div class="bk-fg-inverse bk-margin-top-10">
													<strong class="pull-right bk-fg-primary"><div class="point point-success point-lg"></div>Robert</strong>
													<span><i class="fa fa-clock-o"></i><small> 11' ago</small></span>
												</div>
												<p>
												   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget turpis pulvinar, tempor odio sed, adipiscing dolor.
												</p>
											</a>
											<hr class="bk-margin-off" />
										</div>
										<div class="bk-padding-left-20 bk-padding-right-20">
											<a class="bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
												<div class="pull-left bk-margin-top-10 bk-margin-right-10">
													<div class="bk-avatar">
														<img src="assets/img/avatar1.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
													</div>
												</div>
												<div class="bk-fg-inverse bk-margin-top-10">
													<strong class="bk-fg-primary"><div class="point point-success point-lg"></div>John Doe</strong>
													<span class="pull-right"><i class="fa fa-clock-o"></i><small> 6' ago</small></span>
												</div>
												<p>
													Cum sociis natoque pen ibus Mauris pede arcuats moles tied Aliquam or Mauris pede arcuats
												</p>
											</a>
											<hr class="bk-margin-off" />
										</div>
										<div class="bk-padding-left-20 bk-padding-right-20">
											<a class="bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
												<div class="pull-right bk-margin-top-10 bk-margin-left-10">
													<div class="bk-avatar">
														<img src="assets/img/avatar.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
													</div>
												</div>
												<div class="bk-fg-inverse bk-margin-top-10">
													<strong class="pull-right bk-fg-primary"><div class="point point-success point-lg"></div>Robert</strong>
													<span><i class="fa fa-clock-o"></i><small> 11' ago</small></span>
												</div>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget turpis pulvinar, tempor odio sed, adipiscing dolor.
												</p>
											</a>
											<hr class="bk-margin-off" />
										</div>
										<div class="bk-padding-left-20 bk-padding-right-20">
											<a class="bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
												<div class="pull-left bk-margin-top-10 bk-margin-right-10">
													<div class="bk-avatar">
														<img src="assets/img/avatar1.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
													</div>
												</div>
												<div class="bk-fg-inverse bk-margin-top-10">
													<strong class="bk-fg-primary"><div class="point point-success point-lg"></div>John Doe</strong>
													<span class="pull-right"><i class="fa fa-clock-o"></i><small> 6' ago</small></span>
												</div>
												<p>
													Cum sociis natoque pen ibus Mauris pede arcuats moles tied Aliquam or Mauris pede arcuats
												</p>
											</a>
											<hr class="bk-margin-off" />
										</div>
										<div class="bk-padding-left-20 bk-padding-right-20">
											<a class="bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
												<div class="pull-right bk-margin-top-10 bk-margin-left-10">
													<div class="bk-avatar">
														<img src="assets/img/avatar.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
													</div>
												</div>
												<div class="bk-fg-inverse bk-margin-top-10">
													<strong class="pull-right bk-fg-primary"><div class="point point-success point-lg"></div>Robert</strong>
													<span><i class="fa fa-clock-o"></i><small> 11' ago</small></span>
												</div>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget turpis pulvinar, tempor odio sed, adipiscing dolor.
												</p>
											</a>
											<hr class="bk-margin-off" />
										</div>
										<div class="bk-padding-left-20 bk-padding-right-20">
											<a class="bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
												<div class="pull-left bk-margin-top-10 bk-margin-right-10">
													<div class="bk-avatar">
														<img src="assets/img/avatar1.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
													</div>
												</div>
												<div class="bk-fg-inverse bk-margin-top-10">
													<strong class="bk-fg-primary"><div class="point point-success point-lg"></div>John Doe</strong>
													<span class="pull-right"><i class="fa fa-clock-o"></i><small> 6' ago</small></span>
												</div>
												<p>
													Cum sociis natoque pen ibus Mauris pede arcuats moles tied Aliquam or Mauris pede arcuats
												</p>
											</a>
											<hr class="bk-margin-off" />
										</div>
										<div class="bk-padding-left-20 bk-padding-right-20">
											<a class="bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
												<div class="pull-right bk-margin-top-10 bk-margin-left-10">
													<div class="bk-avatar">
														<img src="assets/img/avatar.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
													</div>
												</div>
												<div class="bk-fg-inverse bk-margin-top-10">
													<strong class="pull-right bk-fg-primary"><div class="point point-success point-lg"></div>Robert</strong>
													<span><i class="fa fa-clock-o"></i><small> 11' ago</small></span>
												</div>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget turpis pulvinar, tempor odio sed, adipiscing dolor.
												</p>
											</a>										
											<hr class="bk-margin-off" />
										</div>
									</div>
									<div class="bk-bg-white bk-padding-top-15 bk-padding-bottom-15">
										<form role="form" action="javascript:">
											<div class="input-group">
												<input type="text" class="form-control bk-noradius" />
												  <span class="input-group-btn">
													<button class="btn btn-default bk-noradius" type="button"><i class="fa fa-send-o"></i></button>
												  </span>
											</div>
										</form>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading bk-bg-white">									
									<h6><span class="label label-danger bk-margin-5">165</span>Friends</h6>
									<div class="panel-actions">
										<a href="#" class="btn-minimize"><i class="fa fa-caret-up"></i></a>
										<a href="#" class="btn-close"><i class="fa fa-times"></i></a>
									</div>
								</div>
								<div class="panel-body">									
									<a class="bk-bg-white bk-padding-off-top bk-padding-off-bottom">
										<div class="row">
											<div class="col-xs-3 bk-vcenter text-center bk-padding-10">
												<div class="bk-avatar">
													<img src="assets/img/avatar1.jpg" alt="" class="img-circle bk-img-40 bk-border-primary bk-border-2x bk-border-darken">
												</div>
											</div>
											<div class="col-xs-9 bk-vcenter">
												<h5 class="bk-fg-primary bk-fg-darken bk-margin-off-bottom">John Doe</h5>
												<p>
													Nullam vitae arcu in leo molestie hendrerit at quis sem.
												</p>
											</div>
										</div>
									</a>
									<hr class="bk-margin-off">
									<a class="bk-bg-white bk-padding-off-top bk-padding-off-bottom">
										<div class="row">
											<div class="col-xs-3 bk-vcenter text-center bk-padding-10">
												<div class="bk-avatar">
													<img src="assets/img/avatar2.jpg" alt="" class="img-circle bk-img-40 bk-border-warning bk-border-2x bk-border-darken">
												</div>
											</div>
											<div class="col-xs-9 bk-vcenter">
												<h5 class="bk-fg-warning bk-fg-darken bk-margin-off-bottom">John Doe</h5>
												<p>
													Nunc vitae porttitor purus.
												</p>
											</div>
										</div>
									</a>
									<hr class="bk-margin-off">
									<a class="bk-bg-white bk-padding-off-top bk-padding-off-bottom">
										<div class="row">
											<div class="col-xs-3 bk-vcenter text-center bk-padding-10">
												<div class="bk-avatar">
													<img src="assets/img/avatar2.jpg" alt="" class="img-circle bk-img-40 bk-border-danger bk-border-2x bk-border-darken">
												</div>
											</div>
											<div class="col-xs-9 bk-vcenter">
												<h5 class="bk-fg-danger bk-fg-darken bk-margin-off-bottom">John Doe</h5>
												<p>
													Morbi interdum posuere ultricies. Aliquam sit amet neque nisi.
												</p>
											</div>
										</div>
									</a>
									<hr class="bk-margin-off">
									<div class="panel-footer bk-bg-white">
										<div class="bk-padding-top-5 bk-padding-bottom-5 ">
											<div class="row">
												<div class="col-xs-6">
													<a href="#" class="bk-fg-textcolor"><small><i class="fa fa-angle-left"></i> PREVIOUS</small></a>
												</div>
												<div class="col-xs-6 text-right">
													<a href="#" class="bk-fg-textcolor"><small>NEXT <i class="fa fa-angle-right"></i></small></a>
												</div>
											</div>
										</div>
									</div>
								</div>								
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="panel panel-transparent">
								<div class="panel-heading bk-border-off">
									<h6><strong>My Profile</strong></h6>
									<div class="panel-actions">
										<a href="#" class="btn-minimize"><i class="fa fa-caret-up"></i></a>
										<a href="#" class="btn-close"><i class="fa fa-times"></i></a>
									</div>
								</div>
								<div class="panel-body">
									<div class="panel">
										<div class="panel-heading text-left bk-bg-primary bk-fg-white bk-padding-top-10 bk-padding-bottom-10">
											<div class="row">
												<div class="col-xs-4 bk-vcenter">
													<div class="bk-avatar">
														<img src="assets/img/avatar.jpg" alt="" class="img-circle bk-img-80 bk-border-white bk-border-3x" />
													</div>
												</div>
												<div class="col-xs-8 text-right bk-vcenter">
													<h4 class="bk-margin-off">John Doe</h4>
													<small>Management Director</small>
													<div class="bk-margin-top-10">
														<a href="page-profile.html" class="btn btn-default pull-right">View profile</a>
													</div>
												</div>
											</div>
										</div>
										<div class="bk-bg-white no-padding">
											<div class="todo-list">									
												<div class="header">Task</div>
												<ul id="todo-2" class="todo-list-tasks">
													<li>
														<label class="custom-checkbox-item pull-left">
															<input class="custom-checkbox" type="checkbox"/>
															<span class="custom-checkbox-mark"></span>
														</label>
														<span class="desc">Add slider home to creative template</span> 
													</li>
													<li>
														<label class="custom-checkbox-item pull-left">
															<input class="custom-checkbox" type="checkbox"/>
															<span class="custom-checkbox-mark"></span>
														</label>
														<span class="desc">Change portfolio image with new animation</span> 
													</li>
													<li>
														<label class="custom-checkbox-item pull-left">
															<input class="custom-checkbox" type="checkbox"/>
															<span class="custom-checkbox-mark"></span>
														</label>
														<span class="desc">Fixed JavaScript problem for index page</span> 
													</li>
												</ul>
												<div class="header">Completed</div>
												<ul class="completed"></ul>		
											</div>
										</div>					
										<div class="panel-footer bk-padding-top-10">
											<div class="row text-center">
												<a class="col-xs-4 bk-bg-very-light-gray bk-bg-darken bk-padding-top-10 bk-padding-bottom-10">
													<i class="fa fa-envelope"></i><small> Message</small>
												</a>
												<a class="col-xs-4 bk-bg-very-light-gray bk-bg-darken bk-padding-top-10 bk-padding-bottom-10">
													<i class="fa fa-comment-o"></i><small> Comment</small>
												</a>
												<a class="col-xs-4 bk-bg-very-light-gray bk-bg-darken bk-padding-top-10 bk-padding-bottom-10">
													<i class="fa fa-bell-o"></i><small> Notification</small>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div> 
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="panel panel-transparent">
								<div class="panel-heading bk-border-off">
									<h6><strong>My Stats</strong></h6>
									<div class="panel-actions">
										<a href="#" class="btn-minimize"><i class="fa fa-caret-up"></i></a>
										<a href="#" class="btn-close"><i class="fa fa-times"></i></a>
									</div>
								</div>
								<div class="panel-body">
									<div class="panel bk-widget bk-border-off">
										<div class="panel-body bk-bg-very-light-gray">
											<div class="row bk-fg-gray">
												<div class="col-lg-5 col-md-6 col-sm-6 col-xs-6">
													<h3 class="bk-margin-off bk-docs-font-weight-300 bk-fg-primary">569</h3>
													Average Profile Visits
												</div>
												<div class="col-lg-7 col-md-6 col-sm-6 col-xs-6">
													<div class="small-chart-wrapper bk-padding-right-10">
														<div class="small-chart" id="sparklineLineProfileVisits" style="float:right"></div>
														<script type="text/javascript">
															var sparklineLineProfileVisitsData = [20, 30, 15, 40, 30, 45, 60, 40, 50, 32, 65, 70];
														</script>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="panel bk-widget bk-border-off">
										<div class="panel-body bk-bg-very-light-gray">
											<div class="row bk-fg-gray">
												<div class="col-lg-5 col-md-6 col-sm-6 col-xs-6">
													<h3 class="bk-margin-off bk-docs-font-weight-300 bk-fg-primary">254</h3>
													Working Projects
												</div>
												<div class="col-lg-7 col-md-6 col-sm-6 col-xs-6">
													<div class="small-chart-wrapper">
														<div class="small-chart" id="sparklineLineProjects" style="float:right"></div>
														<script type="text/javascript">
															var sparklineLineProjectsData = [20, 30, 15, 40, 30, 45, 60, 40, 50, 32, 65, 70];
														</script>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="panel bk-widget bk-border-off">
										<div class="panel-body bk-bg-very-light-gray">
											<div class="row bk-fg-gray">
												<div class="col-lg-5 col-md-6 col-sm-6 col-xs-6">
													<h3 class="bk-margin-off bk-docs-font-weight-300 bk-fg-primary">24</h3>
													Pending Tasks
												</div>
												<div class="col-lg-7 col-md-6 col-sm-6 col-xs-6">
													<div class="small-chart-wrapper bk-padding-right-30">
														<div class="small-chart" id="sparklineLineTasks" style="float:right"></div>
														<script type="text/javascript">
															var sparklineLineTasksData = [15, 16, 17, 19, 15, 25, 23, 35, 29, 15, 30, 45];
														</script>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>								
							</div>						
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="panel panel-transparent">
								<div class="panel-heading">
									<h6><strong>Global Stats</strong></h6>
									<div class="panel-actions">
										<a href="#" class="btn-minimize"><i class="fa fa-caret-up"></i></a>
										<a href="#" class="btn-close"><i class="fa fa-times"></i></a>
									</div>
								</div>
								<div class="panel-body">
									<div id="vector-map-world" style="height: 320px; width: 100%;" data-vector-map data-plugin-options='{ "map": "world_en" }'></div>							
								</div>
							</div>
							
							<div class="panel panel-transparent">
								<div class="panel-heading">
									<h6><strong>Company Schedule Activity</strong></h6>
									<div class="panel-actions">
										<a href="#" class="btn-minimize"><i class="fa fa-caret-up"></i></a>
										<a href="#" class="btn-close"><i class="fa fa-times"></i></a>
									</div>
								</div>
								<div class="panel-body">
									<div class="timelineProfile timeline-profile">
										<div class="timeline-body">
											<div class="timeline-title">
												<h5 class="text-uppercase">May 2014</h5>
											</div>
											<ol class="timeline-items">
												<li>
													<div class="timeline-box">
														<p class="text-muted">5 months ago.</p>
														<p>
															It's awesome when we find a good solution for our projects, Fire Admin is <span class="text-primary">#awesome</span>
														</p>
													</div>
												</li>
												<li>
													<div class="timeline-box">
														<p class="text-muted">5 months ago.</p>
														<p>
															What is your greatest projects for your Administrator?
														</p>
													</div>
												</li>
												<li>
													<div class="timeline-box">
														<p class="text-muted">5 months ago.</p>
														<p>
															Checkout! How cool is that!
														</p>
														<div class="img-timeline">
															<a class="img-thumbnail lightbox" href="assets/img/gallery/photo6.jpg" data-plugin-options='{ "type":"image" }'>
																<img class="img-responsive" width="215" src="assets/img/gallery/photo6.jpg">
																<span class="zoom">
																	<i class="fa fa-search"></i>
																</span>
															</a>
														</div>
													</div>
												</li>
											</ol>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="panel">
								<div class="panel-heading panel-heading-transparent bk-border-off">
									<h6><strong>Employes Stats</strong></h6>
									<div class="panel-actions">
										<a href="#" class="btn-minimize"><i class="fa fa-caret-up"></i></a>
										<a href="#" class="btn-close"><i class="fa fa-times"></i></a>
									</div>
								</div>
								<div class="panel-body">
									<div class="table-responsive">	
										<table class="table table-striped table-bordered bootstrap-datatable datatable">
											<thead>
												<tr>
													<th>Employe</th>
													<th>Position</th>
													<th>Salary</th>
													<th>Status</th>
												</tr>
											</thead>   
											<tbody>								
												<tr>
													<td>Willson</td>
													<td>Developer</td>
													<td>2563$</td>
													<td>
														<span class="label label-warning">Pending</span>
													</td>
												</tr>
												<tr>
													<td>James</td>
													<td>SEO</td>
													<td>5000$</td>
													<td>
														<span class="label label-warning">Pending</span>
													</td>
												</tr>
												<tr>
													<td>Steven</td>
													<td>Photographer</td>
													<td>1269$</td>
													<td>
														<span class="label label-success">Success</span>
													</td>
												</tr>
												<tr>
													<td>Aselay</td>
													<td>Project manger</td>
													<td>6253$</td>
													<td>
														<span class="label label-danger">Failed</span>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							
							<div class="panel">
								<div class="panel-heading panel-heading-transparent bk-border-off">
									<h6><strong>Calendar</strong></h6>
									<div class="panel-actions">
										<a href="#" class="btn-minimize"><i class="fa fa-caret-up"></i></a>
										<a href="#" class="btn-close"><i class="fa fa-times"></i></a>
									</div>
								</div>
								<div class="panel-body">
									<div class="calendar calendar-small">
										<div id="calendar"></div>
									</div>
								</div>
							</div>							
						</div>
					</div>
				</div>
				<!-- End Main Page -->
				
				<!-- Footer -->
				<div id="footer">
					<ul>
						<li>
							<div class="title">Memory</div>
							<div class="bar">
								<div class="progress light progress-sm  progress-striped active">
									<div class="progress-bar progress-squared progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
										60%
									</div>
								</div>
							</div>			
							<div class="desc">4GB of 8GB</div>
						</li>
						<li>
							<div class="title">HDD</div>
							<div class="bar">
								<div class="progress light progress-sm  progress-striped active">
									<div class="progress-bar progress-squared progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
										40%
									</div>
								</div>
							</div>			
							<div class="desc">250GB of 1TB</div>
						</li>
						<li>
							<div class="title">SSD</div>
							<div class="bar">
								<div class="progress light progress-sm  progress-striped active">
									<div class="progress-bar progress-squared progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
										70%
									</div>
								</div>
							</div>			
							<div class="desc">700GB of 1TB</div>
						</li>
						<li>
							<div class="copyright">
								<p class="text-muted text-right">Fire <i class="fa fa-coffee"></i> Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a> - More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a></p>
							</div>
						</li>				
					</ul>	
				</div>
				<!-- End Footer -->
			
			</div>
		</div><!--/container-->
		
		
		<div class="clearfix"></div>		
		
		
		<!-- start: JavaScript-->
		
				
		<!-- Vendor JS-->				
		<!--script src="__PUBLIC__/js/jquery-3.2.1.js"></script-->
		<!--script src="assets/vendor/js/jquery-2.1.1.min.js"></script-->

		<script src="__PUBLIC__/assets/vendor/js/jquery.min.js"></script>

		<script src="__PUBLIC__/assets/vendor/js/jquery-2.1.1.min.js"></script>
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
		<script src="__PUBLIC__/assets/js/jquery.mmenu.min.js"></script>
		<script src="__PUBLIC__/js/core.min.js"></script>
		<script src="__PUBLIC__/js/form-elements.js"></script>
		<!-- Pages JS -->
		<!--script src="assets/js/pages/index.js"></script-->
		
        <!-- Vendor JS-->		

		<script src="__PUBLIC__/assets/js/pages/index.js"></script>
		
		<!-- end: JavaScript-->
		
	</body>
	
</html>