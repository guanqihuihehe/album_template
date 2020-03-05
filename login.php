<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "用户名和密码不能为空";
}
else{
	// Define $username and $password
	$username=$_POST['username'];
	$password=$_POST['password'];

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
	$password = stripslashes($password);
	$username = $connection->real_escape_string($username);
	$password = $connection->real_escape_string($password);

	// SQL query to fetch information of registerd users and finds user match.
	$query="select * from user where password='$password' AND username='$username'";
	$result = $connection->query($query);
	if( !$result ){
        die('mysql error');
	}
//	if( mysqli_num_rows($result)<=0 ){
//		echo  "No matching record found";
//	}

	$rows = $result->fetch_assoc();
	// for debugging, you can remove this line
	print_r($rows);

	if ($rows) {
		// Create  session  variables
		$_SESSION['login_user']=$username; // Initializing Session variable with user name
		// $_SESSION['login_default']=$username;
		header("location: managerindex.php"); // Redirecting To Other Page
	} 
	else {
			$error = "用户名或者密码不正确";
	}
	$connection->close(); // Closing Connection
}
}
?>