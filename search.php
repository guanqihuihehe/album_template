<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

$time1 = $_GET['time1'];
$time2 = $_GET['time2'];
$connection = new mysqli("localhost", "guan", "gqh123", "template_album");
mysqli_query($connection, "set names utf8");
	if ($connection->connect_errno) {
		echo "Sorry, this website is experiencing problems.";
		echo "Error: Failed to make a MySQL connection, here is why: \n";
   		echo "Errno: " . $connection->connect_errno . "\n";
   		echo "Error: " . $connection->connect_error . "\n";
   		exit;
	}
$query="SELECT * FROM `picture` WHERE ptime>='$time1'and ptime<='$time2' order by ptime ";
$res = $connection->query($query);
if( !$res ){
		
        die('mysql error');
	}
$usernum=mysqli_num_rows($res);

for($i=0;$i<$usernum;$i++)
{
					$row=mysqli_fetch_assoc($res);
					echo '
						<div class="item">
							<div class="animate-box">
								<a href="'.$row["path"].'" class="image-popup fh5co-board-img" >
									<img src="'.$row["path"].'" alt="Free HTML5 Bootstrap template">
									<span  class="word" >'.$row["ptime"].'<br/>'.$row["story"].'</span>
									
								</a>
								<div id="dele" style="display: none;"><div  class="del2" data-toggle="modal" data-target="#Delete"  style="background: rgba(255,0,0,0.7); height:28px; width: 100%;color: #000000;cursor: pointer; "><span  class="glyphicon glyphicon-trash "></span></div></div>
								
							</div>
						</div>
					';
}
	
	// if( mysqli_num_rows($result)<=0 ){
	// 	echo  "No matching record found";
	// }
	
	// for debugging, you can remove this line
	// print_r($rows);

	
	$connection->close();



?>