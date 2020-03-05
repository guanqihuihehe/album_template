<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
// $connection = new mysqli("localhost", "root", "","loginform");


session_start();// Starting Session
// Storing Session


if(!isset($_SESSION['praise'])){
	// $connection->close();
    header("location: index.php");
}
?>