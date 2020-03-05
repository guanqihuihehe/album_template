
<?php
include('session.php'); // Includes Login Script

// if(!isset($_SESSION['login_user'])){
//     header("location: loginpage.php");
// }
// include('changepw.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>album</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="album_template" />
	<meta name="keywords" content="album_template" />
	<meta name="author" content="" />
	

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" type="image/png" href="favicon.png">
	<link rel="Bookmark" type="image/png" href="favicon.png" >

	<!-- Google Webfonts -->
	<!-- <link href='http://fonts.useso.com/css?family=Roboto:400,300,100,500' rel='stylealbumet' type='text/css'> -->
	<!-- <link href='http://fonts.useso.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> -->
	
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Salvattore -->
	<link rel="stylesheet" href="css/salvattore.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<style>
		.list-group-item.active, .list-group-item.active:hover, .list-group-item.active:focus {
    z-index: 2;
    color: #fff;
	margin-bottom: -1px;
    background-color: rgba(204,204,204,0.3);
    border-color: #f5f5f5;
	border: 1px solid #ddd;
	}
	.list-group-item {
    position: relative;
    display: block;
    padding: 0px 0px;
    margin-bottom: 0px;
    background-color: #fff;
    border: 1px solid #ddd;
}
		@media (min-width:768px)
		{
			
			.col-lg-3.leftside{
				margin-right: 0;
				padding-right: 0;
				border-right: none;
				border-radius: 0px;
			}
			.col-lg-9.rightside{
				margin-left: 0;
				padding-left: 0;
			}
			.list-group-item{
				
				border-right: none;
				border-radius: 0px;
			}
			.list-group-item.active{
				border-right: none;
				border-radius: 0px;
			}
			
		}
		@media (max-width:768px)
		{
			
		}
		#rightside{
			background-color: rgba(204,204,204,0.3);
		}
		.nav-stacked > li + li {
			margin-top: 0px;
			margin-left: 0;
		}
		.mid {
position: absolute;
/* bottom: 35%; */
top: 50%;
left: 50%;
transform: translate(-50%,-50%);

}
.right{
			display: flex;
            align-items: center; /*定义body的元素垂直居中*/
            justify-content: flex-end; /*定义body的里的元素水平居中*/
}
.mid2 {
            display: flex;
            align-items: center; /*定义body的元素垂直居中*/
            justify-content: center; /*定义body的里的元素水平居中*/
			
        }
		.card{
			border: 1px solid #000000;
			border-radius: 10px;
			background-color: #eeeeee;
		}
		hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid white;
}

