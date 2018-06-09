<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
			<meta charset="UTF-8" />
			<title>会议室管理</title>
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
                                        <a href="<?php echo U('Admin/Changepasswd/index');?>"><i class="fa fa-user"></i> 修改个人资料</a>
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
                                        <a href="<?php echo U('Admin/Changepasswd/index');?>"><i class="fa fa-user"></i> 修改个人资料</a>
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
				<div class="sidebar">
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
                            <li><a href="<?php echo U('Admin/Roommanage/index');?>"><span class='text'> 会议室管理</span></a></li>	
                            <li><a href="<?php echo U('Admin/Order/index');?>"><span class='text'> 会议室预约日程</span></a></li>
                            <!--li><a href="<?php echo U('Admin/ReserveView/index');?>"><span class='text'> 会议室预约情况</span></a></li-->	
                            <li><a href="<?php echo U('Admin/ReserveBatchView/index');?>"><span class='text'> 会议室批量预约情况</span></a></li>											
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
								<li><a href="<?php echo U('Admin/ReserveView/index');?>"><i class="icon fa fa-home"></i>主页</a></li>
								<li class="active"><i class="fa fa-laptop"></i>主页</li>
							</ol>						
						</div>
						<div class="pull-right">
							<h2>会议室管理</h2>
						</div>					
					</div>
					<!-- End Page Header -->
					<div class='panel panel-default bk-bg-white'>
								<div class='panel-heading bk-bg-white'>
									<h6><i class='fa fa-indent red'></i>会议室信息添加/更改</h6>							
									<div class='panel-actions'>
										<a href='#' class='btn-minimize'><i class='fa fa-caret-up'></i></a>
										<a href='#' class='btn-close'><i class='fa fa-times'></i></a>
									</div>
								</div>
								<div class='panel-body' style=''>
									<form id="myform" method='post' enctype='multipart/form-data' class='form-horizontal' onsubmit="return PostData();">
										<!--div class='form-group'>
											<label class='col-md-3 control-label' for='text-input'>会议室编号</label>
											<div class='col-md-9'>
												<input type='text' id='id1' name='house_id' class='form-control' placeholder='1'>
												<span class='help-block'>添加时无需填本项</span>
											</div>
										</div-->
									    <div class='form-group'>
											<label class='col-md-3 control-label' for='text-input'>会议室名称</label>
											<div class='col-md-9'>
												<input type='text' id='id2' name='house_name' class='form-control' placeholder='信息楼417'>
												<span class='help-block'></span>
											</div>
										</div>
										<div class='form-group' >
											<label class='col-md-3 control-label' for='text-input'>会议室信息</label>
											<div class='col-md-9'>
												<input type='text' id='id3' name='house_tips' class='form-control' placeholder='位于信息楼四层，可容纳50人。'>
												<span class='help-block'></span>
											</div>
										</div>
										
										
									
									<div style='margin-left:390px;'>
									<button type='submit' class='bk-margin-5 btn btn-danger btn-submit' style='margin-left:250px'>提交</button>
									</div>
									
										<br>
									</form>
								</div>								
							</div>	
		
					
