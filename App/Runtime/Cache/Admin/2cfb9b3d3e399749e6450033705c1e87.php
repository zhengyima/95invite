<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

	<head>
    	<meta charset="UTF-8" />
		<title>会议室预约查找</title>
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
                            <li><a href="<?php echo U('Admin/ReserveView/index');?>"><span class='text'> 会议室预约情况</span></a></li>	
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
			</div>
				<div class="main ">
					<div class="page-header">
						<div class="pull-left">
							<ol class="breadcrumb visible-sm visible-md visible-lg">								
								<li><a href="<?php echo U('Admin/Order/index');?>"><i class="icon fa fa-home"></i>主页</a></li>
								<li class="active"><i class="fa fa-laptop"></i><?php echo ($day); ?></li>
							</ol>						
						</div>
						<div class="pull-right">
							<h2>会议室预约查找</h2>
						</div>					
					</div>
                


                        <div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="panel panel-default bk-bg-white">
								<div class="panel-heading bk-bg-white">
									<h6><i class="fa fa-table red"></i>
										 
										<span class="break"><?php echo ($day); ?>	
										</span>					
								 
										<input type="hidden" name="Submit" id="date" value="<?php echo ($day); ?>">
									</h6>
									<div class="panel-actions">
										<a href="#" class="btn-minimize"><i class="fa fa-caret-up"></i></a>
										<a href="#" class="btn-close"><i class="fa fa-times"></i></a>
									</div>				
								</div>
								<div class="panel-body">	
                                    <form action="#" method="post" class="form-horizontal " id="find">	
									   <div class="form-group">
										 
										 
												<label class="control-label col-md-2" for="select">会议室名称</label>
												<div class="col-md-9">
													<select id="housename" name="select0" class="form-control" size="1">
															<option value="0"></option>
														<?php if(is_array($allhouse)): foreach($allhouse as $key=>$b): ?><option value="<?php echo ($b['house_id']); ?>"><?php echo ($b['house_name']); ?></option><?php endforeach; endif; ?>
													</select>
												</div>
									 


											
										</div>	
										<div class="form-group" >
											<label class="control-label col-md-2" for="select">起始时间</label>
											<div class="col-md-9">
												<select id="tselect" name="time_select1" class="form-control" size="1">
													<option value="0">请输入起始时间</option>
													<option value="0">8:00</option>
													<option value="1">8:30</option>
													<option value="2">9:00</option>
													<option value="3">9:30</option>
													<option value="4">10:00</option>
													<option value="5">10:30</option>
													<option value="6">11:00</option>
													<option value="7">11:30</option>
													<option value="8">12:00</option>
													<option value="9">12:30</option>
													<option value="10">13:00</option>
													<option value="11">13:30</option>
													<option value="12">14:00</option>
													<option value="13">14:30</option>
													<option value="14">15:00</option>
													<option value="15">15:30</option>
													<option value="16">16:00</option>
													<option value="17">16:30</option>
													<option value="18">17:00</option>
													<option value="19">17:30</option>
													<option value="20">18:00</option>
													<option value="21">18:30</option>
													<option value="22">19:00</option>
													<option value="23">19:30</option>
													<option value="24">20:00</option>
													<option value="25">20:30</option>
													<option value="26">21:00</option>
													<option value="27">21:30</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-md-2" for="select">结束时间</label>
											<div class="col-md-9">
												<select id="tselect" name="time_select2" class="form-control" size="1">
													<option value="27">请输入结束时间</option>
													<option value="1">8:30</option>
													<option value="2">9:00</option>
													<option value="3">9:30</option>
													<option value="4">10:00</option>
													<option value="5">10:30</option>
													<option value="6">11:00</option>
													<option value="7">11:30</option>
													<option value="8">12:00</option>
													<option value="9">12:30</option>
													<option value="10">13:00</option>
													<option value="11">13:30</option>
													<option value="12">14:00</option>
													<option value="13">14:30</option>
													<option value="14">15:00</option>
													<option value="15">15:30</option>
													<option value="16">16:00</option>
													<option value="17">16:30</option>
													<option value="18">17:00</option>
													<option value="19">17:30</option>
													<option value="20">18:00</option>
													<option value="21">18:30</option>
													<option value="22">19:00</option>
													<option value="23">19:30</option>
													<option value="24">20:00</option>
													<option value="25">20:30</option>
													<option value="26">21:00</option>
													<option value="27">21:30</option>
													<option value="28">22:00</option>
												</select>
											</div>
											
	
											
										</div>
										<div class="form-group">
												<button type="submit" name="Submit"  style="margin-left:80%;" class="btn btn-danger">查找</button>
										</div>				
										
								<!--		<div class="col-md-8">
											<div class="radio-custom radio-inline">
												<input type="radio" id="inline-radio1" name="inline-radios" value="1"> 
											</div>												
											<input type="submit" name="Submit" value="查找">										 
										</div>-->
									</form>

                        


									<table class="table table-bordered table-striped mb-none" id="mytable">
                                            <thead>
                                                <tr>
                                                    <th>会议室</th>
													<th>可用时间段</th>
													<th>预约</th>
                                                </tr>
                                            </thead>
                                            <tbody>
												<?php if(is_array($query)): foreach($query as $key=>$row): ?><tr>
                                                            <td><?php echo ($row['house_name']); ?></td>
															<td><?php echo ($row['time']); ?></td>
															
															<td>
																<div class="checkbox-custom">
																	<input type="checkbox" class="checkbox1" name="checkbox1" value="option1"> 
																	<label for="checkbox1"></label>
																</div>
															</td>
													</tr><?php endforeach; endif; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>	

				<!-- End Main Page -->			
		
			 
			
			</div>
		</div><!--/container-->
			
		
		<div class="clearfix"></div>		
		
		
		<!-- start: JavaScript-->
     
        
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

		<script>
			$("#sure").click(function() {
				var day=$("#date").val();
				var myarray=[];
				var house;
				var timearray="";
				$(".checkbox1").each(function(){
					if($(this).attr("checked")){
						myarray.push({"house_name":$(this).parent().parent().prev().prev().html(),"time":$(this).parent().parent().prev().html()});
					}
				})
				if(myarray.length==0)
				{
					alert("请至少选择一条记录！");
					return;
				}
				for (i=0;i<myarray.length-1;i++)
				{
					if(myarray[i]["house_name"]!=myarray[i+1]["house_name"])
					{
						alert("只能选择一个教室！");
						return;
					}
				}
				house=myarray[0]["house_name"];
				for (i=0;i<myarray.length;i++)
				{
					timearray+=myarray[i]["time"]+"_";
				}
				tourl = "<?php echo U('Admin/Order/form',array('date' => 'myurl1','housename'=>'myurl2','time'=>'myurl3'));?>";
					tourl=tourl.replace('myurl1',day);
					tourl=tourl.replace('myurl2',house);
					tourl=tourl.replace('myurl3',timearray);

					console.log(tourl);
					location.href = tourl;
            });

		</script>

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
					columns : [{data : "id"},{data:"value"},{data:"value2"}],
			});
		</script>

		<!-- end: JavaScript-->
		
	</body>
	
</html>