/* 用于背景颜色设置------------------------------------------------------------------ */
#fh5co-offcanvass {
    <?php
    	$sql='select * from bgnow ';
    	$connection=new mysqli("localhost","guan","gqh123","template_album");
    	mysqli_query($connection, "set names utf8");
    	$res=mysqli_query($connection,$sql);
    	$row=mysqli_fetch_assoc($res);
    	echo 'background: rgba(';
		echo $row['r'];
		echo ',';
		echo $row['g'];
		echo ',';
		echo $row['b'];
		echo ',';
		echo $row['a'];
		echo ');';
    ?>
}
body {
    
    <?php
    	$sql='select * from bgnow ';
    	$connection=new mysqli("localhost","guan","gqh123","template_album");
    	mysqli_query($connection, "set names utf8");
    	$res=mysqli_query($connection,$sql);
    	$row=mysqli_fetch_assoc($res);
    	echo 'background: rgba(';
    	echo $row['r'];
    	echo ',';
    	echo $row['g'];
    	echo ',';
    	echo $row['b'];
    	echo ',';
    	echo $row['a'];
    	echo ');';
    ?>
}
.modal-content {
    
    <?php
    	$sql='select * from bgnow ';
    	$connection=new mysqli("localhost","guan","gqh123","template_album");
    	mysqli_query($connection, "set names utf8");
    	$res=mysqli_query($connection,$sql);
    	$row=mysqli_fetch_assoc($res);
    	echo 'background: rgba(';
    	echo $row['r'];
    	echo ',';
    	echo $row['g'];
    	echo ',';
    	echo $row['b'];
    	echo ',';
    	echo $row['a'];
    	echo ');';
    ?>
   
}
.changecolor {
    font-size: 15px;
    letter-spacing: 1px;
    text-transform: uppercase;
    float: left;
    margin-top: 16px;
    font-family: "Montserrat", arial, sans-serif;
    color: #444;
}
.changecolor:hover, .changecolor:focus, .changecolor:active {
    outline: none;
    text-decoration: none;
    color: #777777;
}
.tan {
    position: absolute;
    float: left;
    margin-top: -25px;
	margin-left: 70px;
	display: none;
	z-index: 1000;
	/* min-width: 160px; */
	padding-left: 10px ;
	padding-right: 10px ;
	padding-top: 2px;
	padding-bottom: 2px;
	/* margin: 2px 0 0; */
	list-style: none;
	/* font-size: 14px; */
	text-align: left;
	/* background-color: #000000; */
	<?php
		$sql='select * from bgnow ';
		$connection=new mysqli("localhost","guan","gqh123","template_album");
		mysqli_query($connection, "set names utf8");
		$res=mysqli_query($connection,$sql);
		$row=mysqli_fetch_assoc($res);
		echo 'background-color: rgba(';
		echo $row['r'];
		echo ',';
		echo $row['g'];
		echo ',';
		echo $row['b'];
		echo ',';
		echo 0.5;
		echo ');';
	?>
	
	border: 1px solid #ccc;
	border: 1px solid rgba(0, 0, 0, 0.15);
	border-radius: 4px;
	-webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
	box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
	background-clip: padding-box;
}
.color{
	width: 10px;
	height: 10px; 
	display: inline-block; 
	
	/* border-radius: 4px; */
	cursor: pointer;
}
input[type="color" i] {
    /* -webkit-appearance: square-button; */
    width: 20px;
    height: 10px;
	background: none;
    /* background-color:buttonface; */
    cursor: pointer;
	/* border: 1px solid #EF5353; */
	border: 0;
    /* border-width: 0px; */
    /* border-style: solid; */
    /* border-color: rgb(169, 169, 169); */
    /* border-image: initial; */
    padding: 0;
}
		
        
        input[type="color"]::-webkit-color-swatch-wrapper {
            padding: 0;
        }
        input[type="color"]::-webkit-color-swatch {
            border: 0;
        }

.bod{
	border: 1px solid #EF5353;
}

