<?php
session_start(); // Starting Session
$error1=''; // Variable To Store Error Message
$error2='';
$error3='';

if (isset($_POST['submit'])) {
	if (empty($_POST['username']) ) {
		$error1 = "用户名不能为空";
	}
	else if (empty($_POST['password1']) ) {
		$error2 = "密码不能为空";
	}
	else
	{
		if($_POST['password2']!=$_POST['password1'])
		{
			$error3 = "两次输入的密码不一致";
		}
		else
		{
			// Define $username and $password
			$username=$_POST['username'];
			$password=$_POST['password1'];
			
			// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			$connection = new mysqli("localhost", "guan", "gqh123", "template_album");
			mysqli_query($connection, "set names utf8");
			$query="select * from user where  username='$username'";
			$result = $connection->query($query);
			$usernum=mysqli_num_rows($result);
			if( $usernum==0 ){
				$sql="insert into user(username,password) values('$username','$password')";
				$connection->query($sql);
				header('location:loginpage.php');
			}
			else
			{
				$error1 = "该用户名已存在";
			}
			
			
		}
	}
}
?>