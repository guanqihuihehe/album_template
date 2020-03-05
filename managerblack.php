
<?php
include('session.php'); // Includes Login Script

//if(isset($_SESSION['login_user'])==0){
//	header("location: loginpage.php");}

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
	
	
	<link href="https://cdn.bootcss.com/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
 
	<link href="css/bootstrap-fileinput.css" rel="stylesheet">
	
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
		





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
.del2 {
            display: flex;
            align-items: center; /*定义body的元素垂直居中*/
            justify-content: center; /*定义body的里的元素水平居中*/
			
        }
.tra {
position: absolute;
/* bottom: 35%; */
top: 50%;
left: 50%;
transform: translate(-50%,-50%);

}
.no {
position: absolute;
/* bottom: 35%; */
top: 30%;
left: 50%;
transform: translate(-50%,-50%);
font-size: x-large;

}
.del {
position: absolute;
bottom: 35%;
top: 100%;
left: 50%;
transform: translate(-50%,-100%);
display: none;
text-align: center;
}
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
.btn.search{
	margin-bottom: 0px;
}
.btn {
    
    margin-bottom: 0px;
    
    
    margin-right: 0px;
}
@media (min-width:768px) {
	#modal1{
		width: 60%;
	}
}
#smin{
	display: none;
}
@media (max-width:768px) {
	#smax{
		display:none ;
	}
	#smin{
		display: block;
	}
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
			<li class="active"><a href="managerblack.php">黑照</a></li>
			<li><a href="#">视频</a></li>
			<li><a href="mine.php">我的</a></li>
			<li><a href="logout.php">退出</a></li>
		</ul>
		
		<div class="fh5co-social-icons">
			<ul>
				<li>
					<a href="#" data-toggle="modal" data-target="#upload">
						<button type="button" class="btn btn-block btn-sm btn-primary" >
							<i class="glyphicon glyphicon-upload"></i>&nbsp;上传
						</button>
						
					</a>
					
				</li>
				<li >
					<form>
						<div id="smax">
							<a  href="#" style="border: 0;">
								<button  type="button"  onclick="showSite()" class="btn btn-block btn-sm btn-primary search">
									<i class="glyphicon glyphicon-search"></i>&nbsp;搜索
								</button>
							</a>
						</div> 
						<div id="smin">
							<a  href="#" style="border: 0;" data-toggle="modal" data-target="#search">
								<button  type="button"  class="btn btn-block btn-sm btn-primary search">
									<i class="glyphicon glyphicon-search"></i>&nbsp;搜索
								</button>
							</a>
						</div>
						
						<div id="smax" style="text-align: center; font-size: small ; margin-top: 10px;"> 
							<i>选择所搜索的日期区间</i>
							<p>
														<div class="row">
							    <div class='col-sm-12'>
							        <div class="form-group">
							            <label>选择最早时间：</label>
							            <!--指定 date标记-->
							            <div class='input-group date' id='datetimepicker1'>
											
							                <input name="time1" id="time1" type='text' class="form-control" />
							                <div class="input-group-addon">
							                    <span class="glyphicon glyphicon-calendar"></span>
							                </div>
							            </div>
							        </div>
							    </div>
							    <div class='col-sm-12'>
							        <div class="form-group">
							            <label>选择最晚时间：</label>
							            <!--指定 date标记-->
							            <div class='input-group date' id='datetimepicker2'>
							                <input name="time2" id="time2" type='text' class="form-control" />
							                <div class="input-group-addon">
							                    <span class="glyphicon glyphicon-calendar"></span>
							                </div>
							            </div>
							        </div>
							    </div>
							</div>
									
													</p>
						</div>
						
					</form>
				</li>
			</ul>
			
			
		</div>
		
		
	</div>
	
	<div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
		<div class="modal-dialog" style="display: flex; align-items: center; justify-content: center;">
			<div class="modal-content" id="modal1" >
				<div class="modal-header" style="display: flex; align-items: center; justify-content: center;">
					<h4 class="modal-title" id="myModalLabel" style="text-align: center;">
						添加新的照片
					</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin: 0;margin-left: auto;">
						&times;
					</button>
				</div>
				<div class="modal-body"  style="text-align: center;">
					
						<div class="card h-100" >
							<div class="card-body" style="display: flex; align-items: center; justify-content: center;" >
								<form action="addblack.php" method="post" enctype="multipart/form-data"  >
								    <div class="form-group" id="uploadForm" enctype='multipart/form-data'>
								        <div ><i>图片预览</i></div>
								        <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
								            <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
								                <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="images/noimage.png" alt="" />
								            </div>
								            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
								            <div >
								                <span class="btn btn-sm btn-info btn-file" style="cursor: pointer;" >
								                    <span class="fileinput-new" style="cursor: pointer;" >选择照片</span>
								                    <span class="fileinput-exists" style="cursor: pointer;" >换一张</span>
								                    <input type="file" name="pic" id="picID" style="cursor: pointer;"  accept="image/gif,image/jpeg,image/x-png"/>
								                </span>
								                <a href="javascript:;" class="btn btn-sm btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
								            </div>
								        </div>
								    </div>
									
									<div style="text-align: center;">
									    <i >照片拍摄时间</i>
									    <div class="form-group">
									        
									        <!--指定 date标记-->
									        <div class='input-group date' id='datetimepicker3'>
									            <input name="ptime" type='text' class="form-control" />
									            <div class="input-group-addon">
									                <span class="glyphicon glyphicon-calendar"></span>
									            </div>
									        </div>
									    </div>
																	
									    <div style="color:red;" class="tips"></div>
									    
									</div>			
									
									<div style="text-align: center;">
									    <i >照片里的故事</i>
									    <div style="text-align: center;">
									        <textarea id="story" name="story" class="form-control" placeholder="写下这个照片背后的故事" maxlength="200" type="text"></textarea>
									        
									    </div>
																	
									    <div style="color:red;" class="tips"></div>
									    
									</div>
									<hr />
									
								    <button type="submit" id="uploadSubmit" class="btn btn-sm btn-primary">上传</button>
								</form>
							</div>
						</div>
					
					
					
				</div>
				<!-- <div class="page-header" style="text-align: center;">
        
        
    </div> -->
			</div><!-- /.modal-content -->
			
		</div><!-- /.modal -->
	</div>
	
	<div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
		<div class="modal-dialog" style="display: flex; align-items: center; justify-content: center;">
			<div class="modal-content" id="modal1" >
				<div class="modal-header" style="display: flex; align-items: center; justify-content: center;">
					<h4 class="modal-title" id="myModalLabel2" style="text-align: center;">
						搜索
					</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin: 0;margin-left: auto;">
						&times;
					</button>
				</div>
				<div class="modal-body"  style="text-align: center;">
					
						<div class="card h-100" >
							<div class="card-body" style="display: flex; align-items: center; justify-content: center;" >
								<form>
									
									<div  style="text-align: center; font-size: small ;"> 
										<i>选择所搜索的日期区间</i>
										
											<div class="row">
										    <div class='col-sm-12'>
										        <div class="form-group">
										            <label>选择最早时间：</label>
										            <!--指定 date标记-->
										            <div class='input-group date' id='datetimepicker4'>
										                <input type='text' id="time4" class="form-control " />
										                <div class="input-group-addon">
										                    <span class="glyphicon glyphicon-calendar"></span>
										                </div>
										            </div>
										        </div>
										    </div>
										    <div class='col-sm-12'>
										        <div class="form-group">
										            <label>选择最晚时间：</label>
										            <!--指定 date标记-->
										            <div class='input-group date' id='datetimepicker5'>
										                <input type='text' id="time5" class="form-control " />
										                <div class="input-group-addon">
										                    <span class="glyphicon glyphicon-calendar"></span>
										                </div>
										            </div>
										        </div>
										    </div>
										</div>
												
																
									</div>
									<hr />
									
									<button type="button" id="searchSubmit" onclick="showSite2()" class="btn btn-sm btn-primary">搜索</button>
								</form>
							</div>
						</div>
					
					
					
				</div>
				<!-- <div class="page-header" style="text-align: center;">
	    
	    
	</div> -->
			</div><!-- /.modal-content -->
			
		</div><!-- /.modal -->
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

        <div id="fh5co-board" data-columns>
			<?php
				
				if(isset($_GET["ptime1"])&&strlen($_GET["ptime1"])>0)
				{
					$time1=$_GET["ptime1"];
					if(isset($_GET["ptime2"])&&strlen($_GET["ptime2"])>0)
					{
						$time2=$_GET["ptime2"];
						$sql="SELECT * FROM `black` WHERE ptime>='$time1'and ptime<='$time2' order by ptime desc";
					}
					else
					{
						$sql="SELECT * FROM `black` WHERE ptime>='$time1' order by ptime desc";
					}
				}
				else
				{
					if(isset($_GET["ptime2"])&&strlen($_GET["ptime2"])>0)
					{
						$time2=$_GET["ptime2"];
						$sql="SELECT * FROM `black` WHERE  ptime<='$time2' order by ptime desc";
					}
					else{
						$sql='select * from black order by ptime desc';
					}
				}
				
				
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
										<img src="'.$row["path"].'">
										<span  class="word" >'.$row["ptime"].'<br/>'.$row["story"].'</span>
										
									</a>
									<div id="dele" style="display: none;"><div  onclick="del('.$pa.')" class="del2"  style="background: rgba(255,0,0,0.7); height:28px; width: 100%;color: #000000;cursor: pointer; "><span  class="glyphicon glyphicon-trash "></span></div></div>
									
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

	<!-- <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script> -->
	<!-- <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
	<script src="https://cdn.bootcss.com/moment.js/2.24.0/moment-with-locales.min.js"></script>
	
	<script src="https://cdn.bootcss.com/bootstrap-datetimepicker/4.17.45/js/bootstrap-datetimepicker.min.js"></script>
	<script src="js/bootstrap-fileinput.js"></script>
		<script >//图片显示相关
		$(function(){
			// $('.fh5co-board-img').mouseover(function(){
			// 	$(this).children('span').css('display','block');
			// 	$(this).next().css('display','block');
			// });
			// $('.fh5co-board-img').mouseout(function(){
			// 	$(this).children('span').css('display','none');
			// 	$(this).next().css('display','none');
			// });
			$('.animate-box').mouseover(function(){
				$(this).children('.fh5co-board-img').children('span').css('display','block');
				$(this).children('div').css('display','block');
			});
			$('.animate-box').mouseout(function(){
				$(this).children('.fh5co-board-img').children('span').css('display','none');
				$(this).children('div').css('display','none');
			});
		})
		
	</script>
	
		<script>//日期选择相关
		
	$(function () {
    var picker1 = $('#datetimepicker1').datetimepicker({
        format: 'YYYY-MM-DD',
        locale: moment.locale('zh-cn'),
        //minDate: '2016-7-1'
    });
    var picker2 = $('#datetimepicker2').datetimepicker({
        format: 'YYYY-MM-DD',
        locale: moment.locale('zh-cn')
    });
	var picker3 = $('#datetimepicker3').datetimepicker({
	    format: 'YYYY-MM-DD',
	    locale: moment.locale('zh-cn')
	});
	var picker4 = $('#datetimepicker4').datetimepicker({
	    format: 'YYYY-MM-DD',
	    locale: moment.locale('zh-cn')
	});
	var picker5 = $('#datetimepicker5').datetimepicker({
	    format: 'YYYY-MM-DD',
	    locale: moment.locale('zh-cn')
	});
    //动态设置最小值
    picker1.on('dp.change', function (e) {
        picker2.data('DateTimePicker').minDate(e.date);
    });
    //动态设置最大值
    picker2.on('dp.change', function (e) {
        picker1.data('DateTimePicker').maxDate(e.date);
    });
	//动态设置最小值
	picker4.on('dp.change', function (e) {
	    picker5.data('DateTimePicker').minDate(e.date);
	});
	//动态设置最大值
	picker5.on('dp.change', function (e) {
	    picker4.data('DateTimePicker').maxDate(e.date);
	});
});
        $('#datetimepicker1').datetimepicker({
            format: 'YYYY-MM-DD',
            locale: moment.locale('zh-cn'),
			<?php
			$sql='select * from black order by ptime ';
			$connection=new mysqli("localhost","guan","gqh123","template_album");
			mysqli_query($connection, "set names utf8");
			$res=mysqli_query($connection,$sql);
			$row=mysqli_fetch_assoc($res);
			
			
				if(isset($_GET["ptime1"]))
				{
					$pt1=$_GET["ptime1"];
					echo 'defaultDate: "'.$pt1.'"';
				}
				else
				{
					echo 'defaultDate: "'.$row["ptime"].'"';
				}
			?>
            
        });
		$('#datetimepicker2').datetimepicker({
		    format: 'YYYY-MM-DD',
		    locale: moment.locale('zh-cn'),
			<?php
			$sql='select * from black order by ptime desc';
			$connection=new mysqli("localhost","guan","gqh123","template_album");
			mysqli_query($connection, "set names utf8");
			$res=mysqli_query($connection,$sql);
			$row=mysqli_fetch_assoc($res);
			
				if(isset($_GET["ptime2"]))
				{
					$pt2=$_GET["ptime2"];
					echo 'defaultDate: "'.$pt2.'"';
				}
				else
				{
					echo 'defaultDate: "'.$row["ptime"].'"';
				}
			?>
		    
		});
		$('#datetimepicker3').datetimepicker({
		    format: 'YYYY-MM-DD',
		    locale: moment.locale('zh-cn'),
		    defaultDate: new Date()
		});
		 $('#datetimepicker4').datetimepicker({
		    format: 'YYYY-MM-DD',
		    locale: moment.locale('zh-cn'),
		    <?php
		    $sql='select * from black order by ptime ';
		    $connection=new mysqli("localhost","guan","gqh123","template_album");
		    mysqli_query($connection, "set names utf8");
		    $res=mysqli_query($connection,$sql);
		    $row=mysqli_fetch_assoc($res);
		    
		    
		    	if(isset($_GET["ptime1"]))
		    	{
		    		$pt1=$_GET["ptime1"];
		    		echo 'defaultDate: "'.$pt1.'"';
		    	}
		    	else
		    	{
		    		echo 'defaultDate: "'.$row["ptime"].'"';
		    	}
		    ?>
		});
		$('#datetimepicker5').datetimepicker({
		    format: 'YYYY-MM-DD',
		    locale: moment.locale('zh-cn'),
		   <?php
		   $sql='select * from black order by ptime desc';
		   $connection=new mysqli("localhost","guan","gqh123","template_album");
		   mysqli_query($connection, "set names utf8");
		   $res=mysqli_query($connection,$sql);
		   $row=mysqli_fetch_assoc($res);
		   
		   	if(isset($_GET["ptime2"]))
		   	{
		   		$pt2=$_GET["ptime2"];
		   		echo 'defaultDate: "'.$pt2.'"';
		   	}
		   	else
		   	{
		   		echo 'defaultDate: "'.$row["ptime"].'"';
		   	}
		   ?>
		});
		function showSite()
		{
			str1=document.getElementById("time1").value;
			str2=document.getElementById("time2").value;
		   
			window.location="managerblack.php?ptime1="+str1+"&ptime2="+str2;
		}
		function showSite2()
		{
			str1=document.getElementById("time4").value;
			str2=document.getElementById("time5").value;
			window.location="managerblack.php?ptime1="+str1+"&ptime2="+str2;
		}
		</script>
		
		<script>//删除相关
		function del(path)
		{
			str1=document.getElementById("time1").value;
			str2=document.getElementById("time2").value;
			if(confirm("确定要删除这张照片吗"))
			{
				window.location="delblack.php?path="+path+"&ptime1="+str1+"&ptime2="+str2;
			}
		}
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
					document.getElementById("send1").value="#000000";
					document.getElementById("send2").value="0.5";
					$('#fh5co-header').find('i').css({"color":"white"});
					$('#fh5co-offcanvass').find('i').css({"color":"white"});
					$('.modal').find('i').css({"color":"white"});
					// $('#search').find('i').css({"color":"white"});
					$("label").css({"color":"white"});
					$("#myModalLabel").css({"color":"white"});
					$("#myModalLabel2").css({"color":"white"});
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
						$('.modal').find('i').css({"color":"white"});
						$("label").css({"color":"white"});
						$("#myModalLabel").css({"color":"white"});
						$("#myModalLabel2").css({"color":"white"});
					}
					else if(colorini=="333333")
					{
						// chan7();
						$('#co7').addClass("bod");
						document.getElementById("send1").value="#333333";
						document.getElementById("send2").value="1";
						$('#fh5co-header').find('i').css({"color":"white"});
						$('#fh5co-offcanvass').find('i').css({"color":"white"});
						$('.modal').find('i').css({"color":"white"});
						$("label").css({"color":"white"});
						$("#myModalLabel").css({"color":"white"});
						$("#myModalLabel2").css({"color":"white"});
					}
					else if(colorini=="f8ddd6")
					{
						// chan5();
						$('#co8').addClass("bod");
						document.getElementById("send1").value="#f8ddd6";
						
						document.getElementById("send2").value="1";
						$('.btn-primary').each(function(i){
							$(this).css('background','#fd0f03');
						});
						
						$('.del2').each(function(i){
							$(this).css('background','#fd0f03');
						});
						$('.fh5co-social-icons').find('a').css('color','#fd0f03');
						$('#fh5co-offcanvass').find('.active').find('a').css("cssText","color:#fd0f03!important;");
					}
					else if(colorini=="000000")
					{
						document.getElementById("send1").value=" ";
						document.getElementById("send2").value=" ";
						document.getElementById("changeco").value="#"+colorini;
						document.getElementById("changeco").style.border="1px solid #EF5353";
						$('#fh5co-header').find('i').css({"color":"white"});
						$('#fh5co-offcanvass').find('i').css({"color":"white"});
						$('.modal').find('i').css({"color":"white"});
						$("label").css({"color":"white"});
						$("#myModalLabel").css({"color":"white"});
						$("#myModalLabel2").css({"color":"white"});
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
				$("#myModalLabel2").css({"color":"white"});
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
				$("#myModalLabel2").css({"color":"white"});
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
				$("#myModalLabel2").css({"color":"white"});
			}
			function chan8(){
				document.body.style.background="#f8ddd6";
				document.getElementById("fh5co-offcanvass").style.background="#f8ddd6";
				document.getElementsByClassName("modal-content")[0].style.background="#f8ddd6";
				document.getElementsByClassName("modal-content")[1].style.background="#f8ddd6";
				$('.color').removeClass("bod");
				document.getElementById("changeco").style.border="0";
				$('#co8').addClass("bod");
				document.getElementById("send1").value="#f8ddd6";
				document.getElementById("send2").value="1";
				$('.btn-primary').each(function(i){
					$(this).css('background','#fd0f03');
				});
				$('.del2').each(function(i){
					$(this).css('background','#fd0f03');
				});
				$('.fh5co-social-icons').find('a').css('color','#fd0f03');
				$('#fh5co-offcanvass').find('.active').find('a').css("cssText","color:#fd0f03!important;");
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
						$("#myModalLabel2").css({"color":"white"});
					
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
