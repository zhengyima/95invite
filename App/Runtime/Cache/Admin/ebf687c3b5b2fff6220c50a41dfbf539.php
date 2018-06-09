<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="UTF-8" />
		<title>修改个人密码</title>
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
				

	

	
		<!--meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /-->
   <meta name="viewport" content="width=device-width, initial-scale=1" />
		<script src="__PUBLIC__/js/modernizr.js"></script>
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
							<h2>修改个人密码</h2>
						</div>					
					</div>
					<!-- End Page Header -->
					<div class='panel panel-default bk-bg-white'>
								<div class='panel-heading bk-bg-white'>
									<h6><i class='fa fa-indent red'></i>修改密码</h6>							
									<div class='panel-actions'>
										<a href='#' class='btn-minimize'><i class='fa fa-caret-up'></i></a>
										<a href='#' class='btn-close'><i class='fa fa-times'></i></a>
									</div>
								</div>
								<div class='panel-body' style=''>
									<form id="myform" method='post' enctype='multipart/form-data' class='form-horizontal '>
									<div class='form-group'>
											<label class='col-md-3 control-label' for='text-input'>学工号</label>
											<div class='col-md-9'>
												<input type='text' id='id1' name='house_id' class='form-control' value="<?php echo ($uid); ?>" disabled = "disabled" >
												
											</div>
										</div>
										<div class='form-group'>
											<label class='col-md-3 control-label' for='text-input'>姓名</label>
											<div class='col-md-9'>
												<input type='text' id='id2' name='house_name' class='form-control' value="<?php echo ($uname); ?>" disabled="disabled">
												<span class='help-block'></span>
											</div>
										</div>
									    <div class='form-group'>
											<label class='col-md-3 control-label' for='text-input'>请输入原密码</label>
											<div class='col-md-9'>
												<input type='password' id='id3' name='house_name' class='form-control' >
												<!--<input type="hidden" name="Submit" id="myman_id" value="<?php echo ($man_id); ?>">
												<input type="hidden" name="Submit" id="myname" value="<?php echo ($name); ?>">
												<input type="hidden" name="Submit" id="myold_passwd" value="<?php echo ($old_passwd); ?>">
												<input type="hidden" name="Submit" id="mynew_passwd1" value="<?php echo ($new_passwd1); ?>">
												<input type="hidden" name="Submit" id="mynew_passwd2" value="<?php echo ($new_passwd2); ?>">-->
												<span class='help-block'></span>
											</div>
										</div>
										<div class='form-group' >
											<label class='col-md-3 control-label' for='text-input'>请输入新密码(长度在6~16个字符)</label>
											<div class='col-md-9'>
												<input type='password' id='id4' name='house_tips' class='form-control' >
												<span class='help-block'></span>
											</div>
										</div>
										<div class='form-group' >
											<label class='col-md-3 control-label' for='text-input'>请再次输入新密码</label>
											<div class='col-md-9'>
												<input type='password' id='id5' name='house_tips' class='form-control' >
												<span class='help-block'></span>
											</div>
										</div>
										
									
									<div style='margin-left:45%;'>
									<button type='submit' class='bk-margin-5 btn btn-danger' style='margin-left:45%'>提交</button>
									</div>
									
										<br>
									</form>
								</div>								
							</div>	
		


									   
				</div>
				<!-- End Main Page -->	
		
				<!-- Footer -->
			
				<!-- End Footer -->
			
			</div>
		</div><!--/container-->
		
		
		<div class="clearfix"></div>		
		
		
		<!-- start: JavaScript-->
     
        
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

		<script type="text/javascript">
			$(document).ready(function() {
        
            $("#myform").submit(function(event){
            	//var man_id=$("#man_id").val();
                var old_passwd=$("#id3").val();
                var new_passwd1=$("#id4").val();
                var new_passwd2=$("#id5").val();
            if(new_passwd1==new_passwd2){

                
             //   var housename=$("#housename").val();
              //  var date=$("#date").val();
               // var time=$("#time").val();
                //console.log(date);
                if(new_passwd2.length<=16&&new_passwd2.length>=6){
            	$.post("<?php echo U('Admin/Changepasswd/changepwd');?>",{"old_pwd":old_passwd,"new_pwd":new_passwd1},function(data){
            		console.log(data);
            		if(data.status==1){
            			alert("修改成功");
						
						location.href = "<?php echo U('Admin/ReserveView/index');?>";
            		}
            		else if (data.status==0){
            			alert("修改失败,错误代码："+data.status);
            		}
            		else{
            			alert("密码错误");
            			
            		}
            	});
            }
            else{
            	alert("密码长度在6~16之间");
            }
            	}
            	else{
            		alert("两次输入的密码不相同");
            	}
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