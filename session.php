<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = new mysqli("localhost", "guan", "gqh123","template_album");


session_start();// Starting Session
// Storing Session
if(!isset($_SESSION['login_user'])){
    header("location: loginpage.php");
}
?>