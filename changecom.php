<?php
session_start(); // Starting Session

	
		$password3=$_GET['password3'];
		$connection = new mysqli("localhost", "guan", "gqh123", "template_album");
		mysqli_query($connection, "set names utf8");
		$sql="UPDATE kua SET item='$password3'";
		$connection->query($sql);
		echo  "修改口令成功";
		
		// header("location: mine.php"); 
	

?>