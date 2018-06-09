<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
    	<meta charset="UTF-8" />
		<title>首页</title>
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
		
		<link href="__PUBLIC__/vendor/scrollbar/css/mCustomScrollbar.css" rel="stylesheet" />
		<!--link href="assets/plugins/bootkit/css/bootkit.css" rel="stylesheet" />
		<link href="assets/plugins/magnific-popup/css/magnific-popup.css" rel="stylesheet" />
		<link href="assets/plugins/fullcalendar/css/fullcalendar.css" rel="stylesheet" />
		<link href="assets/plugins/jqvmap/jqvmap.css" rel="stylesheet" /-->
		
		<!-- Theme CSS -->
		<!--link href="__PUBLIC__/vendor/fullcalendar/css/fullcalendar.css" rel="stylesheet" /-->
		<link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet" />
		<link href="__PUBLIC__/css/datepicker3.css" rel="stylesheet" />
		<link href="__PUBLIC__/css/datepicker-theme.css" rel="stylesheet" />
		
		<!--link href="__PUBLIC__/css/skycons.css" rel="stylesheet" /-->
		<link href="__PUBLIC__/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
		<!--link href="__PUBLIC__/css/pace.preloader.css" rel="stylesheet" /-->
		<link href="__PUBLIC__/css/jquery-ui.css" rel="stylesheet" />	
		<link href="__PUBLIC__/css/jquery.mmenu.css" rel="stylesheet" />
		<!--link href="assets/plugins/select2/select2.css" rel="stylesheet" />
		<link href="assets/css/jquery.mmenu.css" rel="stylesheet" /-->
		<!-- Page CSS -->		
		<link href="__PUBLIC__/css/style.css" rel="stylesheet"/>
		<!--link href="__PUBLIC__/css/add-ons.min.css" rel="stylesheet" /-->
				

	

	
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<script src="__PUBLIC__/js/modernizr.js"></script>
	</head>
	<body>
		
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
			</div>				
			<div class="main ">
					<!-- Page Header -->
					<div class="page-header">
						<div class="pull-left">
							<ol class="breadcrumb visible-sm visible-md visible-lg">								
								<li><a href="<?php echo U('Index/Home/index');?>"><i class="icon fa fa-home"></i>主页</a></li>
								<li class="active"><i class="fa fa-laptop"></i>主页</li>
							</ol>						
						</div>
						<div class="pull-right">
							<h2>Dashboard</h2>
						</div>					
					</div>
					<!--div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="panel">
								<div class="panel-heading panel-heading-transparent bk-border-off">
									<h6><strong><?php echo ($text); ?></strong></h6>
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
													<?php if(is_array($array)): foreach($array as $key=>$a): ?><td><?php echo ($a[0]); ?></td><?php endforeach; endif; ?>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>						
						</div>
					</div-->
				</div>
		</div>
		<div class="clearfix"></div>	
		<script>
			var sparklineLineVisitsData = [15, 16, 17, 19, 15, 25, 23, 35, 29, 15, 30, 45];
		</script>
		<div id="footer">

</div>
				
		<!-- Vendor JS-->				
		<script src="__PUBLIC__/js/jquery-3.2.1.js"></script>
		<!--script src="assets/vendor/js/jquery-2.1.1.min.js"></script-->
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
		<script src="__PUBLIC__/js/jquery.mmenu.js"></script>
		<script src="__PUBLIC__/js/core.min.js"></script>
		<script src="__PUBLIC__/js/form-elements.js"></script>
		<!-- Pages JS -->
		<!--script src="assets/js/pages/index.js"></script-->
		
		<script src="__PUBLIC__/js/pages/index.js"></script>
	</body>
</html>