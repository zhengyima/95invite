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
		<link href='__PUBLIC__/css/fullcalendar.min.css' rel='stylesheet' />
        <link href='__PUBLIC__/css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
		<link rel="stylesheet" href="__PUBLIC__/vendor/bootstrap-select/css/bootstrap-select.css">
        <style type="text/css"> 
            .fc .fc-widget-header {
            background: #2c4252;
            border-color: #b5afaf;
            color: white;
            font-size: 13px;
            font-size: 1.3rem;
            font-weight: 500;
            padding: 10px 0;
            text-transform: uppercase;
            }
            .fc-head-container a {
                color: #ffffff;
            }
			a {
				color:#000000;
			}
			.btn {
				display: inline-block;
				padding: 6px 12px;
				margin-bottom: 0;
				font-size: 14px;
				font-weight: normal;
				line-height: 1.42857143;
				text-align: center;
				white-space: nowrap;
				vertical-align: middle;
				-ms-touch-action: manipulation;
				touch-action: manipulation;
				cursor: pointer;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
				background-image: none;
				border: 1px solid ;
				border-radius: 4px;
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
										<a href="<?php echo U('Index/Index/logout');?>"><i class="fa fa-power-off"></i> 注销</a> 
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
							<h2>首页</h2>
						</div>					
					</div>
                    <div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="panel panel-default">
								<div class="panel-heading">
                                    <h6><i class="fa fa-signal"></i>会议室预约日历</h6> 
                					<a class="mylink"><i class="fa fa-pencil"></i>	</a>								
									<div class="panel-actions">
										<a href="#" class="btn-minimize"><i class="fa fa-caret-up"></i></a>
										<a href="#" class="btn-close"><i class="fa fa-times"></i></a>
									</div>
									<p>选中您要预约的日期吧</p>
								</div>
								<div class="panel-body">
									<form class="form-horizontal" role="form">
										<div class="form-group">
											<label for="basic" class="col-lg-9 control-label"></label>										
											<div class="col-lg-3">
												<!--<select id="basic" class="selectpicker form-control">
												  <option>会议室1</option>
												  <option>会议室2</option>
												  <option>会议室3</option>
												</select>-->
												<select id="basic" onchange="change()" class="electpicker form-control" >
													<?php if(is_array($allhouse)): foreach($allhouse as $key=>$b): ?><option  value="<?php echo ($b['house_id']); ?>"><?php echo ($b['house_name']); ?></option><?php endforeach; endif; ?>
												</select>
											</div>
										</div>
									</form>
									<div id='calendar'></div>
									<div class="row">
										<div class="col-lg-8" style="padding-top:15px;"></div>
										<div class="col-lg-2" style="padding-top:15px;">
											<label>已选中<span id="hour_select">0</span>个小时</label>
										</div>
										<div class="col-lg-2">
											<button type='submit' id='myorder' class='bk-margin-5 btn btn-danger' style='margin-left:45%'>提交</button>
										</div>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
		</div>
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
		
		<script src="__PUBLIC__/js/modernizr.js"></script>
        <script src="__PUBLIC__/js/moment.min.js"></script>	
		<script src="__PUBLIC__/js/fullcalendar.min.js"></script>
		<script src="__PUBLIC__/js/locale/fullcalendar-zh-cn.js"></script>
        
		<script src="__PUBLIC__/js/pages/index.js"></script>

		<script src="__PUBLIC__/vendor/bootstrap-select/js/bootstrap-select.js" defer></script>
		<script>

		function formatDateTime(inputTime) {    
			var date = new Date(inputTime);  
			var y = date.getFullYear();    
			var m = date.getMonth() + 1;    
			m = m < 10 ? ('0' + m) : m;    
			var d = date.getDate();    
			d = d < 10 ? ('0' + d) : d;    
			var h = date.getHours();  
			h = h < 10 ? ('0' + h) : h;  
			var minute = date.getMinutes();  
			var second = date.getSeconds();  
			minute = minute < 10 ? ('0' + minute) : minute;    
			second = second < 10 ? ('0' + second) : second;   
			return y + '-' + m + '-' + d;    
		};  
		function add30minute(inputTime){
			var hour = inputTime[0] + inputTime[1]
			var minute = inputTime[3] + inputTime[4]
			if(minute == "00"){
				return hour+":"+"30"
			}
			else{
				i_hour = parseInt(hour);
				i_hour ++;
				return i_hour.toString()+":00";
			}
		}
		//alert("a");
		//记得完善一下
		var start_time;
		var end_time;
		var pick_date;
		var houseflag;
		var fulldates=  [];
		
		function change(){
			fulldates = [];
   			var houseid=$("#basic").val();
			$.post("<?php echo U('Index/Order/getBusyDay1');?>",{"p_houseid":houseid},function(data){
				console.log("in!");
				console.log(data);
				events = data[1];
				data = data[0];
				//fulldates = date;
				for(var i=0;i<data.length;i++){
					fulldates.push(	{
						title: i.toString(),
						start: data[i],
						end: data[i],
						rendering: 'background',
						color: '#ff9f89'
					});
				}
				today = new Date();
                yesterday = new Date();
                yesterday.setTime(today.getTime()-24*60*60*1000)
                var timestamp = Date.parse(today); 
                var yesterdaystamp = Date.parse(yesterday);
				fulldates.push(	{
						title: i.toString(),
						start: '1900-01-01',
						end: formatDateTime(timestamp),
						rendering: 'background',
						color: '#716f6f'
				});
				for(var i =0;i<events.length;i++){

					var starttime = (events[i]['time'].split("-"))[0];
					if(starttime[1]==":"){
						starttime = "0"+starttime
					}
					var endtime = (events[i]['time'].split("-"))[1];
					if(endtime[1]==":"){
						endtime = "0"+endtime
					}
					var title = "预约人："+events[i]['mname']+"\n预约事由："+events[i]['goal']
					fulldates.push(	{
						id: i+100,
						//title: events[i]['house_name'],
						title:title,
						start: events[i]['use_date']+'T'+starttime,
						end:events[i]['use_date']+'T'+endtime,
						color: "#df584c"
					});
				}
				console.log(fulldates);
				console.log("in2")
				$('#calendar').fullCalendar('removeEvents');
        		$('#calendar').fullCalendar( 'addEventSource', fulldates); 
    			$('#calendar').fullCalendar('refetchEvents');
			})
		}
   	

   		$("#myorder").click(function() {
				var obj=document.getElementById("basic");
				var index=obj.selectedIndex;
				var house=obj.options[index].text;
				var timearray="";
				for(var i=start_time;i<end_time;){
					var a=i%60;
					if(a==0){
						timearray+=(i/60).toString()+':00';
						timearray+='-'+((i+30)/60-0.5).toString()+':30'+'_'
					}
					else{
						timearray+=(i/60-0.5).toString()+':30';
						timearray+='-'+((i+30)/60).toString()+':00'+'_'
					}
					i+=30;
				}
				console.log(house);
				tourl = "<?php echo U('Index/Order/form',array('date' => 'myurl1','housename'=>'myurl2','time'=>'myurl3'));?>";
					tourl=tourl.replace('myurl1',pick_date);
					tourl=tourl.replace('myurl2',house);
					tourl=tourl.replace('myurl3',timearray);

					console.log(tourl);
					location.href = tourl;
        });


       	$(document).ready(function() {
			var mydate = new Date();
            $(".mylink").click(function(){
                console.log("sadasd");
            })
           	var houseid=$("#basic").val();
			$.post("<?php echo U('Index/Order/getBusyDay1');?>",{"p_houseid":houseid},function(data){
				events = data[1];
				data = data[0];
				today = new Date();
                yesterday = new Date();
                yesterday.setTime(today.getTime()-24*60*60*1000)
                var timestamp = Date.parse(today); 
                var yesterdaystamp = Date.parse(yesterday);
				for(var i =0;i<events.length;i++){
					var starttime = (events[i]['time'].split("-"))[0];
					var endtime = (events[i]['time'].split("-"))[1];
					var title = "预约人："+events[i]['mname']+"\n预约事由："+events[i]['goal']
					if(starttime[1]==':'){
						starttime = "0"+starttime
					}
					if(endtime[1]==':'){
						endtime = "0"+endtime
					}
					fulldates.push(	{
						id: i+100,
						//title: events[i]['house_name'],
						title:title,
						start: events[i]['use_date']+'T'+starttime+"Z",
						//end:events[i]['use_date']+'T'+add30minute(starttime),
						end:events[i]['use_date']+'T'+endtime+"Z",
						color: "#df584c"
					});
				}
				var week = new Date().getDay();  

				ds = mydate.getFullYear().toString()+"-";
				if((mydate.getMonth()+1).toString().length == 1){
					ds += "0";
				}
				ds += (mydate.getMonth()+1).toString()+"-"
				if((mydate.getDate()+1).toString().length == 1){
					ds += "0";
				}
				
				ds += mydate.getDate().toString()+"T00:00:00Z";
				console.log(ds);
				$('#calendar').fullCalendar({
					header: {
						left: 'prev,next today',
						center: 'title',
						right: 'agendaWeek'
						//right: 'agendaWeek'
					},
					defaultView:'agendaWeek',
					defaultDate:ds,
					navLinks: true, // can click day/week names to navigate views
					selectable: true,
					selectHelper: true,
					select: function(start, end) {
					start_time=start['_i'][3]*60+start['_i'][4];
					end_time=end['_i'][3]*60+end['_i'][4];
					pick_date="";
					if(start['_i'][0]){
					pick_date+=start['_i'][0].toString()+'-';
					if(start['_i'][1]+1<10)
						pick_date+='0';
					pick_date+=(start['_i'][1]+1).toString()+'-';
					if(start['_i'][2]<10)
						pick_date+='0';
					pick_date+=start['_i'][2].toString();}
					console.log(pick_date);
					var ymd = formatDateTime(start['_i']);
					min_sub = (end['_i'][3]*60 + end['_i'][4] )-(start['_i'][3]*60 + start['_i'][4]);
					if(start['_i'][2] != end['_i'][2]){
						alert('不能跨天选择哦！');
						$("#hour_select").html("0");
						return ;
					}
					console.log((min_sub));
					$("#hour_select").html((min_sub+0.0)/60);
					console.log(ymd);
					if(ymd == "NaN-NaN-NaN"){
						return ;
					}
					for(i=0;i<fulldates.length;i++){
						if(formatDateTime(start['_i'])==data[i]){
							bootbox.alert("这一天已经预约满了，换一天吧~");
							return ;
						}
					}
					if(start['_i']<yesterdaystamp){
						alert("这一天已经过去了，换一天吧~");
						return ;
					}
					str = start['_i'].toString();
					tourl = "<?php echo U('Index/Order/detail',array('date' => 'myurl'));?>";
					tourl=tourl.replace('myurl',formatDateTime(start['_i']));
					console.log(start);
					console.log(tourl);
					location.href = tourl;
					//console.log(tourl);
					//location.href = "<?php echo U('Index/Order/detail',array('date'=>"+str+"));?>";
						/*
						var title = prompt('Event Title:');
						var eventData;
						if (title) {
							eventData = {
								title: title,
								start: start,
								end: end
							};
							$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
						}
						$('#calendar').fullCalendar('unselect');*/

				},
				editable: true,
				eventLimit: 8, // allow "more" link when too many events			
				events: fulldates,
				//slotDuration:'02:00:00',
				contentHeight: 'auto',
				minTime:'08:00:00',
				maxTime:'22:00:00',
				firstDay:(week-1)%7,
				timeFormat: 'H:mm',
				});
			})
			


		
		});
        </script>
        	
	</body>
	
</html>