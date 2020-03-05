<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

$praise = $_GET['q'];
$times=$_GET['tim'];
$connection = new mysqli("localhost", "guan", "gqh123", "template_album");
mysqli_query($connection, "set names utf8");
	if ($connection->connect_errno) {
		echo "Sorry, this website is experiencing problems.";
		echo "Error: Failed to make a MySQL connection, here is why: \n";
   		echo "Errno: " . $connection->connect_errno . "\n";
   		echo "Error: " . $connection->connect_error . "\n";
   		exit;
	}

$query="SELECT * FROM kua WHERE item = '$praise'";

$result = $connection->query($query);
	
	// if( mysqli_num_rows($result)<=0 ){
	// 	echo  "No matching record found";
	// }
	$rows = $result->fetch_assoc();
	// for debugging, you can remove this line
	// print_r($rows);

	if ($rows) {
		// Create  session  variables
		// $_SESSION['login_user']=$praise;
		 $_SESSION['praise']='good';// Initializing Session 
		echo "口令正确";
		$sql="insert into praise(content,times,isright) values('$praise','$times',1)";
		$connection->query($sql);
		// header("location: black.php"); // Redirecting To Other Page
	} 
	else {
		$sql="insert into praise(content,times,isright) values('$praise','$times',0)";
		$connection->query($sql);
			$error = "口令错误";
			echo $error;
	}
	$connection->close();



?>