<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="panel panel-default bk-bg-white">
								<div class="panel-heading bk-bg-white">
									<h6><i class="fa fa-table red"></i><span class="break"></span>会议室信息一览</h6>							
									<div class="panel-actions">
										<a href="#" class="btn-minimize"><i class="fa fa-caret-up"></i></a>
										<a href="#" class="btn-close"><i class="fa fa-times"></i></a>
									</div>
								</div>
								<div class="panel-body">

                                    <form action="#" method="post" class="form-horizontal " id="find">
										
									   <div class="form-group">
										   <div class="col-sm-3">
												<input type="text" id="input-small" name="find_text" class="form-control input-sm" placeholder="请先选择右边您要查找的内容再输入" />
											
											</div>
											<div class="col-md-9">
												
											<input type="submit" name="Submit" value="查找">
												<div class="radio-custom radio-inline">
													<input type="radio" id="inline-radio1" name="inline-radios" value="1"> 
													<label for="inline-radio1"> 会议室编号</label>
												</div>
												<div class="radio-custom radio-inline">
													<input type="radio" id="inline-radio2" name="inline-radios" value="2"> 
													<label for="inline-radio2"> 会议室名称</label>
												</div>
												<div class="radio-custom radio-inline">
													<input type="radio" id="inline-radio3" name="inline-radios" value="3"> 
													<label for="inline-radio3"> 会议室信息</label>
												</div>
											
												<!--div class="radio-custom radio-inline">
													<input type="radio" id="inline-radio6" name="inline-radios" value="6"> 
													<label for="inline-radio4"> 开始时间</label>
												</div>
												<div class="radio-custom radio-inline">
													<input type="radio" id="inline-radio7" name="inline-radios" value="7"> 
													<label for="inline-radio4">结束时间</label>
												</div-->
												
												
											</div>
											
										</div>
											
									
								
									</form>


									<table class="table table-bordered table-striped mb-none" id="mytable">
										<thead>
											<tr>
												<th>会议室编号</th>
												<th>会议室名称</th>
												<th>会议室信息</th>
												<th>编辑/删除</th>
											</tr>
										</thead>
										<tbody>
									

									<?php if(is_array($ps)): foreach($ps as $key=>$row): ?><tr>											
												<td><?php echo ($row['house_id']); ?></td>
												<td><?php echo ($row['house_name']); ?></td>
												<td><?php echo ($row['house_tips']); ?></td>
												<td class='actions'>
												

													<a class="link_update"><i class="fa fa-pencil"></i></a>
													<a class="link_delete"><i id="delete" class='fa fa-trash-o'></i></a>

													
												</td>
											</tr><?php endforeach; endif; ?>		
							
										</tbody>
									</table>
									
									<span class='help-block'>使用状态说明：0-空闲 1-使用中 2-已归还</span>
									<span class='help-block'>上边两个输入框，上边的是按字段查找，下边的是全字段查找。</span>
									<span class='help-block'>如果查找后您想要恢复全表格查看，再次点击查找按钮即可。</span>
									<span class='help-block'>如果想查找日期的话请按格式使用全字段匹配</span>
								</div>
							</div>
						</div>
					</div>	

									   
				</div>
				<!-- End Main Page -->	
		
				<!-- Footer -->
			
				<!-- End Footer -->
			
			</div>
		</div><!--/container-->
		
		
		<div class="clearfix"></div>		
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
		<script src="__PUBLIC__/js/bootbox.min.js"></script>
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
						columns : [{data : "id"},{data:"value"},{data:"value2"},{data:"value3"}],
				});
		</script>
		
		<!-- start: JavaScript-->

		<script type="text/javascript">

			function PostData(){
				var id=$("#id1").val();
                var name=$("#id2").val();
                var tips=$("#id3").val();

                //console.log(id);
            	$.post("<?php echo U('Admin/Roommanage/update');?>",{p_id:id,p_name:name,p_tips:tips},function(data){
            		console.log(data);
            		if(data.status==1){
            			alert("提交成功");
						CAR(1);
            		}
            		else{
            			alert("提交失败,错误代码："+data.status);
            		}

				});
				return false;
			}

			$(document).ready(function() {
            $(".link_update").click(function() {
            	var tips=$(this).parent().prev().html();
            	var name=$(this).parent().prev().prev().html();
            	var id=$(this).parent().prev().prev().prev().html();
            	console.log(tips);
            	//alert("dhfgjbdfj");
                //doupdate();
                $("#id1").val(id);
                $("#id2").val(name);
                $("#id3").val(tips);
                //return false;

            });
            $(".link_delete").click(function() {
            	
            	var id=$(this).parent().prev().prev().prev().html();
            	
            	//alert("dhfgjbdfj");
                //doupdate();
               
                //return false;
                $.post("<?php echo U('Admin/Roommanage/delete');?>",{p_id:id},function(data){
            		//console.log(data);
            		if(data.status==1){
            			alert("删除成功");
            			CAR(2);
            		}
            		else{
            			alert("删除失败,错误代码："+data.status);
            		}

            	});

            });

			
            $(".btn-submit").click(function(event){
				//PostData();
            });
            });

/*            function doupdate(){

            	$.post("<?php echo U('Index/Update/update');?>",{to_update:1,x6:{$r[0]}},function(data){
            	 document.getElementById('id1').value=<?php echo ($a[0]); ?>;
			 document.getElementById('id2').value=<?php echo ($a[1]); ?>;
			 document.getElementById('id3').value=<?php echo ($a[2]); ?>;
            	}
            	);
            }
            });
            $("#delete").onclick(function(event) {
                //dodelete();
                return false;
            });
          /*  function delete(){
            	$.post("<?php echo U('Index/Update/delete');?>",{to_delete:{$a[0]}},function(data){
            	 
            	}
            	);
            }*/

        
		</script>
		<!-- end: JavaScript-->
		
	</body>
	
</html>