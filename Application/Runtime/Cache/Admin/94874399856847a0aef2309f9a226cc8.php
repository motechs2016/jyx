<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>

	<meta charset="utf-8" />

	<title>就要学 | 在线教育平台管理</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="/xdl_jyx/Public/Admin/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<link href="/xdl_jyx/Public/Admin/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

	<link href="/xdl_jyx/Public/Admin/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<link href="/xdl_jyx/Public/Admin/css/style-metro.css" rel="stylesheet" type="text/css"/>

	<link href="/xdl_jyx/Public/Admin/css/style.css" rel="stylesheet" type="text/css"/>

	<link href="/xdl_jyx/Public/Admin/css/style-responsive.css" rel="stylesheet" type="text/css"/>

	<link href="/xdl_jyx/Public/Admin/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="/xdl_jyx/Public/Admin/css/uniform.default.css" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES --> 

	<link href="/xdl_jyx/Public/Admin/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>

	<link href="/xdl_jyx/Public/Admin/css/daterangepicker.css" rel="stylesheet" type="text/css" />

	<link href="/xdl_jyx/Public/Admin/css/fullcalendar.css" rel="stylesheet" type="text/css"/>

	<link href="/xdl_jyx/Public/Admin/css/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>

	<link href="/xdl_jyx/Public/Admin/css/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>

	<!-- END PAGE LEVEL STYLES -->

	<link rel="shortcut icon" href="/xdl_jyx/Public/Admin/images/favicon.ico" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="page-header-fixed">

	<!-- BEGIN HEADER -->

		<div class="header navbar navbar-inverse navbar-fixed-top">

		<!-- BEGIN TOP NAVIGATION BAR -->

		<div class="navbar-inner">

			<div class="container-fluid">

				<!-- BEGIN LOGO -->

				<a class="brand" href="index.html">

				<img src="/xdl_jyx/Public/Admin/images/logo.png" alt="logo"/>

				</a>

				<!-- END LOGO -->

				<!-- BEGIN RESPONSIVE MENU TOGGLER -->

				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">

				<img src="/xdl_jyx/Public/Admin/images/menu-toggler.png" alt="" />

				</a>          

				<!-- END RESPONSIVE MENU TOGGLER -->            

