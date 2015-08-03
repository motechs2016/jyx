<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>就要学视频教育网</title>
	<link rel="stylesheet" href="/jyx/trunk/Public/Home/css/wy-mod-banner.css" media="screen">
</head>
<body>
	<!--header头部-->
	<link rel="stylesheet" type="text/css" href="/jyx/trunk/Public/Home/css/style.css">
	  <!--外层百分比div-->
	   <div class="header">
	   	  <!--header头内容展示区-->
	   	  <div class="header_text">

	   	  	 <!--LOGO-->
             <div class="header_logo">
             	<img src="/jyx/trunk/Public/Home/images/logo.png"></img>
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
   <!--header头内容展示区结束-->
	   </div>
	  <!--外层百分比div结束-->

	<!--header结束-->
       

    <!--banner轮播图-->
       <div class="banner">
         <div class="wy-mod-banner" style="overflow:hidden;">
	
	<div id="_banners" class="banners">
		<div class="banner banner1">
			<a href="#"><img width="1600" height="599" src="/jyx/trunk/Public/Home/images/banner1.jpg" alt="微云，生活精彩" /></a>
		</div>
		<div class="banner banner2">
			<a href="#"><img width="1600" height="599" src="/jyx/trunk/Public/Home/images/banner2.jpg" alt="微云，生活精彩" /></a>
		</div>
		<div class="banner banner3">
			<a href="#"><img width="1600" height="599" src="/jyx/trunk/Public/Home/images/banner3.jpg" alt="微云，生活精彩" /></a>
		</div>
		<div class="banner banner4">
			<a href="#"><img width="1600" height="599" src="/jyx/trunk/Public/Home/images/banner4.jpg" alt="微云，生活精彩" /></a>
		</div>
	</div>
	
	  <div id="_focus" class="focus">
	  	<a data-index="0" href="javascript:void(0);" class="on"><span class="bg-b"></span><span class="inner"></span></a>
		<a data-index="1" href="javascript:void(0);"><span class="bg-b"></span><span class="inner"></span></a>
		<a data-index="2" href="javascript:void(0);"><span class="bg-b"></span><span class="inner"></span></a>
		<a data-index="3" href="javascript:void(0);"><span class="bg-b"></span><span class="inner"></span></a>
	</div>
</div>
       </div>
	<!--banner轮播图结束-->
 
 <!--banner轮播图JQ--> 
