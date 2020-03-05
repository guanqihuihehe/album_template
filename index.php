<?php
include('session3.php'); // Includes Login Script
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
	<!-- <link href='http://fonts.useso.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'> -->
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
		





/* span {
position: absolute;
bottom: 35%;
left: 50%;
transform: translate(-50%);
display: none;
text-align: center;
color: #000000;
font-family:Montserrat ;
font-size: larger;
font-weight: bolder;
} */
#fh5co-board .item .image-popup:hover img {
    opacity: 1;
}
#fh5co-board .item .animate-box:hover img {
    opacity: .3;
}
.has-feedback .form-control {
    padding-right: 12px;
}


.form-group {
    margin-bottom: 10px;
}
.word  {
position: absolute;
/* bottom: 35%; */
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
display: none;
/* text-align: center; */
color: #000000;
font-family:Montserrat ;
font-size: larger;
font-weight: bolder;
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
	<script>
function showSite()
{
	str=document.getElementById("kua").value;
    if (str=="")
    {
        document.getElementById("txtHint").innerHTML="你还没输入口令";
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
            document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
			if(document.getElementById("txtHint").innerHTML=="口令正确")
			{
				 window.location='black.php';
			}
        }
    }
	var date=new Date();
   var year=date.getFullYear(); //获取当前年份
   var mon=date.getMonth()+1; //获取当前月份
   var da=date.getDate(); //获取当前日
   // var day=date.getDay(); //获取当前星期几
   var h=date.getHours(); //获取小时
   var m=date.getMinutes(); //获取分钟
   var s=date.getSeconds(); //获取秒
   var d=document.getElementById('Date'); 
   if(mon<=9&&mon>=0)
   {
   	   mon='0'+mon;
   }
   if(da<=9&&da>=0)
   {
   	   da='0'+da;
   }
   if(h<=9&&h>=0)
   {
	   h='0'+h;
   }
   if(m<=9&&m>=0)
   {
   	   m='0'+m;
   }
   if(s<=9&&s>=0)
   {
   	   s='0'+s;
   }
   var tim=year+'年'+mon+'月'+da+'日'+' '+h+':'+m+':'+s;
    xmlhttp.open("GET","praise.php?q="+str+"&tim="+tim,true);
	
    xmlhttp.send();
	
}
</script>
	</head>
	<body>
		
	<div id="fh5co-offcanvass">
		<a href="#" class="fh5co-offcanvass-close js-fh5co-offcanvass-close">菜单 <i class="icon-cross"></i> </a>
		<h1 class="fh5co-logo"><a class="navbar-brand" href="managerindex.php">相册模板</a></h1>
		<ul>
			<li class="active"><a href="index.php">封面</a></li>
			<li><a href="#"  data-toggle="modal" data-target="#heizhao">黑照</a></li>
			<li><a href="#"  >视频</a></li>
			<li><a href="loginpage.php">登录</a></li>
		</ul>
		
	<!-- 	<p class="fh5co-social-icons">
			<a href="#"><i class="icon-twitter"></i></a>
			<a href="#"><i class="icon-facebook"></i></a>
			<a href="#"><i class="icon-instagram"></i></a>
			<a href="#"><i class="icon-dribbble"></i></a>
			<a href="#"><i class="icon-youtube"></i></a>
		</p> -->
	</div>
	
	<div class="modal fade" id="heizhao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form  method="post" enctype="multipart/form-data" class="">
				
				<div class="modal-header">
					
					
					<h4 class="modal-title" id="myModalLabel" style="text-align: center;">
						请输入口令
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin: 0;">
							&times;
						</button>
					</h4>
					
				</div>
				
				<div class="modal-body">
					
						
						
						
							
							<div style="text-align: center;">
								
								<br />
	                            
	                            <div style="text-align: center;">
	                                
	                                <input id="kua" name="praise" class="form-control " placeholder="写下你的口令"  type="text">
									
	                            </div>
	
	                            <div id="txtHint" style="color:red;text-align: center;margin-top: 2%;" class="tips"></div>
	                            <!-- <span style="display: none;" class=" glyphicon glyphicon-remove form-control-feedback"></span>
	                            <span style="display: none;" class="glyphicon glyphicon-ok form-control-feedback"></span> -->
	                        </div>
							
						
						
				</div>
				<div class="modal-footer">
					<button type="reset" class="btn btn-sm btn-default" data-dismiss="modal" style="margin-bottom: 0;">
						放弃
					</button>
					
					<button type="reset" class="btn btn-sm btn-info" >
						重置
					</button>
					<div name="submit" onclick="showSite()" class="btn btn-sm btn-primary">
						确认
					</div>
				</div>
				</form>
			</div><!-- /.modal-content -->
			
		</div><!-- /.modal -->
	</div>
	
	
	
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
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
			
			<div id="fh5co-board" data-columns>
				<?php
					
					
					
					$sql='select * from picture order by ptime desc';
					$connection=new mysqli("localhost","guan","gqh123","template_album");
					mysqli_query($connection, "set names utf8");
					$res=mysqli_query($connection,$sql);
					$usernum=mysqli_num_rows($res);
					if($usernum==0)
					{
						echo '
							<div class="no">
								没有符合条件的照片噢，请重新搜索
							</div>
						';
					}
					else
					{
						
						for($i=0;$i<$usernum;$i++)
						{
							$row=mysqli_fetch_assoc($res);
							$str1="'";
							$pa=$str1.$row["path"].$str1;
							echo '
								<div class="item">
									<div class="animate-box">
										<a href="'.$row["path"].'" class="image-popup fh5co-board-img" title="'.$row["story"].'">
											<img src="'.$row["path"].'" >
											<span  class="word" >'.$row["ptime"].'<br/>'.$row["story"].'</span>
											
										</a>
										
									</div>
								</div>
							';
						}
					}
					
				?>
				
				
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

	<script >
		$(function(){
			$('.fh5co-board-img').mouseover(function(){
				$(this).children('span').css('display','block');
			});
			$('.fh5co-board-img').mouseout(function(){
				$(this).children('span').css('display','none');
			});
		})
		
	</script>
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
				// document.getElementById("send1").value="#000000";
				// document.getElementById("send2").value="0.5";
				$('#fh5co-header').find('i').css({"color":"white"});
				$('#fh5co-offcanvass').find('i').css({"color":"white"});
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
					// document.getElementById("send1").value="#f5f6f7";
					// document.getElementById("send2").value="1";
				}
				else if(colorini=="f2dede")
				{
					// chan3();
					$('#co3').addClass("bod");
					// document.getElementById("send1").value="#f2dede";
					// document.getElementById("send2").value="1";
				}
				else if(colorini=="dff0d8")
				{
					// chan4();
					$('#co4').addClass("bod");
					// document.getElementById("send1").value="#dff0d8";
					// document.getElementById("send2").value="1";
				}
				else if(colorini=="fcf8e3")
				{
					// chan5();
					$('#co5').addClass("bod");
					// document.getElementById("send1").value="#fcf8e3";
					// document.getElementById("send2").value="1";
				}
				else if(colorini=="777777")
				{
					// chan6();
					$('#co6').addClass("bod");
					// document.getElementById("send1").value="#777777";
					// document.getElementById("send2").value="1";
					$('#fh5co-header').find('i').css({"color":"white"});
					$('#fh5co-offcanvass').find('i').css({"color":"white"});
					$('.modal').find('i').css({"color":"white"});
					$("label").css({"color":"white"});
					$("#myModalLabel").css({"color":"white"});
				}
				else if(colorini=="333333")
				{
					// chan7();
					$('#co7').addClass("bod");
					// document.getElementById("send1").value="#333333";
					// document.getElementById("send2").value="1";
					$('#fh5co-header').find('i').css({"color":"white"});
					$('#fh5co-offcanvass').find('i').css({"color":"white"});
					$('.modal').find('i').css({"color":"white"});
					$("label").css({"color":"white"});
					$("#myModalLabel").css({"color":"white"});
				}
				else if(colorini=="f8ddd6")
				{
					// chan8();
					$('#co8').addClass("bod");
				
					$('.btn-primary').each(function(i){
						$(this).css('background','#fd0f03');
					});
					$('.fh5co-social-icons').find('a').css('color','#fd0f03');
					$('#fh5co-offcanvass').find('.active').find('a').css("cssText","color:#fd0f03!important;");
					$('.tips').each(function(i){
						$(this).css('color','#fd0f03');
					});
				}
				else if(colorini=="000000")
				{
					// document.getElementById("send1").value=" ";
					// document.getElementById("send2").value=" ";
					// document.getElementById("changeco").value="#"+colorini;
					// document.getElementById("changeco").style.border="1px solid #EF5353";
					$('#fh5co-header').find('i').css({"color":"white"});
					$('#fh5co-offcanvass').find('i').css({"color":"white"});
					$('.modal').find('i').css({"color":"white"});
					$("label").css({"color":"white"});
					$("#myModalLabel").css({"color":"white"});
				}
				else
				{
					// document.getElementById("send1").value=" ";
					// document.getElementById("send2").value=" ";
					// document.getElementById("changeco").value="#"+colorini;
					// document.getElementById("changeco").style.border="1px solid #EF5353";
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
				window.location="changecolor.php?r="+red+"&g="+green+"&b="+blue+"&a="+a+"&hex="+hex;
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
				window.location="changecolor.php?r="+red+"&g="+green+"&b="+blue+"&a="+a+"&hex="+hex;
			}
		}
		
		//各个颜色格的点击函数
		function chan1(){
			document.body.style.background="#f5f6f7";
			document.getElementById("fh5co-offcanvass").style.background="#f5f6f7";
			document.getElementsByClassName("modal-content")[0].style.background="#f5f6f7";
			document.getElementsByClassName("modal-content")[1].style.background="#f5f6f7";
			$('.color').removeClass("bod");
			document.getElementById("changeco").style.border="0";
			$('#co1').addClass("bod");
			document.getElementById("send1").value="#f5f6f7";
			document.getElementById("send2").value="1";
		}
		function chan2(){
			document.body.style.background="rgba(0,0,0,0.5)";
			document.getElementById("fh5co-offcanvass").style.background="rgba(0,0,0,0.5)";
			document.getElementsByClassName("modal-content")[0].style.background="rgba(0,0,0,0.5)";
			document.getElementsByClassName("modal-content")[1].style.background="rgba(0,0,0,0.5)";
			$('.color').removeClass("bod");
			document.getElementById("changeco").style.border="0";
			$('#co2').addClass("bod");
			document.getElementById("send1").value="#000000";
			document.getElementById("send2").value="0.5";
			$('#fh5co-header').find('i').css({"color":"white"});
			$('#fh5co-offcanvass').find('i').css({"color":"white"});
			$('.modal').find('i').css({"color":"white"});
			$("label").css({"color":"white"});
			$("#myModalLabel").css({"color":"white"});
		}
		function chan3(){
			document.body.style.background="#f2dede";
			document.getElementById("fh5co-offcanvass").style.background="#f2dede";
			document.getElementsByClassName("modal-content")[0].style.background="#f2dede";
			document.getElementsByClassName("modal-content")[1].style.background="#f2dede";
			$('.color').removeClass("bod");
			document.getElementById("changeco").style.border="0";
			$('#co3').addClass("bod");
			document.getElementById("send1").value="#f2dede";
			document.getElementById("send2").value="1";
			
		}
		function chan4(){
			document.body.style.background="#dff0d8";
			document.getElementById("fh5co-offcanvass").style.background="#dff0d8";
			document.getElementsByClassName("modal-content")[0].style.background="#dff0d8";
			document.getElementsByClassName("modal-content")[1].style.background="#dff0d8";
			$('.color').removeClass("bod");
			document.getElementById("changeco").style.border="0";
			$('#co4').addClass("bod");
			document.getElementById("send1").value="#dff0d8";
			document.getElementById("send2").value="1";
		}
		function chan5(){
			document.body.style.background="#fcf8e3";
			document.getElementById("fh5co-offcanvass").style.background="#fcf8e3";
			document.getElementsByClassName("modal-content")[0].style.background="#fcf8e3";
			document.getElementsByClassName("modal-content")[1].style.background="#fcf8e3";
			$('.color').removeClass("bod");
			document.getElementById("changeco").style.border="0";
			$('#co5').addClass("bod");
			document.getElementById("send1").value="#fcf8e3";
			document.getElementById("send2").value="1";
		}
		function chan6(){
			document.body.style.background="#777777";
			document.getElementById("fh5co-offcanvass").style.background="#777777";
			document.getElementsByClassName("modal-content")[0].style.background="#777777";
			document.getElementsByClassName("modal-content")[1].style.background="#777777";
			$('.color').removeClass("bod");
			document.getElementById("changeco").style.border="0";
			$('#co6').addClass("bod");
			document.getElementById("send1").value="#777777";
			document.getElementById("send2").value="1";
			$('#fh5co-header').find('i').css({"color":"white"});
			$('#fh5co-offcanvass').find('i').css({"color":"white"});
			$('.modal').find('i').css({"color":"white"});
			$("label").css({"color":"white"});
			$("#myModalLabel").css({"color":"white"});
		}
		function chan7(){
			document.body.style.background="#333333";
			document.getElementById("fh5co-offcanvass").style.background="#333333";
			document.getElementsByClassName("modal-content")[0].style.background="#333333";
			document.getElementsByClassName("modal-content")[1].style.background="#333333";
			$('.color').removeClass("bod");
			document.getElementById("changeco").style.border="0";
			$('#co7').addClass("bod");
			document.getElementById("send1").value="#333333";
			document.getElementById("send2").value="1";
			$('#fh5co-header').find('i').css({"color":"white"});
			$('#fh5co-offcanvass').find('i').css({"color":"white"});
			$('.modal').find('i').css({"color":"white"});
			$("label").css({"color":"white"});
			$("#myModalLabel").css({"color":"white"});
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
			document.getElementsByClassName("modal-content")[0].style.background=x;
			document.getElementsByClassName("modal-content")[1].style.background=x;
			// $(".changeco").addClass("bod");
			 $('.color').removeClass("bod");
			document.getElementById("changeco").style.border="1px solid #EF5353";
			if(x=="#000000")
			{
				
				
					$('#fh5co-header').find('i').css({"color":"white"});
					$('#fh5co-offcanvass').find('i').css({"color":"white"});
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
	
	</body>
</html>