<div class="navbar hor-menu hidden-phone hidden-tablet">

					<div class="navbar-inner">

						<ul class="nav">

							<li class="visible-phone visible-tablet">

								<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->

								<form class="sidebar-search">

									<div class="input-box">

										<a href="javascript:;" class="remove"></a>

										<input type="text" placeholder="Search...">            

										<input type="button" class="submit" value=" ">

									</div>

								</form>

								<!-- END RESPONSIVE QUICK SEARCH FORM -->

							</li>

							<li class="active">

								<a href="index.html">

								Dashboard

								<span class="selected"></span>

								</a>

							</li>

							<li class="">

								<a data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">

								Sections

								<span class="arrow"></span>     

								</a>

								<ul class="dropdown-menu">

									<li><a href="#">Section 1</a></li>

									<li><a href="#">Section 2</a></li>

									<li><a href="#">Section 3</a></li>

									<li><a href="#">Section 4</a></li>

									<li><a href="#">Section 5</a></li>

								</ul>

								<b class="caret-out"></b>                        

							</li>

							<li>

								<a href="">Tables</a>

							</li>

							<li class="">

								<a data-toggle="dropdown" class="dropdown-toggle" href="">Extra

								<span class="arrow"></span>

								</a>

								<ul class="dropdown-menu">

									<li><a href="index.html">About Us</a></li>

									<li><a href="index.html">Services</a></li>

									<li><a href="index.html">Pricing</a></li>

									<li><a href="index.html">FAQs</a></li>

									<li><a href="index.html">Gallery</a></li>

									<li><a href="index.html">Registration</a></li>

								</ul>

								<b class="caret-out"></b>                        

							</li>

							<li>

								<span class="hor-menu-search-form-toggler">&nbsp;</span>

								<div class="search-form hidden-phone hidden-tablet" style="display: none;">

									<form class="form-search">

										<div class="input-append">

											<input type="text" placeholder="Search..." class="m-wrap">

											<button type="button" class="btn"></button>

										</div>

									</form>

								</div>

							</li>

						</ul>

					</div>

				</div>


				<!-- BEGIN TOP NAVIGATION MENU -->              

				<ul class="nav pull-right">

					<!-- BEGIN NOTIFICATION DROPDOWN -->   

					<li class="dropdown" id="header_notification_bar">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<i class="icon-warning-sign"></i>

						<span class="badge">6</span>

						</a>

						<ul class="dropdown-menu extended notification">

							<li>

								<p>You have 14 new notifications</p>

							</li>

							<li>

								<a href="#">

								<span class="label label-success"><i class="icon-plus"></i></span>

								New user registered. 

								<span class="time">Just now</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-important"><i class="icon-bolt"></i></span>

								Server #12 overloaded. 

								<span class="time">15 mins</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-warning"><i class="icon-bell"></i></span>

								Server #2 not respoding.

								<span class="time">22 mins</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-info"><i class="icon-bullhorn"></i></span>

								Application error.

								<span class="time">40 mins</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-important"><i class="icon-bolt"></i></span>

								Database overloaded 68%. 

								<span class="time">2 hrs</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-important"><i class="icon-bolt"></i></span>

								2 user IP blocked.

								<span class="time">5 hrs</span>

								</a>

							</li>

							<li class="external">

								<a href="#">See all notifications <i class="m-icon-swapright"></i></a>

							</li>

						</ul>

					</li>

					<!-- END NOTIFICATION DROPDOWN -->

					<!-- BEGIN INBOX DROPDOWN -->

					<li class="dropdown" id="header_inbox_bar">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<i class="icon-envelope"></i>

						<span class="badge">5</span>

						</a>

						<ul class="dropdown-menu extended inbox">

							<li>

								<p>You have 12 new messages</p>

							</li>

							<li>

								<a href="inbox.html?a=view">

								<span class="photo"><img src="/xdl_jyx/Public/Admin/images/avatar2.jpg" alt="" /></span>

								<span class="subject">

								<span class="from">Lisa Wong</span>

								<span class="time">Just Now</span>

								</span>

								<span class="message">

								Vivamus sed auctor nibh congue nibh. auctor nibh

								auctor nibh...

								</span>  

								</a>

							</li>

							<li>

								<a href="inbox.html?a=view">

								<span class="photo"><img src=".//xdl_jyx/Public/Admin/images/avatar3.jpg" alt="" /></span>

								<span class="subject">

								<span class="from">Richard Doe</span>

								<span class="time">16 mins</span>

								</span>

								<span class="message">

								Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh

								auctor nibh...

								</span>  

								</a>

							</li>

							<li>

								<a href="inbox.html?a=view">

								<span class="photo"><img src=".//xdl_jyx/Public/Admin/images/avatar1.jpg" alt="" /></span>

								<span class="subject">

								<span class="from">Bob Nilson</span>

								<span class="time">2 hrs</span>

								</span>

								<span class="message">

								Vivamus sed nibh auctor nibh congue nibh. auctor nibh

								auctor nibh...

								</span>  

								</a>

							</li>

							<li class="external">

								<a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>

							</li>

						</ul>

					</li>

					<!-- END INBOX DROPDOWN -->

					<!-- BEGIN TODO DROPDOWN -->

					<li class="dropdown" id="header_task_bar">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<i class="icon-tasks"></i>

						<span class="badge">5</span>

						</a>

						<ul class="dropdown-menu extended tasks">

							<li>

								<p>You have 12 pending tasks</p>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">New release v1.2</span>

								<span class="percent">30%</span>

								</span>

								<span class="progress progress-success ">

								<span style="width: 30%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Application deployment</span>

								<span class="percent">65%</span>

								</span>

								<span class="progress progress-danger progress-striped active">

								<span style="width: 65%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Mobile app release</span>

								<span class="percent">98%</span>

								</span>

								<span class="progress progress-success">

								<span style="width: 98%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Database migration</span>

								<span class="percent">10%</span>

								</span>

								<span class="progress progress-warning progress-striped">

								<span style="width: 10%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Web server upgrade</span>

								<span class="percent">58%</span>

								</span>

								<span class="progress progress-info">

								<span style="width: 58%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Mobile development</span>

								<span class="percent">85%</span>

								</span>

								<span class="progress progress-success">

								<span style="width: 85%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li class="external">

								<a href="#">See all tasks <i class="m-icon-swapright"></i></a>

							</li>

						</ul>

					</li>

					<!-- END TODO DROPDOWN -->

					<!-- BEGIN USER LOGIN DROPDOWN -->

					<li class="dropdown user">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<img alt="" src="/xdl_jyx/Public/Admin/images/avatar1_small.jpg" />

						<span class="username">Bob Nilson</span>

						<i class="icon-angle-down"></i>

						</a>

						<ul class="dropdown-menu">

							<li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a></li>

							<li><a href="page_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>

							<li><a href="inbox.html"><i class="icon-envelope"></i> My Inbox(3)</a></li>

							<li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>

							<li class="divider"></li>

							<li><a href="extra_lock.html"><i class="icon-lock"></i> Lock Screen</a></li>

							<li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>

						</ul>

					</li>

					<!-- END USER LOGIN DROPDOWN -->

				</ul>

				<!-- END TOP NAVIGATION MENU --> 

			</div>

		</div>

		<!-- END TOP NAVIGATION BAR -->

	</div>

	<!-- END HEADER -->

	<!-- BEGIN CONTAINER -->

	<div class="page-container row-fluid">

		<!-- BEGIN SIDEBAR -->
					<div class="page-sidebar nav-collapse collapse">

			<!-- BEGIN SIDEBAR MENU -->        

			<ul class="page-sidebar-menu">

				<li>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

					<div class="sidebar-toggler hidden-phone"></div>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

				</li>

				<li>

					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->

					<form class="sidebar-search">

						<div class="input-box">

							<a href="javascript:;" class="remove"></a>

							<input type="text" placeholder="Search..." />

							<input type="button" class="submit" value=" " />

						</div>

					</form>

					<!-- END RESPONSIVE QUICK SEARCH FORM -->

				</li>

				<li class="start active ">

					<a href="/xdl_jyx/index.php/Admin/index/index">

					<i class="icon-home"></i> 

					<span class="title">后台首页</span>

					<span class="selected"></span>

					</a>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-cogs"></i> 

					<span class="title">系统设置</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >
							<a href="/xdl_jyx/index.php/Admin/setting/index">
								网站信息配置
							</a>
						</li>
					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-user"></i> 

					<span class="title">管理员管理</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">
						<li ><a href="ui_general.html">管理员</a></li>
						<li ><a href="ui_general.html">权限分配</a></li>
					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-table"></i> 

					<span class="title">订单管理</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="form_layout.html">订单列表</a>

						</li>

					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-group"></i> 

					<span class="title">学员管理</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="page_timeline.html">

							<i class="icon-time"></i>

							Timeline</a>

						</li>

						<li >

							<a href="page_coming_soon.html">

							<i class="icon-cogs"></i>

							Coming Soon</a>

						</li>

						<li >

							<a href="page_blog.html">

							<i class="icon-comments"></i>

							Blog</a>

						</li>

						<li >

							<a href="page_blog_item.html">

							<i class="icon-font"></i>

							Blog Post</a>

						</li>

						<li >

							<a href="page_news.html">

							<i class="icon-coffee"></i>

							News</a>

						</li>

						<li >

							<a href="page_news_item.html">

							<i class="icon-bell"></i>

							News View</a>

						</li>

						<li >

							<a href="page_about.html">

							<i class="icon-group"></i>

							About Us</a>

						</li>

						<li >

							<a href="page_contact.html">

							<i class="icon-envelope-alt"></i>

							Contact Us</a>

						</li>

						<li >

							<a href="page_calendar.html">

							<i class="icon-calendar"></i>

							Calendar</a>

						</li>

					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-book"></i> 

					<span class="title">文章管理</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="extra_profile.html">

							User Profile</a>

						</li>

						<li >

							<a href="extra_lock.html">

							Lock Screen</a>

						</li>

						<li >

							<a href="extra_faq.html">

							FAQ</a>

						</li>

						<li >

							<a href="inbox.html">

							Inbox</a>

						</li>

						<li >

							<a href="extra_search.html">

							Search Results</a>

						</li>

						<li >

							<a href="extra_invoice.html">

							Invoice</a>

						</li>

						<li >

							<a href="extra_pricing_table.html">

							Pricing Tables</a>

						</li>

						<li >

							<a href="extra_image_manager.html">

							Image Manager</a>

						</li>

						<li >

							<a href="extra_404_option1.html">

							404 Page Option 1</a>

						</li>

						<li >

							<a href="extra_404_option2.html">

							404 Page Option 2</a>

						</li>

						<li >

							<a href="extra_404_option3.html">

							404 Page Option 3</a>

						</li>

						<li >

							<a href="extra_500_option1.html">

							500 Page Option 1</a>

						</li>

						<li >

							<a href="extra_500_option2.html">

							500 Page Option 2</a>

						</li>

					</ul>

				</li>

				<li>

					<a href="javascript:;">

					<i class="icon-folder-open"></i> 

					<span class="title">课程管理</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >
							<a href="/xdl_jyx/index.php/Admin/course/index">课程列表</a>
						</li>

						<li>

							<a href="javascript:;">

							<i class="icon-globe"></i> 

							Item 2

							<span class="arrow"></span>

							</a>

							<ul class="sub-menu">

								<li><a href="#"><i class="icon-user"></i>  Sample Link 1</a></li>

								<li><a href="#"><i class="icon-external-link"></i>  Sample Link 1</a></li>

								<li><a href="#"><i class="icon-bell"></i>  Sample Link 1</a></li>

							</ul>

						</li>

						<li>

							<a href="#">

							<i class="icon-folder-open"></i>

							Item 3

							</a>

						</li>

					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-user"></i> 

					<span class="title">友情链接</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="login.html">

							Login Form 1</a>

						</li>

						<li >

							<a href="login_soft.html">

							Login Form 2</a>

						</li>

					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-th"></i> 

					<span class="title">讲师管理</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="table_basic.html">

							Basic Tables</a>

						</li>

						<li >

							<a href="table_responsive.html">

							Responsive Tables</a>

						</li>

						<li >

							<a href="table_managed.html">

							Managed Tables</a>

						</li>

						<li >

							<a href="table_editable.html">

							Editable Tables</a>

						</li>

						<li >

							<a href="table_advanced.html">

							Advanced Tables</a>

						</li>

					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-file-text"></i> 

					<span class="title">课程分类</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="portlet_general.html">

							General Portlets</a>

						</li>

						<li >

							<a href="portlet_draggable.html">

							Draggable Portlets</a>

						</li>

					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-map-marker"></i> 

					<span class="title">广告管理</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="maps_google.html">

							Google Maps</a>

						</li>

						<li >

							<a href="maps_vector.html">

							Vector Maps</a>

						</li>

					</ul>

				</li>

				<li class="last ">

					<a href="charts.html">

					<i class="icon-bar-chart"></i> 

					<span class="title">Visual Charts</span>

					</a>

				</li>

			</ul>

			<!-- END SIDEBAR MENU -->

		</div>
		<!-- END SIDEBAR -->

		<!-- BEGIN PAGE -->  

		<div class="page-content">

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div id="portlet-config" class="modal hide">

				<div class="modal-header">

					<button data-dismiss="modal" class="close" type="button"></button>

					<h3>portlet Settings</h3>

				</div>

				<div class="modal-body">

					<p>Here will be a configuration form</p>

				</div>

			</div>

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE CONTAINER-->

			<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->   

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN STYLE CUSTOMIZER -->

						<div class="color-panel hidden-phone">

							<div class="color-mode-icons icon-color"></div>

							<div class="color-mode-icons icon-color-close"></div>

							<div class="color-mode">

								<p>THEME COLOR</p>

								<ul class="inline">

									<li class="color-black current color-default" data-style="default"></li>

									<li class="color-blue" data-style="blue"></li>

									<li class="color-brown" data-style="brown"></li>

									<li class="color-purple" data-style="purple"></li>

									<li class="color-grey" data-style="grey"></li>

									<li class="color-white color-light" data-style="light"></li>

								</ul>

								<label>

									<span>Layout</span>

									<select class="layout-option m-wrap small">

										<option value="fluid" selected>Fluid</option>

										<option value="boxed">Boxed</option>

									</select>

								</label>

								<label>

									<span>Header</span>

									<select class="header-option m-wrap small">

										<option value="fixed" selected>Fixed</option>

										<option value="default">Default</option>

									</select>

								</label>

								<label>

									<span>Sidebar</span>

									<select class="sidebar-option m-wrap small">

										<option value="fixed">Fixed</option>

										<option value="default" selected>Default</option>

									</select>

								</label>

								<label>

									<span>Footer</span>

									<select class="footer-option m-wrap small">

										<option value="fixed">Fixed</option>

										<option value="default" selected>Default</option>

									</select>

								</label>

							</div>

						</div>

						<!-- END BEGIN STYLE CUSTOMIZER -->  

						<h3 class="page-title">

							网站信息管理

							 <small>一个好的配置可以让系统运转更佳</small>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="index.html">Home</a> 

								<span class="icon-angle-right"></span>

							</li>

							<li>

								<a href="#">Form Stuff</a>

								<span class="icon-angle-right"></span>

							</li>

							<li><a href="#">Form Layouts</a></li>

						</ul>

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid">

					<div class="span12">

						<div class="tabbable tabbable-custom boxless">

							<ul class="nav nav-tabs">

								<li class="active"><a href="#tab_1" data-toggle="tab">基础信息</a></li>
								<li><a href="#tab_2" data-toggle="tab">附件设置</a></li>
								<li><a href="#tab_3" data-toggle="tab">性能设置</a></li>
								<li><a href="#tab_4" data-toggle="tab">水印设置</a></li>
								<li><a href="#tab_5" data-toggle="tab">增加变量</a></li>
							</ul>

							<div class="tab-content">
								
								<?php if(is_array($data)): foreach($data as $k=>$vo): if($vo["vargroup"] == 0): ?><div class="tab-pane <?php echo ($k == 1 ? 'active' : ''); ?>"  id="tab_<?php echo ($k); ?>">

									<div class="portlet box blue">

										<div class="portlet-title">

											<div class="caption"><i class="icon-reorder"></i></div>

											<div class="tools">

												<a href="javascript:;" class="collapse"></a>

												<a href="#portlet-config" data-toggle="modal" class="config"></a>

												<a href="javascript:;" class="reload"></a>

												<a href="javascript:;" class="remove"></a>

											</div>

										</div>

										<div class="portlet-body form">

											<!-- BEGIN FORM-->

											<form action="<?php echo U("setting/update");?>" class="form-horizontal form-row-seperated">
											<?php if(is_array($vo)): foreach($vo as $key=>$vvo): ?><div class="control-group">

															<label class="control-label"><?php echo ($vvo['varinfo']); ?></label>

															<div class="controls">
															<!-- 判断表单输出类型  -->
															
															<?php switch($vvo['vartype']): case "0": ?><input value="<?php echo ($vvo['varvalue']); ?>" name="<?php echo ($vvo['varname']); ?>" type="text" placeholder="small" class="m-wrap span12" />

																<span class="help-inline">$<?php echo ($vvo['varname']); ?></span><?php break;?>
															<?php case "1": ?><label class="radio">
																<input type="radio" name="vartype" value="0" <?php echo ($vvo['varvalue']?'checked':''); ?> />
																启用
																</label>
																<label class="radio">
																<input type="radio" name="vartype" value="1" <?php echo ($vvo['varvalue']?'':'checked'); ?> />
																关闭
																</label><br>
																<span class="help-inline">$<?php echo ($vvo['varname']); ?></span><?php break;?>
															<?php case "2": ?><textarea class="span6 m-wrap" rows="3"></textarea>
																<br>
																<span class="help-inline">$<?php echo ($vvo['varname']); ?></span><?php break; endswitch;?>
														</div>
														</div><?php endforeach; endif; ?>

												<div class="form-actions">

													<button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>

													<button type="button" class="btn">Cancel</button>

												</div>

											</form>

											<!-- END FORM-->  

										</div>

									</div>
									
								</div><?php endif; endforeach; endif; ?>
								<div class="tab-pane"  id="tab_4">

									<div class="portlet box blue">

										<div class="portlet-title">

											<div class="caption"><i class="icon-reorder"></i></div>

											<div class="tools">

												<a href="javascript:;" class="collapse"></a>

												<a href="#portlet-config" data-toggle="modal" class="config"></a>

												<a href="javascript:;" class="reload"></a>

												<a href="javascript:;" class="remove"></a>

											</div>

										</div>

										<div class="portlet-body form">

											<!-- BEGIN FORM-->

											<form action="<?php echo U("setting/update");?>" class="form-horizontal form-row-seperated">
												
												
												<div class="control-group">

													<label class="control-label">是否开启水印</label>

													<div class="controls">

														<label class="radio">

														<input type="radio" name="vartype" value="0" />
														启用
														</label>
														<label class="radio">
														<input type="radio" name="vartype" value="1" checked />
														关闭
														</label> 
													</div>
												</div>


												<div class="control-group">
														<label class="control-label">参数说明</label>
														<div class="controls">
															<span class="help-inline">宽</span>
															<input value="" name="varinfo" type="text" placeholder="varinfo" class="m-wrap small" />
															<span class="help-inline">高</span>
															<input value="" name="varinfo" type="text" placeholder="varinfo" class="m-wrap small" />
															
														</div>
												</div>

												<div class="form-actions">

													<button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>

													<button type="button" class="btn">Cancel</button>

												</div>

											</form>

											<!-- END FORM-->  

										</div>

									</div>

								</div>
								<div class="tab-pane"  id="tab_5">

									<div class="portlet box blue">

										<div class="portlet-title">

											<div class="caption"><i class="icon-reorder"></i></div>

											<div class="tools">

												<a href="javascript:;" class="collapse"></a>

												<a href="#portlet-config" data-toggle="modal" class="config"></a>

												<a href="javascript:;" class="reload"></a>

												<a href="javascript:;" class="remove"></a>

											</div>

										</div>

										<div class="portlet-body form">

											<!-- BEGIN FORM-->

											<form method="post" action="<?php echo U("setting/add");?>" class="form-horizontal form-row-seperated">
												
												
													<div class="control-group">

														<label class="control-label">变量名称</label>
														<div class="controls">
															<input value="" name="varname" type="text" placeholder="varname" class="m-wrap span12" />
															<span class="help-inline">系统会自动加 $_cfg</span>
														</div>
													</div>
													<div class="control-group">
														<label class="control-label">参数说明</label>
														<div class="controls">
															<input value="" name="varinfo" type="text" placeholder="varinfo" class="m-wrap span12" />
															<span class="help-inline"></span>
														</div>
													</div>
													<div class="control-group">
														<label class="control-label">变量值</label>
														<div class="controls">
															<input value="" name="varvalue" type="text" placeholder="varvalue" class="m-wrap span12" />
															<span class="help-inline"></span>
														</div>
													</div>
													<div class="control-group">

													<label class="control-label">变量类型</label>

													<div class="controls">

														<label class="radio">

														<input type="radio" name="vartype" value="0" />
														文本
														</label> 
														<label class="radio">
														<input type="radio" name="vartype" value="1" />
														布尔(Y/N)
														</label>
														<label class="radio">
														<input type="radio" name="vartype" value="2" />
														多行文本
														</label>  
													</div>
												</div>

												<div class="control-group">

													<label class="control-label">所属组</label>

													<div class="controls">

														<select name="vargroup" class="small m-wrap" tabindex="1">

															<option value="0">基本设置</option>

															<option value="1">附件设置</option>

															<option value="2">性能设置</option>
														</select>

													</div>

												</div>


												<div class="form-actions">

													<button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>

													<button type="button" class="btn">Cancel</button>

												</div>

											</form>

											<!-- END FORM-->  

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

				<!-- END PAGE CONTENT-->         

			</div>

			<!-- END PAGE CONTAINER-->

		</div>

		<!-- END PAGE -->  

	</div>

	<!-- END CONTAINER -->

	<!-- BEGIN FOOTER -->

	<div class="footer">

		<div class="footer-tools">

			<span class="go-top">

			<i class="icon-angle-up"></i>

			</span>

		</div>

	</div>

	<!-- END FOOTER -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->
			<script src="/xdl_jyx/Public/Admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>

	<script src="/xdl_jyx/Public/Admin/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="/xdl_jyx/Public/Admin/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      

	<script src="/xdl_jyx/Public/Admin/js/bootstrap.min.js" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="/xdl_jyx/Public/Admin/js/excanvas.min.js"></script>

	<script src="/xdl_jyx/Public/Admin/js/respond.min.js"></script>  

	<![endif]-->   

	<script src="/xdl_jyx/Public/Admin/js/jquery.slimscroll.min.js" type="text/javascript"></script>

	<script src="/xdl_jyx/Public/Admin/js/jquery.blockui.min.js" type="text/javascript"></script>  

	<script src="/xdl_jyx/Public/Admin/js/jquery.cookie.min.js" type="text/javascript"></script>

	<script src="/xdl_jyx/Public/Admin/js/jquery.uniform.min.js" type="text/javascript" ></script>

	<!-- END CORE PLUGINS -->

	<!-- BEGIN PAGE LEVEL PLUGINS -->

	<script src="/xdl_jyx/Public/Admin/js/jquery.vmap.js" type="text/javascript"></script>   

	<script src="/xdl_jyx/Public/Admin/js/jquery.vmap.russia.js" type="text/javascript"></script>

	<script src="/xdl_jyx/Public/Admin/js/jquery.vmap.world.js" type="text/javascript"></script>

	<script src="/xdl_jyx/Public/Admin/js/jquery.vmap.europe.js" type="text/javascript"></script>

	<script src="/xdl_jyx/Public/Admin/js/jquery.vmap.germany.js" type="text/javascript"></script>

	<script src="/xdl_jyx/Public/Admin/js/jquery.vmap.usa.js" type="text/javascript"></script>

	<script src="/xdl_jyx/Public/Admin/js/jquery.vmap.sampledata.js" type="text/javascript"></script>  

	<script src="/xdl_jyx/Public/Admin/js/jquery.flot.js" type="text/javascript"></script>

	<script src="/xdl_jyx/Public/Admin/js/jquery.flot.resize.js" type="text/javascript"></script>

	<script src="/xdl_jyx/Public/Admin/js/jquery.pulsate.min.js" type="text/javascript"></script>

	<script src="/xdl_jyx/Public/Admin/js/date.js" type="text/javascript"></script>

	<script src="/xdl_jyx/Public/Admin/js/daterangepicker.js" type="text/javascript"></script>     

	<script src="/xdl_jyx/Public/Admin/js/jquery.gritter.js" type="text/javascript"></script>

	<script src="/xdl_jyx/Public/Admin/js/fullcalendar.min.js" type="text/javascript"></script>

	<script src="/xdl_jyx/Public/Admin/js/jquery.easy-pie-chart.js" type="text/javascript"></script>

	<script src="/xdl_jyx/Public/Admin/js/jquery.sparkline.min.js" type="text/javascript"></script>  

	<!-- END PAGE LEVEL PLUGINS -->

	<!-- BEGIN PAGE LEVEL SCRIPTS -->

	<script src="/xdl_jyx/Public/Admin/js/app.js" type="text/javascript"></script>

	<script src="/xdl_jyx/Public/Admin/js/index.js" type="text/javascript"></script>        

	<!-- END PAGE LEVEL SCRIPTS -->  
	<!-- BEGING 自定义JS -->
	<script src="/xdl_jyx/Public/Admin/js/common.js" type="text/javascript"></script>      
	<!-- END 自定义JS -->

	<script>

		jQuery(document).ready(function() {    

		   App.init(); // initlayout and core plugins

		   Index.init();

		   Index.initJQVMAP(); // init index page's custom scripts

		   Index.initCalendar(); // init index page's custom scripts

		   Index.initCharts(); // init index page's custom scripts

		   Index.initChat();

		   Index.initMiniCharts();

		   Index.initDashboardDaterange();

		   Index.initIntro();

		});

	</script>

	<!-- END JAVASCRIPTS -->   

</body>

<!-- END BODY -->

</html>