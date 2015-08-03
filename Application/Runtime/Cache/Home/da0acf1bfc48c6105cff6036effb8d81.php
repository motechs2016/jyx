<?php if (!defined('THINK_PATH')) exit();?>﻿      <title><?php echo C('cfg_webname');?></title>
	<link rel="stylesheet" type="text/css" href="/xdl_jyx/Public/Home/css/style.css">
	  <!--外层百分比div-->
	   <div class="header">
	   	  <!--header头内容展示区-->
	   	  <div class="header_text">

	   	  	 <!--LOGO-->
             <div class="header_logo">
             	<img src="/xdl_jyx/Public/Home/images/logo.png"></img>
             </div>
             <!--LOGO区结束-->

             <!--nav导航区-->
             <div class="header_nav">
             	<ul>
             	  <li><a href="#">课程</a></li>
             	  <li><a href="#">加薪</a></li>
             	  <li><a href="#">分享</a></li>
             	  <li><a href="#">社区</a></li>
             	</ul>
             </div>
             <!--nav导航区结束-->
             
             <!--Search搜索登录区-->
             <div class="header_Search">

               <!--input搜索-->
             	<div class="nav_input">
             		  <div class="container">

					    <input class="sousuo" type="text" name="keyword" value="搜索课程" onblur="if(this.value=='')this.value='搜索课程';" onfocus="if(this.value=='搜索课程')this.value='';"></input>

					    <div class="search">
					        <input class="input_img" type="submit" value=""></input>
					    </div>

					</div>
             	</div>
             	<!--input搜索结束-->
               
               <!--登录注册-->
             	<div class="nav_Login">
             		<p><a href="#">登录</a><a href="#">注册</a></p>
             	</div>
             	<!--登录注册结束-->

             </div>
             <!--Search搜索登录区结束-->

	   	  </div>
	   	  <!--header头内容展示区结束-->
	   </div>
	  <!--外层百分比div结束-->

	<!--header结束-->
<link rel="stylesheet" href="/xdl_jyx/Public/Home/css/show.css" type="text/css">
<script src="/xdl_jyx/Public/Home/js/jquery.js" type="text/javascript" charset="utf-8"></script>
<script src="/xdl_jyx/Public/Home/js/show.js" type="text/javascript" charset="utf-8"></script>
		<div id="jw-main">
			<div class="content">
				<div class="jw-course-title">	
					<!--面包削 开始-->
					<div class="jw-path">
						<a href="#/#">课程</a>\
						<a href="#/#">移动开发</a>\
						<a href="#/#">Android</a>\
					</div>
					<!--面包削 结束-->
				</div>
				<!-- 课程开始学习  开始 -->
				<div class="jw-course-study">
					<a href="#/#">
						<img width="280" height="160" class="img" alt="img" src="/xdl_jyx/Public/Home/images/study.jpg">
					</a>
					<ul class="info">
						<li>
							<div class="info-num">8888</div>
							<div class="info-title">学习人数</div>
						</li>
						<li>
							<div class="info-num">1小时46分</div>
							<div class="info-title">课程时长</div>
						</li>
						<li>
							<div class="info-num">100分</div>
							<div class="info-title">已学时长</div>
						</li>
					</ul>
					<!-- 加入关注与开始学习 开始 -->
					<ul class="study-status">
						<li class="add-concerned-course">
							<a href="javascript:void(0)">
								<i></i>
								<em>已关注</em><!-- 已关注 关注此课程 -->
							</a>
						</li>
						<li class="course-studytime">
							<a class="start-study" href="">开始学习</a>
						</li>
					</ul>
					<!-- 加入关注与开始学习 结束 -->
					<div class="clear"></div>
					<!-- 学习进度 开始 -->
					<div id="course-progress">
						<progress id="p1" max="100" data-finishval="0" value="0" style="width: 1184px;"></progress>
					<div id="learn-tips" style="left: 0%; opacity: 1; display: none;">学习完成度<i>0%</i></div>
					</div>
					
					<!-- 学习进度 结束 -->
				</div>
				<!-- 课程开始学习 结束 -->
				<div class="clear"></div>

				<!-- 课程列表 开始 -->
					<div class="jw-content-area">
						<ul class="jw-course-menu">
							<li><a class="ui-tabs-active" href="#/#">章节</a></li>
							<li><a href="#/#">评论</a></li>
						</ul>
						<div class="course-chapter-list">
							<ul>
								<li>
									<a href="#/#">2-1 3D画廊快速使用指南 (13:06)</a>
								</li>
								<li>
									<a href="#/#">2-1 3D画廊快速使用指南 (13:06)</a>
								</li>
							</ul>
						</div>
					</div>
				<!-- 课程列表 结束 -->

				<!-- 授课讲师 开始 -->
					<div class="jw-sidebar">
						<dl>
							<dt>授课老师</dt>
							<dd>
								<div class="jw-course-teacher">
									<a href=""><img class="teacer-pic" alt="img" src="/xdl_jyx/Public/Home/images/teacher.jpg"></a>
									<h3>李宁</h3>
									<p>移动开发工程师</p>
									<div class="clear"></div>
									<div class="jw-discrip">
									银河使者，知名IT技术专家、作家。一个信仰技术的狂热分子，曾经的屌丝，现在的高富帅！早年浪迹于多家软件公司从事编程和构架师工作。著有《Android开发权威指南（第二版）》、《Android开发完全讲义（第二版）》等脍炙人口的Android书籍。	
									</div>
								<div class="clear"></div>
								</div>
							</dd>
						</dl>

						<dl>
							<dt><span style="color:#be3948">2404</span> 位共同战斗的同学</dt>
							<dd>
								<ul class="users">
									<li>
										<a href=""><img class="img" alt="img" src="/xdl_jyx/Public/Home/images/xues.jpg"></a>
										<h3>Lemuel</h3>
										<em>UI设计师</em>
									</li>
									<li>
										<a href=""><img class="img" alt="img" src="/xdl_jyx/Public/Home/images/xues.jpg"></a>
										<h3>Lemuel</h3>
										<em>UI设计师</em>
									</li>
								</ul>
							</dd>
						</dl>
					</div>
				<!-- 授课讲师 结束 -->

				<!-- 共同战斗的同学 开始 -->

				<!-- 共同战斗的同学 结束 -->
			</div>		
			<div class="clear"></div>
		</div>