<script type="text/javascript" src="/jyx/trunk/Public/Home/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
var glume = function(banners_id, focus_id){
	this.$ctn = $('#' + banners_id);
	this.$focus = $('#' + focus_id);
	this.$adLis = null;
	this.$btns = null;
	this.switchSpeed = 5;//自动播放间隔(s)
	this.defOpacity = 1;
	this.crtIndex = 0;
	this.adLength = 0;
	this.timerSwitch = null;
	this.init();
};
glume.prototype = {
	fnNextIndex:function(){
		return (this.crtIndex >= this.adLength-1)?0:this.crtIndex+1;
	},
	//动画切换
	fnSwitch:function(toIndex){
		if(this.crtIndex==toIndex){return;}
		this.$adLis.css('zIndex', 0);
		this.$adLis.filter(':eq('+this.crtIndex+')').css('zIndex', 2);
		this.$adLis.filter(':eq('+toIndex+')').css('zIndex', 1);
		this.$btns.removeClass('on');
		this.$btns.filter(':eq('+toIndex+')').addClass('on');
		var me = this;

		$(this.$adLis[this.crtIndex]).animate({
			opacity: 0
		}, 1000, function() {
			me.crtIndex = toIndex;
			$(this).css({
				opacity: me.defOpacity,
				zIndex: 0
			});
		});
	},
	fnAutoPlay:function(){
		this.fnSwitch(this.fnNextIndex());
	},
	fnPlay:function(){
		var me = this;
		me.timerSwitch = window.setInterval(function() {
			me.fnAutoPlay();
		},me.switchSpeed*1000);
	},
	fnStopPlay:function(){
		window.clearTimeout(this.timerSwitch);
		this.timerSwitch = null;
	},

	init:function(){
		this.$adLis = this.$ctn.children();
		this.$btns = this.$focus.children();
		this.adLength = this.$adLis.length;

		var me = this;
		//点击切换
		this.$focus.on('click', 'a', function(e) {
			e.preventDefault();
			var index = parseInt($(this).attr('data-index'), 10)
			me.fnSwitch(index);
		});
		this.$adLis.filter(':eq('+ this.crtIndex +')').css('zIndex', 2);
		this.fnPlay();

		//hover时暂停动画
		this.$ctn.hover(function() {
			me.fnStopPlay();
		}, function() {
			me.fnPlay();
		});

		if($.browser.msie && $.browser.version < 7) {
			this.$btns.hover(function() {
				$(this).addClass('hover');
			},function() {
				$(this).removeClass('hover');
			});
		}
	}
};
var player1 = new glume('_banners', '_focus');    
</script>
 <!--banner轮播图JQ--> 

	<!--main主体-->

	  <!--main第一层div-->
       <div class="main_A">
          <div class="main_Language">
          		<div class="main_li1">
          		   <div class="php_header">
          		   	  <div><h3>后端开发</h3></div>
          		   	  <div><img src="/jyx/trunk/Public/Home/images/main_a.png"/></div>
          		   </div>
          		   <div class="php_footer">
          		      <div class="php_text">
          		      	<p>这是一款神奇的技能，简单而又粗暴、
						 快捷而又实用，互联网开发之利器，当上CEO迎娶白富美，开拓人生之巅峰，
						 还不快快点击加入学习？
						 </p>
          		      </div>
          		      <div class="php_p">
          		      	<p><a href="#">点击收获财富>></a></p>
          		      </div>
          		   </div>
          		</div>

          		<div class="main_li2">
          		    <div class="php_header">
          		   	  <div><h3>前端开发</h3></div>
          		   	  <div><img src="/jyx/trunk/Public/Home/images/main_b.png"/></div>
          		   </div>
          		   <div class="php_footer">
          		      <div class="php_text">
          		      	<p>这是一款神奇的技能，简单而又粗暴、
						 快捷而又实用，互联网开发之利器，当上CEO迎娶白富美，开拓人生之巅峰，
						 还不快快点击加入学习？
						 </p>
          		      </div>
          		      <div class="php_p">
          		      	<p><a href="#">点击收获财富>></a></p>
          		      </div>
          		   </div>
          		</div>
          		<div class="main_li3">
          		    <div class="php_header">
          		   	  <div><h3>移动端开发</h3></div>
          		   	  <div><img src="/jyx/trunk/Public/Home/images/main_c.png"/></div>
          		   </div>
          		   <div class="php_footer">
          		      <div class="php_text">
          		      	<p>这是一款神奇的技能，简单而又粗暴、
						 快捷而又实用，互联网开发之利器，当上CEO迎娶白富美，开拓人生之巅峰，
						 还不快快点击加入学习？
						 </p>
          		      </div>
          		      <div class="php_p">
          		      	<p><a href="#">点击收获财富>></a></p>
          		      </div>
          		   </div>
          		</div>
          		</div>


          </div>
       </div>
      <!--main第一层div结束-->

      <!--main第二层div-->
       <div class="main_Two">
          <div class="main_Twoauto"></div>
       </div>
     <!--main第二层div结束-->

     <!--main第三层div-->
       <div class="main_Three">
          <div class="main_Threeauto"></div>
       </div>
     <!--main第三层div结束-->

     <!--main第四层div-->
       <div class="main_Four">
         <div class="main_Fauto">
           <div class="main_Fourheader">
           	 <!--课程遍历区-->
           	   <ul>
           	   	<li>
           	   		<div class="Four_li">
           	   			<div class="Four_top">
           	   				<a href="#"><img src="/jyx/trunk/Public/Home/images/Fli.jpg"/></a>
           	   			</div>
           	   			<div class="Four_bottom">
           	   				<p class="Four_p1"><a href="#">Hadoop大数据平台架构与实践--基础篇</a></p>
           	   				<p class="Four_p2">2小时前更新 <span>14556人学习</span></p>
           	   			</div>
           	   		</div>
           	   	</li>

           	   	<li>
           	   		<div class="Four_li">
           	   			<div class="Four_top">
           	   				<a href="#"><img src="/jyx/trunk/Public/Home/images/Fli.jpg"/></a>
           	   			</div>
           	   			<div class="Four_bottom">
           	   				<p class="Four_p1"><a href="#">Hadoop大数据平台架构与实践--基础篇</a></p>
           	   				<p class="Four_p2">2小时前更新 <span>14556人学习</span></p>
           	   			</div>
           	   		</div>
           	   	</li>

           	   	<li>
           	   		<div class="Four_li">
           	   			<div class="Four_top">
           	   				<a href="#"><img src="/jyx/trunk/Public/Home/images/Fli.jpg"/></a>
           	   			</div>
           	   			<div class="Four_bottom">
           	   				<p class="Four_p1"><a href="#">Hadoop大数据平台架构与实践--基础篇</a></p>
           	   				<p class="Four_p2">2小时前更新 <span>14556人学习</span></p>
           	   			</div>
           	   		</div>
           	   	</li>

           	   	<li>
           	   		<div class="Four_li">
           	   			<div class="Four_top">
           	   				<a href="#"><img src="/jyx/trunk/Public/Home/images/Fli.jpg"/></a>
           	   			</div>
           	   			<div class="Four_bottom">
           	   				<p class="Four_p1"><a href="#">Hadoop大数据平台架构与实践--基础篇</a></p>
           	   				<p class="Four_p2">2小时前更新 <span>14556人学习</span></p>
           	   			</div>
           	   		</div>
           	   	</li>

           	   	<li>
           	   		<div class="Four_li">
           	   			<div class="Four_top">
           	   				<a href="#"><img src="/jyx/trunk/Public/Home/images/Fli.jpg"/></a>
           	   			</div>
           	   			<div class="Four_bottom">
           	   				<p class="Four_p1"><a href="#">Hadoop大数据平台架构与实践--基础篇</a></p>
           	   				<p class="Four_p2">2小时前更新 <span>14556人学习</span></p>
           	   			</div>
           	   		</div>
           	   	</li>

           	   	<li>
           	   		<div class="Four_li">
           	   			<div class="Four_top">
           	   				<a href="#"><img src="/jyx/trunk/Public/Home/images/Fli.jpg"/></a>
           	   			</div>
           	   			<div class="Four_bottom">
           	   				<p class="Four_p1"><a href="#">Hadoop大数据平台架构与实践--基础篇</a></p>
           	   				<p class="Four_p2">2小时前更新 <span>14556人学习</span></p>
           	   			</div>
           	   		</div>
           	   	</li>

           	   	<li>
           	   		<div class="Four_li">
           	   			<div class="Four_top">
           	   				<a href="#"><img src="/jyx/trunk/Public/Home/images/Fli.jpg"/></a>
           	   			</div>
           	   			<div class="Four_bottom">
           	   				<p class="Four_p1"><a href="#">Hadoop大数据平台架构与实践--基础篇</a></p>
           	   				<p class="Four_p2">2小时前更新 <span>14556人学习</span></p>
           	   			</div>
           	   		</div>
           	   	</li>

           	   	<li>
           	   		<div class="Four_li">
           	   			<div class="Four_top">
           	   				<a href="#"><img src="/jyx/trunk/Public/Home/images/Fli.jpg"/></a>
           	   			</div>
           	   			<div class="Four_bottom">
           	   				<p class="Four_p1"><a href="#">Hadoop大数据平台架构与实践--基础篇</a></p>
           	   				<p class="Four_p2">2小时前更新 <span>14556人学习</span></p>
           	   			</div>
           	   		</div>
           	   	</li>
           	   </ul>
           	  <!--课程遍历区结束-->
           </div>
         </div>
         <div class="main_Fourbottom">
         	<div class="main_Fbauoto">
         		<a href=""><div class="Fbauto_p"></div></a>
         	</div>
         </div>
       </div>
     <!--main第四层div结束-->

     <!--main第五层div-->
       <div class="main_Five">
          <div class="main_Fiveimg">
          	<div class="Fiveimg_text">
          	  <div class="Five_auto">
          		<h3>hello ! my name is libin hu </h3>
          		<p>
          		<a href="#">
          			During the long developing software, interface design work has not been seriously rise. Do interface design also is referred to as the "artist" derogatory. In fact, software interface design like industrial modelling design of industrial products, is an important buy the product. A friendly and beautiful interface can give a person the comfortable visual enjoyment, close the distance between a man and a computer, create a selling point for businesses. 
          		</a>
          		</p>
          	  </div>
          	</div>
          </div>
       </div>
     <!--main第五层div结束-->


	<!--main主体结束-->
