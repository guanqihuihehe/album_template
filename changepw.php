<?php
session_start(); // Starting Session
$error1=''; // Variable To Store Error Message
$error2=''; 
$error3='';
if(!$_SESSION['login_user'])
{
	header("location: loginpage.php");
}


	// if ( empty($_POST['password1'])) 
	// {
	// 	$error1 = "原密码不能为空";
	// }
	// 
	// else if ( empty($_POST['password2'])) 
	// {
	// 	$error2 = "新密码不能为空";
	// }
	// else
	// {
		// Define $username and $password
		$username=$_SESSION['login_user'];
		$password1=$_GET['password1'];
		$password2=$_GET['password2'];
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = new mysqli("localhost", "guan", "gqh123", "template_album");
		mysqli_query($connection, "set names utf8");
		if ($connection->connect_errno) {
			echo "Sorry, this website is experiencing problems.";
			echo "Error: Failed to make a MySQL connection, here is why: \n";
	   		echo "Errno: " . $connection->connect_errno . "\n";
	   		echo "Error: " . $connection->connect_error . "\n";
	   		exit;
		}
		// Sanitize the variables to protect MySQL injection attack for Security purpose
		$username = stripslashes($username);
		$password1 = stripslashes($password1);
		$username = $connection->real_escape_string($username);
		$password1 = $connection->real_escape_string($password1);
	
		// SQL query to fetch information of registerd users and finds user match.
		$query="select * from user where password='$password1' AND username='$username'";
		$result = $connection->query($query);
		if( !$result ){
	        die('mysql error');
		}
	//	if( mysqli_num_rows($result)<=0 ){
	//		echo  "No matching record found";
	//	}
	
		$rows = $result->fetch_assoc();
		// for debugging, you can remove this line
		// print_r($rows);
	
		if ($rows) {
			// Create  session  variables
			 // Initializing Session variable with user name
			// $_SESSION['login_default']=$username;
			$sql="UPDATE user SET password = '$password2' WHERE username='$username'";
			$connection->query($sql);
			echo "修改密码成功";
			$error1 = "修改密码成功";
			$error2 = "修改密码成功";
			// header("location: mine.php"); // Redirecting To Other Page
		} 
		else {
				echo "原密码不正确";
				$error1 = "原密码不正确";
		}
		// $connection->close(); // Closing Connection
	// }



	


?>