#fh5co-offcanvass ul li a {
    color: rgba(0, 0, 0, 0.5);
}
/* 用于背景颜色设置------------------------------------------------------------------ */
	</style>
	
	</head>
	<body>
		
	<div id="fh5co-offcanvass">
		<a href="#" class="fh5co-offcanvass-close js-fh5co-offcanvass-close">菜单 <i class="icon-cross"></i> </a>
		<h1 class="fh5co-logo"><a class="navbar-brand" href="managerindex.php">相册模板</a></h1>
		<ul>
			<li ><a href="managerindex.php">封面</a></li>
			<li ><a href="managerblack.php">黑照</a></li>
			<li><a href="#">视频</a></li>
			<li class="active"><a href="mine.php">我的</a></li>
			<li><a href="logout.php">退出</a></li>
		</ul>
		
	<!-- 	<p class="fh5co-social-icons">
			<a href="#"><i class="icon-twitter"></i></a>
			<a href="#"><i class="icon-facebook"></i></a>
			<a href="#"><i class="icon-instagram"></i></a>
			<a href="#"><i class="icon-dribbble"></i></a>
			<a href="#"><i class="icon-youtube"></i></a>
		</p> -->
	</div>
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="#" class="changecolor " id="tan2" onclick="showtan()">更换皮肤 </a>
					<div href="#" id="tan" class="tan ">
						<div >
							<form >
								<div style="font-size: smaller;padding: 0;margin: 0;" >
									推荐皮肤
								</div>
								<div style="font-size: smaller;padding: 0;margin: 0;" >
									
									<div class="color "  id="co2" style="background: rgba(0,0,0,0.5);" title="半透明" onclick="chan2()">
										
									</div>
									
									<div class="color"  id="co3" style="background: #f2dede;" title="春华" onclick="chan3()">
										
									</div>
									<div class="color"  id="co4" style="background: #dff0d8;" title="夏盛" onclick="chan4()">
										
									</div>
									<div class="color" id="co5" style="background:#fcf8e3;" title="秋实"   onclick="chan5()">
										
									</div>
									<div class="color " id="co1"  style="background: #f5f6f7;" title="冬雪" onclick="chan1()">
										
									</div>
									<div class="color" id="co6" style="background:#666666;"  title="小灰灰"  onclick="chan6()">
										
									</div>
									
									<div class="color" id="co7" style="background:#333333;"  title="黑夜主题"  onclick="chan7()">
										
									</div>
									<div class="color" id="co8" style="background:#f8ddd6;" title="白凤九主题" onclick="chan8()">
										
									</div>
								</div>
								<input style="display: none;" id="send1" />
								<input style="display: none;" id="send2" />
								<hr style="margin: 0;"/>
								<div style="font-size: smaller;padding: 0;margin: 0;" >
									自选皮肤
								</div>
								<div style="font-size: smaller;padding: 0;margin: 0;" >
									
									<input class="color" id="changeco" type="color" onchange="changecol()" onclick="changecol()" />
									
								</div>
								
								<hr style="margin: 0;"/>
								<button class="btn btn-primary btn-xs" type="button" onclick="subm()">确定</button>
							</form>
							
						</div>
						
					</div>
					<a href="#" class="fh5co-menu-btn js-fh5co-menu-btn">菜单<i class="icon-menu"></i></a>
					<a class="navbar-brand" href="managerindex.php">相册模板</a>			
				</div>
			</div>
		</div>
	</header>
	<!-- END .header -->
	
	
	<div id="fh5co-main">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-lg-3  col-sm-3 col-xs-12 leftside" style="">
					<ul class="nav nav-stacked list-group" id="list-tab" role="tablist">
						<li role="presentation" class="active list-group-item high-light" ><a href="#kua" role="tab" data-toggle="tab" style="" > 别人夸我</a></li>
					  <li role="presentation" class="list-group-item "><a href="#pw" role="tab" data-toggle="tab"  >修改密码</a></li>
					  <li role="presentation" class="list-group-item " ><a href="#com" role="tab" data-toggle="tab" >修改口令</a></li>
					  
					</ul>
				</div>
				
				<div  class="col-md-9 col-lg-9  col-sm-9 col-xs-12 rightside" >
					<div>
						<div id="rightside" class="tab-content">
							
							<div role="tabpanel" class="tab-pane  active " id="kua">
								<div class="row mid2">
									<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12" style="">
										
										<br /><br />
										<div class="fh5co-pricing-table" id="praiseform" style="border:none;">
											
											
										</div>
										
									</div>
															
								</div>
							</div>
							
							<div role="tabpanel" class="tab-pane   " id="pw">
								<div class="row mid2">
									<div class="col-md-4 ">
										<!-- <h2 style="text-align: center;">登录</h2> -->
										<br /><br />
										<div class="fh5co-pricing-table">
											
											<form action="" class="" method="post">
											    
											    <div style="text-align: center;">
											        <label >输入原来的密码</label>
											        <div style="text-align: center;">
											            
											            <input type="password" id="password1" name="password1" class="form-control" placeholder="" maxlength="20" >
											        </div>
											
											        <div style="color:red;" id="tip1" class="tips"></div>
											        
											    </div>
											
											    <div style="text-align: center;">
											        <label >输入新的密码</label>
											        <div style="text-align: center;">
											            
											            <input type="password" id="password2" name="password2" class="form-control" placeholder="" maxlength="20" >
											        </div>
											
											        <div style="color:red;" id="tip2" class="tips"></div>
											        
											    </div>
											
											    <div class="form-group"  style="margin-top:10% ;">
											        <button name="submit1" id="submit1" type="button" onclick="showSite1()" class="btn btn-block btn-sm btn-primary">确认</button>
													<button   type="reset" class="btn btn-block btn-sm btn-default">重置</button>
											    </div>
											
											</form>
											
										</div>
									</div>
							
								</div>
							</div>
							
							
							<div role="tabpanel" class="tab-pane   " id="com">
								<div class="row mid2">
									<div class="col-md-4 ">
										<!-- <h2 style="text-align: center;">登录</h2> -->
										<br /><br />
										<div class="fh5co-pricing-table">
											
											<form action="" class="" method="post">
											    
											    <div style="text-align: center;">
											        <label >现在的黑照页口令</label>
											        <div style="text-align: center;">
														<p style="color: #ef5353; font-size: x-large; margin: 5% 0 5% 0;" class="tips">
															<?php 
																$connection = new mysqli("localhost", "guan", "gqh123", "template_album");
																mysqli_query($connection, "set names utf8");
																$sql="select * from kua ";
																$res=mysqli_query($connection,$sql);
																$row=mysqli_fetch_assoc($res);
																echo $row["item"];
															?>
															</p>
											        </div>
													
											    </div>
											
											    <div style="text-align: center;">
											        <label >更改为新的口令</label>
											        <div style="text-align: center;">
											            
											            <input type="text" id="password3" name="password3" class="form-control" placeholder="" maxlength="20" >
											        </div>
											
											        <div style="color:red;" id="tip3" class="tips"></div>
											        
											    </div>
											
											    <div class="form-group"  style="margin-top:10% ;">
											        <button name="submit2" id="submit2" type="button" onclick="showSite2()" class="btn btn-block btn-sm btn-primary">确认</button>
													<button  type="reset" class="btn btn-block btn-sm btn-default">重置</button>
											    </div>
											
											</form>
											
										</div>
									</div>
									
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
				
			</div>			
						
							
						
		</div>	
	</div>

	<footer id="fh5co-footer">
		
		<div class="container">
			<div class="row row-padded">
				<div class="col-md-12 text-center">
					<p class="fh5co-social-icons">
						<a href="#"><i title="眼前" class="icon-eye"></i></a>
						<a href="#"><i title="人" class="icon-user"></i></a>
						<a href="#"><i title="是" class="icon-arrow-right"></i></a>
						<a href="#"><i title="心上" class="icon-heart"></i></a>
						<a href="#"><i title="人" class="icon-user"></i></a>
					</p>
					<p><small>&copy; gqh All Rights Reserved.</small> </p>
				</div>
			</div>
		</div>
	</footer>


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Salvattore -->
	<script src="js/salvattore.min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>
	
	
	<script>//背景颜色选择相关
		$(document).ready(function(){//提交后再echo后设置颜色格锁定和具体样式
		
			<?php
				$sql='select * from bgnow ';
				$connection=new mysqli("localhost","guan","gqh123","template_album");
				mysqli_query($connection, "set names utf8");
				$res=mysqli_query($connection,$sql);
				$row=mysqli_fetch_assoc($res);
				echo "var colorini='";
				echo $row['hex'];
				echo "';";
				echo "var aini=";
				echo $row['a'];
				echo ";";
			?>
			if(aini!=1)
			{
				// chan2();
				$('#co2').addClass("bod");
				document.getElementById("send1").value="#000000";
				document.getElementById("send2").value="0.5";
				$('#fh5co-header').find('i').css({"color":"white"});
				$('#fh5co-offcanvass').find('i').css({"color":"white"});
				$('#fh5co-main').find('i').css({"color":"white"});
				$('.modal').find('i').css({"color":"white"});
				$("label").css({"color":"white"});
				$("#myModalLabel").css({"color":"white"});
			}
			else
			{
				if(colorini=="f5f6f7")
				{
					// chan1();
					$('#co1').addClass("bod");
					document.getElementById("send1").value="#f5f6f7";
					document.getElementById("send2").value="1";
				}
				else if(colorini=="f2dede")
				{
					// chan3();
					$('#co3').addClass("bod");
					document.getElementById("send1").value="#f2dede";
					document.getElementById("send2").value="1";
				}
				else if(colorini=="dff0d8")
				{
					// chan4();
					$('#co4').addClass("bod");
					document.getElementById("send1").value="#dff0d8";
					document.getElementById("send2").value="1";
				}
				else if(colorini=="fcf8e3")
				{
					// chan5();
					$('#co5').addClass("bod");
					document.getElementById("send1").value="#fcf8e3";
					document.getElementById("send2").value="1";
				}
				else if(colorini=="777777")
				{
					// chan6();
					$('#co6').addClass("bod");
					document.getElementById("send1").value="#777777";
					document.getElementById("send2").value="1";
					$('#fh5co-header').find('i').css({"color":"white"});
					$('#fh5co-offcanvass').find('i').css({"color":"white"});
					$('#fh5co-main').find('i').css({"color":"white"});
					$('.modal').find('i').css({"color":"white"});
					$("label").css({"color":"white"});
					$("#myModalLabel").css({"color":"white"});
				}
				else if(colorini=="333333")
				{
					// chan7();
					$('#co7').addClass("bod");
					document.getElementById("send1").value="#333333";
					document.getElementById("send2").value="1";
					$('#fh5co-header').find('i').css({"color":"white"});
					$('#fh5co-offcanvass').find('i').css({"color":"white"});
					$('#fh5co-main').find('i').css({"color":"white"});
					$('.modal').find('i').css({"color":"white"});
					$("label").css({"color":"white"});
					$("#myModalLabel").css({"color":"white"});
				}
				else if(colorini=="f8ddd6")
				{
					// chan8();
					$('#co8').addClass("bod");
					document.getElementById("send1").value="#f8ddd6";
					
					document.getElementById("send2").value="1";
					$('.btn-primary').each(function(i){
						$(this).css('background','#fd0f03');
					});
					
					$('.fh5co-social-icons').find('a').css('color','#fd0f03');
					$('#fh5co-offcanvass').find('.active').find('a').css("cssText","color:#fd0f03!important;");
					$('.nav-stacked').find('a').css('color','#fd0f03');
					$('.pagination').find('li').find('a').css('color','#fd0f03');
					$('.pagination').find('.disabled').find('a').css('color','#777777');
					$('.pagination').find('.active').find('a').css('background-color','#fd0f03');
					$('.tips').each(function(i){
						$(this).css('color','#fd0f03');
					});
				}
				else if(colorini=="000000")
				{
					document.getElementById("send1").value=" ";
					document.getElementById("send2").value=" ";
					document.getElementById("changeco").value="#"+colorini;
					document.getElementById("changeco").style.border="1px solid #EF5353";
					$('#fh5co-header').find('i').css({"color":"white"});
					$('#fh5co-offcanvass').find('i').css({"color":"white"});
					$('#fh5co-main').find('i').css({"color":"white"});
					$('.modal').find('i').css({"color":"white"});
					$("label").css({"color":"white"});
					$("#myModalLabel").css({"color":"white"});
				}
				else
				{
					document.getElementById("send1").value=" ";
					document.getElementById("send2").value=" ";
					document.getElementById("changeco").value="#"+colorini;
					document.getElementById("changeco").style.border="1px solid #EF5353";
				}
			}
			
		});
		
		$(document).bind("click",function(e){//点击空白处弹窗消失
			var target  = $(e.target);    //e.target获取触发事件的元素
			//从触发事件的元素向上找父元素  判断点击的部分是否是父元素或者本身  如果长度为0 说明点击的是空白不相关部分
			if(target.closest("#tan").length == 0&&target.closest("#tan2").length == 0){
				// $("#tan").hide();
				$("#tan").css('display','none');
			};
			//额外事件
			var xxxcol=document.getElementById("send1").value;
			if(xxxcol=="#f8ddd6")
			{
				$('.pagination').find('li').find('a').css('color','#fd0f03');
				$('.pagination').find('.active').find('a').css('background-color','#fd0f03');
				$('.pagination').find('.active').find('a').css('color','#fff');
				$('.pagination').find('.disabled').find('a').css('color','#777777');
				$('tips').css('color','#fd0f03');
			}
		});
		function hexToRgba(hex, opacity) {
			var RGBA = "rgba(" + parseInt("0x" + hex.slice(1, 3)) + "," + parseInt("0x" + hex.slice(3, 5)) + "," + parseInt( "0x" + hex.slice(5, 7)) + "," + opacity + ")";
			return {
				red: parseInt("0x" + hex.slice(1, 3)),
				green: parseInt("0x" + hex.slice(3, 5)),
				blue: parseInt("0x" + hex.slice(5, 7)),
				rgba: RGBA
			}
		}
		//hex转成rgba: hexToRgba("#cccccc", 1); // 第一个参数为hex色值，第二个参数为透明度，返回对象
		
		function colorRGB2Hex(color) {
		    var rgb = color.split(',');
		    var r = parseInt(rgb[0].split('(')[1]);
		    var g = parseInt(rgb[1]);
		    var b = parseInt(rgb[2].split(')')[0]);
		
		    var hex = "#" + ((1 << 24) + (r << 16) + (g << 8) + b).toString(16).slice(1);
		    return hex;
		}
		//rgb色转成hex : colorRGB2Hex(“rgb(255,255,255)”); 返回hex值 如#cccccc
		
		function subm(){//提交颜色的函数
			var x1=document.getElementById("send1").value;
			var a=document.getElementById("send2").value;
			// console.log(x1);
			// console.log(a);
			var hex = document.getElementById("changeco").value;
			// console.log(hex);
			if(x1==' ')
			{
				
				var red=parseInt("0x" + hex.slice(1, 3));
				var green=parseInt("0x" + hex.slice(3, 5));
				var blue=parseInt("0x" + hex.slice(5, 7));
				var a=1;
				//hex转成rgba
				console.log("第一的");
				console.log(hex);
				console.log(red);
				console.log(green);
				console.log(blue);
				console.log(a);
				hex=hex.substring(hex.length-6);
				window.location="changecolormine.php?r="+red+"&g="+green+"&b="+blue+"&a="+a+"&hex="+hex;
			}
			else
			{
				hex=x1;
				
				var red=parseInt("0x" + hex.slice(1, 3));
				var green=parseInt("0x" + hex.slice(3, 5));
				var blue=parseInt("0x" + hex.slice(5, 7));
				console.log("第二的");
				console.log(hex);
				console.log(red);
				console.log(green);
				console.log(blue);
				console.log(a);
				hex=hex.substring(hex.length-6);
				window.location="changecolormine.php?r="+red+"&g="+green+"&b="+blue+"&a="+a+"&hex="+hex;
			}
		}
		
		//各个颜色格的点击函数
		function chan1(){
			document.body.style.background="#f5f6f7";
			document.getElementById("fh5co-offcanvass").style.background="#f5f6f7";
			// document.getElementsByClassName("modal-content")[0].style.background="#f5f6f7";
			// document.getElementsByClassName("modal-content")[1].style.background="#f5f6f7";
			$('.color').removeClass("bod");
			document.getElementById("changeco").style.border="0";
			$('#co1').addClass("bod");
			document.getElementById("send1").value="#f5f6f7";
			$('#fh5co-main').find('i').css({"color":"#818892"});
			document.getElementById("send2").value="1";
		}
		function chan2(){
			document.body.style.background="rgba(0,0,0,0.5)";
			document.getElementById("fh5co-offcanvass").style.background="rgba(0,0,0,0.5)";
			// document.getElementsByClassName("modal-content")[0].style.background="rgba(0,0,0,0.5)";
			// document.getElementsByClassName("modal-content")[1].style.background="rgba(0,0,0,0.5)";
			$('.color').removeClass("bod");
			document.getElementById("changeco").style.border="0";
			$('#co2').addClass("bod");
			document.getElementById("send1").value="#000000";
			document.getElementById("send2").value="0.5";
			$('#fh5co-header').find('i').css({"color":"white"});
			$('#fh5co-offcanvass').find('i').css({"color":"white"});
			$('#fh5co-main').find('i').css({"color":"white"});
			$('.modal').find('i').css({"color":"white"});
			$("label").css({"color":"white"});
			$("#myModalLabel").css({"color":"white"});
		}
		function chan3(){
			document.body.style.background="#f2dede";
			document.getElementById("fh5co-offcanvass").style.background="#f2dede";
			// document.getElementsByClassName("modal-content")[0].style.background="#f2dede";
			// document.getElementsByClassName("modal-content")[1].style.background="#f2dede";
			$('.color').removeClass("bod");
			document.getElementById("changeco").style.border="0";
			$('#co3').addClass("bod");
			$('#fh5co-main').find('i').css({"color":"#818892"});
			document.getElementById("send1").value="#f2dede";
			document.getElementById("send2").value="1";
			
		}
		function chan4(){
			document.body.style.background="#dff0d8";
			document.getElementById("fh5co-offcanvass").style.background="#dff0d8";
			// document.getElementsByClassName("modal-content")[0].style.background="#dff0d8";
			// document.getElementsByClassName("modal-content")[1].style.background="#dff0d8";
			$('.color').removeClass("bod");
			document.getElementById("changeco").style.border="0";
			$('#co4').addClass("bod");
			document.getElementById("send1").value="#dff0d8";
			$('#fh5co-main').find('i').css({"color":"#818892"});
			document.getElementById("send2").value="1";
		}
		function chan5(){
			document.body.style.background="#fcf8e3";
			document.getElementById("fh5co-offcanvass").style.background="#fcf8e3";
			// document.getElementsByClassName("modal-content")[0].style.background="#fcf8e3";
			// document.getElementsByClassName("modal-content")[1].style.background="#fcf8e3";
			$('.color').removeClass("bod");
			document.getElementById("changeco").style.border="0";
			$('#co5').addClass("bod");
			document.getElementById("send1").value="#fcf8e3";
			$('#fh5co-main').find('i').css({"color":"#818892"});
			document.getElementById("send2").value="1";
		}
		function chan6(){
			document.body.style.background="#777777";
			document.getElementById("fh5co-offcanvass").style.background="#777777";
			// document.getElementsByClassName("modal-content")[0].style.background="#777777";
			// document.getElementsByClassName("modal-content")[1].style.background="#777777";
			$('.color').removeClass("bod");
			document.getElementById("changeco").style.border="0";
			$('#co6').addClass("bod");
			document.getElementById("send1").value="#777777";
			document.getElementById("send2").value="1";
			$('#fh5co-header').find('i').css({"color":"white"});
			$('#fh5co-offcanvass').find('i').css({"color":"white"});
			$('#fh5co-main').find('i').css({"color":"white"});
			$('.modal').find('i').css({"color":"white"});
			$("label").css({"color":"white"});
			$("#myModalLabel").css({"color":"white"});
		}
		function chan7(){
			document.body.style.background="#333333";
			document.getElementById("fh5co-offcanvass").style.background="#333333";
			// document.getElementsByClassName("modal-content")[0].style.background="#333333";
			// document.getElementsByClassName("modal-content")[1].style.background="#333333";
			$('.color').removeClass("bod");
			document.getElementById("changeco").style.border="0";
			$('#co7').addClass("bod");
			document.getElementById("send1").value="#333333";
			document.getElementById("send2").value="1";
			$('#fh5co-header').find('i').css({"color":"white"});
			$('#fh5co-offcanvass').find('i').css({"color":"white"});
			$('#fh5co-main').find('i').css({"color":"white"});
			$('.modal').find('i').css({"color":"white"});
			$("label").css({"color":"white"});
			$("#myModalLabel").css({"color":"white"});
		}
		function chan8(){
			document.body.style.background="#f8ddd6";
			document.getElementById("fh5co-offcanvass").style.background="#f8ddd6";
			// document.getElementsByClassName("modal-content")[0].style.background="#f8ddd6";
			// document.getElementsByClassName("modal-content")[1].style.background="#f8ddd6";
			$('.color').removeClass("bod");
			document.getElementById("changeco").style.border="0";
			$('#co8').addClass("bod");
			document.getElementById("send1").value="#f8ddd6";
			document.getElementById("send2").value="1";
			$('.btn-primary').each(function(i){
				$(this).css('background','#fd0f03');
			});
			
			$('.fh5co-social-icons').find('a').css('color','#fd0f03');
			$('#fh5co-offcanvass').find('.active').find('a').css("cssText","color:#fd0f03!important;");
			$('.nav-stacked').find('a').css('color','#fd0f03');
			$('.pagination').find('li').find('a').css('color','#fd0f03');
			$('.pagination').find('.disabled').find('a').css('color','#777777');
			$('.pagination').find('.active').find('a').css('background-color','#fd0f03');
			$('tips').css('color','#fd0f03');
		}
		//颜色输入框点击函数
		function changecol(){
			var strc="";
			// strc=$("#changec").val();
			var x = document.getElementById("changeco").value;
			document.getElementById("send1").value=" ";
			document.getElementById("send2").value=" ";
			// alert("aa");
			// console.log(strc);
			console.log(x);
			document.body.style.background=x;
			document.getElementById("fh5co-offcanvass").style.background=x;
			// document.getElementsByClassName("modal-content")[0].style.background=x;
			// document.getElementsByClassName("modal-content")[1].style.background=x;
			// $(".changeco").addClass("bod");
			 $('.color').removeClass("bod");
			document.getElementById("changeco").style.border="1px solid #EF5353";
			if(x=="#000000")
			{
				
				
					$('#fh5co-header').find('i').css({"color":"white"});
					$('#fh5co-offcanvass').find('i').css({"color":"white"});
					$('#fh5co-main').find('i').css({"color":"white"});
					$('.modal').find('i').css({"color":"white"});
					$("label").css({"color":"white"});
					$("#myModalLabel").css({"color":"white"});
				
			}
			// addClass(document.getElementById("changeco"),'bod');
			// removeClass(document.getElementById("changeco"),'bod');
		}
		
		//弹窗显示和消失函数
		function showtan(){
			$('.tan').toggle();
		}
		
	</script>
	<script>//密码和口令检验的ajax
	
	function showSite1()
	{
		str1=document.getElementById("password1").value;
		str2=document.getElementById("password2").value;
	    if (str1=="")
	    {
	        document.getElementById("tip1").innerHTML="原密码不能为空";
	        return;
	    }
		if (str2=="")
		{
		     document.getElementById("tip2").innerHTML="新密码不能为空";
		     return;
		} 
	    if (window.XMLHttpRequest)
	    {
	        // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
	        xmlhttp=new XMLHttpRequest();
	    }
	    else
	    {
	        // IE6, IE5 浏览器执行代码
	        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	    }
	    xmlhttp.onreadystatechange=function()
	    {
	        if (xmlhttp.readyState==4 && xmlhttp.status==200)
	        {
	            document.getElementById("tip1").innerHTML=xmlhttp.responseText;
				document.getElementById("tip2").innerHTML=xmlhttp.responseText;
				if(document.getElementById("tip1").innerHTML=="修改密码成功")
				{
					 window.location='mine.php';
				}
	        }
	    }
	    xmlhttp.open("GET","changepw.php?password1="+str1+"&password2="+str2,true);
		
	    xmlhttp.send();
		
	}
	function showSite2()
	{
		str3=document.getElementById("password3").value;
		
	    if (str3=="")
	    {
	        document.getElementById("tip3").innerHTML="口令不能为空";
	        return;
	    }
		
	    if (window.XMLHttpRequest)
	    {
	        // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
	        xmlhttp=new XMLHttpRequest();
	    }
	    else
	    {
	        // IE6, IE5 浏览器执行代码
	        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	    }
	    xmlhttp.onreadystatechange=function()
	    {
	        if (xmlhttp.readyState==4 && xmlhttp.status==200)
	        {
	            document.getElementById("tip3").innerHTML=xmlhttp.responseText;
			
				if(document.getElementById("tip3").innerHTML=="修改口令成功")
				{
					 window.location='mine.php';
				}
	        }
	    }
	    xmlhttp.open("GET","changecom.php?password3="+str3,true);
		
	    xmlhttp.send();
		
	}
	
	</script>
	<script>//显示夸赞和翻页的Ajax
		function showSite3(page)
		{
			
			console.log(page);
		    if (window.XMLHttpRequest)
		    {
		        // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
		        xmlhttp=new XMLHttpRequest();
		    }
		    else
		    {
		        // IE6, IE5 浏览器执行代码
		        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		    }
		    xmlhttp.onreadystatechange=function()
		    {
		        if (xmlhttp.readyState==4 && xmlhttp.status==200)
		        {
		            document.getElementById("praiseform").innerHTML=xmlhttp.responseText;
					
		        }
		    }
		    xmlhttp.open("GET","show.php?page="+page,true);
			
		    xmlhttp.send();
			
		}
		$(document).ready(function(){
			// var page=$(this).val();
			if (window.XMLHttpRequest)
			{
			    // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
			    xmlhttp=new XMLHttpRequest();
			}
			else
			{
			    // IE6, IE5 浏览器执行代码
			    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function()
			{
			    if (xmlhttp.readyState==4 && xmlhttp.status==200)
			    {
			        document.getElementById("praiseform").innerHTML=xmlhttp.responseText;
					
			    }
			}
			xmlhttp.open("GET","show.php?page="+1,true);
			
			xmlhttp.send();
			
		});
	</script>
	</body>
</html>