﻿<!--友情链接jq-->
	<SCRIPT type=text/javascript src="/jyx/trunk/Public/Home/js/jquery.js"></SCRIPT>
	<SCRIPT type=text/javascript charset=utf-8 src="/jyx/trunk/Public/Home/js/lrscroll.js"></SCRIPT>
	<LINK rel=stylesheet type=text/css href="/jyx/trunk/Public/Home/css/lrtk.css">
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
				  <DIV class=box><A href="#" target="_blank"><IMG alt=Paracletos  src="/jyx/trunk/Public/Home/images/01.png" width=197 height=33> </A></DIV>
				  <!-- /box --></LI>
				  
				  <LI class=featureBox>
				  <DIV class=box><A href="#" target="_blank"><IMG alt="Natural Touch Soap" src="/jyx/trunk/Public/Home/images/02.png" width=197 height=33> </A></DIV>
				  <!-- /box --></LI>
				  
				  <LI class=featureBox>
				  <DIV class=box><A href="#" target="_blank"><IMG alt="LRTK" src="/jyx/trunk/Public/Home/images/03.png" width=197 height=33> </A></DIV>
				  <!-- /box --></LI>
				  
				  <LI class=featureBox>
				  <DIV class=box><A href="#" target="_blank"><IMG alt="Natalie Reid" src="/jyx/trunk/Public/Home/images/04.png" width=197 height=33> </A></DIV>
				  <!-- /box --></LI>
				  
				  <LI class=featureBox>
				  <DIV class=box><A href="#" target="_blank"><IMG alt="xixi" src="/jyx/trunk/Public/Home/images/05.png" width=197 height=33> </A></DIV>
				  <!-- /box --></LI>
				  
				  <LI class=featureBox>
				  <DIV class=box><A href="#" target="_blank"><IMG alt="Catherine Sherwood" src="/jyx/trunk/Public/Home/images/06.png" width=197 height=33> </A></DIV>
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
	          		<li><a href="#"><img src="/jyx/trunk/Public/Home/images/f_a.png"></a></li>
	          		<li><a href="#"><img src="/jyx/trunk/Public/Home/images/f_b.png"></a></li>
	          		<li><a href="#"><img src="/jyx/trunk/Public/Home/images/f_c.png"></a></li>
	          		<li><a href="#"><img src="/jyx/trunk/Public/Home/images/f_d.png"></a></li>
	          		<li><a href="#"><img src="/jyx/trunk/Public/Home/images/f_e.png"></a></li>
	          		<li><a href="#"><img src="/jyx/trunk/Public/Home/images/f_f.png"></a></li>
	          	</ul>
	          </div>
          </div>
        </div>
        <!--页脚内容结束-->
	<!--footer页脚结束-->
</body>
</html>