﻿<!--友情链接jq-->
	<SCRIPT type=text/javascript src="/xdl_jyx/Public/Home/js/jquery.js"></SCRIPT>
	<SCRIPT type=text/javascript charset=utf-8 src="/xdl_jyx/Public/Home/js/lrscroll.js"></SCRIPT>
<!--友情链接jq结束-->
	<!--footer页脚开始-->
	    <!--页脚友情链接-->
        <div class="footer_link">
            <div class="link_auto">
            	<!--遍历层-->
            	<DIV id=featureContainer>
				<DIV id=feature>
				<DIV id=block>
				<DIV id=botton-scroll>
				<UL class=featureUL>

				  <LI class=featureBox>
				  <DIV class=box><A href="#" target="_blank"><IMG alt=Paracletos  src="/xdl_jyx/Public/Home/images/01.png" width=197 height=33> </A></DIV>
				  <!-- /box --></LI>
				  
				  <LI class=featureBox>
				  <DIV class=box><A href="#" target="_blank"><IMG alt="Natural Touch Soap" src="/xdl_jyx/Public/Home/images/02.png" width=197 height=33> </A></DIV>
				  <!-- /box --></LI>
				  
				  <LI class=featureBox>
				  <DIV class=box><A href="#" target="_blank"><IMG alt="LRTK" src="/xdl_jyx/Public/Home/images/03.png" width=197 height=33> </A></DIV>
				  <!-- /box --></LI>
				  
				  <LI class=featureBox>
				  <DIV class=box><A href="#" target="_blank"><IMG alt="Natalie Reid" src="/xdl_jyx/Public/Home/images/04.png" width=197 height=33> </A></DIV>
				  <!-- /box --></LI>
				  
				  <LI class=featureBox>
				  <DIV class=box><A href="#" target="_blank"><IMG alt="xixi" src="/xdl_jyx/Public/Home/images/05.png" width=197 height=33> </A></DIV>
				  <!-- /box --></LI>
				  
				  <LI class=featureBox>
				  <DIV class=box><A href="#" target="_blank"><IMG alt="Catherine Sherwood" src="/xdl_jyx/Public/Home/images/06.png" width=197 height=33> </A></DIV>
				  <!-- /box -->
				  </LI>
				  
				  </UL>
				  </DIV><!-- /botton-scroll --></DIV><!-- /block --><A class=prev href="javascript:void();">Previous</A><A class=next 
				href="javascript:void();">Next</A> </DIV>
				<!-- /feature -->
				</DIV><!-- /featureContainer -->
            	<!--遍历层结束-->
            </div>
        </div>
        <!--页脚友情链接结束-->

         <!--页脚内容-->
        <div class="footer_text">
          <div class="footer_tauto">
	          <div class="footer_tleft">
	          	<div class="footer_ul">
	          	 <ul>
	          	  <li><a href="#">首页</a></li>
	          	  <li><a href="#">课程</a></li>
	          	  <li><a href="#">加薪</a></li>
	          	  <li><a href="#">分享</a></li>
	          	  <li><a href="#">社区</a></li>
	          	  </ul>
	          	 </div>
                <p class="footer_p2">© 2015 Ecode.  All Rights Reserved.</p>
                <p class="footer_p3">Not for commercial use, for project practice</p>
	          </div>
	          <div class="footer_tright">
	          	<ul>
	          		<li><a href="#"><img src="/xdl_jyx/Public/Home/images/f_a.png"></a></li>
	          		<li><a href="#"><img src="/xdl_jyx/Public/Home/images/f_b.png"></a></li>
	          		<li><a href="#"><img src="/xdl_jyx/Public/Home/images/f_c.png"></a></li>
	          		<li><a href="#"><img src="/xdl_jyx/Public/Home/images/f_d.png"></a></li>
	          		<li><a href="#"><img src="/xdl_jyx/Public/Home/images/f_e.png"></a></li>
	          		<li><a href="#"><img src="/xdl_jyx/Public/Home/images/f_f.png"></a></li>
	          	</ul>
	          </div>
          </div>
        </div>
        <!--页脚内容结束-->
	<!--footer页脚结束-->
</body>
</html>